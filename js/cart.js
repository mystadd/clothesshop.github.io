var cart = {};

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
		$('.main-cart').html('<p class="cart-msg">Корзина пуста<br><br><a href="index.php">Вернуться в магазин</a></p>');
		showCart();
		showMiniCart();
	}
	else {
		$('.main-cart').html('<p class="cart-msg">Корзина пуста<br><br><a href="index.php">Вернуться в магазин</a></p>');
	}
}

function showCart() {
	if (!isEmpty(cart)) {
    	$('.main-cart').html('<p class="cart-msg">Корзина пуста<br><br><a href="index.php">Вернуться в магазин</a></p>');
    }
    else { 
		$.getJSON('goods.json', function(data) {
			var goods = data;
			var sum = 0;
			var out = '';
			out += '<table class = "cart-table">';
			for (var id in cart) {
				out += '<tr>';
				out += `<td><img src = "images\\goods\\${goods[id].img}"></td>`;
				out += `<td class ="td_1"><b class="name">${goods[id].name}</b>`;
				out += `<p class="view">${goods[id].view}</p><br>`;
				out += `<div class="cost">${goods[id].cost+" руб."}</div>`;
				out += `<div class="kol-buttons"><button data-id="${id}" class="minus-goods">–</button>`;
				out += `<span class="kol">${cart[id]}</span>`;
				out += `<button data-id="${id}" class="plus-goods">+</button></div></td>`;
				out += `<td class ="td_2"><div class="item-amount">${cart[id] * goods[id].cost + " руб."}</div></td>`
				out += `<td class ="td_3"><span data-id="${id}" class="del-goods"></span></td>`;
				out += '</tr>';
				sum += cart[id]*goods[id].cost;
			}
			out += '</table>';
			out += `<div class = "email-field">
						<h2 class="order-details">Детали заказа</h2>
						<p style="border-bottom: 1px solid black; margin-right: 20px; padding-bottom: 20px;">Итого:
						<b style="float: right; font-size: 22px;">${sum + " руб."}</b></p>
						<p>ФИО: <input type="text" id="ename"></p>
						<p>Email: <input type="text" id="email"></p>
						<p>Телефон: <input type="text" id="ephone"></p>
						<p><button class="send-email">Оформить заказ</button></p>
					</div>`;
			$('.main-cart').html(out);
			$('.del-goods').on('click', delGoods);
			$('.plus-goods').on('click', plusGoods);
			$('.minus-goods').on('click', minusGoods);
			$('.send-email').on('click', sendEmail);
		});
	}
}

function delGoods() {
	var id = $(this).attr('data-id');
	delete cart[id];
	saveCart();
	showCart();
	showMiniCart();
}

function plusGoods() {
	var id = $(this).attr('data-id');
	cart[id]++;
	saveCart();
	showCart();
	showMiniCart();
}

function minusGoods() {
	var id = $(this).attr('data-id');
	if (cart[id] == 1) {
		cart[id] = 1;
	}
	else {
		cart[id]--;
	}
	saveCart();
	showCart();
	showMiniCart();
}

function saveCart() {
	localStorage.setItem('cart', JSON.stringify(cart));
}

function isEmpty(object) {
	for (var key in object)
	if (object.hasOwnProperty(key)) return true;
	return false;
}

function sendEmail() {
	var ename = $('#ename').val();
	var email = $('#email').val();
	var ephone = $('#ephone').val();
	if (ename!='' && email!='' && ephone!='') {
		if (isEmpty(cart)) {
			$.post(
				"core/mail.php",
				{
					"ename" : ename,
					"email" : email,
					"ephone" : ephone,
					"cart" : cart
				},
				function(data) {
					if (data==1) {
						alert('Благодарим за заказ!');
					}
					else {
						alert('Заказ не отправлен. Повторите попытку.');
					}
				}
			);
		}
		else {
			alert('Корзина пуста!');
		}
	}
	else {
		alert('Заполните поля!');
	}
}

$(document).ready(function() {
	loadCart();
});