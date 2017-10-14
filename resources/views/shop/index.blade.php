<head>
  <meta charset="utf-8">
  <title>Furbook</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('js/jquery-3.2.1.min.js') }}"> -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</head>
<nav>
  <div class="container">
    <ul class="navbar-left">
      <li><a href="#">Home</a></li>
      <li><a href="#about">About</a></li>
    </ul> <!--end navbar-left -->

    <ul class="navbar-right">
      <li><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge" id="count">{{\Cart::count()}}</span></a></li>
    </ul> <!--end navbar-right -->
  </div> <!--end container -->
</nav>


<div class="container">
  <div class="shopping-cart" style="display:none;">
    <div class="shopping-cart-header">
      <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">{{\Cart::count()}}</span>
      <div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text">${{\Cart::total()}}</span>
        <a href="/carts/destroy">Clear</a>
        <a href="/checkout">Checkout</a>
      </div>
    </div> <!--end shopping-cart-header -->
    <div>
        <ul class="shopping-cart-items" id="show-cart">
            <div id="cart-list">

            </div>
        </ul>
    </div>
    <a href="#" class="button">Checkout</a>
  </div> <!--end shopping-cart -->
  <div class="contains">
      @foreach ($products as $product)
      <p>
        <strong>{{$product->name}}</strong>
        <h3>{{$product->cost}}</h3>
        <button type="button" name="button" onclick="addCart({{$product->id}})">Add Cart</button>
        <hr>
      </p>
      @endforeach
  </div>
</div> <!--end container -->

<script type="text/javascript">

    (function(){

        $("#cart").on("click", function() {

            var root = '{{url('/')}}';
            var str = "";
            $.get(root + '/loadCarts', function(data, status){

                $.each(data.data, function (key, value) {

                    console.log(data);
                    str += '<li class="clearfix"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" /><span class="item-name">' + value.name +'</span><span class="item-price"></span> ' + value.price +  '<span class="item-quantity">'+ value.qty +'</span><span class="item-quantity">Total: ' + value.subtotal + ' </span></li>';
                });


            }).then(function(){
                console.log(str);
                $('#cart-list').replaceWith(str);
                $(".shopping-cart").fadeToggle( "fast");
            });
        });

    })();

    function addCart(id)
    {
        var root = '{{url('/carts')}}';
        $.get(root + '/' + id + '/' + 'add', function(data, status){

          $('#count').replaceWith('<span class="badge" id="count">' + data.count +'</span>');
        });
    }

</script>

<style>
$main-color: #6394F8;
$light-text: #ABB0BE;

@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

*, *:before, *:after {
box-sizing: border-box;
}

body {
font: 14px/22px "Lato", Arial, sans-serif;
background: #6394F8;
}

.lighter-text {
color: #ABB0BE;
}

.main-color-text {
color: $main-color;
}

nav {
padding: 20px 0 40px 0;
background: #F8F8F8;
font-size: 16px;

.navbar-left {
float: left;
}

.navbar-right {
float: right;
}
ul {

li {
  display: inline;
  padding-left: 20px;
  a {
    color: #777777;
    text-decoration: none;

    &:hover {
      color: black;
    }
  }
}
}
}

.container {
margin: auto;
width: 80%;
}

.badge {
background-color: #6394F8;
border-radius: 10px;
color: white;
display: inline-block;
font-size: 12px;
line-height: 1;
padding: 3px 7px;
text-align: center;
vertical-align: middle;
white-space: nowrap;
}

.shopping-cart {
margin: 20px 0;
float: right;
background: white;
width: 320px;
position: relative;
border-radius: 3px;
padding: 20px;


.shopping-cart-header {
border-bottom: 1px solid #E8E8E8;
padding-bottom: 15px;

.shopping-cart-total {
  float: right;
}
}

.shopping-cart-items {

padding-top: 20px;

  li {
    margin-bottom: 18px;
  }

img {
  float: left;
  margin-right: 12px;
}

.item-name {
  display: block;
  padding-top: 10px;
  font-size: 16px;
}

.item-price {
  color: $main-color;
  margin-right: 8px;
}

.item-quantity {
  color: $light-text;
}
}

}

.shopping-cart:after {
bottom: 100%;
left: 89%;
border: solid transparent;
content: " ";
height: 0;
width: 0;
position: absolute;
pointer-events: none;
border-bottom-color: white;
border-width: 8px;
margin-left: -8px;
}

.cart-icon {
color: #515783;
font-size: 24px;
margin-right: 7px;
float: left;
}

.button {
background: $main-color;
color:white;
text-align: center;
padding: 12px;
text-decoration: none;
display: block;
border-radius: 3px;
font-size: 16px;
margin: 25px 0 15px 0;

&:hover {
background: lighten($main-color, 3%);
}
}

.clearfix:after {
content: "";
display: table;
clear: both;
}
</style>
