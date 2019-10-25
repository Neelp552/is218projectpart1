<?php

//Get values from the input
$Name = filter_input(INPUT_POST, 'name');
$Body = filter_input(INPUT_POST, 'body');
$Skills = filter_input(INPUT_POST, 'Question-skills');

$CheckSkills = explode(',', $Skills);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($Name)) {
        $QuestionErr = " name is required";
    } elseif (strlen($Name) < 3) {
        $QuestionErr = "Please make sure the question is atleast 3 characters";
    }
    if (empty($Body)) {
        $BodyErr = "Please enter your question her";
    } elseif (strlen($Body) >= 500) {
        $BodyErr = "Must be less than 500 characters";
    }
    if (empty($Skills)) {
        $skillsErr = "Please enter atleast two skills";
    } elseif (count($CheckSkills) < 2) {
        $skillsErr = "Please enter 2 or more skills";
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

<div>
    Name = <?php if (!$QuestionErr) echo $Name; ?>
    <span <span class="error"><?php echo $QuestionErr; ?></span>
</div>
<div>
    Body = <?php if (!$BodyErr) echo $Body; ?>
    <span <span class="error"><?php echo $BodyErr; ?></span>
</div>
<div>
    Skills = <?php if (!$skillsErr) echo $Skills; ?>
    <span <span class="error"><?php echo $skillsErr; ?></span>
</div>
</body>
</html>


