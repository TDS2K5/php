<!DOCTYPE html>
<html>
<head>
    <title> Matrix operation </title>
    <style>
        table {
            border-collapse: collapse;            
        }
        td {
            padding: 5px;
        }
        input[type="number"] {
            width: 60px;
        }
    </style>
</head>
<body>
    <h2> Matrix operations (Addition & Multiplication) </h2>
    <form method="post">
        <?php
        // initialization
        $rows = isset($_POST['rows']) ? $_POST['rows'] : '';
        $cols = isset($_POST['cols']) ? $_POST['cols'] : '';        
        ?>

        Enter the No of rows:
        <input type="number" name="rows" value="<?php echo $rows; ?>" required>
        <br><br> 

        Enter no of columns:
        <input type="number" name="cols" value="<?php echo $cols; ?>" required>
        <br><br>

        <input type="submit" name="generate" value="Generate">
        
        <?php
        if (isset($_POST['generate']) || isset($_POST['add']) || isset($_POST['multiply'])) {
            
            // MATRIX A
            echo "<h3> Matrix A </h3>";
            echo "<table border='1'>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $val = isset($_POST['A'][$i][$j]) ? $_POST['A'][$i][$j] : '';
                    echo "<td><input type='number' name='A[$i][$j]' value='$val'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // MATRIX B
            echo "<h3> Matrix B </h3>";
            echo "<table border='1'>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $val = isset($_POST['B'][$i][$j]) ? $_POST['B'][$i][$j] : '';
                    echo "<td><input type='number' name='B[$i][$j]' value='$val'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            
            echo "<input type='submit' name='add' value='Add Matrices'>";
            echo "<input type='submit' name='multiply' value='Multiply Matrices'>";
        }
        ?>
    </form>

    <?php
    // ADDITION
    if (isset($_POST['add'])) {
        echo "<h3> Result Matrix (Addition) </h3>";
        echo "<table border='1'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                $a = $_POST['A'][$i][$j];
                $b = $_POST['B'][$i][$j];
                $sum = $a + $b;
                echo "<td>$sum</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // Multiplication
    if (isset($_POST['multiply'])) {
        echo "<h3> Result Matrix (Multiplication) </h3>";
        echo "<table border='1'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                $sum = 0;
                for ($k = 0; $k < $cols; $k++) {
                    $sum += $_POST['A'][$i][$k] * $_POST['B'][$k][$j];
                }
                echo "<td>$sum</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>