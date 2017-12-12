<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thực hành tạo giao diện với Boostrap</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	footer{
  		background-color:  #555;
  		color: white;
  		padding: 15px;
  	}
  </style>
</head>
<body>
    <div class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
    		    	<span class="icon-bar"></span>
    		    	<span class="icon-bar"></span>
    		    	<span class="icon-bar"></span>
    		    </button>
    			<a class="navbar-brand" href="#">Sangbk'website</a>

    		</div>
    		<div class="collapse navbar-collapse" id="mynav">
    			<ul class="nav navbar-nav">
    				<li class="active"><a href="#">Home</a></li>
    				<li><a href="#">Message</a></li>
    			</ul>
    			<form class="navbar-form navbar-right" role="search">
    				<div class="form-group input-group">
    					<input type="text" class="form-control" placeholder="Search...">
    					<span class="input-group-btn">
    						<button class="btn btn-success" type="button"><span class="glyphicon glyphicon-search"></span></button>
    					</span>
    				</div>
    			</form>
    			<ul class="nav navbar-nav navbar-right">
    			   <li>
    			   	  <a href="#"><span class="glyphicon glyphicon-user"></span>My account</a>
    			   </li>
    				
    			</ul>

    		</div>
    	</div>
    </div>
    <div class="container text-center">
    	<div class="row">
    		<div class="col-lg-3 well">
    			<div class="well">
    				<p><a href="#"> My Profile</a></p>
    				<img src="bird.jpg" class="img-circle" height="65" width="65" alt="avatar">
    			</div>
    			<div class="well">
    				<p><a href="#">Interests</a></p>
    				<p>
    					<span class="lable label-default">News</span>
    					<span class="lable label-primary">WS3schools</span>
    					<span class="lable label-success">Sports</span>
    				</p>
    			</div>
    			<div class="alert alert-success fade in">
    				<a href="#" class="close" data-dismiss="alert" aria-lable="close">x</a>
    				<p><strong>Eeyyyyyy ! </strong></p>
    				People are looking at your profile . Find out Who
    			</div>
    			<p><a href="#">Link</a></p>
    			<p><a href="#">Link</a></p>
    			<p><a href="#">Link</a></p>
    			<p><a href="#">Link</a></p>
    		</div>
    		<div class="col-lg-7">
    			<div class="row">
    				<div class="col-lg-12">
    					<div class="panel panel-default text-left">
    						<div class="panel-body">
    							<p contenteditable="true">Status : Feeling Blue</p>
    							<button type="button" class="btn btn-default btn-sm">
    								<span class="glyphicon glyphicon-thumbs-up">
    									Like
    								</span>
    							</button>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-lg-3">
    					<div class="well">
    						<p>John</p>
    						<img src="btn_quantam.gif" class="img-circle" height="55" width="55" alt="avatar">
    					</div>
    				</div>
    				<div class="col-lg-9">
    					<div class="well">
    						<p>Don't thinking just do it </p>
    					</div>
    				</div>

    			</div>
    			<div class="row">
    				<div class="col-lg-3">
    					<div class="well">
    						<p>John</p>
    						<img src="btn_quantam.gif" class="img-circle" height="55" width="55" alt="avatar">
    					</div>
    				</div>
    				<div class="col-lg-9">
    					<div class="well">
    						<p>Don't thinking just do it </p>
    					</div>
    				</div>

    			</div>
    			<div class="row">
    				<div class="col-lg-3">
    					<div class="well">
    						<p>John</p>
    						<img src="btn_quantam.gif" class="img-circle" height="55" width="55" alt="avatar">
    					</div>
    				</div>
    				<div class="col-lg-9">
    					<div class="well">
    						<p>Don't thinking just do it </p>
    					</div>
    				</div>

    			</div>
    		</div>
    		<div class="col-lg-2 well">
    			<div class="thumbnail">
    				<p>Upcoming Events : </p>
    				<img src="btn_quantam.gif" alt="paris" width="400" height="300">
    				<p><strong>Paris</strong></p>
    				<p>Fri  27 November 2017</p>
    				<button class="btn btn-primary">Info</button>
    			</div>
    			<div class="well">ADS</div>
    		</div>
    	</div>
    </div>
    <footer class="container-fluid text-center">
    	<p>Footer Text</p>
    </footer>
	
</body>
</html>