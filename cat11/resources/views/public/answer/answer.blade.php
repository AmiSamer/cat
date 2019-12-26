@extends('public.master')

@section('title')
    Cat Life || Reply
@endsection


@section('body')
    <!-- reply -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-lg-8">
                <h1 class="text-center">
                    <b> <p><h2 style="font-family: 'Brush Script MT'">Dear</h2></p> <i>{{Session::get('customerName')}}</i> </b>
                    <br>
                    <br>
                    <p><h2>Thank you for contacting us. We will carefully read your valuable message and reply you soon.</h2></p>
                    <br>
                    <br>
                    <br>
                </h1>

            </div>
        </div>
    </div>
    <!-- //reply -->
@endsection

