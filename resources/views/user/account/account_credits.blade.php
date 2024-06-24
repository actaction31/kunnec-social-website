@extends('layouts.user')
 @section('title', 'Purchase/Send Credits')
 @section('css/account')
 <link href="{{ asset('public/user-dash/css/account.css') }}" rel="stylesheet"></link>
 <link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<div class="card-header1 mt-3">
    <h5 class="card-title" style="color:#ffffff;">Credit Balance: 
        <span class="badge badge-danger">24</span>
    </h5>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="card-header1 mt-3">
                    <h5 class="card-title" style="color:#ffffff;">How to purchase credits.
                    </h5>
                </div>
                <div class="card">
                <p class="card-text">Transactions on Kunnec.com is based on purchased credits.</p>
                <p class="card-text">Each credit is based from US currency.</p>
                <p class="card-text">Each credit has a value of 0.20 of US Dollar.</p>
                <p class="card-text text-break">When not using US Dollar currency, use the Currency Exchange convertor when purchasing credits based on your currency. </p>
                <p class="card-text text-break">1. Go to the Purchase Credits section and select the amount credits you want to purchase. </p>
                <p class="card-text text-break">2. The price amount needed to purchase the amount of credits you want, type the price in the amount section in the Currency Convertor section. </p>
                <p class="card-text text-break">3. In the Currency Convertor, in the "To" dropdown, select your currency. </p>
                <p class="card-text text-break">4. The currency will show in bold type of the exchange rate based on that date. </p>
                <p class="card-text text-break">5. This will inform you of the cost in your currency. </p>
                <p class="card-text text-break">6. Press purchase and you will be transeferred to paypal and select your currency and type in the exchange rate and credits will be added to your account. </p>
                </div>
                <div class="card-header1 mt-3">
                    <h5 class="card-title" style="color:#ffffff;">How to send credits.
                    </h5>
                </div>
                <div class="card">
                <p class="card-text">Credits can only be sent to your Kunnec's.</p>
                <p class="card-text text-break">1. Go to the Select a Kunnec dropdown and select the Kunnec you want to send credits. </p>
                <p class="card-text text-break">2. Go to Send credits dropdown and select the amount you want to send. </p>
                <p class="card-text text-break">3. Press the Send Credits button and the Kunnec will receive the credits. </p>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="row">
                    
                        <div class="card-body">
                            <h5 class="card-title">Purchase Credits</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Each credit is 0.20 cents.</h6>
                            <p class="card-text">Minimum credit amount to purchase is $5.00.</p>
                            <form>
                                <div class="form-group">
                                    <select class="form-control form-control-lg">
                                        <option>Select Credits</option>
                                        <option>$5.00 = 25 credits</option>
                                        <option>$6.00 = 30 credits</option>
                                        <option>$7.00 = 35 credits</option>
                                        <option>$8.00 = 40 credits</option>
                                        <option>$9.00 = 45 credits</option>
                                        <option>$10.00 = 50 credits</option>
                                        <option>$11.00 = 55 credits</option>
                                        <option>$12.00 = 60 credits</option>
                                        <option>$13.00 = 65 credits</option>
                                        <option>$14.00 = 70 credits</option>
                                        <option>$15.00 = 75 credits</option>
                                        <option>$16.00 = 80 credits</option>
                                        <option>$17.00 = 85 credits</option>
                                        <option>$18.00 = 90 credits</option>
                                        <option>$19.00 = 95 credits</option>
                                        <option>$20.00 = 100 credits</option>
                                        <option>$21.00 = 105 credits</option>
                                        <option>$22.00 = 110 credits</option>
                                        <option>$23.00 = 115 credits</option>
                                        <option>$24.00 = 120 credits</option>
                                        <option>$25.00 = 125 credits</option>
                                        <option>$26.00 = 130 credits</option>
                                        <option>$27.00 = 135 credits</option>
                                        <option>$28.00 = 140 credits</option>
                                        <option>$29.00 = 145 credits</option>
                                        <option>$30.00 = 150 credits</option>
                                        <option>$31.00 = 155 credits</option>
                                        <option>$32.00 = 160 credits</option>
                                        <option>$33.00 = 165 credits</option>
                                        <option>$34.00 = 170 credits</option>
                                        <option>$35.00 = 175 credits</option>
                                        <option>$36.00 = 180 credits</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   
                </div>
                <!-- Currency Converter Script - EXCHANGERATEWIDGET.COM -->
                <div style="width:100%;border:1px solid #009900;">
                    <div style="text-align:center;background-color:#009900;width:100%;font-size:13px;font-weight:bold;height:40px;padding-top:2px;">
                        <a href="https://www.exchangeratewidget.com/" style="color:#FFFFFF;text-decoration:none;" rel="nofollow">Currency Converter</a>
                    </div>
                    <script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=EUR&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=1">
                    </script>
                </div>
                <!-- End of Currency Converter Script -->
                <button type="submit" class="btn btn-primary" style="background-color:#009900; margin-top: 8px; border-radius: 25px;">Purchase Credits
                </button>
                <div class="row">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title">Sending Credits</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Credits can be sent on Kunnec.com, but they must be a Kunnec of yours.</h6>
                        <form>
                            <div class="form-group">
                                <select class="form-control form-control-lg">
                                    <option>Select a Kunnec</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-lg">
                                    <option>Send Credits</option>
                                    <option>$5.00 = 25 credits</option>
                                    <option>$6.00 = 30 credits</option>
                                    <option>$7.00 = 35 credits</option>
                                    <option>$8.00 = 40 credits</option>
                                    <option>$9.00 = 45 credits</option>
                                    <option>$10.00 = 50 credits</option>
                                    <option>$11.00 = 55 credits</option>
                                    <option>$12.00 = 60 credits</option>
                                    <option>$13.00 = 65 credits</option>
                                    <option>$14.00 = 70 credits</option>
                                    <option>$15.00 = 75 credits</option>
                                    <option>$16.00 = 80 credits</option>
                                    <option>$17.00 = 85 credits</option>
                                    <option>$18.00 = 90 credits</option>
                                    <option>$19.00 = 95 credits</option>
                                    <option>$20.00 = 100 credits</option>
                                    <option>$21.00 = 105 credits</option>
                                    <option>$22.00 = 110 credits</option>
                                    <option>$23.00 = 115 credits</option>
                                    <option>$24.00 = 120 credits</option>
                                    <option>$25.00 = 125 credits</option>
                                    <option>$26.00 = 130 credits</option>
                                    <option>$27.00 = 135 credits</option>
                                    <option>$28.00 = 140 credits</option>
                                    <option>$29.00 = 145 credits</option>
                                    <option>$30.00 = 150 credits</option>
                                    <option>$31.00 = 155 credits</option>
                                    <option>$32.00 = 160 credits</option>
                                    <option>$33.00 = 165 credits</option>
                                    <option>$34.00 = 170 credits</option>
                                    <option>$35.00 = 175 credits</option>
                                    <option>$36.00 = 180 credits</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color:#009900;  border-radius: 25px;">Send Credits
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('additional-js')
@endsection