CREATE TABLE `aluno` (
  `prontuario` int(11) PRIMARY KEY NOT NULL,
  `nome` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `cartao` varchar(150) NOT NULL
) 

CREATE TABLE `registro` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `dado` varchar(250) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

INSERT INTO `aluno` (`prontuario`, `nome`, `curso`, `endereco`, `cidade`, `estado`, `telefone`, `celular`, `email`, `foto`, `cartao`) VALUES
(1420267, 'Juliano', 'ADS', 'Av. 2', 'Hortolândia', 'SP', '9999-9999', '9999-9999', 'juliano@acessaifsp.com.br', 'img/avatar.jpg', '');

INSERT INTO `registro` (`id`, `dado`, `hora`) VALUES
('', ' 1420267\n', '2016-06-04 14:01:05');