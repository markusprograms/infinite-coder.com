# [infinite-coder.com](https://infinite-coder.com/)
My personal website 🔥
Currently work in progress. 

## Build
### Prerequisities
 - [Docker engine](https://docs.docker.com/engine/install/)
 - [Docker compose](https://docs.docker.com/compose/install/linux/)

### Run
To launch the Docker compose, simply run `docker compose up`. Then, open `http://localhost:8080/` in your browser to view the page. 

### Clean cache
After modifying any files, it is necessary to clean the cache of the previously built Docker image to update the modified files. This can be done via running `docker compose build --no-cache`. 