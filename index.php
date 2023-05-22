<?php
    require ("readJson.php");
    require ("functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyperspace Task</title>
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex mt-5 w-100 justify-content-center flex-column">
        <h1 class="w-100 d-flex justify-content-center mb-3">Cyper Space</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><?php echo $name;?></th>
                <th scope="col"><?php echo $email;?></th>
                <th scope="col">Laptop</th>
                <th scope="col">Mouse</th>
                <th scope="col">Keyboard</th>
                <th scope="col">Headphones</th>
                <th scope="col">Monitor</th>
                <th scope="col"><?php echo $purchaseHistoryCapitalizeFirstChars?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $counter = 0;
            foreach ($users as $user) {
                $counter++;
                // Customer's purchase history
                $purchaseHistory = $user["purchase_history"];

                $laptopQuantity = calculateProductQuantity($purchaseHistory, "Laptop");
                $mouseQuantity = calculateProductQuantity($purchaseHistory, "Mouse");
                $keyboardQuantity = calculateProductQuantity($purchaseHistory, "Keyboard");
                $headphonesQuantity = calculateProductQuantity($purchaseHistory, "Headphones");
                $monitorQuantity = calculateProductQuantity($purchaseHistory, "Monitor");
                // Customer's bought total products
                $totalQuantity = calculateTotalQuantity($purchaseHistory);

                echo "<tr>";
                echo "<th>$counter</th>";
                echo "<td>{$user['name']}</td>";
                echo "<td>{$user['email']}</td>";
                echo "<td>$laptopQuantity</td>";
                echo "<td>$mouseQuantity</td>";
                echo "<td>$keyboardQuantity</td>";
                echo "<td>$headphonesQuantity</td>";
                echo "<td>$monitorQuantity</td>";
                echo "<td>$totalQuantity</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
