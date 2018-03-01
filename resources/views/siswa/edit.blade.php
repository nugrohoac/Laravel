@extends('../layouts/layout')

@section('title')
    Edit
@endsection


@section('content')

<h2>Ini Form Edit</h2>

    <form method="POST" action="/{{ $siswa->id }}/edit">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama_siswa" placeholder="Nama" value="{{ $siswa->nama }}" /> </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat_siswa" placeholder="Jl. Menuju Kemenangan">{{ $siswa->alamat  }}</textarea>
                </td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_telp_siswa" placeholder="No Telepon Ex(085789xxxx)" value="{{ $siswa->no_telp }}" /></td>
            </tr>

            <tr>
                <td></td>
                <td><input name="submit" type="submit" value="submit "/></td>
            </tr>
        </table>

    </form>    

@endsection
