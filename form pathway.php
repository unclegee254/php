<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//define variables and set to empty values

$nameErr=$GenderErr=$YearErr=$baruapepeErr=$regnoErr=$courseErr=$usernameErr=$pwordErr=$rpwordErr="";
$name=$Gender=$Year=$baruapepe=$Telephone=$regno=$course=$username=$pword=$rpword=$Inquiries="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Full name required";
    } else {
        $name = test_input($_POST["$fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $nameErrErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["Gender"])) {
        $GenderErr = "Gender is required";
    } else {
        $Gender = test_input($_POST["$Gender"]);
    }
    if (empty($_POST["Year"])) {
        $YearErr = "Year of study is required";
    } else {
        $Year = test_input($_POST["$Year"]);
    }
    if (empty($_POST["baruapepe"])) {
        $baruapepeErr = "Email is required";
    } else {
        $fbaruapepe = test_input($_POST["$baruapepe"]);
        if (!filter_var($baruapepe, FILTER_VALIDATE_EMAIL)) {
            $baruapepeErr = "Invalid email format";
        }
        if (empty($_POST["regno"])) {
            $regnoErr = "Registration number required";
        } else {
            $regno = test_input($_POST["$regno"]);
        }
        if (empty($_POST["course"])) {
            $courseErr = "course is required";
        } else {
            $course = test_input($_POST["$course"]);
        }
        if (empty($_POST["username"])) {
            $usernameErr = "Enter Your username";
        } else {
            $username = test_input($_POST["$username"]);
        }
        if (empty($_POST["pword"])) {
            $pwordErr = "Password must contain at least one number";
        } else {
            $pword = test_input($_POST["$pword"]);
        }
        if (empty($_POST["rpword"])) {
            $rpwordErr = "Password must resemble the one above.";
        } else {
            $rpword = test_input($_POST["$rpword"]);
        }
    }
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

<?php
echo "<h2>Your Input</h2>";
echo $name;
echo "<br>";
echo $Gender;
echo "<br>";
echo $Year;
echo "<br>";
echo $baruapepe;
echo "<br>";
echo $Telephone;
echo "<br>";
echo $regno;
echo "<br>";
echo $course;
echo "<br>";
echo $username;
echo "<br>";
echo $pword;
echo "<br>";
echo $rpword;
echo "<br>";
echo $Inquiries;
echo "<br>";
?>


</body>
</html>

