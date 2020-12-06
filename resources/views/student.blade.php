 <!doctype html>
 <html lang= "en" >
 <head>
 <!-- Required meta tags -->
 <meta charset= "utf-8" >
 <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no" >
 <!-- Bootstrap CSS --> 
 <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity= "sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin= "anonymous" > 
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <title> Student Management System </title>
 </head> 
 <body>
 @include("navbar")
 
 <div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>
 
 @if($layout == 'index')
		<div class="container-fluid mt-4">
			 <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
		</div>
	@elseif($layout == 'create')
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col-md-7">
					@include("studentslist")
				</section>
				<section class="col-md-5">
				<div class="card mb-3">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enter The Information to New Student</h5>
	
	<form action="{{ url('/store1') }}" method="post">
                            @csrf
							<div class="form-group">
								<label >cne</label>
								<input name="cne" type="text" class="form-control"  placeholder="Enter cne">
							</div>
							<div class="form-group">
								<label >First Name</label>
								<input name="firstName" type="text" class="form-control"  placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label >Second Name</label>
								<input name="secondName" type="text" class="form-control"  placeholder="Enter Second Name">
							</div>
							<div class="form-group">
								<label >Age</label>
								<input name="age" type="text" class="form-control"  placeholder="Enter Age">
							</div>
							<div class="form-group">
								<label >Speciality</label>
								<input name="speciality" type="text" class="form-control"  placeholder="Enter Speciality">
							</div>
							
							<input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
							<input name="_token" value="{{ csrf_token() }}" type="hidden">
							
						</form>
   
  </div>
</div>
				
						
						
				</section>
			</div>
		</div>
	@elseif($layout == 'show')
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col">
					@include("studentslist")
				</section>
				<section class="col"></section>
			</div>
		</div>
	@elseif($layout == 'edit')
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col-md-7">
					@include("studentslist")
				</section>
				<section class="col-md-5">
				<div class="card mb-3">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update the Data Of the Studnts</h5>
    
	<form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
							<div class="form-group">
								<label >cne</label>
								<input  value="{{$student->cne}}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
							</div>
							<div class="form-group">
								<label >First Name</label>
								<input value="{{$student->firstName}}" name="firstName" type="text" class="form-control"  placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label >Second Name</label>
								<input value="{{$student->secondName}}" name="secondName" type="text" class="form-control"  placeholder="Enter Second Name">
							</div>
							<div class="form-group">
								<label >Age</label>
								<input value="{{$student->age}}" name="age" type="text" class="form-control"  placeholder="Enter Age">
							</div>
							<div class="form-group">
								<label >Speciality</label>
								<input value="{{$student->speciality}}" name="speciality" type="text" class="form-control"  placeholder="Enter Speciality">
							</div>
							
							<input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
							<input name="_token" value="{{ csrf_token() }}" type="hidden">
							
					</form>
  </div>
</div>
					
					
					
				
				
				
				
				</section>
			</div>
		</div>
	
	@endif
 
 
 
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
 <script src= "https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity= "sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin= "anonymous" ></script> 
 <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity= "sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin= "anonymous" ></script> 
 <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity= "sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin= "anonymous" ></script> 
 </body> 
 </html> 