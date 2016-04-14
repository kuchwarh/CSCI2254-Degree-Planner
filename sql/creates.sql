# Create table for student users:

create table students (id int not null auto_increment, username varchar(15) not null,
password varchar(40) not null, school enum('mcas', 'csom', 'cson', 'lsoe'),
primary key (id));

# Create table for fields of study:

create table fields (id int not null auto_increment, name varchar(30) not null,
school enum('mcas', 'csom', 'cson', 'lsoe'), type enum('major', 'minor', 
'concentration', 'core'), primary key (id));

# Create table for class categories:

create table class_cats (id int not null auto_increment, title varchar(30) not null, 
primary key (id));

# Create table for requirements:

create table reqs (id int not null auto_increment, field int not null, class_cat int not
null, primary key (id), foreign key (field) references fields(id), foreign key
(class_cat) references class_cats(id));

# Create table for enrollment:

create table enroll (id int not null auto_increment, student int not null, field int
not null, current boolean not null, primary key (id), foreign key (student) references
students(id), foreign key (field) references fields(id));

# Create table for slots:

create table slots (id int not null auto_increment, semester varchar(40) not null, 
course_num int not null, primary key (id));

# Create table for plan:

create table plan (slot int not null, student int not null, req int not null, type 
enum('complete', 'AP', 'assigned', 'unassigned') not null, class_name varchar(100), 
professor varchar(30), credits int, primary key (slot, student), foreign key (slot)
references slots(id), foreign key (student) references students(id), foreign key
(req) references reqs(id));

# Create table for admin users:

create table admins (id int not null auto_increment, username varchar(15) not null,
password varchar(40) not null, primary key (id));