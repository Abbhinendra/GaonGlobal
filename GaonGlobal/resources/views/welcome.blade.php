@extends('masterlayout.aap')
{{-- success messages --}}
@section('content')
<section class="slides">
    <div class="bar" style="padding: 9px;">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')
</section>
@if (session()->has('login'))
<div class="success-message">
    <span>{{session('login')}}</span>
</div>
@endif
@endsection
@push('js')
<script>
    let successMessage=document.querySelector('.success-message');
    if(successMessage){
       setTimeout(() => {
       successMessage.style.display="none";
       }, 2000);
    }
</script>
@endpush
