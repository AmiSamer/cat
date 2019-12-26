@extends('public.master')

@section('title')
    Cat Life || Our Members
@endsection


@section('body')
    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <div class="row">
            <h3 class="agile-title">Our Team</h3>

            <div class="team-agileinfo-left">
                <div class="offset-4 col-md-9 team-grid w3-agileits">
                    @foreach($members as $member)
                    <div class="team-grid-right aliquam">
                        <img src="{{$member->main_image}}" alt=" " class="img-responsive" />
                        <br>
                    </div>
                    <div class=" team-grid-left non">
                        <h4>{{$member->full_name}}</h4>
                        <p>{{$member->introduction}}</p>
                    </div>
                    <div class="clearfix"> </div>
                    @endforeach
                </div>
                <div class="clearfix"> </div>
            </div>
            </div>

        </div>
    </div>
    <!-- //team -->
@endsection

