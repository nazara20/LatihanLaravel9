@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="mt-5">
      <div class="card">
        <div class="card-body">
          <h1>Halo!</h1>
          <p style="color:grey">Selamat datang di perpustakaan GIBS</p>
          <hr>
          ingin baca buku apa hari ini? <br><br>
          <a href="{{ route('buku') }}" class="btn btn-primary">Jelajahi Buku</a>
        </div>
      </div>
    </div>
  </div>
@endsection