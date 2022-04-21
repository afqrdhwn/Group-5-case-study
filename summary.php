

<table class ="summary" align="right">

  <div class="cart-subtotal">
  
    <thead >
        <tr >
            <?php echo "<th colspan='3'>Order Summary<br><hr></th>"; ?>
        </tr>
    </thead>
    <tbody>
	<?php echo "<tr>
    <td>Subtotal</td>
	<td></td>
	<td class='subtotal-price' align='right'>RM 0.00</td>
	</tr>";  ?>
	
	<tr>
	<!-- tax -->
    <?php echo "<td>6% GST</td>
	<td></td>
	<td class='gst-price' align='right'>RM 0.00</td>"; ?>
	</tr>
	
	<tr>
	<?php echo "<td colspan='3'><hr></td>"; ?>
	</tr>

	<tr>
    <?php echo "<td>Total</td>
	<td></td>
	<td class='total-price' align='right'>RM 0.00</td>"; ?>
	</tr>
	
	 </div>

	<tr>
     <?php echo "<td colspan='3'><br><button class='checkout-button' onclick= 'return checkout();'>Checkout</button><br><br></td>"; ?>
	</tr>
	
	</tbody>
	</table>
	
<table class ="cart">
    <thead>
        <tr >
        <?php echo "<th colspan='5'>My Shopping Cart<br><hr></th>"; ?>
        </tr>
    </thead>
    <tbody>
	<tr>
		<!-- cart content -->
		<td class="cart-row" ></td>
		<td class="cart-item"></td>
	</tr>
</tbody>
</table>

<script>
    function checkout(event){
        alert("Your order has been submitted. Thank you");
	window.location.href = "index.php";
    }
</script>
