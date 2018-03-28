@extends('../layouts/layout')

@section('title')
    Table Siswa
@endsection

@section('content')
    <div class="container">
        <a href="{{ url('siswa') }}">Tambah Data</a>
        <table border="1" width="60%">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>No Telepon</td>
                <td>Action</td>
            </tr>        
            @foreach ($siswa as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->no_telp}}</td>
                <td>
                    <a href="/{{ $data->id }}/edit">Edit</a> || 

                    <form method="POST" action="/{{ $data->id }}/delete">
                        {{ csrf_field() }}
                        <input id="delete" onclick="ConfirmDelete()" type="submit" name="_delete" value="Delete"></input>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>         
    </div>
@endsection