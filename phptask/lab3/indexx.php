<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
input[type=radio] { width:20px; }  
input[type=checkbox]{ width:20px; }  
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}   
input {  
    border: 2px solid #ccc;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    background: #8bb2eafa;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
    text-transform: uppercase;  
}  
input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: blue;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}     
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $agreeErr ="";
$name = $email = $gender = $classetails = $group =   "";
$courses = $_POST["courses"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["group"])) {
    $group = "";
  } else {
    $group = test_input($_POST["group"]);
  }

  if (empty($_POST["class_details"])) {
    $classetails = "";
  } else {
    $classetails = test_input($_POST["classDetails"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["agree"])) {
    $agreeErr = "Check-Box is required";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Course PHP Lab3 Form Validation</h2>
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Group#: <input type="text" name="group" value="<?php echo $group;?>">
  <br><br>
  Class_details: <textarea name="classDetails" rows="5" cols="40"><?php echo $classetails;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Select_Courses:  <select data-placeholder="Choose tags ..." name="courses[]" multiple class="chosen-select">
    <option value="php"<?php if (isset($courses) && $courses=="php") echo "Selected";
                                ?>>PHP</option>
    <option value="mysql"<?php if (isset($courses) && $courses=="mysql") echo "Selected";
                                ?>>Mysql</option>
    <option value="js" <?php if (isset($courses) && $courses=="js") echo "Selected";
                                ?>>JavaScript</option>
    <option value="html" <?php if (isset($courses) && $courses=="html") echo "Selected";
                                ?>>HTML</option>
    <option value="css" <?php if (isset($courses) && $courses=="css") echo "Selected";
                                ?>>CSS</option>
    <option value="anglur" <?php if (isset($courses) && $courses=="anglur") echo "Selected";
                                ?>>Anglur</option>
  </select>
  <br><br>
  Agree: <input type="checkbox" name="agree" value="agree">
  <span class="error">* <?php echo $agreeErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: ".$name;
echo "<br>";
echo "Email: ".$email;
echo "<br>";
echo "Group: ".$group;
echo "<br>";
echo "Calss_Details: ".$classetails;
echo "<br>";
echo "Gender: ".$gender;
echo "<br>";
echo "Courses: ";
foreach ($courses as $s =>$course){
    $num = $s + 1;
            echo $num . "-" .$course;
            echo "<br>";
}
?>

</body>
</html>