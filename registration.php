<?php

$first = filter_input(INPUT_POST, 'first');
$last = filter_input(INPUT_POST, 'last');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($first)) {
        $firstError = " Please enter your first name";
    }
    if(empty($last)){
        $lastError = "Please enter your last name";
    }
    if(empty($birthday)){
        $birthdayError = "please enter your Birthday ";
    }
    if (empty($email)) {
        $emailError = "Email must be entered";
    } elseif ($double_check === false) {
        $emailError = "please enter a valid email";
    }
    if (empty($password)){
        $passwordError = "Password is incorrect";
    } elseif ( (strlen($password <=8)){
        $passwordError = " atleast 8 characters";
    }
}

?>

<html>
<style>
    .error {color: aqua;}
</style>
<head><title> Registration Data</title></head>
<body>
    <h1> registration data</h1>
    <div>
        First Name = <?php echo $first; ?>
        <span <span class="error"><?php echo $firstError;?></span><br>
    </div>
    <div>
        Lasr Name = <?php echo $last; ?>
        <span <span class="error"><?php echo $lastError;?></span><br>
    </div>
    <div>
        Birthday = <?php echo $birthday; ?>
        <span <span class="error"><?php echo $birthdayError;?></span><br>
    </div>
    <div>
        email = <?php echo $email; ?>
        <span <span class="error"><?php echo $emailError;?></span><br>
    </div>
    <div>
        Password = <?php if (!$passwordError) echo $password; ?>
        <span <span class="error"><?php echo $passwordError;?></span><br>
    </div>
</body>
</html>
