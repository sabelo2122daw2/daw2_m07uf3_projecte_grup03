use mysql;
create user 'admin'@'localhost' identified by "Fjeclot22@";
create database projecte;
use projecte;
grant all privileges on projecte.* to 'admin'@'localhost';
