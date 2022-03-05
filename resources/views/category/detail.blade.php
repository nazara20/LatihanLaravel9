@extends('layouts.app')
@section('content')

<div class="mt-3">
Buku dengan Kategori : <b><br>{{ $categories->name }}</b></p>
</div>


<div class="row">
  @foreach ($categories->bukumany as $kategori)
    <div class="col-md-3">
      <div class="card mb-4">
        <div class="card-body">
          <img src="{{ $kategori->image }}" class="img-fluid rounded mb-2" alt="">
          <a href="" class="text-primary fs-6 text-decoration-none">Buku {{ $kategori->name }}</a>
          <h6 class="mt-1">
          </h6>
          <p class="text-muted">Kategori {{ $categories->name }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection