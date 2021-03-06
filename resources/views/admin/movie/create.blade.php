@extends('admin.app')
@section('content')
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-6">
                <div class="card shadow border p-3">
                    <div class="form-group">
                        <label for="">
                            Ingrese Titulo de la Pelicula:
                        </label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Genero:
                        </label>
                        <input type="text" class="form-control" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Idioma:
                        </label>
                        <input type="text" class="form-control" name="language">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Año de Produccion:
                        </label>
                        <input type="text" class="form-control" name="production">
                    </div>
                    <div class="form-group">
                        <label for="">
                           Duracion:
                        </label>
                        <input type="time" class="form-control" name="duration">
                    </div>
                    <div class="form-group">
                        <label for="">
                           Calificacion:
                        </label>
                        <input type="text" class="form-control" name="qualification">
                    </div>
                    <div class="form-group">
                        <label for="">
                           Año de Estreno:
                        </label>
                        <input type="date" class="form-control" name="premiere">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow border p-3">
                    <div class="form-group">
                        <div class="custom-file-container" data-upload-id="myUniqueUploadIdmovie">
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
                           Resumen:
                        </label>
                        <input type="text" class="form-control" name="summary">
                    </div>
                    <div class="form-group">
                        <label for="">
                           Actor:
                        </label>
                        <select name="actor_id" class="custom-select">
                            @foreach ($actors as $actor)
                                <option value="{{ $actor->id }}">
                                    {{ $actor->name }}
                                </option>     
                            @endforeach
                           
                        </select>
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
                    <button class="btn btn-primary btn-block">Guardar</button>
                </div>
            </div>
        </div>
        
        
    </form>
@endsection
@push ('scripts')
<script>
    var upload = new FileUploadWithPreview("myUniqueUploadIdmovie",{
    text: {
          chooseFile: "Seleccionar una Imagen...",
          browse: "Seleccionar",
          selectedCount: "Custom Files Selected Copy",
          },
  });
</script>
@endpush
