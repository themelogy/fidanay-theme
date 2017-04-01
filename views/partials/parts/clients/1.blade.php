<div id="owl-clients" class="owl-carousel our-clients-container">
    <div class="item"><img src="{!! Theme::url("images/logos/logo1.png") !!}" alt="client"></div>
    <div class="item"><img src="{!! Theme::url("images/logos/logo2.png") !!}" alt="client"></div>
    <div class="item"><img src="{!! Theme::url("images/logos/logo3.png") !!}" alt="client"></div>
    <div class="item"><img src="{!! Theme::url("images/logos/logo4.png") !!}" alt="client"></div>
    <div class="item"><img src="{!! Theme::url("images/logos/logo5.png") !!}" alt="client"></div>
    <div class="item"><img src="{!! Theme::url("images/logos/logo6.png") !!}" alt="client"></div>
    <div class="item"><img src="{!! Theme::url("images/logos/logo7.png") !!}" alt="client"></div>
</div>

@push('js_inline')
<script>
    //jQuery(document).ready START	------------------------------------------------
    jQuery(document).ready(function () {

        // Carousel CLIENTS Items-----------------------------------------------
        $("#owl-clients").owlCarousel({

            //Set AutoPlay to 3 seconds
            autoPlay: 5000,
            items: 5,
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // betweem 900px and 601px
            itemsTablet: [470, 1], //2 items between 600 and 0
            itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
            // itemsDesktop : [1199,4],
            // itemsDesktopSmall : [991,1],
            // itemsTablet: [991,1],
            // itemsMobile : false,

            //Pagination
            pagination: false,
            paginationNumbers: false,

        });

    });	//document ready -END
</script>
@endpush