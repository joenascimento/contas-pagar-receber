# contas-pagar-receber
Contas a Pagar e Contas a Receber desenvolvido com CakePHP 4.0.1

Para acessar o ambiente de desenvolvimento com o docker, faça os passos a seguir:

## Requisitos mínimos

 - Docker 18.09.7
 - Docker-compose 1.21.0

## Mac-OS / Linux
```
$ cd .docker
$ docker-compose up --build
$ docker exec -ti php_contas bash
$ composer install
```

> Caso seja no Linux deve executar os comandos do Docker como sudo 
> ex: $ sudo docker-compose up
>
> Após feito o build das imagens Docker, será apenas iniciar os serviços web/php/mysql para desenvolvimento da aplicação
> com o `docker-compose up`.

Os comandos do `composer install` do php só é necessário na primeira vez.
