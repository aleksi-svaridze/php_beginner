<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
    echo 'Hello World 1';

    echo '<br/>';

    $name = 'Alex';
    $age = 42;
    $isHungry = false;
    $weight = 95.5;
    $salary = null;

    echo $name.'<br />';
    echo $isHungry.'<br />';
    echo $salary.'<br />';

    echo '<h1>Helllo</h1>';

    // Print the type of variable
    echo gettype($name). '<br>';

    echo gettype($weight). '<br>';

    echo gettype($isHungry). '<br/>';

    echo gettype($age). '<br/>';

    // Print the whole variable
    var_dump($name, $age);
    var_dump($isHungry);

    echo '<br>';

    // Variable checking functions
    echo is_string($name).'<br>';
    echo is_bool($isHungry).'<br>';
    echo is_int($age).'<br>';
    echo is_null($salary).'<br>';
    echo is_double($weight).'<br>';

    // Check if variable is defined
    var_dump(isset($name)); // Returns false or true
    echo isset($isHungry); // Returns 1 or empty string

    echo '<hr>';

    // Define Constant variable
    define('NAMEME', 'Alex');
    define('TWO', 2);
    define("ISCOCO", true);
    define('ISNULL', null);
    define('ISDOUBLE', 3.42);

    echo defined('TWO'); // Returns 1 or empty string
    echo '<br>';
    var_dump(defined('TWO')); // Returns bool(true) or bool(false)

    // echo ISDOUBLE;
    echo '<hr>';

    // Built in methodt in PHP
    echo SORT_ASC;
    echo '<br>';
    echo SORT_DESC;
    echo '<br>';
    echo PHP_INT_MAX;

    // Single line comment - 1
    # single line comment - 2
    /* multilane 
      comment   */
  ?>

  <?php
    echo "Helllloooo again";
  ?>

</body>
</html>
