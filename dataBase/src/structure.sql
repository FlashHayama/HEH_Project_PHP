CREATE DATABASE if not exists maria;

USE maria;

CREATE TABLE if not exists Type
(
    id int auto_increment,
    type char(15) not null,

    PRIMARY KEY (id)
);

CREATE TABLE if not exists Composant
(
    reference varchar(50) not null ,
    power int(3) not null,
    mark varchar(20) not null ,
    name varchar(100) not null,
    feature varchar(200) not null,
    picture varchar(100) not null,
    id_type int not null ,

    PRIMARY KEY (reference),
    FOREIGN KEY (id_type) REFERENCES Type(id) ON DELETE CASCADE
);

CREATE TABLE if not exists User
(
    id int auto_increment,
    name char(15) not null ,
    firstName char(15) not null ,
    age char(10) not null ,
    mail char(100) not null ,
    password char(255) not null ,
    admin boolean default 0,

    PRIMARY KEY (id)
);

CREATE TABLE if not exists Choose
(
    id int auto_increment,
    id_user int NOT NULL,
    id_composant varchar(50) NOT NULL,
    quantity int default 1,

    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES User(id) on delete cascade,
    FOREIGN KEY (id_composant) REFERENCES Composant(reference) on delete cascade
);