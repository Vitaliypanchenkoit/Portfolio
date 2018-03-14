<?php
  use App\Category;
  $categories = Category::all();
?>
<div id="categories"></div>
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    	<div class="product">
        	<h1>All Categories</h1>
            @foreach ($categories as $category)
            <div class="product_box">
            	<div class="img_box"><span></span>
	                <a href="{{ route('getCategory', ['id' => $category->id]) }}"><img src="{{ $category->image }}" alt="image" /></a>
				</div>
                <h2><a href="{{ route('getCategory', ['id' => $category->id]) }}">Category {{ $category->id }}</a></h2>
                <p class="price">{{ $category->title }}</p>
            </div>
            @endforeach
        </div>

        <div class="clear"></div>
    </div> <!-- END of main -->
