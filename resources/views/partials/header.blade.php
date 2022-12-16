<header class="text-center">

  <div class="logo">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
  </div>
  <nav class="nav justify-content-center mt-4">
    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}" aria-current="page">Home</a>
    <a class="nav-link {{ Route::currentRouteName() === 'products' ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
    <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">News</a>
  </nav>

</header>
