<html>
<head>
	<title>Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data User</h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nik</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Role</th>
			</tr>
		</thead>
       	 @foreach($user as $i => $p)
		 @if($p->role == 'user')
		<tbody>
			<tr>
				<td>{{$i++}}</td>
                <td>{{$p->nik}}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->alamat}}</td>
				<td>{{$p->telp}}</td>
				<td>{{$p->role}}</td>

			</tr>

		</tbody>
			@endif
        	@endforeach
	</table>

</body>
</html>
