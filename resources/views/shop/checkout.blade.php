<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Checkout</h2>
  <h3><a href="/shop">Return Shop</a></h3>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>số lượng</th>
        <th>đơn giá</th>
        <th>tổng giá</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
    @foreach (\Cart::content() as $row)
      <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->qty}}</td>
        <td>{{$row->price}}</td>
        <td>{{$row->total}}</td>
        <td><a href="/carts/{{$row->rowId}}/delete" class="btn btn-success">Xoá sản phẩm</a></td>
      </tr>
    @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td>Tong Hoa Don</td>
            <td><strong> ${{\Cart::total()}} </strong></td>
            <td></td>
        </tr>
    </tfoot>
  </table>
</div>

</body>
</html>
