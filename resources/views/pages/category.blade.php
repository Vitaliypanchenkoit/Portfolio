@extends ('layouts.main_layout')

@section('content')
    <style>
        th, td {
            text-align:left;
            padding: 8px;
            line-height: 1.2;
        }
    </style>
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>

    	<div class="product">
        	<div class="col col_2 product_preview">
	            <a><img src="{{ asset($category->image) }}" class=" left" alt="image" style="width:200px;height:200px;" /></a>
                <div class="clear"></div>
            </div>
            <div class="col col_2 product_detail">
            	<h1 style="text-align:center;">Category {{ $category->id }} </h1>
                <div class="clear h20"></div>
              <p class="price" style="text-align:center;">{{ $category->title }}</p>
            <div class="">
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <hr />

    <h2 style="text-align:center;">Adverts:</h2>

        <div class="row">
            <table style="width: 100%; font-size: 16px;">
                <thead>
                    <tr>
                    <th>Id:</th>
                    <th>Advert:</th>
                    <th>Price:</th>
                    <th>Photo:</th>
                    <th>Description:</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($adverts != NULL)
                        @foreach($adverts as $advert)
                            <tr>
                                <td>{{ $advert->id }}</td>
                                <td><a href="{{ route('adverts.show', [$advert->id]) }}">{{ $advert->title }}</a></td>
                                <td>{{ $advert->price }}</td>
                                <td><img src="/storage/images/{{ $advert->photomain }}"  alt="image" style="width:50px;height:50px;" /></td>
                                <td>{{ substr($advert->description, 0, 50) }}</td>
                            </tr><br />
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>


        <div class="clear"></div>
@endsection