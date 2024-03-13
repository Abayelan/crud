@vite(['resources/css/app.css', 'resources/css/createstyle.css' , 'resources/js/app.js'])
<div class="container">
    <div class="wrapper">
        <h1>Add Person</h1>
        <form method="post" action="{{ route('planets.storePlanet') }}">
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
                            <div for="">Firstname: </div>
                            <input type="text" name="firstname" placeholder="firstname">
                        </div>
                        <div class="input_field">
                            <div for="">Lastname: </div>
                            <input type="text" name="lastname" placeholder="lastname">
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="input_field">
                            <div for="">Age</div>
                            <input type="text" name="age" placeholder="age">
                        </div>
                        <div class="input_field">
                            <div for="">Address: </div>
                            <input type="text" name="address" placeholder="address">
                        </div>
                    </div>
                    </div>
                    <div class="btn">
                        <button type="submit" value="Save Product">Save Person</button>
                    </div>
            </div>
        </form>
    </div>
</div>