1. Requisitos básicos (local):

    PHP (via XAMPP no Windows é o mais simples).
    PostgreSQL (ex.: via instalador pgAdmin/Postgres, já está no seu caso).
    Editor (VSCode).
    Navegador.

    Se usar XAMPP + PostgreSQL: mantenha Apache ativo pelo XAMPP e o PostgreSQL rodando (pgAdmin/serviço).

---------------------------------

2. Estrutura de pastas:

    trabalhoFinal/
    ├─ public/
    │  ├─ index.php
    │  ├─ obrigado.php
    │  ├─ css/
    │  │   └─ style-avaliacao.css
    |  |   └─ style-obrigado.css
    |  |   └─ style.css
    │  └─ js/
    │      └─ redirecionar.js
    ├─ src/
    │  ├─ avaliacao.php
    │  ├─ envia_dados.php
    │  ├─ consulta_pergunta.php
    │  ├─ funcoes.php
    │  ├─ db.php
    │  └─ config.php
    └─ sql/
    └─ schema.sql

---------------------------------

3. Configuração central do Banco de Dados:

    <?php

        define('DB_HOST','localhost'); 
        define('DB_PORT','5432'); 
        define('DB_USER','postgres'); 
        define('DB_PASS','postgres'); 
        define('DB_NAME','db');

    ?>

---------------------------------   

4. Configuração de conexão com o Banco de Dados:

    <?php

        $connectionString = 'host='.DB_HOST.
                                " port=".DB_PORT.
                                " dbname=".DB_NAME.
                                " user=".DB_USER.
                                " password=".DB_PASS;

        /* Estabelecer a conexão */
        $condb = pg_connect($connectionString);
        if(!$condb) {
            echo "Erro ao conectar ao banco de dados.";
        }

    ?>

--------------------------------- 

5. Script SQL para aplicar no banco(schema.sql):

    CREATE TABLE setores (
    id SERIAL PRIMARY KEY,
    nome TEXT NOT NULL
    );

    CREATE TABLE dispositivos (
    id SERIAL PRIMARY KEY,
    nome_dispositivo VARCHAR(100) NOT NULL,
    status BOOLEAN NOT NULL DEFAULT TRUE
    );

    CREATE TABLE perguntas (
    id SERIAL PRIMARY KEY,
    texto_pergunta TEXT NOT NULL,
    status BOOLEAN NOT NULL DEFAULT TRUE
    );

    CREATE TABLE avaliacoes (
    id SERIAL PRIMARY KEY,
    id_setor INT REFERENCES setores(id),
    id_pergunta INT REFERENCES perguntas(id),
    id_disp INT REFERENCES dispositivos(id),
    nota INT CHECK (nota BETWEEN 0 AND 10),
    feedback TEXT,
    data_hora TIMESTAMP NOT NULL DEFAULT NOW()
    );

    INSERT INTO setores (nome) VALUES ('Setor Padrão');
    INSERT INTO dispositivos (nome_dispositivo) VALUES ('Totem Principal'); 

---------------------------------

