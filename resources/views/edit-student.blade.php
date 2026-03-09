<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
<form action="/update-student/{{ $student->id }}" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br><br>

        <label>Course:</label>
        <input type="text" name="course" value="{{ $student->course }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/">Back to Student List</a>
</body>
</html>
