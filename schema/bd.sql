--------------------------------------------------------
-- Estrutura da tabela `aluno`

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `dado` varchar(250) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

