# SOLID

Solid principles by Gustavo Morais.

### Docker Commands
```
sudo code --user-data-dir .

$ docker build -t eg_sshd .

$ docker run -d -P --name test_sshd eg_sshd 

$ docker port test_sshd 22

sudo docker inspect -f '{{.Name}} - {{.NetworkSettings.IPAddress }}' $(sudo docker ps -aq)

$ ssh root@192.168.1.2 -p 49154

# inform the password configured at Dockerfile

/etc/init.d/docker status

sudo docker container stop $(sudo docker container ls -aq)

sudo docker container rm $(sudo docker container ls -aq)

sudo docker image rm -f $(sudo docker image ls -aq)

sudo docker run -it -d -p 27017:27017 --expose=8080 --name=gustest5 gustavo

sudo docker exec -it gustest5 bash

sudo docker run --rm -it gustavo /bin/sh

sudo docker run --rm -it gustavo bash

docker network rm $(docker network ls -q)

```