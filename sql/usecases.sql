# Mock ups can be found in the Wiki

# View core requirements:
# actor: student
select reqs.class_cat
from reqs
inner join fields
on reqs.field = fields.id
where field.type = 'core'
 and school is null;


# View major requirements:
# actor: student
select reqs.class_cat
from reqs
inner join fields
on reqs.field = fields.id
where fields.id = $field;


# Update field of study:
# actor: student

	# Populate previous major 1:
	select field
	from enroll
	where student = $id
	 and type = 'major'
	 and current = true
	limit 1;
	
	# Populate previous major 2:
	select field
	from enroll
	where student = $id
	 and type = 'major'
	 and current = true
	limit 1, 1;
	
	# Populate previous minor 1:
	select field
	from enroll
	where student = $id
	 and type = 'minor'
	 and current = true
	limit 1;
	
	# Populate previous minor 2:
	select field
	from enroll
	where student = $id
	 and type = 'minor'
	 and current = true
	limit 1, 1;
	
	# Change existing major 1:
	update enroll set current = false
	where student = $id
	 and field = $oldMajor1;
	 
	# Change existing major 2:
	update enroll set current = false
	where student = $id
	 and field = $oldMajor2;
	 
	# Change existing minor 1:
	update enroll set current = false
	where student = $id
	 and field = $oldMinor1;
	 
	# Change existing minor 2:
	update enroll set current = false
	where student = $id
	 and field = $oldMinor2;
	 
	# Add new major 1:
	insert into enroll (student, field, current) values ($id, $major1, true);
	
	# Add new major 2:
	insert into enroll (student, field, current) values ($id, $major2, true);
	
	# Add new minor 1:
	insert into enroll (student, field, current) values ($id, $minor1, true);
	
	# Add new minor 2:
	insert into enroll (student, field, current) values ($id, $minor2, true);


# Schedule courses:
# actor: student

	# Populate unassigned requirements (for side bar and drop down menus):
	select r.class_cat 
	from reqs as r, enroll as e
    where e.student = $id
     and r.id not in (select req 
     				  from plan
     				  where student = e.student);

	# Populate classes that fulfill selected requirement:
	select name 
	from courses
	where id in (select course_id
				 from fulfills
				 where req_id = $req);

	# Populate requirements with AP credits:
	select r.class_cat 
	from reqs as r
	inner join aps as a
	 on r.id = a.req
	 where a.student = $id;
	
	# Populate previous selection in each slot:
	select class_cat 
	from reqs
	where id in (select req
				 from plan
				 where slot = $slot
				  and student = $id);
	
	# Mark req as AP:
	insert into aps (student, req) values ($id, $req);

	# Save schedule:

		# Assign req to plan:
		update plan set req = $req
		where slot = $slot and student = $id;
	
		# Assign specific course to plan:
		update plan set course = $course
		where slot = $slot and student = $id;
	
	
# Add student:
# actor: admin
insert into students (username, password, school) values ($username, sha1($password), $school);
insert into plan (slot, student) values (1, $id);
insert into plan (slot, student) values (2, $id);
insert into plan (slot, student) values (3, $id);
insert into plan (slot, student) values (4, $id);
insert into plan (slot, student) values (5, $id);
insert into plan (slot, student) values (6, $id);
insert into plan (slot, student) values (7, $id);
insert into plan (slot, student) values (8, $id);
insert into plan (slot, student) values (9, $id);
insert into plan (slot, student) values (10, $id);
insert into plan (slot, student) values (11, $id);
insert into plan (slot, student) values (12, $id);
insert into plan (slot, student) values (13, $id);
insert into plan (slot, student) values (14, $id);
insert into plan (slot, student) values (15, $id);
insert into plan (slot, student) values (16, $id);
insert into plan (slot, student) values (17, $id);
insert into plan (slot, student) values (18, $id);
insert into plan (slot, student) values (19, $id);
insert into plan (slot, student) values (20, $id);
insert into plan (slot, student) values (21, $id);
insert into plan (slot, student) values (22, $id);
insert into plan (slot, student) values (23, $id);
insert into plan (slot, student) values (24, $id);
insert into plan (slot, student) values (25, $id);
insert into plan (slot, student) values (26, $id);
insert into plan (slot, student) values (27, $id);
insert into plan (slot, student) values (28, $id);
insert into plan (slot, student) values (29, $id);
insert into plan (slot, student) values (30, $id);
insert into plan (slot, student) values (31, $id);
insert into plan (slot, student) values (32, $id);
insert into plan (slot, student) values (33, $id);
insert into plan (slot, student) values (34, $id);
insert into plan (slot, student) values (35, $id);
insert into plan (slot, student) values (36, $id);
insert into plan (slot, student) values (37, $id);
insert into plan (slot, student) values (38, $id);
insert into plan (slot, student) values (39, $id);
insert into plan (slot, student) values (40, $id);
insert into plan (slot, student) values (41, $id);
insert into plan (slot, student) values (42, $id);
insert into plan (slot, student) values (43, $id);
insert into plan (slot, student) values (44, $id);
insert into plan (slot, student) values (45, $id);
insert into plan (slot, student) values (46, $id);
insert into plan (slot, student) values (47, $id);
insert into plan (slot, student) values (48, $id);	
	
	
# Add core requirements:
# actor: admin
insert into class_cats (title) values ($title);
insert into reqs (field, class_cat, number) values (1, 
(select id from class_cats where title = $title), $number);


# Add major requirements:
# actor: admin
insert in class_cats (title) values ($title);
insert into reqs (field, class_cat, number) values ($field,
(select id from class_cats where title = $title), $number);


# View student schedule:
# actor: admin

	# Populate selected reqs in each slot:
	select class_cat 
	from reqs
	where id in (select req
				 from plan
				 where slot = $slot
				  and student = $id);
				  
	# Populate selected courses in each slot:
	select name 
	from courses
	where id in (select course
				 from plan
				 where slot = $slot
				  and student = $id);
				  
	# Populate unassigned requirements for side bar:
	select r.class_cat 
	from reqs as r, enroll as e
    where e.student = $id
     and r.id not in (select req 
     				  from plan
     				  where student = e.student);
     				  
    # Populate requirements with AP credits:
	select r.class_cat 
	from reqs as r
	inner join aps as a
	 on r.id = a.req
	 where a.student = $id;