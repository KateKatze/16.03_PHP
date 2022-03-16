<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD Table</title>
</head>
<body>
    <?php

    require_once 'actions/db_connect.php';

    $empst="";

    if(isset($_GET['id'])){
        $rest = "SELECT * FROM dishes WHERE dishID = {$_GET['id']}";
        $result = mysqli_query($connect, $rest);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo "<div class='container'> <h3 class='display-5 mb-3'> " .$row['name']. " </h3> <img src='".$row['image']."' style='width: 25%;'> <p class='lead mt-3'> ".$row['meal_description']."</p> </div>";
        }
    }   
    ?>
  <!-- Boostrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>