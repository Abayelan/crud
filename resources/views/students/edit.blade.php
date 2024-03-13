<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<h2>Student Edit</h2>

<form method="post" action="{{ route('students.update', ['students' => $students]) }}">
    @csrf
    @method('put')
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="form-parent">
        <div class="form-wrapper">
            <div class="input-field">
                <div class="inputs">
                    <p>Firstname: </p>
                    <input type="text" placeholder="firstname" name="firstname"value="{{ $students->firstname }}">
                    <p>
                        @if ($errors->has('firstname'))
                            <span style="color: red"> {{ $errors->first('firstname') }} </span>      
                        @endif   
                    </p>  
                </div>
                <div class="inputs">
                    <p>Lastname: </p>
                    <input type="text" placeholder="lastname" name="lastname" value="{{ $students->lastname }}">
                </div>
                <div class="inputs">
                    <p>Date of Birth: </p>
                    <input type="date" placeholder="dd/mm/yyyy" name="date_of_birth" value="{{ $students->date_of_birth }}">
                </div>
                <div class="inputs">
                    <p>Gender: </p>
                    <select name="gender" value="{{ $students->gender }}">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="inputs">
                    <p>Email: </p>
                    <input type="email" placeholder="email" name="email" value="{{ $students->email }}">
                </div>
                <div class="inputs">
                    <p>Phonenumber: </p>
                    <input type="text" placeholder="" name="phonenumber" value="{{ $students->phonenumber }}">   
                    <p>
                        @error('phonenumber')
                            {{ $message }}
                        @enderror
                    </p>        
                </div>
                <div class="inputs">
                    <p>Address: </p>
                    <input type="text" placeholder="address" name="address" value="{{ $students->address }}">
                </div>
                <br>
                <div>
                    <button style="cursor: pointer;" type="submit">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>