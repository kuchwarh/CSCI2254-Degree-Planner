# Mock ups can be found in the Wiki

# View core requirements:
# actor: student


# View major requirements:
# actor: student


# Add field of study:
# actor: student


# Schedule courses:
# actor: student

	# Populate unassigned requirements:
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
	-- perform insert into plan for slots 1 - 48.
	
	
# Add core requirements:
# actor: admin


# Add major requirements:
# actor: admin


# View student schedule:
# actor: admin