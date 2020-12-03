Basic Queries

"SELECT Name FROM students"
"SELECT * FROM students WHERE Age > 30"
"SELECT Name FROM students WHERE Gender = "F" AND Age = 30"
"SELECT Points FROM students WHERE Name="Alex" "
"INSERT INTO students VALUES (8, "Saeed", 24, "M", 300)"
"UPDATE students SET Points = Points + 100 WHERE Name = "Basma" "
"UPDATE students SET Points = Points - 50 WHERE Name = "Alex"  "

Creating Table 

"CREATE TABLE "graduates" (
	"ID"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"Name"	TEXT NOT NULL UNIQUE,
	"Age"	INTEGER,
	"Gender"	TEXT,
	"Points"	INTEGER,
    "Graduation"	TEXT
)"

"INSERT INTO graduates (ID, Name, Age, Gender, Points) SELECT * FROM students WHERE Name = "Layal"  "
"UPDATE graduates SET Graduation="08/09/2018" WHERE Name="Layal"   "
"DELETE FROM students WHERE Name = "Layal" "


Joins

"SELECT employees.Name, employees.Company, companies.Date FROM employees INNER JOIN companies ON employees.Company=companies.Name"
"SELECT employees.Name FROM employees INNER JOIN companies ON employees.Company=companies.Name WHERE companies.Date<2000"
"SELECT companies.Name FROM employees INNER JOIN companies ON employees.Company=companies.Name WHERE employees.Role='Graphic Designer'"



Count & Filter

"SELECT Name FROM students WHERE Points=(SELECT max(Points) FROM students)"
"SELECT avg(Points) FROM students"
"SELECT count() FROM students WHERE Points = 500"
"SELECT Name FROM students WHERE Name like '%s%'"
"SELECT Name FROM students ORDER BY Points DESC"



