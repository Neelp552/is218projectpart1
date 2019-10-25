<?php
//Get values from the input
$QuestionName = filter_input(INPUT_POST, 'Question-name');
$QuestionBody = filter_input(INPUT_POST, 'Question-body');
$QuestionSkills = filter_input(INPUT_POST, 'Question-skills');
$CheckSkills = explode(',', $QuestionSkills);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($QuestionName)) {
        $QuestionErr = "Question is required";
    } elseif (strlen($QuestionName) < 3) {
        $QuestionErr = "Question name must be 3 characters";
    }
    if (empty($QuestionBody)) {
        $BodyErr = "Question body is required";
    } elseif (strlen($QuestionBody) >= 500) {
        $BodyErr = " Must be less than 500 characters";
    }
    if (empty($QuestionSkills)) {
        $skillsErr = "Please enter a skill";
    } elseif (count($CheckSkills) < 2) {
        $skillsErr = "Please at least 2 skills";
    }
}
?>

<html>
<style>
    .error {
        color: black;
    }
</style>
<head><title>Question Data</title></head>
<body>
<h1>The User Data</h1>
<div>
    Question Name = <?php if (!$QuestionErr) echo $QuestionNames; ?>
</div>
<div>
    Question Body = <?php if (!$BodyErr) echo $QuestionBody; ?>
</div>
<div>
    Question Skills = <?php if (!$skillsErr) echo $QuestionSkills; ?>
</div>
</body>
</html>