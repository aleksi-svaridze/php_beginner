<?php

// What is a variable and Declare variables
$myName = 'Alex'; // String
$myAge = 42;  // Integer
$haveIjob = false; // Boolean
$salary = 3.500; // Double / float
$myHome = null; // NULL

define('MYRELIGION', 'Ortodox Christian');

$myJob;
$article;

if($haveIjob) {
    $myJob = 'Developer';
} else {
    $myJob = 'Unemploeed';
}

if($myHome) {
    $haveIhome = 'I have a home';
} else {
    $haveIhome = 'I do not have a home';
}

if($myJob === 'Developer') {
    $article = 'a';
} else {
    $article = 'an';
}

echo "My name is $myName and I am $myAge years old. At this time I am $article $myJob.  My religion view point is ".MYRELIGION." $haveIhome";
echo '<hr />';
echo MYRELIGION;
echo '<hr />';

// Variable types and Print the variables. Explain what is concatenation
echo gettype($myName).'<br />';
echo gettype($myAge).'<br />';
echo gettype($myJob).'<br />';
echo gettype($salary).'<br />';
echo gettype($myHome).'<br />';
echo gettype($haveIjob).'<br />';
echo '<hr />';


// Print the whole variable
echo var_dump($myName).'<br />';
echo var_dump($myHome).'<br />';
echo var_dump($haveIjob).'<br />';
echo var_dump($salary).'<br />';
echo var_dump($myAge);
echo '<hr />';

// Change the value of the variable
$salary = 4.500;

echo $salary;
echo '<hr />';
// Print type of the variable

// Variables type checking functions
var_dump(is_int($myAge));
echo '<hr />';
var_dump(is_float($salary));
echo '<hr />';
var_dump(is_string($myName));
echo '<hr />';
var_dump(is_null($haveIhome));
echo '<hr />';
var_dump(is_double($salary));
echo '<hr />';
// Check if variable is defined
var_dump(defined('MYRELIGIONl'));
echo '<hr />';
// Constants

// Using PHP built-in constants
echo SORT_ASC;
echo '<hr />';
echo SORT_DESC;
echo '<hr />';
echo PHP_INT_MAX;
echo '<hr />';
echo PHP_INT_MIN;
?>