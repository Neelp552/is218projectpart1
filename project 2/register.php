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
        $first = "First Name is required";
    }
    if (empty($lastName)) {
        $last = "Last Name is required";
    }
    if (empty($birthDay)) {
        $birthday = "Birth Date is required";
    }
    if (empty($email)) {
        $emailerror = "EMAIL is required";
    } elseif ($check === false) {
        $emailerror = "not a valid EMAIL";
    }
    if (empty($password)) {
        $passwordErrorr = "PASSWORD is required";
    } elseif (strlen($password) <= 8) {
        $perror = "please make sure your PASSWORD is at least 8 characters";
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
    <?php echo $first; ?>
</div>
<div>
    Last Name = <?php echo $last; ?>
    <?php echo $last; ?>
</div>
<div>
    Birthday = <?php echo $birthday; ?>
    <?php echo $birthday; ?>
</div>
<div>
    Email = <?php echo $email; ?>
    <?php echo $emailerror; ?>
</div>
<div>
    Password = <?php if (!$passwordErrorr) echo $password; ?>
    <?php echo $perror; ?>
</div>
</body>
</html>