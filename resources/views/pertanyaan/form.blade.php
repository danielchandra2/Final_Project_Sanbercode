@extends('layouts.admin.master')

@push("scripthead")
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush
    
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
        <textarea name="isi" class="form-control my-editor">{!! old('isi', $isi ?? '') !!}</textarea>
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

@push("scripts")
    <script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
        });
        }
    };

    tinymce.init(editor_config);
    </script>
@endpush