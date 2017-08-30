# Swarm Environment for Developers

A set of Docker containers for Swarm developers.

# Installation

For Ubuntu users:

 1. Install Docker. Follow the instructions on [the Docker Website](http://docs.docker.com/engine/installation/ubuntulinux/).
 2. Install the latest [docker-compose](https://github.com/docker/compose/releases).
 3. Copy `volumes.yml.dist` to `volumes.yml` with your own settings.
 4. Run `docker-compose up -d` on the `docker-Swarm` folder.
 5. Access `localhost`, you should see a `phpinfo();` output.

For Windows/OSX users:
    0. docker-machine create --virtualbox-disk-size 40000 --driver virtualbox docker-example

    1. Install [docker-toolbox](https://www.docker.com/docker-toolbox). It already comes with Docker and docker-compose pre-bundled:
        - On `OSX` you can `brew install Caskroom/cask/dockertoolbox`.
    1. Copy `volumes.yml.dist` to `volumes.yml` with your own settings.
    1. If you are on `OSX`:
        1. Install [docker-machine-nfs](https://github.com/adlogix/docker-machine-nfs).
        1. Execute "Docker Quickstart Terminal.app" to ensure VM is booted.
        1. Execute `eval "$(docker-machine env default)"`.
		1. Execute `docker-machine-nfs default --nfs-config="-alldirs -maproot=0" --shared-folder="<directory containing all projects>"` (you only need to execute this once).
    1. Run `docker-compose up -d` on the `docker-Swarm` folder and go for a coffee.
    1. Access `localhost`, you should see a `phpinfo();` output.

# Adding Projects

 1. Add the project folder mapping to the `volumes.yml` file.
 2. Create a new `docker-Swarm/etc/nginx/sites/yoursite.yml`. See the default
    for an example.

# Troubleshooting

> I get the error `Cannot connect to the Docker daemon. Is the docker daemon running on this host?` when running docker.

Your user is not on the docker group, so it cannot execute docker without sudo. Add your user to the group using `sudo usermod -aG docker myuser` (replace "myuser" with your own linux username) then restart your machine.

# EXAMPLE SCALE CONTAINERS

1. Execute `docker-compose scale web-corporate=8` in console.
2. Execute `docker-compose scale web-api=8` in console.
