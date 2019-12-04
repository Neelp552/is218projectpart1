
<?php

//session_start();
//$aEmail = $_SESSION['email'];

require("../pdo.php");

//session_start();

//$email = $_SESSION['email'];
//Get values from the input
$userId = filter_input(INPUT_GET, 'userId');
$name = filter_input(INPUT_POST, 'name');
$body = filter_input(INPUT_POST, 'body');
$skills = filter_input(INPUT_POST, 'skills');


$CheckSkills = explode(',', $QuestionSkills);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formValid = true;
    if (empty($name)) {
        $QuestionErr = " name is required";
        $formValid = false;
    } elseif (strlen($name) < 3) {
        $QuestionErr = "Must be atleast 3 characters";
        $formValid = false;
    }
    if (empty($body)) {
        $BodyErr = "please enter a question";
        $formValid = false;
    } elseif (strlen($body) >= 500) {
        $BodyErr = "Question must be less than 500 characters";
        $formValid = false;
    }
    if (empty($skills)) {
        $skillsErr = "Please enter a skill";
        $formValid = false;
    } elseif (count($skills) < 2) {
        $skillsErr = "Please enter 2 or more skills";
        $formValid = false;
    }
    if ($formValid == true) {

        //sql query
        $query = 'INSERT INTO questions
                (ownerid, title, body, skills)
              VALUES
                (:ownerid, :title, :body, :skills)';

        // Create PDO Statement
        $statement = $db->prepare($query);

        //binding the values to sql
        $statement->bindValue(':ownerid', $userId);
        $statement->bindValue(':title', $name);
        $statement->bindValue(':body', $body);
        $statement->bindValue(':skills', $skills);

        // Execute the SQL Query
        $statement->execute();
        // Close the database
        $statement->closeCursor();

        header("Location: ../project/question-list.php?userId=$userId");
    }
}
?>

<html>
<style>
    .error {
        color: #FF0000;
    }
</style>
<head><title>Question Data</title></head>
<body>
<h1>The User Data</h1>
<div>
    Question Name = <?php if (!$QuestionErr) echo $name; ?>
    <span <span class="error"><?php echo $QuestionErr; ?></span>
</div>
<div>
    Question Body = <?php if (!$BodyErr) echo $body; ?>
    <span <span class="error"><?php echo $BodyErr; ?></span>
</div>
<div>
    Question Skills = <?php if (!$skillsErr) echo $skills; ?>
    <span <span class="error"><?php echo $skillsErr; ?></span>
</div>
</body>
</html>

