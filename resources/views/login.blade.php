<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link
      rel="stylesheet"
      href="{{ url('/vendor/bootstrap-5.3.1-dist/css/bootstrap.min.css') }}"
    />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <title>Login</title>
  
</head>
<body>
  <div class="container">
    <div class="row mt-5 justify-content-center items-center">
      <div class="col-6">
  <div class="card">
  <form action="/actionlogin" method="POST" class="card-body">
    @csrf
    <div class="row">
      <h3 class="text-center my-5">Masuk ke TASTY FOOD</h3>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" >
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" >
      </div>
      <div class="mb-3">
        <button class="btn btn-dark">Masuk</button>
      </div>
    </div>
  </div>
  
  
</form>
</div>
    </div>
</div>
</body>
</html>