<!DOCTYPE html>
<html>

<head>
    <title> Matrix operation </title>

</head>

<body>
    <h2> Matrix operations (Addition & Multiplication) </h2>
    <form method="post">
        <pre>
        Enter the no of rows : <input type="number" name="rows">
        Enter the no of cols : <input type="number" name="cols">
        <input type="submit" name="generate">
        </pre>

        <?php
        $rows = $_POST['rows'];
        $cols = $_POST['cols'];


        if (isset($_POST['generate']) || isset($_POST['add']) || isset($_POST['multiply'])) {


            //MATRIX A
            echo "<table border='1'>";

            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $val = isset($_POST['A'][$i][$j]);
                    echo "<td><input type='number' name='A[$i][$j]' value='$val'></td>";
                }
            }
            echo "</table>";

            echo "<h3> Matrix A </h3>";
            //MATRIX B
            echo "<table border='1'>";

            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $val = isset($_POST['B'][$i][$j]);
                    echo "<td><input type='number' name='B[$i][$j]' value='$val'></td>";
                }
            }
            echo "</table>";

            echo "<br>";

            echo "<input type='submit' name='add' value='add'>";
            echo "<input type='submit' name='multiply' value='multiply'>";
        }
        ?>
    </form>

    <?php
    //additon
    if (isset($_POST['add'])) {

        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                $a = $_POST['A'][$i][$j];
                $b = $_POST['B'][$i][$j];
                $sum = $a + $b;
                echo "<td> $sum </td>";

            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>


</body>

</html>