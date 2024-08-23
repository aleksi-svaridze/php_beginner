<?php

// Create simple string
$myName = 'Alex';
$yourName = "Maya";

echo "My name is $myName. Your name is $yourName.";
echo '<hr/>';

// String concatenation
echo "Hello, "."I want to learn "."PHP";
echo '<hr/>';
// String functions
$string = "    hello, PHP! I love you!!! "     ;
echo "1 - ".strlen($string).'<br />';
$newString = trim($string);
$leftTrimed = ltrim($string);
$rightTrimed = rtrim($string);
echo "2 - ".trim($string).'<br />';
echo "Test: ".strlen($newString ).'<br />';
echo "3 - ".ltrim($leftTrimed).'<br />';
echo "4 - ".rtrim($rightTrimed).'<br />';
echo "Test: ".strlen($leftTrimed)." - ".strlen($rightTrimed).'<br />';
echo "5 - ".str_word_count($string).'<br />';
echo "6 - ".strrev($string).'<br />';
echo "7 - ".strtoupper($string).'<br />';
echo "8 - ".strtolower($string).'<br />';
echo "9 - ".ucfirst('hello').'<br />';
echo "10 - ".lcfirst('Hello').'<br />';
echo "11 - ".ucwords($string).'<br />';
echo "12 - ".strpos($string, 'PhP').'<br />';
echo "13 - ".stripos($string, 'PhP').'<br />';
echo "14 - ".substr($string, 8).'<br />';
echo "15 - ".substr($string, 8, 5).'<br />';
echo "16 - ".str_replace('php', 'js', $string).'<br />';
echo "17 - ".str_ireplace('php', 'js', $string).'<br />';

$someShortNumber = 100;
$someLongNumber = 123456;
echo "18 - ".str_pad($someShortNumber, 8, '+', STR_PAD_BOTH).'<br />';
echo "18 - ".str_pad($someLongNumber, 8, '+', STR_PAD_BOTH).'<br />';
echo "19 - ".str_repeat('Hello', 4).'<br />';
echo '<hr />';

?>

<?php
// Multiline text and line breaks
$longText = "<pre>
            Hello, I am <strong>Alex</strong>
            and I love
            my daughter,
            <strong>Maya</strong>
            </pre>
            ";

echo $longText;
echo '<hr />';
echo nl2br($longText);
echo '<hr />';
echo htmlentities($longText);
echo '<hr />';
echo nl2br(htmlentities($longText));
echo '<hr />';
echo html_entity_decode('Hello, I am &lt;strong&gt;Alex&lt;/strong&gt;');
echo '<hr />';
echo html_entity_decode(htmlentities($longText));
// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php