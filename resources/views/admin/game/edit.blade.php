@extends('admin.app')
@section('content')
    <form action="{{ route('game.update',$game) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese Nombre del Juego:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $game->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Tipo del Juego:
            </label>
            <input type="text" class="form-control" name="type" value="{{ $game->type }} ">
        </div>
        <div class="form-group">
            <label for="">
                Año del Juego:
            </label>
            <input type="text" class="form-control" name="game_year" value="{{ $game->game_year }} ">
        </div>
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="myUniqueUploadIde">
                <label
                    >Cargar Imagen
                    <a
                        href="javascript:void(0)"
                        class="custom-file-container__image-clear"
                        title="Clear Image"
                        >&times;</a
                    ></label
                >
                <label class="custom-file-container__custom-file">
                    <input
                        type="file"
                        name="file"
                        class="custom-file-container__custom-file__custom-file-input"
                        accept="*"
                        aria-label="Choose File"
                    />
                    <span
                        class="custom-file-container__custom-file__custom-file-control"
                    ></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="">
                Requerimiento del Juego:
            </label>
            <input type="text" class="form-control" name="requirements" value="{{ $game->requirements }} ">
        </div>
        <div class="form-group">
            <label for="">
               Plataforma:
            </label>
            <input type="text" class="form-control" name="platform" value="{{ $game->platform }} ">
        </div>
        <div class="form-group">
            <label for="">
               Elije una Categoria:
            </label>
            <select name="category_id" class="custom-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id ==$game->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>     
                @endforeach
               
            </select>
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection
@push ('scripts')
<script>
var previewImage = null;
      if ('{{ $game->image != null }}'){
        previewImage = '{{ $game->image }}'
      }
    var upload = new FileUploadWithPreview("myUniqueUploadIde",{
    text: {
          chooseFile: "Seleccionar una Imagen...",
          browse: "Seleccionar",
          selectedCount: "Custom Files Selected Copy",
          },
          presetFiles: [
              previewImage
          ]
  });
</script>
@endpush