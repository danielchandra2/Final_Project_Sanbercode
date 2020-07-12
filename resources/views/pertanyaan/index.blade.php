@extends('layouts.admin.master')

@section('content')
<!-- header -->
<div>
    <a href="/pertanyaan/create" class="btn btn-secondary mt-2 ml-2">Buat pertanyaan >></a>
</div>

@foreach($pertanyaan as $key => $pertanyaan)
  <div class="card mt-2 ml-2 mr-2">
    <div class="card-header">
      <h3><a href="/pertanyaan/{{$pertanyaan->id}}">{{$pertanyaan->judul}}</a></h3>
    </div>
    <div class="card-body">
        <?php    
        
        echo Str::limit($pertanyaan->isi, 20, ' ...');

        ?>
    </div>
    <div class="card-footer">
    Asked: {{$pertanyaan->created_at}}
    </div>
  </div>
@endforeach
@endsection