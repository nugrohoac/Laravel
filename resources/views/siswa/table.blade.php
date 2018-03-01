@extends('../layouts/layout')

@section('title')
    Table Siswa
@endsection

@section('content')
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telepon</td>
        </tr>        

    @foreach ($siswa as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->no_telp}}</td>
        </tr>
    @endforeach

    </table>
@endsection