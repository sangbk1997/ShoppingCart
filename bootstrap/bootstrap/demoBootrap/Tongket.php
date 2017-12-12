<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tổng hợp tất cả các class trong boostrap</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	  .affix {
      top:0;
      width: 100%;
      z-index: 10000 !important;
  }
  </style>
</head>
<body>
	<h1>Chương trình tổng kết với Boostrap</h1>
    <!-- .active  -->
    <table class="table">
    	<thead>
    	     <tr>
    	     	<th>Firstname</th>
    		    <th>Lastname</th>
    		    <th>Email</th>
    	     </tr>
    	     <tr >
    	     	<td>Default</td>
    	     	<td>Default</td>
    	     	<td>Default</td>
    	     
    	     </tr>
    	     <tr class="success">
    	     	<td>Success</td>
    	     	<td>Success</td>
    	     	<td>Success</td>
    	     </tr>
    	     <tr class="danger">
    	     	<td>Danger</td>
    	     	<td>Danger</td>
    	     	<td>Danger</td>
    	     </tr>
    	     <tr class="info">
    	     	<td>info</td>
    	     	<td>info</td>
    	     	<td>info</td>

    	     </tr>
    	     <tr class="warning">
    	     	<td>warning</td>
    	     	<td>warning</td>
    	     	<td>warning</td>
    	     </tr>
    	     <tr class="active">
    	     	<td>active</td>
    	     	<td>active</td>
    	     	<td>active</td>
    	     </tr>
    		
    	</thead>
    </table>

    <!-- Active với thanh tiêu đề  -->
    <nav class="navbar navbar-inverse">

       <div class="container-fluid">
       	  <div class="navbar-header">
       	  	  <a href="$" class="navbar-brand">My Website</a>
       	  </div>
       	  <ul class="nav navbar-nav">
       	  	  <li class="active"><a href="#">Home</a></li>
       	  	  <li ><a href="#">Page1</a></li>
       	  	  <li ><a href="#">Page2</a></li>
       	  	  <li ><a href="#">Page3</a></li>
       	  	  <li ><a href="#">Page4</a></li>
       	  	  <li ><a href="#">Page5</a></li>
       	  	  <li ><a href="#">Page6</a></li>
       	  	  <li ><a href="#">Page7</a></li>
       	  	  <li ><a href="#">Page8</a></li>
       	  	  <li ><a href="#">Page9</a></li>
       	  </ul>
       </div>   	
    </nav>
    <!-- Active for blue background cho item trong 1 list duoc nhan  -->
    <div class="list-group">
    	<a href="#" class="list-group-item active">first</a>
    	<a href="#" class="list-group-item">Second</a>
    	<a href="#" class="list-group-item">Third</a>
    </div>
    <!-- Active for button is choose -->
    <h2>Button States</h2>
    <button type="button" class="btn btn-primary">Primary Button</button>
    <button type="button" class="btn btn-primary active">Active Primary</button>
    <button type="button" class="btn btn-primary disabled">Disable Primary</button>
    <!-- active for thanh progress  -->
    <div class="progress">
    	<div class="progress-bar progress-striped active" role="progressbar"aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
    </div>
    </div>
    <!-- Active for dropdown -->
    <div class="dropdown">
    	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials</button>
    	<span class="caret"></span>
    	<ul class="dropdown-menu">
    		<li><a href="#">Normal</a></li>
    		<li class="disabled"><a href="#">Disable</a></li>
    		<li class="active"><a href="#">Active</a></li>
    		<li><a href="#">Normal</a></li>
    	</ul>
    </div>
    <!-- Active duoc su dung trong phan trang  -->
    <ul class="pagination">
    	<li><a href="#">1</a></li>
    	<li class="active"><a href="#">2</a></li>
    	<li><a href="#">3</a></li>
    	<li><a href="#">4</a></li>
    	<li><a href="#">5</a></li>
    </ul>
    <!-- Active for affix boostrap -->
    <div class="row">
    	<div class="col-lg-3">
    		<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
    			
    			<li class="active"><a href="#section1">Section1</a></li>
    			<li><a href="#section2">Section2</a></li>
    			<li><a href="#section3">Section3</a></li>
    		</ul>

    	</div>
    	<div class="col-lg-9">
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    		<h1>Some text to enable scrooli</h1>
    	</div>
    </div>
    <!-- Alert su dung trong box -->
    <div class="alert alert-success">
    	<h2>Thông báo success</h2>
    </div>
     <div class="alert alert-danger">
    	<h2>Thông báo danger</h2>
    </div>
     <div class="alert alert-info">
    	<h2>Thông báo info</h2>
    </div>
     <div class="alert alert-warning">
    	<h2>Thông báo waring</h2>
    </div>
     <div class="alert alert-link">
    	<h2>Thông báo link</h2>
    </div>

    <!-- Sử dụng bagde  -->
     <div class="container">
     	<a href="#">News <span class="badge">5</span></a>
     	<a href="#">Comments <span class="badge">10</span></a>
     	<a href="#">Updates <span class="badge">5</span></a>
     </div>
     <!-- Hướng dẫn sủ dụng bg.danger -->
     <h2>Contextual Backgrouds </h2>
     <p class="bg-danger">Da co loi xay ra ở đây</p>
     <p class="success">Yêu cầu thành công</p>\
     <!-- Demo với breadCrumb -->
     <ul class="breadcrumb">
     	<li><a href="#">Home</a></li>
     	<li><a href="#">Private</a></li>
     	<li><a href="#">Picture</a></li>
     	<li class="active"><a href="#">Vacation</a></li>
     </ul>
     <!-- Thưc hành với button -->
     <h2>Thực hành với Button </h2>
     <button type="button" class="btn">Just btn</button>
     <button type="button" class="btn btn-success">Success</button>
     <button type="button" class="btn btn-default">Default</button>
     <button type="button" class="btn btn-primary">Primary</button>
     <button type="button" class="btn btn-info">Info</button>
     <!-- Thuc hành với button group -->
     <div class="btn-group">
     	<button type="button" class="btn btn-primary">Apple</button>
     	<button type="button" class="btn btn-primary">SamSung</button>
     	<button type="button" class="btn btn-info">Sony</button>
     </div>
     <!-- Thuc hành về caption và thumbnail -->
     <div class="row">
     	<div class="col-lg-4">
     		<div class="thumbnail">
     			<a href="nature.jpg"" target="_blank">
     				<img src="nature.jpg" alt="lights" style="width: 100%">
     				<div class="caption">Ảnh 1 </div>
     			</a>
     		</div>
     	</div>
     		<div class="col-lg-4">
     		<div class="thumbnail">
     			<a href="lights.jpg" target="_blank">
     				<img src="lights.jpg" alt="lights" style="width: 100%">
     				<div class="caption">Ảnh 2 </div>
     			</a>
     		</div>
     	</div>
     		<div class="col-lg-4">
     		<div class="thumbnail">
     			<a href="fjords.jpg" target="_blank">
     				<img src="fjords.jpg" alt="lights" style="width: 100%">
     				<div class="caption">Ảnh 3 </div>
     			</a>
     		</div>
     	</div>
     </div>

     <!-- Thực hành với cart -->
     <div class="btn-group">
     	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></button>
     	<ul class="dropdown-menu" role="menu">
     		<li><a href="#">A Link</a></li>
     		<li><a href="#">Another Link</a></li>
     		<li><a href="#">Something Link</a></li>
     	</ul>
     </div>

 <div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 500px ">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="lights.jpg" alt="Los Angeles" style="width:100%;">
        <div class="caption">
        	<h5 style="text-align: center;">Xin chào mình là Sang</h5>
        </div>
      </div>

      <div class="item">
        <img src="fjords.jpg" alt="Chicago" style="width:100%;">
       <h5 style="text-align: center;">Xin chào mình là Sang</h5>
      </div>
    
      <div class="item">
        <img src="nature.jpg" alt="New york" style="width:100%;">
        <h5 style="text-align: center;">Xin chào mình là Sang</h5>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
   <!--    <span class="sr-only">Previous</span> -->
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
<!--       <span class="sr-only">Next</span> -->
    </a>
  </div>
</div>

</body>
</html>