-- baza de date php_magazin

-- tabela admin
CREATE TABLE IF NOT EXISTS admin (
nume varchar(30) collate latin1_general_ci NOT NULL,
parola varchar(35) collate latin1_general_ci NOT NULL,
acces tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- tabela categorii
CREATE TABLE IF NOT EXISTS categorii (
cat_id smallint(4) NOT NULL auto_increment,
cat_parinte_id smallint(4) NOT NULL,
cat_nume varchar(50) collate latin1_general_ci NOT NULL,
cat_descriere varchar(255) collate latin1_general_ci NOT NULL,
cat_poza varchar(36) collate latin1_general_ci NOT NULL,
PRIMARY KEY(cat_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- tabela comenzi
CREATE TABLE IF NOT EXISTS comenzi (
com_id smallint(5) NOT NULL auto_increment,
com_data varchar(20) collate latin1_general_ci NOT NULL,
com_status enum('Noua','Achitata','Trimisa','Finalizata','Anuntata') collate latin1_general_ci NOT NULL DEFAULT 'Noua',
com_nume varchar(50) collate latin1_general_ci NOT NULL,
com_adresa varchar(255) collate latin1_general_ci NOT NULL,
com_tel varchar(20) collate latin1_general_ci NOT NULL,
com_oras varchar(30) collate latin1_general_ci NOT NULL,
com_cod_postal varchar(10) collate latin1_general_ci NOT NULL,
com_comentarii varchar(255) collate latin1_general_ci NOT NULL,
PRIMARY KEY(com_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- tabela cos
CREATE TABLE IF NOT EXISTS cos (
cos_id smallint(5) NOT NULL auto_increment,
pr_id smallint(4) NOT NULL,
cos_cantitate smallint(4) NOT NULL,
cos_session_id varchar(32) collate latin1_general_ci NOT NULL,
cos_data varchar(20) collate latin1_general_ci NOT NULL,
PRIMARY KEY(cos_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- tabela pr_comandate
CREATE TABLE IF NOT EXISTS pr_comandate (
com_id smallint(4) NOT NULL,
pr_id smallint(4) NOT NULL,
com_cant smallint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- tabela produse
CREATE TABLE IF NOT EXISTS produse (
pr_id smallint(5) NOT NULL auto_increment,
cat_id smallint(4) NOT NULL,
pr_nume varchar(100) collate latin1_general_ci NOT NULL,
pr_descriere text collate latin1_general_ci NOT NULL,
pr_pret varchar(10) collate latin1_general_ci NOT NULL,
pr_cantitate smallint(4) NOT NULL,
pr_poza varchar(36) collate latin1_general_ci NOT NULL,
pr_data varchar(20) collate latin1_general_ci NOT NULL,
PRIMARY KEY(pr_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- tabela utilizatori
CREATE TABLE IF NOT EXISTS utilizatori (
id int(3) NOT NULL auto_increment,
nume varchar(20) collate latin1_general_ci NOT NULL,
parola varchar(32) collate latin1_general_ci NOT NULL,
email varchar(25) collate latin1_general_ci NOT NULL,
PRIMARY KEY(id),
UNIQUE KEY(email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;