<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src=""></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.form.js"></script>





<style>

.header
{
  padding-top:15px;
  background-color:#3B5998;
  height:50px;
  color:#FFFFFF;
  
}
img{
  height:30px;
  }
.high-res-image{
  background: url("file:///C|/wamp/www/facebook/img/fbpic.png");
    background-size: 70% 100%;
    background-repeat: no-repeat;}  
.topheader
{
  padding-top:100px;
  
   background: url("file:///C|/wamp/www/facebook/img/black.png");
    background-size: 60% 100%;
    background-repeat: no-repeat;
  background-position:center;
  
  background-color:#E9EBEE;}
  
a:hover {
    background-color: gray;
}

</style>
</head>



<body>
<form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="<?php base_url()?>/fbserver/index.php/Ser_ctrl/pic_upload">
   

<div class= "container-fluid">
    <div class= "row header" >
        
          <div class="col-sm-7 col-xs-offset-1">
              <img src="file:///C|/wamp/www/facebook/img/fblogo.png" />
          <input type="text" id="search" placeholder="Search">
                <a href="#" <span class = "glyphicon glyphicon-search"></span></a>
           </div>
           
           
           <div class="col-sm-4 ">
              <?php
        if(isset($data))
        {
          foreach($user as $data)
        ?>
        
                <img height="20px" width="20px" src="<?php echo $data['file:///C|/wamp/www/facebook/application/controllers/vchr_prof_pic'] ?> " />
        
        <?php   
                  echo $data['vchr_first_name'];
        }
                ?>
              <a href="#" style="color:white">Home |</a>
                <a href="#" style="color:white">Find Friends  </a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Friend Requests"><i class="glyphicon glyphicon-user" style="color:black"></i></a>
                
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="glyphicon glyphicon-comment" style="color:black"></i></a>
                  
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifications"><i class="glyphicon glyphicon-globe"style="color:black"></i></a>
            </div>
                 
           
        </div> 
        
        
        <div class="row topheader">
       
        <div class="col-sm-2 col-xs-offset-3">
        
          <div class="high-res-image">
            <a href="#" <span class = "glyphicon glyphicon-camera" style="color:white"></span><span class="label label-default"><button id="myBtn" type="button">Update profile picture</button></span></a>
            
            <!--<a href="#"><img height="100px" width="100px" src="file:///C|/wamp/www/facebook/img/pic.png" alt="" /></a>--></div>
            <!--<div class="high-res-text">
            <a href="#"<span class = "glyphicon glyphicon-camera" style="color:white"></span>Add Photo</a>
            </div>-->
            </div>
            <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  
   <div class="modal-body">

   <input type="file" name="userfile" size="20"/>
 <input type="submit" name="image_form_submit" value="update"/>

   
  <!-- <a href="#" <span class = "glyphicon glyphicon-plus" style="color:black"></span><span class="label label-default">Upload Photo  |  <span class = "glyphicon glyphicon-camera" style="color:black"></span>  Take Photo</span>  |   <span class = "glyphicon glyphicon-pencil" style="color:black"></span></a>-->
    
    
    <div class="uploading none">
        <label>&nbsp;</label>
        
    </div>
</form></div>

   
    <span class="close">×</span>
    </div>
  </div>

</div>
         
         <div class="col-sm-7">
       <?php
       if(isset($data))
       {
             echo $data['vchr_first_name'];
           echo $data['vchr_last_name'];
           }
                ?>
                </div>
         <div class="col-sm-4 ">
              <button type="button" class="btn btn-default">Update Info</button>
                    <button type="button" class="btn btn-default">View Activity Log</button>
</div>
</div>
</div>

 <!-- <div id="images_preview"><img src="<?php echo($url = base_url().'uploads/'.$filepath);?>"</div> -->

</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#images').on('change',function(){
        $('#multiple_upload_form').ajaxForm({
            //display the uploaded images
            target:'#images_preview',
            beforeSubmit:function(e){
                $('.uploading').show();
            },
            success:function(e){
                $('.uploading').hide();
            },
            error:function(e){
            }
        }).submit();
    });
});
</script>

<script>
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  
}
</script>

</body>
</html>
