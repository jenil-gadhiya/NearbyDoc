<?php 
require "connection.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $spec = $_POST['Specialization'];
    $lnumber = $_POST['Licensenumber'];
    $pex = $_POST['ProfessionalExperience'];
    $clinic = $_POST['Clinic'];
    $qual = $_POST['Qualifications'];
    $langs = $_POST['LanguagesSpoken'];
    $email = $_POST['newemail'];
    $tele = $_POST['tele'];
    $newpassword = $_POST['newpassword'];
    $cpassword = $_POST['cpassword'];
    
    // Check if the email already exists
    // $sql = "SELECT * FROM docsignup WHERE email='$email'";
    // $result = mysqli_query($connection, $sql);
    // $num = mysqli_num_rows($result);
    // if ($num > 0) {
    //     echo "<h1><center>Account already exists</center></h1>";
    // } else {
    //     // Password confirmation
    //     if ($newpassword != $cpassword) {
    //         echo "<h1><center>Passwords do not match</center></h1>";
    //         exit(); // Stop further execution
    //     }
        
        // Insert new user into the database
        // $query = "INSERT INTO docsignup VALUES ('$fname', '$lname', '$address', '$spec', '$lnumber', '$pex', '$clinic', '$qual', '$langs', '$email', '$tele', '$newpassword')";
        $query = "INSERT INTO docsignup (dfame, dlname, address, specialization, licensenumber, experience, clinic, qualifications, languages, email, mobilenumber, password) 
        VALUES ('$fname', '$lname', '$address', '$spec',$lnumber, $pex, '$clinic', '$qual', '$langs', '$email', $tele, '$newpassword')";
        $result=mysqli_query($connection, $query);
        // if($result) {   
        //     echo "Account created successfully";
        //     // Redirect user to a new page after successful registration
        //     // header("Location: user_signin.php");
        //     // exit();
        // } else {
        //     echo '<script type="text/javascript">alert("Data not saved")</script>';
        // }
}
else{
    echo "fail";
}


?>
