# Glaucius Personal Site Repo
Welcome to my personal site code repo, please, feel free to visit my [personal site](http://glaucius.moonops.com.br)

This code and all stack was created to provide me a personal webpage, provisiong it by Docker, with all flow or pipeline, build, deploy & update code.

It's simple if you want to create your own image, in this case I'm using apache-php to provide the base image.

So, no more talking, lets get hands dirty.

1 - Clone this repo

git clone https://github.com/glaucius/web

2 - Configure your application and your Dockerfile, according to your needs

edit files  Dockerfile and other

3 - Build your imagem

    `docker build -t yourimage:tag`

3.1 - Build 



4 - Run your image

    `docker run yourimage:tag -p 80:80 -d --name some-container-name`


Well, you can see my webpage  [here](http://glaucius.moonops.com.br).

Let me know if need any help, feel free to use this code.

Bye !!!!