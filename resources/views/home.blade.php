<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light m-0">

    <div class="container-fluid px-2 py-2">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-3">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fw-bold text-primary mb-0">Students List</h1>
                    <a href="/add-student" class="btn btn-primary">+ Add Student</a>
                </div>

                <form action="/students-page" method="GET" class="mb-4">
                    <input type="text" name="search" placeholder="Search student"
                        value="{{ request('search') }}" class="form-control mb-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center mb-0 w-100">
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

                                    <td class="text-nowrap">
    <a href="/student/{{ $student->id }}" class="btn btn-info btn-sm me-1">View</a>
    <a href="/edit-student/{{ $student->id }}" class="btn btn-warning btn-sm me-1">Edit</a>
    <a href="/delete-student/{{ $student->id }}"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Are you sure?')">Delete</a>
</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $students->links() }}
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
