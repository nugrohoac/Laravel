@extends('layouts/layout')

@section('title')
    Herp Title
@endsection

@section('content')
    Ini adalah Halaman contentNugroho akan memegang Indo Barometer

    <form method="POST" action="/input_form_post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" placeholder="Nama Lengkap"/>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" placeholder="Alamat Anda"/>
                </td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>
                    <input type="text" name="telf" placeholder="No Telfon" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" style="color:blue; backgroud:red" name="submit" value="SAVE"/>
                </td>
            </tr>
        </table>
    </form>

@endsection