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
      <span class="userProfileContainer"><img class="userProfile" src="{{asset('images/DALL·E 2024-10-13 20.42.41 - A vibrant and colorful anonymous user profile picture. The image should feature a simple, neutral silhouette of a person with no defining features, us.webp')}}" alt="">     @if (auth()->check())

      <button><a href="{{route('logout')}}">Logout</a></button> @endif</span>
      <br>
      <hr>
      <br>
        <div  class="content">
        @if (!auth()->check())
        <button><a href="{{route('signupoption.index')}}"> Singup</a></button>
        @endif
        @if (!auth()->check())
        <button><a href="{{route('loginPage')}}"> Login</a></button>
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
        </div>
    </main>
