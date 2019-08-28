<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalkulator</title>
    </head>

<body>

<form>
    <input type="text" name="num1" placeholder="Broj prvi">
    <input type="text" name="num2" placeholder="Broj drugi">
    <select name="operator">
        <option>Prelijepo</option>
        <option>Sobiranije</option>
        <option>Oduzimanije</option>
        <option>Vazmnoženije</option>
        <option>Razdjelenije</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Računica</button>
</form>

<p>Rješenije jest:</p>

<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "Prelijepo":
                echo "Nijeste označili način računice";
            break; 
            case "Sobiranije":
                echo $result1 + $result2;
            break; 
            case "Oduzimanije":
                echo $result1 - $result2;
            break; 
            case "Vazmnoženije":
                echo $result1 * $result2;
            break; 
            case "Razdjelenije":
                echo $result1 / $result2;
            break;  
        }
    }
?>

</body>






</html>