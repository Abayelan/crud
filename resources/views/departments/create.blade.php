<h1>Department Page</h1>
<p>
    @if(session()->has('success'))
        {{session('success')}}
    @endif
</p>
<form method="post" action="{{ route('departments.store')}}">
    @csrf
    @method('post')
    <div>
        <label>Department Name :</label>
        <select name="department_name" required>
            <option value="Diploma Information Technology">DIT - Diploma Information Technology</option>
            <option value="Bachelor of Science in Information System">BSIS - Bachelor of Science in Information System</option>
        </select>
    </div>
    <div>
        <label>Department Head</label>
        <input type="text" name="department_head" required>
    </div>
    <button type="submit">Submit</button>
</form>