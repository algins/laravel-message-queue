# laravel-message-queue
Simple message queuing application built on the Laravel framework.

[![Actions Status](https://github.com/algins/laravel-message-queue/workflows/CI/badge.svg)](https://github.com/algins/laravel-message-queue/actions)

### Requirements:
* Composer
* Git
* Make
* PHP ^8.0
* Node.js
* SQLite
* Redis

### Setup:
```sh
$ git clone https://github.com/algins/laravel-message-queue.git
$ cd laravel-message-queue
$ make setup
```

### Run application:
```sh
$ make start # Open http://localhost:8000
```

### Run worker:
```sh
$ make work
```
