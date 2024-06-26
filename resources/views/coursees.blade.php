<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coursees</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    table {
      font-family: Arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('coursees') }}">Coursees</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('insertCoursee') }}">Add Coursee</a></li>
      <li><a href="{{ route('kids') }}">Kids</a></li>
      <li><a href="{{ route('trashkid') }}">Trash</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Coursees</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Teacher</th>
       <!-- <th>Title</th> -->
        <th>Price</th>
        <th>Age</th>
        <th>Time</th>
        <th>Capacity</th>
        <th>Teacher Image</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($coursees as $coursee)
      <tr>
        <td>{{ $coursee->course_name }}</td>
        <td>{{ $coursee->teacher->fullName }}</td> <!-- Assuming teacher relationship returns a Teacher object -->
        <!-- <td>{{ $coursee->title }}</td> -->
        <td>{{ $coursee->price }}</td>
        <td>{{ $coursee->age }}</td>
        <td>{{ $coursee->time }}</td>
        <td>{{ $coursee->capacity }}</td>
        <td><img src="{{ $coursee->TeacherImage ? asset('storage/' . $coursee->TeacherImage) : 'https://via.placeholder.com/50x50?text=No+Image' }}" alt="Teacher Image" style="width: 50px; height: 50px;"></td>
        <td><a href="{{ route('coursees.edit', $coursee->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
        <td><a href="{{ route('coursees.show', $coursee->id) }}" class="btn btn-info btn-sm">Show</a></td>
        <td>
          <form action="{{ route('coursees.destroy', $coursee->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $coursee->id }}">
            <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this coursee?');">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
