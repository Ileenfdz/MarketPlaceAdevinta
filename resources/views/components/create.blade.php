<div>
   {{$slot}}
   <div class="crud-form">
      <div class="mb-3 mt-4">
         <p class="crud-title">Create</p>
      </div>
      <div class="mb-3 mt-3">
         <input class="form-control" id="ad_seller" name="ad_seller" type="text" placeholder="Nombre del vendedor">
      </div>
      <div class="mb-3 mt-3">
         <input class="form-control" id="ad_name" name="ad_name" type="text" placeholder="Nombre del producto">
      </div>
      <div class="mb-3 mt-3">
         <input class="form-control" id="ad_price" name="ad_price" type="number" placeholder="Precio">
      </div>
      <div class="mb-3">
         <input class="form-control" id="ad_description" name="ad_description" type="text" tabindex="3" placeholder="Descripción">
      </div>
      <div class="mb-3">
         <input class="form-control" id="ad_image" name="ad_image" type="url" tabindex="4" placeholder="Imagen">
      </div>
      <div class="modal-footer d-flex">
         <button type="button" class="ml-3 border-0" data-bs-dismiss="modal"><a id="link_home" href="{{ route('home')}}" class="text-decoration-none">Cerrar</a></button>
         <button type="submit" tabindex="4" class="border-0">Guardar</button>
      </div>
  </div>
</div>