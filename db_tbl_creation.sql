-- Creating database
CREATE DATABASE dbResume;

-- Creating table with auto increment ID
CREATE TABLE dbResume.tblContact (
    ID int PRIMARY KEY AUTO_INCREMENT,
    fldName varchar(25),
    fldEmail varchar(25),
    fldPhone varchar(25),
    fldMessage text
);