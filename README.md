```shell
 % docker-compose up -d --build

 % docker compose ps
NAME               IMAGE           COMMAND                  SERVICE     CREATED          STATUS         PORTS
laravel-app        laravel12-app   "docker-php-entrypoi…"   app         22 seconds ago   Up 5 seconds   9000/tcp
laravel-mysql-db   mysql:8.0       "docker-entrypoint.s…"   mysql-db    22 seconds ago   Up 5 seconds   0.0.0.0:3306->3306/tcp, 33060/tcp
laravel-nginx      nginx:stable    "/docker-entrypoint.…"   webserver   22 seconds ago   Up 5 seconds   0.0.0.0:8000->80/tcp

% docker compose exec app bash
root@c337f419db68:/var/www/html# laravel
Laravel Installer 5.15.0

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
      --silent          Do not output any message
  -q, --quiet           Only errors are displayed. All other output is suppressed
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  completion  Dump the shell completion script
  help        Display help for a command
  list        List commands
  new         Create a new Laravel application
```
