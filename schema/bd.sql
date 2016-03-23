CREATE TABLE Aluno(
    prontuario int PRIMARY KEY,
    nome varchar(200) NOT NULL,
    curso varchar(200) NOT NULL,
    endereco varchar(200),
	cidade varchar(100),
    estado varchar(2),
    telefone int,
    celular int,
    email varchar(200),
    foto varchar(300)
)

CREATE TABLE Historico(
    id int PRIMARY KEY AUTO_INCREMENT,
    prontuario int,
    acao varchar(20),
    hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (prontuario) REFERENCES aluno (prontuario)
)

