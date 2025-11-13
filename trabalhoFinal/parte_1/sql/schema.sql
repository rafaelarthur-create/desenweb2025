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