-- DROP TABLE IF EXISTS posts;

-- CREATE DATABASE posts;

USE posts;

CREATE TABLE posts 
(
    `id`      INT AUTO_INCREMENT,
    `title`   VARCHAR(100) NOT NULL,
    `content` VARCHAR(255),
    PRIMARY KEY (`id`)
);

INSERT INTO posts
VALUES (23,'First Post','This is the content of the first post.');
INSERT INTO posts
VALUES (356,'Second Post','Here is some insightful content for the second post.');
INSERT INTO posts
VALUES (3546, 'Third Post', 'This is post content.');