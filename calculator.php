<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator</h1>
    <?php 
    if (isset($_GET['submit'])) {
        $num1 = (int) $_GET['num1'];
        $num2 = (int) $_GET['num2'];
        $submit = $_GET['submit'];
        $ans = "";
    
        switch ($submit) {
            case 'Add': 
                $ans = $num1 + $num2;
                break;
            case 'Substract':
                $ans = $num1 - $num2;
                break;
            case 'Multiply':
                $ans = $num1 * $num2;
                break;
            case 'Divide':
                $ans = $num1 / $num2;
                break;
            case 'Modulo':
                $ans = $num1 % $num2;
                break;
            default:
                $ans = "Error";
                break;
        }
    }
    ?>

    <form action="calculator.php" method="get">
        <div style="display:flex; height:50px">
            <input type="number" name="num1" id=""><h2>Eerste getal</h2>
        </div>
        <div style="display:flex; height:50px">
            <input type="number" name="num2" id=""><h2>Tweede getal</h2>
        </div>

        <button type="submit" name="submit" value="Add">Add</button>
        <button type="submit" name="submit" value="Substract">Subtract</button>
        <button type="submit" name="submit" value="Multiply">Multiply</button>
        <button type="submit" name="submit" value="Divide">Divide</button>
        <button type="submit" name="submit" value="Modulo">Modulo</button>
    </form>

<h1><?php if (isset($ans)) { echo "Antwoord is: $ans"; } ?> </h1>
</body>
</html>

