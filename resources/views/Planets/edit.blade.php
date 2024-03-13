<h1>Edit Planet</h1>
<form method="post" action="{{route('planets.update', ['planets' => $planets])}}">
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    @csrf
    @method('put')
    <div>
        <label for="">Firstname: </label>
        <input type="text" name="firstname" placeholder="firstname" value="{{$planets->firstname}}">
    </div>
    <div>
        <label for="">Lastname: </label>
        <input type="text" name="lastname" placeholder="lastname" value="{{$planets->lastname}}">
    </div>
    <div>
        <label for="">Age: </label>
        <input type="text" name="age" placeholder="age" value="{{$planets->age}}">
    </div>
    <div>
        <label for="">Adress: </label>
        <input type="text" name="address" placeholder="address" value="{{$planets->address}}">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>