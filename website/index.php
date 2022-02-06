<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <style>
        body {
            background-color: greenyellow;
            text-align: center;
            margin: 0 auto;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <h1>Welcome to my shop</h1>
    <ul>
        <?php
        $json = file_get_contents('http://product-service');
        $obj = json_decode($json);

        $products = $obj->products;
        foreach ($products as $product) {
            echo "<li>$product</li>";
        }
        ?>
    </ul>
</body>

</html>