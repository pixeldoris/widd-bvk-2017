<div class="title-header">
  <div class="-skew">
    <div class="text-block">
      <h1 class="title -h1 -white -title-header">{{ $title }}</h1>
      <ol class="breadcrumb list-inline">
        <li><a href="{{ url('/new') }}">Hem</a></li>
        {{ $slot }}
      </ol>
    </div>
  </div>
</div>
