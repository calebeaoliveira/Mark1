set foreign_key_checks=0;


#
# //Criação da Tabela : tb_cardapio
#

CREATE TABLE `tb_cardapio` (
  `CDP_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CDP_DATA` date NOT NULL,
  PRIMARY KEY (`CDP_CODIGO`),
  UNIQUE KEY `CDP_DATA` (`CDP_DATA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_clientes
#

CREATE TABLE `tb_clientes` (
  `CLI_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_NOME` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_EMAIL` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_ENDERECO` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_NUMERO` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_COMPLEMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_BAIRRO` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_CIDADE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_UF` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_SEXO` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLI_TELEFONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`CLI_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_compras
#

CREATE TABLE `tb_compras` (
  `COM_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DTCOMPRA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `COM_DATACONF` date DEFAULT NULL,
  `COM_VALOR` double(10,2) DEFAULT NULL,
  `COM_OBSERVACAO` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FOR_CODIGO` int(11) DEFAULT NULL,
  `TPG_CODIGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`COM_CODIGO`),
  KEY `fk_compras` (`FOR_CODIGO`),
  KEY `fk_compras2` (`TPG_CODIGO`),
  CONSTRAINT `fk_compras` FOREIGN KEY (`FOR_CODIGO`) REFERENCES `tb_fornecedor` (`FOR_CODIGO`),
  CONSTRAINT `fk_compras2` FOREIGN KEY (`TPG_CODIGO`) REFERENCES `tb_tipopagto` (`TPG_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_fornecedor
#

CREATE TABLE `tb_fornecedor` (
  `FOR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `FOR_NOME` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FOR_CNPJ` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FOR_TELEFONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FOR_OBSERVACAO` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`FOR_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_itenscardapio
#

CREATE TABLE `tb_itenscardapio` (
  `ICP_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CDP_CODIGO` int(11) NOT NULL,
  `PRA_CODIGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ICP_CODIGO`,`CDP_CODIGO`),
  KEY `fk_itenscardapio` (`CDP_CODIGO`),
  KEY `fk_itenscardapio2` (`PRA_CODIGO`),
  CONSTRAINT `fk_itenscardapio` FOREIGN KEY (`CDP_CODIGO`) REFERENCES `tb_cardapio` (`CDP_CODIGO`),
  CONSTRAINT `fk_itenscardapio2` FOREIGN KEY (`PRA_CODIGO`) REFERENCES `tb_pratos` (`PRA_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_itenscompras
#

CREATE TABLE `tb_itenscompras` (
  `ITC_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `COM_CODIGO` int(11) NOT NULL,
  `ITC_QTDE` double(10,3) DEFAULT NULL,
  `ITC_VRUNITARIO` double(10,2) DEFAULT NULL,
  `PCO_CODIGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ITC_CODIGO`,`COM_CODIGO`),
  KEY `fk_itenscompras` (`COM_CODIGO`),
  KEY `fk_itenscompras2` (`PCO_CODIGO`),
  CONSTRAINT `fk_itenscompras` FOREIGN KEY (`COM_CODIGO`) REFERENCES `tb_compras` (`COM_CODIGO`),
  CONSTRAINT `fk_itenscompras2` FOREIGN KEY (`PCO_CODIGO`) REFERENCES `tb_procompras` (`PCO_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_itensvenda
#

CREATE TABLE `tb_itensvenda` (
  `ITV_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `VEN_CODIGO` int(11) NOT NULL,
  `ITV_QTDE` double(10,3) DEFAULT NULL,
  `ITV_VRUNITARIO` double(10,2) DEFAULT NULL,
  `PRO_CODIGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ITV_CODIGO`,`VEN_CODIGO`),
  KEY `fk_itensvenda` (`VEN_CODIGO`),
  KEY `fk_itensvenda2` (`PRO_CODIGO`),
  CONSTRAINT `fk_itensvenda` FOREIGN KEY (`VEN_CODIGO`) REFERENCES `tb_vendas` (`VEN_CODIGO`),
  CONSTRAINT `fk_itensvenda2` FOREIGN KEY (`PRO_CODIGO`) REFERENCES `tb_produtos` (`PRO_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_login
#

CREATE TABLE `tb_login` (
  `LOG_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `LOG_NOME` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOG_LOGIN` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOG_SENHA` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOG_DTCADASTRO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`LOG_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_login VALUES('1', 'administrador', 'admin', '212804', '2019-11-09 08:45:32')
;

#
# //Criação da Tabela : tb_pratos
#

CREATE TABLE `tb_pratos` (
  `PRA_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PRA_DESCRICAO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`PRA_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_procompras
#

CREATE TABLE `tb_procompras` (
  `PCO_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PCO_DESCRICAO` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PCO_PRECOCUSTO` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`PCO_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_produtos
#

CREATE TABLE `tb_produtos` (
  `PRO_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_DESCRICAO` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRO_PRECOVENDA` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`PRO_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_tipopagto
#

CREATE TABLE `tb_tipopagto` (
  `TPG_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TPG_DESCRICAO` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`TPG_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_vendas
#

CREATE TABLE `tb_vendas` (
  `VEN_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `VEN_OBSERVACAO` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VEN_VALOR` double(10,2) DEFAULT NULL,
  `VEN_DATA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CLI_CODIGO` int(11) DEFAULT NULL,
  `TPG_CODIGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`VEN_CODIGO`),
  KEY `fk_vendas` (`CLI_CODIGO`),
  KEY `fk_vendas2` (`TPG_CODIGO`),
  CONSTRAINT `fk_vendas` FOREIGN KEY (`CLI_CODIGO`) REFERENCES `tb_clientes` (`CLI_CODIGO`),
  CONSTRAINT `fk_vendas2` FOREIGN KEY (`TPG_CODIGO`) REFERENCES `tb_tipopagto` (`TPG_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

#
# //Dados a serem incluídos na tabela
#

