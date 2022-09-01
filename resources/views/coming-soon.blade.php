@extends('layouts.index')

@section('title', 'Empty Cart page')

@section('body')
<div class="main-wrapper">
    <div class="coming-soon-section pt-100px pb-100px" data-bg-image="assets/images/coming-soon/coming-soon-bg.webp">
        <div class="container">
            <div class="coming-soon-content">
                <div class="logo">
                    <a href="{{route('index')}}"><img src="assets/images/logo/footer-logo.png" alt="Site Logo" /></a>
                </div>
                <h2 class="title">Coming soon</h2>
                <div class="countdown3" data-countdown="2023/01/01"></div>
                <div class="coming-soon-subscribe">
                    <form id="mc-form" class="mc-form widget-subscibe">
                        <input id="mc-email" class="bg-light" autocomplete="off" type="email"
                            placeholder="Enter your e-mail address" name="EMAIL">
                        <button id="mc-submit" class="btn btn-dark">subscibe</button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script>
    $('[data-bg-image]').each(function() {
        var $this = $(this),
            $image = $this.data('bg-image');
        $this.css('background-image', 'url(' + $image + ')');
    });

    $('[data-countdown]').each(function() {
        var $this = $(this),
            $finalDate = $this.data('countdown');
        $this.countdown($finalDate, function(event) {
            $this.html(event.strftime('<div class="count"><span class="amount">%-D</span><span class="period">Days</span></div><div class="count"><span class="amount">%-H</span><span class="period">Hours</span></div><div class="count"><span class="amount">%-M</span><span class="period">Minutes</span></div><div class="count"><span class="amount">%-S</span><span class="period">Seconds</span></div>'));
        });
    });
</script>
@endsection