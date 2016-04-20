# Drop table queries:

drop table fulfills;
drop table enroll;
drop table slots;
drop table plan;
drop table admins;
drop table students;
drop table reqs;
drop table courses;
drop table fields;
drop table class_cats;
drop table slots;

# Create table for student users:

create table students (id int not null auto_increment, username varchar(15) not null,
password varchar(40) not null, school enum('mcas', 'csom', 'cson', 'lsoe'),
primary key (id)) engine = InnoDB;

# Create table for fields of study:

create table fields (id int not null auto_increment, name varchar(30) not null,
school enum('mcas', 'csom', 'cson', 'lsoe'), type enum('major', 'minor', 
'concentration', 'core'), primary key (id))  engine = InnoDB;

# Create table for class categories:

create table class_cats (id int not null auto_increment, title varchar(30) not null, 
primary key (id))  engine = InnoDB;

# Create table for requirements: 

create table reqs (id int not null auto_increment, field int not null, class_cat int not
null, number int not null, primary key (id), foreign key (field) references fields(id), foreign key
(class_cat) references class_cats(id))  engine = InnoDB;

# Create table for courses:

create table courses (id int not null auto_increment, name varchar(30) not null,
dept varchar(30) not null, credits int, primary key (id)) engine = InnoDB;

# Create table for fulfills:

create table fulfills (id int not null auto_increment, req_id int not null, course_id int
not null, primary key (id), foreign key (req_id) references reqs(id), foreign key 
(course_id) references courses(id)) engine = InnoDB;

# Create table for enrollment:

create table enroll (id int not null auto_increment, student int not null, field int
not null, current boolean not null, primary key (id), foreign key (student) references
students(id), foreign key (field) references fields(id))  engine = InnoDB;

# Create table for slots:

create table slots (id int not null auto_increment, semester varchar(10) not null, year 
int not null, course_num int not null, primary key (id))  engine = InnoDB;

# Create table for plan:

create table plan (slot int not null, student int not null, req int not null, type 
enum('complete', 'AP', 'assigned', 'unassigned') not null, class_name varchar(100), 
professor varchar(30), credits int, primary key (slot, student), foreign key (slot)
references slots(id), foreign key (student) references students(id), foreign key
(req) references reqs(id))  engine = InnoDB;

# Create table for admin users:

create table admins (id int not null auto_increment, username varchar(15) not null,
password varchar(40) not null, primary key (id))  engine = InnoDB;