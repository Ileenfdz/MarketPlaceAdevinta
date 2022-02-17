<div>
   {{$slot}}
   <div class="formulario">
      <div class="mb-3 mt-3">
         <label class="label">Nombre del vendedor</label>
         <input class="form-control" id="ad_seller" name="ad_seller" type="text">
      </div>
      <div class="mb-3 mt-3">
         <label class="label">Nombre del producto</label>
         <input class="form-control" id="ad_name" name="ad_name" type="text">
      </div>
      <div class="mb-3 mt-3">
         <label class="label">Precio</label>
         <input class="form-control" id="ad_price" name="ad_price" type="number">
      </div>
      <div class="mb-3">
         <label class="label">Descripción</label>
         <input class="form-control" id="ad_description" name="ad_description" type="text" tabindex="3">
      </div>
      <div class="mb-3">
         <label class="label">Imagen</label>
         <input class="form-control" id="ad_image" name="ad_image" type="url" tabindex="4">
      </div>
      <div class="modal-footer d-flex">
         <button type="button" class="ml-3" data-bs-dismiss="modal"><a id="link_home" href="{{ route('home')}}">Cerrar</a></button>
         <button type="submit" tabindex="4">Guardar</button>
      </div>
  </div>
</div>