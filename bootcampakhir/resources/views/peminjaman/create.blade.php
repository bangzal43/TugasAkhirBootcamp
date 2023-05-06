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
                        <h5 class="card-title">Halaman Tambah Peminjaman</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{ route('peminjaman.store') }}">
                      @csrf
                      <p>
                      <div class="form-group">
                        <label for="usr">Tanggal Pinjaman:</label>
                        <input type="date" class="form-control" id="tgl_pinjaman" name="tgl_pinjaman">
                      </div>
                       <label for="usr">ID Buku:</label>
                        <input type="text" class="form-control" id="id_buku" name="id_buku">
                      </div>
                       <label for="usr">Nim:</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                      </div>
                       <label for="usr">Petugas:</label>
                        <input type="text" class="form-control" id="id_petugas" name="id_petugas">
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