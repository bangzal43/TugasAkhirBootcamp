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
                        <h5 class="card-title">Halaman Tambah Kategori</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" action="{{url('/store')}}">
                      @csrf
                      <p>
                       <label for="usr">Kategori:</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
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