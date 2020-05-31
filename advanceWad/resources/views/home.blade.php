@extends('layouts.header')


@section('header')
    @parent
@endsection

@section('container')
    <div class="row">
<div class="col-md-8">
    <div class="topic-block">

        <div class="user-head">
            <div class="pad-10">
            Anas
            </div>
        </div>
        <div class="q-desc">
            <a href="#">
            <div class="pad-10">
            <h2>Really good question</h2>
            <br>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae purus quis turpis hendrerit condimentum. Proin ut facilisis odio. Phasellus blandit mauris faucibus, luctus ipsum a, auctor est. Nam et ligula eget urna rutrum rhoncus vel eget augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            </a>
        </div>

    </div>
</div>
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
    <div class="row">
        <div class="col-md-8">
            <div class="topic-block">

                <div class="user-head">
                    <div class="pad-10">
                        Denys
                    </div>
                </div>
                <div class="q-desc">
                    <a href="#">
                        <div class="pad-10">
                            <h2>Really bad question</h2>
                            <br>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae purus quis turpis hendrerit condimentum. Proin ut facilisis odio. Phasellus blandit mauris faucibus, luctus ipsum a, auctor est. Nam et ligula eget urna rutrum rhoncus vel eget augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="topic-block">

                <div class="user-head">
                    <div class="pad-10">
                        Anas
                    </div>
                </div>
                <div class="q-desc">
                    <a href="#">
                        <div class="pad-10">
                            <h2>Really good question</h2>
                            <br>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae purus quis turpis hendrerit condimentum. Proin ut facilisis odio. Phasellus blandit mauris faucibus, luctus ipsum a, auctor est. Nam et ligula eget urna rutrum rhoncus vel eget augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
@endsection
