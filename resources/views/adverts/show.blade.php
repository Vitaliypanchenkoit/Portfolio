@extends ('layouts.main_layout')

@section('content')
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>

    	<div class="product">
        	<div class="col col_2 product_preview">
	            <a><img src="/storage/images/{{ $advert->photomain }}" class=" left" alt="image" style="width:200px;height:200px;" /></a>
                <div class="clear"></div>
            </div>
            <div class="col col_2 product_detail">
                <h1 style="text-align:center;"> Advert {{ $advert->id }} </h1>
                <p style="text-align:left; font-size: 16px;"><a href="{{ route('getCategory', ['id' => $category->id]) }}"> Category: {{ $category->title }}</a></p>

                <div class="clear h20"></div>
                <p class="price" style="text-align:center;">{{ $advert->title }}</p><br />
                <h3 style="text-align:left;"> Seller: {{ $user->name }} </h3>
                <h3 style="text-align:left;"> Phone: {{ $user->phone }} </h3>
                <h3 style="text-align:left;"> Email: {{ $user->email }} </h3>
                <br></br>
                <p style="font-size: 14px;">{{$advert->description}}</p><br />

                @if (Auth::check())
                    @if ( Auth::user()->id == $user->id)

                    <form action="{{ route('adverts.destroy', [$advert]) }}" method="POST" >
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Delete advert"/>
                    </form><br />

                    <a href="{{ route('adverts.edit', [$advert->id]) }}">
                        <button type="button">Edit advert</button>
                    </a>

                    @endif
                @endif

            <div class="">
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <hr />
@endsection