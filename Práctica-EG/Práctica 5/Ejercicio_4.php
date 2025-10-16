<?php
session_start();
?>
<html>
<body>
<?php
if (!isset($_SESSION["contador"])){
 $_SESSION["contador"] = 1;
}else{
 $_SESSION["contador"]++;
}
echo "Recarga la página para incrementar el contador.<br>";
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>

</body>
</html>