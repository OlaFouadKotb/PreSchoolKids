<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Teacher</title>
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
      <a class="navbar-brand" href="{{ route('teachers') }}">Teachers</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('teachers') }}">Home</a></li>
      <li class="active"><a href="#">Add Teacher</a></li>
      <li><a href="{{ route('addCoursee') }}">Add Course</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Add New Teacher</h2>
  <form method="POST" action="{{ route('insertTeacher') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="fullName">Full Name:</label>
      <input type="text" class="form-control" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <input type="text" class="form-control" id="facebook" name="facebook">
    </div>
    <div class="form-group">
      <label for="twitter">Twitter:</label>
      <input type="text" class="form-control" id="twitter" name="twitter">
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="instagram" name="instagram">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
