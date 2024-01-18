@extends('layouts.app')


@section('content')


  
@isset($social)
  @include('partials._header',['social',$social])
@else
  @include('partials._header')
@endisset
 
	
  <style>
   

     
      @media only screen and (min-width: 768px) 
      {
        /* img.vbox-figlio
        {
          object-fit: contain;
          width: auto;
          height: 600px;
        } */
      }
      @media only screen and (max-width: 767px) 
      {
        /* img.vbox-figlio
        {
          object-fit: cover;
          width: auto;
          height: 700px;
        } */
      }

      
      img.vbox-figlio
        {
          object-fit: contain;
          width: 100%;
          height: 600px;
        }
      /* .img-show{
          object-fit: contain;
          width: 100%;
          height: 300px;
      } */
      /* a.vbox-next,a.vbox-prev{
        display: none !important;
      } */
     


       /* Customizing the pagination view */

    .page-link{
      background-color:#444 !important;
      color:white !important;
    }
    .page-item.active .page-link {
      background-color:#ee1a36 !important;
      border:none;
    }
    .page-link:hover{
      background-color:#ee1a36 !important;
      border:none;
    }
    .page-link:focus{
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgb(238 26 54 / 25%);
    }
    

  </style>


	<section id="portfolio" class="portfolio py-5" >
    <div class="container" data-aos="fade-up">

  

        <div class="row d-flex justify-content-center mb-4">
          <div class="col-lg-6 text-center">
            <h2 data-aos="flip-left"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="2000" >
                {{ $img_category->name }}
            </h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>


        

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">
          @foreach($img_category->images as $image)
            
          <div class="col-md-4 portfolio-item">
            <div class="portfolio-wrap">

              <img src="{{ asset('storage/images/'.$image->name) }}" class="img-fluid">

              <div class="portfolio-info w-100 h-100">
                
                <h4 class="invisible"><?=$img_category->name?></h4>
                
                <div class="portfolio-links w-100 h-100">
                  <a 
                    href="{{ asset('storage/images/'.$image->name) }}" 
                    data-gall="portfolioGallery" 
                    class="venobox" 
                    title="<?=$img_category->name?>"
                  >
                    <div style="width:800px;height:600px"></div>
                  </a>  
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
        

    </div>

    

  </section>

    <a href="https://api.whatsapp.com/send?phone=<?=$contacts->call  ?? '491711172776'?>&text=&source=&data=" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    
    @isset($categories)
      @include('partials._footer',['categories',$categories])
    @else
      @include('partials._footer')
    @endisset
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  
@endsection



  