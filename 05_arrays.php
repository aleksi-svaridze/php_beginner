<?php

// Create array
$fruitsName = ['banana', 'kiwi', 'apple', 'peach'];

$vegetablesName = array('tomato', 'potato', 'melon');

// Print the whole array
print_r($vegetablesName);
echo '<hr>';
echo '<pre>';
print_r($fruitsName);
echo '</pre>';
echo '<hr>';
echo '<pre>';
var_dump($vegetablesName);
echo '</pre>';
echo '<hr>';
// Get element by index
echo $fruitsName[0];
echo '<hr>';
// Set element by index
$fruitsName[0] = 'new random fruit';
print_r($fruitsName);
echo '<hr>';

// Check if array has element at index 2
var_dump(isset($fruitsName[6]));
echo '<hr>';

// Add element at the end of the array
$fruitsName[] = 'grapes';
array_push($fruitsName, 'watermalon');

var_dump($fruitsName);
echo '<hr>';

// Remove element from the end of the array
$removedElement = array_pop($fruitsName);
echo $removedElement;
echo '<hr>';
var_dump($fruitsName);
echo '<hr>';

// Print the length of the array
$myArraysLength = count($fruitsName);
echo $myArraysLength;
echo '<hr>';

// Add element at the beginning of the array
array_unshift($fruitsName, 'qliavi');
echo '<hr>';
var_dump($fruitsName);
// Remove element from the beginning of the array
echo '<hr>';
$removedItemFromTheBiginning = array_shift($fruitsName);
echo $removedItemFromTheBiginning;
echo '<hr>';
var_dump($fruitsName);
// Split the string into an array
echo '<hr>';
$longString = 'I,love,you';
$newArr = explode(',', $longString);
var_dump($newArr);
echo '<hr>';
// Combine array elements into string
$arrayToString = implode(' ',$newArr);
echo $arrayToString;
echo '<hr>';
// Check if element exist in the array
echo '<hr>';

// Search element index in the array
echo '<hr>';

// Merge two arrays

echo '<hr>';


echo '<hr/>';

// Sorting of array (Reverse order also)
echo '<hr>';


// filter method

echo '<hr>';
// Map method
echo '<hr>';
// Reduce method
echo '<hr>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays