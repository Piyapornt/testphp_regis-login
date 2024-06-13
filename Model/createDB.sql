CREATE TABLE userdata (
    email VARCHAR(300), 
    pwd VARCHAR(300), 
    username VARCHAR(300),
    PRIMARY KEY (username)
);

CREATE TABLE personalinfo(
    seq INT NOT NULL AUTO_INCREMENT, 
    username VARCHAR(300), FOREIGN KEY (username) REFERENCES userdata (username),
    firstname VARCHAR(300),
    lastname VARCHAR(300),
    dateofbirth DATE,
    tel VARCHAR(300),
    PRIMARY KEY (seq)
);