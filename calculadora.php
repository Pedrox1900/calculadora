<?php
    $num = "";
    $resultado = "";
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
    $cookie_value2 = "";

    if(isset($_POST['display'])){
        $num = $_POST['display'];
    }else{
        $num = ""
;   }

    if(isset ($_POST['submit'])){
        $num = $_POST['display']  . $_POST['submit'];
    }else{
        $num = "";
    }

    if(isset($_POST['op'])){
        $cookie_value1 = $_POST['display'];
        setcookie($cookie_name1,$cookie_value1, time()  + (86400 * 30), "/");

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2,$cookie_value2, time()  + (86400 * 30), "/");
        $num = "";
    }

    if(isset($_POST['equals'])){
        $num = $_POST['display'];
        
        switch($_COOKIE['op']){
            case "+":
                $resultado = $num + $_COOKIE['num'];
              break;
            case "/":
                $resultado = $num / $_COOKIE['num'];
              break;
            case "-":
                $resultado = $num - $_COOKIE['num'];
              break;
            case "x":
                $resultado = $num * $_COOKIE['num'];
              break;
        }
        $num = $resultado;

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
       body {
        max-width: max-content;
        margin: auto;
        margin-top: 100px;
        }
    </style>

</head>

<body>
    <form action="#" method="post" >
    <table>
        <tr>
            <td colspan="4">
                <input type="text" name="display" value=<?php echo $num; ?> >
            </td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="7"/></td>
            <td><input type="submit" name="submit" value="8"/></td>
            <td><input type="submit" name="submit" value="9"/></td>
            <td><input type="submit" name="op" value="/"/></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="4"/></td>
            <td><input type="submit" name="submit" value="5"/></td>
            <td><input type="submit" name="submit" value="6"/></td>
            <td><input type="submit" name="op" value="+"/></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="1"/></td>
            <td><input type="submit" name="submit" value="2"/></td>
            <td><input type="submit" name="submit" value="3"/></td>
            <td><input type="submit" name="op" value="-"/></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="0"/></td>
            <td><input type="submit" name="submit" value="C"/></td>
            <td><input type="submit" name="equals" value="="/></td>
            <td><input type="submit" name="op" value="x"/></td>
        </tr>
    </table>
    </form>
</body>
</html>