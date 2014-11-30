DROP DATABASE IF EXISTS chat;
CREATE DATABASE chat;

CREATE table chat(
	msg_id int AUTO_INCREMENT,
	sender varchar(100),
	message text,
	primary key(msg_id)
);
CREATE TABLE users(
	user_id int AUTO_INCREMENT,
	username varchar(50),
	primary key(user_id)
);