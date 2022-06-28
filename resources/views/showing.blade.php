

@if(isset($encoded))
<?php
$dataa = json_decode($encoded,true);
// var_dump($dataa);
?>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>First-Name</th>
		<th>Last-Name</th>
		<th>E-Mail</th>
		<th>Password</th>
	</tr>
	<tr>
		<td>{{$dataa['id']}}</td>
		<td>{{$dataa['name']}}</td>
		<td>{{$dataa['firstname']}}</td>
		<td>{{$dataa['lastname']}}</td>
		<td>{{$dataa['email']}}</td>
		<td>{{$dataa['password']}}</td>
	</tr>
</table>

@endif

