<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students List</title>
</head>
<body>
    <h1>Students List System</h1>
    <a href="/add-student">Add Student</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Course</th>
        </tr>

        @foreach($students as $index => $student)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->course }}</td>
    </tr>
@endforeach
    </table>
</body>
</html>
