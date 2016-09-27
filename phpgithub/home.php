<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.container-fluid{

}
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

.topheader
{
	padding-top:20px;
	border-top:thin;
	border-color:#CCC;
	height:50px;
	
	
}
.top{
height: 1px;
padding-left:160px;
  width:95%;
  
  margin: 10px ;
  
  background-color: #FFFFFF;/*margin hidden using white color*/
}
.row
{
	padding-left:20px;
}


</style>
</head>


<body>
	<div class= "container-fluid">
		<div class= "row header" >
        
        	<div class="col-sm-7 col-xs-offset-1">
            	<img src="file:///C|/wamp/www/facebook/img/fblogo.png" /> </a>
   	 			<input type="text" id="search" placeholder="Search"><a href="#""<span class = "glyphicon glyphicon-search"></span></a>
           </div>
           
           
           <div class="col-sm-4 ">
           		<?php
					foreach($user as $data)
				?>
				
                <img height="20px" width="20px" src="<?php echo $data['vchr_prof_pic'] ?> " />
				
				<?php		
            			echo $data['vchr_first_name'];
                ?>
             	<a href="#" >Home</a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Friend Requests"><i class="glyphicon glyphicon-user"></i></a>
                
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="glyphicon glyphicon-comment"></i></a>
                	
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifications"><i class="glyphicon glyphicon-globe"></i></a>
           	</div>
                 
           
        </div>  
       	<div class="row topheader">
        	<div class="col-sm-3">
            
            	<?php
					foreach($user as $data)
				?>
				
				<img height="20px" width="20px" src="<?php echo $data['vchr_prof_pic'] ?> " />
				
                <?php
				     echo $data['vchr_first_name'];
					 echo $data['vchr_last_name'];
               	?>
                <a href="file:///C:/wamp/www/facebook/application/views/propic.php""<span class = "glyphicon glyphicon-pencil"></span>Edit Profile</a>
                
      
      		</div>
      		<div class "col-sm-4">
			
            	<a href="#"><span class="glyphicon glyphicon-camera"></span>Photo/Video</a> |
                
                <a href="#"><span class="glyphicon glyphicon-folder-open"></span>   Photo Album</a>
            </div>
      </div>
	
    <div class="row top"><!--top-->
	
    	<div class="col-sm-5 col-xs-offset-3"> 
            	<tr><img height="20px" width="20px" src="<?php echo $data['vchr_prof_pic'] ?> "  />
				<div class="form-group">
				
		
				<textarea class="form-control" placeholder="What's on your mind?" rows="3">
                                      </textarea>
									  </div>         
                                         
     	 			</div> 
        </div>
		 
		 
		 
    <div class="row">
	
    	<div class="col-sm-4 col-xs-offset-3">
        		
            			    <a href="#"  data-toggle="tooltip" data-placement="top" title="Tag people in your posts"><span class="glyphicon glyphicon-user"></span></a>
							<a href="#" data-toggle="tooltip" data-placement="top" title="Check in"><span class="fa fa-smile-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Check in"><span class="glyphicon glyphicon-map-marker"></span></a>             
          					 
        </div>
        	<div class="col-sm-2">


			
            	<button class="btn btn-default" type="button" data-toggle="dropdown">Friends
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><p> Who should see this</p></li>
	  <li class="divider"></li>
      <li><a href="#">Public</a></li>
      <li><a href="#">Friends</a></li>
	   <li><a href="#">Only Me</a></li>
    </ul>
	<button type="button" class="btn btn-primary" >Post</button>
     </div>
  </div>
        
      
      
      
      
      
      
      
      
       </div>
	   </div>
</body>
</html>
