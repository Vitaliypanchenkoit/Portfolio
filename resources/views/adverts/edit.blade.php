@extends ('layouts.main_layout')

@section('content')
<form action="{{ route('adverts.update', ['advert' => $advert]) }}" enctype = "multipart/form-data" method="POST">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <h3> Select your region </h3><br />
    <select name="region_id"><br />
        @foreach($regions as $region)
            <option value= {{ $region->id }} > {{$region->name}} </option>
        @endforeach
    </select><br /><br />
    <h3>Title</h3><br />
    <input type="text" name="title" value="{{ $advert->title }}"/><br />
    <h3> Category </h3><br />
    <select name="category_id"><br />
        @foreach($categories as $category)
            <option value= {{ $category->id }} > {{ $category->title }} </option>
        @endforeach
    </select><br /><br />
    <h3>Price</h3><br />
    <input type="text" name="price" value="{{ $advert->price }}"/><br />
    <h3>Description</h3><br />
    <textarea name="description" rows="20" cols="100">
    {{ $advert->description }}
    </textarea><br />
    <input type="file" name="image" value="{{ $advert->photomain }}"><br />
    <input type="submit" value="Update" /><br />
</form>

@endsection