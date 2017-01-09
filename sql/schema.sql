CREATE DATABASE Basketball_App character set='UTF8';

grant select on Basketball_App.* to basketballappuser@localhost;

USE Basketball_App;

DROP TABLE if exists players;

create table players();

SELECT * FROM players;
