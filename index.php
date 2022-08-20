<?php
include 'code.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My online Calculator</title>
</head>
<body>
    <div class="outcal">
        <div class="headCal">
            <h3>PHP Calculator</h3>
            <div class="bodyCal">
                <form action="" method="post">
                    <table>
                       <tr>
                            <td></td>
                            <td><input type="number" name="calNum1" autocomplete="off"></td>
                       </tr>
                       <tr>
                            <td><select name="calOperation">
                                <option `value="Addition">+</option>
                                <option value="Subtraction">-</option>
                                <option value="Division">/</option>
                                <option value="Multiplication">*</option>
                                <option value="Modulus">%</option>
                            </select>
                            </td>
                            <td><input type="number" name="calNum2" autocomplete="off"></td>
                       </tr>
                       <tr>
                            <td></td>
                            <td><hr></td>
                       </tr>
                       <tr>
                        <td><button type="submit" name="btnsubmit">=</button></td>
                        <td><input type="number" readonly autocomplete="off" value="<?php echo $result;?>">Result</td>
                       </tr>
                    </table>
                </form>

            </div>

        </div>




    </div>
</body>
</html>