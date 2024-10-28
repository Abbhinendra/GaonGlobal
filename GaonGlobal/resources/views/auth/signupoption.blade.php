@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="sinupoption">
   <main>
    <div>
        <h2>Seller</h2>
        <img src="{{asset('images/seller.webp')}}" alt="">
    <a href="{{route('singupPage', 'seller')}}">Become a Seller</a>
    </div>

    <div>
        <h2>Buyer</h2>
        <img src="{{asset('images/buyer.webp')}}" alt="">
      <a href="{{route('singupPage', 'buyer')}}">Become a Buyer</a>
    </div>
   </main>
</section>
@endsection
