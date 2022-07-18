<?php
if (isset($_POST['txtcalor'])) {
    $calor = ($_POST['txtcalor']);
};
if (isset($_POST['txttrab'])) {
    $trab = ($_POST['txttrab']);
};
if (isset($_POST['txtmols'])) {
    $mols = ($_POST['txtmols']);
};
if (isset($_POST['txttemp'])) {
    $temp = ($_POST['txttemp']);
};
?>
<form action="./ativ.php" method="post">
<div class="container">
<ul class="cadastro">
    <li>
    <label for="txtcalor">Q(calor):</label>
<input type="text" name="txtcalor" id="txtcalor">
    </li>
    <li>
    <label for="txttrab">W(trabalho):</label>
<input type="text" name="txttrab" id="txttrab">
    </li>
    <li>
    <label for="txtmols">N(número de mols):</label>
<input type="text" name="txtmols" id="txtmols">
    </li>
    <li>
    <label for="txttemp">W(temperatura):</label>
<input type="text" name="txttemp" id="txtemp">
    </li>
</ul>
    <input type="submit" value="Enviar">
</div>
<?php
$q = $_POST['txtcalor'];
$w = $_POST['txttrab'];
$result = $q - $w;
?>
<?php
$r = 8.31;
$t = $_POST['txttemp'];
$n = $_POST['txtmols'];
$delta = (3/2 * $n * $r * $t);
?>
<?php
echo 'A variação de temperatura é igual a ';
if ($q >0) {
    echo $result;
    echo ' (Q - W)';
} else {
    echo $delta;
    echo ' (3/2 . n . R . T)';
}
?>
