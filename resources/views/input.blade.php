@extends('layouts/layout')

@section('title')
    Input
@endsection


@section('content')
    <table>
        <tr>
            <td>Nama</td>
            <td> <input name="nama" placehoder="Nama" /> </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat"></textarea>
            </td>
        </tr>

        <tr>
            <td>No Telepon</td>
            <td><input name="no_telp" placehoder="No Telepon Ex(085789xxxx)" /></td>
        </tr>
    </table>
@endsection