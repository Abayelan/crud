<h1>Planet Dashboard</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <div>
                <a href="{{route('planets.create')}}">Add Planet</a>
                <br>
                <a href="{{route('profile.dashboard')}}">Dashboard</a>
            </div>
            <table border="1" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
                @foreach($planets as $planet)
                    <tr @if( $loop->even) class="bg-info" @endif>
                        <td>{{$planet->id}}</td>
                        <td>{{$planet->firstname}}</td>
                        <td>{{$planet->lastname}}</td>
                        <td>{{$planet->age}}</td>
                        <td>{{$planet->address}}</td>
                        <td>
                            <a href="{{route('planets.edit', ['planets' => $planet])}}">edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('planets.destroy', ['planets' => $planet])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$planets->links()}}
        </div>
    </div>
</body>
</html>
