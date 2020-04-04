<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
			<th>No</th>
        <th>Nama Pemesan</th>
        <th>Email</th>
        <th>No Tlpn</th>
        <th>Tanggal Pemesan</th>
        <th>Waktu Pemesanan</th>
        <th>Banyak Kursi</th>
			</tr>
		</thead>
		<tbody>
			@php $no=1 @endphp
			@foreach($booking as $data)
			<tr>
				 <td>{{ $no++ }}</td>
         <td>{{ $data->nama }}</td>
         <td>{{ $data->email }}</td>
         <td>{{ $data->no_tlpn }}</td>
         <td>{{ $data->tgl_pemesanan}}</td>
         <td>{{ $data->waktu}}</td>
         <td>{{ $data->banyak_kursi}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>



{{-- <!DOCTYPE html>
<html>
<head>
	<title>Laporan Pemesanan Tempat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pemesanan Tempat</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
        <th>Nama Pemesan</th>
        <th>Email</th>
        <th>No Tlpn</th>
        <th>Tanggal Pemesan</th>
        <th>Waktu Pemesanan</th>
        <th>Banyak Kursi</th>
			</tr>
		</thead>
		<tbody>
			@php $no=1 @endphp
			@foreach($booking as $data)
			<tr>
				 <td>{{ $no++ }}</td>
         <td>{{ $data->nama }}</td>
         <td>{{ $data->email }}</td>
         <td>{{ $data->no_tlpn }}</td>
         <td>{{ $data->tgl_pemesanan}}</td>
         <td>{{ $data->waktu}}</td>
         <td>{{ $data->banyak_kursi}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html> --}}