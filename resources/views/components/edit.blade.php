<div>
    <form action="/user/{{$ad->id}}" method="POST" class="d-flex justify-content-center">
        @csrf    
        @method('PUT')
    <div class="formulario">
        <div class="mb-3 mt-3">
            <label class="label">Nombre del vendedor</label>
            <input class="form-control" id="ad_seller" name="ad_seller" type="text" value='{{$ad->ad_seller}}'>
        </div>
        <div class="mb-3 mt-3">
            <label class="label">Nombre del producto</label>
            <input class="form-control" id="ad_name" name="ad_name" type="text" value='{{$ad->ad_name}}'>
        </div>
        <div class="mb-3 mt-3">
            <label class="label">Precio</label>
            <input class="form-control" id="ad_price" name="ad_price" type="number" value='{{$ad->ad_price}}'>
        </div>
        <div class="mb-3">
            <label class="label">Descripción</label>
            <input class="form-control" id="ad_description" name="ad_description" type="text" tabindex="3" value='{{$ad->ad_description}}'>
        </div>
        <div class="mb-3">
            <label class="label">Imagen</label>
            <input class="form-control" id="ad_image" name="ad_image" type="url" tabindex="4" value='{{$ad->ad_image}}'>
        </div>
        <div class="modal-footer d-flex">
            <button type="button" class="ml-3" data-bs-dismiss="modal"><a id="link_home" href="{{ route('home')}}">Cerrar</a></button>
            <button type="submit" tabindex="4">Guardar</button>
        </div>
    </div>
    </form>
</div>