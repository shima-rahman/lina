@extends('Layout\main')

@section('content')
        <div id="admin">
        <h2>Categories Admin Panel</h2><hr>
        <p>here you can view, delete and create new categories</p><hr>
        <h2>Categories</h2><hr>
        <ul>
                @foreach($categories as $category)
                    <li>{{$category->name}}-
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) !!}

                    {!!Form::submit('delete')!!}
                    {!!Form::close()!!}
                    </li>
                @endforeach
        </ul>

        <h2>Create new category</h2><hr>
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



                                {!!Form::open(array('route'=>'categories.store'))!!}
                                <p>
                                {!!Form::label('name')!!}
                                {!!Form::text('name')!!}
                                </p>


                                {!!Form::submit('Create Category', array('class'=>'secondary-cart-btn'))!!}

                                {!!Form::close()!!}



</div><!--end admin-->
@endsection