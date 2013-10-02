CRUD usando Zend Fremawork 1.11.11
================

Apenas para nível didático desenvolvi uma agenda utilizando o Zend Framework.
O sistema e bem simples tem apenas um tabela que armazenas o nome, sobrenome, email, fone, celular e a data da alteração.
Os dados são apresentados em uma table, usando o Twitter Bootstrap para fazer a confguração CSS.

---

## Script de criação do banco de dados


```MySql
    CREATE DATABASE agenda

    CREATE TABLE IF NOT EXISTS contato(
	
    id 			    INT NOT NULL AUTO_INCREMENT 	 ,
    nome		    VARCHAR(200) NOT NULL     		 ,
    sobrenome		VARCHAR(200) NOT NULL		       ,
    email		    VARCHAR(200) NOT NULL		       ,
    fone		    VARCHAR(14)  NOT NULL		       ,
    celular		  VARCHAR(14) 			             ,
    datacad		  timestamp
    
    PRIMARY KEY (id)
)
ENGINE = InnoDB

```

---

## Configurando a conexão

Podemos configura de duas forma a conexão no Zend Framework.

1º - Via comando usando o Terminal(Linux ou Mac) e o CMD(Windows).

  ``` zf configure dbadapter "adapter=Pdo_Mysql&host=localhost&username=usuario&password=senha&dbname=agenda"  ```

2º - Outra e forma e alteramos o arquivo 'application.ini' dentro da pasta do projeto 'application/configs'

```
resources.db.adapter            = "Pdo_Mysql"
resources.db.params.host        = "localhost"
resources.db.params.username    = "usuario"
resources.db.params.password    = "senha"
resources.db.params.dbname      = "agenda"
```

> ATENÇÃO - configurar o 'username' e o 'password' confirme suas configurações

---
