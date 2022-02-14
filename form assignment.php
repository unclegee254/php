<!doctype html>
<html lang="en">
<head>
    <style>
        .error {color: red}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
<body>
<?php
//define variables and set to empty values
$name=$Gender=$Year=$baruapepe=$Telephone=$regno=$course=$username=$pword=$rpword=$Inquiries="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $Gender = test_input($_POST["Gender"]);
    $Year = test_input($_POST["Year"]);
    $baruapepe = test_input($_POST["baruapepe"]);
    $Telephone = test_input($_POST["Telephone"]);
    $regno = test_input($_POST["regno"]);
//    $username = test_input($_POST["username"]);
    $pword = test_input($_POST["pword"]);
    $rpword = test_input($_POST["rpword"]);
    $Inquiries = test_input($_POST["Inquiries"]);
}
function test_input($data){
    $data = trim($data);            //removes unnecessary characters
    $data = stripslashes($data);     //removes backlashes
    $data = htmlspecialchars($data);  //prevents hacking
    return $data;
}

//define variables and set to empty values

$nameErr = $GenderErr = $YearErr = $baruapepeErr = $regnoErr = $usernameErr = $pwordErr = $rpwordErr = "";
$name = $Gender = $Year = $baruapepe = $Telephone = $regno = $username = $pword = $rpword = $Inquiries = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Full name required";
    } else {
        $name = test_input(!isset ($_POST["$name"]));
        if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            $nameErrErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["Gender"])) {
        $GenderErr = "Gender is required";
    } else {
        $Gender = test_input(!isset ($_POST["$Gender"]));
        if (!filter_id($Gender,)){
            $GenderErr = "Select Gender";
        }
    }
    if (empty($_POST["Year"])) {
        $YearErr = "Year of study is required";
    } else {
        $Year = test_input(!isset ($_POST["$Year"]));
    }
    if (empty($_POST["baruapepe"])) {
        $baruapepeErr = "Email is required";
    } else {
        $baruapepe = test_input(!isset ($_POST["$baruapepe"]));
        if (!filter_var($baruapepe, FILTER_VALIDATE_EMAIL)) {
            $baruapepeErr = "Invalid email format";
        }
        if (empty($_POST["regno"])) {
            $regnoErr = "Registration number required";
        } else {
            $regno = test_input(!isset ($_POST["$regno"]));
        }
        if (empty($_POST["course"])) {
            $courseErr = "course is required";
        } else {
            $course = test_input($_POST["$course"]);
        }
        if (empty($_POST["username"])) {
            $usernameErr = "Enter Your username";
        } else {
            $username = test_input(!isset ($_POST["$username"]));
        }
        if (empty($_POST["pword"])) {
            $pwordErr = "Password must contain at least one number";
        } else {
            $pword = test_input(!isset ($_POST["$pword"]));
        }
        if ($pword = $rpword ) {
            $rpwordErr = "Password must resemble the one above.";
        } else {
            $pword = test_input(!isset ($_POST["$rpword"]));
        }
    }
}

?>
<h2>Personal Details</h2>
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Full Name: <input type="text" name="name"value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Gender:
    <input type="radio"name="Gender"value="Male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
    <input type="radio"name="Gender"value="Female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
    <input type="radio"name="Gender"value="Other" <?php if (isset($gender) && $gender=="other") echo "checked";?>>Other
    <span class="error">* <?php echo $GenderErr;?></span>
    <br><br>
    Year of Study:
    <input type="radio"name="Year"value="1st" <?php if(isset($Year) and $Year== "1st") echo "checked";?>>1st
    <input type="radio"name="Year"value="2nd" <?php if(isset($Year) and $Year== "2nd") echo "checked";?>>2nd
    <input type="radio"name="Year"value="3rd" <?php if(isset($Year) and $Year== "3rd") echo "checked";?>>3rd
    <input type="radio"name="Year"value="4th" <?php if(isset($Year) and $Year== "4th") echo "checked";?>>4th
    <input type="radio"name="Year"value="5th" <?php if(isset($Year) and $Year== "5th") echo "checked";?>>5th
    <span class="error">* <?php echo $YearErr;?></span>
    <br><br>
    Email address: <input type="email"name="baruapepe" value="<?php echo $baruapepe;?>">
    <span class="error">* <?php echo $baruapepeErr;?></span>
    <br><br>
    Phone number: <input type="number"name="Telephone">
    <br><br>
    Registration number: <input type="text"name="regno"value="<?php echo $regno;?>">
    <span class="error">* <?php echo $regnoErr;?></span>
    <br>
<!--<h2>Courses being applied for</h2>-->
<!--    <p>Choose a maximum of five and a minimum of four.</p>-->
<!--    <input type="checkbox"name="course"value="Pharmacology">Pharmacology-->
<!--    <input type="checkbox"name="course"value="Pharmaceutics">Pharmaceutics-->
<!--    <input type="checkbox"name="course"value="Pharmaceutical Chemistry">Pharmaceutical Chemistry-->
<!--    <input type="checkbox"name="course"value="Clinical Pharmacy">Clinical Pharmacy <br>-->
<!--    <input type="checkbox"name="course"value="Social-Behavioral Pharmacy">Social-Behavioral Pharmacy-->
<!--    <input type="checkbox"name="course"value="Pharmacognosy">Pharmacognosy-->
<!--    <input type="checkbox"name="course"value="Project">Project <br>-->
<!--    <input type="checkbox"name="course"value="Anatomy">Anatomy-->
<!--    <input type="checkbox"name="course"value="Biochemistry">Biochemistry-->
<!--    <input type="checkbox"name="course"value="Pre-clinical Chemistry">Pre-clinical Chemistry <br>-->
<!--    <input type="checkbox"name="course"value="Microbiology">Microbiology-->
<!--    <input type="checkbox"name="course"value="Pathology">Pathology-->
<!--    <input type="checkbox"name="course"value="Basic Life Support">Basic Life Support-->
<!--    <input type="checkbox"name="course"value="Mathematics for Pharmacists">Mathematics for Pharmacists-->
<!--    <br>-->
<h2>Log in details</h2>
    Username:<input type="text"name="username"value="<?php echo $username;?>"> <br>
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>
    Password: <input type="password"name="pword"value="<?php echo $pword;?>"> <br>
    <span class="error">* <?php echo $pwordErr;?></span>
    <br><br>
    Repeat password: <input type="password"name="rpword"value="<?php echo $rpword;?>"> <br>
    <span class="error">* <?php echo $rpwordErr;?></span>
    <br>
<h2>Inquiries</h2>
    <textarea name="Inquiries" id="" cols="30" rows="5"></textarea>
    <br><br>
    <input type="submit"name="Submit"value="Submit">

</form>



</body>
</html>


