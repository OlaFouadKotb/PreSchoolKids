<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Kid</title>
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
      <a class="navbar-brand" href="{{ route('kids') }}">Kids</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('kids') }}">Home</a></li>
      <li class="active"><a href="{{ route('addkid') }}">Add Kid</a></li>
      <li><a href="{{ route('trashkid') }}">Trash</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Add Kid</h2>
  <form action="{{ route('insertkid') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="birthday">Birthday:</label>
      <input type="date" class="form-control" id="birthday" name="birthday" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group">
      <label for="class_id">Courses:</label>
      <select multiple class="form-control" id="class_id" name="class_id[]" required>
        @foreach($coursees as $coursee)
          <option value="{{ $coursee->id }}">{{ $coursee->course_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="guardian_id">Guardian:</label>
      <select class="form-control" id="guardian_id" name="guardian_id" required>
        @foreach($guardians as $guardian)
          <option value="{{ $guardian->id }}">{{ $guardian->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="active">Active:</label>
      <select class="form-control" id="active" name="active" required>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
