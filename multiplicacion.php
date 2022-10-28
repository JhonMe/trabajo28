<?php
echo"multiplicar";
echo "<br>";
echo "<br>";

echo "1, 2, 3, 4, 5";
echo"<br>";
echo"2,  4, 6, 8, 10";
echo"<br>";
echo"3, 6,  9, 12, 15";
echo"<br>";
echo"4, 8, 12, 16, 20";
echo"<br>";
echo"5, 10, 15, 20, 25";
echo"<br>";

?>

<table>
  <thead>
    <tr>
    <?php echo"Multiplicacion 2";
    echo"<br>";
     for ($column = 0; $column <= 10 ; $column++) { ?>
	<th><?php echo $column; ?></th>
    <?php } ?>
    </tr>
  </thead>
  <tbody>
  <?php for ($row = 1; $row <= 10 ; $row++) { ?>
    <tr>
    <?php
    for ($column = 0; $column <= 10 ; $column++) {
      $result = $column;

      if ($column === 0) {
        $result = $row;
      }

      if ($column >= 1) {
        $result = $row * $column;
      }
    ?>
    <td><?php echo $result; ?></td>
    <?php } ?>
    </tr>
  <?php } ?>
  </tbody>
</table>