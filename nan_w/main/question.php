<!-- Header Section -->
<?php
include_once('./_common.php');
require_once "./inc/header-v1.php";

$quiz_idx = ifilter("quiz_idx", "", "string");
$question_idx = ifilter("question_idx", "", "string");
?>
 
   
<?php require_once "./inc/question/question-form.php"; ?>
  
<?php   //   require_once "./inc/question/multiple-choice-question.php"; ?>
 
  
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
 