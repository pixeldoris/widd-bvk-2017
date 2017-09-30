@extends('layouts.bvk')

@section('content')

@component('components.titleHeader')
  @slot('title')
    Samarbetpartners
  @endslot
  <li class="-thin">Samarbetpartners</li>
@endcomponent

@component('components.container')
  @slot('title')
    Samarbetpartners
  @endslot

  <div class="grid partners-list">
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
    <div class="grid__column -desktop-3 -partner">
      <a href="" class="dark-link">Partner</a>
    </div>
  </div>
@endcomponent

@endsection
