<?php
// 1
    $x = 4;

    switch($x){
        case 5:
            echo "Var is 5";
            break;
        case 7:
            echo "Var is 7";
            break;
        case 9:
            echo "Var is 9";
            break;

        case 6:
            echo "Var is 6";
            break;

        default:
            echo "Default work!";
            break;
    }
    // 2
    $a = 11;
    switch($a){
        case 10:
            echo "Number is 10";
            break;
        case 15:
            echo "Var is 15";
            break;
        default:
            echo "Something else";
    }

// 3(calc)
    echo "<form method=post action=1.php>";
    echo "<input type=text name=x>";
    echo "</br>";
    echo "<input type=text name=y>";
    echo "</br>";
    echo "<input type=radio name=test value=plus>+";
    echo "<input type=radio name=test value=minus>-";
    echo "<input type=radio name=test value=umnojit>*";
    echo "<input type=radio name=test value=delit>/";
    echo "</br>";
    echo "<input type=submit name=sabmit value=Cчитать>";
    echo "</form>";
    if (isset($_REQUEST['x'])&&
        (isset($_REQUEST['y'])&&
        (isset($_REQUEST['test']))))
    {switch ($_REQUEST['test'])
    {case "plus":
            echo $_REQUEST['x']+$_REQUEST['y'];
            break;
    case "minus":
            echo $_REQUEST['x']-$_REQUEST['y'];
            break;
    case "umnojit":
            echo $_REQUEST['x']*$_REQUEST['y'];
            break;
    case "delit":
            echo $_REQUEST['x']/$_REQUEST['y'];
            break;
    default:
        echo "error";
        }
    }
?>