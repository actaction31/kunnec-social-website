@extends('layouts.user')
 @section('title', 'K-Ads About')
 @section('css/account')
 <link href="{{ asset('public/user-dash/css/account.css') }}" rel="stylesheet"></link>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

@endsection
@section('content')
<div class="card">
    <div id="user-profile-2" class="user-profile">
        <div class="tabbable">
            <!-- Start of tab buttons -->
            <ul class="nav nav-tabs padding-18">
                <li class="active">
                    <a data-toggle="tab" href="#about">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        About
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#type">
                        <i class="green ace-icon fa fa-lock bigger-120"></i>
                       Select Ad Type
                    </a>
                </li>
            </ul>
            <!-- End of Tab Buttons -->
            
            <div class="tab-content no-border padding-24">
                <!-- Start of  About Tab -->
                <div id="about" class="tab-pane in active">
                    <div class="space-20">
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="card-header">
                                <h2 class="card-title mb-3"> K-Ads is a promotional campaign tool that helps grow your awareness within the Kunnec.com community</h2>
                                <div class="row">
                                    <div class="col-sm">
                                        <p> Six easy steps</p>
                                        <ol>
                                            <li>Select which K-Ad program you want. There are 6 different programs you can promote with.</li>

                                            <li> Select the category of promotion you want your ad to be seen in.</li>

                                            <li> Add 25 credits to your Ad account which is $5.00. Each credit is 20 cents. $5.00 is the minimum amount you can add.  You can add as much as you would like. ( a credit is only deducted when a member clicks on your add. It costs a credit per click. )</li>

                                            <li>Ads are shown based on a combination of the amounts of kunnecs you have, engagement through the different kunnec categories and likes. The system will choose based on this criteria.</li>

                                            <li>Your not obligated to use K-Ads. Stop at anytime. When your account is low just add to it. That's all.</li>

                                            <li>You have a 1000 members who subscribe to your Kunnec Vid platform. You are able to add K-Ads to your videos in our Share Program. K-Ad monies will be paid monthly.</li>

                                        </ol>
                                    </div>
                                    <div class="col">
                                        <img  src="{{ asset('public/images/ad_photo.jpg') }}" alt="..."  width="400 %;">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">There are 6 styles of K-Ads</h5>
                            <div class="row">
                                <h5 class="card-title">Profile Ad</h5>
                                <div class="col">
                                    <div class="media text-muted pt-3">
                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                        <p class="media-body pb-3 mb-0 small lh-125 ">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                    </div>      
                                </div>
                                <div class="col">
                                    <p class="media-body pb-3 mb-0 small lh-125 ">
                                        <strong class="d-block" style="color:#000000;">Profile Ad</strong>
                                        When the Profile Ad is selected as your ad campaign, it will be listed in Kunnec.com's search lists based off of your total engagement through kunnec.com ( views, likes, and subscribers). The cost of the ad is one credit, which is twenty-cents. Credits will only be deducted when a member clicks on your ad and it will direct them to your Kunnec Social platform.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="card-title">Kunnec to You Ad</h5>
                                <div class="col-sm-5">
                                    <div class="media text-muted pt-3">
                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                        <p class="media-body pb-3 mb-0 small lh-125 ">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                    </div>      
                                </div>
                                <div class="col">
                                    <p class="media-body pb-3 mb-0 small lh-125 ">
                                        <strong class="d-block" style="color:#000000;">Kunnec to You Ad</strong>
                                        When the Kunnec to You  Ad is selected as your ad campaign, it will be listed in Kunnec.com's search lists based off of your total engagement through kunnec.com ( views, likes, and subscribers). The cost of the ad is one credit, which is twenty-cents. Credits will only be deducted when a member clicks on your ad and it will direct them to your Kunnec to You platform.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="card-title">Billboard Ad</h5>
                                <div class="col">
                                    <div class="media text-muted pt-3">
                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                        <p class="media-body pb-3 mb-0 small lh-125 ">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                    </div>      
                                </div>
                                <div class="col">
                                    <p class="media-body pb-3 mb-0 small lh-125 ">
                                        <strong class="d-block" style="color:#000000;">Billboard Ad</strong>
                                         When the Billboard Ad is selected as your ad campaign, it will be posted on Kunnec Vids home page based off of your total engagement through kunnec.com ( views, likes, and subscribers). This add price is 50 credits, which is $10 for a 3 day term. Credits will be deducted when your billboard ad is selected and its ad term days begin.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="card-title">Banner Ad</h5>
                                <div class="col">
                                    <div class="media text-muted pt-3">
                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                        <p class="media-body pb-3 mb-0 small lh-125 ">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                    </div>      
                                </div>
                                <div class="col">
                                    <p class="media-body pb-3 mb-0 small lh-125 ">
                                        <strong class="d-block" style="color:#000000;">Banner Ad</strong>
                                        When the Banner Ad is selected as your ad campaign, it will be posted in Kunnec Vids video playing . This option is only apart of the Kunnec Ads share program for our members. The cost of a banner ad is one credit, which is twenty ( 20 ) cents. The members get to decide what ads will post during their videos. The banner ad being shown during a video is based off of your total engagement through kunnec.com ( views, likes, and subscribers). Monies will only be deducted when your ad pops up on a Kunnec Video.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="card-title">Video Ad</h5>
                                <div class="col">
                                    <div class="media text-muted pt-3">
                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                        <p class="media-body pb-3 mb-0 small lh-125 ">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                    </div>      
                                </div>
                                <div class="col">
                                    <p class="media-body pb-3 mb-0 small lh-125 ">
                                        <strong class="d-block" style="color:#000000;">Video Ad</strong>
                                        When the Video Ad is selected as your ad campaign, it will be posted in Kunnec Vids video playing . This option is only apart of the Kunnec Ads share program for our members. The cost is three credits which is sixty ( 60 ) cents. The members get to decide what ads will play during their videos. The video ad being shown during a video is based off of your total engagement through kunnec.com ( views, likes, and subscribers). Credits will only be deducted when your video ad plays more than fifteen ( 15 ) seconds. The Video Ad member won't get paid or have to pay if the video ad plays on their own members Kunnec Video.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="card-title">Radio Ad</h5>
                                <div class="col">
                                    <div class="media text-muted pt-3">
                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                        <p class="media-body pb-3 mb-0 small lh-125 ">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                    </div>      
                                </div>
                                <div class="col">
                                    <p class="media-body pb-3 mb-0 small lh-125 ">
                                        <strong class="d-block" style="color:#000000;">Radio Ad</strong>
                                         When the Radio Ad is selected as your ad campaign, it will be posted in Kunnec Radio time slots of thity ( 30 ) seconds . It will only be played based on your city where you are from. The Radio Ad will be played during Radio time slots based off of your total engagement through kunnec.com ( views, likes, and subscribers). Credits will only be deducted from your account every time your radio ad is played. A radio ad is two creidts ( forty cents).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-warning">
                        <strong>Share Program</strong> The share program is when members get 85% of the Ad money and Kunnec.com gets 15%.
                    </div>
                    <h5 class="card-title">The K-Ad share program is only optional to Kunnec Vid members.</h5>
                    <p class="media-body pb-3 mb-0 small lh-125 ">
                        <strong class="d-block text-gray-dark">@username</strong>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </p>
                    </div>
                </div>
                <!-- /#End of About Tab -->

                <!-- /#Start of K-Ad Type Tab -->
                <div id="type" class="tab-pane">
                    <div class="space-20">
                    </div>
                    <div class="my-3 p-3 bg-white rounded shadow-sm">
                        <h6 class="border-bottom border-gray pb-2 mb-0">Select the Ad Program you want</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark pl-3 mt-3">Profile Ad</strong>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Add to Account</option>
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
                                    <form method="post" id="framework_form">
                                        <div class="form-group">
                                            <select id="framework" name="framework[]" multiple class="form-control" >
                                            <option value="Kunnec to Me">Kunnec to Me</option>
                                            <option value="Kunnec to You">Kunnec to You</option>
                                            <option value="Kunnec Shop">Kunnec Shop</option>
                                            <option value="Kunnec Courses">Kunnec Course</option>
                                            <option value="Kunnec Screen">Kunnec Screen</option>
                                            <option value="Kunnec Show">Kunnec Show</option>
                                            <option value="Kunnec Books">Kunnec Books</option>
                                            <option value="Kunnec Music">Kunnec Music</option>
                                            <option value="Kunnec Pod">Kunnec Pod</option>
                                            <option value="Kunnec Spot">Kunnec Spot</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <input type="submit" class="btn btn-success" style="background-color:#009900;" name="submit" value="Submit" />
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark pl-3 mt-3">Kunnec to You Ad</strong>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Add to Account</option>
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
                                    <form method="post" id="framework1_form">
                                        <div class="form-group">
                                            <select id="framework1" name="framework[]" multiple class="form-control" >
                                            <option value="Kunnec to Me">Kunnec to Me</option>
                                            <option value="Kunnec to You">Kunnec to You</option>
                                            <option value="Kunnec Shop">Kunnec Shop</option>
                                            <option value="Kunnec Courses">Kunnec Course</option>
                                            <option value="Kunnec Screen">Kunnec Screen</option>
                                            <option value="Kunnec Show">Kunnec Show</option>
                                            <option value="Kunnec Books">Kunnec Books</option>
                                            <option value="Kunnec Music">Kunnec Music</option>
                                            <option value="Kunnec Pod">Kunnec Pod</option>
                                            <option value="Kunnec Spot">Kunnec Spot</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" style="background-color:#009900;" name="submit" value="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                           
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark pl-3 mt-3">Banner Ad </strong>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Add to Account</option>
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
                                            <div class="form-group mt-3">
                                                <select class="form-control form-control-lg">
                                                    <option>Video Classification</option>
                                                    <option>All</option>
                                                    <option>Professional</option>
                                                    <option>Mature</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <form method="post" id="framework2_form">
                                        <div class="form-group">
                                            <select id="framework2" name="framework[]" multiple class="form-control" >
                                                <option value="Kunnec to Me">General</option>
                                                <option value="Kunnec to You">Entertainment</option>
                                                <option value="Kunnec Shop">Lifestyle</option>
                                                <option value="Kunnec Courses">Sports</option>
                                                <option value="Kunnec Screen">Relationships</option>
                                                <option value="Kunnec Show">News</option>
                                                <optgroup label="Accounting" >
                                                    <option>Finance Basics</option>
                                                    <option>Financial Accounting</option>
                                                    <option>Bookkeeping</option>
                                                    <option>Risk Assessment</option>
                                                    <option>Auditing</option>
                                                    <option>Taxes</option>
                                                </optgroup>
                                                <optgroup label="Apple" >
                                                    <option>Mac OS</option>
                                                    <option>Mac Basics</option>
                                                </optgroup>
                                                <optgroup label="Business" >
                                                    <option>Advertising</option>
                                                    <option>Business Plan</option>
                                                    <option>Business Management</option>
                                                    <option>Branding</option>
                                                    <option>Contracts</option>
                                                    <option>Customer Service</option>
                                                    <option>Investing</option>
                                                    <option>Intellectual Property</option>
                                                    <option>Negotiations</option>
                                                    <option>Marketing</option>
                                                    <option>Patents</option>
                                                    <option>Product Management</option>
                                                    <option>Risk Management</option>
                                                    <option>Sales</option>
                                                    <option>Six Sigma</option>
                                                    <option>Six Sigma Black Belt</option>
                                                    <option>Six Sigma Green Belt</option>
                                                    <option>Six Sigma Yellow Belt</option>
                                                    <option>Start-Ups</option>
                                                    <option>Trademarks</option>
                                                    <option>Quality Management</option>
                                                </optgroup>
                                                <optgroup label="Crypto">
                                                    <option>Bitcoin</option>
                                                    <option>Blockchain</option>
                                                    <option>Crytocurrency</option>
                                                </optgroup>
                                                <optgroup label="Data">
                                                    <option>Access</option>
                                                    <option>Data Analysis</option>
                                                    <option>SQL</option>
                                                    <option>MySQL</option>
                                                    <option>Excel</option>
                                                    <option>Word</option>
                                                    <option>Python</option>
                                                    <option>Css</option>
                                                    <option>Bootstrap</option>
                                                    <option>PHP</option>
                                                    <option>Java</option>
                                                    <option>JQuery</option>
                                                    <option>Javascript</option>
                                                    <option>Power Point</option>
                                                    <option>Cyber Security</option>
                                                    <option>Network Sercurity</option>
                                                    <option>Linux</option>
                                                    <option>SQL</option>
                                                    <option>Windows</option>
                                                    <option>Shell</option>
                                                    <option>Javascript</option>
                                                    <option>Power Point</option>
                                                </optgroup>
                                                <optgroup label="Design">
                                                    <option>Photoshop</option>
                                                    <option>Drawing</option>
                                                    <option>Illustrator</option>
                                                    <option>InDesign</option>
                                                    <option>Dreamweaver</option>
                                                    <option>Logo Design</option>
                                                    <option>Graphic Design</option>
                                                    <option>Autocad</option>
                                                    <option>PHP</option>
                                                    <option>JQuery</option>
                                                    <option>Javascript</option>
                                                    <option>Power Point</option>
                                                </optgroup>
                                                <optgroup label="Games">
                                                    <option>Poker</option>
                                                    <option>Chess</option>
                                                    <option>Card Games</option>
                                                    <option>On-Line Gaming</option>
                                                    <option>Designing online Games</option>
                                                </optgroup>
                                                <optgroup label="Home Improvement">
                                                    <option>Decorating</option>
                                                    <option>Wiring</option>
                                                    <option>Drywall</option>
                                                    <option>Piping</option>
                                                    <option>Gardening</option>
                                                </optgroup>
                                                <optgroup label="Lifestyle" >
                                                    <option>Skin Care</option>
                                                    <option>Cosmetics</option>
                                                    <option>Nail Design</option>
                                                    <option>Hairstyle</option>
                                                    <option>Weight Lifting</option>
                                                    <option>Nutrition</option>
                                                    <option>Yoga</option>
                                                    <option>Mental Health</option>
                                                    <option>Self Defense</option>
                                                    <option>Meditation</option>
                                                    <option>Weight Loss</option>
                                                    <option>Fasting</option>
                                                    <option>Vegan Diet</option>
                                                    <option>Psychics</option>
                                                    <option>Tarot</option>
                                                </optgroup>
                                                <optgroup label="Language">
                                                    <option>English</option>
                                                    <option>Spanish</option>
                                                    <option>French</option>
                                                    <option>Italian</option>
                                                    <option>Russian</option>
                                                    <option>Hebrew</option>
                                                </optgroup>
                                                <optgroup label="Media" >
                                                    <option>Journalism</option>
                                                    <option>Podcast</option>
                                                    <option>Screenwriting</option>
                                                    <option>After Effects</option>
                                                    <option>Writing Editing</option>
                                                </optgroup>
                                                <optgroup label="Music">
                                                    <option>Pro Tools</option>
                                                    <option>Cubase</option>
                                                    <option>Logic Pro</option>
                                                    <option>Albeton live</option>
                                                    <option>Dreamweaver</option>
                                                    <option>Gararge Band</option>
                                                    <option>Presonus</option>
                                                    <option>Songwriting</option>
                                                    <option>Reading music</option>
                                                    <option>Guitar</option>
                                                    <option>Acoustic Guitar</option>
                                                    <option>Guitar Chords</option>
                                                    <option>Piano Chords</option>
                                                    <option>Voice Training</option>
                                                    <option>Singing</option>
                                                    <option>Breathing techniques</option>
                                                    <option>Publishing</option>
                                                    <option>Mechanical Royalties</option>
                                                </optgroup>
                                                <optgroup label="Presentations" >
                                                    <option>Leadership</option>
                                                    <option>Public Speaking</option>
                                                    <option>Presentations</option>
                                                </optgroup>
                                                <optgroup label="Real Estate" >
                                                    <option>Construction</option>
                                                    <option>Mortgage</option>
                                                    <option>Buying a Home</option>
                                                    <option>Interior Design</option>
                                                    <option>Architecture</option>
                                                    <option>PReal Estate Marketing</option>
                                                </optgroup>
                                                <optgroup label="Video" >
                                                    <option>Video Editing</option>
                                                    <option>Voice Over</option>
                                                    <option>Film Making</option>
                                                    <option>Cinematography</option>
                                                    <option>Lighting</option>
                                                    <option>Camera Movement & Placement</option>
                                                </optgroup>
                                                <optgroup label="Writing" >
                                                    <option>Novels</option>
                                                    <option>Storytelling</option>
                                                    <option>Fiction</option>
                                                    <option>Character Development</option>
                                                    <option>Non-Fiction</option>
                                                    <option>Writing Editing</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" style="background-color:#009900;" name="submit" value="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark pl-3 mt-3">Video Ad</strong>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Add to Account</option>
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
                                            <div class="form-group mt-3">
                                                <select class="form-control form-control-lg">
                                                    <option>Video Classification</option>
                                                    <option>All</option>
                                                    <option>Professional</option>
                                                    <option>Mature</option>
                                                </select>   
                                            </div>
                                        </div>
                                    </form>

                                    <form method="post" id="framework3_form">
                                        <div class="form-group">
                                            <select id="framework3" name="framework[]" multiple class="form-control" >
                                            <option value="Kunnec to Me">General</option>
                                                <option value="Kunnec to You">Entertainment</option>
                                                <option value="Kunnec Shop">Lifestyle</option>
                                                <option value="Kunnec Courses">Sports</option>
                                                <option value="Kunnec Screen">Relationships</option>
                                                <option value="Kunnec Show">News</option>
                                                <optgroup label="Accounting" >
                                                    <option>Finance Basics</option>
                                                    <option>Financial Accounting</option>
                                                    <option>Bookkeeping</option>
                                                    <option>Risk Assessment</option>
                                                    <option>Auditing</option>
                                                    <option>Taxes</option>
                                                </optgroup>
                                                <optgroup label="Apple" >
                                                    <option>Mac OS</option>
                                                    <option>Mac Basics</option>
                                                </optgroup>
                                                <optgroup label="Business" >
                                                    <option>Advertising</option>
                                                    <option>Business Plan</option>
                                                    <option>Business Management</option>
                                                    <option>Branding</option>
                                                    <option>Contracts</option>
                                                    <option>Customer Service</option>
                                                    <option>Investing</option>
                                                    <option>Intellectual Property</option>
                                                    <option>Negotiations</option>
                                                    <option>Marketing</option>
                                                    <option>Patents</option>
                                                    <option>Product Management</option>
                                                    <option>Risk Management</option>
                                                    <option>Sales</option>
                                                    <option>Six Sigma</option>
                                                    <option>Six Sigma Black Belt</option>
                                                    <option>Six Sigma Green Belt</option>
                                                    <option>Six Sigma Yellow Belt</option>
                                                    <option>Start-Ups</option>
                                                    <option>Trademarks</option>
                                                    <option>Quality Management</option>
                                                </optgroup>
                                                <optgroup label="Crypto">
                                                    <option>Bitcoin</option>
                                                    <option>Blockchain</option>
                                                    <option>Crytocurrency</option>
                                                </optgroup>
                                                <optgroup label="Data">
                                                    <option>Access</option>
                                                    <option>Data Analysis</option>
                                                    <option>SQL</option>
                                                    <option>MySQL</option>
                                                    <option>Excel</option>
                                                    <option>Word</option>
                                                    <option>Python</option>
                                                    <option>Css</option>
                                                    <option>Bootstrap</option>
                                                    <option>PHP</option>
                                                    <option>Java</option>
                                                    <option>JQuery</option>
                                                    <option>Javascript</option>
                                                    <option>Power Point</option>
                                                    <option>Cyber Security</option>
                                                    <option>Network Sercurity</option>
                                                    <option>Linux</option>
                                                    <option>SQL</option>
                                                    <option>Windows</option>
                                                    <option>Shell</option>
                                                    <option>Javascript</option>
                                                    <option>Power Point</option>
                                                </optgroup>
                                                <optgroup label="Design">
                                                    <option>Photoshop</option>
                                                    <option>Drawing</option>
                                                    <option>Illustrator</option>
                                                    <option>InDesign</option>
                                                    <option>Dreamweaver</option>
                                                    <option>Logo Design</option>
                                                    <option>Graphic Design</option>
                                                    <option>Autocad</option>
                                                    <option>PHP</option>
                                                    <option>JQuery</option>
                                                    <option>Javascript</option>
                                                    <option>Power Point</option>
                                                </optgroup>
                                                <optgroup label="Games">
                                                    <option>Poker</option>
                                                    <option>Chess</option>
                                                    <option>Card Games</option>
                                                    <option>On-Line Gaming</option>
                                                    <option>Designing online Games</option>
                                                </optgroup>
                                                <optgroup label="Home Improvement">
                                                    <option>Decorating</option>
                                                    <option>Wiring</option>
                                                    <option>Drywall</option>
                                                    <option>Piping</option>
                                                    <option>Gardening</option>
                                                </optgroup>
                                                <optgroup label="Lifestyle" >
                                                    <option>Skin Care</option>
                                                    <option>Cosmetics</option>
                                                    <option>Nail Design</option>
                                                    <option>Hairstyle</option>
                                                    <option>Weight Lifting</option>
                                                    <option>Nutrition</option>
                                                    <option>Yoga</option>
                                                    <option>Mental Health</option>
                                                    <option>Self Defense</option>
                                                    <option>Meditation</option>
                                                    <option>Weight Loss</option>
                                                    <option>Fasting</option>
                                                    <option>Vegan Diet</option>
                                                    <option>Psychics</option>
                                                    <option>Tarot</option>
                                                </optgroup>
                                                <optgroup label="Language">
                                                    <option>English</option>
                                                    <option>Spanish</option>
                                                    <option>French</option>
                                                    <option>Italian</option>
                                                    <option>Russian</option>
                                                    <option>Hebrew</option>
                                                </optgroup>
                                                <optgroup label="Media" >
                                                    <option>Journalism</option>
                                                    <option>Podcast</option>
                                                    <option>Screenwriting</option>
                                                    <option>After Effects</option>
                                                    <option>Writing Editing</option>
                                                </optgroup>
                                                <optgroup label="Music">
                                                    <option>Pro Tools</option>
                                                    <option>Cubase</option>
                                                    <option>Logic Pro</option>
                                                    <option>Albeton live</option>
                                                    <option>Dreamweaver</option>
                                                    <option>Gararge Band</option>
                                                    <option>Presonus</option>
                                                    <option>Songwriting</option>
                                                    <option>Reading music</option>
                                                    <option>Guitar</option>
                                                    <option>Acoustic Guitar</option>
                                                    <option>Guitar Chords</option>
                                                    <option>Piano Chords</option>
                                                    <option>Voice Training</option>
                                                    <option>Singing</option>
                                                    <option>Breathing techniques</option>
                                                    <option>Publishing</option>
                                                    <option>Mechanical Royalties</option>
                                                </optgroup>
                                                <optgroup label="Presentations" >
                                                    <option>Leadership</option>
                                                    <option>Public Speaking</option>
                                                    <option>Presentations</option>
                                                </optgroup>
                                                <optgroup label="Real Estate" >
                                                    <option>Construction</option>
                                                    <option>Mortgage</option>
                                                    <option>Buying a Home</option>
                                                    <option>Interior Design</option>
                                                    <option>Architecture</option>
                                                    <option>PReal Estate Marketing</option>
                                                </optgroup>
                                                <optgroup label="Video" >
                                                    <option>Video Editing</option>
                                                    <option>Voice Over</option>
                                                    <option>Film Making</option>
                                                    <option>Cinematography</option>
                                                    <option>Lighting</option>
                                                    <option>Camera Movement & Placement</option>
                                                </optgroup>
                                                <optgroup label="Writing" >
                                                    <option>Novels</option>
                                                    <option>Storytelling</option>
                                                    <option>Fiction</option>
                                                    <option>Character Development</option>
                                                    <option>Non-Fiction</option>
                                                    <option>Writing Editing</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success "  style="background-color:#009900;" name="submit" value="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark pl-3 mt-3">Billboard Ad</strong>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Add to Billbosrd Account</option>
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
                                        <button type="submit" class="btn btn-primary" style="background-color:#009900;">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark pl-3 mt-3">Radio Ad</strong>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Add to Account</option>
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
                                        <button type="submit" class="btn btn-primary" style="background-color:#009900;">Submit</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                  <!-- /#End of K-Ad Type Tab -->

                <!-- /#Start of Category Tab -->
                <div id="category" class="tab-pane">
                    <div class="card-body">
                        <form method="post" id="framework_form">
                            <div class="form-group">
                                <select id="framework" name="framework[]" multiple class="form-control" >
                                <option value="Codeigniter">Codeigniter</option>
                                <option value="CakePHP">CakePHP</option>
                                <option value="Laravel">Laravel</option>
                                <option value="YII">YII</option>
                                <option value="Zend">Zend</option>
                                <option value="Symfony">Symfony</option>
                                <option value="Phalcon">Phalcon</option>
                                <option value="Slim">Slim</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                            </div>
                        </form>
                        <br />
                    </div>

                </div><!-- /#End of Category Tab -->

                <!-- /#Start of History Tab -->
                <div id="history" class="tab-pane">
                    <div class="card-body">
                        <div class="card-header">
                            <h5 class="card-title mb-3">History</h5>
                            <div class="col-md-6 col-sm-6  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                    <div class="form-group row">
										<div class="col-md-9 col-sm-9 ">
											<select class="form-control">
                                                <option>Select Year</option>
												<option>2022</option>
												<option>2023</option>
												<option>2024</option>
												<option>2025</option>
											</select>
										</div>
									</div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                    <div class="x_content">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Month</th>
                                                    <th>Date</th>
                                                    <th>Account Type</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">January</th>
                                                    <td>January 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">February</th>
                                                    <td>February 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">March</th>
                                                    <td>March 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">April</th>
                                                    <td>April 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">May</th>
                                                    <td>May 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">June</th>
                                                    <td>June 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">July</th>
                                                    <td>July 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">August</th>
                                                    <td>August 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">September</th>
                                                    <td>September 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">October</th>
                                                    <td>October 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">November</th>
                                                    <td>November 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">December</th>
                                                    <td>December 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#End of History Tab -->

                <!-- /#Start of Delete Tab -->
                <div id="delete" class="tab-pane">
                    <div class="alert alert-danger">
                         <strong>Important!</strong> Once you delete your account from Kunnec.com, all of your data will be removed from Kunnec.com. Please download all of your data you want to keep because your data belongs to you and we have no way of retrieving your data once you delete your account.
                    </div>
                    <div class="row ">
                         <div class="col ">
                             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete My Account</button>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('additional-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Profile Ad Category',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"ad_category.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data);
   }
  });
 });
});
</script>

<script>
$(document).ready(function(){
 $('#framework1').multiselect({
  nonSelectedText: 'Select Kunnec to You Ad Category',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework1_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"ad_category.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework1 option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework1').multiselect('refresh');
    alert(data);
   }
  });
 });
});
</script>

<script>
$(document).ready(function(){
 $('#framework2').multiselect({
  nonSelectedText: 'Select Banner Ad Category',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework2_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"ad_category.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework2 option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework2').multiselect('refresh');
    alert(data);
   }
  });
 });
});
</script>
<script>
$(document).ready(function(){
 $('#framework3').multiselect({
  nonSelectedText: 'Select Video Ad Category',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework3_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"ad_category.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework3 option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework3').multiselect('refresh');
    alert(data);
   }
  });
 });
});
</script>
@endsection