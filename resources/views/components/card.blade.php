<!-- <div class="card" style="width: 18rem;">
  <img src="{{$ad->ad_image}}" class="card-img-top" alt="...">
  
  <div class="card-body">
    <h5 class="card-title">{{$ad->ad_name}}</h5>
    <p class="card-owner">{{$ad->ad_seller}}</p>
    <p class="card-price">{{$ad->ad_price}}$</p>
    <p class="card-text">{{$ad->ad_description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->

<div class="card cardAnim" style="width: 18rem;">
  <img src='{{$ad->ad_image}}' class="card-img-top cardimg" alt="...">
  <div class="card-body">

    <div class="icons_group m-3">
    @if (Route::is('home'))
      <form class="d-flex justify-content-between" action="{{ route('user.destroy', $ad->id) }}" method="POST">
        <a href="/user/{{$ad->id}}/edit" class="fa-solid fa-pen-to-square"></a>         
        @csrf
        @method('DELETE')
        <button type="submit" class="fa-solid fa-trash-can border-0"></button>
      </form>
    @endif

    </div>
    <h5 class="card-title">{{$ad->ad_name}}</h5>
    <div class="container iconsCard d-flex flex-column gap-3 col-12">
      <div class="row">
        <div class="icon col-6">
            <i class="fa-solid fa-money-bill iconStyle"></i>
            <span>${{$ad->ad_price}}/kg</span>
        </div>
        <div class="icon col-6">
            <i class="fa-solid fa-location-dot iconStyle"></i>
            <span>Barcelona</span>
        </div>
      </div>
      <div class="row mb-2">
        <div class="icon col-6">
            <i class="fa-solid fa-user iconStyle"></i>
            <span>{{$ad->ad_seller}}</span>
        </div>
        <div class="icon col-6">
            <i class="fa-solid fa-clock iconStyle"></i>
            <span>6 Days ago</span>
        </div>
      </div>
    </div>
    <div class="depText d-none">
        <h2>Description</h2>
        <p>{{$ad->ad_description}}</p>
    </div>
    <a href="#" class="btn btnBuy d-flex justify-content-center w-75 mt-4 m-auto">Go to buy</a>
  </div>
</div>
  