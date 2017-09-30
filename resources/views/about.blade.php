@extends('layouts.bvk')

@section('content')

@component('components.titleHeader')
  @slot('title')
    Om BVK
  @endslot
  <li class="-thin">Om oss</li>
@endcomponent

@component('components.container')
  @slot('title')
    Vilka vi är
  @endslot
  <div class="grid">
    <div class="grid__column -desktop-7 -tablet-12 about">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada sollicitudin ipsum, vitae placerat sem accumsan id. Vestibulum fringilla neque sed leo molestie, non venenatis justo dignissim. Quisque fringilla at dui eu vehicula. Praesent mauris enim, blandit tincidunt cursus nec, facilisis ut justo. Phasellus et lorem tincidunt, euismod orci at, suscipit metus. Nam quis porta magna, sed faucibus justo. Nunc cursus neque eu est rutrum iaculis. Proin a eleifend urna. Mauris tristique purus a turpis cursus rutrum. Curabitur ut vulputate ex.

      Vestibulum cursus scelerisque tincidunt. Fusce sed tincidunt libero. Pellentesque varius hendrerit dolor blandit interdum. Vestibulum turpis dui, commodo ac ante eu, consectetur laoreet metus. Nunc a ipsum faucibus augue aliquam porta. Quisque interdum rhoncus nunc a ornare. Vestibulum iaculis viverra turpis accumsan mattis. Vivamus cursus augue non dui tempus, ut efficitur est viverra. Proin augue purus, lobortis ut bibendum quis, finibus non tortor. Morbi interdum odio nec hendrerit vulputate. Aenean sagittis, mi id convallis tempor, neque nisl venenatis lorem, nec posuere velit lectus at orci.
    </div>
    <div class="grid__column -desktop-5 about-images tablet-hidden">
      <img src="{{ Storage::url('galleri/galleri1.jpeg') }}" class="-top">
      <img src="{{ Storage::url('galleri/galleri4.jpeg') }}" class="-bottom">
    </div>
  </div>
@endcomponent

@include('components.certifications')

@endsection
