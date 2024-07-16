<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> While Loop Runner </title>
</head>
<body>
    <?php 
        $num = 0;
        while($num < 10):
            $num++;
     ?>
     <p> My number 0 to ten: <?php echo $num ?> </p>
     <?php endwhile; ?>
</body>
</html>