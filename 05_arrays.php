<?php

// Create array
$fruits = ['banana','apple','kiwi'];

$vegetables = array('potato', 'tomato', 'watermelon');

// Print the whole array
echo '<pre>';
var_dump($vegetables);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($vegetables);
echo '</pre>';
echo '<hr>';

// Get element by index
echo $fruits[2];
echo '<hr>';
// Set element by index
$fruits[3] = 'peach';
echo $fruits[3];
echo '<hr>';

// Check if array has element at index 2
var_dump(isset($fruits[4]));
echo '<hr>';

// Add element at the end of the array
$fruits[] = 'mango';
array_push($fruits, 'karalioki');
echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<hr>';

// Remove element from the end of the array
echo array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<hr>';

// Print the length of the array
echo count($fruits);
echo '<hr>';
echo count($vegetables);
echo '<hr>';

// Add element at the beginning of the array
array_unshift($fruits, 'melon');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<hr>';
// Remove element from the beginning of the array
echo array_shift($fruits);

echo '<hr>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Split the string into an array
echo '<hr>';
$string = 'me, you, she';

$string2 = explode(',', $string);
echo '<pre>';
var_dump($string2);
echo '</pre>';
echo '<hr>';
// Combine array elements into string
echo implode('@',$string2);
echo '<hr>';
// Check if element exist in the array
var_dump(in_array('apple', $fruits));
var_dump(in_array('boo', $fruits));
echo '<hr>';

// Search element index in the array
var_dump(array_search('boo', $fruits));
var_dump(array_search('apple', $fruits));
echo '<hr>';

// Merge two arrays

$allFruits = array_merge($fruits, $vegetables);
$allFruits2 = [...$fruits, ...$allFruits];
echo '<pre>';
var_dump($allFruits);
echo '</pre>';

echo '<hr>';

echo '<pre>';
var_dump($allFruits2);
echo '</pre>';

echo '<hr/>';

// Sorting of array (Reverse order also)
sort($fruits);
var_dump($fruits);
echo '<hr>';

rsort($fruits);
var_dump($fruits);


// filter method
$numbers = [1,2,3,4,5,6,7,8,9];
$evens = array_filter($numbers, fn($n) => $n % 2 === 0);

$odds = array_filter($numbers, fn($odd) => $odd % 2 !== 0);
echo '<pre>';
var_dump($evens);
echo '</pre>';
echo '<hr>';
echo '<pre>';
var_dump($odds);
echo '</pre>';

echo '<hr>';
// Map method
$mappedArray = array_map(fn($n) => $n + 1, $numbers);

echo '<pre>';
var_dump($mappedArray);
echo '</pre>';
echo '<hr>';
// Reduce method
$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n);

echo $sum;
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