<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teachers</title>
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
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Teachers</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{ route('addTeacher') }}">Add Teacher</a></li>
      <li><a href="{{ route('addCoursee') }}">Add Course</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Teachers List</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Teacher Name</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Course</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teachers as $teacher)
      <tr>
        <td>{{ $teacher->fullName }}</td>
        <td>{{ $teacher->phone }}</td>
        <td><img src="{{ $teacher->image ? asset('storage/' . $teacher->image) : 'https://via.placeholder.com/50x50?text=No+Image' }}" alt="Teacher Image" style="width: 50px; height: 50px;"></td>
        <td>{{ $teacher->coursee->course_name }}</td>
        <td>
          <a href="{{ route('edit_teacher', $teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
          <a href="{{ route('delete_teacher', $teacher->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teachers</title>
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
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Teachers</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{ route('add_teacher') }}">Add Teacher</a></li>
      <li><a href="{{ route('add_course') }}">Add Course</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Teachers List</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Teacher Name</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Course</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teachers as $teacher)
      <tr>
        <td>{{ $teacher->fullName }}</td>
        <td>{{ $teacher->phone }}</td>
        <td><img src="{{ $teacher->image ? asset('storage/' . $teacher->image) : 'https://via.placeholder.com/50x50?text=No+Image' }}" alt="Teacher Image" style="width: 50px; height: 50px;"></td>
        <td>{{ $teacher->coursee->course_name }}</td>
        <td>
          <a href="{{ route('edit_teacher', $teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
          <a href="{{ route('delete_teacher', $teacher->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
