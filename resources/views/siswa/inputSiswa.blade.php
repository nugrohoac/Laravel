@extends('../layouts/layout')

@section('title')
    Input
@endsection


@section('content')
    <div class="container">
        <form method="POST" action="/input">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Nama :</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="nama_siswa">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" placeholder="Enter Alamat" name="alamat_siswa">
            </div>
            <div class="form-group">
                <label for="no_telf">No telf :</label>
                <input type="text" class="form-control" placeholder="Enter No Telepon" name="no_telp_siswa">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
