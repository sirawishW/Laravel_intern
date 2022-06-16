<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      <div>
        Welcome, {{ Auth::user()->name }}
      </div>
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    @else
      <div class="bg-dark p-4">
        <h1><a href="/" class="fw-bold text-white" style="text-decoration:none"> Eatomizer</a></h4>
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