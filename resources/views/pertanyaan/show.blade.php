@extends('layouts.admin.master')

@section('content')
<!-- header -->
<div class="ml-2 mt-2">
    <a href="/pertanyaan" class="btn btn-secondary"><< Kembali ke pertanyaan </a>
</div>

<!-- pertanyaan -->
<div class="card mt-2 ml-2 mr-2">
    <div class="card-header">
        <h3>{{$pertanyaan->judul}}</h3>
        <h6>By {{Auth::user()->name}}</h6>
        <h6>On {{$pertanyaan->created_at}}</h6>
    </div>
    <div class="card-body"><h4>{{$pertanyaan->isi}}</h4></div>
    <div class="card-footer">
    Updated On: {{$pertanyaan->updated_at}} 
    @if (Auth::id() == $pertanyaan->user_id)
        <div class="mt-2">
            <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-success">Edit</a>
            <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" class="mt-2">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endif
    </div>
</div>

<!-- jawaban -->

            



@endsection