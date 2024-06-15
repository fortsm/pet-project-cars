# Тестовое задание

## Установка

- [Установка Docker](https://docs.docker.com/engine/install/ubuntu/#install-using-the-repository).
- Скопировать .env файл...

```sh
cp .env.example .env
```

- установить зависимости composer

```sh
сomposer install
```

- запуск контейнера

```sh
./vendor/bin/sail up -d
```

- запуск миграций
```
./vendor/bin/sail artisan migrate
```

- остановка контейнеров

```
./vendor/bin/sail down
```
