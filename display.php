<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


?>

<html>
<head><title> Display Forma Data</title></head>
<body>
    <h2> Text Inputs</h2>
    <div>
        Email : <?php echo $email; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>
</body>
</html>
