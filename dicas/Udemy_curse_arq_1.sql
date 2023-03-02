/*
CREATE TABLE usr(
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
apelido CHAR(50) NOT NULL,
email VARCHAR(200) NOT NULL,
resumo TEXT null,
data_inicio DATETIME NOT NULL,
usr_status BOOLEAN DEFAULT FALSE,
peso FLOAT(5,2) DEFAULT 0,
PRIMARY KEY(id)
);

CREATE TABLE usr_end(
id int NOT NULL AUTO_INCREMENT,
id_usr int NOT NULL,
rua VARCHAR(200) NOT NULL,
numero INT DEFAULT 0,
complemento VARCHAR(200) NOT NULL,
cep CHAR(10) NOT NULL,
bairro VARCHAR(100) NOT NULL,
cidade VARCHAR(100) NOT NULL,
estado CHAR(2) NOT NULL,
PRIMARY KEY(id),
CONSTRAINT fk_id_para_usr FOREIGN KEY (id_usr) REFERENCES usr(id)

);

CREATE TABLE usr_login(
id INT not null AUTO_INCREMENT,
id_usr INT NOT NULL,
senha varchar(50) NOT NULL,
status_login BOOLEAN DEFAULT TRUE,
valida_login BOOLEAN DEFAULT FALSE,
PRIMARY KEY(id),
CONSTRAINT fk_id_para_login FOREIGN KEY (id_usr) REFERENCES usr(id)
);

CREATE TABLE usr_preferencias(
id INT not null AUTO_INCREMENT,
cor_fundo VARCHAR(20) NULL,
cor_banner VARCHAR(25) NULL,
alinhamento VARCHAR(15) NULL,
PRIMARY KEY(id)
);

*/
/* DROP TABLE usr, usr_end, usr_login; */ 
/*
INSERT INTO usr(id, nome, apelido, email, resumo, data_inicio, usr_status, peso)
VALUES (NULL, 'Adeilson Nogueira', 'adeilson', 'adeilson@adeilson.net', 'teste', NOW(),TRUE,  56.00 ); 

INSERT INTO usr_end(id, id_usr, rua, numero, complemento, cep, bairro, cidade, estado)
VALUES (NULL, 1, 'rua das coisas', 1, 'perto e longe', '74943512', 'buriti alegre', 'aparecida de goiânia', 'GO'); 

INSERT INTO usr_login(id, id_usr, senha, status_login, valida_login)
VALUES (NULL, 1, 'sdsdasdsdfdf', NULL, NULL); 

ALTER TABLE usr_preferencias ADD COLUMN id_usr INT,
ADD CONSTRAINT fk_preferencias_id_user
FOREIGN KEY(id_usr)
REFERENCES usr(id);



INSERT INTO usr_preferencias(id, cor_fundo, cor_banner, alinhamento, id_usr)
VALUES (NULL, NULL, NULL, 'center', 1); */
