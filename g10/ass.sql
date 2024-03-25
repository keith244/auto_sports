create database 'Automatic_Sports_System';
Use 'Automatic_Sports_System';
create table 'Players'(
    'id' int auto_increment primary key,
    'FullName' varchar(100) not null,
    'RegNumber' varchar(50) not null unique,
    'Email' varchar(100) not null unique,
    'Password' varchar(255) not null,
);
