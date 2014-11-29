DROP DATABASE IF EXISTS todoDb;
CREATE DATABASE todoDb;

CREATE TABLE users (
	uid int AUTO_INCREMENT, 
	email varchar(80), 
	name varchar(80),
	password varchar(16) not null, 
	primary key (uid, email)
);

CREATE TABLE status (
    id int primary key not null, 
    description varchar(10)
);

insert into status (id, description) values (1, "To do"), (2, "Doing"), (3, "Done");

CREATE TABLE tasks (
	tid int AUTO_INCREMENT,
	owner_id int not null,
    status_id int,
	title varchar(80) not null, 
	description varchar(400),
    date_created DATE, 
    date_lastUpdate DATE,
	primary key (tid), 
    foreign key (status_id) references status(id),
	foreign key (owner_id) references users(uid) ON DELETE CASCADE
);

insert into users (email, password) values ('admin', 'admin');
