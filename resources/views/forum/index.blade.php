@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<div class="container">
    <h1 class="mt-5 mb-3">Forum</h1>
    <form action="{{ route('post.article') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul Artikel</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Isi Artikel</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@include('layout.footer')
@endsection
