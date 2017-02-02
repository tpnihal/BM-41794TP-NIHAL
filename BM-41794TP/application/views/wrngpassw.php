<!DOCTYPE html>
<html>
<head>
<?php $this->load->helper('url');?>
<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<title>password incorrect</title>

<style type="text/css">
.fbg{
	background-color: #4867aa;
	height: 82px;
	}
.img{
	height: 70px;
  	margin-top: 8px;
	}
.back{
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
</style>
</head>

<body>
<?php foreach ($data as  $value)
 { ?>	
	<div class="container-fluid">
		<div class="row fbg">
			<div class="col-md-offset-1 col-md-5  ">
			<img class="img" src="<?php echo base_url().'images/fblogo3.png'?>">
			<button type="button" class="btn-success btn-sm">sign up</button>
			</div>
		</div>
		<!-- heading fb -->

	<div  class="row">
	  <div class="col-md-2 col-md-offset-1"></div>
	    <div class="col-md-5 bord stdiv">
	     <div class="row">
	    	 	 	<div class="col-md-12"><h3>facebook login</h3><hr> </div> 
	    	 	 	<br> <hr style="color: white">
				 	<div class="col-md-2 col-md-offset-1 h5">login as</div> 
				 	
				 	<div class="col-md-2">
				  	<img style="width: 50px;height: 50px" src="<?php echo $value[0]['profpic']?>"><br>
				  	<label class="txt">not <?php echo $value[0]['chr_fname']?>?</label>
				  	</div>

					 <div class="col-md-7">
					 <label><?php echo $value[0]['chr_fname']?></label>
					 <label><?php echo $value[0]['char_lname']?></label><br>
					 <label class="text-muted"><?php echo $value[0]['chr_fname']?></label>
					 <!-- <span class="text-muted">harisnp@gmail.com</span> -->
					 </div>
		 </div>	

		 <div class="row">
		 <form method="post">
		 	<input type="hidden" name="username" value="<?php echo $value[0]['vchar_email']?>">
		 	<div class="col-md-3 col-md-offset-1 h4">password :</div>
		 	<div class="col-md-5"><input class="input-sm" type="password" name="password"></div><br>
		 	<div class="col-md-4"><br><input type="checkbox" name="">&nbsp&nbsp<label>keep me logged in</label></div>

		 	<div class="col-md-6 col-md-offset-4"><br><button type="submit" style="border:2px solid"  class="btn-xs btn-primary">login</button>
		 	<span class="h5"><strong class="text-primary">signUp for facebook</strong></span><br><br></div>
		 	<div class="col-md-7 col-md-offset-4 "><a href=""> forgotten password?</a></div>
		 </form>
		 </div>
		


		</div>
	</div>
		    	
	</div>
 <?php }?>
</body>
</html>