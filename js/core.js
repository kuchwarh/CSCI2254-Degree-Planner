$(document).ready(function(){
         
    //just the core part
            	$.ajax({
		          url: "php/coretable.php",
		          success: function(data) {
                      console.log(JSON.stringify(data));
			     $.each(data, function(i, item) {
                     var string ="";
                               
                               string = string+"<tr><td>" + item.title +"</td><td><input class ='boxes' type='checkbox' name='count' value='"+item.title+"'/>&nbsp;";
                               
                               if(item.number>1){
                                   string = string +"<input class ='boxes' type='checkbox' name='count' value='"+item.title+"'/>&nbsp;";
                               }
                               
                               string = string + "</td><td><select name = 'Semester'><br><br><option value='Spring' id ='Spring'>"+item.number+"</option> <option value='Fall' id='Fall'>Fall</option></select>";
                               
                               
                                if(item.number>1){
                                   string = string +"<select name = 'Semester'><br><br><option value='Spring' id ='Spring'>"+item.semester+"</option> <option value='Fall' id='Fall'>Fall</option></select>";
                               }
                
                               string = string + "</td></tr>";
                               $("#viewcore").append(string);          

			
				 });
				
			},
            
		async: true,
        dataType: "json",
        error: function(req, err) {console.log(err);}
	
		}); 
    
    //checked ap part of table 
            	$.ajax({
		          url: "php/apcore.php",
		          success: function(data) {
                      console.log(JSON.stringify(data));
			     $.each(data, function(i, item) {
                     var string ="";
                               
                               string = string+"<tr><td>" + item.title +"</td><td><input class ='boxes' type='checkbox' checked='checked' name='count' value='"+item.title+"'/>&nbsp;";
                               
                               if(item.number>1){
                                   string = string +"<input class ='boxes' type='checkbox' checked='checked' name='count' value='"+item.title+"'/>&nbsp;";
                               }
                               
                               string = string + "</td><td><select name = 'Semester'><br><br><option value='Spring' id ='Spring'>"+item.number+"</option> <option value='Fall' id='Fall'>Fall</option></select>";
                               
                               
                                if(item.number>1){
                                   string = string +"<select name = 'Semester'><br><br><option value='Spring' id ='Spring'>"+item.semester+"</option> <option value='Fall' id='Fall'>Fall</option></select>";
                               }
                
                               string = string + "</td></tr>";
                               $("#viewcore").append(string);          

			
				 });
				
			},
            
		async: true,
        dataType: "json",
        error: function(req, err) {console.log(err);}
	
		}); 
    
    
    //checked reqs part of table 
            	$.ajax({
		          url: "php/reqscore.php",
		          success: function(data) {
                      console.log(JSON.stringify(data));
			     $.each(data, function(i, item) {
                     var string ="";
                               
                               string = string+"<tr><td>" + item.title +"</td><td><input class ='boxes' type='checkbox' name='count' value='"+item.title+"'/>&nbsp;";
                               
                               if(item.number>1){
                                   string = string +"<input class ='boxes' type='checkbox' name='count' value='"+item.title+"'/>&nbsp;";
                               }
                               
                               string = string + "</td><td><select name = 'Semester'><br><br><option value='Spring' id ='Spring'>"+item.number+"</option> <option value='Fall' id='Fall'>Fall</option></select>";
                               
                               
                                if(item.number>1){
                                   string = string +"<select name = 'Semester'><br><br><option value='Spring' id ='Spring'>"+item.semester+"</option> <option value='Fall' id='Fall'>Fall</option></select>";
                               }
                
                               string = string + "</td></tr>";
                               $("#viewcore").append(string);          

			
				 });
				
			},
            
		async: true,
        dataType: "json",
        error: function(req, err) {console.log(err);}
	
		}); 
            
        });
            
            
            
         
     
        
    