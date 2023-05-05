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
                        <h5 class="card-title">Halaman Tambah Buku</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{url('/store')}}">
                      @csrf
                      <p>
                      <div class="form-group">
                        <label for="usr">Judul Buku:</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                      </div>
                       <label for="usr">Kategori:</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                      </div>
                       <label for="usr">Penulis:</label>
                        <input type="text" class="form-control" id="penulis_buku" name="penulis_buku">
                      </div>
                       <label for="usr">Penerbit:</label>
                        <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku">
                      </div>
                       <label for="usr">Tahun:</label>
                        <input type="text" class="form-control" id="tahun_penerbit" name="tahun_penerbit">
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