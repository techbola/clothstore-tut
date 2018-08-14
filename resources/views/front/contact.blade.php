@extends('layouts.main.master')

@section('content')

    <!--breadcrumb start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1>Get in touch!</h1>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="space-60"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>We would love to hear from you. </h3>
                <p>
                    Feel free to contact us by filling the form below.
                </p>
                <form name="sentMessage" id="contactForm" action="{{ route('contact.store') }}"  method="post">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">

                                    <input type="text" class="form-control" placeholder="Enter YourName" id="name" name="name" value="{{ old('name') }}" required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" value="{{ old('email') }}" required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <textarea rows="5" class="form-control" placeholder="Message" id="contact_message" name="contact_message" required="">{{ old('contact_message') }}</textarea>
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-skin btn-lg">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled contact contact-info">
                    <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> full address here</p></li>
                    <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">support@store.com</a></p></li>
                    <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +91 1800 2345 2132</p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space-60"></div>

@endsection
