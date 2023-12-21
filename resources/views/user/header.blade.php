
<div class="header">
    <div class="header-logo-brand-container">
        <a href="{{url('/')}}">
            <h2>Logo Brand</h2>
        </a>
    </div>
    <div class="header-cart-and-user">
        <ul class="header-items-list">
             @guest
                @if (Route::has('login'))
                <li class="item">
                    <a href="{{ route('login') }}">
                    <button class="cart-button  header-button ">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                    </a>
                </li>
            @endif
            <li>
                @if (Route::has('login'))
                <a href="{{ route('login') }}">
                <button class="user-button  header-button " style="font-size: 14pt;">
                    Login
                </button>
                </a>
            </li>
            @endif
            @if (Route::has('register'))

            <li class="item" style="margin-left: 10px">
                 |
            </li>
            <li class="item">
                <a href="{{ route('register') }}">
                <button class="user-button  header-button" style="font-size: 14pt;">
                    Register
                </button>
                </a>
            </li>
            @endif
                @else
                <li>
                    <button class="user-button  header-button" style="font-size: 14pt;">
                        <i class="fas fa-user-circle  user-infor"></i>
                    </button>
                    <ul class="user-infor-menu">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                        <li class="item" id="user-log-out">
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">>
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            Log out
                            </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                        </li>
                    </ul>
                </li>
                     <li class="nav-item dropdown">
     
                     </li>
                @endguest
        </ul>
    </div>
</div>