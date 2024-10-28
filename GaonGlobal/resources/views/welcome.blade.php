@extends('masterlayout.aap')
@section('content')
<section class="slides">
    <div class="bar" style="padding: 9px;">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')
</section>
@endsection
