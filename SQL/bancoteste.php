CREATE TABLE conta_corrente (
Banco int NOT NULL,
Pessoa bigint NOT NULL,
Numero int NOT NULL UNIQUE,

FOREIGN KEY (banco) REFERENCES banco (codigo),
FOREIGN KEY (pessoa) REFERENCES pessoas (cpf)

) DEFAULT charset = utf8;
