



  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('main') }}">LABABIDI-BAU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Home Page
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('admin-slider') }}">
            Slider
          </a>
          <a class="dropdown-item" href="{{ route('edit-admin-about') }}">
            About
          </a>
          <a class="dropdown-item" href="{{ route('admin-about-services') }}">
            About Us - Services
          </a>
          <a class="dropdown-item" href="{{ route('admin-counter') }}">
            Counters
          </a>
          <a class="dropdown-item" href="{{ route('admin-category') }}">
            Categories
          </a>
          <a class="dropdown-item" href="{{ route('admin-contact') }}">
            Contact
          </a>
        </div>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Media
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('admin-image') }}">
            Images
          </a>
          <a class="dropdown-item" href="{{ route('admin-video') }}">
            Videos
          </a>
        </div>
      </li>


      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin-social-media-links') }}">SocialMediaLinks</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ads
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('admin-popup') }}">
            Popup
          </a>
          <a class="dropdown-item" href="{{ route('admin-popup-img-link') }}">
            Popup Image Link
          </a>
          <a class="dropdown-item" href="{{ route('admin-advertisement') }}">
            Advertisement Page
          </a>
          <a class="dropdown-item" href="{{ route('admin-tinymce-img') }}">
            Tinymce Images
          </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Important Links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('admin-imprint') }}">Imprint</a>
          <a class="dropdown-item"href="{{ route('admin-privacy') }}">PrivacyPolicy</a>
          <a class="dropdown-item" href="{{ route('admin-job') }}">Jobs</a>
          <a class="dropdown-item" href="{{ route('admin-job-create') }}">Add Job</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome Mohammad
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('admin-password') }}">Change Password</a>
          
          <a class="dropdown-item" href="#">
            <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" value="Logout" class="btn btn-outline-danger w-100">
          </form>
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>