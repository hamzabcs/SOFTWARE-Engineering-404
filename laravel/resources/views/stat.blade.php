
<html lang="en">
<head>
  <meta charset="utf-8">
<title>Drug Mart</title>
{!!Html::style('css/bootstrap.css') !!}

{!!Html::script('js/jquery-1.11.1.min.js') !!}

{!!Html::style('css/style.css') !!}
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">

$(function() {
	
	//autocomplete
	$(".form-control").on('keyup',function(){
		$value=$(this).val();
		$.ajax({
			type:'get',
			url:'{{URL::to('search')}}',
			data:{'search':$value},
			success:function(data){
				
				//$('tbody').html(data);
				document.getElementsByTagName("tbody")[0].innerHTML = data;
			}
		});
	});				
});



</script>
</head>
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
				   	 <li><a href="logout">[Log Out]</a></li>
				   	 
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
<form method="POST" action="">
<h3></h3>

 <div class="container">
<div class="input-group">
    <input type="text" id="scriptBox" class="form-control" name='country' value='' placeholder="Product Name">
<span class="input-group-btn">
<input type="submit" class="btn btn-search" name="submit" value="submit">

</span>
    </div>
</div>

</form>
<p id="try"></p>
</br>
<div class="container">
<table id="TABLE" class="table">
<thead class="thead-dark">
    
  </thead>
  <tbody>

</tbody>
</table>

</div>

<div class="container">
<table class="table">
<thead class="thead-dark">
    
  </thead>
  <tbody>
<tr><td>Product Name</td>
<td>In Stock</td>
<td>Price</td>
<td>Company Name</td>
<td>Actions</td></tr>
@foreach($data as $d)
<tr><td>{{$d->name}}</td><td>{{$d->quantity}}</td><td>{{$d->price}}</td><td>{{$d->cname}}</td>
<td><a href="edit/{{$d->id}}" class='btn btn-info btn-sm'>edit</a>&nbsp;&nbsp;<a href="delete/{{$d->id}}"class="btn btn-danger btn-sm">delete</a></td></tr>
@endforeach
</tbody>
</table>
{!!$data->render()!!}
</div>
</html>		