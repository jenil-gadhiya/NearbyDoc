<?php include('connection.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Signup</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
</head>
<?php
session_start();

$server = "localhost:3304";
$username = "root";
$password = "";
$database2 = "edoc";
$connection = mysqli_connect("$server","$username","$password");
$select_db = mysqli_select_db($connection, $database2);

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $Specialization = $_POST['Specialization'];
    $Licensenumber = $_POST['Licensenumber'];
    $Qualifications = $_POST['Qualifications'];
    $city = $_POST['city'];

    if ($password == $cpassword) {
        $res = mysqli_query($connection, "INSERT INTO doctor (`docemail`, `docname`, `docpassword`, `docnic`, `doctel`, `specialties`, `address`, `qualification`, `city`) VALUES ('$email','$name','$password','$Licensenumber','$tele','$Specialization','$address', '$Qualifications', '$city')");
        if ($res) {
            $_SESSION["user"] = $email;
            $_SESSION["usertype"] = "p";
            $_SESSION["username"] = $name;
            header('Location: login.php');
            exit; // Ensure script stops execution after redirection
        } else {
            echo '<script>alert("Error inserting data");</script>';
        }
    } else {
        echo '<script>alert("Passwords do not match");</script>';
    }
}
?>

<body>
<center>
    <div class="container">
    <form action="" method="POST" >
        <table border="0">
        <tr>
                <td colspan="2"> 
                    <p class="header-text" style="padding-top: 10px;">Let's Get Started</p>
                    <p class="sub-text">Add Your Personal Details to Continue</p>
                </td>
            </tr>
        <td class="label-td" colspan="2">
                    <label for="newemail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="email" name="email" class="input-text" placeholder="Email Address" required>
                </td>
                
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="tele" class="form-label">Mobile Number: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="tel" name="tele" class="input-text"  placeholder="ex: 712345678" pattern="[0-9]{10}" >
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="newpassword" class="form-label">Create New Password: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="password" class="input-text" placeholder="Password" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="cpassword" class="form-label">Confirm Password: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="cpassword" class="input-text" placeholder="Conform Password" required>
                </td>
            </tr>

                    
            </tr>
            <tr>
                
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Name: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" name="name" class="input-text" placeholder="Name" required>
                </td>
               
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="address" class="form-label">Professional Address: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="address" class="input-text" placeholder="Address" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="Specialization" class="form-label">Specialization: </label>
                </td>
            </tr>
            <tr>

                <td class="label-td" colspan="2">
                    <input type="text" name="Specialization" class="input-text" placeholder="Specialization" required>
                </td>
            </tr>
            <tr>
            <td class="label-td" colspan="2">
                    <label for="Licensenumber" class="form-label" pattern="[A-Za-z]{2}[0-9]{5}"> Medical License number: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="Licensenumber" class="input-text" placeholder="Licensenumber" required>
                </td>
            </tr>
          
            <tr>
                <td class="label-td" colspan="2">
                    <label for="Qualifications" class="form-label">Education and Qualifications: </label>
                </td>
            </tr>
            <tr>

                <td class="label-td" colspan="2">
                    <input type="text" name="Qualifications" class="input-text" placeholder="Education and Qualification" required>
                </td>
            </tr>

        <tr>
            <td class="dropdown-td" colspan="2">
                <select class="form-control"  style="width: 350px; height: 30px; margin-top: 10px;" name="city">
                <option>Select City</option>
                <option>Surat</option>
                <option>Ahmedabad</option>
                <option>Vadodara</option>
                <option>Rajkot</option>
                </select>
            </td>
        </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="submit" class="login-btn btn-primary btn" name="submit">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>

            </tr>
        </table>
        </form>
    </div>
</center>

</body>
</html>