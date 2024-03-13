<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Update</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="">Desciption</label>
            <input type="text" name="description" placeholder="Desciption" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>