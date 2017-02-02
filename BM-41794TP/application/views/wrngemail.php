<!DOCTYPE html>
<html>
<head>
<?php $this->load->helper('url');?>
<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<title>email incorrect</title>

<style type="text/css">
.fbg{
	background-color: #4867aa;
	height: 82px;
	}
.img{
	height: 70px;
  	margin-top: 8px;
	}
.bod{
	background:linear-gradient(white, #D3D8E8);

	}
.stdiv
	{
		margin:auto;
		min-height: 300px;
		background-color: white;

	}
.bord
	{
	 border:3px solid #bdc7d8;
	 margin-top: 50px;
	}
	.txt{font-size: 11px;
		font-family:sans-serif;
		color: blue}
	.h3
	{
		padding-left: 70px;
	}
</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row fbg">
			<div class="col-md-offset-1 col-md-5 ">
			<img class="img" src="<?php echo base_url().'images/fblogo3.png'?>">
			<button type="button" class="btn-success btn-sm">sign up</button>
			</div>
		</div>

	<div  class="row bod"> 
	<form method="post" action="<?php echo base_url().'index.php/welcome/authUser'?>"> 
	<!--main contnt area  -->
	 	 <div class="col-md-2 col-md-offset-1"></div>
	    <div class="col-md-5 bord stdiv">
	     <div class="h2 strong">facebook login</div>
	     <hr style="color: white">

	     <div class="row"><br>
	      <div class="col-md-3 col-md-offset-1 h4">enter email:</div>
	      <div class="col-md-3"><input class="input-xs " type="text" name="username"></div>
	     </div>

		 <div class="row">
		 
		 	<div class="col-md-3 col-md-offset-1 h4">password :</div>
		 	<div class="col-md-8"><input class="input-xs" type="password" name="password"></div><br>
		 	<div class="col-md-4"><br><input type="checkbox" name="">&nbsp&nbsp<label>keep me logged in</label></div>
		 	<div class="col-md-6 col-md-offset-4"><br><button type="submit" style="border:2px solid" class="btn-xs btn-primary">login</button>
		 	<span class="h5 text-primary"><strong>signUp for facebook</strong></span><br><br></div>
		 	<div class="col-md-7 col-md-offset-4 "><a href=""> forgotten password?</a></div>
		 	
		 </div>
		</div>
		</form>
	</div>
		    	
	</div>

<h1 style="color: red"><center>email incorrect</center></h1>
</body>
</html>