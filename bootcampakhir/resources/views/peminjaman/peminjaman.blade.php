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
                        <h3>Halaman Peminjaman</h3>
                        <p>
                        <p align="right">
                          <a href="{{ route('peminjaman.create') }}"> <button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i></button></a>
                          <a href=""> <button class="btn btn-info"><i>Cetak Peminjaman</i></button></a>
                        </p>
                        </p>
                        <table class="table table-striped">
                          <tr>
                            <th class="text-danger">No</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Id Buku</th>
                            <th>Mahasiswa</th>
                            <th>Petugas</th>
                            <th>Opsi</th>
                          </tr>
                          @foreach ($data as $k => $d)
                          <tr>
                            <td>{{$k+1}}</td> 
                            <td>{{$d->tgl_pinjaman}}</td>
                            <td>{{$d->id_buku}}</td>
                            <td>{{$d->nim}}</td>
                            <td>{{$d->id_petugas}}</td>
                            <td>
                              <a href="" class="btn btn-sm btn-warning">Edit</a>
                              <form action="" class="pull-left"  method="POST">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                          </td>
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