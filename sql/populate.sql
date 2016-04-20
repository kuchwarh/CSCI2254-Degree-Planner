# Populate students:

# Populate fields of study:
insert into fields (name, type) values ("university core", "core");
insert into fields (name, school, type) values ("computer science bs", "mcas", "major");
insert into fields (name, school, type) values ("computer science ba", "mcas", "major");
insert into fields (name, school, type) values ("computer science", "mcas", "minor");
insert into fields (name, school, type) values ("biology bs", "mcas", "major");
insert into fields (name, school, type) values ("biology ba", "mcas", "major"):
insert into fields (name, school, type) values ("biochemistry bs", "mcas", "major");
insert into fields (name, school, type) values ("biology", "mcas", "minor");
insert into fields (name, school, type) values ("chemistry", "mcas", "major");
insert into fields (name, school, type) values ("chemistry", "mcas", "minor");
insert into fields (name, school, type) values ("art history", "mcas", "major");
insert into fields (name, school, type) values ("art history", "mcas", "minor");
insert into fields (name, school, type) values ("film", "mcas", "major");
insert into fields (name, school, type) values ("film", "mcas", "minor");
insert into fields (name, school, type) values ("studio art", "mcas", "major");
insert into fields (name, school, type) values ("studio art", "mcas", "minor");
insert into fields (name, school, type) values ("classics", "mcas", "major");
insert into fields (name, school, type) values ("ancient civ", "mcas", "minor");
insert into fields (name, school, type) values ("communications", "mcas", "major");
insert into fields (name, school, type) values ("communications", "mcas", "major");
insert into fields (name, school, type) values ("env geoscience", "mcas", "major");
insert into fields (name, school, type) values ("geological sciences", "mcas", "major");
insert into fields (name, school, type) values ("economics", "mcas", "major");
insert into fields (name, school, type) values ("english", "mcas", "major");
insert into fields (name, school, type) values ("environmental studies", "mcas", "major");
insert into fields (name, school, type) values ("french", "mcas", "major");
insert into fields (name, school, type) values ("german studies", "mcas", "major");
insert into fields (name, school, type) values ("hispanic studies", "mcas", "major");
insert into fields (name, school, type) values ("history", "mcas", "major");
insert into fields (name, school, type) values ("international studies", "mcas", "major");
insert into fields (name, school, type) values ("islamic civ", "mcas", "major");
insert into fields (name, school, type) values ("italian", "mcas", "major");
insert into fields (name, school, type) values ("linguistics", "mcas", "major");
insert into fields (name, school, type) values ("math ba", "mcas", "major");
insert into fields (name, school, type) values ("math bs", "mcas", "major");
insert into fields (name, school, type) values ("music", "mcas", "major");
insert into fields (name, school, type) values ("philosophy", "mcas", "major");
insert into fields (name, school, type) values ("physics", "mcas", "major");
insert into fields (name, school, type) values ("political science", "mcas", "major");
insert into fields (name, school, type) values ("psychology", "mcas", "major");
insert into fields (name, school, type) values ("russian", "mcas", "major");
insert into fields (name, school, type) values ("slavic studies", "mcas", "major");
insert into fields (name, school, type) values ("sociology", "mcas", "major");
insert into fields (name, school, type) values ("theatre", "mcas", "major");
insert into fields (name, school, type) values ("theology", "mcas", "major");
insert into fields (name, school, type) values ("chinese", "mcas", "minor");
insert into fields (name, school, type) values ("geological sciences", "mcas", "minor");
insert into fields (name, school, type) values ("environmental studies", "mcas", "minor");
insert into fields (name, school, type) values ("economics", "mcas", "minor");
insert into fields (name, school, type) values ("english", "mcas", "minor");
insert into fields (name, school, type) values ("french", "mcas", "minor");
insert into fields (name, school, type) values ("german", "mcas", "minor");
insert into fields (name, school, type) values ("german studies", "mcas", "minor");
insert into fields (name, school, type) values ("hispanic studies", "mcas", "minor");
insert into fields (name, school, type) values ("history", "mcas", "minor");
insert into fields (name, school, type) values ("islamic civ", "mcas", "minor");
insert into fields (name, school, type) values ("linguistics", "mcas", "minor");
insert into fields (name, school, type) values ("russian", "mcas", "minor");
insert into fields (name, school, type) values ("arabic studies", "mcas", "minor");
insert into fields (name, school, type) values ("east european studies", "mcas", "minor");
insert into fields (name, school, type) values ("jewish studies", "mcas", "minor");
insert into fields (name, school, type) values ("math", "mcas", "minor");
insert into fields (name, school, type) values ("scientific computing", "mcas", "minor");
insert into fields (name, school, type) values ("music", "mcas", "minor");
insert into fields (name, school, type) values ("philosophy", "mcas", "minor");
insert into fields (name, school, type) values ("physics", "mcas", "minor");
insert into fields (name, school, type) values ("sociology", "mcas", "minor");
insert into fields (name, school, type) values ("theology", "mcas", "minor");
insert into fields (name, school, type) values ("aad studies", "mcas", "minor");
insert into fields (name, school, type) values ("american studies", "mcas", "minor");
insert into fields (name, school, type) values ("asian american studies", "mcas", "minor");
insert into fields (name, school, type) values ("asian studies", "mcas", "minor");
insert into fields (name, school, type) values ("catholic studies", "mcas", "minor");
insert into fields (name, school, type) values ("faith peace & justice", "mcas", "minor");
insert into fields (name, school, type) values ("international studies", "mcas", "minor");
insert into fields (name, school, type) values ("irish studies", "mcas", "minor");
insert into fields (name, school, type) values ("latin american studies", "mcas", "minor");
insert into fields (name, school, type) values ("social impact", "mcas", "minor");
insert into fields (name, school, type) values ("medical humanities", "mcas", "minor");
insert into fields (name, school, type) values ("psychoanalytic", "mcas", "minor");
insert into fields (name, school, type) values ("womens studies", "mcas", "minor");

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
insert into courses (name, dept, credits) values ("BIOL4350 Biological Chemistry", "Biol", "3");


