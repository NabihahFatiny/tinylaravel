<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    <form action="/add-student" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Course:</label>
        <input type="text" name="course" required><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="/">Back to Student List</a>
</body>
</html>
