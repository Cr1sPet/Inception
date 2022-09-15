CONFIG = "srcs/docker-compose.yml"

DATA = "${HOME}/data"
WORDPRESS_DATA = ${DATA}/wp
MARIADB_DATA = ${DATA}/db


.PHONY: all build up down reset help


all: build up

build:
	mkdir -p ${WORDPRESS_DATA}
	mkdir -p ${MARIADB_DATA}
	docker compose -f ${CONFIG} build --no-cache

up:
	docker compose -f ${CONFIG} up -d

down:
	docker compose -f $(CONFIG) down

clean:
	-docker stop $(shell docker ps -qa)
	-docker rm $(shell docker ps -qa)
	-docker rmi -f $(shell docker images -qa)
	-docker volume rm $(shell docker volume ls -q)
	-docker network rm $(shell docker network ls -q)

fclean: clean
	@sudo rm -rf ${WORDPRESS_DATA}/*
	@sudo rm -rf ${MARIADB_DATA}/*