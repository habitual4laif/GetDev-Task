<?php
require_once 'class.php';

$task = new Task();
$result = $task->convert();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Agbolade Abiodun Submission</title>
    <style media="screen">
      body {
        margin: 3rem;
        font-size: 2rem;
        font-weight: bolder;
        text-align: center;
      }

      td, tr {
        font-size: 1rem;
      }
    </style>
    
  </head>
  <body>

<?php
// This is the table from the csv file
echo $result;
?>

  </body>
</html>
