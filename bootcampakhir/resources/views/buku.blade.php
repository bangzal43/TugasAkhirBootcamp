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
                        <h3>Halaman Buku</h3>
                        <p>
                        <p align="right"><a href="agamatambah.php"> <button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i></button></a>
                        </p>
                        <table class="table table-striped">
                          <tr>
                            <th class="text-danger">No</th>
                            <th>Buku</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Opsi</th>
                          </tr>
                          @foreach ($data as $k => $d)
                          <tr>
                            <td>{{$k+1}}</td> 
                            <td>{{$d->kategori}}</td>
                            <td>{{$d->judul_buku}}</td>
                            <td>{{$d->penulis_buku}}</td>
                            <td>{{$d->penerbit_buku}}</td>
                            <td>{{$d->tahun_penerbit}}</td>
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