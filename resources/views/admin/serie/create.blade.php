@extends('admin.app')
@section('content')
    <form action="{{ route('serie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el Nombre:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="myUniqueUploadIdserie">
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
                Temporada:
            </label>
            <input type="text" class="form-control" name="season">
        </div>
        <div class="form-group">
            <label for="">
                Idioma:
            </label>
            <input type="text" class="form-control" name="language">
        </div>
        <div class="form-group">
            <label for="">
                Capitulo:
            </label>
            <input type="text" class="form-control" name="chapter">
        </div>
        <div class="form-group">
            <label for="">
               Año de Estreno:
            </label>
            <input type="text" class="form-control" name="premiere">
        </div>
        <div class="form-group">
            <label for="">
               Genero:
            </label>
            <input type="text" class="form-control" name="gender">
        </div>
        <div class="form-group">
            <label for="">
               Elije una Categoria:
            </label>
            <select name="category_id" class="custom-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
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
    var upload = new FileUploadWithPreview("myUniqueUploadIdserie",{
    text: {
          chooseFile: "Seleccionar una Imagen...",
          browse: "Seleccionar",
          selectedCount: "Custom Files Selected Copy",
          },
  });
</script>
@endpush