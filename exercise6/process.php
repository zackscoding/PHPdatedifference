<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toDate = $_POST['toDate'];
        $endDate = $_POST['endDate'];

    $start_date = strtotime($toDate); 
    $from_date = strtotime($endDate); 
    
    $dayDifference = $from_date - $start_date; 
    

    }
?>
    <form action="process.php" method="post">
        <label for="toDate">Input the start date.</label>
        <input type="date" name="toDate" id="toDate">
        <label for="endDate">Input the end date.</label>
        <input type="date" name="endDate" id="endDate">
        <input type="submit" >
        <div class="phpCode">
            <?php 
            echo floor($dayDifference/(60*60*24))."\n";
    
            echo "Is the number of days in between those dates";
            ?>
        </div>
    </form>
</div>
</body>
</html>