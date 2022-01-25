@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="hero" class="row">
        <div class="col-md-6">
            <img alt="New Year, New Places" class="contest-name" src="/images/san-francisco-new-year-new-places.png" />
            <p>Enter to win a trip to San Francisco to explore the city's newest attractions, including the <strong>SkyStar&nbsp;Wheel, Salesforce&nbsp;Park,</strong> and the acrobatic show <strong><em>Dear&nbsp;San&nbsp;Francisco.</em></p>
            <form>
                <input type="email" id="email" name="email" placeholder="YOUR EMAIL" required>
                <input type="submit" value="ENTER TO WIN">
            </form>
            <p class="small">By entering you'll subscribe to GayCities, LGBTQ Nation, Queerty, and SFTA's newsletter.<br />You can always unsubscribe. <a href="/somewhere-else/"><strong>Read the full rules.</strong></a></p>
        </div>
        <div class="col-md-6">
        </div>
    </div>
    <div class="row">
        <div id="acrobats" class="col-xs-6 col-md-3">
        </div>
        <div id="food" class="col-xs-6 col-md-3">
        </div>
        <div id="prizes" class="col-xs-12 col-md-6 px-0">
            <div class="header">PRIZE PACKAGE INCLUDES:</div>
            <div class="lighten"><img class="checkmark" src="/images/orange-checkmark.png" /> 2 nights at <strong>Westin San Francisco</strong></div>
            <div class=""><img class="checkmark" src="/images/orange-checkmark.png" /> 2 tickets to <em><strong>Dear San Francisco</strong></em></div>
            <div class="lighten"><img class="checkmark" src="/images/orange-checkmark.png" /> <strong>$200</strong> dining certificate</div>
        </div>
        </div>
    </div>
</div>
@endsection
