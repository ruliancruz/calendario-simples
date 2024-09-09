<div align="center">
  <h1>Calendário Simples</h1>
  <div>
    <img src="https://img.shields.io/static/v1?label=php&message=8.3.0&color=purple&style=for-the-badge&logo=php"/>
    <img src="https://img.shields.io/static/v1?label=cypress&message=13.14.2&color=GREEN&style=for-the-badge&logo=cypress&logoColor=white"/>
    <img src="https://img.shields.io/static/v1?label=tests&message=4&color=green&style=for-the-badge"/>
    <img src="https://img.shields.io/static/v1?label=status&message=finished&color=green&style=for-the-badge"/>
    <img src="https://img.shields.io/static/v1?label=license&message=unlicense&color=green&style=for-the-badge"/>
  </div><br>

  Simple and a bit overengineered calendar web page
</div>


## Table of Contents

:small_blue_diamond: [What The Application Can Do](#what-the-application-can-do)

:small_blue_diamond: [Dependencies](#dependencies)

:small_blue_diamond: [How to Run the Application](#how-to-run-the-application)

:small_blue_diamond: [How to Run Tests](#how-to-run-tests)

## What the Application Can Do

:heavy_check_mark: Show a page with a calendar of the current month

:heavy_check_mark: Show current year and time

:heavy_check_mark: Show greeting message

### Application Image

![image](https://github.com/user-attachments/assets/f6e07fb0-68ff-4d78-b04a-c52e70a377dc)


## Dependencies

This application was made to run with [**Docker**](https://www.docker.com/), and the how to run instructions is written to be used with it, so just use Docker, because everything you need will be installed on the containers. But if you want to run this project without Docker anyway, you can use a [**WampServer**](https://www.wampserver.com/) or similar:

:warning: [PHP 8.3](https://www.php.net/)

:warning: [Apache](https://www.apache.org/)

:warning: [Cypress 13.14.2](https://www.cypress.io/)

## How to Run the Application

After configuring Docker, clone this repository:

```
git clone https://github.com/ruliancruz/calendario-simples.git
```

After that, all you need to do to run the application is starting Docker containers from application:

```
docker compose up --build
```

It will start test container too, if want only the main application, run it instead:

```
docker compose up --build app
```

Now you can access the application through http://localhost:8000/ route.

## How to Run Tests

This project has system tests that is run on [**Cypress**](https://www.cypress.io/).

It's recommended to run the tests inside the test container on Docker. To do it you just need to run:

```
docker compose up --build cypress
```

When running it very often, you may come across the max depth exceeded error, you can solve it cleaning your docker image list, so if it happens, try to run these commands:

```
docker image prune
```

Or:

```
docker rmi -f $(docker images -q)
```