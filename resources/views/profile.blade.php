<!doctype html>
<html>
  <head>
   <title>Profile-Info</title>
  </head>
  <body>
    <h1>Profile-Info</h1>
<table>
	 <tr>
     <th>Name</th>
      <th>First-Name</th>
      <th>Last-Name</th>
      <th>Email</th>
      </tr>
<tr>
<form action="{{url('/profile')}}" method="post">
	@csrf
	
	<button type="submit">hello</button>
</form>
	@if(isset($name))
    <td>{{ $name->user_name}}</td> <br>
    <td>{{ $name->first_name}}</td> <br>
    <td>{{ $name->last_name}}</td> <br>
    <td>{{ $name->email}}</td> <br>
    <td><form class="float-right m-0" method="post" action="{{ url('/profile') }}">
                                @method('delete')
                                @csrf
                                <div class="form-row">
                                    <input type="hidden" name="infoId" value="{{ $name->id }}">
                                    <button> <i class="fa fa-trash-alt"></i></button>
                                </div>
                            </form></td>
   </tr>
   @endif
    
  </body>
</html>