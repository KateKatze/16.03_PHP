<?php
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);

$tbody = "";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "<tr>
            <td class='px-3'><img class='img-thumbnail' style='width: 100px;' src='".$row['image']."'></td>
            <td class='px-3'>".$row['name']."</td>
            <td class='px-3'>".$row['price']."</td>
            <td class='px-3'>".$row['meal_description']."</td>
            <td class='px-3'><a class='btn btn-secondary' href='update.php?id=".$row['dishID']."'>Show details</a></td>
        </tr>";
    }
} else {
    $tbody = "<tr><td colspan='5' class='text-center'>Empty</td></tr>";
}

?>


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
    <div class="container w-75 mt-3 mx-auto">
        <!-- <div class="mb-3">
            <a href="create.php"><button class="btn btn-primary" type="button">Add product</button></a>
        </div> -->
        <h2 class="text-center mb-5">Dishes</h2>
        <table class="table table-border">
            <thead class="table-secondary">
                <tr>
                    <th class="px-3">Image</th>
                    <th class="px-3">Name</th>
                    <th class="px-3">Price</th>
                    <th class="px-3">Description</th>
                    <th class="px-3">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody; ?>
            </tbody>
        </table>
    </div>
    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>