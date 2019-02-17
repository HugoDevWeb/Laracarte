@extends('layouts.default', ['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 ">
                <h2>Get in Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:hugolavergne0@gmail.com">ask for help</a></p>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label sr-only">Message</label>
                        <textarea class="form-control" required name="message" id="message" rows="10" cols="10"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block">Submit Enquiry <i class="fa fa-angle-double-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop