# Simple Task Manager

## Dependencies

To run the application you will require a container engine like [docker](https://docs.docker.com/get-docker/) or [podman](https://podman.io/) installed.

## Installation

1. Download or clone this repository.
2. Within project folder run `start.sh` and wait for it to build the image and launch it in container environment.
3. Application should be available at `http://localhost:8080`.

Alternatively you can build and run the application manually by executing following instructions:

From within the project folder execute `docker build -t taskman/demo .` and wait for it to finish.

Then follow with `docker run --rm -itd -p 8080:80 taskman/demo:latest` to launch the application container.

## Authentication

By default application has two users `user1` and `user2`. Both have identical password: `secret`.
