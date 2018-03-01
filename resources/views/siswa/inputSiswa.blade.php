@extends('../layouts/layout')

@section('title')
    Input
@endsection


@section('content')

    <form method="POST" action="/input">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama_siswa" placeholder="Nama" /> </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat_siswa" placeholder="Jl. Menuju Kemenangan"></textarea>
                </td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_telp_siswa" placeholder="No Telepon Ex(085789xxxx)" /></td>
            </tr>

            <tr>
                <td></td>
                <td><input name="submit" type="submit" value="submit "/></td>
            </tr>
        </table>
    </form>    

@endsection
