<!DOCTYPE html>
<html>
<head>
<?php $this->load->helper('url');?>
<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<title></title>
	<style type="text/css">

	.bghead{
			background-color: #4867aa;
  			}
        .haris
        {
          width: 30%;
          height:5%;
          margin-top: 10px;

        }
        .input-box{
          margin-top: 8px;
        }
    .bgmain
    {
     background-color: #d6dbea;
   }
   .div1
   {
    
    border:1px solid #d6dbea;
    height:150px;
    margin-bottom: 10px;
    background-color: white;
   }
   .div11
   {
     border:1px solid #d6dbea;
    height:500px;
    border-radius: 3px;    
    background-color: white;
   }
   .div2
   {
     border:1px solid #d6dbea;
    height:660px;
  
    margin-left: 10px;
    background-color: white;
   }
   .divad
   {
    background-color: #4867aa;
    height: 600px;
    margin-left: 8px;
   }
	</style>
</head>

<body>
<?php foreach ($data as  $value){?>

  <div class="container-fluid">
    <div class="row bghead">

      <div class="col-md-5 col-md-offset-1 input-box">
        <form class="form-horizontal" role="form">
          <div class="form-group ">
            <!-- <i class="glyphicon glyphicon-search"></i> -->
            <input type="text" name="" class="form-control" placeholder="Search Facebook">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div></form>
      </div>

      <div class="col-md-1 col-md-offset-2">
        <img class="haris" src="<?php echo $value[0]['profpic']; ?>">
        <span style="color: white"><?php echo $value[0]['chr_fname']; ?></span>
      </div>   

    </div>
    <!-- bgcolor row  closed-->
  </div>

<!-- secnd row start -->
  <div class="container-fluid">  
    <div class="row bgmain ">
       <div class="col-md-2"><br>
       <div class="row">
       <div class="col-md-3"><img style="height:5%;width: 100%" src="<?php echo $value[0]['profpic']; ?>"></div>
      <div class="col-md-1"><?php echo $value[0]['chr_fname']; ?></div><br><br>
      </div>
      <div class="row">
          <div class="col-md-3 glyphicon glyphicon-edit"></div>
          <div class="col-md-7">Edit profile</div>
      </div>
        </div> 


         <div class="col-md-5"><br>
          <div class="row">
            <div class="col-md-12 div1">
              <div class="row">
                <span style="color:blue" class="col-md-2 glyphicon glyphicon-edit"><strong style="color:black">update</strong></span><span class="col-md-1">|</span>
                <span  style="color:brown" class="col-md-3 glyphicon glyphicon-picture"><strong>addphotos/videos</strong></span> <span class="col-md-1">|</span>
                <span style="color:green" class="col-md-2 glyphicon glyphicon-list-alt"><strong>writenote</strong></span>
                <div class="col-md-12">
                <hr>
                </div>
               
               <div class="col-md-12">
                <img style="width:30px;height: 30px" src="<?php echo $value[0]['profpic']; ?>">
                <span style="color: white"><?php echo $value[0]['chr_fname']; ?>
                <input class="input-lg" style="width: 80%;border:0 solid #d6dbea;color: black" type="txt" name="" placeholder="whats on  your mind">
               </div>
                
             </div>
          </div>
          <div class="col-md-12 div11">
          </div>
          </div>
         </div>
        <br>
        <div class="col-md-3 div2">
        <div class="row">
        <div class="text-muted h4 col-md-12">your adds</div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-11 divad"></div>
        </div>
        </div>
        
    </div>
  </div>
<?php }?>
</body>
</html>
        
        
       
    
      