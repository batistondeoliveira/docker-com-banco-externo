# docker-com-banco-externo
Simples exemplo de conexão com banco de dados MySQL externo ao container

Configurações necessárias
------------

1. Alterar o bind-address do MySQL

a-) MySQL
```
vim /etc/mysql/mysql.conf.d/mysqld.cnf
```
b-) MariaDB
```
vim /etc/mysql/mariadb.conf.d/50-server.cnf 
```
c-) Red Hat / CentOS`
```
vim /etc/my.cnf
```

- Dentro do arquivo, procurar por:
bind-address = 127.0.0.1
- E mudar para o gateway do doker:
bind-address = 172.17.0.1,172.17.0.1
- Reiniciar o Mariadb (ou Mysql):
sudo systemctl restart mysqld

Configurações executar
------------
Na pasta root do projeto execute:
```
docker-compose up -d
```

**Acesse:** http://localhost:8080
