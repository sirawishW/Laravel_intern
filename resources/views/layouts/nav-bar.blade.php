<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    @if (Auth::user())
      <div class="bg-dark p-4">
        <h1><a href="/" class="fw-bold text-white" style="text-decoration:none"> Eatomizer</a></h1>
        <label class="text-white">Welcome, {{ Auth::user()->name }}</label>
      </div>
      <div class="bg-dark p-4">
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="text-white">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    @else
      <div class="bg-dark p-4">
        <h1><a href="/" class="fw-bold text-white" style="text-decoration:none"> Eatomizer</a></h1>
        <span class="text-muted">Please Login if you want to add more cuisine</span>
      </div>
      <div class="bg-dark p-4">
        <a href="{{ route('login') }}" class="text-white">Login</a><br>
        <a href="{{ route('register') }}" class="text-white">Signup</a>
      </div>
    @endif
  </div>
  <nav class="navbar navbar-dark bg-dark ps-2">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>