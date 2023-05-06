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
                        <h3>Halaman Kategori</h3>
                        <p>
                        <p align="right">
                          <a href="{{route ('kategori.create')}}"> <button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i></button></a>
                          <a href=""> <button class="btn btn-info"><i>Cetak Kategori</i></button></a>
                        </p>
                        </p>
                        <table class="table table-striped">
                          <tr>
                            <th class="text-danger">No</th>
                            <th>Kategori</th>
                            <th>Opsi</th>
                          </tr>
                          @foreach ($data as $k => $d)
                          <tr>
                            <td>{{$k+1}}</td> 
                            <td>{{$d->kategori}}</td>
                            <td>
                              <a href="" class="btn btn-sm btn-warning">Edit</a>
                                  @csrf
                                  @method('delete')
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