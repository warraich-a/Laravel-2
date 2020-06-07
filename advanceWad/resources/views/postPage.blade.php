@extends('layouts.postHeader')


@section('header')
    @parent
@endsection

@section('container')
    <div class="row">
        <div class="col-md-12">
            <h6>{{$data->username}}</h6>
            <h2>{{$data->post_title}}</h2>
            <br>
            <p>{{$data->post_desc}}</p>
            <p></p>
            <br>
            <br>
            <form action="" method="POST">
                @csrf
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="Hello"><br>
                <label for="body">Body:</label><br>
                <input type="text" id="body" name="body" value="Hello, World!"><br><br>
                <input type="submit" value="Submit">
            </form>
            <br>

        </div>
        @foreach($comm as $i)
            {{$i->username}}
            <br>
            {{$i->comm_desc}}
            <br>
        @endforeach
    </div>


@endsection
