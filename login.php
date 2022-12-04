<?php 
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Loacation: index.php?error=User name is required");
        exit();
    }
    else if(empty($pass)) {
        header("Loacation: index.php?error=Password is required");
        exit();
    }
    else{
        echo "Valid input";
    }
}
else {
    header("Loacation: index.php");
    exit();
}