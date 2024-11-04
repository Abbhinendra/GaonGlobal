
@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="paymentgatewaypage">
<div class="payment-box">
<div class="payment-days">For free</div>
<div class="payment-rs">
0 rs
</div>
<ul>
    <li>can upload only 1 video for educatinal tutorials (or) one product for selling.</li>
</ul>
<ul>
    <a href="">Pay now</a>
</div>

<div class="payment-box">
<div class="payment-days">
For one month
</div>
<div class="payment-rs">
200 rs
</div>
<ul>
    <li>upload unlimited tutorials or products.</li>
    </ul>
</ul>
<a href="">Pay now</a>
</div>


<div class="payment-box">
<div class="payment-days">For one year</div>
<div class="payment-rs">
2400 rs
</div>
<ul>
<li>upload unlimited tutorials or products.</li>
</ul>
<a href="">Pay now</a>
</div>
</section>
@endsection

