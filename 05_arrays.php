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
$arrayToString = implode(' ', $newArr);
echo $arrayToString;
echo '<hr>';

// Check if element exist in the array
var_dump(in_array('apple', $fruitsName));
echo '<hr>';

// Search element index in the array
echo array_search('apple', $fruitsName);
echo '<hr>';

// Merge two arrays
$healthyFood = array_merge(['blaa', 'qlaa'], $vegetablesName);
$newArray = [...$fruitsName, ...$healthyFood];
var_dump($newArray);
echo '<hr>';

// Sorting of array (Reverse order also)
sort($newArray);
var_dump($newArray);
echo '<hr>';
rsort($newArray);
var_dump($newArray);
echo '<hr>';

// filter method
$numbers = [1,2,3,4,5,6,7,8,9];
// $evens = array_filter($numbers, function($n){
//     return $n % 2 === 0;
// });
// $odds = array_filter($numbers, function($n){
//     return $n % 2 !== 0;
// });
$evens = array_filter($numbers, fn($n)=> $n % 2 === 0);
$odds = array_filter($numbers, fn($n) => $n % 2 !== 0);
var_dump($evens);
echo '<hr>';

// Map method
$mappedArray = array_map(fn($n) => ++$n, $numbers);
var_dump($mappedArray);
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
$alex = [
    'name' => 'Alex',
    'age' => 42,
    'hobbies' => ['programing', 'kid care', 'breath fresh air']
];

var_dump($alex);
echo '<hr />';
// Get element by key
echo $alex['name'];
echo '<hr />';

// Set element by key
$alex['name'] = 'Aleksi';
echo '<pre>';
var_dump($alex);
echo '</pre>';
// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key
echo '<hr/>';
echo '<pre>';
var_dump(isset($alex['ad']));
echo '</pre>';

// Print the keys of the array
echo '<hr/>';
echo '<pre>';
var_dump(array_keys($alex));
echo '</pre>';

// Print the values of the array
echo '<hr/>';
echo '<pre>';
var_dump(array_values($alex));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($alex);
echo '<hr/>';
echo '<pre>';
var_dump($alex);
echo '</pre>';

// Two dimensional arrays

$todos = [
    ['title' => 'todo 1', 'completed' => true],
    ['title' => 'todo 2', 'completed' => false]
];

echo '<hr/>';
echo '<pre>';
var_dump($todos);
echo '</pre>';