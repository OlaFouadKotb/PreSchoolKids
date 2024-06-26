<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kids</title>
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
      <a class="navbar-brand" href="{{ route('kids') }}">Kids</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('addkid') }}">Add</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('kids') }}">Kids</a></li>
          <li><a href="{{ route('trashkid') }}">Trash</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Kids Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Birthday</th>
        <th>Age</th>
        <th>Classes</th>
        <th>Guardian</th>
        <th>Active</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($kids as $kid)
      <tr>
        <td>{{ $kid->name }}</td>
        <td>{{ $kid->birthday }}</td>
        <td>{{ $kid->age }}</td>
        <td>{{ $kid->classes->pluck('name')->join(', ') }}</td>
        <td>{{ $kid->guardian->name }}</td>
        <td>{{ $kid->active ? 'Yes' : 'No' }}</td>
        <td><img src="{{ $kid->image ? asset('storage/' . $kid->image) : 'https://via.placeholder.com/50x50?text=No+Image' }}" alt="Kid Image" style="width: 50px; height: 50px;"></td>
        <td><a href="{{ route('editkid', $kid->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
        <td><a href="{{ route('showkid', $kid->id) }}" class="btn btn-info btn-sm">Show</a></td>
        <td>
          <form action="{{ route('delkid', $kid->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $kid->id }}">
            <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this kid?');">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
