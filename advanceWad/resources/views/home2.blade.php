@extends('layouts.header')


@section('header')
    @parent
@endsection

@section('container')

    <div class="row">
        @foreach($data as $i)


            <div class="col-md-8">
                <div class="topic-block">

                    <div class="user-head">
                        <div class="pad-10">
                            {{$i->username}}
                        </div>
                    </div>
                    <div class="q-desc">

                        <a href="{{url('/posts/'.$i->id.'')}}">
                            <div class="pad-10">
                                <h2>{{$i->post_title}}</h2>
                                <br>

                                <p> {{$i->post_desc}}</p>
                            </div>
                        </a>
                    </div>


                </div>
                <br>
                <br>
            </div>



        @endforeach

        <div class="col-md-4">
            <div id="search-div">
                <div id="search-txt">
                    <input id="search-inp" placeholder="Search..">
                </div>
                <div id="btn-search">
                    <center>
                        <div id="img-search"></div>
                    </center>
                </div>
                <div id="btn-adv-search">
                    <center>
                        <div id="img-search-adv"></div>
                    </center>
                </div>
            </div>
            <br>
            <hr id="crad-hr">
            <br>
            <p>Sidebar</p>
        </div>
    </div>
    <br>


    </div>
@endsection
