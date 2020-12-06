<div class="card mb-3">
  <img src="https://assets.tvo.org/prod/s3fs-public/styles/full_width_1280/public/media-library/politics_schoolreopening.jpg?vrq4nGvULJassKmtKzPBv4f.dFSK1k8L" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You Can Find All Information About Student  In The System</p>
    
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
	  <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
	  <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->secondName}}</td>
	  <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
	  <td>
		<a herf="#" class="btn btn-sm btn-info">Show</a>
		
		<a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

		<a herf="#"class="btn btn-sm btn-danger">Delete</a>
    
	  
	  
	  </td>
    </tr>
	@endforeach
  </tbody>
</table>
	
  </div>
</div>








