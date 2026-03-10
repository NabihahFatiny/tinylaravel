<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">

<div class="card shadow-lg border-0 rounded-4">
<div class="card-body p-4">

<h1 class="fw-bold text-warning mb-4">Edit Student</h1>

<form action="/edit-student/{{ $student->id }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Student ID</label>
<input type="text" name="student_id" class="form-control"
value="{{ $student->student_id }}" required>
</div>

<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" name="name" class="form-control"
value="{{ $student->name }}" required>
</div>

<div class="mb-3">
<label class="form-label">Course</label>

<select name="course" class="form-select" required>

<option value="">-- Select Course --</option>

<option value="Diploma in Computer Science"
{{ $student->course == 'Diploma in Computer Science' ? 'selected' : '' }}>
Diploma in Computer Science
</option>

<option value="Bachelor of Computer Science (Software Engineering) with Honours"
{{ $student->course == 'Bachelor of Computer Science (Software Engineering) with Honours' ? 'selected' : '' }}>
Bachelor of Computer Science (Software Engineering) with Honours
</option>

<option value="Dual Degree Program – Bachelor of Computer Science (Software Engineering) with Honours"
{{ $student->course == 'Dual Degree Program – Bachelor of Computer Science (Software Engineering) with Honours' ? 'selected' : '' }}>
Dual Degree Program – Bachelor of Computer Science (Software Engineering) with Honours
</option>

<option value="Bachelor of Computer Science (Computer Systems & Networking) with Honours"
{{ $student->course == 'Bachelor of Computer Science (Computer Systems & Networking) with Honours' ? 'selected' : '' }}>
Bachelor of Computer Science (Computer Systems & Networking) with Honours
</option>

<option value="Bachelor of Computer Science (Multimedia Software) with Honours"
{{ $student->course == 'Bachelor of Computer Science (Multimedia Software) with Honours' ? 'selected' : '' }}>
Bachelor of Computer Science (Multimedia Software) with Honours
</option>

<option value="Bachelor of Computer Science (Cyber Security) with Honours"
{{ $student->course == 'Bachelor of Computer Science (Cyber Security) with Honours' ? 'selected' : '' }}>
Bachelor of Computer Science (Cyber Security) with Honours
</option>

</select>
</div>

<div class="mb-3">
<label class="form-label">Faculty</label>
<input type="text" name="faculty" class="form-control"
value="{{ $student->faculty }}">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control"
value="{{ $student->email }}">
</div>

<div class="mb-3">
<label class="form-label">Phone</label>
<input type="text" name="phone" class="form-control"
value="{{ $student->phone }}">
</div>

<div class="mb-3">
<label class="form-label">Address</label>
<textarea name="address" class="form-control" rows="3">{{ $student->address }}</textarea>
</div>

<button type="submit" class="btn btn-warning">Update</button>
<a href="/" class="btn btn-secondary">Back</a>

</form>

</div>
</div>

</div>
</div>
</div>

</body>
</html>
