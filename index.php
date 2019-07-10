<!-- php7 -->
<?php
require_once 'vendor/autoload.php';
use models\{Mysqli};
$gtd= new Mysqli ('localhost' , 'root', '', 'random');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- conexiones -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome -->
    

    <!-- Como conseguir los número aleatorios con una función para PHP. -->
<?php
$rand = range(1, 13);
?>
<!-- Simplemente con el siguiente código consigues escribir o introducir en un array, lo que necesites, un conjunto de números aleatorios que no se van a repetir: -->

<?php
$rand = range(1, 13);
shuffle($rand);
foreach ($rand as $val) {
echo $val . '<br/>';
}

?>
</head>
<body>
hola
</body>
</html>