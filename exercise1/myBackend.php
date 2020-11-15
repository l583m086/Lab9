<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table border=\"1\" style='border-collapse: collapse'>";
for ($i = 0; $i <= 100; $i++)
{
  echo "<tr> \n";
  for ($j = 0; $j <= 100; $j++)
  {
    if($i == 0 && $j == 0)
    {
      echo "<td><b>x</b></td>";
    }
    else if($i != 0 && $j == 0)
    {
      echo "<td><b>$i</b></td>";
    }
    else if($i == 0 && $j != 0)
    {
      echo "<td><b>$j</b></td>";
    }
    else
    {
      $k = $i * $j;
      echo "<td>$k</td> \n";
    }
  }
  echo "</tr>";
}
echo "</table>"
?>
