@extends('layouts.main')

@section('main.header.class', 'home-header')

@section('main.header')
    <div class="block-xs-middle p-b-lg">
        <div class="container text-center">
                <img class="Jumbotron__image headshot img-circle" src="/img/headshot.png" alt="Ben Wilson Headshot"/>
                <div class="Jumbotron__body">
                    <h2 class="Jumbotron__heading">
                        Hi, I'm Ben!
                    </h2>
                    <p class="lead">
                        Full-Stack Dev | Data Nerd<br>
                        IoT Maker | Lifelong Learner
                    </p>
                    <p class="lead">
                        Using open source and modern developement tools <br>
                        I bring ideas to life, discover new solutions, and unlock insights
                    </p>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-4">
                            <a class="btn btn-success btn-block btn-lg" href="/about">Just look at what I've done</a>
                        </div>
                    </div>
                    <p class="lead">Think what I could do for you!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

@endsection
