<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fw-bold text-primary mb-0">Students List System</h1>
                    <a href="/add-student" class="btn btn-primary">+ Add Student</a>
                </div>


                <!-- tambah search bar untuk search nama student -->
                <form action="/" method="GET">
                    <input type="text" name="search" placeholder="Search student" value="{{ request('search') }}"  class="form-control mb-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $index => $student)
                            <tr>
                                <td>{{ $students->firstItem() + $index }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->course }}</td>
                                <td>
                                    <a href="/edit-student/{{ $student->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/delete-student/{{ $student->id }}"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center mt-4">
    {{ $students->links() }}
</div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
