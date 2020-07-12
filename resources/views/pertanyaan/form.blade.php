@extends('layouts.admin.master')

@section('content')
<!-- header -->
<div>
    <a href="/pertanyaan" class="btn btn-secondary mt-2 ml-2"><< Kembali ke daftar pertanyaan</a>
</div>

<div class="card mt-2">
  <div class="card-body">
    <form action="/pertanyaan" method="POST">
      @csrf
      <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" name="judul" placeholder="Enter Judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" name="isi" placeholder="Enter Isi" id="isi">
      </div>
      <!-- <div class="form-group">
        <label for="tag">Tag(pakai ","(koma) sebagai separator ex: Hewan, Tumbuhan, Makanan):</label>
        <input type="text" class="form-control" name="tag" placeholder="Enter tag" id="tag">
      </div> -->
      <input type="hidden" name="user_id" value="{{Auth::id()}}">
      <input type="hidden" name="tag_id" value="2">
      <input type="hidden" name="category_id" value="2">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection