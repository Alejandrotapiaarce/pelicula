@extends('admin.app')
@section('content')
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Producto:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="myUniqueUploadIdproduct">
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
                Ingrese la cantidad del Producto:
            </label>
            <input type="text" class="form-control" name="quantity">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese el precio del Producto:
            </label>
            <input type="text" class="form-control" name="price">
        </div>
        <button class="btn btn-primary">Guardar Producto</button>
    </form>
@endsection
@push ('scripts')
<script>
    var upload = new FileUploadWithPreview("myUniqueUploadIdproduct",{
    text: {
          chooseFile: "Seleccionar una Imagen...",
          browse: "Seleccionar",
          selectedCount: "Custom Files Selected Copy",
          },
  });
</script>
@endpush