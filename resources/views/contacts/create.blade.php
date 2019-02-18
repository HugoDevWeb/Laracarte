@extends('layouts.default', ['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-10 offset-1 ">
                <h2>Get in Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a
                            href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a></p>

                <form action="{{ action('ContactController@store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name"
                               class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}  ">
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>')  !!}
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                               class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>')  !!}
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Message</label>
                        <textarea id="message" name="message" cols="10" rows="10" placeholder="Enter your message"
                                  class="form-control {{ $errors->has('message') ? 'is-invalid' : ''}} "></textarea>
                        {!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block">Submit Enquiry <i
                                    class="fa fa-angle-double-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop