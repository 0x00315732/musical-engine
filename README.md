docker build -t vuln-room .
docker run -d -p 80:80 -p 22:22 -p 22222:22222 vuln-room
