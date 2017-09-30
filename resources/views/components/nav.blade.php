<div class="navbar-container">
  <nav class="navbar">
    <span><a href="{{ url('/') }}"><img src="{{ Storage::url('other/bvk-logo-ver4.png') }}"></a></span>
    <ul class="list-inline">
      <li class="dropdown nav-burger">
        <a>
          Meny <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        <ul>
          <li><a href="{{ url('/') }}">Hem</a></li>
          <li><a href="{{ url('/tjanster') }}">Tjänster</a></li>
          <li><a href="{{ url('/om-oss') }}">Om oss</a></li>
          <li><a href="{{ url('/galleri') }}">Galleri</a></li>
          <li><a href="{{ url('/samarbetpartners') }}">Samarbetpartners</a></li>
          <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
        </ul>
      </li>
      <li class="desktop-nav"><a href="{{ url('/') }}">Hem</a></li>
      <li class="dropdown desktop-nav">
        <a href="{{ url('/tjanster') }}">
          Tjänster <i class="fa fa-caret-down" aria-hidden="true"></i>
        </a>
        <ul>
          <li><a href="{{ url('/tjanster') }}">byggmontage</a></li>
          <li><a href="{{ url('/tjanster') }}">industrihallar</a></li>
          <li><a href="{{ url('/tjanster') }}">betonghåltagning</a></li>
          <li><a href="{{ url('/tjanster') }}">anläggning</a></li>
          <li><a href="{{ url('/tjanster') }}">övrigt</a></li>
        </ul>
      </li>
      <li class="desktop-nav"><a href="{{ url('/om-oss') }}">Om oss</a></li>
      <li class="desktop-nav"><a href="{{ url('/galleri') }}">Galleri</a></li>
      <li class="desktop-nav"><a href="{{ url('/samarbetpartners') }}">Samarbetpartners</a></li>
      <li class="desktop-nav"><a href="{{ url('/kontakt') }}">Kontakt</a></li>
    </ul>
  </nav>
</div>
