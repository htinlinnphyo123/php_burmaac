<?php

    $firstNum = $_POST['first_number'];
    $secondNum = $_POST['second_number'];

    $result;

    //for validation function
    function checkValidation($num,$index){
        if (preg_match('/^\d+$/', $num)) {
            return true;
        } else {
            echo "Invalid input . please check your input '{$num}' in the {$index} number";
        }
    }
    $firstNumCheck = checkValidation($firstNum,'first');
    $secondNumCheck = checkValidation($secondNum,'second');

    //calculation function
    function Calculate($firstNum,$secondNum,$result){
        global $result;
        switch ($_POST['sign']) {
            case '+':
                $result = $firstNum + $secondNum;
                break;
            case '-':
                $result = $firstNum - $secondNum;
                break;
            case '*':
                $result = $firstNum * $secondNum;
                break;
            case '/':
                $result = $firstNum / $secondNum;
                break;
            case '%':
                $result = $firstNum % $secondNum;
                break;
            default:
                echo 'error';
                break;
        }
    }

    if($firstNumCheck && $secondNumCheck){
        Calculate($firstNum,$secondNum,$result);
        var_dump($result);
        var_dump($firstNum);
        var_dump($secondNum);
    }else{
        echo 'please try again later';
    }


?>