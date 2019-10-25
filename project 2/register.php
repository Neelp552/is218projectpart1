Learn more or give us feedback
<?php
//define variable for the empty values
//$firstNameErr = $lastNameErr = "";
//Get values from the input
$first = filter_input(INPUT_POST, 'first');
$last = filter_input(INPUT_POST, 'last');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'new-password');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($firstName)) {
        $firstNameError = "First Name is required";
    }
    if (empty($lastName)) {
        $lastNameerror = "Last Name is required";
    }
    if (empty($birthDay)) {
        $birthDayerror = "Birth Date is required";
    }
    if (empty($email)) {
        $emailerror = "EMAIL is required";
    } elseif ($check === false) {
        $emailerror = "not a valid EMAIL";
    }
    if (empty($password)) {
        $passwordErrorr = "PASSWORD is required";
    } elseif (strlen($password) <= 8) {
        $passwordError = "please make sure your PASSWORD is at least 8 characters";
    }
}
?>

<html>
<style>
    .error {
        color: black;
    }
</style>
<head><title>Registration Data</title></head>
<body>
<h1>The User Data</h1>
<div>
    First Name = <?php echo $first; ?>
    <span <span class="error"><?php echo $firstNameError; ?></span>
</div>
<div>
    Last Name = <?php echo $last; ?>
    <span <span class="error"><?php echo $lastNameerror; ?></span>
</div>
<div>
    Birthday = <?php echo $birthday; ?>
    <span <span class="error"><?php echo $birthDayerror; ?></span>
</div>
<div>
    Email = <?php echo $email; ?>
    <span <span class="error"><?php echo $emailerror; ?></span>
</div>
<div>
    Password = <?php if (!$passwordErrorr) echo $password; ?>
    <span <span class="error"><?php echo $passwordError; ?></span>
</div>
</body>
</html>