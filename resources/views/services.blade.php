@extends('layouts.bvk')

@section('content')

@component('components.titleHeader')
  @slot('title')
    Tjänster
  @endslot
  <li class="-thin">Tjänster</li>
@endcomponent

<div class="grid">
  <div class="grid__column -desktop-3 -tablet-5 services-tabs">
    <div class="services-tabs-nav no-js">
      <a href="" class="link -active" data-banan="1">Anläggning</a>
      <a href="" class="link" data-banan="2">Hisschakt</a>
      <a href="" class="link" data-banan="3">Trädgård</a>
      <a href="" class="link" data-banan="4">Jolles Allservice</a>
    </div>
  </div>
  <div class="grid__column -desktop-9 -tablet-7 services-infosection">
    <div class="infobox 1 -active">
      @component('components.container')
        @slot('title')
          Anläggning
        @endslot
          <div class="grid">
            <div class="grid__column -desktop-8 -tablet-12 -text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada sollicitudin ipsum, vitae placerat sem accumsan id. Vestibulum fringilla neque sed leo molestie, non venenatis justo dignissim. Quisque fringilla at dui eu vehicula. Praesent mauris enim, blandit tincidunt cursus nec, facilisis ut justo. Phasellus et lorem tincidunt, euismod orci at, suscipit metus. Nam quis porta magna, sed faucibus justo. Nunc cursus neque eu est rutrum iaculis. Proin a eleifend urna. Mauris tristique purus a turpis cursus rutrum. Curabitur ut vulputate ex.

              Vestibulum cursus scelerisque tincidunt. Fusce sed tincidunt libero. Pellentesque varius hendrerit dolor blandit interdum. Vestibulum turpis dui, commodo ac ante eu, consectetur laoreet metus. Nunc a ipsum faucibus augue aliquam porta. Quisque interdum rhoncus nunc a ornare. Vestibulum iaculis viverra turpis accumsan mattis. Vivamus cursus augue non dui tempus, ut efficitur est viverra. Proin augue purus, lobortis ut bibendum quis, finibus non tortor. Morbi interdum odio nec hendrerit vulputate. Aenean sagittis, mi id convallis tempor, neque nisl venenatis lorem, nec posuere velit lectus at orci.
            </div>
            <div class="grid__column -desktop-4 -tablet-12 -image">
              <img src="{{ Storage::url('galleri/galleri1.jpeg') }}">
            </div>
          </div>
      @endcomponent
    </div>
    <div class="infobox 2">
      @component('components.container')
        @slot('title')
          Hisschakt
        @endslot
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada sollicitudin ipsum, vitae placerat sem accumsan id. Vestibulum fringilla neque sed leo molestie, non venenatis justo dignissim. Quisque fringilla at dui eu vehicula. Praesent mauris enim, blandit tincidunt cursus nec, facilisis ut justo. Phasellus et lorem tincidunt, euismod orci at, suscipit metus. Nam quis porta magna, sed faucibus justo. Nunc cursus neque eu est rutrum iaculis. Proin a eleifend urna. Mauris tristique purus a turpis cursus rutrum. Curabitur ut vulputate ex.

          Vestibulum cursus scelerisque tincidunt. Fusce sed tincidunt libero. Pellentesque varius hendrerit dolor blandit interdum. Vestibulum turpis dui, commodo ac ante eu, consectetur laoreet metus. Nunc a ipsum faucibus augue aliquam porta. Quisque interdum rhoncus nunc a ornare. Vestibulum iaculis viverra turpis accumsan mattis. Vivamus cursus augue non dui tempus, ut efficitur est viverra. Proin augue purus, lobortis ut bibendum quis, finibus non tortor. Morbi interdum odio nec hendrerit vulputate. Aenean sagittis, mi id convallis tempor, neque nisl venenatis lorem, nec posuere velit lectus at orci.
      @endcomponent
    </div>
    <div class="infobox 3">
      @component('components.container')
        @slot('title')
          Trädgård
        @endslot
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada sollicitudin ipsum, vitae placerat sem accumsan id. Vestibulum fringilla neque sed leo molestie, non venenatis justo dignissim. Quisque fringilla at dui eu vehicula. Praesent mauris enim, blandit tincidunt cursus nec, facilisis ut justo. Phasellus et lorem tincidunt, euismod orci at, suscipit metus. Nam quis porta magna, sed faucibus justo. Nunc cursus neque eu est rutrum iaculis. Proin a eleifend urna. Mauris tristique purus a turpis cursus rutrum. Curabitur ut vulputate ex.

          Vestibulum cursus scelerisque tincidunt. Fusce sed tincidunt libero. Pellentesque varius hendrerit dolor blandit interdum. Vestibulum turpis dui, commodo ac ante eu, consectetur laoreet metus. Nunc a ipsum faucibus augue aliquam porta. Quisque interdum rhoncus nunc a ornare. Vestibulum iaculis viverra turpis accumsan mattis. Vivamus cursus augue non dui tempus, ut efficitur est viverra. Proin augue purus, lobortis ut bibendum quis, finibus non tortor. Morbi interdum odio nec hendrerit vulputate. Aenean sagittis, mi id convallis tempor, neque nisl venenatis lorem, nec posuere velit lectus at orci.
      @endcomponent
    </div>
    <div class="infobox 4">
      @component('components.container')
        @slot('title')
          Jolles Allservice
        @endslot
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada sollicitudin ipsum, vitae placerat sem accumsan id. Vestibulum fringilla neque sed leo molestie, non venenatis justo dignissim. Quisque fringilla at dui eu vehicula. Praesent mauris enim, blandit tincidunt cursus nec, facilisis ut justo. Phasellus et lorem tincidunt, euismod orci at, suscipit metus. Nam quis porta magna, sed faucibus justo. Nunc cursus neque eu est rutrum iaculis. Proin a eleifend urna. Mauris tristique purus a turpis cursus rutrum. Curabitur ut vulputate ex.

          Vestibulum cursus scelerisque tincidunt. Fusce sed tincidunt libero. Pellentesque varius hendrerit dolor blandit interdum. Vestibulum turpis dui, commodo ac ante eu, consectetur laoreet metus. Nunc a ipsum faucibus augue aliquam porta. Quisque interdum rhoncus nunc a ornare. Vestibulum iaculis viverra turpis accumsan mattis. Vivamus cursus augue non dui tempus, ut efficitur est viverra. Proin augue purus, lobortis ut bibendum quis, finibus non tortor. Morbi interdum odio nec hendrerit vulputate. Aenean sagittis, mi id convallis tempor, neque nisl venenatis lorem, nec posuere velit lectus at orci.
      @endcomponent
    </div>
  </div>
