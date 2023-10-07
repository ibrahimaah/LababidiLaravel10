<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords','LABABIDI')">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Google Fonts -->
    

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">


    

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}" />
    
    <!-- Whatsapp floating Icon --->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!----------------------------------------->
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <!-------------------------  Tinymce -------------------------------------------->
    <!-- <script src="https://cdn.tiny.cloud/1/qr5ycpvo2ogg9vlwgxegmeg13hccvqppgw5nnv76clp6cpbs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    <script src="https://cdn.tiny.cloud/1/l86ybdpz6cixgvcq47wqlesdrxxda0gc8ktjfbintv0zzt7q/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!------------------------------------------------------------------------------------------------------>



  



    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>@yield('title','LABABIDI BAU')</title>
</head>
<body>


    @yield('content')

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    
    <!--- jQuery Cookies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    

    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/cbpGridGallery.js') }}"></script>


    
    <!--------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    <script>
        new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
    </script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
    //Upload image in Portfolio page
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>


    <script>
        //  Set caption from card text
        $('.card-deck a').fancybox({
        caption : function( instance, item ) {
            return $(this).parent().find('.card-text').html();
        }
        });
    </script>


    <!-- Show Bootstrap 4 Popup just once  -->
    <script type="text/javascript">
    
        $(window).on('load', function() 
        {
            //$('#popup').modal('show');
            active = $('#popup').data('active')
            
            if(active==1)
            {
                if ($.cookie('pop') == null) 
                {
                    $('#popup').modal('show');
                    var date = new Date();
                    var minutes = 30;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('pop', '1',{ expires: date });//timeout = 30 minutes
                }
            }
        });

    </script>


</body>
</html>