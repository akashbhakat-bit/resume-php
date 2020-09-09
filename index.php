<!DOCTYPE html> 

<html lang="en" > 
<head>
<meta charset="UTF-8"> 
<meta name ="viewport" content="width=device-width,initial scale=1 shrink-2-fit=no"> 
<title>File Upload 18BCE2320</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
<link rel="icon" href="https://cdn.telanganatoday.com/wp-content/uploads/2020/07/VIT.jpg"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" 
integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" 
crossorigin="anonymous"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous"> 
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Yatra+One" rel="stylesheet"> 
<style>
img { 
float: left; 
margin: 0px 50px 5px 0px; 
}
body{
margin:5px 15px 5px 15px; 
}

	body {
    font-family: "Raleway", sans-serif;
    
}

.column {
    float: left;
    width: 50%;
}

form {
    width: 70%;
    margin: auto;
}

h1,
h2 {
    text-align: center;
    margin: 20px auto;
    color: #ff6655;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 300px;
    height: 20px;
    padding: 5px;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
}

button {
    width: 100%;
    text-align: center;
    margin: auto !important;
    height: 40px;
    border-radius: 10px;
    background-color: #eee;
}
.ALL{
background-image:url("https://previews.123rf.com/images/artlana/artlana1903/artlana190300078/124462387-abstract-background-with-watercolor-colorful-splashes-and-flowers-purple-and-pink-colored-template-f.jpg");	
	background-size: cover;
	}
</style> 
</head> 
<body > 
<h2 align="center"><b>FILE UPLOAD</b></h2> 
<p align="left" margin-left="10px"> 
<img src="https://cdn.telanganatoday.com/wp-content/uploads/2020/07/VIT.jpg" alt="VIT Logo" width="300px" 
height="180px"> 
<span >
Register Number :- 18BCE2320 <BR> 
Name :- AKASH BHAKAT <br> 
Program :- B.Tech. - Computer Science and Engineering <br> 
School :- SCOPE- School of Computer Science and Engineering <br> 
</span> 
</p> <BR><BR>
<br><hr style="border:2px solid black;"/> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["Name"]);
  $age = test_input($_POST["Age"]);
  $address = test_input($_POST["State"]);
  $phone = test_input($_POST["Phone"]);
  $gender = test_input($_POST["gender"]);
  $email = test_input($_POST["EMail"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
	  
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png","pdf");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG or PDF file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be less 2 MB';
      }
      
      /*if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         //echo "Success";
      }else{
         print_r($errors);
      }*/
   }

?>


<div class="ALL">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myForm" onsubmit="return(validate());" enctype = "multipart/form-data">
        <div class=" row">
            <div class="column">
                <h3>Personal Details</h3>
                <p>Name<br>
				<input type="text" name="Name"></p>
                <p>Age<br>
				<input type="text" name= "Age"></p>

                <p>Contact no.<br>
				<input type="text" name="Phone"></p>

                <p>State/City<br> <input type="text" name="State"></p>



            </div>
            <div class="column">

                <p>
                    <h3>Gender:<br></h3>Male: <input type="radio" id="Male" name="gender" value="male"> Female: <input type="radio" value="female" name="gender" id="Female"></p>




                <p>Email id <br><input type="text" name="EMail"></p>

            
 

    
	<h3>Upload your resume here <br></h3>
         <input type = "file" name = "image" /><br>
</div></div><br><br>
         <input type = "submit" name="submit" value="Submit"/>
		  </form><br><br><br>
	</div>

<script>
    var uploadField = document.getElementById("file");


function validate() {

    if (document.myForm.Name.value == "") {
        alert("Please provide your name! ");

    }
    if (document.myForm.Age.value == "") {
        alert("Please provide your Age! ");

    }
    if (document.myForm.Phone.value == "") {
        alert("Please provide your Contact No.! ");

    }

    if (document.myForm.State.value == "") {
        alert("Please provide your City! ");

    }
    if (!(document.getElementById("Male").checked) && !(document.getElementById("Female").checked)) {
        alert("Please Select Your Gender!");
    }


    if (document.myForm.EMail.value == "") {
        alert("Please provide your Email! ");

    }
    var file = document.getElementById("file");
    if (file.value == "") {

        alert("File not uploaded");

    }




    const name = document.myForm.Name.value;

    const age = document.myForm.Age.value;
    const phone = document.myForm.Phone.value;
    const state = document.myForm.State.value;
    const email = document.myForm.EMail.value;


    const emailcheck = /^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/;

    const namecheck = /^[a-zA-Z]{3,20}$/;
    const phonecheck = /^[789][0-9]{9}$/;
    const agecheck = /^[1-9][0-9]{1,2}$/;
    const passwordcheck = /^[a-zA-Z0-9]{8,}$/;

    if (!namecheck.test(name)) {
        alert("Name Incorrect");
    } else if (!agecheck.test(age)) {
        alert("Age accepts only numbers max upto 3 digit");
    } else if (!phonecheck.test(phone)) {
        alert("Enter only 10 digit number with first one starting with either 7,8 or 9");
    } else if (!namecheck.test(state)) {
        alert("State Incorrect");
    } else if (!emailcheck.test(email)) {
        alert("Email Incorrect");
    } else if (!passwordcheck.test(password)) {
        alert("wrong password");
    }
}
</script>

<?php
echo "<h2>Your Input:</h2>";
echo "Name $name";
echo "<br>";
echo "Email $email";
echo "<br>";
echo "State/City $address";
echo "<br>";
echo "Age $age";
echo "<br>";
echo "Gender $gender";
echo "<br>";
echo $_FILES['image']['name'];  
echo "<br>";

echo $_FILES['image']['size'];  
echo "<br>";

echo $_FILES['image']['type'];
echo "<br>";

?>


<footer>
  <div class="card bg-dark text-white">
<p>  Copyright reserved @ AKASH BHAKAT 18BCE2320 </p>
<p>Follow us on &nbsp &nbsp <img src="data:image/jpeg;base64,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" style=" width:20px;height:20px">Twitter&nbsp &nbsp <img src="data:image/png;base64,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" style=" width: 20px;height:20px"> Facebook&nbsp; &nbsp;<img src="data:image/jpeg;base64,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" style=" width: 20px;height:20px"> Instagram</p>

  </div></footer>
  </body>
</html>