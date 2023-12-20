<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Files -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/logins/login-2/assets/css/login-2.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">User Registration System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex" role="">
        <a href="{{route('home')}}">Home</a>
      </form>
    </div>
  </div>
</nav>
<!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
        
      <div class="col-8 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
      <center><h3><b>User Registration</b></h3></center>
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h4>Create new user</h4>
              </div>
            </div>
          </div>
          <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
              <div class="col-12">
                <label for="phone" class="form-label">Phone </label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number"  required>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Address </label>
                <textarea  class="form-control" name="address"  placeholder="Enter address"  required></textarea>
              </div>
             
              <div class="col-12">
                <label for="dob" class="form-label">date of birth </label>
                <input type="date"  class="form-control" name="dob"    required>
              </div>
              <div class="col-12">
                <label for="photo" class="form-label">photo </label>
                <input type="file"  class="form-control" name="photo"    required>
              </div>
              
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">Create User</button>
                </div>
              </div>
          
            </div>
          </form>
      
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>