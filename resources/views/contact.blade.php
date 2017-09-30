@extends('layouts.bvk')

@section('content')

@component('components.titleHeader')
  @slot('title')
    Kontakt
  @endslot
  <li class="-thin">Kontakt</li>
@endcomponent

<div class="grid">
  <div class="grid__column -desktop-12">
    @component('components.container')
      @slot('title')
        Kontakta oss
      @endslot
      <div class="contact-details">
        <p class="paragraph -contact">Anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><i class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:+460706146703">073-746 05 12</a>
        <p><i class="fa fa-envelope-square" aria-hidden="true"></i>{{ HTML::mailto('kontakt@bvk.se', 'kontakt@bvk.se') }}</p>
      </div>
    @endcomponent
  </div>
</div>

@endsection
