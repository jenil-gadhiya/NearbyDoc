<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
</head>


<body>
<center>
    <div class="container">
    <form action="doc_signupapi.php" method="POST" >
        <table border="0">
        <td class="label-td" colspan="2">
                    <label for="newemail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="email" name="newemail" class="input-text" placeholder="Email Address" required>
                </td>
                
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="tele" class="form-label">Mobile Number: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="tel" name="tele" class="input-text"  placeholder="ex: 0712345678" pattern="[0]{1}[0-9]{9}" >
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="newpassword" class="form-label">Create New Password: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="newpassword" class="input-text" placeholder="New Password" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="cpassword" class="form-label">Conform Password: </label>
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
                    <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
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
                    <label for="ProfessionalExperience" class="form-label">ProfessionalExperience: </label>
                </td>
            </tr>
            <tr>

                <td class="label-td" colspan="2">
                    <input type="text" name="ProfessionalExperience" class="input-text" placeholder="ProfessionalExperience" required>
                </td>
            </tr>

            <tr>
                <td class="label-td" colspan="2">
                    <label for="Clinic" class="form-label">Clinic/Hospital Affiliation: </label>
                </td>
            </tr>
            <tr>

                <td class="label-td" colspan="2">
                    <input type="text" name="Clinic" class="input-text" placeholder="Clinic/Hospital Affiliation" required>
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
                <td class="label-td" colspan="2">
                    <label for="LanguagesSpoken" class="form-label">Languages Spoken: </label>
                </td>
            </tr>
            <tr>

                <td class="label-td" colspan="2">
                    <input type="text" name="LanguagesSpoken" class="input-text" placeholder="Languages Spoken" required>
                </td>
            </tr>
            <!-- <tr>

                <td class="label-td" colspan="2">
                    <label for="dob" class="form-label">Date of Birth: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="date" name="dob" class="input-text" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                </td>
            </tr> -->

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