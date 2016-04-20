# Mock ups can be found in the Wiki

# View core requirements:
# actor: student


# View major requirements:
# actor: student


# Add field of study:
# actor: student


# Schedule courses:
# actor: student

	# Assign req to plan:
	update plan set req = $req
	where slot = $slot and student = $id;
	
	# Assign course to plan:
	update plan set course = $course
	where slot = $slot and student = $id;
	
	# Mark req as AP:
	insert into aps (student, req) values ($id, $req);
	
	
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