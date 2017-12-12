<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thực hành với Boostrap tao layout trang web
	</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row content">
			<div class="col-lg-3 sidenav">
				<h4>Sangbk's Blog</h4>
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#section1">Home</a></li>
					<li><a href="#section2">Friends</a></li>
					<li ><a href="#section3">Family</a></li>
					<li><a href="#section4">Photos</a></li>
				</ul><br>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Blog...">
					<span class="input-group-btn"><button class="btn btn-success" type="button"><span class="glyphicon glyphicon-search"></span></button></span>
				</div>
			</div>
			<div class="col-lg-9">
				<h4><small>RECENT POSTS</small></h4>
				<hr>
				<h2>I LOVE FOOD</h2>
				<h5><span class="glyphicon glyphicon-time"></span> Post by Sangbk, Sep 13, 2017</h5>
				<h5><span class="label label-danger">Food</span><span class="label label-primary">IPSUM</span></h5>
				<p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<br><br>
				<h4><small>RECENT POSTS</small></h4>
				<hr><hr>
				<h2>Officially Blogging</h2>
				<h5><span class="glyphicon glyphicon-time"></span>Post by Sangbk Sep 20, 2017</h5>
				<h5><span class="label label-success">Lorem</span></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr>
                <h4>Leave a Comment : </h4>
                <form role="form">
                	
                	<div class="form-group">
                		<textarea class="form-control" rows="3" required="true">
                			
                		</textarea>

                	</div>
                	<button type="submit" class="btn btn-success">Submit</button>

                </form>
                <br><br><br>
                <p><span class="badge">2</span> Comments : </p>
                <div class="row">
                	<div class="col-lg-2 text-center">
                		<img src="btn_quantam.gif" class="img-circle" height="65" width="65" alt="Avatar">
                	</div>
                	<div class="col-lg-10">
                		<h4>Anja <small>Sep 29, 2015 , 9:12 PM</small></h4>
                		<p>Keep up the GREATE work ! I'm cheering for you !! Lorem ipsum dolor ...................!</p>
                		<br>

                	</div>
                	<div class="col-lg-2 text-center">
                		<img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                	</div>
                	<div class="col-lg-10">
                		<h4>Jonh Row <small>Sep 25, 2015, 8:25PM</small></h4>
                		<p>I am so happy for you man ! Finally . I am looking forward ................... ! </p>
                		<br><br>
                		<p><span class="badge">1</span>Comment : </p><br>
                		<div class="row">
                			<div class="col-lg-2 text-center" >
                				<img src="web-design.jpeg" class="img-thumbnail" height="65" width="65" alt="Avatar">
                            
                			</div>
                			<div class="col-lg-10">
                				 <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                                    <p>Me too! WOW!</p>
                                    <br>
                			</div>
                		</div>
                	</div>
                </div>
			</div>

		</div>
	</div>
	<footer class="container-fluid">
		<p>Footer Text</p>
	</footer>
</body>
</html>