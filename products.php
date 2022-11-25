<?php
require('getprice.php');
// We have defined the Items of their UnitPrice and Quantity
$itemsDetail = array(
	'A'=> array('unit_price'=> 50,'quantity' =>10),
	'B'=> array('unit_price'=> 30,'quantity' =>5),
	'C'=> array('unit_price'=> 20,'quantity' =>11),
	'D'=> array('unit_price'=> 15,'quantity' =>10),
	'E'=> array('unit_price'=> 5,'quantity' =>3),
);
?>
<!DOCTYPE html>
<html>
<head>
<style> </style>
<link rel="stylesheet" href="style.css">
</head>
<title> Supermarket checkout </title>
<body>
<h3> Item information </h3>
<table cellpadding="1" cellspacing="1" style="border:1px solid #000;text-align:center;">
<tr>
<th>Item Name</th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Sepecial Price</th>
</tr>

<?php foreach($itemsDetail as $key => $value){  ?>
<tr>
<td><?php echo $key; ?></td>
<td><?php echo $value['unit_price']; ?></td>
<td><?php echo $value['quantity']; ?> </td>
<td> <?php if($key == 'A') { echo "3 for 130";}elseif($key == 'B'){ echo "2 for 45";}elseif($key == 'C'){ echo "2 for 38 AND 3 for 50";}elseif($key == 'D'){ echo "5 if purchased with an ‘A’"; }else { echo '';} ?> </td>
</tr>
<?php } ?>
</table>