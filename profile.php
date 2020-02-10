<!DOCTYPE html>



<style type="text/css">
  

           /* Bordered form */
          form {
            border: 3px solid #f1f1f1;
          }

          /* Full-width inputs */
          input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
          }

          /* Set a style for all buttons */
          button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
          }

          /* Add a hover effect for buttons */
          button:hover {
            opacity: 0.8;
          }

          /* Extra style for the cancel button (red) */
          .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
          }

          /* Center the avatar image inside this container */
          .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
          }

          /* Avatar image */
          img.avatar {
            width: 20%;
            border-radius: 30%;
          }

          /* Add padding to containers */
          .container {
            padding: 16px;
          }

          /* The "Forgot password" text */
          span.psw {
            float: right;
            padding-top: 16px;
          }

          /* Change styles for span and cancel button on extra small screens */
          @media screen and (max-width: 300px) {
            span.psw {
              display: block;
              float: none;
            }
            .cancelbtn {
              width: 100%;
            }
          } 
          div.a 
          {
  				text-align: center;
		  } 

</style>




<?php 
  
  $password = "password1";

  $con = mysqli_connect("localhost" , "Radu" , "1234567890");

  if (!$con){
    die("Connection Failed !" . mysql_error());
  }

  mysqli_select_db($con,"ehealth");

// $sql = "INSERT INTO login (id, pass) VALUES ('email2', 'password2')";
// $con->query($sql);

$sql="SELECT username,name,surname,age,email,gender,daynight FROM profile WHERE password='$password'";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_row($result);



mysqli_close($con);
?>


<html>
<head>
	<title>  
</title>
</head>
<body>
<div class="imgcontainer">
    <img src="avatar2.png" alt="Avatar" class="avatar" sizes="">
  </div>
<br></br>


<div class="a">
<h2>Usename : <?php echo $row[0]; ?> <br> Email : <?php echo $row[4]; ?> <br> Password : ******** <br> Name : <?php echo $row[1]; ?> <br> Surname : <?php echo $row[2]; ?> <br> Gender : <?php echo $row[5]; ?> <br> Age : <?php echo $row[3]; ?> <br> Schedule Type : <?php echo $row[6]; ?> </h2>
	
</div>	

























</body>
</html>