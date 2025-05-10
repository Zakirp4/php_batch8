<?php

$score = 0;

echo "===== Welcome to the Quiz App! =====\n\n";

// ==== Question 1 ====
echo "1. What is the capital of France?\n";
echo "a) Berlin\nb) Paris\nc) Dhaka\n";
echo "Your Answer: ";
$answer1 = trim(fgets(STDIN));

if ($answer1 == 'b') {
    echo "Correct!\n\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (b) Paris.\n\n";
}

// ==== Question 2 ====
echo "2. What is 2 + 2?\n";
echo "a) 1\nb) 3\nc) 4\n";
echo "Your Answer: ";
$answer2 = trim(fgets(STDIN));

if ($answer2 == 'c') {
    echo "Correct!\n\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (c) 4.\n\n";
}

// ==== Question 3 ====
echo "3. Which planet is known as the Red Planet?\n";
echo "a) Mars\nb) Earth\nc) Jupiter\n";
echo "Your Answer: ";
$answer3 = trim(fgets(STDIN));

if ($answer3 == 'a') {
    echo "Correct!\n\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (a) Mars.\n\n";
}

// ==== Final Score ====
echo "===== Quiz Complete! =====\n";
echo "You got $score out of 3 correct.\n";
?>