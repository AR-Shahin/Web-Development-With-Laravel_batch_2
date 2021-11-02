/* Create a DB */
Create Database db_name;
/* Delete a DB */
DROP DATABASE course_db;
/* Drop a Table */
drop TABLE students;

/* Drop a column */
ALTER TABLE students DROP COLUMN address

/* Create Students Table*/
CREATE TABLE students ( id int NOT NULL AUTO_INCREMENT, name varchar(255) NOT NULL, roll int, class int, address text, PRIMARY KEY(id) )


/* Insert data in table*/

INSERT INTO students (name,roll,class,address) VALUES ('Shahin' , 101, 1,'Dhaka')
/* Insert Multiple data */
INSERT INTO students (name,roll,class,address) VALUES ('Omi' , 102, 1,'Cumilla'),('Asik' , 103, 1,'Dhaka')

 /* Select All data from a table*/
SELECT * FROM students

/* Specific column retrieve*/

SELECT name,roll FROM `students`

/* select unique data */

SELECT DISTINCT name FROM `students`


/* select data using conditaions */
SELECT * FROM `students` WHERE id = 2

/* select multiple conditions*/

SELECT * FROM `students` WHERE name = 'asik' and class = 2
SELECT * FROM `students` WHERE name = 'asik' or class = 2
SELECT * FROM `students` WHERE name = 'asik' and not class = 2

SELECT * FROM `students` ORDER BY name ASC

/* Update */
UPDATE students set name = 'Ars' WHERE id = 1
/* Delete*/

DELETE FROM students WHERE id = 1
SELECT MIN(roll) FROM students
SELECT MAX(roll) FROM students
SELECT COUNT(roll) FROM students WHERE address = 'Cumilla'

SELECT name FROM students WHERE id in(1,5,3)
SELECT * FROM students WHERE roll BETWEEN 102 AND 105

/* Alias*/
SELECT name as ourName FROM students WHERE roll BETWEEN 102 AND 105
