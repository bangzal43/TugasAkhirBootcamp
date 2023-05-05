@extends('template')
@section('content')
@extends('head')
<div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card demo-icons">
            <div class="card-header">
              <div class="card-body all-icons">
                <div id="icons-wrapper">
                  <section>
                    <ul>
                      <div class="col-sm-13 text-left">
                        <h3>Halaman Pengguna Petugas</h3>
                        <p>
                        <p align="right"><a href="agamatambah.php"> <button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i></button></a>
                        </p>
                        <table class="table table-striped">
                          <tr>
                            <th class="text-danger">No</th>
                            <th>ID Petugas</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>No HP</th>
                            <th>Opsi</th>
                          </tr>
                          @foreach ($data as $k => $d)
                          <tr>
                            <td>{{$k+1}}</td> 
                            <td>{{$d->id_petugas}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->jk}}</td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->tanggal_lahir}}</td>
                            <td>{{$d->nohp}}</td>
                          </tr>
                          @endforeach
                        </table>
                    </ul>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection