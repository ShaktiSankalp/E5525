<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h1>Your Shopping Cart</h1>

@if(count($cart) > 0)
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price ($)</th>
        </tr>
        @foreach($cart as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['price'] }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Total: ${{ $total }}</h3>
@else
    <p>Your cart is empty.</p>
@endif

<br>
<a href="{{ route('cart.add') }}">Add Product</a> |
<a href="{{ route('cart.clear') }}">Clear Cart</a>

</body>
</html>
