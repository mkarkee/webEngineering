DROP TABLE IF EXISTS ride;
DROP TABLE IF EXISTS user_account;

CREATE TABLE user_account (
    id SERIAL PRIMARY KEY,
    firstName VARCHAR(256) NOT NULL,
    lastName VARCHAR(256) NOT NULL,
    email VARCHAR(256),
    username VARCHAR(256) NOT NULL UNIQUE,
    password VARCHAR(256) NOT NULL
);

CREATE TABLE ride (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES user_account(id),
    origin VARCHAR(256) NOT NULL,
    destination VARCHAR(256) NOT NULL,
    time VARCHAR(256),
    price FLOAT

);