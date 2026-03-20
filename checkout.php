<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.four
{
  border-top-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-style:solid;
	width:fit-content;
	margin-left:3.85cm;
	border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
	color:black;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
  color:yellow;
}

.container {
  background-color: none;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-color:yellow;
  border-radius: 3px;
  
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
  text-decoration: none;
  color: #000; /* black */
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
body
{
	animation:transitionIn 2s;
    background-image:url("pexels-karolina-grabowska-4968382.jpg");
    background-repeat:No-repeat;
    background-size:cover;
    /*background-attachment:fixed;*/
}
@keyframes transitionIn
{
	from
	{
		opacity:0;
		transform:rotateX(-10deg);
	}
	to
	{
		opacity:1;
		transform:rotateX(0);
	}
}
.logo
        {
	        border-top-left-radius:20px;
	        border-top-right-radius:20px;
	        border-bottom-right-radius:20px;
            overflow: hidden;
	        opacity:0.5;
        }

</style>
</head>
<body>
<div class="logo">
 <img src="logo.jpg" width="100" height="100">
</div>




<div class="row"  style="padding:100px 300px;">
  <div class="col-50">
    <div class="container" >
      <form  action="payscript.php" method="post" style="padding: 25px;">
      
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Payment Details</Details></h3>
          

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="A.W Samarasinghe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <!-- <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type=".hidden" value="<?php echo 1;?>" name="amount"> -->
            <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="text" id="city" name="mobile" placeholder="Mobile Number">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="amt"><i class="fa fa-amount"></i>Enter Amount</label>
              <input type="text" id="amt" name="amt" placeholder="Enter any amount you wish to pay"> 
          
        </div>
       
        <input type="submit"  value="Pay Now" class="btn">
      </form>
      <!-- <h2 class="four"><a href="loginpremium.php" class="link"> Scholarship</h2></a>
      <h2 class="four"><a href="loginpremiumordinary.php" class="link"> Ordinary</h2></a>
      <h2 class="four"><a href="loginpremiumadvance.php" class="link"> Advance</h2></a>
      <h2 class="four"><a href="loginpremiumuniversity.php" class="link"> Undergraduate</h2></a> -->



    </div>
  </div>
 
</div>

</body>
</html>
