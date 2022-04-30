<!DOCTYPE html>
<html>
<head>
    <title>laravel 8 image upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
    
<body>
<div class="container">
    <form action="{{route('image.upload.post')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
    
                <div class="col-md-6">
                    <input type="file" name="imageName" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="text" name="title" class="form-control">
                </div><div class="col-md-6">
                    <input type="text" name="description" class="form-control">
                </div>
     
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
    </form>
</div>
</body>
  
</html>