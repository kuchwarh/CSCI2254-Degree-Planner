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