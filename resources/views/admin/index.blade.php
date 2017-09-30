@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="well">
        <div class="col-sm-12 text-center">
          <h3 class="margin-top-1 margin-bottom-10">Kontaktuppgifter</h3>
          <p class="margin-bottom-25"><strong>OBS!</strong> Telefonnumret kommer att skrivas ut exakt som det skrivs i formuläret nedan, tänk på att inte lägga till några konstiga tecken då telefonnumret även kommer att fungera som en "ring upp"-länk.</p>
        </div>
          {{ Form::open(['class' => 'form-horizontal', 'route' => 'edit_contact_information']) }}
            {{ method_field('PUT') }}
            <div class="form-group {{ !$errors->has('success') && !empty($errors->get('phone')) ? 'has-error has-feedback' : '' }}">
              <div class="col-sm-4">
                {{ Form::label('phone', 'Telefonnummer', ['class' => 'control-label']) }}
              </div>
              <div class="col-sm-8">
                {{ Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' => '070-XXX XX XX']) }}
                <span class="{{ !$errors->has('success') && !empty($errors->get('phone')) ? 'glyphicon glyphicon-remove form-control-feedback' : '' }}"></span>
              </div>
            </div>
            <div class="form-group {{ !$errors->has('success') && !empty($errors->get('email')) ? 'has-error has-feedback' : '' }}">
              <div class="col-sm-4">
                {{ Form::label('email', 'E-postadress', ['class' => 'control-label']) }}
              </div>
              <div class="col-sm-8">
                {{ Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'E-postadress']) }}
                <span class="{{ !$errors->has('success') && !empty($errors->get('email')) ? 'glyphicon glyphicon-remove form-control-feedback' : '' }}"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 margin-top-10">
                {{ Form::submit('Spara Kontaktuppgifter', ['class' => 'btn btn-success btn-block']) }}
              </div>
            </div>
          {{ Form::close() }}
      </div>
    </div>

    <div class="col-sm-12 col-md-6">
      <div class="well">
        <div class="col-sm-12 text-center">
          <h3 class="margin-top-1 margin-bottom-10">Sociala Medier</h3>
          <p class="margin-bottom-25">Bocka för de sociala medier ni vill ha som länkar på sidan och skriv in url-adressen till profilen.</p>
        </div>
          {{ Form::open(['class' => 'form-horizontal']) }}
            <div class="form-group">
              <div class="col-xs-4">
                <input type="checkbox" name="facebook" id="facebook" autocomplete="off"/>
                    <div class="btn-group">
                        <label for="facebook" class="btn">
                            <span class="fa fa-check-square-o fa-lg"></span>
                            <span class="fa fa-square-o fa-lg"></span>
                            <span class="content">Facebook</span>
                        </label>
                    </div>
              </div>
              <div class="col-sm-8">
                {{ Form::text('facebook-url', "", ['class' => 'form-control', 'placeholder' => 'http://www.facebook.com......']) }}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-4">
                <input type="checkbox" name="instagram" id="instagram" autocomplete="off"/>
                    <div class="btn-group">
                        <label for="instagram" class="btn">
                            <span class="fa fa-check-square-o fa-lg"></span>
                            <span class="fa fa-square-o fa-lg"></span>
                            <span class="content">Instagram</span>
                        </label>
                    </div>
              </div>
              <div class="col-sm-8">
                {{ Form::text('instagram-url', "", ['class' => 'form-control', 'placeholder' => 'http://www.instagram.com......']) }}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-4">
                <input type="checkbox" name="twitter" id="twitter" autocomplete="off"/>
                    <div class="btn-group">
                        <label for="twitter" class="btn">
                            <span class="fa fa-check-square-o fa-lg"></span>
                            <span class="fa fa-square-o fa-lg"></span>
                            <span class="content">Twitter</span>
                        </label>
                    </div>
              </div>
              <div class="col-sm-8">
                {{ Form::text('twitter-url', "", ['class' => 'form-control', 'placeholder' => 'http://www.twitter.com......']) }}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-4">
                <input type="checkbox" name="linkedin" id="linkedin" autocomplete="off"/>
                    <div class="btn-group">
                        <label for="linkedin" class="btn">
                            <span class="fa fa-check-square-o fa-lg"></span>
                            <span class="fa fa-square-o fa-lg"></span>
                            <span class="content">Linkedin</span>
                        </label>
                    </div>
              </div>
              <div class="col-sm-8">
                {{ Form::text('linkedin-url', "", ['class' => 'form-control', 'placeholder' => 'http://www.linkedin.com......']) }}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 margin-top-10">
                {{ Form::submit('Spara Ändringar', ['class' => 'btn btn-success btn-block']) }}
              </div>
            </div>
          {{ Form::close() }}
      </div>
    </div>
  </div>
</div>

@endsection
