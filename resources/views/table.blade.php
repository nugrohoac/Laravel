@extends('../layouts/layout')

@section('title')
    Siswa
@endsection

@section('content')
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telepon</td>
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
@endsection