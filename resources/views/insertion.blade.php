<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Helper</title>
</head>
<body>

	<form action="{{url('/insertion')}}" method="post">
    @csrf 

	<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div><br/>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">First-Name</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputPassword1">
  </div><br/>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last-Name</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputPassword1">
  </div><br/>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div><br/>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div><br/>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>