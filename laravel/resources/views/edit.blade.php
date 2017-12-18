<html>
<head>
<title>Drug Mart</title>
<link href="http://bmp3.us/store/css/bootstrap.css" rel='stylesheet' type='text/css' />

<script src="http://bmp3.us/store//js/jquery-1.11.1.min.js"></script>


<link href="http://bmp3.us/store/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>


</head
<body>
<div class="header">
   <div class="header_top">	
      <div class="container"> 
             <div class="logo">
				<h1><a href="index.html">Drug Mart</a></h1>
			 </div>
			 <nav class="navbar navbar-default menu" role="navigation"><h3 class="nav_right"><a href="index.html"><h1><a href="index.html">Drug Expo</a></h1></a></h3>
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav menu1">
			      	<!--<li class="active"><a href="#home" class="scroll"> <span> </span><i class="menu-border"></i></a></li>-->
			       <li><a href="dashboard" class="scroll">Dashboard</a></li>
			        <li><a href="add-product" class='scroll'>Add New</a></li>
			        <li><a href="sell" class="scroll">Sell</a></li>
			        <li><a href="stat">Products</a></li>
			       </ul>
			       <ul class="login">
				   	<li><a href="/store/logout">[Log Out]</a></li>
				   	 
				   	 <div class="clearfix"></div>
				   </ul>
				   <form class="navbar-form navbar-left search1" role="search">
			        <div class="search2">
					  <form>
						 <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						 <input type="submit" value="">
					  </form>
					</div>
			       </form>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
           
		 </div>  
	   
	   
	    </div>
		@foreach($data as $d)
		@endforeach
<div class="login_bg"> </div>
	   <!---728x90--->
       <div class="login_box">
       	<div class="container">
       	  <div class="register">
		  	  <form method="POST" action="insert"> 
			  {{ csrf_field() }}
				 <div class="register-top-grid">
					<h3>Edit this item*</h3>
					 <div>
						<span>Product Name<label>*</label></span>
						<input type="text" name="product" value="{{$d->name}}"> 
					 </div>
					 <div>Provider Company Name<label>*</label></span>
						<input type="text" name="company" value="{{$d->cname}}"> 
					 </div>
					 <div>
						<span>Quantity<label>*</label></span> 
<input list="browsers" name="browser" value="{{$d->quantity}}">
<datalist id="browsers">
  <option value="10">
  <option value="20">
  <option value="30">
  <option value="40">
  <option value="50">
</datalist> 
					 </div>
					 
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"></label>
					   </a>
					 </div>
				     <div class="register-top-grid">
						 
							 <div>
								<span>Buying Price<label>*</label></span>
								<input type="text" name="buy" value="{{$d->price}}">
							 </div>
							 <div>
								<span>Selling price<label>*</label></span>
								<input type="text" name="sell">
							 </div>
					 </div>
                                           <input type="submit" class="btn btn-success" value="Update" name="submit">
				</form>
				
       </div>
   </div>
</body>
</html>		