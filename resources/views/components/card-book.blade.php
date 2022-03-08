<div class="card mb-4">
    <div class="card-body">
        <img src="{{ $books->image }}" class="img-fluid rounded mb-2" alt="">
        <h6 class="mt-1">
            <a href="{{ route('books.detail', $books->slug) }}"
                class="text-dark text-decoration-none">{{ $books->name }}</a>
        </h6>
        <p class="text-muted">{{ str()->limit($books->slug, 20) }}</p>
        <a href="{{ route('category.detail', $books->category_id) }}">Kategori :
            {{ $books->category->name }}</a>
        <p>Review ({{ $books->reviews_count }})</p>
    </div>
</div>