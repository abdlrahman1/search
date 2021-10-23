<html>
   <meta charset = "utf-8">
     <meta name = "description" content = "welcome to my website">
     <meta name = "viewport" content = "width=device-width,intial-scale=1.0">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 <head>
<style>

*{
  box-sizing: border-box;
  font-family: "Work Sans", sans-serif;
  color: #0C1829;
}
body{
  margin: 0px;
  background-color:#EEEEEE;
}

.conall
{
	width:80%;
}

.blog-form{
	background-color: #FFFFFF; 
	padding-left:10px;
	padding-top:1px;
	height:fit-content;
	width:20%;
	margin-left:1%;
	margin-top:2%;
	float:left;
	border-radius:5px;
}

.con
{
	width:70%;
	height:144px;
	background-color:#FFFFFF;
	float:left;
	margin-left:1%;
	margin-top:2%;
	border-radius:5px;
}

.select
{
	float:right;
	
	
    
}
.form-control
{
	padding:2px;
    font-size: 1rem;
    color: #495057;
    border-radius: 15px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	border:none;
	background-color:#FFFFFF;
}


.btn-department
{
	background-color:#F0F0F0;
	border:none;
	width:62px;
	height:27px;
	border-radius:10px;
}

.form-control:hover
{
	background-color:#EDEDED;
}



.upto
{
	text-decoration:none;
	font-size:16px;
}

.upto:hover
{
	color:#C45A17;
}


.fa

{
	color:orange;
	text-decoration:none;
}


#raiting
{
	color:black; 
	
}

.star
{
	text-decoration:None;
}


.min-max
{
	padding:3px;
width:50px;
	font-size:13px;
	border:none;
	border-radius:5px;
}
.btn
{
	width:40px;
	height:25px;
	border:none;
	border-radius:8px;
	cursor:pointer;
	background-color:#ddd;
	color: #0C1829
	transition: .6s;
}
.btn:hover
{
	transition: .6s;
	background-color:#374C6D;
}




.container
{
	width:70%;
	height-fit-content;
	background-color:#FFFFFF;;
	float:left;
	margin-left:1%;
}

.products{
  width: 21.5%;
  height: 55vh;
  padding: 0px 0px 10px 10px;
  border-radius: 5px;
  float: left;
  margin-left: 3%;
  cursor: pointer;
  
  
}


.c
{
	width:70%;
	height-fit-content;
	background-color:#FFFFFF;;
	float:left;
	margin-left:1%;
}

.pro{
  width: 17.5%;
  height: 55vh;
  padding: 0px 0px 10px 10px;
  border-radius: 5px;
  float: left;
  margin-left: 2%;
  cursor: pointer;
  
  
}

.pro img
{
	width:100%;
	height:70%;
}


.pro:hover
{
	transform: scale(1.1);
	transition:.4s;
}

.products:hover
{
	transform: scale(1.1);
	transition:.4s;
}
.products img
{
	width:100%;
	height:70%;
	

	}
	
	.add
	{
		width:100%;
		background-color:#E4811C;
	height:20px;
		color:white;
		border-radius:7px;
		border:none;
		margin-top:-2px;
	}
	
	.top
	{
	width:100%;

	background-color:#E4811C;
	color:white;
	margin-top:20px;
	height:35px;
	border-radius:10px;
text-align:center;
	}
	
	
</style>

</head>



<body>

<?php include('header.php'); ?>
<div class="Conall">
<div class="col-lg-3 blog-form">
					<h2 class="blog-sidebar-title"><b>gategory</b></h2>
					
					fashon
					<hr />
					<p class="blog-sidebar-text">Brand</p>
				     <input type="checkbox"> Generic </input>
					<div>&nbsp;</div>

					<h2 class="blog-sidebar-title"><b>Size</b></h2>
					<hr />
					<p class="blog-sidebar-list"><input type="checkbox">  </span> S</p>
					<p class="blog-sidebar-list"><input type="checkbox">  </span> M</p>
					<p class="blog-sidebar-list"><input type="checkbox">  </span> L</p>
					<p class="blog-sidebar-list"><input type="checkbox">  </span> XL</p>
					<p class="blog-sidebar-list"><input type="checkbox">  </span> 2XL</p>
                    <p class="blog-sidebar-list"><input type="checkbox">  </span> 3XL</p>
					<p class="blog-sidebar-list"><input type="checkbox">  </span> 4XL</p>
					<p class="blog-sidebar-list"><input type="checkbox">  </span> 5XL</p>
					<hr>
				
					

					<h4 class="blog-sidebar-title">PRICE (EGP) </h4>
						<a href="#" class="upto"> up to 25$</a>
						<br>
						<br>
						<a href="#" class="upto"> 25$ to 50$</a>
						<br>
						<br>
						<a href="#" class="upto"> 50$ to 100$</a>
						<br>
						<br>
						<a href="#"class="upto"> 100$ to 200$</a>
						<br>
						<br>
						<a href="#" class="upto"> 200$ & above</a>
						<br>
						<Br>
						<input type="text" placeholder="$Min" class="min-max">
						
					<input type="text" placeholder="$Max" class="min-max">
					<button type="button" class="btn"> go </button>
				
					
					
					<hr />
                 <h4> Brand </h4>
				<p class="blog-sidebar-list"><input type="checkbox">  </span> LAOLASI</p>
				<p class="blog-sidebar-list"><input type="checkbox">  </span> REORIA</p>
				<p class="blog-sidebar-list"><input type="checkbox">  </span> Nautica</p>
				<p class="blog-sidebar-list"><input type="checkbox">  </span> Lacoste</p>
				<hr>
<div>
				<P> Customer Reviews </p>
				<a href="#" class="star">
				 <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"id="raiting"></span> &up
			  </a>
</div>
			  <a href="#" class="star">
			  <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star" id="raiting"></span>
              <span class="fa fa-star"id="raiting"></span> &up
</a>
			  <div>
			  <a href="#" class="star">
			  <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star" id="raiting"></span>
              <span class="fa fa-star" id="raiting"></span>
              <span class="fa fa-star"id="raiting"></span> &up
</a>
			  
			  
			  </div>
			  
			  
			  
			  		  <div>
			  <a href="#" class="star">
			  <span class="fa fa-star"></span>
              <span class="fa fa-star"id="raiting"></span>
              <span class="fa fa-star" id="raiting"></span>
              <span class="fa fa-star" id="raiting"></span>
              <span class="fa fa-star"id="raiting"></span> &up
</a>
			  
			  
			  </div>
			  <hr>
			  <div>
		<a href="#"style="text-decoration:none";>	<input type="checkbox">  shipped from estore </a> </input> <br>
		<a href="#"style="text-decoration:none";>	<input type="checkbox">  shipped from seller </a> </input>
			  </div>
			  
			  <div>
			  <hr>
			  <h4>Availability </h4>
			  <a href="#"style="text-decoration:none";>	<input type="checkbox"> include out of stock  </a> </input> <br>
			  
			  </div>
			 
			  
			  
			  
				</div>
				
				<div class="con"> 
				
				<h2> filter department </h2>
				
				<button type="button" class="btn-department"> Men </button>
				<button type="button" class="btn-department"> women </button>
			
				<button type="button" class="btn-department"> Childern </button>
				
			 <div class="select">
							<select class="form-control">
								<option value="">Default Sorting</option>
								<option value="popularity">Sorting by popularity</option>
								<option value="average">Sorting by average</option>
								<option value="latest">Sorting by latest</option>
								<option value="low">Sorting by low</option>
								<option value="high">Sorting by high</option>
							</select>
						</div>
				
				
			<hr>	
			
			
				
			
			
			<p style="color:#75757a; font-size:15px"> 8 products found </p>
			
			
			
			</div>
			
			
				
			
			 <div class="container">
			 <hr> 
			 
        <h2>More items from this seller</h2>
        <div class="products">
          <img src="img/prod4.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
          <button type="button" class="add"> ADD TO CART </button>
        </div>
        <div class="products">
          <img src="img/prod3.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
         <button type="button" class="add"> ADD TO CART </button>
        </div>
        <div class="products">
          <img src="img/prod1.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
          <button type="button" class="add"> ADD TO CART </button>
        </div>
        <div class="products">
          <img src="img/prod2.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
          <button type="button" class="add"> ADD TO CART </button>
        </div>
        
			
			
				
			
				
			</div>
			
			
			
						 <div class="c">
        <div class="top"><h2 class="top">top selling </h2></div>
		<br>
		<br>
        <div class="pro">
		
          <img src="img/prod4.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
          <button type="button" class="add">ADD TO CART  </button>
        </div>
        <div class="pro">
          <img src="img/prod3.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
          <button type="button" class="add"> ADD TO CART </button>
        </div>
        <div class="pro">
          <img src="img/prod2.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
         <button type="button" class="add"> ADD TO CART </button>
        </div>
        <div class="pro">
          <img src="img/prod4.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
<button type="button" class="add"> ADD TO CART </button>
        </div>
        <div class="pro">
          <img src="img/prod4.jpg" alt="prod">
          <span>item1</span>
          <h3>EGP 600</h3>
<button type="button" class="add"> ADD TO CART </button>
        </div>

		
        </div>
		</div>
       <?php include('footer.php'); ?>
</body>

		