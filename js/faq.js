function showMiniCart() {
	var out="0";
	for (var key in cart) {
		out = Object.keys(cart).reduce((total, key) => total += cart[key], 0);
	}
	$('.mini-cart').html(out);
}

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(function () {
    loadCart();
});