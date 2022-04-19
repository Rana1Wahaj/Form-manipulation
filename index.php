<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      

  <title>Get</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="get_post.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="container mt-3">
   <h1 class="text-center"> Employees Registration Form</h1>
    

<form action = "get.php" method = "post">




  

<div class="mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input type="firstName" Required class="form-control" id="firstName" name = "firstName" aria-describedby="emailHelp">
    
</div>
<div class="mb-3">
    <label for="lastName" class="form-label">Last Name</label>
    <input type="lastName" Required class="form-control" id="lastName" name = "lastName" aria-describedby="emailHelp">
    
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email"  Required class="form-control" id="email" name = "email" aria-describedby="emailHelp">    
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  Required class="form-control" id="password" name = "password" aria-describedby="emailHelp">    
</div>
<div class="mb-3">
    <label for="contact_No" class="form-label">Contact_no</label>
    <input type="contact_No" Required class="form-control" id="contact_No" name="contact_No" aria-describedby="emailHelp">
    
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="address" Required class="form-control" id="address" name="address" aria-describedby="emailHelp">
    
</div>
<div class="mb-3">
  <label for="salary" class="form-label">Salary</label>
  <input type="salary" Required class="form-control" id="salary" name="salary" aria-describedby="emailHelp">
    
</div>
 
  <button name="submit"type="submit" class="btn btn-danger">Submit</button>
</form>
</div>


</body>
</html>
