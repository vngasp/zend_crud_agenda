CRUD usando Zend Framework 1.11.11
================

Apenas para nível didático, desenvolvi uma agenda utilizando o Zend Framework.
O sistema é bem simples, tem apenas uma tabela que armazenas nome, sobrenome, email, fone, celular e a data da última alteração.
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

Podemos configurar a conexão com o banco de dados no zend de duas formas.

1º - A primeira seria usando o comando abaixo no Terminal(Linux ou Mac) ou no Prompt(Windows).

  ``` zf configure dbadapter "adapter=Pdo_Mysql&host=localhost&username=usuario&password=senha&dbname=agenda"  ```

2º - A segunda seria incluirmos as configurações abaixo no arquivo 'application.ini' dentro da pasta do projeto 'application/configs'

```
resources.db.adapter            = "Pdo_Mysql"
resources.db.params.host        = "localhost"
resources.db.params.username    = "usuario"
resources.db.params.password    = "senha"
resources.db.params.dbname      = "agenda"
```

---

### Tela principal


![alt text](https://raw.github.com/vngasp/zend_crud_agenda/master/screens/tela_principal.png "Table de dados")


### Tela de cadastro

![alt text](https://raw.github.com/vngasp/zend_crud_agenda/master/screens/tela_cadastro.png "Tela de cadastro")
