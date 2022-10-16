<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $email = $gender =$agree = "";
$name_err = $email_err = $gender_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter Your Email.";     
    } else{
        $email = $input_email;
    }
    
    // Validate salary
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = trim($_POST["gender"]);
      }
    
    
    if(empty($_POST["agree"])){
        $agree = "no";
    }
    else{
        $agree =trim($_POST["agree"]);
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($$email_err) && empty($gender_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO user (name, email, gender,action_status) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_gender,$param_agree);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_gender= $gender;
            $param_agree= $agree;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">User Form</h2>
                    <p>Please fill this form and submit to add user record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                            <span class="invalid-feedback"><?php echo $gender_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Recive E-mail from us</label>
                            <input type="checkbox" name="agree" value="yes">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>