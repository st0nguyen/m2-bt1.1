<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$num = 252;
//$a = ceil($num / 10);
//echo $num % 10;
//echo fmod(floor($num / 10), 10);


switch ($num) {
    case 0:
        echo "old";
        break;
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    case 4:
        echo "four";
        break;
    case 5:
        echo "fine";
        break;
    case 6:
        echo "six";
        break;
    case 7:
        echo "seven";
        break;
    case 8:
        echo "eight";
        break;
    case 9:
        echo "nine";
        break;
    case 10:
        echo "ten";
        break;
}
if ($num > 10 && $num < 20) {
    switch ($num % 10) {
        case 1 :
            echo "eleven";
            break;
        case 2 :
            echo "twelve";
            break;
        case 3 :
            echo "thirteen";
            break;
        case 4 :
            echo "fourteen";
            break;
        case 5:
            echo "fifteen";
            break;
        case 6 :
            echo "sixteen";
            break;
        case 7 :
            echo "seventeen";
            break;
        case 8 :
            echo "eighteen";
            break;
        case 9 :
            echo "nineteen";
            break;
    }
}
if ($num > 20 && $num < 100) {
    $dvi = ($num % 10);
    $chuc = floor($num / 10);



        switch ($dvi) {
            case 0:
                $dvi = "old";
                break;
            case 1:
                $dvi = "one";
                break;
            case 2:
                $dvi = "two";
                break;
            case 3:
                $dvi = "three";
                break;
            case 4:
                $dvi = "four";
                break;
            case 5:
                $dvi = "fine";
                break;
            case 6:
                $dvi = "six";
                break;
            case 7:
                $dvi = "seven";
                break;
            case 8:
                $dvi = "eight";
                break;
            case 9:
                $dvi = "nine";
                break;
            case 10:
                $dvi = "ten";
                break;
        }




        switch ($chuc) {
            case 2:
                $chuc = "twenty";
                break;
            case 3:
                $chuc = "thirty";
                break;
            case 4:
                $chuc = "forty";
                break;
            case 5:
                $chuc = "fifty";
                break;
            case 6:
                $chuc = "Sixty";
                break;
            case 7:
                $chuc = "Seventy";
                break;
            case 8:
                $chuc = "eighty";
                break;
            case 9:
                $chuc = "ninety";
                break;
        }
    echo "$chuc-$dvi";
}
if ($num > 100 && $num < 1000) {
    $dvi = $num % 10;
    $chuc = fmod(floor($num / 10), 10);
    $tram = floor($num / 100);
    switch ($tram) {
        case 1:
            $tram = "one hundred";
            break;
        case 2:
            $tram = "two hundred";
            break;
        case 3:
            $tram = "three hundred";
            break;
        case 4:
            $tram = "four hundred";
            break;
        case 5:
            $tram = "fine hundred";
            break;
        case 6:
            $tram = "six hundred";
            break;
        case 7:
            $tram = "seven hundred";
            break;
        case 8:
            $tram = "eight hundred";
            break;
        case 9:
            $tram = "nine hundred";
            break;
    }
    switch ($dvi) {
        case 0:
            $dvi = "old";
            break;
        case 1:
            $dvi = "one";
            break;
        case 2:
            $dvi = "two";
            break;
        case 3:
            $dvi = "three";
            break;
        case 4:
            $dvi = "four";
            break;
        case 5:
            $dvi = "fine";
            break;
        case 6:
            $dvi = "six";
            break;
        case 7:
            $dvi = "seven";
            break;
        case 8:
            $dvi = "eight";
            break;
        case 9:
            $dvi = "nine";
            break;
        case 10:
            $dvi = "ten";
            break;
    }

    switch ($chuc) {
        case 2:
            $chuc = "twenty";
            break;
        case 3:
            $chuc = "thirty";
            break;
        case 4:
            $chuc = "forty";
            break;
        case 5:
            $chuc = "fifty";
            break;
        case 6:
            $chuc = "Sixty";
            break;
        case 7:
            $chuc = "Seventy";
            break;
        case 8:
            $chuc = "eighty";
            break;
        case 9:
            $chuc = "ninety";
            break;
    }
    echo "$tram $chuc-$dvi";
}
?>
</body>
</html>