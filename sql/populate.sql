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

---biology bs/ba/minor/major---
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
insert into courses (name, dept, credits) values ("BIOL5290 Biomolecules: Molecular Driving Forces BIOL 5290", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL1100	General Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL1420	The Genetic Century", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL1440	Sustaining the Biosphere", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL3040 Cell Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL3150 Introduction to Genomics", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL3190	Genetics & Genomics", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4200 Introduction to Bioinformatics", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4570	Principles of Immunology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4830	Research in Molecular Biology Lab", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5330 Virus Infections and Cellular Transport", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5420	Cancer as a Metabolic Disease", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5370	Literature for Neurological Diseases", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5380	Topics in Biomechanics", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5450	Advanced Lab in Cell Imaging", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5570	Antibiotics and Antibiotic Resistance", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5700	Biology of the Nucleus", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4140 Microbiology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4170 Microbial Genetics", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4260 Human Anatomy with Lab", "Biol", "4");
insert into courses (name, dept, credits) values ("BIOL4400	Molecular Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4510	Cancer Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5060	Recombinant DNA Technology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4280 Modeling Physiology Using Physical Computing", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4870	Research in Molecular Genetics Lab", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4880	Research in Biomechanics Lab ", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4890	Investigations in Cellular Re-Programming", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5130	Environmental Disruptors of Development", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5230	Immunity and Infectious Disease", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5370	Literature for Neurological Diseases", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5420	Cancer as a Metabolic Disease", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5540	Synthetic Biology", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5460	Topics in Microbial Pathogens", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5450	Advanced Lab in Cell Imaging", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL5630	DNA Viruses and Cancer", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4911 Undergraduate Research I", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4917	Advanced Undergraduate Research I ", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4955 Biology Honors Research Thesis I", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4954	Undergraduate Research Investigations", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4941	Senior Thesis Seminar I", "Biol", "1");
insert into courses (name, dept, credits) values ("BIOL4951	Senior Thesis Research I", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4921	Advanced Independent Research", "Biol", "6");
insert into courses (name, dept, credits) values ("BIOL4912 Undergraduate Research II", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4918	Advanced Undergraduate Research II", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4953	Biology Honors Research Thesis II", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4914	Undergraduate Research Investigations II", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4942	Senior Thesis Seminar II", "Biol", "1");
insert into courses (name, dept, credits) values ("BIOL4952	Senior Thesis Research II", "Biol", "3");
insert into courses (name, dept, credits) values ("BIOL4921	Advanced Independent Research", "Biol", "6");
insert into courses (name, dept, credits) values ("CHEM1109 General Chemistry 1", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM1110 General Chemistry Lab 1", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM1111 General Chemistry 2", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM1112 General Chemistry Lab 2", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM2231 Organic Chemistry 1", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM2232 Organic Chemistry Lab 1", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM2233 Organic Chemistry 2", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM2234 Organic Chemistry 2 Lab", "Chem", "1");
insert into courses (name, dept, credits) values ("CHEM4461 Biochemistry 1", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM4462	Biochemistry 2", "Chem", "3");
insert into courses (name, dept, credits) values ("CHEM5582	Advanced Topics in Biochemistry", "Chem", "3");
insert into courses (name, dept, credits) values ("MATH1100 Calculus 1", "Math", "4");
insert into courses (name, dept, credits) values ("MATH1101 Calculus 2", "Math", "4");
insert into courses (name, dept, credits) values ("PHYS2100 Physics 1 with Lab", "Phys", "4");
insert into courses (name, dept, credits) values ("PHYS2101 Physics 2 with Lab", "Phys", "4");
insert into courses (name, dept, credits) values ("BIOL2300 Biostatistics", "Biol", "3");
insert into courses (name, dept, credits) values ("ECON1151 Statistics", "Econ", "3");
insert into courses (name, dept, credits) values ("MATH3353 Statistics", "Math", "3"); 
insert into courses (name, dept, credits) values ("CSCI1101 Computer Science 1", "Csci", "3");
insert into courses (name, dept, credits) values ("CSCI1102 Computer Science 2", "Csci", "3");
insert into courses (name, dept, credits) values ("PHIL5593	Philosophy of Science", "Phil", "3");
insert into courses (name, dept, credits) values ("PSYC2285	Behavioral Neuroscience", "Psyc", "3");
insert into courses (name, dept, credits) values ("THEO3598	Law, Medicine & Ethics", "Theo", "3");
insert into courses (name, dept, credits) values ("THEO5498	HIV, AIDS & Ethics", "Theo", "3");
insert into courses (name, dept, credits) values ("PSYC2285	Behavioral Neuroscience", "Psyc", "3");
insert into courses (name, dept, credits) values ("PSYC3329	Psychophysiology of Stress", "Psyc", "3");
insert into courses (name, dept, credits) values ("PSYC3380	Neuroscience of Psychopathology", "Psyc", "3");
insert into courses (name, dept, credits) values ("PSYC3383	Neurobiological Basis of Learning & Memory ", "Psyc", "3");

---university core courses---

---fine arts---
insert into courses (name, dept, credits) values ("ARTH1101	Art from Prehistoric Times to the High Midle Ages", "Arth", "3");
insert into courses (name, dept, credits) values ("ARTH1107	History of Architecture", "Arth", "3");
insert into courses (name, dept, credits) values ("ARTH1109	Clues to Seeing", "Arth", "3");
insert into courses (name, dept, credits) values ("ARTH2221	Mysteries and Visions: Early Medieval Art", "Arth", "3");
insert into courses (name, dept, credits) values ("ARTH2258	Twentieth Century Art", "Arth", "3");
insert into courses (name, dept, credits) values ("ARTH2267	Salt Box to Skyscraper: American Architecture 17th-20th Century", "Arth", "3");
insert into courses (name, dept, credits) values ("ARTS1101	Drawing I: Foundations", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTS1102	Painting I: Foundations", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTS1104	Seeing is Believing", "Arts", "3");
insert into courses (name, dept, credits) values ("FILM2283	History of European Cinema", "Film", "3");
insert into courses (name, dept, credits) values ("MUSA1100	Fundamentals of Music Theory I", "Musa", "3");
insert into courses (name, dept, credits) values ("MUSA1200	Introduction to Music", "Musa", "3");
insert into courses (name, dept, credits) values ("MUSA1300	History of Popular Music", "Musa", "3");
insert into courses (name, dept, credits) values ("THTR1120	Elements of Dance", "Thtr", "3");
insert into courses (name, dept, credits) values ("THTR1170	Introduction to Theatre", "Thtr", "3");
insert into courses (name, dept, credits) values ("THTR1172	Dramatic Structure and Theatrical Process", "Thtr", "3");
insert into courses (name, dept, credits) values ("UNAS1104	Modernism and the Arts I", "Unas", "3");
insert into courses (name, dept, credits) values ("ARTH1102	Art: Renaissance to Modern", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTH2206	Art and Myth in Ancient Greece", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTH2222	Imagination and Imagery: Later Medieval Art", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTH2251	Modern Architecture", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTH2257	Nineteenth Century Art", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTH2280	Masterpieces of Islamic Art", "Arts", "3");
insert into courses (name, dept, credits) values ("ARTS1150	Painting Plus: Collage", "Arts", "3");
insert into courses (name, dept, credits) values ("CLAS2208	Art and Myth in Ancient Greece", "Clas", "3");
insert into courses (name, dept, credits) values ("THTR1701	Devising Theatre: Illness as Metaphor", "Thtr", "3");
insert into courses (name, dept, credits) values ("UNAS1107	Modernism and the Arts II", "Unas", "3");

---cultural diversity---
insert into courses(name, dept, credits) values ("AADS1104	African American History I", "Aads", "3");
insert into courses(name, dept, credits) values ("AADS1110	Introduction to African Diaspora Studies", "Aads", "3");
insert into courses(name, dept, credits) values ("AADS1120	Religion in Africa", "Aads", "3");
insert into courses(name, dept, credits) values ("AADS2248	Advanced Community Service Research Seminar I", "Aads", "3");
insert into courses(name, dept, credits) values ("AADS2253	The Modern Black Freedom Movement", "Aads", "3");
insert into courses(name, dept, credits) values ("AADS5597	Contemporary Race Theory", "Aads", "3");
insert into courses(name, dept, credits) values ("APSY1030	Child Growth and Development", "Apsy", "3");
insert into courses(name, dept, credits) values ("ARTH2203	Great Cities of Islam", "Arth", "3");
insert into courses(name, dept, credits) values ("ARTH4214	Art of the Silk Road", "Arth", "3");
insert into courses(name, dept, credits) values ("COMM2285	Cultural Diversity in the Media", "Comm", "3");
insert into courses(name, dept, credits) values ("ECON3374	Development Economics and Policy", "Econ", "3");
insert into courses(name, dept, credits) values ("ENGL2122	Language in Society", "Engl", "3");
insert into courses(name, dept, credits) values ("ENGL2229	Literature of the Other Europe", "Engl", "3");
insert into courses(name, dept, credits) values ("ENGL2246	Introduction to Asian American Literature", "Engl", "3");
insert into courses(name, dept, credits) values ("ENGL2255	Introduction to Postcolonial Literature", "Engl", "3");
insert into courses(name, dept, credits) values ("ENGL4495	Contemporary Asian Cinema", "Engl", "3");
insert into courses(name, dept, credits) values ("ENGL4637	Capstone:Vision Quest:A Multicultural Approach", "Engl", "3");
insert into courses(name, dept, credits) values ("FILM3314	Cinema of the Greater Middle East", "Film", "3");
insert into courses(name, dept, credits) values ("FILM4495	Contemporary Asian Cinema", "Film", "3");
insert into courses(name, dept, credits) values ("FREN3300	The French and the Peoples of America", "Fren", "3");
insert into courses(name, dept, credits) values ("HIST1005	Asia in the World I", "Hist", "3");
---ended at asia in the world I on fall2015 cultural diversity courses---



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
