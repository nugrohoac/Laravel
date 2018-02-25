<!DOCTYPE html>
<html>
<head>
	<title>Ini Tabel</title>
</head>
<body>
	<table border="1">
		<tr>
            <td>No</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Email</td>
        </tr> 
        <?php
            $no = 1;
        ?>
    @foreach ($mahasiswa as $data)
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $data->name }}</td>
			<td>{{ $data->alamat }}</td>
			<td>{{ $data->email}}</td>
        </tr>
        <?php
            $no++;
        ?>
    @endforeach

    </table>
    
    <h4> Nugroho Agung Cahono memegang proyek {{ $nug }} </h4>

</body>
</html>