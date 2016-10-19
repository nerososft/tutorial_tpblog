#创建数据库
CREATE DATABASE IF NOT EXISTS my_blog  DEFAULT CHARSET utf8 COLLATE utf8_general_ci;

#使用数据库
USE my_blog;

#创建文章表
CREATE TABLE IF NOT EXISTS blog_articles(
  id bigint primary key not null auto_increment,
  title varchar(64) not null,
  tagid bigint not null,
  content text not null,
  isdel tinyint default 1,
  ctime DATETIME default CURRENT_TIMESTAMP
)ENGINE = InnoDB;
#mysql数据库引擎ISAM/InnoDB
#ISAM 数据读取快，占用的内存，储存资源少。不支持事务，不能容错。
#InnoDB 支持 COMMIT ROOLBACK...以及其他事务特性，支持外键，行级锁。
#关于选择（没有绝对好或者不好，根据业务选型） 如果业务读多写少，定期更新的话，
IASM比较合适。如果业务涉及事务，就选择InnoDB，个人建议常规项目，没有特殊要求的话就选择InnoDB。
业务复杂的项目建议配合使用，IASM做定期数据备份。
alter table blog_articles add typeid int default 1 not null;

alter table blog_articles add count bigint default 0;
insert into blog_articles (title,tagid,content) values ("标题1",1,"文章1");

#创建分类表
create table if not exists blog_type(
  id int not null primary key auto_increment,
  name varchar(16) NOT  null,
  ctime DATETIME not null DEFAULT  CURRENT_TIMESTAMP
)Engine=InnoDB;

insert into blog_type (name) VALUE ("其他");

#创建标签表
create table if not exists blog_tag(
  id int not null primary key auto_increment,
  name varchar(16) NOT  null,
  ctime DATETIME not null DEFAULT  CURRENT_TIMESTAMP
)Engine=InnoDB;


#创建博主信息表
CREATE TABLE IF NOT EXISTS blog_user(
  id bigint  primary key not null auto_increment,
  username varchar(32) not null,
  email varchar(64) not null,
  signature varchar(128) COMMENT "用户签名",
  avatarurl varchar(64) COMMENT "头像图片地址",
  ctime DATETIME default CURRENT_TIMESTAMP
)ENGINE = InnoDB;
