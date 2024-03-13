<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @vite(['resources/css/app.css', 'resources/css/createstyle.css' , 'resources/js/app.js'])
    <div class="container">
        <div class="wrapper">
            <h1>Add a Product</h1>
            <form method="post" action="{{ route('product.store') }}">
                <div>
                    <a href="{{route('profile.dashboard')}}">Return</a>
                </div>
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
                @method('post')
                <div class="input_w_btn_wrapper">
                    <div class="input_wrapper">
                        <div class="inputs">
                            <div class="input_field">
                                <div for="">Name</div>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="input_field">
                                <div for="">Qty</div>
                                <input type="text" name="qty" placeholder="Qty">
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="input_field">
                                <div for="">Price</div>
                                <input type="text" name="price" placeholder="Price">
                            </div>
                            <div class="input_field">
                                <div for="">Desciption</div>
                                <input type="text" name="description" placeholder="Desciption">
                            </div>
                        </div>
                        </div>
                        <div class="btn">
                            <button type="submit" value="Save Product">Save Product</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>