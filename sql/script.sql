CREATE DATABASE `controleFrota`;

CREATE TABLE IF NOT EXISTS `controlefrota`.`veiculo`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `MOTORIZACAO` varchar(60) NULL,
  `PLACA` varchar(60) NULL,
  `NOME` varchar(60) NULL,
  `CHASSI` varchar(60) NULL,
  `VEL_MAXIMA` int(60) NULL,
  `COR` varchar(60) NULL,
  `ESPECIE` varchar(60) NULL,
  `COMBUSTIVEL` varchar(60) NULL,
  `TIPO` varchar(60) NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `controlefrota`.`funcionario`  (
  `CODFUNCIONARIO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(60) NULL,
  `CPF` varchar(60) NULL,
  `FUNCAO_ID` varchar(60) NULL,
  `INCORPORACAO` date NULL,
  `FUNCIONARIOATIVO` varchar(5) NULL,
  `TEL` varchar(20) NULL,
  `ENDERECO` varchar(70) NULL,
  `NASCIMENTO` date NULL,
  PRIMARY KEY (`CODFUNCIONARIO`)
);

CREATE TABLE IF NOT EXISTS `controlefrota`.`funcao`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(60) NULL,
  `HRSEMANAL` varchar(10) NULL,
  `CONTRATACAO` varchar(20) NULL,
  PRIMARY KEY (`CODFUNCAO`)
);

CREATE TABLE IF NOT EXISTS `controlefrota`.`rastreamento`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(60) NULL,
  `PLACA` varchar(20) NULL,
  `VLMAX` int NULL,
  `VLREGISTRADA` int NULL,
  `DTHR` datetime NULL,
  `LATITUDE` decimal(10, 10) NULL,
  `LONGETUDE` decimal(10, 10) NULL,
  PRIMARY KEY (`ID`)
);


INSERT INTO funcao ( NOME, HRSEMANAL, CONTRATACAO )
VALUES
	( 'VENDEDOR', '40', 'PJ' ),
	( 'CARRETEIRO', '40', 'CLT' ),
	( 'CARRETEIRO', '40', 'PJ' ),
	( 'ENTREGADOR','40','CLT' ),
	( 'ENTREGADOR', '40', 'PJ' ),
	( 'SERVICOS GERAIS','40','CLT' );


/*Inserts gerados em multiplos scripts SQL por serem geracoes automaticas de softwares de gerenciamento de banco de dados */
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (1, 'Joshua Smith', '81414559743', '3', '2018-05-06', 'S', '(151) 843 0812', '592 39 William IV St, Charing Cross', '1996-02-02');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (2, 'Peggy Hamilton', '40642246511', '4', '2022-06-06', 'S', '(116) 496 3161', '370 Narborough Rd', '2000-01-01');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (3, 'Josephine Mcdonald', '08712865029', '5', '2007-01-09', 'S', '5454 020284', '803 Narborough Rd', '1998-11-30');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (4, 'Joanne Schmidt', '14077916133', '6', '2012-07-11', 'S', '5285 207936', '120 Papworth Rd, Trumpington', '1999-05-15');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (5, 'John Hicks', '16477078620', '3', '2020-09-20', 'S', '(161) 013 7671', '603 Spring Gardens', '2000-05-28');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (6, 'Timothy Reynolds', '19520233099', '1', '2018-09-30', 'S', '7082 426697', '654 Papworth Rd, Trumpington', '1999-01-11');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (7, 'Wendy Gordon', '82913816755', '5', '2015-05-27', 'S', '5009 457770', '233 Maddox Street', '1997-04-18');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (8, 'Joshua Anderson', '17348809949', '4', '2014-11-01', 'S', '(1865) 04 9198', '833 Osney Mead', '1999-01-12');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (9, 'Beverly Brooks', '92901779233', '2', '2015-11-18', 'S', '7673 438953', '194 The Pavilion, Lammas Field, Driftway', '1998-08-12');
INSERT INTO `controlefrota`.`funcionario` (`CODFUNCIONARIO`, `NOME`, `CPF`, `FUNCAO`, `INCORPORACAO`, `FUNCIONARIOATIVO`, `TEL`, `ENDERECO`, `NASCIMENTO`) VALUES (10, 'Justin Anderson', '20642257995', '3', '2014-11-07', 'S', '7569 190110', '828 Spring Gardens', '1995-01-04');

INSERT INTO veiculo ( MOTORIZACAO, PLACA, NOME, CHASSI, VLMAX, COR, ESPECIE, COMBUSTIVEL, TIPO )
VALUES
	( '1.6 TURBO', 'NEJ-8567', 'JETTA', '38782257680', 110, 'PRATA', 'PARTICULAR', 'FLEX', 'FRETE' ),
	( '1.0 TURBO', 'LVN-1309', 'ONIX', '17008683349', 110, 'PRATA', 'PARTICULAR', 'FLEX', 'FRETE' ),
	( 'D16', 'MON-8644', 'FH 750', '08025728631', 80, 'PRETO', 'CARGA', 'DIESEL', 'FRETE' ),
	( 'D16', 'JVE-1878', 'FH 750', '74227469457', 80, 'BRANCO', 'CARGA', 'DIESEL', 'FRETE' ),
	( 'DC 16 17', 'JVB-2719', 'R620', '94442001930', 90, 'MARROM', 'CARGA', 'DIESEL', 'FRETE' ),
	( 'DC 16 17', 'MEJ-9750', 'R620', '42403742906', 90, 'PRETO', 'CARGA', 'DIESEL', 'FRETE' ),
	( 'Paccar MX-13', 'LWG-1559', 'DAF 520', '85532969315', 90, 'PRATA', 'CARGA', 'DIESEL', 'FRETE' ),
	( 'Paccar MX-13', 'KBF-6292', 'DAF 520', '85222331690', 90, 'VERMELHO', 'CARGA', 'DIESEL', 'FRETE' ),
	( 'Paccar MX-13', 'JTO-1866', 'DAF 520', '30554714371', 90, 'AZUL', 'CARGA', 'DIESEL', 'FRETE' )
