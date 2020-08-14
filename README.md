# Docker Php Build-in Server

This repo contains php script that works on php build in server (not nginx or apache)

## Installation

Install docker engine on the machine. After that run 

```bash
docker build -t  my-php-server .
docker run -d -p 80:80 my-php-server
```