@extends('layouts.app')
@section('content')

@push('after-styles')
  <style>
    .green {
      color: green;
    }
  </style>
@endpush

<div class="row">
  @foreach ($category as $kategori)
    <div class="col-md-3 pt-5">
      <div class="card mb-4">
        <div class="card-body">
          <img src="{{ $kategori->books->image }}" class="img-fluid rounded mb-2" alt="">
          <a href="{{ route('books.detail', $kategori->books->slug) }}" class="text-primary fs-6 text-decoration-none">Buku {{ $kategori->books->name }}</a>
          <h6 class="mt-1">
            <a href="{{ route('books.detail', $kategori->books->slug) }}" class="text-dark text-decoration-none">{{ $kategori->name }}</a>
          </h6>
          <p class="text-muted">Lorem ipsum dolor......</p>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection