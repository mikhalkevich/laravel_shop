addEventListener('load', initiate);
const add_to_cart = document.querySelectorAll('.add_to_cart'); //data-id, data-price
const show_cart = document.querySelector('#show_cart');

function initiate(){
    add_to_cart.forEach(
        function(button) {
            button.addEventListener("click", add_cart_func,false);
        }
    );
    show_cart_func();
}
function show_cart_func(){
    let show_basket = getCookie('basket');
    let inner_text = 'Пусто';
    if(show_basket){
        inner_text = show_basket + '<a id="clear_cart" onclick="clear_cart_func()" href="#">&times</a>';
    }
    show_cart.innerHTML = inner_text;
}
function clear_cart_func(){
    show_cart.innerHTML = 'Пусто';
    eraseCookie('basket');
}
function add_cart_func(button){
    var id = button.target.getAttribute('data-id');
    var price = button.target.getAttribute('data-price');
    var check = false;
    console.log(id);
    //setCookie('test','test', 1);
    basket = getCookie('basket');
    if(!basket){
        basket = ',';
    }
    //
    basketArray = basket.split(",");
    for (var i = 0; i < basketArray.length - 1; i++) {
        goodsId = basketArray[i].split(":");
        if (goodsId[0] == id)	// ищем, не покупали ли мы этот товар ранее
        {
            check = true;
            break;
        }
    }
    if (!check) {
        basket += id+':'+price+',';
    } else {
        alert("Уже есть в корзине! Количество товаров можно будет изменить при оформлении заказа");
    }
    //
    setCookie('basket', basket, 1);
    console.log(basket);
    show_cart_func();
}
//helpers
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
