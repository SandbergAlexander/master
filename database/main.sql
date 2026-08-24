create database Alexanderhomepage;
USE Alexanderhomepage;

CREATE TABLE quiz  (
svar varchar(255),
frågor varchar(255),
antal_rätt INT DEFAULT 0
);
INSERT INTO quiz (frågor, svar)
VALUES
('Vad heter Sveriges huvudstad?', 'Stockholm'),
('Hur många dagar har en vecka?', '7'),
('Vad är 2 + 2?', '4');

SELECT * FROM quiz;

