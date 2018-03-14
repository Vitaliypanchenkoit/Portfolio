@extends ('layouts.main_layout')

@section('content')
<style>
    th, td {
        text-align:left;
        padding: 8px;
        line-height: 1.2;
    }
</style>

<h2 style="text-align:center;">Searching results</h2>

<div class="row">
    <table style="width: 100%; font-size: 16px;">
        <thead>
            <tr>
            <th>Id:</th>
            <th>Advert:</th>
            <th>Price:</th>
            <th>Photo:</th>
            <th>Description:</th>
            <th>Category:</th>
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
                        <td>{{ $advert->description }}</td>
                        <?php $category = $advert->category;?>
                        <td><a href="{{ route('getCategory', ['id' => $category->id]) }}"> Category: {{ $category->title }}</a></td>
                    </tr><br />
                @endforeach
            @endif
        </tbody>
    </table>
</div>


<div class="clear"></div>



@endsection