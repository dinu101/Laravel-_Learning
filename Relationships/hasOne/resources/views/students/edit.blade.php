<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    {{-- Show validation errors --}}
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h3>Student Details</h3>

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $student->email) }}" required>
        <br><br>

        {{-- Optional: password update --}}
        <label>Password (leave blank to keep same):</label>
        <input type="password" name="password">
        <br><br>

        <h3>Profile Details</h3>

        <label>Username:</label>
        <input type="text" name="username" value="{{ old('username', $student->profile->username ?? '') }}">
        <br><br>

        <label>Bio:</label>
        <textarea name="bio">{{ old('bio', $student->profile->bio ?? '') }}</textarea>
        <br><br>

        <label>Avatar URL:</label>
        <input type="text" name="avatar" value="{{ old('avatar', $student->profile->avatar ?? '') }}">
        <br><br>

        <label>Website:</label>
        <input type="url" name="website" value="{{ old('website', $student->profile->website ?? '') }}">
        <br><br>

        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address', $student->profile->address ?? '') }}">
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone', $student->profile->phone ?? '') }}">
        <br><br>

        <label>Age:</label>
        <input type="number" name="age" min="1" value="{{ old('age', $student->profile->age ?? '') }}">
        <br><br>

        <button type="submit">Update</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>

</body>
</html>