</div>

<div class="mobile-hidden">
  @component('components.container')
    @slot('title')
      Våra senaste projekt
    @endslot
    <div class="recent-projects-carousel">
      <div>
        <div class="grid">
            <div class="grid__column -desktop-4 -tablet-4">
              <div class="overlay">
                <div class="img-container">
                  <img src="{{ Storage::url('galleri/galleri1.jpeg') }}">
                </div>
                <div class="overlay-content">
                  <div class="overlay-info">
                    <h3 class="title -h3">Parkeringsgarage</h3>
                    <h6 class="title -h6 -overlay">Uppsala</h6>
                    <div class="breakline -overlay"></div>
                    <p class="paragraph -overlay">Anläggning av parkeringsgarage</p>
                  </div>
                </div>
              </div>
            </div>
          <div class="grid__column -desktop-4 -tablet-4">
            <div class="overlay">
              <div class="img-container">
                <img src="{{ Storage::url('galleri/galleri2.jpeg') }}">
              </div>
              <div class="overlay-content">
                <div class="overlay-info">
                  <h3 class="title -h3">Balkongmontage</h3>
                  <h6 class="title -h6 -overlay">Södertälje</h6>
                  <div class="breakline -overlay"></div>
                  <p class="paragraph -overlay">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid__column -desktop-4 -tablet-4">
            <div class="overlay">
              <div class="img-container">
                <img src="{{ Storage::url('galleri/galleri3.jpeg') }}">
              </div>
              <div class="overlay-content">
                <div class="overlay-info">
                  <h3 class="title -h3">Balkongmontage</h3>
                  <h6 class="title -h6 -overlay">Södertälje</h6>
                  <div class="breakline -overlay"></div>
                  <p class="paragraph -overlay">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endcomponent
</div>

@endsection
