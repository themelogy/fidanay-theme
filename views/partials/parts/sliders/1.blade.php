@if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false)
@if($slide = Slide::findBySlug('anasayfa'))
    @if(count($slide)>0)
    <div class="tp-banner-container indent-header-2 page-main-content">
        <div class="tp-banner">
            <ul>
                @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                <!-- SLIDE 1 -->
                <li data-transition="zoomin" data-slotamount="7" data-masterspeed="500" data-thumb="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 360, 'height' => 240, 'mode' => 'fit', 'quality' => 80]) }}" data-saveperformance="off" data-title="{{ $slider->title }}">

                    <!-- MAIN IMAGE -->
                    <img src="{!! Theme::url('images/revo-slider/dummy.png') !!}"
                         alt="{{ $slider->title }}"
                         data-lazyload="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 1910, 'height' => 650, 'mode' => 'fit', 'quality' => 80]) }}"
                         data-bgrepeat="no-repeat"
                         data-bgposition="right top"
                         data-kenburns="on"
                         data-duration="15000"
                         data-ease="Linear.easeNone"
                         data-bgfit="110"
                         data-bgfitend="100"
                         data-bgpositionend="left bottom">
                    <!-- LAYERS -->

                    @if(!empty($slider->title))
                    <!-- LAYER NR. 5  TEXT-->
                    <div class="tp-caption slider-1-cap-bg30 sfr fadeout tp-resizeme rs-parallaxlevel-0"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+130 }}"
                         data-speed="300"
                         data-start="2000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap; font-size: 26px; line-height: 28px;">{!! $slider->title !!}
                    </div>
                    @endif

                    @if(!empty($slider->content))
                    <!-- LAYER NR. 8 TEXT -->
                    <div class="tp-caption slider-1-content-container customin tp-resizeme rs-parallaxlevel-0  disp-none-767"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+218 }}"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2600"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.1"
                         style="z-index: 14; max-width: auto; max-height: auto; white-space: nowrap; font-family: 'OswaldLight', Arial, Helvetica, sans-serif !important;">
                        <div>
                            {!! $slider->content !!}
                        </div>
                    </div>
                    @endif

                    @if($slider->link_type != 'none')
                    <!-- LAYER NR. 11 READ MORE-->
                    <div class="tp-caption customin customout tp-resizeme rs-parallaxlevel-0"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+300 }}"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2900"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-linktoslide="next"
                         style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a target="{{ $slider->link->target }}" href='{{ $slider->link->url }}' class='slider-1-largeredbtn'>{{ $slider->link->title }}</a>
                    </div>

                    <!-- LAYER NR. 12 ARROW -->
                    <div class="tp-caption arrowicon customin rs-parallaxlevel-0 disp-none-767"
                         data-x="{{ $slider->position_x+(strlen($slider->link->title)*8) }}"
                         data-y="{{ $slider->position_y+315 }}"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="300"
                         data-start="3200"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-linktoslide="next"
                         style="z-index: 13;">
                        <div class=" rs-slideloop" data-easing="Power3.easeInOut"
                             data-speed="0.5"
                             data-xs="-5"
                             data-xe="5"
                             data-ys="0"
                             data-ye="0"
                        >
                            <img src="{!! Theme::url('images/revo-slider/dummy.png') !!}" alt="" data-ww="15" data-hh="15" data-lazyload="{!! Theme::url('images/revo-slider/slider-1-arrow.png') !!}">
                        </div>
                    </div>
                    @endif

                </li>
                @endforeach
            </ul>

            <!-- <div class="tp-bannertimer"></div>-->
        </div>
    </div>

    @push('scripts')
    {!! Theme::script('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
    {!! Theme::script('vendor/rs-plugin/js/jquery.themepunch.revolution-custom.min.js') !!}
    @endpush

    @push('js_inline')
    <script>
        //jQuery(document).ready START	------------------------------------------------
        jQuery(document).ready(function () {

            //REVOSLIDER SCRIPT-----------------------------------------------------
            jQuery('.tp-banner').show().revolution(
                    {
                        dottedOverlay: "none",
                        delay: 16000,
                        startwidth: 1170,
                        //startheight:885,
                        startheight: 650,
                        hideThumbs: 0,
                        //hideArrows:100000,

                        thumbWidth: 100,
                        thumbHeight: 50,
                        thumbAmount: 5,

                        navigationType: "bullet",
                        navigationArrows: "nexttobullets",
                        navigationStyle: "preview4",

                        hideTimerBar: "on",

                        touchenabled: "on",
                        onHoverStop: "on",

                        swipe_velocity: 0.7,
                        swipe_min_touches: 1,
                        swipe_max_touches: 1,
                        drag_block_vertical: false,

                        parallax: "mouse",
                        parallaxBgFreeze: "on",
                        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                        keyboardNavigation: "off",

                        navigationHAlign: "left",
                        navigationVAlign: "bottom",
                        navigationHOffset: 15,
                        navigationVOffset: 160,

                        soloArrowLeftHalign: "left",
                        soloArrowLeftValign: "center",
                        soloArrowLeftHOffset: 20,
                        soloArrowLeftVOffset: 0,

                        soloArrowRightHalign: "right",
                        soloArrowRightValign: "center",
                        soloArrowRightHOffset: 20,
                        soloArrowRightVOffset: 0,


                        shadow: 0,
                        fullWidth: "on",
                        fullScreen: "off",

                        spinner: "spinner4",

                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,

                        shuffle: "off",

                        autoHeight: "off",
                        forceFullWidth: "off",


                        hideThumbsOnMobile: "on",
                        hideNavDelayOnMobile: 1500,
                        hideBulletsOnMobile: "on",
                        hideArrowsOnMobile: "on",
                        hideThumbsUnderResolution: 0,
                        //hideArrowsOnMobile:"on",

                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        startWithSlide: 0,
                        videoJsPath: "video/",
                        fullScreenOffsetContainer: ""
                    });
        });
    </script>
    @endpush
    @endif
@endif
@endif