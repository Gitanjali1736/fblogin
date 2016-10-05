<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
  </script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/facebook.css">
<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/validatenum.js"></script>
   
   
 <script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="mno"
    x = document.getElementById("mno").value;

    // If x is Not a Number 
    if (isNaN(x)) {
        text = "Input not valid";
    } else {
        text ="Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
    
   
   
</head>

<body>

 


<div class="container-fluid">
    <div class="row topheader">
        <div class="col-sm-4 col-xs-offset-2">
        <a href="default.asp" target="_blank">
            <img src="<?php echo base_url(); ?>img/fb.png"/></a>
        </div>
    
    
        <div class="col-sm-2">
        <form action="index.php/client_ctrl/cli_register" method="post" >
             <div class="form-group">
                <label for="email"><font color=#FFFFFF>Email or Phone:</font></label>
                    <input type="email" class="form-control" id="email" name="email" >
            </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
            <label for="pwd"><font color=#FFFFFF>Password:</font></label>
            <input type="password" class="form-control" id="pwd" name="password" >
            <a href="#" >Forgotten password?</a>
         </div>
         </div>
          <button type="submit" class="btn btn-primary" >Log in</button>
        
           </form>          
    </div>
    <div class="row">
        <div class="col-sm-4 col-xs-offset-2">
            <h4><b><font color=#3B5998>Facebook helps you connect and share with people in your life</font></b></h4>
            <img src="<?php echo base_url(); ?>img/pyNVUg5EM0j.png"/>
        </div> 
       <div class="col-sm-4 col-xs-offset-1 "> 
            <h2> <b>Create an account</b></h2>  
            <h5> <b> It's free and always will be.</b></h5>
                <div class="col-sm-6"> 
                    
                        <form action="index.php/ctrl_client/register" name="myForm" method="post" onsubmit="return(validate());">
                        <!--index/controller/functionname-->
                        <div class="form-group">
                             <label for="fname"></label>
                                <input type="text" class="form-control " id="fname" name="fname" placeholder="First Name" /> 
                        </div> 
                       
                    </div>
                
                <div class="col-sm-6">      
                    <div class="form-group">
                     <label for="lname"></label>
                     <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                     </div>
                 </div>
                 
                 <div class="form-group">
                     <label for="mno"></label>
                     <input type="text" class="form-control" id="mno" name="mno"  placeholder="Mobile number or email address">
                     
                </div>
                
                
                <div class="form-group">
                     <label for="ren"></label>
                     <input type="text" class="form-control" id="ren" name="ren" placeholder="Re-enter mobile number or email addres">
                 </div> 
                 <div class="form-group">
                     <label for="pass"></label>
                     <input type="password" class="form-control" id="pass" name="pass" maxlength="16" placeholder="New password">
                 </div>
                 
                 
                 <div class="col-sm-0">  
                    <label for="user_bday" id="bday" name="bday"><h3> Birthday</h3></label>
                    </div>
                  
                  
                        <div class="row dropdown">
                            <div class="col-sm-2">
                                <label class="control-label" ></label>
                                    <select name="day">
                                    <option value="">Day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    
                                    
                                    </select>
                            </div>
                            
                            <div class="col-sm-2">
                                <label class="control-label" ></label>
                                    <select name="month" id="month">
                                    <option value="">Month</option>
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">March</option>
                                    
                                    
                                    </select>
                            </div>
                            
                            <div class="col-sm-2">
                                <label class="control-label" ></label>
                                    <select name="year" id="year">
                                    <option value="">year</option>
                                    <option value="1993">1991</option>
                                    <option value="1996">1992</option>
                                    <option value="2001">1993</option>
                                    <option value="2004">1994</option>
                                    <option value="2005">2005</option>
                                   
                                    
                                    
                                    </select>
                            </div>
                            
                            <div class="link">
                                 <a href="#"<h6>why do i need to provide my date of birth?</h6></a>
                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-offset-1">
                                    <div class="radio" >
                                        <label><input type="radio" id="g_female" name="gender" value="Female">Female</label>
                                        <label><input type="radio" id="g_male" name="gender" value="Male">Male</label>
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
                               
                                  
                                    <button type="submit" class="btn btn-success" onsubmit="validate(check)">Create an account</button>
                                     </form>    
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

