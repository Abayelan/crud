<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    
    <h1>About</h1>

    <!-- @include('products.nav') -->

    @extends('products.nav')

    @foreach ($ideas as $idea)
        <div>
            <div>
                <p>content: {{ $idea->name }}</p>
                <p>qty: {{ $idea->qty }}</p>
                <p>price: {{ $idea->price }}</p>
                <p>created at: {{ $idea->description }}</p>
            </div>
            <hr> 
        </div>    
    @endforeach

</body>
</html>