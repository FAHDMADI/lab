<div class="card mb-3">
  <img src="https://assets.tvo.org/prod/s3fs-public/styles/full_width_1280/public/media-library/politics_schoolreopening.jpg?vrq4nGvULJassKmtKzPBv4f.dFSK1k8L" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of instrumnts</h5>
    <p class="card-text">You Can Find All Information About Instruments In The System</p>
    
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Equipment</th>
	  <th scope="col">Manufacturer</th>
      <th scope="col">SerialNumber</th>
      <th scope="col">ASTM</th>
      <th scope="col">Location</th>
	  <th scope="col">Vendor</th>
    <th scope="col">Contact</th>
    <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($instruments as $instrument)
    <tr>
      <td>{{$instrument->Equipment}}</td>
      <td>{{$instrument->Manufacturer}}</td>
      <td>{{$instrument->SerialNumber}}</td>
      <td>{{$instrument->ASTM}}</td>
      <td>{{$instrument->Location}}</td>
      <td>{{$instrument->Vendor}}</td>
      <td>{{$instrument->Contact}}</td>
     
	  <td>
		<a herf="#" class="btn btn-sm btn-info">Show</a>
		
		<a href="{{ url('/edit/'.$instrument->id) }}" class="btn btn-sm btn-warning">Edit</a>

		<a herf="#"class="btn btn-sm btn-danger">Delete</a>
    
	  
	  
	  </td>
    </tr>
	@endforeach
  </tbody>
</table>
	
  </div>
</div>








