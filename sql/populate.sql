# Populate students:

# Populate fields of study:

insert into fields (name, type) values ("university core", "core");
insert into fields (name, school, type) values ("csci", "mcas", "major");
insert into fields (name, school, type) values ("csci", "mcas", "minor");

# Populate class_cats:
insert into class_cats (title) values ("Molecules & Cells");
insert into class_cats (title) values ("Ecology & Evolution");
insert into class_cats (title) values ("Investigations in Molecular Cell Biology Lab");
insert into class_cats (title) values ("Genes and Genomes");
insert into class_cats (title) values ("Organismal and Systems Biology");
insert into class_cats (title) values ("Advanced Experience");
insert into class_cats (title) values ("Additional Biology Electives");
 
# Populate reqs:







# Populate courses:

-- # Create table for courses:
-- 
-- create table courses (id int not null auto_increment, name varchar(30) not null,
-- dept varchar(30) not null, credits int, primary key (id)) engine = InnoDB;

insert into courses (name, dept, credits) values ("BIOL2010 Ecology & Evolution", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL2000 Molecules & Cells", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL2040 Investigations in Molecular Cell Biology Lab", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL3150 Introduction to Genomics", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL3190 Genetics & Genomics", "Biol", "4");
insert into courses (name, dept, credits) values ("BIOL3030 Introduction to Physiology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL3210 Plant Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4320 Developmental Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4590 Introduction to Neuroscience", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4330 Human Physiology with Lab", "Biol", "4");


