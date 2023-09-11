<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">
        <h4>The point C is between A and B, so it must be more than A and less than B.</h4>
        <label for=""><b>The point A on the x-axis:</b></label>
        <input type="number" name="firstpoint"> <br>

        <label for=""><b>The point B on the x-axis:</b></label>
        <input type="number" name="secondpoint"> <br>

        <label for=""><b>The point C on the x-axis:</b></label>
        <input type="number" name="thirdpoint"> <br>

        <input type="submit" name="s1" value="SEND">
        </form>
</body>
</html>