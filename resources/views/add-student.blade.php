<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <h1 class="fw-bold text-success mb-4">Add Student</h1>

                        <form action="/add-student" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <input type="text" name="course" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="/" class="btn btn-secondary">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
