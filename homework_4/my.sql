-- В таблице должно быть четыре поля: id, name, age, address.
-- Все поля в таблице обязательны для заполнения.
-- Необходимо добавить 5 -10 одногруппников в данную таблицу.
-- create
-- create
CREATE TABLE EMPLOYEE (
    empId INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    age INTEGER NOT NULL,
    address TEXT NOT NULL
);
-- insert
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Clark', 30, 'Moscow');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Dave', 21, 'St. Petersburg');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Ava', 22, 'Novosibirsk');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Tom', 25, 'Perm');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Kate', 23, 'Samara');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Leo', 25, 'Novosibirsk');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Jerry', 21, 'Volgograd');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Petr', 18, 'Moscow');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Elena', 24, 'Moscow');
INSERT INTO EMPLOYEE (name, age, address)
VALUES ('Moana', 23, 'Moscow');
-- fetch
-- Необходимо написать запрос на получение имен всех одногруппников 
SELECT *
FROM EMPLOYEE;
-- (только имен, без всего остального), которые живут в Москве и их возраст -- находится в диапазоне [18, 30) лет.
-- Примечание:
-- Квадратные скобки при указании диапазона, означают "включительно", а круглые 
-- "не включительно", то есть диапазон (7, 9] означает "от 7, где 7 не попадает 
-- в данный диапазон, до 9 включительно".Такой синтаксис нельзя использовать в 
-- sql, вам нужно найти решение, как такое условие можно записать в sql по-другому.
SELECT name
FROM EMPLOYEE
WHERE address = 'Moscow'
    AND age >= 18
    AND age < 30;