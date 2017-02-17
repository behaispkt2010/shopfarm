@extends('layouts.admin')
@section('title', 'Chia sẻ mã Referral Code')
@section('pageHeader','Chia sẻ mã Referral Code')
@section('detailHeader','Chia sẻ mã Referral Code')
@section('content')
<div class="row" style="text-align: center; padding-top: 100px;">
    <img src="{{asset('/images/sharecodereferral.png')}}" alt="">
    <div class="link-id">
        <p id="txtReferralCode">sđfkjfkj</p>
    </div>
    <label for="" style="font-size: 18px; font-weight: bold; color: #000;">
        Hãy chia sẻ mã giới thiệu đến bạn bè để cả hai
        cùng nhận được những ưu đãi hấp dẫn nhé
    </label>
    <div class="social">
        <ul>
            <li class="facebook">
                <a id="share_facebook" href="#"><img src="{{ asset('/images/facebookicon.png') }}" alt=""></a>
            </li>
            {{--<li class="google"></li>
            <li class="mail"></li>--}}
        </ul>
    </div>

</div>
@endsection
@section('add_scripts')
    <script>
        document.getElementById('share_facebook').onclick = function() {
            FB.ui({
                method: 'share',
                mobile_iframe: true,
                href: 'http://hasuko.xyz/',
            }, function(response){});
        }
    </script>
@endsection