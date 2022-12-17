<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "style.css" ?></style>
</head>
<body>
    <div>
    <nav class="topnav"> <!-- top navigation bar -- start -->
        <img class="logo-MomCare" src="images\Project Logo - landscape-01 1 (1).png" alt="logo-MomCare">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <img class="profile_pic" src="images\doctor.png" alt="profile_pic">
    </nav> <!-- top navigation bar -- end -->
    <div class="main">
        <div class="left"></div>
        <div class="right">
            <div class="login-container">
            <div class="reg-form-div">
        <form action="" method="POST">
            <table class="reg-form">
                <th>
                    <h1>Register</h1>
                </th>
                <tr>
                    <td>First name</td>
                    <td><input type="text" name="first_name" placeholder="First Name" required></td>
                </tr>
                <tr>
                    <td>Middle name</td>
                    <td><input type="text" name="middle_name" placeholder="Middle Name"></td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td><input type="text" name="last_name" placeholder="Last Name" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td>PHP ID</td>
                    <td><input type="text" name="php_id" placeholder="PHP ID" required></td>
                </tr>
                <tr>
                    <td>Mobile number</td>
                    <td><input type="text" name="mobile_number" placeholder="Mobile Number" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" placeholder="Address" required></td>
                </tr>
            </table>
            <div class="reg-btn">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>