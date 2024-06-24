@extends('layouts.user')
@section('title', 'Show Channel')
@section('css/vid')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/vid_card.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/videoPlayerMain.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/videoPlayer.theme4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/videoPlayer.theme4_Playlist.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('https://use.fontawesome.com/releases/v5.0.7/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/font-awesome.css') }}" >
    <!-- Bootstrap JS -->
	
    @endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p style="color: #FFFFFF">
            <a href="{{ url('k_live/live') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Show
                </a> |&nbsp;
                <a href="{{ url('k_live/live_settings') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;">
                    </i> 
                </a>
            </p>
        </div>
        <div class="col-sm d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span></button>
            </p>
        </div>
    </div>
	<div class="collapse" id="collapseSort1">
	    <div class="row p-3">
            <div class="col">
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control" type="text" placeholder="Search Shows" aria-label="Search">
                    </div>
                    <div class="ml-2">
                    <button href="#!" class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search</button>
                    </div>
                </form>
            </div>
	    </div>
	    <div class=" col pb-4">
			<div class="border p-card rounded">
				<div class="media">
                    <div class="row">
					    <div class="col-sm">
                            <div class="form-group">
                                <select class="custom-select" id="card-holder-type" name="customSelectType" required="required">
                                    <option value="">Type of Show ...</option>
                                    <option value="Afrikanns">Live</option>
                                    <option value="Albanian">Recorded</option>
                                </select>
				            </div>
					        <div class="form-group">
                                <select class="custom-select" id="card-holder-category" name="customSelectCategory" required="required">
                                    <option value="">Select Category ...</option>
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
                                <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                    <option value="">Select Language ...</option>
                                    <option value="Afrikanns">Afrikanns</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Albanian">Amharic</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Armenian">Armenian</option>
                                    <option value="Basque">Basque</option>
                                    <option value="Albanian">Belarusian</option>
                                    <option value="Bengali">Bengali</option>
                                    <option value="Albanian">Bosnian</option>
                                    <option value="Bulgarian">Bulgarian</option>
                                    <option value="Catalan">Catalan</option>
                                    <option value="Cambodian">Cambodian</option>
                                    <option value="Albanian">Cebuano</option>
                                    <option value="Albanian">Chichwea</option>
                                    <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                    <option value="Albanian">Corsican</option>
                                    <option value="Croation">Croation</option>
                                    <option value="Czech">Czech</option>
                                    <option value="Danish">Danish</option>
                                    <option value="Dutch">Dutch</option>
                                    <option value="English">English</option>
                                    <option value="Estonian">Estonian</option>
                                    <option value="Albanian">Filipino</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finnish">Finnish</option>
                                    <option value="French">French</option>
                                    <option value="Albanian">Gallician</option>
                                    <option value="Georgian">Georgian</option>
                                    <option value="German">German</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Gujarati">Gujarati</option>
                                    <option value="Albanian">Hausa</option>
                                    <option value="Albanian">Cebuano</option>
                                    <option value="Hebrew">Hawaiian</option>
                                    <option value="Albanian">Hebrew</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Albanian">Hmong</option>
                                    <option value="Hungarian">Hungarian</option>
                                    <option value="Icelandic">Icelandic</option>
                                    <option value="Albanian">Igbo</option>
                                    <option value="Indonesian">Indonesian</option>
                                    <option value="Irish">Irish</option>
                                    <option value="Italian">Italian</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Javanese">Javanese</option>
                                    <option value="Albanian">Kannada</option>
                                    <option value="Albanian">Kazakh</option>
                                    <option value="Albanian">Khmer</option>
                                    <option value="Korean">Korean</option>
                                    <option value="Albanian">Kurdish</option>
                                    <option value="Albanian">Kyrgyz</option>
                                    <option value="Albanian">Lao</option>
                                    <option value="Latin">Latin</option>
                                    <option value="Latvian">Latvian</option>
                                    <option value="Lithuanian">Lithuanian</option>
                                    <option value="Albanian">Luxembourgish</option>
                                    <option value="Macedonian">Macedonian</option>
                                    <option value="Albanian">Malagasy</option>
                                    <option value="Malay">Malay</option>
                                    <option value="Malayalam">Malayalam</option>
                                    <option value="Maltese">Maltese</option>
                                    <option value="Maori">Maori</option>
                                    <option value="Marathi">Marathi</option>
                                    <option value="Mongolian">Mongolian</option>
                                    <option value="Albanian">Myammar</option>
                                    <option value="Nepali">Nepali</option>
                                    <option value="Norwegian">Norwegian</option>
                                    <option value="Albanian">Pashto</option>
                                    <option value="Persian">Persian</option>
                                    <option value="Polish">Polish</option>
                                    <option value="Portuguese">Portuguese</option>
                                    <option value="Punjabi">Punjabi</option>
                                    <option value="Quechua">Quechua</option>
                                    <option value="Romanian">Romanian</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Samoan">Samoan</option>
                                    <option value="Albanian">Scots Gaelic</option>
                                    <option value="Serbian">Serbian</option>
                                    <option value="Albanian">Sesotho</option>
                                    <option value="Albanian">Shona</option>
                                    <option value="Albanian">Sinhala</option>
                                    <option value="Slovak">Slovak</option>
                                    <option value="Slovenian">Slovenian</option>
                                    <option value="Albanian">Somali</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Albanian">Sundanese</option>
                                    <option value="Swahili">Swahili</option>
                                    <option value="Swedish ">Swedish </option>
                                    <option value="Albanian">Tajik</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Tatar">Tatar</option>
                                    <option value="Telugu">Telugu</option>
                                    <option value="Thai">Thai</option>
                                    <option value="Tibetan">Tibetan</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Ukranian">Ukranian</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Uzbek">Uzbek</option>
                                    <option value="Vietnamese">Vietnamese</option>
                                    <option value="Welsh">Welsh</option>
                                    <option value="Xhosa">Xhosa</option>
                                    <option value="Albanian">Yiddish</option>
                                    <option value="Albanian">Yoruba</option>
                                    <option value="Albanian">Zulu</option>
                                </select>
				            </div>
                            <div class="form-group">
                                <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                    <option value="">Select Country ...</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            
                            <div class="form-group">
                                <select class="custom-select" id="card-holder-state" name="customSelectState required="required">
                                <option value="">Select State...</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
						<div class="form-group">
                            <select class="custom-select" id="card-holder-city" name="customSelectCity" required="required">
                                <option value="">Select City ...</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
					 
					<div class="col-sm">
					    <label for="card-holder-country" style="color: #F1C40F">Credit Price</label>
						   <div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">per min.  ( 300 )</label>
                        </div>
					    <div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox2" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox2" style="color: #FFFFFF">per 15 min.  ( 300 )</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox3" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox3" style="color: #FFFFFF">per hr. ( 900 )</label>
                        </div>
						
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox4" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox4" style="color: #FFFFFF">flat-fee ( 900 )</label>
                        </div>
						  
                        </div>
					 
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Sub-Category</label>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">General ( 1200 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Entertainment ( 400 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Political ( 150 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Comedic ( 175 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Personal ( 425 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Educational ( 425 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Mature ( 425 )</label>
                            </div>
                        </div> 
                        
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Available</label>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Everyday( 1200 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Mondays ( 400 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Tuesdays( 150 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Wednesdays ( 175 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Thursdays( 425 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Fridays( 425 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Saturdays( 425 )</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Sundays( 425 )</label>
                            </div>
                        </div>
                        
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Ratings</label> 
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"><div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1" style="color: #FFFFFF">4.5 & above(20)</span>
                                        </div>
                                    </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"><div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="ml-1" style="color: #FFFFFF">4.0 & above(20)</span>
                                        </div>
                                    </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1"><div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1" style="color: #FFFFFF">3.5 & above(800)</span>
                                        </div>
                                    </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1"><div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="ml-1" style="color: #FFFFFF">3.0 & above(20)</span>
                                        </div>
                                    </label>
                            </div>
						    <button class="btn btn-warning mr-5 mb-1" type="button">
                                <a href="{{ url('k_live/live_list') }}">Filter</a>
                            </button>
				        </div>
				    </div>
			    </div>
            </div>
	    </div>
    </div>
</div>

<div style="background-image: url(../user-dash/k_live/images/clouds.jpg); height: 225px; background-repeat: no-repeat; background-size: 1090px 225px;" >
    <div class="col-lg-12">
		<div class="d-inline-block">   
            <div class="notification-avatar">
                <div class="avatar avatar-4xl mr-3 mt-5">
                    <img class="img-thumbnail img-fluid rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/2.jpg')}}" alt="" />
                </div>
            </div> 
        </div> 
			
         <div class="d-inline-block">   
            <h3 class="mb-1" style="color:#009900;">
                <strong>Emma Watson</strong>
            </h3>
            <p>
                <button class="btn btn-success rounded-capsule mr-1 mb-1" type="button"  href="#!" data-toggle="modal" data-target="#joinModal">
                    <span class="fas fa-plus mr-1" data-fa-transform="shrink-3" style="color:#FFFFFF;"></span>Join - $5.99 /mo.
                </button>
                <small class="text-muted">
                    <button class="btn btn-warning btn-sm rounded-capsule mb-1" type="button">
                        <span data-fa-transform="shrink-3"></span>
                        <a href="{{ url('k_live/live_details') }}">Go To Live</a>
                    </button>
                </small>
            </p> 
        </div>
        <div class="col-sm d-flex flex-row-reverse">
            <div class="row">
                <div class="col">
                    <i class="fab fa-facebook-square" style="color:#009900;" aria-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fab fa-instagram" style="color:#009900;" ></i>
                </div>
                <div class="col">
                    <i class="fab fa-twitter" style="color:#009900;" ></i>
                </div>
                <div class="col">
                    <i class="fab fa-pinterest" style="color:#009900;" ></i>
                </div>
                <div class="col">
                    <i class="fab fa-youtube" style="color:#009900;" ></i>
                </div>
                <div class="col">
                    <i class="fab fa-linkedin-in" style="color:#009900;" ></i>
                </div>
            </div>
        </div>
    </div>
</div>		

<div class="card mb-3">
    <div class="card-body bg-light overflow-hidden">
        <div class="row">
            <div class="col-12">
				<!-- Start of Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true"><i class="fas fa-home"></i></i> Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" id="video-tab" data-toggle="tab" href="#tab-video" role="tab" aria-controls="tab-video" aria-selected="false"><i class="fas fa-video"></i> Recorded Shows</a></li>
				</ul>

                <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                        <div>
                            <div class="card-body p-0">
							    <div class="row">
                                    <div class="col-sm">
                                    <table class="table table-hover">
                                        <thead style="color:#FFFFFF; background-color:#009900;">
                                            <tr>
                                            <th scope="col">Days</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Monday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tuesday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Wednesday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Thursday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Friday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Saturday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Sunday</th>
                                                <td>7:00pm</td>
                                                <td>25 credits</td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    </div>
                                    <div class="col-sm">
                                        <h3 class="mb-1" style="color:#009900;"><strong>Live Show Times</strong></h3>
	                                    <small class="text-muted"> Published: April 4, 2020 </small><br>
	                                    <small class="text-muted"> Rated: </small><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
    
	                                    <hr class="style12">
	
	                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="tab-pane fade" id="tab-video" role="tabpanel" aria-labelledby="video-tab">
                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/4.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="{{ url('k_live/live_recorded') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Lost in the City</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/1.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Look at this Skyline</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Rico Wade</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/2.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Look at this Skyline</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Rico Wade</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/3.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Lost in the City</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					    <hr class="style12">
								
                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/5.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">23:18</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">21 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 month ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">See the Lights Behind </h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Lea</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/6.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">12:05</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">1001 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 week ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Watching things go by always</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Jessica</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/7.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Lost in the City</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/8.jpg') }}" alt="Card image cap">
                                        <div class="overlay">
                                            <h2>
                                                <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                            </h2>
                                            <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                        </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Look at this Skyline</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Rico Wade</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        
                        <hr class="style12">
                                        
                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/9.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Lost in the City</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/10.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Look at this Skyline</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Rico Wade</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/11.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">23:18</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">21 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 month ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">See the Lights Behind </h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Lea</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/12.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">12:05</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">1001 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 week ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Watching things go by always</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Jessica</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                        
                        <hr class="style12">
                                        
                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/1.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Lost in the City</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/2.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Look at this Skyline</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Rico Wade</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/3.jpg') }}" alt="Card image cap">
                                        <div class="overlay">
                                            <h2>
                                                <span class="badge badge-light"><small class="text-green">23:18</small></span>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">21 Views </small><small class="text-white"> | </small></p>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 month ago</small></p>
                                            </h2>
                                            <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                        </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">See the Lights Behind </h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Lea</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/4.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Look at this Skyline</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Rico Wade</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        
                        <hr class="style12">
                        
                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/5.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Lost in the City</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/6.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">23:18</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">21 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 month ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">See the Lights Behind </h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Lea</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/7.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">12:05</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">1001 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 week ago</small></p>
                                                </h2>
                                                <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">Watching things go by always</h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Jessica</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/shows/8.jpg') }}" alt="Card image cap">
                                        <div class="overlay">
                                            <h2>
                                                <span class="badge badge-light"><small class="text-green">23:18</small></span>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">21 Views </small><small class="text-white"> | </small></p>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 month ago</small></p>
                                            </h2>
                                            <a class="info" href="#"><img class="rounded-circle" src="{{ asset('public/user-dash/k_live/play.png') }}" height="50px" width="50px" alt="" /></a>
                                        </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;">See the Lights Behind </h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" />
                                        </div>
                                        <div class="media-body ml-2">
                                            <h5 class="mb-0 fs-0">Lea</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
								
						<hr class="style12">
					    <a class="btn btn-success btn-sm" href="#!">Load More</a>
                    </div>
             
                    
					
					

                <!-- End of Wish List -->
                </div>

                </div>
                
              </div>
            </div>
          </div>
   
</div>
<!-- End of Page -->
        </div>
		

@endsection
@section('additional-js')
@endsection