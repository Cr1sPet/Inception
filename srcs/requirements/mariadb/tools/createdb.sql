CREATE DATABASE wordpress;
CREATE USER 'jchopped'@'%' IDENTIFIED BY '123';

GRANT ALL PRIVILEGES ON wordpress.* TO 'jchopped'@'%';

FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'root123';