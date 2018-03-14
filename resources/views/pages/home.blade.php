@extends ('layouts.main_layout')

@section ('content')

<div id="tooplate_slider" class="section_content"><span class="frame"></span>
        <div id="carousel">


            <a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
            <a href="javascript:void(0);" class="next" title="Next">Next</a>

<div id="slider-image-frame">
                <div class="backgrounds">

                    <div class="item item_1">
                        <img src="template/images/slider/01.jpg" alt="image" />
                    </div><!-- /item -->

                    <div class="item item_2">
                        <img src="template/images/slider/02.jpg" alt="image" />
                    </div><!-- /item -->

                    <div class="item item_3">
                        <img src="template/images/slider/03.jpg" alt="image" />
                    </div><!-- /item -->

                </div><!-- /backgrounds -->
            </div>
        </div>
        <div class="clear"></div>
    </div> <!-- END of slider -->

    @include ('layouts.list_of_categories')

</div> <!-- END of wrapper -->
@endsection