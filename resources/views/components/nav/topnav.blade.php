<nav class="navbar navbar-dark sticky-top shadow-sm" style="background-color: #6F8CC4;">
  <div class="container">
    <a class="navbar-brand text-white" href="#"></a>

    <li class="nav-item dropdown" style="list-style: none">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
          <a class="dropdown-item" href="{{ route('users.show', auth()->user()) }}"><i
              class="bi bi-person-fill me-2"></i>Mon compte</a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
          </form>
          <a class="dropdown-item" id="logout-anchor" href="#"><i class="bi bi-box-arrow-left me-2"></i>Sign out</a>
        </li>
      </ul>
    </li>
  </div>
</nav>

@section('script')
  @parent
  document.getElementById('logout-anchor').addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
  });
@endsection
