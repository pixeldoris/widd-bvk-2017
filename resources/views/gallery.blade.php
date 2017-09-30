@extends('layouts.bvk')

@section('content')

@component('components.titleHeader')
  @slot('title')
    Bilder - tidigare projekt
  @endslot
  <li class="-thin">Galleri</li>
@endcomponent

<div class="margin-bottom-40">
  <div class="gallery-carousel">
    @include('components.gallery')
  </div>
</div>

@endsection
