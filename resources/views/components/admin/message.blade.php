@if (Session::has('success'))
  <div class="success-message">
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{ Session::get('success') }}
    </div>
  </div>
  <script>
    $('.success-message').hide();
    $('.success-message').fadeIn("slow");
  </script>
@elseif ( !$errors->has('success') && !empty($errors->all()))
  <div class="error-message">
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      @foreach ($errors->all() as $error)
        {{ $error }} <br>
      @endforeach
    </div>
  </div>
  <script>
    $('.error-message').hide();
    $('.error-message').fadeIn('slow');
    $('.error-message').delay(5000).fadeOut('slow');
  </script>
@endif
