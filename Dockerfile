FROM ubuntu:24.04

# Install SSH + xinetd
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        openssh-server xinetd && \
    rm -rf /var/lib/apt/lists/*

# Configure SSHD to listen on port 22222 (real service)
RUN sed -i 's/^#Port 22/Port 22222/' /etc/ssh/sshd_config

# Create xinetd config for fake SSH banner on port 22
RUN echo 'service ssh' > /etc/xinetd.d/ssh && \
    echo "{" >> /etc/xinetd.d/ssh && \
    echo "    disable = no" >> /etc/xinetd.d/ssh && \
    echo "    socket_type = stream" >> /etc/xinetd.d/ssh && \
    echo "    wait = no" >> /etc/xinetd.d/ssh && \
    echo "    user = root" >> /etc/xinetd.d/ssh && \
    echo "    port = 22" >> /etc/xinetd.d/ssh && \
    echo "    type = UNLISTED" >> /etc/xinetd.d/ssh && \
    echo "    protocol = tcp" >> /etc/xinetd.d/ssh && \
    echo "    server = /bin/bash" >> /etc/xinetd.d/ssh && \
    echo "    server_args = -c 'echo \"SSH-2.0-OpenSSH_7.2p2 Ubuntu-4ubuntu2.8\"; exec socat STDIO,raw,echo=0 TCP:127.0.0.1:22222'" >> /etc/xinetd.d/ssh && \
    echo "}" >> /etc/xinetd.d/ssh

RUN useradd -ms /bin/bash kostanai

RUN echo "root:rootpassword3CaqmEtk#1337#@" | chpasswd 
RUN echo "kostanai:m31an13" | chpasswd 

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        build-essential \
        wget \
        libpam0g-dev \
        libselinux1-dev \
        zlib1g-dev \
        pkg-config \
        libssl-dev \
        git \
        ca-certificates && \
    rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    nano \
    libapache2-mod-php \
    && rm -rf /var/lib/apt/lists/*

RUN echo "ServerTokens Prod" >> /etc/apache2/conf-available/security.conf && \
    echo "ServerSignature Off" >> /etc/apache2/conf-available/security.conf && \
    a2enconf security

WORKDIR /opt
COPY sudo-1.9.16p2.tar.gz /opt/
RUN tar xzf sudo-1.9.16p2.tar.gz && \
    cd sudo-1.9.16p2 && \
    ./configure --disable-gcrypt --prefix=/usr && make && make install

RUN chmod go-x /usr/bin/chfn
RUN chmod go-x /usr/bin/passwd
RUN chmod go-x /usr/bin/chsh
RUN chmod go-x /usr/bin/mount
RUN chmod go-x /usr/bin/newgrp
RUN chmod go-x /usr/bin/gpasswd
RUN chmod go-x /usr/bin/umount
RUN chmod go-x /usr/bin/su
RUN chmod go-x /usr/lib/openssh/ssh-keysign

COPY templates/ /var/www/html/
COPY readme /root/

COPY root.txt /root/
COPY user.txt /home/kostanai/

RUN chown kostanai:kostanai /home/kostanai/user.txt
RUN chown root:root /root/root.txt

RUN rm -f /var/www/html/index.html

EXPOSE 80 22 22222

WORKDIR /home/kostanai

CMD ["bash", "-c", "service ssh start && apache2ctl -D FOREGROUND"]
