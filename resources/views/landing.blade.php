@extends('layouts.app')
@section('additional-css')
<title>{{ config('app.name', 'Kunnec | Home') }}</title>
@endsection
@section('content')
    <!-- Sky Background -->
    <div class="sky">
        <div class="container">
            <div class="hmpg_lg"> <!-- Logo -->
            </div>
            <div class="k_motto p-0 text-white text-center">Private Community Connecting Artists</div>

            <div class="container1 dynamicTile">
                <div class="row ">
                    <div class="col-sm-2  col-xs-4">
                        <div id="tile1" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal1">
                                            <p class="tilecaption6"><i class="fa fa-home fa-2x"></i></p>
                                            <p class="tilecaption5">About</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_music-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal2">
                                            <p class="tilecaption6"><i class="fas fa-satellite-dish fa-2x"></i></p>
                                            <p class="tilecaption10">Kunnec Spot</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_event">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal19">
                                                <p class="tilecaption6"><i class="fas fa-glass-cheers fa-2x"></i></p>
                                                <p class="tilecaption10">Events </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_shop-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal4">
                                                <p class="tilecaption6"><i class="fas fa-donate fa-2x"></i></p>
                                                <p class="tilecaption10">Payments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_photo">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal12">
                                                <p class="tilecaption6"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></p>
                                                <p class="tilecaption10">Messages </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-2 col-xs-4">
                        <div id="tile6" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal6">
                                            <p class="tilecaption6"><i class="far fa-comment fa-2x"></i></p>
                                            <p class="tilecaption11">Languages</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of the Row -->

                <div class="row">
                    <div class="col-sm-4 col-xs-8">
                        <div class="k_social-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal7">
                                                <p class="tilecaption"><i class="fas fa-users fa-2x"></i></p>
                                                <p class="tilecaption2">Kunnec Social</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_me-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal8">
                                                <p class="tilecaption6"><i class="fas fa-user fa-2x"></i></p>
                                                <p class="tilecaption11">Kunnec Jobs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_you-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal14">
                                                <p class="tilecaption6"><i class="fas fa-user-friends fa-2x"></i></p>
                                                <p class="tilecaption11">Kunnec to You</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-8">
                        <div class="k_show-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal11">
                                                <p class="tilecaption"><i class="fas fa-film fa-2x"></i></p>
                                                <p class="tilecaption2">Kunnec Show</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Row -->

                <div class="row">
                    <div class="col-sm-12 col-xs-4">
                        <div class="k_screen-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal17">
                                                <p class="tilecaption3"><i class="fas fa-tv fa-4x"></i></p>
                                                <p class="tilecaption4">Kunnec Screen</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of the Row -->

                <hr class="style12">

                <div class="row pb-4">
                    <div class="col-sm-4">
                        <div class="pricing-table" >
                            <h3 class="pricing-title text-uppercase" style="background-color: #C70039;">Free Trial</h3>
                            <div class="price">7 days</sup>
                            </div>
                            <ul class="table-list p-0">
                                <li class="p-1">Full Access Entire Site</li>
                                <li class="pl-3 pr-3 text-center">After 7 days,your account will be charged the monthly fee until account is cancelled.</li>
                                <li class="p-1">Countdown Reminder</li>
                                <li class="p-1"><span class="unlimited">Cancel Anytime</span></li>
                            </ul>
                            <div class="table-buy">
                                <a href="{{ route('register') }}" class="pricing-action text-uppercase">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="pricing-table recommended ">
                            <h3 class="pricing-title">Best Value</h3>
                            <div class="price">$74.99<sup>/ yr.</sup>
                            </div>
                            <ul class="table-list p-0">
                                <li class="p-1">Full Access Entire Site</li>
                                <li class="pl-3 pr-3 text-center">After a year,  your account will be charged a yearly fee until you cancel or change your account.</li>
                                <li class="p-1">We have a countdown reminder.</li>
                                <li class="p-1"><span class="unlimited">Cancel Anytime</span></li>
                            </ul>
                            <div class="table-buy">
                                <a href="{{ route('register') }}" class="pricing-action text-uppercase">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="pricing-table ">
                            <h3 class="pricing-title">Monthly</h3>
                            <div class="price">$6.99<sup>/ mos.</sup>
                            </div>
                            <ul class="table-list p-0">
                                <li class="p-1">Full Access Entire Site</li>
                                <li class="pl-3 pr-3 text-center">After a month, your account will be charged a monthly fee until the account is cancelled.</li>
                                <li class="p-1">We have a countdown reminder.</li>
                                <li class="p-1"><span class="unlimited">Cancel Anytime</span></li>
                            </ul>
                            <div class="table-buy">
                                <a href="{{ route('register') }}" class="pricing-action">SIGN UP</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End of Last Row-->
            </div><!-- End of Dynamic Tiles -->
        </div><!-- End of Container-->
    </div><!-- End of Sky -->

    <!-- Footer -->
    <footer>
        <ul class="ter_pri">
            <li data-toggle="modal" data-target="#tmModal">Terms</li>
            <li> | </li>
            <li data-toggle="modal" data-target="#pvcModal">Privacy Policy</li>
            <li> | </li>
            <li data-toggle="modal" data-target="#ctModal">Contact</li>
        </ul>
        <div class="copyright_k">Kunnec &copy; <?php echo date("Y"); ?></div>
    </footer>

    <!-- Terms Modal  -->
    <div class="modal fade" id="tmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Terms</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body">
                    <h1>Terms and Conditions</h1>
                    <p>Last updated: January 20, 2023</p>
                    <p>Please read these terms and conditions carefully before using Our Service.</p>
                    <h1>Interpretation and Definitions</h1>
                    <h2>Interpretation</h2>
                    <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                    <h2>Definitions</h2>
                    <p>For the purposes of these Terms and Conditions:</p>
                    <ul>
                    <li>
                    <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
                    </li>
                    <li>
                    <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
                    </li>
                    <li>
                    <p><strong>Country</strong> refers to: Nevada,  United States</p>
                    </li>
                    <li>
                    <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Kunnec.com, LLC, 304 S. Jones Blvd. # 49589 Las Vegas NV, 89107.</p>
                    </li>
                    <li>
                    <p><strong>Content</strong> refers to content such as text, images, or other information that can be posted, uploaded, linked to or otherwise made available by You, regardless of the form of that content.</p>
                    </li>
                    <li>
                    <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
                    </li>
                    <li>
                    <p><strong>Feedback</strong> means feedback, innovations or suggestions sent by You regarding the attributes, performance or features of our Service.</p>
                    </li>
                    <li>
                    <p><strong>Free Trial</strong> refers to a limited period of time that may be free when purchasing a Subscription.</p>
                    </li>
                    <li>
                    <p><strong>Goods</strong> refer to the items offered for sale on the Service.</p>
                    </li>
                    <li>
                    <p><strong>Orders</strong> mean a request by You to purchase Goods from Us.</p>
                    </li>
                    <li>
                    <p><strong>Promotions</strong> refer to contests, sweepstakes or other promotions offered through the Service.</p>
                    </li>
                    <li>
                    <p><strong>Service</strong> refers to the Website.</p>
                    </li>
                    <li>
                    <p><strong>Subscriptions</strong> refer to the services or access to the Service offered on a subscription basis by the Company to You.</p>
                    </li>
                    <li>
                    <p><strong>Terms and Conditions</strong> (also referred as &quot;Terms&quot;) mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.</p>
                    </li>
                    <li>
                    <p><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p>
                    </li>
                    <li>
                    <p><strong>Website</strong> refers to kunnec.com, accessible from <a href="http://www.kunnec.com" rel="external nofollow noopener" target="_blank">http://www.kunnec.com</a></p>
                    </li>
                    <li>
                    <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                    </li>
                    </ul>
                    <h1>Acknowledgment</h1>
                    <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
                    <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
                    <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
                    <p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>
                    <p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p>
                    <h1>Placing Orders for Goods</h1>
                    <p>By placing an Order for Goods through the Service, You warrant that You are legally capable of entering into binding contracts.</p>
                    <h2>Your Information</h2>
                    <p>If You wish to place an Order for Goods available on the Service, You may be asked to supply certain information relevant to Your Order including, without limitation, Your name, Your email, Your phone number, Your credit card number, the expiration date of Your credit card, Your billing address, and Your shipping information.</p>
                    <p>You represent and warrant that: (i) You have the legal right to use any credit or debit card(s) or other payment method(s) in connection with any Order; and that (ii) the information You supply to us is true, correct and complete.</p>
                    <p>By submitting such information, You grant us the right to provide the information to payment processing third parties for purposes of facilitating the completion of Your Order.</p>
                    <h2>Order Cancellation</h2>
                    <p>We reserve the right to refuse or cancel Your Order at any time for certain reasons including but not limited to:</p>
                    <ul>
                    <li>Goods availability</li>
                    <li>Errors in the description or prices for Goods</li>
                    <li>Errors in Your Order</li>
                    </ul>
                    <p>We reserve the right to refuse or cancel Your Order if fraud or an unauthorized or illegal transaction is suspected.</p>
                    <h3>Your Order Cancellation Rights</h3>
                    <p>Any Goods you purchase can only be returned in accordance with these Terms and Conditions and Our Returns Policy.</p>
                    <p>Our Returns Policy forms a part of these Terms and Conditions. Please read our Returns Policy to learn more about your right to cancel Your Order.</p>
                    <p>Your right to cancel an Order only applies to Goods that are returned in the same condition as You received them. You should also include all of the products instructions, documents and wrappings. Goods that are damaged or not in the same condition as You received them or which are worn simply beyond opening the original packaging will not be refunded. You should therefore take reasonable care of the purchased Goods while they are in Your possession.</p>
                    <p>We will reimburse You no later than 14 days from the day on which We receive the returned Goods. We will use the same means of payment as You used for the Order, and You will not incur any fees for such reimbursement.</p>
                    <p>You will not have any right to cancel an Order for the supply of any of the following Goods:</p>
                    <ul>
                    <li>The supply of Goods made to Your specifications or clearly personalized.</li>
                    <li>The supply of Goods which according to their nature are not suitable to be returned, deteriorate rapidly or where the date of expiry is over.</li>
                    <li>The supply of Goods which are not suitable for return due to health protection or hygiene reasons and were unsealed after delivery.</li>
                    <li>The supply of Goods which are, after delivery, according to their nature, inseparably mixed with other items.</li>
                    <li>The supply of digital content which is not supplied on a tangible medium if the performance has begun with Your prior express consent and You have acknowledged Your loss of cancellation right.</li>
                    </ul>
                    <h2>Availability, Errors and Inaccuracies</h2>
                    <p>We are constantly updating Our offerings of Goods on the Service. The Goods available on Our Service may be mispriced, described inaccurately, or unavailable, and We may experience delays in updating information regarding our Goods on the Service and in Our advertising on other websites.</p>
                    <p>We cannot and do not guarantee the accuracy or completeness of any information, including prices, product images, specifications, availability, and services. We reserve the right to change or update information and to correct errors, inaccuracies, or omissions at any time without prior notice.</p>
                    <h2>Prices Policy</h2>
                    <p>The Company reserves the right to revise its prices at any time prior to accepting an Order.</p>
                    <p>The prices quoted may be revised by the Company subsequent to accepting an Order in the event of any occurrence affecting delivery caused by government action, variation in customs duties, increased shipping charges, higher foreign exchange costs and any other matter beyond the control of the Company. In that event, You will have the right to cancel Your Order.</p>
                    <h2>Payments</h2>
                    <p>All Goods purchased are subject to a one-time payment. Payment can be made through various payment methods we have available, such as Visa, MasterCard, Affinity Card, American Express cards or online payment methods (PayPal, for example).</p>
                    <p>Payment cards (credit cards or debit cards) are subject to validation checks and authorization by Your card issuer. If we do not receive the required authorization, We will not be liable for any delay or non-delivery of Your Order.</p>
                    <h1>Subscriptions</h1>
                    <h2>Subscription period</h2>
                    <p>The Service or some parts of the Service are available only with a paid Subscription. You will be billed in advance on a recurring and periodic basis (such as daily, weekly, monthly or annually), depending on the type of Subscription plan you select when purchasing the Subscription.</p>
                    <p>At the end of each period, Your Subscription will automatically renew under the exact same conditions unless You cancel it or the Company cancels it.</p>
                    <h2>Subscription cancellations</h2>
                    <p>You may cancel Your Subscription renewal either through Your Account settings page or by contacting the Company.
                    You will not receive a refund for the fees You already paid for Your current Subscription period and You will be able to access the Service until the end of Your current Subscription period.</p>
                    <h2>Billing</h2>
                    <p>You shall provide the Company with accurate and complete billing information including full name, address, state, zip code, telephone number, and a valid payment method information.</p>
                    <p>Should automatic billing fail to occur for any reason, the Company will issue an electronic invoice indicating that you must proceed manually, within a certain deadline date, with the full payment corresponding to the billing period as indicated on the invoice.</p>
                    <h2>Fee Changes</h2>
                    <p>The Company, in its sole discretion and at any time, may modify the Subscription fees. Any Subscription fee change will become effective at the end of the then-current Subscription period.</p>
                    <p>The Company will provide You with reasonable prior notice of any change in Subscription fees to give You an opportunity to terminate Your Subscription before such change becomes effective.</p>
                    <p>Your continued use of the Service after the Subscription fee change comes into effect constitutes Your agreement to pay the modified Subscription fee amount.</p>
                    <h2>Refunds</h2>
                    <p>Except when required by law, paid Subscription fees are non-refundable.</p>
                    <p>Certain refund requests for Subscriptions may be considered by the Company on a case-by-case basis and granted at the sole discretion of the Company.</p>
                    <h2>Free Trial</h2>
                    <p>The Company may, at its sole discretion, offer a Subscription with a Free Trial for a limited period of time.</p>
                    <p>You may be required to enter Your billing information in order to sign up for the Free Trial.</p>
                    <p>If You do enter Your billing information when signing up for a Free Trial, You will not be charged by the Company until the Free Trial has expired. On the last day of the Free Trial period, unless You cancelled Your Subscription, You will be automatically charged the applicable Subscription fees for the type of Subscription You have selected.</p>
                    <p>At any time and without notice, the Company reserves the right to (i) modify the terms and conditions of the Free Trial offer, or (ii) cancel such Free Trial offer.</p>
                    <h1>Promotions</h1>
                    <p>Any Promotions made available through the Service may be governed by rules that are separate from these Terms.</p>
                    <p>If You participate in any Promotions, please review the applicable rules as well as our Privacy policy. If the rules for a Promotion conflict with these Terms, the Promotion rules will apply.</p>
                    <h1>User Accounts</h1>
                    <p>When You create an account with Us, You must provide Us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of Your account on Our Service.</p>
                    <p>You are responsible for safeguarding the password that You use to access the Service and for any activities or actions under Your password, whether Your password is with Our Service or a Third-Party Social Media Service.</p>
                    <p>You agree not to disclose Your password to any third party. You must notify Us immediately upon becoming aware of any breach of security or unauthorized use of Your account.</p>
                    <p>You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than You without appropriate authorization, or a name that is otherwise offensive, vulgar or obscene.</p>
                    <h1>Content</h1>
                    <h2>Your Right to Post Content</h2>
                    <p>Our Service allows You to post Content. You are responsible for the Content that You post to the Service, including its legality, reliability, and appropriateness.</p>
                    <p>By posting Content to the Service, You grant Us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through the Service. You retain any and all of Your rights to any Content You submit, post or display on or through the Service and You are responsible for protecting those rights. You agree that this license includes the right for Us to make Your Content available to other users of the Service, who may also use Your Content subject to these Terms.</p>
                    <p>You represent and warrant that: (i) the Content is Yours (You own it) or You have the right to use it and grant Us the rights and license as provided in these Terms, and (ii) the posting of Your Content on or through the Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person.</p>
                    <h2>Content Restrictions</h2>
                    <p>The Company is not responsible for the content of the Service's users. You expressly understand and agree that You are solely responsible for the Content and for all activity that occurs under your account, whether done so by You or any third person using Your account.</p>
                    <p>You may not transmit any Content that is unlawful, offensive, upsetting, intended to disgust, threatening, libelous, defamatory, obscene or otherwise objectionable. Examples of such objectionable Content include, but are not limited to, the following:</p>
                    <ul>
                    <li>Unlawful or promoting unlawful activity.</li>
                    <li>Defamatory, discriminatory, or mean-spirited content, including references or commentary about religion, race, sexual orientation, gender, national/ethnic origin, or other targeted groups.</li>
                    <li>Spam, machine – or randomly – generated, constituting unauthorized or unsolicited advertising, chain letters, any other form of unauthorized solicitation, or any form of lottery or gambling.</li>
                    <li>Containing or installing any viruses, worms, malware, trojan horses, or other content that is designed or intended to disrupt, damage, or limit the functioning of any software, hardware or telecommunications equipment or to damage or obtain unauthorized access to any data or other information of a third person.</li>
                    <li>Infringing on any proprietary rights of any party, including patent, trademark, trade secret, copyright, right of publicity or other rights.</li>
                    <li>Impersonating any person or entity including the Company and its employees or representatives.</li>
                    <li>Violating the privacy of any third person.</li>
                    <li>False information and features.</li>
                    </ul>
                    <p>The Company reserves the right, but not the obligation, to, in its sole discretion, determine whether or not any Content is appropriate and complies with this Terms, refuse or remove this Content. The Company further reserves the right to make formatting and edits and change the manner of any Content. The Company can also limit or revoke the use of the Service if You post such objectionable Content.
                    As the Company cannot control all content posted by users and/or third parties on the Service, you agree to use the Service at your own risk. You understand that by using the Service You may be exposed to content that You may find offensive, indecent, incorrect or objectionable, and You agree that under no circumstances will the Company be liable in any way for any content, including any errors or omissions in any content, or any loss or damage of any kind incurred as a result of your use of any content.</p>
                    <h2>Content Backups</h2>
                    <p>Although regular backups of Content are performed, the Company does not guarantee there will be no loss or corruption of data.</p>
                    <p>Corrupt or invalid backup points may be caused by, without limitation, Content that is corrupted prior to being backed up or that changes during the time a backup is performed.</p>
                    <p>The Company will provide support and attempt to troubleshoot any known or discovered issues that may affect the backups of Content. But You acknowledge that the Company has no liability related to the integrity of Content or the failure to successfully restore Content to a usable state.</p>
                    <p>You agree to maintain a complete and accurate copy of any Content in a location independent of the Service.</p>
                    <h1>Copyright Policy</h1>
                    <h2>Intellectual Property Infringement</h2>
                    <p>We respect the intellectual property rights of others. It is Our policy to respond to any claim that Content posted on the Service infringes a copyright or other intellectual property infringement of any person.</p>
                    <p>If You are a copyright owner, or authorized on behalf of one, and You believe that the copyrighted work has been copied in a way that constitutes copyright infringement that is taking place through the Service, You must submit Your notice in writing to the attention of our copyright agent via email at dmca@kunnec.com and include in Your notice a detailed description of the alleged infringement.</p>
                    <p>You may be held accountable for damages (including costs and attorneys' fees) for misrepresenting that any Content is infringing Your copyright.</p>
                    <h2>DMCA Notice and DMCA Procedure for Copyright Infringement Claims</h2>
                    <p>You may submit a notification pursuant to the Digital Millennium Copyright Act (DMCA) by providing our Copyright Agent with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):</p>
                    <ul>
                    <li>An electronic or physical signature of the person authorized to act on behalf of the owner of the copyright's interest.</li>
                    <li>A description of the copyrighted work that You claim has been infringed, including the URL (i.e., web page address) of the location where the copyrighted work exists or a copy of the copyrighted work.</li>
                    <li>Identification of the URL or other specific location on the Service where the material that You claim is infringing is located.</li>
                    <li>Your address, telephone number, and email address.</li>
                    <li>A statement by You that You have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law.</li>
                    <li>A statement by You, made under penalty of perjury, that the above information in Your notice is accurate and that You are the copyright owner or authorized to act on the copyright owner's behalf.</li>
                    </ul>
                    <p>You can contact our copyright agent via email at dmca@kunnec.com.
                    Upon receipt of a notification, the Company will take whatever action, in its sole discretion, it deems appropriate, including removal of the challenged content from the Service.</p>
                    <h1>Intellectual Property</h1>
                    <p>The Service and its original content (excluding Content provided by You or other users), features and functionality are and will remain the exclusive property of the Company and its licensors.</p>
                    <p>The Service is protected by copyright, trademark, and other laws of both the Country and foreign countries.</p>
                    <p>Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of the Company.</p>
                    <h1>Your Feedback to Us</h1>
                    <p>You assign all rights, title and interest in any Feedback You provide the Company. If for any reason such assignment is ineffective, You agree to grant the Company a non-exclusive, perpetual, irrevocable, royalty free, worldwide right and license to use, reproduce, disclose, sub-license, distribute, modify and exploit such Feedback without restriction.</p>
                    <h1>Links to Other Websites</h1>
                    <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>
                    <p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
                    <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p>
                    <h1>Termination</h1>
                    <p>We may terminate or suspend Your Account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>
                    <p>Upon termination, Your right to use the Service will cease immediately. If You wish to terminate Your Account, You may simply discontinue using the Service.</p>
                    <h1>Limitation of Liability</h1>
                    <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>
                    <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
                    <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
                    <h1>&quot;AS IS&quot; and &quot;AS AVAILABLE&quot; Disclaimer</h1>
                    <p>The Service is provided to You &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
                    <p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
                    <p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p>
                    <h1>Governing Law</h1>
                    <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
                    <h1>Disputes Resolution</h1>
                    <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>
                    <h1>For European Union (EU) Users</h1>
                    <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p>
                    <h1>United States Federal Government End Use Provisions</h1>
                    <p>If You are a U.S. federal government end user, our Service is a &quot;Commercial Item&quot; as that term is defined at 48 C.F.R. §2.101.</p>
                    <h1>United States Legal Compliance</h1>
                    <p>You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a &quot;terrorist supporting&quot; country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p>
                    <h1>Severability and Waiver</h1>
                    <h2>Severability</h2>
                    <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
                    <h2>Waiver</h2>
                    <p>Except as provided herein, the failure to exercise a right or to require performance of an obligation under these Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.</p>
                    <h1>Translation Interpretation</h1>
                    <p>These Terms and Conditions may have been translated if We have made them available to You on our Service.
                    You agree that the original English text shall prevail in the case of a dispute.</p>
                    <h1>Changes to These Terms and Conditions</h1>
                    <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>
                    <p>By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
                    <h1>Contact Us</h1>
                    <p>If you have any questions about these Terms and Conditions, You can contact us:</p>
                    <ul>
                    <li>By email: terms@kunnec.com</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Modal  -->
    <div class="modal fade" id="pvcModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Privacy Policy</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body">
                    <h1>Privacy Policy</h1>
                        <p>Last updated: January 20, 2023</p>
                        <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
                        <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</p>
                        <h1>Interpretation and Definitions</h1>
                        <h2>Interpretation</h2>
                        <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                        <h2>Definitions</h2>
                        <p>For the purposes of this Privacy Policy:</p>
                        <ul>
                        <li>
                        <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
                        </li>
                        <li>
                        <p><strong>Business</strong>, for the purpose of the CCPA (California Consumer Privacy Act), refers to the Company as the legal entity that collects Consumers' personal information and determines the purposes and means of the processing of Consumers' personal information, or on behalf of which such information is collected and that alone, or jointly with others, determines the purposes and means of the processing of consumers' personal information, that does business in the State of California.</p>
                        </li>
                        <li>
                        <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Kunnec.com,LLC, 304 S. Joes Blvd. # 49589 Las Vegas, NV 89107.</p>
                        <p>For the purpose of the GDPR, the Company is the Data Controller.</p>
                        </li>
                        <li>
                        <p><strong>Consumer</strong>, for the purpose of the CCPA (California Consumer Privacy Act), means a natural person who is a California resident. A resident, as defined in the law, includes (1) every individual who is in the USA for other than a temporary or transitory purpose, and (2) every individual who is domiciled in the USA who is outside the USA for a temporary or transitory purpose.</p>
                        </li>
                        <li>
                        <p><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
                        </li>
                        <li>
                        <p><strong>Country</strong> refers to: Nevada,  United States</p>
                        </li>
                        <li>
                        <p><strong>Data Controller</strong>, for the purposes of the GDPR (General Data Protection Regulation), refers to the Company as the legal person which alone or jointly with others determines the purposes and means of the processing of Personal Data.</p>
                        </li>
                        <li>
                        <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
                        </li>
                        <li>
                        <p><strong>Do Not Track</strong> (DNT) is a concept that has been promoted by US regulatory authorities, in particular the U.S. Federal Trade Commission (FTC), for the Internet industry to develop and implement a mechanism for allowing internet users to control the tracking of their online activities across websites.</p>
                        </li>
                        <li>
                        <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
                        <p>For the purposes of GDPR, Personal Data means any information relating to You such as a name, an identification number, location data, online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity.</p>
                        <p>For the purposes of the CCPA, Personal Data means any information that identifies, relates to, describes or is capable of being associated with, or could reasonably be linked, directly or indirectly, with You.</p>
                        </li>
                        <li>
                        <p><strong>Sale</strong>, for the purpose of the CCPA (California Consumer Privacy Act), means selling, renting, releasing, disclosing, disseminating, making available, transferring, or otherwise communicating orally, in writing, or by electronic or other means, a Consumer's personal information to another business or a third party for monetary or other valuable consideration.</p>
                        </li>
                        <li>
                        <p><strong>Service</strong> refers to the Website.</p>
                        </li>
                        <li>
                        <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.
                        For the purpose of the GDPR, Service Providers are considered Data Processors.</p>
                        </li>
                        <li>
                        <p><strong>Third-party Social Media Service</strong> refers to any website or any social network website through which a User can log in or create an account to use the Service.</p>
                        </li>
                        <li>
                        <p><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
                        </li>
                        <li>
                        <p><strong>Website</strong> refers to Kunnec.com, accessible from <a href="http://www.kunnec.com" rel="external nofollow noopener" target="_blank">http://www.kunnec.com</a></p>
                        </li>
                        <li>
                        <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                        <p>Under GDPR (General Data Protection Regulation), You can be referred to as the Data Subject or as the User as you are the individual using the Service.</p>
                        </li>
                        </ul>
                        <h1>Collecting and Using Your Personal Data</h1>
                        <h2>Types of Data Collected</h2>
                        <h3>Personal Data</h3>
                        <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
                        <ul>
                        <li>
                        <p>Email address</p>
                        </li>
                        <li>
                        <p>First name and last name</p>
                        </li>
                        <li>
                        <p>Address, State, Province, ZIP/Postal code, City</p>
                        </li>
                        <li>
                        <p>Usage Data</p>
                        </li>
                        </ul>
                        <h3>Usage Data</h3>
                        <p>Usage Data is collected automatically when using the Service.</p>
                        <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
                        <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
                        <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
                        <h3>Information from Third-Party Social Media Services</h3>
                        <p>The Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:</p>
                        <ul>
                        <li>Google</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>LinkedIn</li>
                        </ul>
                        <p>If You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Service's account, such as Your name, Your email address, Your activities or Your contact list associated with that account.</p>
                        <p>You may also have the option of sharing additional information with the Company through Your Third-Party Social Media Service's account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.</p>
                        <h3>Tracking Technologies and Cookies</h3>
                        <p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
                        <ul>
                        <li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
                        <li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
                        </ul>
                        <p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. You can learn more about cookies on <a href="https://www.termsfeed.com/blog/cookies/#What_Are_Cookies" target="_blank">TermsFeed website</a> article.</p>
                        <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
                        <ul>
                        <li>
                        <p><strong>Necessary / Essential Cookies</strong></p>
                        <p>Type: Session Cookies</p>
                        <p>Administered by: Us</p>
                        <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
                        </li>
                        <li>
                        <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
                        <p>Type: Persistent Cookies</p>
                        <p>Administered by: Us</p>
                        <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
                        </li>
                        <li>
                        <p><strong>Functionality Cookies</strong></p>
                        <p>Type: Persistent Cookies</p>
                        <p>Administered by: Us</p>
                        <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
                        </li>
                        <li>
                        <p><strong>Tracking and Performance Cookies</strong></p>
                        <p>Type: Persistent Cookies</p>
                        <p>Administered by: Third-Parties</p>
                        <p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new pages, features or new functionality of the Website to see how our users react to them.</p>
                        </li>
                        </ul>
                        <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
                        <h2>Use of Your Personal Data</h2>
                        <p>The Company may use Personal Data for the following purposes:</p>
                        <ul>
                        <li><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</li>
                        <li><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
                        <li><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>
                        <li><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
                        <li><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
                        <li><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</li>
                        <li><strong>To deliver targeted advertising to You</strong>: We may use Your information to develop and display content and advertising (and work with third-party vendors who do so) tailored to Your interests and/or location and to measure its effectiveness.</li>
                        <li><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</li>
                        <li><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</li>
                        </ul>
                        <p>We may share Your personal information in the following situations:</p>
                        <ul>
                        <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to advertise on third party websites to You after You visited our Service, for payment processing,  to contact You.</li>
                        <li><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
                        <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
                        <li><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
                        <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
                        <li><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
                        </ul>
                        <h2>Retention of Your Personal Data</h2>
                        <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
                        <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
                        <h2>Transfer of Your Personal Data</h2>
                        <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
                        <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
                        <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
                        <h2>Delete Your Personal Data</h2>
                        <p>You have the right to delete or request that We assist in deleting the Personal Data that We have collected about You.</p>
                        <p>Our Service may give You the ability to delete certain information about You from within the Service.</p>
                        <p>You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.</p>
                        <p>Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.</p>
                        <h2>Disclosure of Your Personal Data</h2>
                        <h3>Business Transactions</h3>
                        <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
                        <h3>Law enforcement</h3>
                        <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
                        <h3>Other legal requirements</h3>
                        <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
                        <ul>
                        <li>Comply with a legal obligation</li>
                        <li>Protect and defend the rights or property of the Company</li>
                        <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
                        <li>Protect the personal safety of Users of the Service or the public</li>
                        <li>Protect against legal liability</li>
                        </ul>
                        <h2>Security of Your Personal Data</h2>
                        <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
                        <h1>Detailed Information on the Processing of Your Personal Data</h1>
                        <p>The Service Providers We use may have access to Your Personal Data. These third-party vendors collect, store, use, process and transfer information about Your activity on Our Service in accordance with their Privacy Policies.</p>
                        <h2>Analytics</h2>
                        <p>We may use third-party Service providers to monitor and analyze the use of our Service.</p>
                        <ul>
                        <li>
                        <p><strong>Google Analytics</strong></p>
                        <p>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.</p>
                        <p>You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js and dc.js) from sharing information with Google Analytics about visits activity.</p>
                        <p>For more information on the privacy practices of Google, please visit the Google Privacy &amp; Terms web page: <a href="https://policies.google.com/privacy" rel="external nofollow noopener" target="_blank">https://policies.google.com/privacy</a></p>
                        </li>
                        </ul>
                        <h2>Payments</h2>
                        <p>We may provide paid products and/or services within the Service. In that case, we may use third-party services for payment processing (e.g. payment processors).</p>
                        <p>We will not store or collect Your payment card details. That information is provided directly to Our third-party payment processors whose use of Your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information.</p>
                        <ul>
                        <li>
                        <p><strong>Stripe</strong></p>
                        <p>Their Privacy Policy can be viewed at <a href="https://stripe.com/us/privacy" rel="external nofollow noopener" target="_blank">https://stripe.com/us/privacy</a></p>
                        </li>
                        <li>
                        <p><strong>PayPal</strong></p>
                        <p>Their Privacy Policy can be viewed at <a href="https://www.paypal.com/webapps/mpp/ua/privacy-full" rel="external nofollow noopener" target="_blank">https://www.paypal.com/webapps/mpp/ua/privacy-full</a></p>
                        </li>
                        </ul>
                        <h2>Behavioral Remarketing</h2>
                        <p>The Company uses remarketing services to advertise to You after You accessed or visited our Service. We and Our third-party vendors use cookies and non-cookie technologies to help Us recognize Your Device and understand how You use our Service so that We can improve our Service to reflect Your interests and serve You advertisements that are likely to be of more interest to You.</p>
                        <p>These third-party vendors collect, store, use, process and transfer information about Your activity on Our Service in accordance with their Privacy Policies and to enable Us to:</p>
                        <ul>
                        <li>Measure and analyze traffic and browsing activity on Our Service</li>
                        <li>Show advertisements for our products and/or services to You on third-party websites or apps</li>
                        <li>Measure and analyze the performance of Our advertising campaigns</li>
                        </ul>
                        <p>Some of these third-party vendors may use non-cookie technologies that may not be impacted by browser settings that block cookies. Your browser may not permit You to block such technologies. You can use the following third-party tools to decline the collection and use of information for the purpose of serving You interest-based advertising:</p>
                        <ul>
                        <li>The NAI's opt-out platform: <a href="http://www.networkadvertising.org/choices/" rel="external nofollow noopener" target="_blank">http://www.networkadvertising.org/choices/</a></li>
                        <li>The EDAA's opt-out platform <a href="http://www.youronlinechoices.com/" rel="external nofollow noopener" target="_blank">http://www.youronlinechoices.com/</a></li>
                        <li>The DAA's opt-out platform: <a href="http://optout.aboutads.info/?c=2&amp;lang=EN" rel="external nofollow noopener" target="_blank">http://optout.aboutads.info/?c=2&amp;lang=EN</a></li>
                        </ul>
                        <p>You may opt-out of all personalized advertising by enabling privacy features on Your mobile device such as Limit Ad Tracking (iOS) and Opt Out of Ads Personalization (Android). See Your mobile device Help system for more information.</p>
                        <p>We may share information, such as hashed email addresses (if available) or other online identifiers collected on Our Service with these third-party vendors. This allows Our third-party vendors to recognize and deliver You ads across devices and browsers. To read more about the technologies used by these third-party vendors and their cross-device capabilities please refer to the Privacy Policy of each vendor listed below.</p>
                        <p>The third-party vendors We use are:</p>
                        <ul>
                        <li>
                        <p><strong>Google Ads (AdWords)</strong></p>
                        <p>Google Ads (AdWords) remarketing service is provided by Google Inc.</p>
                        <p>You can opt-out of Google Analytics for Display Advertising and customise the Google Display Network ads by visiting the Google Ads Settings page: <a href="http://www.google.com/settings/ads" rel="external nofollow noopener" target="_blank">http://www.google.com/settings/ads</a></p>
                        <p>Google also recommends installing the Google Analytics Opt-out Browser Add-on - <a href="https://tools.google.com/dlpage/gaoptout" rel="external nofollow noopener" target="_blank">https://tools.google.com/dlpage/gaoptout</a> - for your web browser. Google Analytics Opt-out Browser Add-on provides visitors with the ability to prevent their data from being collected and used by Google Analytics.</p>
                        <p>For more information on the privacy practices of Google, please visit the Google Privacy &amp; Terms web page: <a href="https://policies.google.com/privacy" rel="external nofollow noopener" target="_blank">https://policies.google.com/privacy</a></p>
                        </li>
                        <li>
                        <p><strong>Twitter</strong></p>
                        <p>Twitter remarketing service is provided by Twitter Inc.</p>
                        <p>You can opt-out from Twitter's interest-based ads by following their instructions: <a href="https://support.twitter.com/articles/20170405" rel="external nofollow noopener" target="_blank">https://support.twitter.com/articles/20170405</a></p>
                        <p>You can learn more about the privacy practices and policies of Twitter by visiting their Privacy Policy page: <a href="https://twitter.com/privacy" rel="external nofollow noopener" target="_blank">https://twitter.com/privacy</a></p>
                        </li>
                        <li>
                        <p><strong>Facebook</strong></p>
                        <p>Facebook remarketing service is provided by Facebook Inc.</p>
                        <p>You can learn more about interest-based advertising from Facebook by visiting this page: <a href="https://www.facebook.com/help/516147308587266" rel="external nofollow noopener" target="_blank">https://www.facebook.com/help/516147308587266</a></p>
                        <p>To opt-out from Facebook's interest-based ads, follow these instructions from Facebook: <a href="https://www.facebook.com/help/568137493302217" rel="external nofollow noopener" target="_blank">https://www.facebook.com/help/568137493302217</a></p>
                        <p>Facebook adheres to the Self-Regulatory Principles for Online Behavioural Advertising established by the Digital Advertising Alliance. You can also opt-out from Facebook and other participating companies through the Digital Advertising Alliance in the USA <a href="http://www.aboutads.info/choices/" rel="external nofollow noopener" target="_blank">http://www.aboutads.info/choices/</a>, the Digital Advertising Alliance of Canada in Canada <a href="http://youradchoices.ca/" rel="external nofollow noopener" target="_blank">http://youradchoices.ca/</a> or the European Interactive Digital Advertising Alliance in Europe <a href="http://www.youronlinechoices.eu/" rel="external nofollow noopener" target="_blank">http://www.youronlinechoices.eu/</a>, or opt-out using your mobile device settings.</p>
                        <p>For more information on the privacy practices of Facebook, please visit Facebook's Data Policy: <a href="https://www.facebook.com/privacy/explanation" rel="external nofollow noopener" target="_blank">https://www.facebook.com/privacy/explanation</a></p>
                        </li>
                        <li>
                        <p><strong>Pinterest</strong></p>
                        <p>Pinterest remarketing service is provided by Pinterest Inc.</p>
                        <p>You can opt-out from Pinterest's interest-based ads by enabling the &quot;Do Not Track&quot; functionality of your web browser or by following Pinterest instructions: <a href="http://help.pinterest.com/en/articles/personalization-and-data" rel="external nofollow noopener" target="_blank">http://help.pinterest.com/en/articles/personalization-and-data</a></p>
                        <p>You can learn more about the privacy practices and policies of Pinterest by visiting their Privacy Policy page: <a href="https://about.pinterest.com/en/privacy-policy" rel="external nofollow noopener" target="_blank">https://about.pinterest.com/en/privacy-policy</a></p>
                        </li>
                        </ul>
                        <h2>Usage, Performance and Miscellaneous</h2>
                        <p>We may use third-party Service Providers to provide better improvement of our Service.</p>
                        <ul>
                        <li>
                        <p><strong>Invisible reCAPTCHA</strong></p>
                        <p>We use an invisible captcha service named reCAPTCHA. reCAPTCHA is operated by Google.</p>
                        <p>The reCAPTCHA service may collect information from You and from Your Device for security purposes.</p>
                        <p>The information gathered by reCAPTCHA is held in accordance with the Privacy Policy of Google: <a href="https://www.google.com/intl/en/policies/privacy/" rel="external nofollow noopener" target="_blank">https://www.google.com/intl/en/policies/privacy/</a></p>
                        </li>
                        </ul>
                        <h1>GDPR Privacy</h1>
                        <h2>Legal Basis for Processing Personal Data under GDPR</h2>
                        <p>We may process Personal Data under the following conditions:</p>
                        <ul>
                        <li><strong>Consent:</strong> You have given Your consent for processing Personal Data for one or more specific purposes.</li>
                        <li><strong>Performance of a contract:</strong> Provision of Personal Data is necessary for the performance of an agreement with You and/or for any pre-contractual obligations thereof.</li>
                        <li><strong>Legal obligations:</strong> Processing Personal Data is necessary for compliance with a legal obligation to which the Company is subject.</li>
                        <li><strong>Vital interests:</strong> Processing Personal Data is necessary in order to protect Your vital interests or of another natural person.</li>
                        <li><strong>Public interests:</strong> Processing Personal Data is related to a task that is carried out in the public interest or in the exercise of official authority vested in the Company.</li>
                        <li><strong>Legitimate interests:</strong> Processing Personal Data is necessary for the purposes of the legitimate interests pursued by the Company.</li>
                        </ul>
                        <p>In any case, the Company will gladly help to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Data is a statutory or contractual requirement, or a requirement necessary to enter into a contract.</p>
                        <h2>Your Rights under the GDPR</h2>
                        <p>The Company undertakes to respect the confidentiality of Your Personal Data and to guarantee You can exercise Your rights.</p>
                        <p>You have the right under this Privacy Policy, and by law if You are within the EU, to:</p>
                        <ul>
                        <li><strong>Request access to Your Personal Data.</strong> The right to access, update or delete the information We have on You. Whenever made possible, you can access, update or request deletion of Your Personal Data directly within Your account settings section. If you are unable to perform these actions yourself, please contact Us to assist You. This also enables You to receive a copy of the Personal Data We hold about You.</li>
                        <li><strong>Request correction of the Personal Data that We hold about You.</strong> You have the right to have any incomplete or inaccurate information We hold about You corrected.</li>
                        <li><strong>Object to processing of Your Personal Data.</strong> This right exists where We are relying on a legitimate interest as the legal basis for Our processing and there is something about Your particular situation, which makes You want to object to our processing of Your Personal Data on this ground. You also have the right to object where We are processing Your Personal Data for direct marketing purposes.</li>
                        <li><strong>Request erasure of Your Personal Data.</strong> You have the right to ask Us to delete or remove Personal Data when there is no good reason for Us to continue processing it.</li>
                        <li><strong>Request the transfer of Your Personal Data.</strong> We will provide to You, or to a third-party You have chosen, Your Personal Data in a structured, commonly used, machine-readable format. Please note that this right only applies to automated information which You initially provided consent for Us to use or where We used the information to perform a contract with You.</li>
                        <li><strong>Withdraw Your consent.</strong> You have the right to withdraw Your consent on using your Personal Data. If You withdraw Your consent, We may not be able to provide You with access to certain specific functionalities of the Service.</li>
                        </ul>
                        <h2>Exercising of Your GDPR Data Protection Rights</h2>
                        <p>You may exercise Your rights of access, rectification, cancellation and opposition by contacting Us. Please note that we may ask You to verify Your identity before responding to such requests. If You make a request, We will try our best to respond to You as soon as possible.</p>
                        <p>You have the right to complain to a Data Protection Authority about Our collection and use of Your Personal Data. For more information, if You are in the European Economic Area (EEA), please contact Your local data protection authority in the EEA.</p>
                        <h1>CCPA Privacy</h1>
                        <p>This privacy notice section for California residents supplements the information contained in Our Privacy Policy and it applies solely to all visitors, users, and others who reside in the State of California.</p>
                        <h2>Categories of Personal Information Collected</h2>
                        <p>We collect information that identifies, relates to, describes, references, is capable of being associated with, or could reasonably be linked, directly or indirectly, with a particular Consumer or Device. The following is a list of categories of personal information which we may collect or may have been collected from California residents within the last twelve (12) months.</p>
                        <p>Please note that the categories and examples provided in the list below are those defined in the CCPA. This does not mean that all examples of that category of personal information were in fact collected by Us, but reflects our good faith belief to the best of our knowledge that some of that information from the applicable category may be and may have been collected. For example, certain categories of personal information would only be collected if You provided such personal information directly to Us.</p>
                        <ul>
                        <li>
                        <p><strong>Category A: Identifiers.</strong></p>
                        <p>Examples: A real name, alias, postal address, unique personal identifier, online identifier, Internet Protocol address, email address, account name, driver's license number, passport number, or other similar identifiers.</p>
                        <p>Collected: Yes.</p>
                        </li>
                        <li>
                        <p><strong>Category B: Personal information categories listed in the California Customer Records statute (Cal. Civ. Code § 1798.80(e)).</strong></p>
                        <p>Examples: A name, signature, Social Security number, physical characteristics or description, address, telephone number, passport number, driver's license or state identification card number, insurance policy number, education, employment, employment history, bank account number, credit card number, debit card number, or any other financial information, medical information, or health insurance information. Some personal information included in this category may overlap with other categories.</p>
                        <p>Collected: Yes.</p>
                        </li>
                        <li>
                        <p><strong>Category C: Protected classification characteristics under California or federal law.</strong></p>
                        <p>Examples: Age (40 years or older), race, color, ancestry, national origin, citizenship, religion or creed, marital status, medical condition, physical or mental disability, sex (including gender, gender identity, gender expression, pregnancy or childbirth and related medical conditions), sexual orientation, veteran or military status, genetic information (including familial genetic information).</p>
                        <p>Collected: No.</p>
                        </li>
                        <li>
                        <p><strong>Category D: Commercial information.</strong></p>
                        <p>Examples: Records and history of products or services purchased or considered.</p>
                        <p>Collected: Yes.</p>
                        </li>
                        <li>
                        <p><strong>Category E: Biometric information.</strong></p>
                        <p>Examples: Genetic, physiological, behavioral, and biological characteristics, or activity patterns used to extract a template or other identifier or identifying information, such as, fingerprints, faceprints, and voiceprints, iris or retina scans, keystroke, gait, or other physical patterns, and sleep, health, or exercise data.</p>
                        <p>Collected: No.</p>
                        </li>
                        <li>
                        <p><strong>Category F: Internet or other similar network activity.</strong></p>
                        <p>Examples: Interaction with our Service or advertisement.</p>
                        <p>Collected: Yes.</p>
                        </li>
                        <li>
                        <p><strong>Category G: Geolocation data.</strong></p>
                        <p>Examples: Approximate physical location.</p>
                        <p>Collected: No.</p>
                        </li>
                        <li>
                        <p><strong>Category H: Sensory data.</strong></p>
                        <p>Examples: Audio, electronic, visual, thermal, olfactory, or similar information.</p>
                        <p>Collected: No.</p>
                        </li>
                        <li>
                        <p><strong>Category I: Professional or employment-related information.</strong></p>
                        <p>Examples: Current or past job history or performance evaluations.</p>
                        <p>Collected: No.</p>
                        </li>
                        <li>
                        <p><strong>Category J: Non-public education information (per the Family Educational Rights and Privacy Act (20 U.S.C. Section 1232g, 34 C.F.R. Part 99)).</strong></p>
                        <p>Examples: Education records directly related to a student maintained by an educational institution or party acting on its behalf, such as grades, transcripts, class lists, student schedules, student identification codes, student financial information, or student disciplinary records.</p>
                        <p>Collected: No.</p>
                        </li>
                        <li>
                        <p><strong>Category K: Inferences drawn from other personal information.</strong></p>
                        <p>Examples: Profile reflecting a person's preferences, characteristics, psychological trends, predispositions, behavior, attitudes, intelligence, abilities, and aptitudes.</p>
                        <p>Collected: No.</p>
                        </li>
                        </ul>
                        <p>Under CCPA, personal information does not include:</p>
                        <ul>
                        <li>Publicly available information from government records</li>
                        <li>Deidentified or aggregated consumer information</li>
                        <li>Information excluded from the CCPA's scope, such as:
                        <ul>
                        <li>Health or medical information covered by the Health Insurance Portability and Accountability Act of 1996 (HIPAA) and the California Confidentiality of Medical Information Act (CMIA) or clinical trial data</li>
                        <li>Personal Information covered by certain sector-specific privacy laws, including the Fair Credit Reporting Act (FRCA), the Gramm-Leach-Bliley Act (GLBA) or California Financial Information Privacy Act (FIPA), and the Driver's Privacy Protection Act of 1994</li>
                        </ul>
                        </li>
                        </ul>
                        <h2>Sources of Personal Information</h2>
                        <p>We obtain the categories of personal information listed above from the following categories of sources:</p>
                        <ul>
                        <li><strong>Directly from You</strong>. For example, from the forms You complete on our Service, preferences You express or provide through our Service, or from Your purchases on our Service.</li>
                        <li><strong>Indirectly from You</strong>. For example, from observing Your activity on our Service.</li>
                        <li><strong>Automatically from You</strong>. For example, through cookies We or our Service Providers set on Your Device as You navigate through our Service.</li>
                        <li><strong>From Service Providers</strong>. For example, third-party vendors to monitor and analyze the use of our Service, third-party vendors to deliver targeted advertising to You, third-party vendors for payment processing,  or other third-party vendors that We use to provide the Service to You.</li>
                        </ul>
                        <h2>Use of Personal Information for Business Purposes or Commercial Purposes</h2>
                        <p>We may use or disclose personal information We collect for &quot;business purposes&quot; or &quot;commercial purposes&quot; (as defined under the CCPA), which may include the following examples:</p>
                        <ul>
                        <li>To operate our Service and provide You with our Service.</li>
                        <li>To provide You with support and to respond to Your inquiries, including to investigate and address Your concerns and monitor and improve our Service.</li>
                        <li>To fulfill or meet the reason You provided the information. For example, if You share Your contact information to ask a question about our Service, We will use that personal information to respond to Your inquiry. If You provide Your personal information to purchase a product or service, We will use that information to process Your payment and facilitate delivery.</li>
                        <li>To respond to law enforcement requests and as required by applicable law, court order, or governmental regulations.</li>
                        <li>As described to You when collecting Your personal information or as otherwise set forth in the CCPA.</li>
                        <li>For internal administrative and auditing purposes.</li>
                        <li>To detect security incidents and protect against malicious, deceptive, fraudulent or illegal activity, including, when necessary, to prosecute those responsible for such activities.</li>
                        </ul>
                        <p>Please note that the examples provided above are illustrative and not intended to be exhaustive. For more details on how we use this information, please refer to the &quot;Use of Your Personal Data&quot; section.</p>
                        <p>If We decide to collect additional categories of personal information or use the personal information We collected for materially different, unrelated, or incompatible purposes We will update this Privacy Policy.</p>
                        <h2>Disclosure of Personal Information for Business Purposes or Commercial Purposes</h2>
                        <p>We may use or disclose and may have used or disclosed in the last twelve (12) months the following categories of personal information for business or commercial purposes:</p>
                        <ul>
                        <li>Category A: Identifiers</li>
                        <li>Category B: Personal information categories listed in the California Customer Records statute (Cal. Civ. Code § 1798.80(e))</li>
                        <li>Category D: Commercial information</li>
                        <li>Category F: Internet or other similar network activity</li>
                        </ul>
                        <p>Please note that the categories listed above are those defined in the CCPA. This does not mean that all examples of that category of personal information were in fact disclosed, but reflects our good faith belief to the best of our knowledge that some of that information from the applicable category may be and may have been disclosed.</p>
                        <p>When We disclose personal information for a business purpose or a commercial purpose, We enter a contract that describes the purpose and requires the recipient to both keep that personal information confidential and not use it for any purpose except performing the contract.</p>
                        <h2>Sale of Personal Information</h2>
                        <p>As defined in the CCPA, &quot;sell&quot; and &quot;sale&quot; mean selling, renting, releasing, disclosing, disseminating, making available, transferring, or otherwise communicating orally, in writing, or by electronic or other means, a consumer's personal information by the business to a third party for valuable consideration. This means that We may have received some kind of benefit in return for sharing personal information, but not necessarily a monetary benefit.</p>
                        <p>Please note that the categories listed below are those defined in the CCPA. This does not mean that all examples of that category of personal information were in fact sold, but reflects our good faith belief to the best of our knowledge that some of that information from the applicable category may be and may have been shared for value in return.</p>
                        <p>We may sell and may have sold in the last twelve (12) months the following categories of personal information:</p>
                        <ul>
                        <li>Category A: Identifiers</li>
                        <li>Category B: Personal information categories listed in the California Customer Records statute (Cal. Civ. Code § 1798.80(e))</li>
                        <li>Category D: Commercial information</li>
                        <li>Category F: Internet or other similar network activity</li>
                        </ul>
                        <h2>Share of Personal Information</h2>
                        <p>We may share Your personal information identified in the above categories with the following categories of third parties:</p>
                        <ul>
                        <li>Service Providers</li>
                        <li>Payment processors</li>
                        <li>Our affiliates</li>
                        <li>Our business partners</li>
                        <li>Third party vendors to whom You or Your agents authorize Us to disclose Your personal information in connection with products or services We provide to You</li>
                        </ul>
                        <h2>Sale of Personal Information of Minors Under 16 Years of Age</h2>
                        <p>We do not knowingly collect personal information from minors under the age of 16 through our Service, although certain third party websites that we link to may do so. These third-party websites have their own terms of use and privacy policies and we encourage parents and legal guardians to monitor their children's Internet usage and instruct their children to never provide information on other websites without their permission.</p>
                        <p>We do not sell the personal information of Consumers We actually know are less than 16 years of age, unless We receive affirmative authorization (the &quot;right to opt-in&quot;) from either the Consumer who is between 13 and 16 years of age, or the parent or guardian of a Consumer less than 13 years of age. Consumers who opt-in to the sale of personal information may opt-out of future sales at any time. To exercise the right to opt-out, You (or Your authorized representative) may submit a request to Us by contacting Us.</p>
                        <p>If You have reason to believe that a child under the age of 13 (or 16) has provided Us with personal information, please contact Us with sufficient detail to enable Us to delete that information.</p>
                        <h2>Your Rights under the CCPA</h2>
                        <p>The CCPA provides California residents with specific rights regarding their personal information. If You are a resident of California, You have the following rights:</p>
                        <ul>
                        <li><strong>The right to notice.</strong> You have the right to be notified which categories of Personal Data are being collected and the purposes for which the Personal Data is being used.</li>
                        <li><strong>The right to request.</strong> Under CCPA, You have the right to request that We disclose information to You about Our collection, use, sale, disclosure for business purposes and share of personal information. Once We receive and confirm Your request, We will disclose to You:
                        <ul>
                        <li>The categories of personal information We collected about You</li>
                        <li>The categories of sources for the personal information We collected about You</li>
                        <li>Our business or commercial purpose for collecting or selling that personal information</li>
                        <li>The categories of third parties with whom We share that personal information</li>
                        <li>The specific pieces of personal information We collected about You</li>
                        <li>If we sold Your personal information or disclosed Your personal information for a business purpose, We will disclose to You:
                        <ul>
                        <li>The categories of personal information categories sold</li>
                        <li>The categories of personal information categories disclosed</li>
                        </ul>
                        </li>
                        </ul>
                        </li>
                        <li><strong>The right to say no to the sale of Personal Data (opt-out).</strong> You have the right to direct Us to not sell Your personal information. To submit an opt-out request please contact Us.</li>
                        <li><strong>The right to delete Personal Data.</strong> You have the right to request the deletion of Your Personal Data, subject to certain exceptions. Once We receive and confirm Your request, We will delete (and direct Our Service Providers to delete) Your personal information from our records, unless an exception applies. We may deny Your deletion request if retaining the information is necessary for Us or Our Service Providers to:
                        <ul>
                        <li>Complete the transaction for which We collected the personal information, provide a good or service that You requested, take actions reasonably anticipated within the context of our ongoing business relationship with You, or otherwise perform our contract with You.</li>
                        <li>Detect security incidents, protect against malicious, deceptive, fraudulent, or illegal activity, or prosecute those responsible for such activities.</li>
                        <li>Debug products to identify and repair errors that impair existing intended functionality.</li>
                        <li>Exercise free speech, ensure the right of another consumer to exercise their free speech rights, or exercise another right provided for by law.</li>
                        <li>Comply with the California Electronic Communications Privacy Act (Cal. Penal Code § 1546 et. seq.).</li>
                        <li>Engage in public or peer-reviewed scientific, historical, or statistical research in the public interest that adheres to all other applicable ethics and privacy laws, when the information's deletion may likely render impossible or seriously impair the research's achievement, if You previously provided informed consent.</li>
                        <li>Enable solely internal uses that are reasonably aligned with consumer expectations based on Your relationship with Us.</li>
                        <li>Comply with a legal obligation.</li>
                        <li>Make other internal and lawful uses of that information that are compatible with the context in which You provided it.</li>
                        </ul>
                        </li>
                        <li><strong>The right not to be discriminated against.</strong> You have the right not to be discriminated against for exercising any of Your consumer's rights, including by:
                        <ul>
                        <li>Denying goods or services to You</li>
                        <li>Charging different prices or rates for goods or services, including the use of discounts or other benefits or imposing penalties</li>
                        <li>Providing a different level or quality of goods or services to You</li>
                        <li>Suggesting that You will receive a different price or rate for goods or services or a different level or quality of goods or services</li>
                        </ul>
                        </li>
                        </ul>
                        <h2>Exercising Your CCPA Data Protection Rights</h2>
                        <p>In order to exercise any of Your rights under the CCPA, and if You are a California resident, You can contact Us:</p>
                        <ul>
                        <li>By email: admin@kunnec.com</li>
                        </ul>
                        <p>Only You, or a person registered with the California Secretary of State that You authorize to act on Your behalf, may make a verifiable request related to Your personal information.</p>
                        <p>Your request to Us must:</p>
                        <ul>
                        <li>Provide sufficient information that allows Us to reasonably verify You are the person about whom We collected personal information or an authorized representative</li>
                        <li>Describe Your request with sufficient detail that allows Us to properly understand, evaluate, and respond to it</li>
                        </ul>
                        <p>We cannot respond to Your request or provide You with the required information if We cannot:</p>
                        <ul>
                        <li>Verify Your identity or authority to make the request</li>
                        <li>And confirm that the personal information relates to You</li>
                        </ul>
                        <p>We will disclose and deliver the required information free of charge within 45 days of receiving Your verifiable request. The time period to provide the required information may be extended once by an additional 45 days when reasonably necessary and with prior notice.</p>
                        <p>Any disclosures We provide will only cover the 12-month period preceding the verifiable request's receipt.</p>
                        <p>For data portability requests, We will select a format to provide Your personal information that is readily usable and should allow You to transmit the information from one entity to another entity without hindrance.</p>
                        <h2>Do Not Sell My Personal Information</h2>
                        <p>You have the right to opt-out of the sale of Your personal information. Once We receive and confirm a verifiable consumer request from You, we will stop selling Your personal information. To exercise Your right to opt-out, please contact Us.</p>
                        <p>The Service Providers we partner with (for example, our analytics or advertising partners) may use technology on the Service that sells personal information as defined by the CCPA law. If you wish to opt out of the use of Your personal information for interest-based advertising purposes and these potential sales as defined under CCPA law, you may do so by following the instructions below.</p>
                        <p>Please note that any opt out is specific to the browser You use. You may need to opt out on every browser that You use.</p>
                        <h3>Website</h3>
                        <p>You can opt out of receiving ads that are personalized as served by our Service Providers by following our instructions presented on the Service:</p>
                        <ul>
                        <li>The NAI's opt-out platform: <a href="http://www.networkadvertising.org/choices/" rel="external nofollow noopener" target="_blank">http://www.networkadvertising.org/choices/</a></li>
                        <li>The EDAA's opt-out platform <a href="http://www.youronlinechoices.com/" rel="external nofollow noopener" target="_blank">http://www.youronlinechoices.com/</a></li>
                        <li>The DAA's opt-out platform: <a href="http://optout.aboutads.info/?c=2&amp;lang=EN" rel="external nofollow noopener" target="_blank">http://optout.aboutads.info/?c=2&amp;lang=EN</a></li>
                        </ul>
                        <p>The opt out will place a cookie on Your computer that is unique to the browser You use to opt out. If you change browsers or delete the cookies saved by your browser, You will need to opt out again.</p>
                        <h3>Mobile Devices</h3>
                        <p>Your mobile device may give You the ability to opt out of the use of information about the apps You use in order to serve You ads that are targeted to Your interests:</p>
                        <ul>
                        <li>&quot;Opt out of Interest-Based Ads&quot; or &quot;Opt out of Ads Personalization&quot; on Android devices</li>
                        <li>&quot;Limit Ad Tracking&quot; on iOS devices</li>
                        </ul>
                        <p>You can also stop the collection of location information from Your mobile device by changing the preferences on Your mobile device.</p>
                        <h1>&quot;Do Not Track&quot; Policy as Required by California Online Privacy Protection Act (CalOPPA)</h1>
                        <p>Our Service does not respond to Do Not Track signals.</p>
                        <p>However, some third party websites do keep track of Your browsing activities. If You are visiting such websites, You can set Your preferences in Your web browser to inform websites that You do not want to be tracked. You can enable or disable DNT by visiting the preferences or settings page of Your web browser.</p>
                        <h1>Children's Privacy</h1>
                        <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
                        <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
                        <h1>Your California Privacy Rights (California's Shine the Light law)</h1>
                        <p>Under California Civil Code Section 1798 (California's Shine the Light law), California residents with an established business relationship with us can request information once a year about sharing their Personal Data with third parties for the third parties' direct marketing purposes.</p>
                        <p>If you'd like to request more information under the California Shine the Light law, and if You are a California resident, You can contact Us using the contact information provided below.</p>
                        <h1>California Privacy Rights for Minor Users (California Business and Professions Code Section 22581)</h1>
                        <p>California Business and Professions Code Section 22581 allows California residents under the age of 18 who are registered users of online sites, services or applications to request and obtain removal of content or information they have publicly posted.</p>
                        <p>To request removal of such data, and if You are a California resident, You can contact Us using the contact information provided below, and include the email address associated with Your account.</p>
                        <p>Be aware that Your request does not guarantee complete or comprehensive removal of content or information posted online and that the law may not permit or require removal in certain circumstances.</p>
                        <h1>Links to Other Websites</h1>
                        <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
                        <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
                        <h1>Changes to this Privacy Policy</h1>
                        <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
                        <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
                        <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
                        <h1>Contact Us</h1>
                        <p>If you have any questions about this Privacy Policy, You can contact us:</p>
                        <ul>
                        <li>By email: terms@kunnec.com</li>
                        </ul>...
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Contact Modal  -->
    <div class="modal fade" id="ctModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Contact</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body">
                    <p class="mb-5"><strong>Contact Payments:</strong></br> admin@kunnec.com</p>
                    <p class="mb-5"><strong>Terms and Privacy Policy</strong></br> terms@kunnec.com</p>
                    <p class="mb-5"><strong>Copyright Violations</strong></br> dmca@kunnec.com</p>
                    <p class="mb-5"><strong>Address:</strong></br> Kunnec.com </br> 304 S. Jones Blvd # 49589 </br> Las Vegas, NV 89107</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal About -->
    <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> About</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata">
                        <source src="{{ asset('public/promo_vids/About_Commercial.mp4')}}#t=0.5" type="video/mp4"> 
                    </video>
                    <p class="mb-5">Kunnec.com is a platform for artists who share the same interests in art, design, and music, who want to work together. Kunnec.com is the perfect place to make this happen. Kunnec.com is an artistic community. We charge a monthly or a yearly fee to kunnec's who want to use our services to connect further with the community by using Kunnec Social, Kunnec Events, Kunnec Jobs, Kunnec Spot, Kunnec Record and Kunnec Show. </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Your Data -->
    <div class="modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Spot</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/Joining Room.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"> Kunnec Spot is an online chat service platform used for video communications and messaging, for peer to peer or meetings of three users.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Modal Payments -->
    <div class="modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Payments</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                     <p class="mb-5">Kunnec.com is a private comminuty of artists and lovers of artist's. When you want to add content to the services of Kunnec Social, Kunnec SRecord, and Kunnec Show, there is a monthly fee of $6.99 a month, also there is a 15% charge on the monies generated back to Kunnec.com. We include an analytics page so you can keep track of your status. We have a monthly fee for these services because we don't want to add advertising on the site. So for us to maintain the services me must charge a fee. We appreciate your understanding. <div class=""></div></p>
                    <p class="mb-5"><strong>PAYOUTS:</strong> To use Kunnec.com services, you must have a paypal account, so all your money can be distibuted to this account. We do not hold any of your money. Kunnec.com gets the 15% for the use of our services and the monthly fee. Once the transaction has been completed your monies is directly deposited to your account monthly.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Language -->
    <div class="modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Language</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/Language.mp4')}}" type="video/mp4"> </video>
                    <!-- <img class="mx-auto d-block" src="images/toolbar.png" alt=""  /> -->
                    <p class="mb-5"><strong>Translate:</strong> In the top toolbar, there is a google translate drop down menu. Select the language you want to use and the entire site changes to that language. Also, with the translate box, you can use this to communicate with anyone of a different language, by switching back to your language.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Social -->
    <div class="modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Social</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong> Under this a section, you can stay connected with everyone. You can post images, speak about yourself, and scroll through your feed of your kunnecs.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec to Me -->
    <div class="modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Jobs</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Kunnec Jobs allows users to describe their posted job with payment range and time range needed to complete the job.It gives users access to interview users in real time through our video chat application Kunnec Spot. </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Modal Kunnec Screen -->
    <div class="modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-labelledby="portfolioModal17Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Record</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong>There are suggested requirements for the best expierence using Kunnec Record</strong></p>
                    <p class="mb-5"><strong><font color="red"> A second Monitor is suggestedd for the best results.</font></strong><br/>Use Kunnec Record ( tutoring, freelancer, designer, video editor, music editor ) all in real time. Go one on one with a user live. Your student will be able to see and hear you with camera and microphone ability. They can follow along to what your doing off your desktop. That's right your desktop. <strong>Kunnec Record captures, Windows desktops, Apple Desktops, and Chromebook desktops.</strong> Just select the desktop view option and they can watch you work while you interact with the user. Using Kunnec Record is best used with a second monitor. With the second monitor, you select the second desktop and the flow is smooth. You are able to send files back and forth between one another. Kunnec Record users can be rated and reviewed. Users can select by the category they want realtime help in.</p>
                    <p class="mb-5"><strong>Kunnec Screen Price:</strong> You set your price. You can set the payment by the minute or by the hour. When a user selects an hour with a Kunnec Record, there is a 60 minute countdown posted in the top left corner.<strong><font color="red"> If dis-connected before the hour time is completed. </font></strong> No worries. Just log back into your Kunnec Screen users class page and your time ( countdown ) will begin from the time of dis-connection. If the user doesn't log back in after 15 minutes, the user will be charged the entire hour credit price.</p>
                    <p class="mb-5"><strong>Payment:</strong> Kunnec Record users get money directly deposited into their paypal account. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the Kunnec Screen users receives 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Show -->
    <div class="modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-labelledby="portfolioModal11Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Show</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Kunnec Show is a video sharing platform where kunnec's can make videos from 10 seconds in our short section or create long form videos. Build a community around your videos and you have the option to go live and build your community. </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Course -->
    <div class="modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-labelledby="portfolioModal12Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Messages</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/Kunnec Message.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong> Instant messaging online with your Kunnec's in real time without using a phone. Forward conversations, response copy options, emoji's and upload all files up to 50mb.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec to You -->
    <div class="modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec to You</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Create a user page, where you can showcase your skills and talents, and have users search for you. Just select a category where you fit and post. Users can leave ratings and reviews.</p>
                    <p class="mb-5"><strong>Options:</strong> You can add a portfolio of images, videos, and music you want to promote.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Events -->
    <div class="modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-labelledby="portfolioModal15Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Events</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/K_Logo6.png') }}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls preload="metadata"><source src="{{ asset('public/promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>  Discover events and promote your events through Kunnec Events. Stay connected to your attendees and keep them notified through RSVP. Easily post and manage your events through Kunnec to grow your brand</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
@endsection
@section('additional-js')
<script>
    $(document).ready(function(){
        // autoplay video when the modal is shown
        // $(".modal").on('show.bs.modal', function (e) {
        //     $(this).find('video')[0].play();
        // });        

        // pause video when the modal is hidden
        $(".modal").on('hide.bs.modal', function (e) {
            if($(this).find('video').length)
                $(this).find('video')[0].pause();
        });        
    })
</script>
@endsection