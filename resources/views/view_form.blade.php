@extends('layouts/layout')

@section('title')
    Herp Title
@endsection

@section('content')
    Ini adalah Halaman content Nugroho akan memegang Indo Barometer

    <form method="POST" action="/input_form_post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    {{ $nama }}
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    {{ $alamat }}
                </td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>
                    {{ $telf }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="SAVE"/>
                </td>
            </tr>
        </table>
    </form>

@endsection