

@if(isset($encode))
<?php
$sss = json_decode($encode,true);
?>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>E-Mail</th>
		<th>Password</th>
	</tr>
	<tr>
		<td>{{$sss['id']}}</td>
		<td>{{$sss['name']}}</td>
		<td>{{$sss['email']}}</td>
		<td>{{$sss['password']}}</td>
	</tr>
</table>

@endif

