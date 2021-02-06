<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teddy Nanta PHP</title>
    <style>
        body pre{
            margin-left: 4;
        }
    </style>
</head>
<body>
    <h1>Teddy Nanta PHP</h1>
    <pre>
        **************
              *
              *
              *
              *
              *
    </pre>


    <?php 
        $name = "teddy";

        print hash("sha256", $name);

    ?>
</body>
</html>
