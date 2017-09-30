@extends('layouts.bvk')

@section('content')

<div class="index -bigimage">
  <div class="text-box">
    <h1 class="title -h1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
    <div class="breakline -header"></div>
    <h2 class="title -h2">In ac tempus orci. Suspendisse vestibulum leo orci, et consequat mauris mattis mattis. Nulla ornare nisi arcu, eget condimentum eros faucibus eu.</h2>
  </div>
</div>

<div class="margin-top-40">
  @component('components.container')
    @slot('title')
      Tjänster
    @endslot
    <div class="grid">
      <div class="grid__column -desktop-6 services">
        <div class="grid">
          <div class="grid__column -desktop-4 -tablet-4">
            <div class="img-container">
              <img src="{{ Storage::url('galleri/galleri1.jpeg') }}">
            </div>
          </div>
          <div class="grid__column -desktop-8 -tablet-8 service-description">
            <h2 class="title -container -dark -slim">Balkongmontage</h2>
            <div class="breakline -services"></div>
            <p class="paragraph -container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tempus orci. Suspendisse vestibulum leo orci, et consequat mauris mattis mattis. Nulla ornare nisi arcu, eget condimentum eros </p>
            <a class="read-more" href="balkongmontage.php">Läs mer</a>
          </div>
        </div>
      </div>
      <div class="grid__column -desktop-6 services">
        <div class="grid">
          <div class="grid__column -desktop-4 -tablet-4">
            <div class="img-container">
              <img src="{{ Storage::url('galleri/galleri2.jpeg') }}">
            </div>
          </div>
          <div class="grid__column -desktop-8 -tablet-8 service-description">
            <h2 class="title -container -dark -slim">Industrihallar</h2>
            <div class="breakline -services"></div>
            <p class="paragraph -container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tempus orci. Suspendisse vestibulum leo orci, et consequat mauris mattis mattis. Nulla ornare nisi arcu, eget condimentum eros </p>
            <a class="read-more" href="balkongmontage.php">Läs mer</a>
          </div>
        </div>
      </div>
      <div class="grid__column -desktop-6 services">
        <div class="grid">
          <div class="grid__column -desktop-4 -tablet-4">
            <div class="img-container">
              <img src="{{ Storage::url('galleri/galleri3.jpeg') }}">
            </div>
          </div>
          <div class="grid__column -desktop-8 -tablet-8 service-description">
            <h2 class="title -container -dark -slim">Betonghåltagning</h2>
            <div class="breakline -services"></div>
            <p class="paragraph -container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tempus orci. Suspendisse vestibulum leo orci, et consequat mauris mattis mattis. Nulla ornare nisi arcu, eget condimentum eros </p>
            <a class="read-more" href="balkongmontage.php">Läs mer</a>
          </div>
        </div>
      </div>
      <div class="grid__column -desktop-6 services">
        <div class="grid">
          <div class="grid__column -desktop-4 -tablet-4">
            <div class="img-container">
              <img src="{{ Storage::url('galleri/galleri5.jpeg') }}">
            </div>
          </div>
          <div class="grid__column -desktop-8 -tablet-8 service-description">
            <h2 class="title -container -dark -slim">Anläggning</h2>
            <div class="breakline -services"></div>
            <p class="paragraph -container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tempus orci. Suspendisse vestibulum leo orci, et consequat mauris mattis mattis. Nulla ornare nisi arcu, eget condimentum eros </p>
            <a class="read-more" href="balkongmontage.php">Läs mer</a>
          </div>
        </div>
      </div>
    </div>
    <div class="grid">
      <div class="grid__column -desktop-12 -text-center">
        <a href="{{ url('/tjanster') }}" class="button margin-top-10">Se alla tjänster</a>
      </div>
    </div>
  @endcomponent
</div>

<div class="margin-top-40">
  @component('components.container')
    @slot('title')
      Galleri
    @endslot
    <div class="carousel">
      @include('components.gallery')
    </div>
    <div class="grid">
      <div class="grid__column -desktop-12 -text-center">
        <a href="{{ url('/galleri') }}" class="button margin-top-10 margin-bottom-40">Se alla bilder</a>
      </div>
    </div>
  @endcomponent
</div>

@include('components.certifications')

@endsection
