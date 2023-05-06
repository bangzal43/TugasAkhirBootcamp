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
                  <div class="card-header">
                    <section>
                      <ul>
                        <h5 class="card-title">Halaman Tambah Petugas</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{url('store')}}">
                      @csrf
                      <p>
                      <div class="form-group">
                        <label for="usr">Nama Petugas:</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>
                       <label for="usr">Jenis Kelamin:</label>
                        <input type="text" class="form-control" id="jk" name="jk">
                      </div>
                       <label for="usr">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                      </div>
                       <label for="usr">Tanggal Lahir:</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                      </div>
                      <label for="usr">No Hp:</label>
                        <input type="text" class="form-control" id="nohp" name="nohp">
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </ul>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection