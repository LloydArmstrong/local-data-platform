# Containerize Database with Webpage

This project is a basic minimalistic 3 container build that allows data from a database to get displayed on your browser's localhost. Refresh = New Data. 

The project uses 3 seperate Docker containers:

* **Nginx** - Used as the web-server to serve data to a webpage
* **MySQL** - The database holding 100 records of random data
* **PHP & PHP-FPM** - PHP was used as the language of choice in order to create a connection to the database and manipulate the data. PHP-FPM accepts the web server's request and compiles and executes the PHP script.

## Installation

Install Docker and Docker Compose on your local machine

```
sudo apt update && sudo apt install docker.io && sudo apt install docker-compose
```

## Usage

The repository contains the files needed to run the application. From within the root of the project directory, follow the below steps in order to run the environment.

#### Build the project

```
docker-compose up -d
```
In this step, Docker Compose builds the 3 containers in the background. (You can remove the `-d` flag to see detailed logs of the process.)

#### View the output

In any browser, got to `localhost:80` in order to see the database entry. 
