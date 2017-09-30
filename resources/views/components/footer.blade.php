<div class="footer -top">
  <ul class="list-inline">
    <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:+460706146703">073-746 05 12</a></li>
    <li class="mail"><i class="fa fa-envelope-square" aria-hidden="true"></i> {{ HTML::mailto('kontakt@bvk.se', 'kontakt@bvk.se') }}</li>
  </ul>
</div>
<div class="footer -bottom">
  <div class="grid">
    <div class="grid__column -desktop-5 -tablet-7 center-on-mobile margin-bottom-15">
      <h4 class="title -h4 -footer">Om oss</h4>
      <p class="paragraph -footer">Anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
    </div>
    <div class="grid__column -desktop-2 -tablet-1">
    </div>
    <div class="grid__column -desktop-2 -tablet-4 pull-right-tablet center-on-mobile margin-bottom-30">
      <h4 class="title -h4 -footer">BVK</h4>
      <ul>
        <li><a href="{{ url('/tjanster') }}" class="paragraph -footer">Våra tjänster</a></li>
        <li><a href="{{ url('/om-oss') }}" class="paragraph -footer">Om oss</a></li>
        <li><a href="{{ url('/galleri') }}" class="paragraph -footer">Galleri</a></li>
        <li><a href="{{ url('/kontakt') }}" class="paragraph -footer">Kontakt</a></li>
      <ul>
    </div>
    <div class="grid__column -desktop-3 -tablet-12 center-on-mobile pull-right">
      <h4 class="title -h4 -footer">Följ Oss</h4>
      <a href="http://www.facebook.com"><i class="fa fa-facebook-square social -facebook" aria-hidden="true"></i></a>
      <a href="http://www.instagram.com"><i class="fa fa-instagram social -instagram" aria-hidden="true"></i></a>
      <a href="http://www.twitter.com"><i class="fa fa-twitter-square social -twitter" aria-hidden="true"></i></a>
      <a href="http://www.twitter.com"><i class="fa fa-linkedin-square social -linkedin" aria-hidden="true"></i></a>
    </div>
    <div class="grid__column -desktop-6 -tablet-6 -footer-margin center-on-mobile">
      <p class="paragraph -footer -strong">© BVK {{ date('Y') }}</p>
    </div>
    <div class="grid__column -desktop-6 -tablet-6 -footer-margin pull-right center-on-mobile">
      <p class="paragraph -footer -strong">Skapad av WIDD Webb- och designbyrå</p>
    </div>
  </div>
</div>
