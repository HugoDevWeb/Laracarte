@extends('layouts.default', ['title'=>'About'])

@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }} ?</h2>
        <p>Laracarte is a clone of <a href="https://laracarte.herokuapp.com/">Laramap.com</a></p>

        <div class="row">
            <div class="col-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i> This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve the <a href="#">source code</a>.</p>

        <hr>

        <h2>What is Laramap</h2>
        <p>Laramap is the website by which {{ env('APP_NAME') }} was inspired :)</p>
        <p>More info <a href="https://laramap.com/">here</a>.</p>

        <hr>

        <h2> Which tools and services are used in Laracarte ?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services usd for email and another section</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop