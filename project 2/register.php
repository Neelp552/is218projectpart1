<?php

$first = filter_input(INPUT_POST, 'first');
$last = filter_input(INPUT_POST, 'last');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($first)) {
        $Error1 = "please enter your first name";
    }
    if (empty($last)) {
        $Error2 = "please enter your last name";
    }
    if (empty($birthday)) {
        $Error3 = "please enter your date of birth";
    }
    if (empty($email)) {
        $Error4 = "please enter your email";
    }
    if (empty($password)) {
        $passwordErr = " please enter correct password";
    } elseif (strlen($password) <= 8) {
        $passwordErr = "Must be atleast 8 characters";
    }
}
?>

<html>
<style>
    .error {
        color: black;
    }
</style>
<body>

<div>
    First Name = <?php echo $first; ?>
    <span class="error"><?php echo $Error1; ?></span>
</div>
<div>
    Last Name = <?php echo $last; ?>
    <span class="error"><?php echo $Error2; ?></span>
</div>
<div>
    Birthday = <?php echo $birthday; ?>
    <span class="error"><?php echo $Error3; ?></span>
</div>
<div>
    Email = <?php echo $email; ?>
    <span class="error"><?php echo $Error4; ?></span>
</div>
<div>
    Password = <?php if (!$passwordErr) echo $password; ?>
    <span class="error"><?php echo $passwordErr; ?></span>
</div>
</body>
</html>

