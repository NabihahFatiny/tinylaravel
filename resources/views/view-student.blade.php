<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">

        <h2 class="mb-4">Student Details</h2>

                <p><strong>Student ID :</strong> {{ $student->student_id }}</p>
                <p><strong>Name :</strong> {{ $student->name }}</p>
                <p><strong>Course :</strong> {{ $student->course }}</p>
                <p><strong>Faculty :</strong> {{ $student->faculty }}</p>
                <p><strong>Email :</strong> {{ $student->email }}</p>
                <p><strong>Phone :</strong> {{ $student->phone }}</p>
                <p><strong>Address :</strong> {{ $student->address }}</p>

        <a href="/" class="btn btn-secondary mt-3">Back</a>

    </div>
</div>

</body>
</html>
