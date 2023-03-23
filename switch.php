<?php

$score = 178; 

switch ($score) {
    case ($score <= 100 && $score >= 0):
        switch ($score) {
            case 100:
                echo "점수:".$score." A+";
                break;
            case ($score >= 90):
                echo "점수:".$score." A";
                break;
            case ($score >= 80):
                echo "점수:".$score." B";
                break;
            case ($score >= 70):
                echo "점수:".$score." C";
                break;
            case ($score >= 60):
                echo "점수:".$score." D";
                break;
            default:
                echo "점수:".$score." F";
                break;
        }
        break;
    default:
        echo "잘못입력하셨습니다.";
        break;
}

?>