$(document).ready(function(){
         
    //just the core part
            	$.ajax({
		          url: "php/coretable.php",
		          success: function(data) {
                      console.log(JSON.stringify(data));
			     $.each(data, function(i, item) {
                     var string ="";
                               
                               string = string+"<tr><td>" + item.title +"</td><td><input class ='boxes' type='checkbox' name='count[]' value='"+item.id+"'/>&nbsp;";
                               
                               
                               string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                               
                               
                       
                
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
                               
                               string = string+"<tr><td>" + item.title +"</td><td><input class ='boxes' type='checkbox' checked='checked' name='count[]' value='"+item.id+"'/>&nbsp;";
                               
                               
                               
                               string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'</option></select>";
                               
                                
                
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
                               
                               string = string+"<tr><td>" + item.title +"</td><td><input class ='boxes' type='checkbox' name='count[]' value='"+item.id+"'/>&nbsp;";
                               
                               
                            switch (item.semester) {
                                    case "fall":        
                            switch (item.year) {
                                    case "1":
                                     string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "' selected>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "2":
                                    string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "' selected>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "3": 
                                    string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "' selected>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "4":
                                    string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "''>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "' selected>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                                }
                                    break;
                                  case "spring":
                                    
                            switch (item.year) {
                                   case "1":
                                     string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "' selected>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                              case "2":
                                    string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "' selected>Second Year, Fall</option><option value='spring, 2, " + item.id + "' selected>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "3": 
                                    string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "'>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "' selected>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "'>Fourth Year, Spring</option></select>";
                                        break;
                                    case "4":
                                    case "4":
                                    string = string + "</td><td><select name = 'semester[]'><option value=''>&nbsp;</option><option value='fall, 1, " + item.id + "'>First Year, Fall</option><option value='spring, 1, " + item.id + "'>First Year, Spring</option><option value='fall, 2, " + item.id + "'>Second Year, Fall</option><option value='spring, 2, " + item.id + "''>Second Year, Spring</option><option value='fall, 3, " + item.id + "'>Third Year, Fall</option><option value='spring, 3, " + item.id + "'>Third Year, Spring</option><option value='fall, 4, " + item.id + "'>Fourth Year, Fall</option><option value='spring, 4, " + item.id + "' selected>Fourth Year, Spring</option></select>";
                                        break;
                                }
                                    break;
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
            
            
            
         
     
        
    