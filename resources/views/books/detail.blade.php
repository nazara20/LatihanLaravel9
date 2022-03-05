@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-7 pt-5">
      <div class="card">
        <div class="card-body">
          <h6>Buku {{ $books->name }}</h6>
          <img src="{{ $books->image }}" class="img-fluid rounded mb-2" alt="">
          <p class="text-muted mt-2">Buku Terpopuler</p>
        </div>
      </div>
    </div>
</div>
@endsection