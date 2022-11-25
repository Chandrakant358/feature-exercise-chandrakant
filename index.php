<?php
require('products.php');
require_once('getprice.php');
error_reporting(0);
$final_price = 0;
?>
</br>
<h3>Final price calculation of items</h3>
<table cellpadding="1" cellspacing="1" style="border:1px solid #000;text-align:center;">
<tr>
<th>Item</th>
<th>Unit Price</th>
<th>Total Price</th>
</tr>
<?php foreach($itemsDetail as $key =>$value){ ?>
<tr>
<td><?php echo $key; ?></td>
<td><?php echo $value['unit_price']; ?></td>
<td><?php 
echo $total_price = get_price($key,$value['unit_price'],$value['quantity']); // function called here
$final_price += $total_price;
 ?></td>
</tr>
<?php } ?>

<tr><td colspan="2"> <b>Final Price :</b></td> <td><b> Rs.<?php echo round($final_price,2); ?></b></td></tr>
</table>
</body>
</html>


