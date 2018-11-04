CREATE DATABASE IF NOT EXISTS db_permentation;

use db_permentation;

create table if not exists users(
id int not null auto_increment,
username varchar(20) not null,
password varchar(255) not null,
constraint PK_ID primary key (id)
);

insert into users(username,password) values ('admin','$2y$10$3AEn67j08SEKFTjfK/2KvOVcfPhVdo1XRA7w63CZhyhmDU1FLGmoO');

create table if not exists controllers(

	id int not null auto_increment,
    name varchar(30) not null,
    time_left date null,
    duration int null,
    threshold int null,
    constraint PK_ID primary key (id)
);
alter table controllers
add column duration int null;

alter table controllers
add column threshold int null;

insert into controllers(`name`) values 
('controller1'),
('controller2'),
('controller3'),
('controller4'),
('controller5'),
('controller6'),
('controller7');

select * from controllers;
update controllers set time_left='2018-11-02' where id=1;