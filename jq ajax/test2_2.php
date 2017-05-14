
<?php
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$city = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';
echo 'theWebName: ' . $name;
echo "\n";
echo 'URL Address: ' .$city;
?>
