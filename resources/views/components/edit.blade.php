<div>
    <form action="/user/{{$ad->id}}" method="POST" class="d-flex justify-content-center">
        @csrf    
        @method('PUT')
    <div class="crud-form">
        <div class="mb-3 mt-4">
            <p class="crud-title">Edit</p>
         </div>
        <div class="mb-3 mt-3">
            <input class="form-control" id="ad_seller" name="ad_seller" type="text" value='{{$ad->ad_seller}}'>
        </div>
        <div class="mb-3 mt-3">
            <input class="form-control" id="ad_name" name="ad_name" type="text" value='{{$ad->ad_name}}'>
        </div>
        <div class="mb-3 mt-3">
            <input class="form-control" id="ad_price" name="ad_price" type="number" value='{{$ad->ad_price}}'>
        </div>
        <div class="mb-3">
            <input class="form-control" id="ad_description" name="ad_description" type="text" tabindex="3" value='{{$ad->ad_description}}'>
        </div>
        <div class="mb-3">
            <input class="form-control" id="ad_image" name="ad_image" type="url" tabindex="4" value='{{$ad->ad_image}}'>
        </div>
        <div class="modal-footer d-flex">
            <button type="button" class="ml-3 my-3 border-0" data-bs-dismiss="modal"><a id="link_home" href="{{ route('home')}}" class="text-decoration-none">Cerrar</a></button>
            <button type="submit" tabindex="4" class="border-0 my-3">Guardar</button>
        </div>
    </div>
    </form>
</div>