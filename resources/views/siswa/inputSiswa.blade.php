@extends('../layouts/layout')

@section('title')
    Input
@endsection


@section('content')
   <!--  <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"> Tambah Data <i class="fa-trash"></i> </div>
        </div>
        <div class="panel-body">
            <form method="POST" action="/input">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td> 
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="text" name="nama_siswa" placeholder="Nama" />
                            </div>
                        </td>
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
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr> -->

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

        <!--         </table>
            </form>     
        </div>
    </div> -->
@endsection
