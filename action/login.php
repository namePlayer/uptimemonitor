<?php

if(isset($_POST['loginEmail'], $_POST['loginPassword'], $_POST['_token'])) {

    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $executeLogin = true;
    if($oneTimeTokenInvalid == true) {
        $messages[] = ['type' => 'danger', 'message' => 'Your Token is invalid. Please try again!'];
        $executeLogin = false;
    }

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messages[] = ['type' => 'danger', 'message' => 'Please enter an valid Email!'];
        $executeLogin = false;
    }

    if(empty($password)) {
        $messages[] = ['type' => 'danger', 'message' => 'Please enter an password!'];
        $executeLogin = false;
    }

    if($executeLogin == true) {
        $stmt = $dbConnection->prepare("SELECT `account_id`,`password`,`active` FROM `Account` WHERE `email` = :email");
        $stmt->bindParam(':email', $email);
        if($stmt->execute()) {
            $data = $stmt->fetch();
            if($stmt->rowCount() > 0 && password_verify($password, $data['password']) && $data['active'] == 'true') {

                $_SESSION['uptimeLoggedIn'] = $data['account_id'];

                $messages[] = ['type' => 'success', 'message' => 'Successfully logged in!'];

                $executeLogin = false;
            }
        }
    }

}

require_once PAGE_TEMPLATE_DIR.'login.php';