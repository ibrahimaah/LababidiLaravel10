
<style>
@media only screen and (max-width: 600px) {
  .logo-text {display:none !important}
}
.social-media-link{
    font-size: 18px;
    display: inline-block;
    background: #2d333b;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 5px;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s; 
}

</style>
<header id="header" class="fixed-top"><!-- class="fixed-top"-->
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto">
        <a href="#" class="facebook social-media-link"><i class="bx bxl-facebook" style="color:aliceblue"></i></a>
        <a href="#" class="instagram social-media-link"><i class="bx bxl-instagram" style="color:aliceblue"></i></a>
      </h1> -->
      
      <h1 class="logo mr-auto">
        @if($social_media->isNotEmpty())
          @foreach($social_media as $social)
            @if($social->active)
              <a href="{{ $social->link }}">
                <img src="{{ asset('storage/images/social_media_icons/'.$social->icon) }}"
                    alt="{{ $social->name }}">
              </a>
           @endif
          @endforeach 
        @endif
      </h1>





      <!-- <h1 class="logo mr-auto"><a href="{{ route('main') }}">LABABIDI BAU</a></h1> -->


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('main') }}">Home</a></li>
          <li><a href="{{ route('main') }}#leistungen">Leistungen</a></li>
          <li><a href="{{ route('portfolio-image') }}">Fotogalerie</a></li>
          <li><a href="{{ route('portfolio-video') }}">Videogalerie</a></li>
          <li><a href="{{ route('main') }}#Kontakt">Kontakt</a></li> 
        </ul>
      </nav>
      <!-- <a href="{{ route('portfolio-image') }}" class="get-started-btn scrollto">Portfolio Images</a> -->
      
    </div>
  </header>