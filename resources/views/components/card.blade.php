<div class="card" style="width: 18rem;">
  <img src="{{$ad->ad_image}}" class="card-img-top" alt="...">
  <div class="icons_group">
    @if (Route::is('home'))
      <form action="{{ route('user.destroy', $ad->id) }}" method="POST">
        <a href="/user/{{$ad->id}}/edit">Edit</a>         
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    @endif
    
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$ad->ad_name}}</h5>
    <p class="card-owner">{{$ad->ad_seller}}</p>
    <p class="card-price">{{$ad->ad_price}}$</p>
    <p class="card-text">{{$ad->ad_description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>