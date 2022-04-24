//Alfikra Muhammad (1836031)

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {

    var cartButton = document.getElementsByClassName('cart-button')
    for (var i = 0; i < cartButton.length; i++) {
        var button = cartButton[i]
        button.addEventListener('click', addItem)
    }
	
    var quantity = document.getElementsByClassName('quantity-input')
    for (var i = 0; i < quantity.length; i++) {
        var j = quantity[i]
        j.addEventListener('change', checkQuantity)
    }
	
	var removeButton = document.getElementsByClassName('cancel-button')
    for (var i = 0; i < removeButton.length; i++) {
        var button = removeButton[i]
        button.addEventListener('click', removeItem)
    }
	
    document.getElementsByClassName('order-button')[0].addEventListener('click', orderItem)
}



function orderItem() {
    var item = document.getElementsByClassName('cart-item')[0]
    while (item.hasChildNodes()) {
        item.removeChild(item.firstChild)
    }

    updateCart()
}

function checkQuantity(event) {
    var i = event.target
    if (isNaN(i.value) || i.value <= 0) {
        i.value = 1
    }
    updateCart()
	
}

function checkCart() {
	var subtotal = document.getElementsByClassName('subtotal-price')[0]
	var x = document.getElementById("cart-empty");
	if (subtotal = 0 ) {
    x.style.display = "inline-block";
	} else {
    x.style.display = "none";
	}
	
}

function removeItem(event) {
    var i = event.target
    i.parentElement.parentElement.remove()
	updateCart()
}


function addItem(event) {
    var button = event.target
    var item = button.parentElement.parentElement
    var title = item.getElementsByClassName('item-title')[0].innerText
    var price = item.getElementsByClassName('item-price')[0].innerText
    var imageSrc = item.getElementsByClassName('item-image')[0].src
    addtocart(title, price, imageSrc)
	alert('Item has been added to your cart')
    updateCart()
}

function addtocart(title, price, imageSrc) {
    var cart = document.createElement('div')
    cart.classList.add('cart-row')
    var item = document.getElementsByClassName('cart-item')[0]
    var itemName = item.getElementsByClassName('item-name')
    for (var i = 0; i < itemName.length; i++) {
        if (itemName[i].innerText == title) {
            return
        }
    }

    var cartContent = 
	`
			<div class="cart-detail">
			<span class="cart-price">${price}</span>
			<?php echo number_format((float)$price, 2, '.', ''); ?>
            <input class="quantity-input" type="number" value="1">
            <button class="cancel-button" type="button">X</button>
			</div><div class="cart-item">
			<span class="item-name">${title}</span></div><br>
            <img class="cart-item-image" src="${imageSrc}" width="150" height="170"><br><br><hr><br><br><br>`
            
    cart.innerHTML = cartContent
    item.append(cart)
    cart.getElementsByClassName('cancel-button')[0].addEventListener('click', removeItem)
    cart.getElementsByClassName('quantity-input')[0].addEventListener('change', checkQuantity)
}

function updateCart() {
    var itemContainer = document.getElementsByClassName('cart-item')[0]
    var cartRow = itemContainer.getElementsByClassName('cart-row')
    var subtotal = 0
    for (var i = 0; i < cartRow.length; i++) {
        var cart = cartRow[i]
        var priceElement = cart.getElementsByClassName('cart-price')[0]
        var quantityElement = cart.getElementsByClassName('quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('RM', ''))
        var quantity = quantityElement.value
        subtotal = subtotal + (price * quantity)
    }
	
    subtotal = Math.round(subtotal * 100) / 100
	gst = 6/100 * subtotal
	gst = Math.round(gst * 100) / 100
	total = subtotal + gst
    document.getElementsByClassName('subtotal-price')[0].innerText = 'RM ' + subtotal
	document.getElementsByClassName('gst-price')[0].innerText = 'RM ' + gst
	document.getElementsByClassName('total-price')[0].innerText = 'RM ' + total 
	checkCart()
}

function checkout(event){
    alert("Your order has been submitted. Thank you");
	window.location.href = "index.php";
}


