<?php

$result=0;

if(isset($_POST['btnsubmit']))
{
$a = (int)$_POST['calNum1'];
$b = (int)$_POST['calNum2'];
$calOperation = $_POST['calOperation'];

switch($calOperation )
    {
        case 'Addition':
        $result = $a + $b;
        break;

        case 'Subtraction':
        $result = $a - $b;
        break;

        case 'Multiplaction':
        $result = $a * $b;
        break;

        case 'Division':
        $result = $a / $b;
        break;

        case 'Modulus':
        $result = $a % $b;
        break;

        default:
        echo"Sorry there is no such operation";
        break;
    }
}
?>
