<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Coursee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('coursees') }}">Courses</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('coursees') }}">Home</a></li>
      <li class="active"><a href="{{ route('addCoursee') }}">Add Course</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Add Course</h2>
  <form action="{{ route('insertCoursee') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="course_name">Course Name:</label>
      <input type="text" class="form-control" id="course_name" name="course_name" required>
    </div>
    <div class="form-group">
      <label for="course_name">Teacher Name:</label>
      <input type="text" class="form-control" id="TeacherName" name="TeacherName" required>
    </div>
    <!-- <div class="form-group">
      <label for="teacher_id">Teacher:</label>
      <select class="form-control" id="teacher_id" name="teacher_id" required>
        @foreach($teachers as $teacher)
          <option value="{{ $teacher->id }}">{{ $teacher->fullName }}</option>
        @endforeach
      </select>
    </div> -->
    <!-- <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div> -->
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" name="time" required>
    </div>
    <div class="form-group">
      <label for="capacity">Capacity:</label>
      <input type="number" class="form-control" id="capacity" name="capacity" required>
    </div>
    <div class="form-group">
      <label for="TeacherImage">Teacher Image:</label>
      <input type="file" class="form-control" id="TeacherImage" name="TeacherImage">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
