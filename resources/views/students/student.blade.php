<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @vite([
        'resources/css/tablestyle.css'
    ])
    <h1>Students</h1>
    <div>
        {{-- Success Message --}}
        @include('students.message')

    </div>
    <a href="{{ route('students.create') }}">Add Students</a>
    <table border="1" cellspacing="0">
        <tr>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Birth Date</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Phonenumber</td>
            <td>Address</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phonenumber }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a class="btn btn-dark" href="{{ route('students.edit', ['students' => $student]) }}">edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('students.destroy', ['students' => $student]) }}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        {{$students->links()}}
    </div>
</body>


<h1>adajksdakjdadadskj</h1>


</html>