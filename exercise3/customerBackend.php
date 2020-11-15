<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<link rel='stylesheet' type='text/css' href='style.css'>";

$email = $_POST["email"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$cod = $_POST["cod"];
$codSub = $cod * 60;
$ow = $_POST["ow"];
$owSub = $ow * 20;
$gta = $_POST["gta"];
$gtaSub = $gta * 30;
if($shipping == "Free 7 day")
{
  $shippingCost = 0;
}
else if($shipping == "$50 over night")
{
  $shippingCost = 50;
}
else if($shipping == "$5 three day")
{
  $shippingCost = 5;
}
$totalCost = $codSub + $owSub + $gtaSub + $shippingCost;

echo "<h1>Weclome, $email! You have created an account with the following password: $password<h1>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th></th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub Total</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td class='cod'>Call of Duty Black Ops Cold War</td>";
echo "<td>$cod</td>";
echo "<td>$60</td>";
echo "<td>$$codSub</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='ow'>Overwatch</td>";
echo "<td>$ow</td>";
echo "<td>$20</td>";
echo "<td>$$owSub</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='gta'>Grand Theft Auto V</td>";
echo "<td>$gta</td>";
echo "<td>$30</td>";
echo "<td>$$gtaSub</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='shipping'>Shipping</td>";
echo "<td colspan='2'>$shipping</td>";
echo "<td>$$shippingCost</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='total' colspan='3'>Total Cost</td>";
echo "<td class='totalCost'>$$totalCost</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
?>
