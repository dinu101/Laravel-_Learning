<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <h3>Student Details</h3>
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <h3>Profile Details</h3>
        <label>Address:</label>
        <input type="text" name="address"><br><br>

        <label>Phone:</label>
        <input type="text" name="phone"><br><br>

        <label>Age:</label>
        <input type="number" name="age" min="1"><br><br>

        <button type="submit">Create Student</button>
    </form>
</body>
</html>
