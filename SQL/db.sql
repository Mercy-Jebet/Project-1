-- create database

DROP DATABASE IF EXISTS Better Help;
CREATE DATABASE IF NOT EXISTS Better Help;

--create table

DROP TABLE IF EXISTS sign_in;
CREATE TABLE IF NOT EXISTS sign_in(
    fullname varchar(50) NOT NULL DEFAULT '',
    username varchar(50) NOT NULL DEFAULT '',
    pass.word varchar(50) NOT NULL DEFAULT '',
    day.of.birth date NOT NULL DEFAULT 0;
    gender varchar(50) NOT NULL DEFAULT '',
    PRIMARY KEY (fullname)
);
