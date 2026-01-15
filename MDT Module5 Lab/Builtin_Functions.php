<!--
Palo, Cedric Nathan E.
CYB-201
01/15/26
-->
<?php
//VARIABLES TO BE USED FOR MODIFICATION
$caseChange = 'Holy angel university';
$countStr = 'CEDRIC NATHAN PALO';
$modifyStr = '.I love to modify!.';

//Working with Numbers
$decNumber = 1223.4567;
$intNumber = 9;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Built-in Functions</title>

<!--Template got from: https://codepen.io/florantara/pen/dROvdb-->
<style>
    *{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    body{
        font-family: "Inter", sans-serif;
        -webkit-font-smoothing: antialiased;
        background: rgba( 71, 147, 227, 1);
    }
    h2{
        text-align: center;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: white;
        padding: 30px 0;
    }

    /* Table Styles */

    .table-wrapper{
        margin: 10px 70px 70px;
        box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    }

    .fl-table {
        border-radius: 5px;
        font-size: 18px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
        background-color: white;
    }

    .fl-table td, .fl-table th {
        text-align: center;
        padding: 8px;
    }

    .fl-table td {
        border-right: 1px solid #f8f8f8;
        font-size: 15px;
    }

    .fl-table thead th {
        color: #ffffff;
        background: #4FC3A1;
    }


    .fl-table thead th:nth-child(odd) {
        color: #ffffff;
        background: #324960;
    }

    .fl-table tr:nth-child(even) {
        background: #F8F8F8;
    }

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>

</head>
<body>
    <h2>BUILT-IN FUNCTIONS BY CEDRIC NATHAN PALO</h2>
    <h2>UPPER & LOWERCASE, CHECKING LENGTH</h2>

<!--Case Change Functions Table-->
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Functions</th>
            <th>Code</th>
            <th>Meaning</th>
            <th>Output (Initial text is <?= $caseChange ?>)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Lowercase</td>
            <td>strtolower($string)</td>
            <td>Changes all characters of a string to lowercase</td>
            <td><?= strtolower($caseChange) ?></td>
        </tr>
        <tr>
            <td>Uppercase</td>
            <td>strtoupper($string)</td>
            <td>Changes all characters of a string to luppercase</td>
            <td><?= strtoupper($caseChange) ?></td>
        </tr>
        <tr>
            <td>Capitalize</td>
            <td>$ucwords($string)</td>
            <td>Changes first character of each word to be capitalized</td>
            <td><?= ucwords($caseChange) ?></td>
        </tr>
        </tbody>
    </table>
</div>
<!--Counting Functions Table-->
<div class="table-wrapper">
    <h2>COUNTING CHARACTERS AND WORDS</h2>
    <table class="fl-table">
        <thead>
        <tr>
            <th>Functions</th>
            <th>Code</th>
            <th>Meaning</th>
            <th>Output (Initial text is <?= $countStr ?>)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Number of Characters</td>
            <td>strlen($string)</td>
            <td>Counts the number of characters in the string, including whitespace</td>
            <td><?= strlen($countStr) ?></td>
        </tr>
        <tr>
            <td>Number of words</td>
            <td>str_word_count($string)</td>
            <td>Counts the number of words in the string</td>
            <td><?= str_word_count($countStr) ?></td>
        </tr>
        </tbody>
    </table>
</div>
<!--Removing and Replacing Functions Table-->
<div class="table-wrapper">
    <h2>REMOVING AND REPLACING CHARACTERS</h2>
    <table class="fl-table">
        <thead>
        <tr>
            <th>Functions</th>
            <th>Code</th>
            <th>Meaning</th>
            <th>Output (Initial text is <?= $modifyStr ?>)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Left Whitespace Trim</td>
            <td>ltrim($string, [, $delete])	</td>
            <td>Removes any trailing left whitespace or specified deleted character in a string</td>
            <td><?= ltrim($modifyStr, '.') ?></td>
        </tr>
        <tr>
            <td>Right Whitespace Trim</td>
            <td>rtrim($string, [, $delete])</td>
            <td>Removes any trailing right whitespace or specified deleted character in a string</td>
            <td><?= rtrim($modifyStr, '.') ?></td>
        </tr>
        <tr>
            <td>Whitespace Trim</td>
            <td>trim($string, [, $delete])</td>
            <td>Removes any trailing whitespace or specified deleted character in a string</td>
            <td><?= trim($modifyStr, '.') ?></td>
        </tr>
        <tr>
            <td>Replace (Case Sensitive)</td>
            <td>str_replace($old, $new, $string)</td>
            <td>Replaces the substring $old with the one in $new (case-sensitive)</td>
            <td><?= str_replace('love', 'like', $modifyStr) ?></td>
        </tr>
        <tr>
            <td>ireplace (Not Case Sensitive)</td>
            <td>str_ireplace($old, $new, $string)</td>
            <td>Replaces the substring $old with the one in $new (not case-sensitive)</td>
            <td><?= str_ireplace('i', 'You', $modifyStr) ?> ('i' used)</td>
        </tr>
        <tr>
            <td>String Repeat</td>
            <td>str_repeat($string, $repeats)</td>
            <td>Repeats a string to a set amount of times</td>
            <td><?= str_repeat($modifyStr. '<br>', 5) ?></td>
        </tr>
        </tbody>
    </table>
</div>
<!--OTHER FUNCTIONS-->
<div class="table-wrapper">
    <h2>OTHER BUILT-IN FUNCTIONS</h2>
    <table class="fl-table">
        <thead>
        <tr>
            <th>Functions</th>
            <th>Code</th>
            <th>Meaning</th>
            <th>Output (Initial data used is <?= $decNumber ?> & <?= $intNumber ?>)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Round</td>
            <td>round($number, $places, $round)</td>
            <td>Rounds floating point numbers up or down (2nd place value used)</td>
            <td><?= round($decNumber, 2, PHP_ROUND_HALF_UP) ?></td>
        </tr>
        <tr>
            <td>Integer Round Up</td>
            <td>ceil($number)</td>
            <td>Rounds a number up to the nearest integer (whole number)</td>
            <td><?= ceil($decNumber) ?></td>
        </tr>
        <tr>
            <td>Integer Round Down</td>
            <td>floor($number)</td>
            <td>Rounds a number down to the nearest integer (whole number)</td>
            <td><?= floor($decNumber) ?></td>
        </tr>
        <tr>
            <td>MT Random</td>
            <td>mt_rand($min, $max)</td>
            <td>Creates a random number between $min and $max</td>
            <td><?= mt_rand(0, 10) ?> (0-10)</td>
        </tr>
        <tr>
            <td>Rand</td>
            <td>rand($min, $max)</td>
            <td>Another random function that had a different algorithm before 7.1</td>
            <td><?= rand(10, 100) ?> (10-100)</td>
        </tr>
        <tr>
            <td>Power</td>
            <td>pow($base, $exponent)</td>
            <td>Returns the base value to the specified power</td>
            <td><?= pow($intNumber, 2) ?></td>
        </tr>
        <tr>
            <td>Square Root</td>
            <td>sqrt($number)</td>
            <td>Returns the square root of a number</td>
            <td><?= sqrt($intNumber) ?></td>
        </tr>
        <tr>
            <td>Numeric Checker</td>
            <td>is_numeric($number)</td>
            <td>Returns true or false if a value is numeric (1 = true, 0 = false)</td>
            <td><?= is_numeric($intNumber) ?></td>
        </tr>
        <tr>
            <td>Number Format</td>
            <td>number_format ($number[, $decimals][, $decimal_point][, $thousand_separator])</td>
            <td>Specifies how a number should be formatted. If just $number is given, <br>
            it formats it without decimals and a comma is used to separate thousands. <br><br>
            $decimals shows the given number of decimal places with a dot to separate <br>
            decimals and a comma to separate to separate thousands. <br><br>
            $decimal_point and $thousand_separator <br>let you specify the characters used 
            to separate decimals and thousands.<br><br>
            To use decimal_point or thousand_separator you must use both.</td>
            <td><?= number_format ($decNumber, 2, ',', ',') ?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>