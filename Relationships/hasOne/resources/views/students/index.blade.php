<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>

    <h1>Students & Profiles</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <div>
        <a href="{{ route('students.create') }}">+ Add Student</a>
    </div>

    @if($students->isEmpty())
        <p>No students found.</p>
    @else
        @foreach($students as $student)
            <div>
                <p>Name: {{ $student->name }}</p>
                <p>Username: {{ $student->profile->username ?? 'no-username' }}</p>
                <p>Bio: {{ $student->profile->bio ?? 'N/A' }}</p>

                <a href="{{ route('students.show', $student->id) }}">Show</a>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this student?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
            <hr>
        @endforeach
    @endif

</body>
</html>
