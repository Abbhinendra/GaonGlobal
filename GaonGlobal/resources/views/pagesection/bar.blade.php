    <main class="pages">
        <div style="text-align: right" class="cross">
            <img  style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/cross.svg')}}" alt="">
        </div>
        <hr>
        <br>
        @if(auth()->check())
        <center><strong>{{auth()->user()->name}}</strong></center>
        @else
        <center><strong>anonmymous user</strong></center>
        @endif
        <br>
      <span class="userProfileContainer">
        @if(!auth()->check())
        <img class="userProfile" src="{{asset('images/DALL·E 2024-10-13 20.42.41 - A vibrant and colorful anonymous user profile picture. The image should feature a simple, neutral silhouette of a person with no defining features, us.webp')}}" alt="">
        @endif
        @if (auth()->check())
        @if(auth()->user()->getFirstMediaUrl('profileImage'))
        <img class="userProfile" src="{{ asset(auth()->user()->getFirstMediaUrl('profileImage')) }}" alt="">
        @else
        <img class="userProfile" src="{{asset('images/DALL·E 2024-10-13 20.42.41 - A vibrant and colorful anonymous user profile picture. The image should feature a simple, neutral silhouette of a person with no defining features, us.webp')}}" alt="">
        @endif
      <img class="cameraIcon" style="width:48px;" src="{{asset('images/camera.png')}}" alt="">
      <button><a href="{{route('logout')}}">Logout</a></button> @endif</span>
      <br>
      @if (auth()->check())
      <input type="file" id="profileImage" accept=".jpeg,.jpg,.png,.webp,.gif" hidden/>
      @if(auth()->user()->type === 'seller' && (auth()->user()->seller_amount == null || auth()->user()->seller_amount <=0 ))
      <span  class="payment-alert-if-user-is-seller">Please complete your payment because your account is a seller account so you need to pay first then you will be able to use all services.</span>
      @endif
      @endif
      <hr>
      <br>
        <div  class="content">
        @if (!auth()->check())
        <button><a href="{{route('signupoption.index')}}"> Singup</a></button>
        @endif
        @if (!auth()->check())
        <button><a href="{{route('loginPage')}}"> Login</a></button>
        @endif
        @if(auth()->check() && auth()->user()->type === 'seller')
        <button><a href="{{route('frontend.payment-page')}}">Pricing</a></button>
        @endif
        @if(auth()->check())
        <button><a href="{{route('profile.index')}}"> Profile</a></button>
        @endif
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        <button><a href=""> About</a></button>
        </div>
    </main>
