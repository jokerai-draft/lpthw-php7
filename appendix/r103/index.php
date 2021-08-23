<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 1</title>
</head>
<body>
    <h4>Hi <?php echo $_GET['name'] ?? "my friend" ?></h4>
    <p><?php echo (new \DateTime())->format('Y-m-d H:i:s'); ?></p>
<?php
require_once "2.php";
echo $age . "<br>";
echo $age . "<br>";
$str = "This is some <b>bold</b> text. ";
echo $str;
echo htmlspecialchars($str);

?>
:)
</body>
</html>

<!--
http://localhost:8000/index.php
http://localhost:8000/index.php?name=tom
-->