---committed---
insert into courses (name, dept, credits) values ("CHEM1109 General Chemistry 1", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM1110 General Chemistry Lab 1", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM1111 General Chemistry 2", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM1112 General Chemistry Lab 2", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM2231 Organic Chemistry 1", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM2232 Organic Chemistry Lab 1", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM2233 Organic Chemistry 2", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM2234 Organic Chemistry 2 Lab", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM4461 Biochemistry 1", "Chem", "3");

---committed---
insert into courses (name, dept, credits) values ("MATH1100 Calculus 1", "Math", "4");
insert into courses (name, dept, credits) values ("MATH1101 Calculus 2", "Math", "4");
insert into courses (name, dept, credits) values ("PHYS2100 Physics 1 with Lab", "Phys", "4");
insert into courses (name, dept, credits) values ("PHYS2101 Physics 2 with Lab", "Phys", "4");
insert into courses (name, dept, credits) values ("BIOL2300 Biostatistics", "Biol", "3");
---committed still need to do statistics---

=======

insert into class_cats (title) values ("General Chemistry 1 with Lab");
insert into class_cats (title) values ("General Chemistry 2 with Lab");
insert into class_cats (title) values ("Organic Chemistry 1 with Lab");
insert into class_cats (title) values ("Organic Chemistry 2 with Lab");
insert into class_cats (title) values ("Biological Chemistry");
insert into class_cats (title) values ("Biochemistry 1");
insert into class_cats (title) values ("Calculus 1");
insert into class_cats (title) values ("Calculus 2");
insert into class_cats (title) values ("Biostatistics");
insert into class_cats (title) values ("Physics 1 with Lab");
insert into class_cats (title) values ("Physics 2 with Lab");
insert into class_cats (title) values ("Additional Quantitative Courses");

# Populate reqs:

# Populate courses:

# Populate fulfills:

# Populate enrollment:

# Populate slots:
insert into slots (semester, year, course_num) values ("fall", 1, 1);
insert into slots (semester, year, course_num) values ("fall", 1, 2);
insert into slots (semester, year, course_num) values ("fall", 1, 3);
insert into slots (semester, year, course_num) values ("fall", 1, 4);
insert into slots (semester, year, course_num) values ("fall", 1, 5);
insert into slots (semester, year, course_num) values ("fall", 1, 6);
insert into slots (semester, year, course_num) values ("spring", 1, 1);
insert into slots (semester, year, course_num) values ("spring", 1, 2);
insert into slots (semester, year, course_num) values ("spring", 1, 3);
insert into slots (semester, year, course_num) values ("spring", 1, 4);
insert into slots (semester, year, course_num) values ("spring", 1, 5);
insert into slots (semester, year, course_num) values ("spring", 1, 6);
insert into slots (semester, year, course_num) values ("fall", 2, 1);
insert into slots (semester, year, course_num) values ("fall", 2, 2);
insert into slots (semester, year, course_num) values ("fall", 2, 3);
insert into slots (semester, year, course_num) values ("fall", 2, 4);
insert into slots (semester, year, course_num) values ("fall", 2, 5);
insert into slots (semester, year, course_num) values ("fall", 2, 6);
insert into slots (semester, year, course_num) values ("spring", 2, 1);
insert into slots (semester, year, course_num) values ("spring", 2, 2);
insert into slots (semester, year, course_num) values ("spring", 2, 3);
insert into slots (semester, year, course_num) values ("spring", 2, 4);
insert into slots (semester, year, course_num) values ("spring", 2, 5);
insert into slots (semester, year, course_num) values ("spring", 2, 6);
insert into slots (semester, year, course_num) values ("fall", 3, 1);
insert into slots (semester, year, course_num) values ("fall", 3, 2);
insert into slots (semester, year, course_num) values ("fall", 3, 3);
insert into slots (semester, year, course_num) values ("fall", 3, 4);
insert into slots (semester, year, course_num) values ("fall", 3, 5);
insert into slots (semester, year, course_num) values ("fall", 3, 6);
insert into slots (semester, year, course_num) values ("spring", 3, 1);
insert into slots (semester, year, course_num) values ("spring", 3, 2);
insert into slots (semester, year, course_num) values ("spring", 3, 3);
insert into slots (semester, year, course_num) values ("spring", 3, 4);
insert into slots (semester, year, course_num) values ("spring", 3, 5);
insert into slots (semester, year, course_num) values ("spring", 3, 6);
insert into slots (semester, year, course_num) values ("fall", 4, 1);
insert into slots (semester, year, course_num) values ("fall", 4, 2);
insert into slots (semester, year, course_num) values ("fall", 4, 3);
insert into slots (semester, year, course_num) values ("fall", 4, 4);
insert into slots (semester, year, course_num) values ("fall", 4, 5);
insert into slots (semester, year, course_num) values ("fall", 4, 6);
insert into slots (semester, year, course_num) values ("spring", 4, 1);
insert into slots (semester, year, course_num) values ("spring", 4, 2);
insert into slots (semester, year, course_num) values ("spring", 4, 3);
insert into slots (semester, year, course_num) values ("spring", 4, 4);
insert into slots (semester, year, course_num) values ("spring", 4, 5);
insert into slots (semester, year, course_num) values ("spring", 4, 6);

# Populate plan:

# Populate admins:
