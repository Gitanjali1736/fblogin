<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/facebook.css">
</head>

<body>
<div class="container-fluid">
	<div class="row topheader">
    	<div class="col-sm-4 col-xs-offset-2">
        <a href="default.asp" target="_blank">
        	<img src="<?php echo base_url(); ?>img/fb.png"/></a>
        </div>
	
    
    	<div class="col-sm-2">
        <form action="index.php/facebooklogin/login" method="post">
        	 <div class="form-group">
      			<label for="email">Email or Phone:</label>
      				<input type="email" class="form-control" id="email" name="email" >
    		</div>
            </div>
            <div class="col-sm-2">
         		<div class="form-group">
      		<label for="pwd">Password:</label>
      		<input type="password" class="form-control" id="pwd" name="password" >
            <a href="#" >Forgotten password?</a>
   		 </div>
         </div>
         
         <button type="submit" class="btn btn-primary">Log in</button>
           </form>          
    </div>
    <div class="row">
    	<div class="col-sm-4 col-xs-offset-2">
    		<h4><b> Facebook helps you connect and share with people in your life</b></h4>
			<img src="<?php echo base_url(); ?>img/pyNVUg5EM0j.png"/>
     	</div> 
       <div class="col-sm-4 col-xs-offset-1 "> 
       		<h2> <b>Create an account</b></h2>	
            <h5> <b> It's free and always will be.</b></h5>
            	<div class="col-sm-6"> 
                 	
            			<div class="form-group">
     						 <label for="fname"></label>
     				 			<input type="text" class="form-control" id="fname"placeholder="First name">
                		</div> 
                       
					</div>
                
                <div class="col-sm-6">      
          			<div class="form-group">
     				 <label for="lname"></label>
     				 <input type="text" class="form-control" id="lname"placeholder="Last Name">
          			 </div>
                 </div>
                 
                 <div class="form-group">
     				 <label for="mno"></label>
     				 <input type="text" class="form-control" id="mno"placeholder="Mobile number or email address">
           		</div>
				<div class="form-group">
     				 <label for="ren"></label>
     				 <input type="text" class="form-control" id="ren"placeholder="Re-enter mobile number or email addres">
          		 </div> 
                 <div class="form-group">
     				 <label for="pass"></label>
     				 <input type="text" class="form-control" id="pass"placeholder="New password">
          		 </div>
                 
                 
                 <div class="col-sm-0">  
					<h5> Birthday</h5>
                    </div>
                  
                  
                        <div class="row dropdown">
                        	<div class="col-sm-2">
                            	<label class="control-label" for="day"></label>
                                	<select>
                                    <option value="day">Day</option>
                                    <option value="day">1</option>
                                    <option value="day">2</option>
                                    <option value="day">3</option>
                                    <option value="day">4</option>
                                    <option value="day">5</option>
                                    
                                    
                                    
                                    </select>
                            </div>
                            
                            <div class="col-sm-2">
                            	<label class="control-label" for="month"></label>
                                	<select>
                                     <option value="month">Month</option>
                                    <option value="month">Jan</option>
                                    <option value="month">Feb</option>
                                    <option value="month">March</option>
                                   
                                    
                                    
                                    
                                    </select>
                            </div>
                            
                            <div class="col-sm-2">
                            	<label class="control-label" for="year"></label>
                                	<select>
                                    <option value="year">Year</option>
                                    <option value="year">1991</option>
                                   	<option value="year">1992</option>
                                    <option value="year">1993</option>
                                    <option value="year">1994</option>
                                    <option value="year">1995</option>
                                    
                                    
                                    </select>
                            </div>
                            
                           	<div class="link">
                                 <a href="#"<h6>why do i need to provide my date of birth?</h6></a>
                            		
                            </div>
                            <div class="row">
                            	<div class="col-sm-4 col-xs-offset-1">
                            		<div class="radio">
      									<label><input type="radio" name="optradio">Female</label>
    									<label><input type="radio" name="optradio">Male</label>
    								</div>
                            	</div>
                            </div>
                            <div class="row terms">
                            	<div class="col-sm-8 col-xs-offset-1">
                                	<h6> By clicking Create an account,you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>,including our <a href="#">Cookie use.</a></h6>
                                    </div>
                            </div>
                                 <div class="row button">
                            	<div class="col-sm-4 ">   
                                    <button type="submit" class="btn btn-success">Create an account</button>
                                    </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6"> 
                                	<h6> <a href="#">Create an account</a> for a celebrity,band or business</h6>
                            
                            
     				
    					 
						 
    			   
                 </div>
                 
                
                 
          </div>       
                 
                 


</div>

</body>
</html>

