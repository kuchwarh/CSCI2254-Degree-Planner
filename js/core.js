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
                               
                               string = string + "</td><td><select name = 'Semester'><option value=''>&nbsp;</option><option value='Fall1'>First Year, Fall</option><option value='Spring1'>First Year, Spring</option><option value='Fall2'>Second Year, Fall</option><option value='Spring2'>Second Year, Spring</option><option value='Fall3'>Third Year, Fall</option><option value='Spring3'>Third Year, Spring</option><option value='Fall4'>Fourth Year, Fall</option><option value='Spring4'>Fourth Year, Spring</option></select>";
                               
                               
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
                                   string = string +"<input class ='boxes' type='checkbox' name='count' value='"+item.title+"'/>&nbsp;";
                               }
                               
                               string = string + "</td><td><select name = 'Semester'><option value=''>&nbsp;</option><option value='Fall1'>First Year, Fall</option><option value='Spring1'>First Year, Spring</option><option value='Fall2'>Second Year, Fall</option><option value='Spring2'>Second Year, Spring</option><option value='Fall3'>Third Year, Fall</option><option value='Spring3'>Third Year, Spring</option><option value='Fall4'>Fourth Year, Fall</option><option value='Spring4'>Fourth Year, Spring</option></select>";
                               
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
                 
                     
                            switch (item.semester) {
                                    case "fall":        
                            switch (item.year) {
                                    case "1":
                                     string = string + "</td><td><select name = 'Semester'><option value=''>&nbsp;</option><option value='Fall1' selected>First Year, Fall</option><option value='Spring1'>First Year, Spring</option><option value='Fall2'>Second Year, Fall</option><option value='Spring2'>Second Year, Spring</option><option value='Fall3'>Third Year, Fall</option><option value='Spring3'>Third Year, Spring</option><option value='Fall4'>Fourth Year, Fall</option><option value='Spring4'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "2":
                                    string = string + "</td><td><select name = 'Semester'><option value=''>&nbsp;</option><option value='Fall1'>First Year, Fall</option><option value='Spring1'>First Year, Spring</option><option value='Fall2' selected>Second Year, Fall</option><option value='Spring2'>Second Year, Spring</option><option value='Fall3'>Third Year, Fall</option><option value='Spring3'>Third Year, Spring</option><option value='Fall4'>Fourth Year, Fall</option><option value='Spring4'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "3":   
                                        break;
                                    case "4":
                                        break;
                                }
                                    break;
                                  case "spring":
                                    
                            switch (item.year) {
                                    case "1":
                                        break;
                                    case "2":
                                        break;
                                    case "3":
                                        break;
                                    case "4":
                                        break;
                                }
                                    break;
                                              }
                                    
                               
                               
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
            
            
            
         
     
        
    