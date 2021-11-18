<?php
    session_start();
    // registration 
    if (isset($_POST['ragistration'])) {
        // getting neccesary variables 
        $regName = $_POST['regisName'];
        $regEmail = $_POST['regisEmail'];
        $dob = $_POST['regisBirth'];
        $address = $_POST['regisAddress'];
        $regPassword = $_POST['regisPassword'];
        $coursexId = $_POST['getCourseIDFromReg'];
    
        // sql query 
        $registration_query = "INSERT INTO `user`(`user_name`, `user_email`, `user_password`, `date_of_birth`, `address`) 
            VALUES ('$regName','$regEmail','$regPassword','$dob','$address')";
    
        if ($conn->query($registration_query) === TRUE) {
            $_SESSION['userEmailId'] = $regEmail;
            header("Location:overview.php?id=$coursexId");
        }
        $conn->close();
    }
    
    // log in 
    if (isset($_POST['signIn'])) {
        // getting data 
        $userEmail = $_POST['loginEmail'];
        $userPassword = $_POST['loginPassword'];
        $courseIdFromLogin = $_POST['getCourseIdFromLogin'];
    
        // sql query for selcting 
        $loginQuery = "SELECT user_email,user_password FROM user WHERE user_email='$userEmail' AND user_password='$userPassword'";
        $loginResult = $conn->query($loginQuery);
    
        if ($loginResult->num_rows > 0) {
            $_SESSION['userEmailId'] = $userEmail;
            header("Location:overview.php?id=$courseIdFromLogin");
        } else {
            echo "login unsuccesfull";
        }
        $conn-> close();
    }
?>