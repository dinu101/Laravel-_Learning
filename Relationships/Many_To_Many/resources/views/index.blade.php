<!DOCTYPE html>
<html>
<head>
    <title>Students & Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Student & Course Dashboard</h2>
        <div class="row">
            @foreach($students as $student)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $student->email }}</h6>
                            
                            @if($student->courses->count())
                                <p class="card-text"><strong>Courses:</strong></p>
                                <ul class="list-group list-group-flush">
                                    @foreach($student->courses as $course)
                                        <li class="list-group-item">{{ $course->title }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">No courses enrolled.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
