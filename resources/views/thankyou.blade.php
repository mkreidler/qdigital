@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="hero" class="row">
        <div class="col-md-6">
            <img alt="New Year, New Places" class="contest-name" src="/images/san-francisco-new-year-new-places.png" />
            <h2 style="text-align:center">Thank you for entering!</h2>
            <h3 style="text-align:center">Please add additional means of contact in case you win.</h3>
            <form action="" method="POST" class="thank-you">
                <input type="text" id="phone" name="phone" placeholder="PHONE NUMBER">
                <input type="text" id="" name="instagram" placeholder="INSTAGRAM USERNAME">
                <input type="text" id="" name="facebook" placeholder="FACEBOOK USERNAME">

                <input type="submit" value="ADD MY INFO">
            </form>
            <p class="small">By entering you'll subscribe to GayCities, LGBTQ Nation, Queerty, and SFTA's newsletter.<br />You can always unsubscribe. <a href="/somewhere-else/"><strong>Read the full rules.</strong></a></p>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection
