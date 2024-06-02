<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        .form-label{
            width: 35%;
            margin-bottom: 50px;
        }
        .form-control , .form-select{
            display: inline;
            width: 45%
        }
        .container{
            width: 500px;
            padding: 30px 0 30px 30px;
            margin-top: 50px;
            box-shadow: 1px 1px 15px 1px;
        }
        .btn{
            margin-left: 50px;
            width: 40%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="get">
            <label for="n1" class="form-label">First Number : </label>
            <input type="number" name="n1" id="n1" class="form-control">
            <label for="n2" class="form-label">Second Number : </label>
            <input type="number" name="n2" id="n2" class="form-control">
            <label for="op" class="form-label">Operator:</label>
            <select class="form-select" name="op">
                <option value = "+" > + </option>
                <option value = "-" > - </option>
                <option value = "*" > * </option>
                <option value = "/" > / </option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>


<?php 

if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["op"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $op = $_GET["op"];

    if ($op == "+") {
      $result = "$n1 $op $n2 = " . ($n1 + $n2);
    } elseif ($op == "-") {
      $result = "$n1 $op $n2 = " . ($n1 - $n2);
    } elseif ($op == "*") {
      $result = "$n1 $op $n2 = " . ($n1 * $n2);
    } elseif ($op == "/" && $n2 != 0) {
      $result = "$n1 $op $n2 = " . ($n1 / $n2);
    } elseif ($op == "/" && $n2 == 0) {
      $result = "Cannot divide by zero";
    } else {
      $result = "Invalid operator";
    }

  echo '<br><div style="text-align: center; font-size: 24px;">' . $result . '</div>';
} 

?>

</body>

</html>
