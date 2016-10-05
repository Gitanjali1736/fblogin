// JavaScript Document
 function validate()
      {
      
         if( document.myForm.Fname.value == "" )
         {
            alert( "Please provide your first name!" );
			document.myForm.Fname.focus() ;
            return false;
         }
		 
		 if( document.myForm.Lname.value == "" )
         {
            alert( "Please provide your second name!" );
            document.myForm.Lname.focus() ;
            return false;
         }
		 
		 if( document.myForm.Mno.value == "" )
         {
            alert( "Please provide your number!" );
            document.myForm.Mno.focus() ;
            return false;	
		 }
		 var mail = document.myForm.Mno.value;  
		            /*mail=>phone*/
		  var mailformat =  /^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i; 
		 
		  if(!mail.match(mailformat))
		 	{
			    alert("Enter valid mail or mobile number")
              	return false;
			}  
			
		 	
		 if( document.myForm.Renmno.value == "" )
         {
            alert( "Please re enter your number!" );
            document.myForm.Renmno.focus() ;
            return false;
         }
		  
		  var mno = document.myForm.Mno.value;   
		  var remno = document.myForm.Renmno.value;
		 if( mno != remno )
         {
            alert( "Email doesn't match!" );
           	return false;
         }
		  
		 if( document.myForm.Newpass.value == "" )
         {
            alert( "Please provide a password!" );
            document.myForm.Newpass.focus() ;
            return false;
         }
		 
		/*var password = document.myForm.Newpass.value;
		 
		 var pasregex  = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;*/
		 if(!password.match(pasregex))
		 {
			 alert("Enter a correct password");
				return false;}
			 
		 if (password.length<8)
         {
                alert("Enter a strong password");
				return false;
         } 
		   
		 var day = document.myForm.day.value;
		 if (day == "")
    	 {
        		alert("Please select the day!");
        		return false;
         } 
		   
		 var month = document.myForm.month.value;
		 if (month == "")
    	 {
        		alert("Please select the month!");
        		return false;
         } 
		   
		 var year = document.myForm.year.value;
		 if (year == "")
    	 {
        		alert("Please select the year!");
        		return false;
         }
		 
		 var today = new Date();
    	 var thisyear = today.getFullYear();
		 var age = document.myForm.year.value;
		 var difference = thisyear-age;
		 if (difference<13)
		 {
		 	alert("You must be 13 years old or more");
			return false;
		 }
		 
		 if( document.myForm.gender.checked)
		 {
    			alert('Please select the gender');
    			return false;
		 }
		 else
		{	
    			return true;
		}
	  }