-- В таблице должно быть четыре поля: id, name, age, address.
-- Все поля в таблице обязательны для заполнения.
-- Необходимо добавить 5 -10 одногруппников в данную таблицу.
-- Необходимо написать запрос на получение имен всех одногруппников
-- (только имен, без всего остального), которые живут в Москве и их возраст 
-- находится в диапазоне [18, 30) лет.
-- Примечание:
-- Квадратные скобки при указании диапазона, означают "включительно", а круглые 
-- "не включительно", то есть диапазон (7, 9] означает "от 7, где 7 не попадает 
-- в данный диапазон, до 9 включительно".Такой синтаксис нельзя использовать в 
-- sql, вам нужно найти решение, как такое условие можно записать в sql по-другому.

CREATE TABLE listEmloyee (
    empId INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    age INTEGER NOT NULL,
    address TEXT NOT NULL
);

INSERT INTO listEmloyee (name, age, address)
VALUES ('Ivan', 29, 'Rome');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Petr', 20, 'Moscow');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Nikolai', 30, 'Dubai');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Irina', 35, 'Paris');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Valentina', 24, 'London');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Andrey', 26, 'Dubai');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Valera', 22, 'Paris');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Svetlana', 19, 'Rome');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Maks', 23, 'Rome');
INSERT INTO listEmloyee (name, age, address)
VALUES ('Konstantin', 31, 'Rome');
 
SELECT *
FROM listEmloyee;

SELECT name
FROM listEmloyee
WHERE address = 'Rome'
    AND age >= 18
    AND age < 30;