<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "Question 1: What Hogwarts house is Harry in?<br>";
echo "&emsp;You answered: ", $_POST["q1"], "<br>";
echo "&emsp;Correct answer: Gryffindor<br><br>";

echo "Question 2: What position does Harry play in Quidditch?<br>";
echo "&emsp;You answered: ", $_POST["q2"], "<br>";
echo "&emsp;Correct answer: Seeker<br><br>";

echo "Question 3: What is Harry's Patronus?<br>";
echo "&emsp;You answered: ", $_POST["q3"], "<br>";
echo "&emsp;Correct answer: Stag<br><br>";

echo "Question 4: Who kills Professor Dumbledore?<br>";
echo "&emsp;You answered: ", $_POST["q4"], "<br>";
echo "&emsp;Correct answer: Severus Snape<br><br>";

echo "Question 5: What makes someone feel better after being attacked by a Dementor?<br>";
echo "&emsp;You answered: ", $_POST["q5"], "<br>";
echo "&emsp;Correct answer: Chocolate<br><br>";

$correct = 0;
if($_POST["q1"] == "Gryffindor")
{
  $correct++;
}
if($_POST["q2"] == "Seeker")
{
  $correct++;
}
if($_POST["q3"] == "Stag")
{
  $correct++;
}
if($_POST["q4"] == "Severus Snape")
{
  $correct++;
}
if($_POST["q5"] == "Chocolate")
{
  $correct++;
}

echo "Score: ", $correct, "/5<br>";
echo "Percent: ", ($correct/5)*100, "%";
?>
