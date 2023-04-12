one to one

CREATE TABLE `students` (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    course_id INT UNSIGNED NOT NULL
);

CREATE TABLE `courses` (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL
)

CREATE TABLE `teachers` (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    subject_id INT NOT NULL
)

INSERT INTO courses (name) VALUES
('PHP'),
('JAVASCRIPT'),
('C Programming'),
('Python'),
('Docker');


INSERT INTO students(name,dob,course_id) VALUES
('Mg Mg','2002-08-03',1),
('Kyaw Kyaw','2002-02-18',2),
('Aung Aung','2002-02-18',3),
('Su Su','2002-02-18',4);

INSERT INTO teachers(name,dob,subject_id) VALUES
('php teacher','2002-02-18',1),
('js teacher','2002-02-18',2),
('c++ teacher','2002-02-18',3),
('python teacher','2002-02-18',4);

SELECT * FROM students 
 join courses WHERE students.course_id = courses.id;

INSERT INTO courses
VALUES('DOCKER');

INSERT INTO students(name,dob,course_id)
VALUES('Htin Linn Phyo','2002-02-03',6);

SELECT * FROM students 
 join courses ON students.course_id = courses.id
 join teachers ON students.course_id = teachers.subject_id;

SELECT * FROM courses
 left join teachers ON courses.id = teachers.subject_id
UNION
SELECT * FROM courses
 right join teachers ON courses.id = teachers.subject_id;

INSERT INTO teachers(name,dob,subject_id) VALUES
('Su Su','2002-02-04',2),
('kyaw hla','2002-02-04',3);

------------------------------------------------------------------------------

Many to Many relationships

CREATE TABLE `students` (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    dob DATE NOT NULL
);

CREATE TABLE `courses` (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL
)

CREATE TABLE `teachers` (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
)

CREATE TABLE student_course_teacher(
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    teacher_id INT NOT NULL
)

CREATE TABLE student_course(
    student_id INT NOT NULL,
    course_id INT NOT NULL
)

INSERT INTO courses (name) VALUES
('PHP'),
('JAVASCRIPT'),
('C Programming'),
('Python'),
('Docker');

INSERT INTO teachers(name) VALUES
('Bruno'),
('Rooney'),
('Rashy'),
('Case'),
('Licha');

INSERT INTO students(name,dob,gender) VALUES
('aung aung','2002-02-08','male'),
('bo bo','2002-02-08','male'),
('kyaw kyaw','2002-02-08','male'),
('hla hla','2002-02-08','female'),
('su su','2002-02-08','female');

INSERT INTO student_course (student_id,course_id) VALUES
(1,1),
(1,2),
(2,3),
(2,4),
(3,1),
(3,2),
(4,3),
(4,4),
(5,1),
(5,3);

SELECT students.name as student_name , students.dob as student_dob , courses.name as course_name  FROM student_course
join students ON student_course.student_id = students.id
join courses ON student_course.course_id = courses.id;

INSERT INTO students(name,dob,gender)
VALUES ('H4P6','2002-02-03','male');

UPDATE students
 SET name = 'Hla Hla',gender='female' WHERE name='H4P6';