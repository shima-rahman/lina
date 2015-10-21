@extends('Layout\main')

@section('content')
        <div id="admin">
        <h2>Categories Admin Panel</h2><hr>
        <p>here you can view, delete and create new categories</p><hr>
        <h2>Categories</h2><hr>
        <ul>
                @foreach($products as $product)

                    <li>
                    <img src="{{asset("img/main-product.png")}}" alt="Product" width="80px">
                    {{$product->title}}-
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('products.destroy', $product->id))) !!}

                    {!!Form::submit('delete')!!}
                    {!!Form::close()!!}-

{!! Form::open(array('class' => 'form-inline', 'url' => array('availability', $product->availability))) !!}
{!!Form::select('availability', array('1'=>'In Stock','0'=>'Out of Stock'),$product->availability)!!}
                    {!!Form::submit('Update')!!}
                    {!!Form::close()!!}
                    </li>
                @endforeach
        </ul>

        <h2>Create new Product</h2><hr>
            @if($errors->has())
            <div class="form-errors">
            <p>the following error have occured:</p>
            <ul>
                @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                @endforeach

            </ul>
            </div>
            @endif



                                {!!Form::open(array('route'=>'products.store','files'=>'true'))!!}
                                <p>
                                {!!Form::label('category_id','Category')!!}
                                {!!Form::select('category_id',$categories)!!}
                                </p>
                                <p>
                                {!!Form::label('Title')!!}
                                {!!Form::text('title')!!}
                                </p>
                                <p>
                                {!!Form::label('Description')!!}
                                {!!Form::textarea('description')!!}
                                </p>
                                <p>
                                {!!Form::label('price')!!}
                                {!!Form::text('price')!!}
                                </p>
                                <p>
                                {!!Form::label('choose an image')!!}
                                {!!Form::file('image')!!}
                                <p>
                                {!!Form::submit('Create Product', array('class'=>'btn btn-primary'))!!}
                                </p>
                                {!!Form::close()!!}
                                </p>

</div><!--end admin-->
@endsection