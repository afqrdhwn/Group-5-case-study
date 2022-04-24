<!DOCTYPE html>
<html >
<head>
    <title> Dr Brownies </title>
	<?php include('./header.php') ?>
</head>

<body>

<!-- Afiq (1917837) -->

<section id="topnav">
<?php include('./topnav.php') ?>
</section>

<div class="container">
        <div id="tabs">

            <ul>
		<?php  echo "<li style= 'float:left;'><a href=\"index.php\"><i class='material-icons'>keyboard_backspace</i></a></li>"; ?>
            </ul>


<div class="menu">
<div class="heading">
    <?php
echo "<h1>Combo Box</h1>";
?>
</div>

<div>
<div class="food-items">
    <?php
echo "<img class=\"item-image\" src=\"images/combo_4season.jpg\" width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
<div class="details-sub">
<?php
echo "<h5 class=\"item-title\">4 Season Box</h5>";
echo "<h4>Batek indulgence, cheese marble, walnut & choc chip brownies (9 pcs each)</h4>";
echo "<h5 class=\"item-price\">RM 45</h5>";
?>
</div>
</div>
</div>
</div>

<div>
<div class="food-items">
    <?php
echo "<img class=\"item-image\"  src=\"images/combo_4benua.jpg\"width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
<div class="details-sub">
<?php
echo "<h5 class=\"item-title\">4 Benua Box</h5>";
echo "<h4>Batek original, cheese berries, almond & plain brownies (9 pcs each)</h4>";
echo "<h5 class=\"item-price\">RM 45</h5>";
?>
</div>
</div>
</div>
</div>

<div>
<div class="food-items">
<?php
echo "<img class=\"item-image\" src=\"images/combo_4dara.jpg\" width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>

<div class="details">
    <div class="details-sub">
        <?php
echo "<h5 class='item-title' > 4 Dara Box</h5>";
echo "<h4>Plain,almond, walnut & choc chips brownies (9 pcs each)</h4>";
echo "<h5><strike style='color:red;'>RM 39</strike><br><b class=\"item-price\">RM 35</b></h5>";
?>
</div>
</div>
</div>
</div>

<div>
<div class="food-items">
<?php
echo "<img class=\"item-image\" src=\"images/combo_4premium.jpeg\" width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
<div class="details-sub">
<?php
echo "<h5 class=\"item-title\">4 Premium Box</h5>";
echo "<h4>Batek indulgence,Batek original,Cheese berries & any brownies (9 pcs each)</h4>";
echo "<h5><strike style= 'color:red;'>RM 49</strike><br><b class=\"item-price\">RM 45</b></h5>";
?>
</div>
</div>
</div>
</div>

<div>
<div class="food-items">
<?php
echo "<img class=\"item-image\" src=\"images/combo_sweetbox.jpg\" width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
<div class="details-sub">
<?php
echo "<h5 class='item-title'>Sweet Box</h5>";
echo "<h4>Batek indulgence,Batek original,Cheese berries & any brownies (9 pcs each)</h4>";
echo "<h5 class=\"item-price\">RM 45</h5>";
?>
</div>
</div>
</div>
</div>
</div>


<div id="tab3">
<div class="menu">
<div class="heading">
<?php
echo "<h1>Cookies </h1>";
?>
</div>
<div>
<div class="food-items">
<?php
echo "<img class=\"item-image\" src=\"images/cookies_richchoc.jpg\"width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
<div class="details-sub">
<?php
echo "<h5 class='item-title' >Rich Choc Cookies (105g)</h5>";
echo "<h4>Choc Chip cookies rich with Beryl's choc chunk</h4>";
echo "<h5 class=\"item-price\">RM10</h5>";
?>
</div>
</div>
</div>
</div>

<div>
<div class="food-items">
<?php
echo "<img class=\"item-image\" src=\"images/cookies_richmond.jpg\"width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
    <div class="details-sub">
<?php
echo "<h5 class='item-title' >Rich Mond Cookies (100g)</h5>";
echo "<h4>Choc Chip cookies rich with Almond & Beryl's choc chunk </h4>";
echo "<h5 class=\"item-price\">RM10</h5>";
?>
</div>
</div>
</div>
</div>

<div>
<div class="food-items">
    <?php
echo "<img class=\"item-image\" src=\"images/cookies_nuttycrunchy.jpg\" width='200' height='200'>";
echo "<button class=\"cart-button\" type=\"button\" onclick=\"window.location.href = '#cart';\">Add to cart</button><br><br>";
?>
<div class="details">
<div class="details-sub">
<?php
echo "<h5 class='item-title' >Nutty Crunchy (100g)</h5>";
echo "<h4>Florentine cookies are rich in almond, peanut, flaked sunflower, pumpkin seed and black sesame.  </h4>";
echo "<h5 class=\"item-price\">RM10</h5>";
?>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

<section id="cart">		
<?php include('./cart.php') ?>
</section>

<section id="footer">
<?php include('./footer.php') ?>
</section>
	
</body>
</html>
