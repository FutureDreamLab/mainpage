SET NAMES GBK;
CREATE DATABASE IF NOT EXISTS shopImooc;
USE shopImooc;
--  ����Ա��
DROP TABLE IF EXISTS imooc_admin;
CREATE TABLE imooc_admin(
id tinyint unsigned auto_increment key,
username varchar(30) UNIQUE NOT NULL,
password varchar(32) NOT NULL,
email varchar(60) NOT NULL
);
-- �����
DROP TABLE IF EXISTS imooc_cate;
CREATE TABLE imooc_cate(
id int unsigned auto_increment key,
cName varchar(30)  NOT NULL
);
-- ��Ʒ��
DROP TABLE IF EXISTS imooc_pro;
CREATE TABLE imooc_pro(
id smallint unsigned auto_increment key,
pName varchar(255)  NOT NULL,
cId int unsigned NOT NULL,
pSn VARCHAR(50) NOT NULL,
pNum INT UNSIGNED DEFAULT 0 NOT NULL,
mPrice DECIMAL(10,2) NOT NULL,
iPrice DECIMAL(10,2) NOT NULL,
pDesc MEDIUMTEXT,
pImg VARCHAR(255) NOT NULL,
pubTime INT UNSIGNED NOT NULL,
isShow TINYINT(1) DEFAULT 1 NOT NULL,
isHot TINYINT(1) DEFAULT 0 NOT NULL
);
-- �û���
DROP TABLE IF EXISTS imooc_user;
CREATE TABLE imooc_user(
id int unsigned auto_increment key,
username VARCHAR(30) NOT NULL UNIQUE,
password CHAR(32) NOT NULL,
sex ENUM("��","Ů","����") DEFAULT "����" NOT NULL,
email VARCHAR(60) NOT NULL,
face VARCHAR(50) NOT NULL,
regTime INT UNSIGNED NOT NULL,
activeFlag TINYINT(1) DEFAULT 0 NOT NULL
);
-- ����
DROP TABLE IF EXISTS imooc_album;
CREATE TABLE imooc_album(
id int unsigned auto_increment key,
Pid int unsigned not null,
albumPath varchar(50) not null
);

INSERT imooc_admin(username,password,email) VALUES('king','b2086154f101464aab3328ba7e060deb','546870961@qq.com');

