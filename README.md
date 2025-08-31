
---

## 🐳 Running the Room Locally Using Docker

This room can be played locally using Docker. Follow the steps below to build and run the vulnerable machine on your own system.

---

### 🔧 Prerequisites

Ensure you have the following installed:

* [Docker](https://docs.docker.com/get-docker/)
* [Git](https://git-scm.com/) (optional if cloning from GitHub)

---

### 📥 Step 1: Download the Source Code

If you received a `.zip`, extract it.

If hosted on GitHub:

```bash
git clone https://github.com/0x00315732/musical-engine.git
cd musical-engine
```

---

### 🏗️ Step 2: Build the Docker Image

Run the following command from the root directory of the project:

```bash
docker build -t vuln-room .
```

This command builds the Docker image and tags it as `vuln-room`.

---

### ▶️ Step 3: Run the Container

Now launch the container using:

```bash
docker run -d -p 80:80 -p 22:22 -p 22222:22222 vuln-room
```

Explanation:

* `-d` runs the container in detached mode
* `-p 80:80` exposes the web service
* `-p 22:22` opens standard SSH port
* `-p 22222:22222` opens a custom port (optional depending on challenge)

---

### 🕹️ Step 4: Start Playing!

Once running, you can access the challenge on your **local machine**:

* 🌐 Web: `http://localhost`
* 🖥️ SSH: `ssh user@localhost -p 22` or `ssh user@localhost -p 22222`

> Default credentials:
> `kostanai:m31an13`

---

### 🛑 Stopping the Container

To stop and remove the container:

```bash
docker ps       # Get the container ID
docker stop <container_id>
docker rm <container_id>
```

Or stop all at once:

```bash
docker stop $(docker ps -q)
```

---

### 🧹 Optional: Clean Up Docker

To remove the image completely:

```bash
docker rmi vuln-room
```

---
