<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<?php
    if(isset($_POST['add_report'])){
        include 'db_conn.php';
        $test_name = $_POST['test-name'];
        $note = $_POST['note'];
        $upload_report = $_FILES['upload-report']['name'];
        $path = "uploads/tests/".$upload_report;
        $sql = "INSERT INTO tests (test_name, note, upload_report) VALUES ('$test_name',' $note','$upload_report')";
        $result = mysqli_query($conn, $sql,);

        // file upload code -- start
        // reference: https://www.youtube.com/watch?v=ewDlz_shKzU
        if($result){
            move_uploaded_file($_FILES['upload-report']['tmp_name'], $path);
            echo "Report added successfully";
        }
        else{
            echo "Report not added";
        }
        // file upload code -- end
    }
    
?>
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
    <!-- top navigation bar -- start -->
    <nav class="topnav">
        <img class="logo-MomCare" src="images\Project Logo - landscape-01 1 (1).png" alt="logo-MomCare">
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <img class="profile_pic" src="images\doctor.png" alt="profile_pic">
    </nav> 
    <!-- top navigation bar -- end -->
    <div class="main-mother">
        <div class="mom-intro">
            <img src="images/Profile_pic_mother 1.png" alt="mother-profile-pic">
            <div class="mom-intro-content">
                <h3 class="Name-header-mom">Mrs. Indrani Perera</h3>
                <p class="num-header-mom">0712345678</p>
            </div>
        </div>
        <div class="add-report-label"><label for="add-report">Add report</label></div>
        <div class="add-report">
            <form class="test-form" action="" method="post" enctype="multipart/form-data">
                <div id="x">
                    <input type="text" name="test-name" id="test-name" placeholder="Test name">
                    <input type="text" name="note" id="note" placeholder="Special note">
                    <input type="file" name="upload-report" id="upload-report" placeholder="Upload report">
                </div>
                    <input class="add-report-btn" name="add_report" type="submit" value="Add report">
            </form>
        </div>
        <div class="add-report-label"><label for="add-report">Search report</label></div>
        <div class="view-report">
            <table class="test-view-table">
                <tr>
                    <th>Test name</th>
                    <th>Special note</th>
                    <th>Edit report</th>
                    <th>View report</th>
                </tr>
                <tr>
                    <td>Blood sugar</td>
                    <td>High</td>
                    <td><input class="view-report-btn" type="button" value="Edit"></td>
                    <td><input class="view-report-btn" type="button" value="View"></td>
                </tr>
                <tr>
                    <td>Blood sugar</td>
                    <td>High</td>
                    <td><input class="view-report-btn" type="button" value="Edit"></td>
                    <td><input class="view-report-btn" type="button" value="View"></td>
                </tr>
                <tr>
                    <td>Blood sugar</td>
                    <td>High</td>
                    <td><input class="view-report-btn" type="button" value="Edit"></td>
                    <td><input class="view-report-btn" type="button" value="View"></td>
                </tr>
            </table>
        </div>
    </div>
    <!--logout button-->
    <div class="log-out">
        <button onclick="window.location.href='logout.php';" class="log-out-btn">Log out</button>
    </div>
</body>
</html>
<?php }
else{
    header("Location: index.php");
    exit();
}
?>