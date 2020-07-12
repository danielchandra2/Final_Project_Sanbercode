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
        <h6>On {{$pertanyaan->created_at}}</h6>
        <h6>By {{Auth::user()->name}}</h6>
    </div>
    <div class="card-body"><h4>{!! $pertanyaan->isi !!}</h4></div>
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
<div class="ml-2"><h2>Jawaban:</h2></div>
@foreach($jawaban as $key => $jawaban)
    @if($jawaban->pertanyaan_id == $pertanyaan->id)
        <div class="card ml-2 mt-2">
            <div class="card-header">
                <h6>On {{$jawaban->created_at}}</h6>
                <h6>By {{Auth::user()->name}}</h6>
            </div>
            <div class="card-body border-bottom">
                <h4>{{$jawaban->jawaban}}</h4>
            </div>
            <div class="card-footer">
                Updated on: {{$jawaban->updated_at}}
            </div>
        </div>
    @endif
@endforeach

<!-- new jawaban -->
<div class="card ml-2 mt-3">
    <form action="/jawaban/{{$pertanyaan->id}}" method="POST">
        @csrf
        <div class="form-group ml-2 mt-2">
            <label for="isi">Jawabanmu:</label>
            <input type="text" class="form-control" name="jawaban" placeholder="Enter Jawaban" id="isi">
        </div>
        <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}">
        <button type="submit" class="btn btn-primary ml-2 mb-2">Submit</button>
    </form>
</div>
            
@endsection