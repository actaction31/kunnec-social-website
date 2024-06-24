@extends('layouts.user')
@section('title', 'Music Settings')
@section('css/profile')
<link href="{{ asset('user-dash/css/profile.css') }}" rel="stylesheet"></link>
<link href="{{ asset('user-dash/css/bootstrap2-toggle.min.css') }}" rel="stylesheet">
<link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p>
                <a href="{{ url('k_music/music') }}" style="color: #FFFFFF"><img src="{{ asset('images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Music</a>
            |&nbsp;
                <a href="{{ url('k_music/music_settings') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;">
                    </i> 
                </a>
            </p>
        </div>
      
        <div class="col-sm d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample">
                    <span class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div>
    </div>
	<div class="collapse" id="collapseSort1">
	    <div class="row p-3">
	        <div class="col">
            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control" type="text" placeholder="Search Music" aria-label="Search">
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
					<div class="col-sm-3">
					    <div class="form-group">
			                <select class="custom-select" id="card-holder-category" name="customSelectCategory" required="required">
					            <option value="">Select Category ...</option>
                                <optgroup label="Music" >
								    <option>Acoustic</option>
                                    <option>Alternative</option>
                                    <option>Bass</option>
                                    <option>Blues</option>
                                    <option>Boom Bap</option>
                                    <option>Classical</option>
                                    <option>Club</option>
                                    <option>Crunk</option>
                                    <option>Country</option>
                                    <option>Dance</option>
                                    <option>East Coast</option>
                                    <option>EDM</option>
                                    <option>Electronic</option>
                                    <option>Film</option>
                                    <option>Funk</option>
                                    <option>Games</option>
                                    <option>Gangster</option>
                                    <option>Gospel</option>
                                    <option>HipHop</option>
									<option>Jazz</option>
                                    <option>Latin</option>
                                    <option>Metal</option>
                                    <option>Midwest</option>
                                    <option>New School</option>
                                    <option>Old School</option>
                                    <option>Pop</option>
                                    <option>R&B</option>
                                    <option>Reggae</option>
                                    <option>Raggaeton</option>
									<option>Rock</option>
                                    <option>Soul</option>
                                    <option>South</option>
                                    <option>Trap</option>
                                    <option>Urban</option>
                                    <option>West Coast</option>
									<option>World</option>
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
					 
					<div class="col-2">
					    <label for="card-holder-country" style="color: #F1C40F">Music</label>
					    <div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Songs</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Albums</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">EP's</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Instrumentals</label>
                        </div>
						<br>
					</div>

					<div class="col-2">
						<label for="card-holder-country" style="color: #F1C40F">Sort</label>
						<div class="form-group form-check">
						    <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Artists </label>
                        </div>
                        <div class="form-group form-check">
						    <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Bands</label>
                        </div>
                        <div class="form-group form-check">
						    <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Groups </label>
                        </div>
                        <div class="form-group form-check">
						    <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Producer </label>
                        </div>
                        <div class="form-group form-check">
						    <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Engineer </label>
                        </div>
				     </div>
					 
					 <div class="col-sm">
					    
						
				     </div>
					 
					<div class="col-sm-3">
					    
						
						<button class="btn btn-warning mr-5 mb-1" type="button"><a href="{{ url('k_music/music_list') }}">Filter</a></button>
				    </div>
				</div>
			</div>
        </div>
	</div>
</div>
</div>

<div class="card">
    <div class="card-body">
	
	<!-- Start of Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="setup-tab" data-toggle="tab" href="#tab-setup" role="tab" aria-controls="tab-setup" aria-selected="true">Upload Song</a></li>
            <li class="nav-item"><a class="nav-link" id="album-tab" data-toggle="tab" href="#tab-album" role="tab" aria-controls="tab-album" aria-selected="false">Upload Album</a></li>
            <li class="nav-item"><a class="nav-link" id="course-tab" data-toggle="tab" href="#tab-course" role="tab" aria-controls="tab-course" aria-selected="false">My Songs</a></li>
            <li class="nav-item"><a class="nav-link" id="purchase-tab" data-toggle="tab" href="#tab-purchase" role="tab" aria-controls="tab-purchase" aria-selected="true">My Albums</a></li>
		    <li class="nav-item"><a class="nav-link" id="anal-tab" data-toggle="tab" href="#tab-anal" role="tab" aria-controls="tab-anal" aria-selected="true">Analytics</a></li>
		</ul>

        <div class="tab-content border-x border-bottom p-3" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-setup" role="tabpanel" aria-labelledby="setup-tab">
                <div class="card">
                    <div class="card-body p-0">
					    <hr class="style-12">
					    <div class="row no-gutters">
                            <div class="col-lg-8 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Song Upload</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="custom-select" id="card-type-category" name="customSelectCategory" required="required">
                                                            <option value="">Select Type ...</option>
                                                            <optgroup label="Music" >
                                                                <option>Artist</option>
                                                                <option>Band</option>
                                                                <option>Group</option>
                                                                <option>Producer</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="custom-select" id="card-genre-category" name="customSelectCategory" required="required">
                                                            <option value="">Select Genre ...</option>
                                                            <optgroup label="Music" >
                                                                <option>Acoustic</option>
                                                                <option>Alternative</option>
                                                                <option>Bass</option>
                                                                <option>Blues</option>
                                                                <option>Boom Bap</option>
                                                                <option>Classical</option>
                                                                <option>Club</option>
                                                                <option>Crunk</option>
                                                                <option>Country</option>
                                                                <option>Dance</option>
                                                                <option>East Coast</option>
                                                                <option>EDM</option>
                                                                <option>Electronic</option>
                                                                <option>Film</option>
                                                                <option>Funk</option>
                                                                <option>Games</option>
                                                                <option>Gangster</option>
                                                                <option>Gospel</option>
                                                                <option>HipHop</option>
                                                                <option>Jazz</option>
                                                                <option>Latin</option>
                                                                <option>Metal</option>
                                                                <option>Midwest</option>
                                                                <option>New School</option>
                                                                <option>Old School</option>
                                                                <option>Pop</option>
                                                                <option>R&B</option>
                                                                <option>Reggae</option>
                                                                <option>Raggaeton</option>
                                                                <option>Rock</option>
                                                                <option>Soul</option>
                                                                <option>South</option>
                                                                <option>Trap</option>
                                                                <option>Urban</option>
                                                                <option>West Coast</option>
                                                                <option>World</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
					                            <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Name</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4 text-lg-right">
                                                                <label class="mb-0" for="school">Upload Song Image</label>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <body onload="loadImageFile();">
                                                                    <input id="upload-Image" type="file" onchange="loadImageFile();" />
                                                                    <tr>
                                                                        <td><img id="upload-Preview"/></td>
                                                                    </tr>
                                                                </body>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4 text-lg-right">
                                                                <label class="mb-0" for="school">Upload Song </label>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <body onload="loadImageFile();">
                                                                    <input id="upload-Image" type="file" onchange="loadImageFile();" />
                                                                    <tr>
                                                                        <td><img id="upload-Preview"/></td>
                                                                    </tr>
                                                                </body>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
					                            <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Company Name</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Publisher( s )</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Producer( s )</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Executive Producer( s )</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker form-control">
					                                        <option value="">Year Song Copyrighted & Published ...</option>
								                                <optgroup label="Released" >
								                                    <option></option>
									                                <option>1950</option>
									                                <option>1951</option>
									                                <option>1952</option>
									                                <option>1953</option>
									                                <option>1954</option>
                                                                    <option>1955</option>
                                                                    <option>1956</option>
                                                                    <option>1957</option>
                                                                    <option>1958</option>
                                                                    <option>1959</option>
                                                                    <option>1960</option>
                                                                    <option>1961</option>
                                                                    <option>1962</option>
                                                                    <option>1963</option>
                                                                    <option>1964</option>
                                                                    <option>1965</option>
                                                                    <option>1966</option>
                                                                    <option>1967</option>
                                                                    <option>1968</option>
                                                                    <option>1969</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>1974</option>
                                                                    <option>1975</option>
                                                                    <option>1976</option>
                                                                    <option>1977</option>
                                                                    <option>1978</option>
                                                                    <option>1979</option>
                                                                    <option>1980</option>
                                                                    <option>1981</option>
                                                                    <option>1982</option>
                                                                    <option>1983</option>
                                                                    <option>1984</option>
                                                                    <option>1985</option>
                                                                    <option>1986</option>
                                                                    <option>1987</option>
                                                                    <option>1988</option>
                                                                    <option>1989</option>
                                                                    <option>1990</option>
                                                                    <option>1991</option>
                                                                    <option>1992</option>
                                                                    <option>1993</option>
                                                                    <option>1994</option>
                                                                    <option>1995</option>
                                                                    <option>1996</option>
                                                                    <option>1997</option>
                                                                    <option>1998</option>
                                                                    <option>1999</option>
                                                                    <option>2000</option>
                                                                    <option>2001</option>
                                                                    <option>2002</option>
                                                                    <option>2003</option>
                                                                    <option>2004</option>
                                                                    <option>2005</option>
                                                                    <option>2006</option>
                                                                    <option>2007</option>
                                                                    <option>2008</option>
                                                                    <option>2009</option>
                                                                    <option>2010</option>
                                                                    <option>2011</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                    <option>2024</option>
                                                                    <option>2025</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="intro">Song Info Section</label>
                                                        <textarea class="form-control" id="intro" name="intro" cols="30" rows="13"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button class="btn btn-success" type="submit">Update </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Save Song</h5>
                                    </div>
                                    <div class="card-body bg-light"><a class="btn btn-success d-block" href="#!" type="button" href="#!">Save Song</a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-4 pl-lg-2">
                                    <div class="sticky-top sticky-sidebar">
                                        <div class="card mb-3 overflow-hidden">
                                            <div class="card-body bg-light">
                                                <h6 class="mt-2 font-weight-bold">Samples<span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="By selecting YES you are fully responsible for monies being paid to the copyright owner of the sample. You are agreeing that Kunnec.com is voided from any financial obligations."><span class="fas fa-question-circle"></span></span></h6>
                                                <div class="form-group">
                                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                        <option value="">Composition contains sample...</option>
                                                        <option value="1">No</option>
                                                        <option value="2">Yes</option>
                                                    </select>
                                                </div>
				                            </div>
                                            <div class="card-body bg-light">
                                                <h6 class="mt-2 font-weight-bold">Song Rating<span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="This is set for informing the customer of what the compositions subject matter is about "><span class="fas fa-question-circle"></span></span></h6>
                                                <div class="form-group">
                                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                        <option value="">Select Song  Rating...</option>
                                                        <option value="1">For Everyone</option>
                                                        <option value="2">Explicit lyrics</option>
                                                    </select>
                                                </div>
				                            </div>
                                            <div class="card-body bg-light">
                                                <h6 class="mt-2 font-weight-bold">Song Price<span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="This is where you set your price"><span class="fas fa-question-circle"></span></span></h6>
                                                <div class="form-group">
                                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                        <option value="">Credit Price...</option>
                                                        <option value="1">1 credit</option>
                                                        <option value="2">2 credits</option>
                                                        <option value="3">3 credit</option>
                                                        <option value="4">4 credits</option>
                                                        <option value="5">5 credit</option>
                                                        <option value="6">6 credits</option>
                                                        <option value="7">7 credit</option>
                                                        <option value="8">8 credits</option>
                                                        <option value="9">9 credit</option>
                                                        <option value="10">10 credits</option>
                                                        <option value="11">11 credit</option>
                                                        <option value="12">12 credits</option>
                                                    </select>
                                                </div>
				                            </div>
                                            <div class="card">
                                                <div class="card-body bg-light">
                                                    <div class="container">
                                                        <h5 class="fs-0">Delete this Song</h5>
                                                        <p class="fs--1">Once you delete this song, there is no going back. Please be certain.</p><a class="btn btn-danger d-block" href="#!" type="button" data-toggle="modal" data-target="#deleteSongModal">Delete Song</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		                    </div>			
					    </div>
                    </div>
                </div>
                <!-- Start of My Album Tab -->
                <div class="tab-pane fade" id="tab-album" role="tabpanel" aria-labelledby="album-tab">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-lg-8 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Album Upload</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="custom-select" id="card-type-category" name="customSelectCategory" required="required">
                                                            <option value="">Select Type ...</option>
                                                            <optgroup label="Music" >
                                                                <option>Artist</option>
                                                                <option>Band</option>
                                                                <option>Group</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="custom-select" id="card-genre-category" name="customSelectCategory" required="required">
                                                            <option value="">Select Genre ...</option>
                                                            <optgroup label="Music" >
                                                                <option>Acoustic</option>
                                                                <option>Alternative</option>
                                                                <option>Bass</option>
                                                                <option>Blues</option>
                                                                <option>Boom Bap</option>
                                                                <option>Classical</option>
                                                                <option>Club</option>
                                                                <option>Crunk</option>
                                                                <option>Country</option>
                                                                <option>Dance</option>
                                                                <option>East Coast</option>
                                                                <option>EDM</option>
                                                                <option>Electronic</option>
                                                                <option>Film</option>
                                                                <option>Funk</option>
                                                                <option>Games</option>
                                                                <option>Gangster</option>
                                                                <option>Gospel</option>
                                                                <option>HipHop</option>
                                                                <option>Jazz</option>
                                                                <option>Latin</option>
                                                                <option>Metal</option>
                                                                <option>Midwest</option>
                                                                <option>New School</option>
                                                                <option>Old School</option>
                                                                <option>Pop</option>
                                                                <option>R&B</option>
                                                                <option>Reggae</option>
                                                                <option>Raggaeton</option>
                                                                <option>Rock</option>
                                                                <option>Soul</option>
                                                                <option>South</option>
                                                                <option>Trap</option>
                                                                <option>Urban</option>
                                                                <option>West Coast</option>
                                                                <option>World</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
					                            <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Name</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="file-upload-wrapper">
                                                        <input type="file" id="input-file-now" class="file-upload" />
                                                    </div>
                                                    <div class="form-group p-3">
                                                        <h5 class="card-title mb-3">Upload Songs of the Album</h5>
                                                        <label for="inputUsername">Album Title</label>
                                                        <div class="col-sm-12 well">
                                                            <form accept-charset="UTF-8" action="" method="POST">
                                                                <textarea class="form-control" id="text" name="text" 
                                                                maxlength="200" placeholder="Type album title ..." rows="1"></textarea>
                                                                <span class="pull-right label label-default" id="count_message"></span>
                                                                <br>
                                                            </form>
                                                        </div>
                                                        <div id="drag-drop-area">
                                                    </div>
                                                </div>
					                            <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Company Name</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Publisher( s )</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Producer( s )</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Executive Producer( s )</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker form-control">
					                                        <option value="">Year Album Copyrighted & Published ...</option>
								                                <optgroup label="Released" >
								                                    <option></option>
									                                <option>1950</option>
									                                <option>1951</option>
									                                <option>1952</option>
									                                <option>1953</option>
									                                <option>1954</option>
                                                                <option>1955</option>
                                                                <option>1956</option>
                                                                <option>1957</option>
                                                                <option>1958</option>
                                                                <option>1959</option>
                                                                <option>1960</option>
                                                                <option>1961</option>
                                                                <option>1962</option>
                                                                <option>1963</option>
                                                                <option>1964</option>
                                                                <option>1965</option>
                                                                <option>1966</option>
                                                                <option>1967</option>
                                                                <option>1968</option>
                                                                <option>1969</option>
                                                                <option>1970</option>
                                                                <option>1971</option>
                                                                <option>1972</option>
                                                                <option>1973</option>
                                                                <option>1974</option>
                                                                <option>1975</option>
                                                                <option>1976</option>
                                                                <option>1977</option>
                                                                <option>1978</option>
                                                                <option>1979</option>
                                                                <option>1980</option>
                                                                <option>1981</option>
                                                                <option>1982</option>
                                                                <option>1983</option>
                                                                <option>1984</option>
                                                                <option>1985</option>
                                                                <option>1986</option>
                                                                <option>1987</option>
                                                                <option>1988</option>
                                                                <option>1989</option>
                                                                <option>1990</option>
                                                                <option>1991</option>
                                                                <option>1992</option>
                                                                <option>1993</option>
                                                                <option>1994</option>
                                                                <option>1995</option>
                                                                <option>1996</option>
                                                                <option>1997</option>
                                                                <option>1998</option>
                                                                <option>1999</option>
                                                                <option>2000</option>
                                                                <option>2001</option>
                                                                <option>2002</option>
                                                                <option>2003</option>
                                                                <option>2004</option>
                                                                <option>2005</option>
                                                                <option>2006</option>
                                                                <option>2007</option>
                                                                <option>2008</option>
                                                                <option>2009</option>
                                                                <option>2010</option>
                                                                <option>2011</option>
                                                                <option>2012</option>
                                                                <option>2013</option>
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="intro">Album Info Section</label>
                                                        <textarea class="form-control" id="intro" name="intro" cols="30" rows="13"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button class="btn btn-success" type="submit">Update </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Save Album</h5>
                                    </div>
                                    <div class="card-body bg-light"><a class="btn btn-success d-block" href="#!" type="button" href="#!">Save Album</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-lg-2">
                            <div class="sticky-top sticky-sidebar">
                                <div class="card mb-3 overflow-hidden">
                                    <div class="card-body bg-light">
                                    <h6 class="mt-2 font-weight-bold">Samples<span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="By selecting YES you are fully responsible for monies being paid to the copyright owner of the sample. You are agreeing that Kunnec.com is voided from any financial obligations."><span class="fas fa-question-circle"></span></span></h6>
                                        <div class="form-group">
                                            <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                <option value="">Album contains sample...</option>
                                                <option value="1">No</option>
                                                <option value="2">Yes</option>
                                            </select>
                                        </div>
				                            </div>
                                    <div class="card-body bg-light">
                                        <h6 class="mt-2 font-weight-bold">Album Rating<span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="This is set for informing the customer of what the compositions subject matter is about "><span class="fas fa-question-circle"></span></span></h6>
                                        <div class="form-group">
                                            <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                <option value="">Select Album Rating...</option>
                                                <option value="1">For Everyone</option>
                                                <option value="2">Explicit lyrics</option>
                                            </select>
                                        </div>
				                            </div>
                                    <div class="card-body bg-light">
                                        <h6 class="mt-2 font-weight-bold">Album Price<span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="This is where you set your price"><span class="fas fa-question-circle"></span></span></h6>
                                        <div class="form-group">
                                            <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                <option value="">Credit Price...</option>
                                                <option value="1">1 credit</option>
                                                <option value="2">2 credits</option>
                                                <option value="3">3 credit</option>
                                                <option value="4">4 credits</option>
                                                <option value="5">5 credit</option>
                                                <option value="6">6 credits</option>
                                                <option value="7">7 credit</option>
                                                <option value="8">8 credits</option>
                                                <option value="9">9 credit</option>
                                                <option value="10">10 credits</option>
                                                <option value="11">11 credit</option>
                                                <option value="12">12 credits</option>
                                                <option value="13">13 credit</option>
                                                <option value="14">14 credits</option>
                                                <option value="15">15 credit</option>
                                                <option value="16">16 credits</option>
                                                <option value="17">17 credit</option>
                                                <option value="18">18 credits</option>
                                                <option value="19">19 credit</option>
                                                <option value="20">20 credits</option>
                                                <option value="21">21 credit</option>
                                                <option value="22">22 credits</option>
                                                <option value="23">23 credit</option>
                                                <option value="24">24 credits</option>
                                                <option value="25">25 credit</option>
                                                <option value="26">26 credits</option>
                                                <option value="27">27 credit</option>
                                                <option value="28">28 credits</option>
                                                <option value="29">29 credit</option>
                                                <option value="30">30 credits</option>
                                                <option value="31">31 credit</option>
                                                <option value="32">32 credits</option>
                                                <option value="33">33 credit</option>
                                                <option value="34">34 credits</option>
                                                <option value="35">35 credit</option>
                                                <option value="36">36 credits</option>
                                                <option value="37">37 credit</option>
                                                <option value="38">38 credits</option>
                                                <option value="39">39 credit</option>
                                                <option value="40">40 credits</option>
                                                <option value="41">41 credit</option>
                                                <option value="42">42 credits</option>
                                                <option value="43">43 credit</option>
                                                <option value="44">44 credits</option>
                                                <option value="45">45 credit</option>
                                                <option value="46">46 credits</option>
                                                <option value="47">47 credit</option>
                                                <option value="48">48 credits</option>
                                                <option value="49">49 credit</option>
                                                <option value="50">50 credits</option>
                                            </select>
                                        </div>
				                    </div>
                                    <div class="card">
                                       <div class="card-body bg-light">
                                            <div class="container">
                                                <h5 class="fs-0">Delete this Song</h5>
                                                <p class="fs--1">Once you delete this song, there is no going back. Please be certain.</p><a class="btn btn-danger d-block" href="#!" type="button" href="#!" data-toggle="modal" data-target="#deleteSongModal">Delete Song</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
		            </div>			
				</div>
		    </div>

            <div class="tab-pane fade" id="tab-course" role="tabpanel" aria-labelledby="course-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-th-list"></i> &nbsp;My Songs</h5>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Videos</th>
                                        <th scope="col">Title <i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Length <i class="fas fa-sort"></i></th>
                                        <th scope="col">Views <i class="fas fa-sort"></i></th>
                                        <th scope="col">Ratings <i class="fas fa-sort"></i></th>
                                        <th scope="col">Date <i class="fas fa-sort"></i></th>
                                        <th scope="col">K-Ads <i class="fas fa-sort"></i></th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/sun.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Direction is Always Up</a></td>
                                        <td>6 hrs. 45 mins. 32 sec</td>
                                        <td><span class="badge badge-pill badge-warning">1205</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/clouds.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Sun Always shines</a></td>
                                        <td>8 hrs. 25 mins. 45 sec</td>
                                        <td><span class="badge badge-pill badge-warning">200,402</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>10/09/2017</td>
                                        <td><span class="badge badge-pill badge-warning">102</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/hands.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Two Can Keep A Secret if One is Dead</a></td>
                                        <td>12 hrs. 57 mins. 1 sec</a></td>
                                        <td><span class="badge badge-pill badge-warning">43,000</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>11/16/2020</td>
                                        <td><span class="badge badge-pill badge-warning">220</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/tree.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Always win at all cost, never fall</a></td>
                                        <td>12 hrs. 57 mins. 1 sec</td>
                                        <td><span class="badge badge-pill badge-warning">1,000,472</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">45</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/ocean.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">There is a I in win</a></td>
                                        <td>4 hrs. 24 mins. 11 sec</td>
                                        <td><span class="badge badge-pill badge-warning">472</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">25</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/sun.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Direction is Always Up</a></td>
                                        <td>6 hrs. 45 mins. 32 sec</td>
                                        <td><span class="badge badge-pill badge-warning">1205</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/clouds.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Sun Always shines</a></td>
                                        <td>8 hrs. 25 mins. 45 sec</td>
                                        <td><span class="badge badge-pill badge-warning">200,402</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>10/09/2017</td>
                                        <td><span class="badge badge-pill badge-warning">102</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/hands.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Two Can Keep A Secret if One is Dead</a></td>
                                        <td>12 hrs. 57 mins. 1 sec</a></td>
                                        <td><span class="badge badge-pill badge-warning">43,000</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>11/16/2020</td>
                                        <td><span class="badge badge-pill badge-warning">220</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/tree.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Always win at all cost, never fall</a></td>
                                        <td>12 hrs. 57 mins. 1 sec</td>
                                        <td><span class="badge badge-pill badge-warning">1,000,472</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">45</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/ocean.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">There is a I in win</a></td>
                                        <td>4 hrs. 24 mins. 11 sec</td>
                                        <td><span class="badge badge-pill badge-warning">472</span></td>
                                        <td><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">25</span></td>
                                        <td><a href="k_course_edit.php"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		    </div>

            <!-- Start of My Album Tab -->
            <div class="tab-pane fade" id="tab-purchase" role="tabpanel" aria-labelledby="purchase-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-dollar-sign"></i> &nbsp; My Albums</h5>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Video</th>
                                        <th scope="col">Title <i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Author <i class="fas fa-sort"></i></th>
                                        <th scope="col">Category <i class="fas fa-sort"></i></th>
                                        <th scope="col">Date <i class="fas fa-sort"></i></th>
                                        <th scope="col">Credit Price <i class="fas fa-sort"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/tree.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Direction is Always Up</a></td>
                                        <td><a href="#!">Tupac Amoru Shakur</a></td>
                                        <td>Math</td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/ocean.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Sun Always shines</a></td>
                                        <td><a href="#!">Marvin Gaye</a></td>
                                        <td>Science</td>
                                        <td>10/09/2017</td>
                                        <td><span class="badge badge-pill badge-warning">102</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/hands.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Two Can Keep A Secret if One is Dead</a></td>
                                        <td><a href="#!">James Brown</a></td>
                                        <td>English</td>
                                        <td>11/16/2020</td>
                                        <td><span class="badge badge-pill badge-warning">220</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/tree.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Always win at all cost, never fall</a></td>
                                        <td><a href="#!">Carlo Gambino</a></td></td>
                                        <td>Gym</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">45</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/ocean.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">There is a I in win</a></td>
                                        <td><a href="#!">Timagin</a></td>
                                        <td>Science</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">25</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/sun.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Direction is Always Up</a></td>
                                        <td><a href="#!">Tupac Amoru Shakur</a></td>
                                        <td>Math</td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/clouds.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">The Sun Always shines</a></td>
                                        <td><a href="#!">Marvin Gaye</a></td>
                                        <td>Science</td>
                                        <td>10/09/2017</td>
                                        <td><span class="badge badge-pill badge-warning">102</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/hands.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Two Can Keep A Secret if One is Dead</a></td>
                                        <td><a href="#!">James Brown</a></td>
                                        <td>English</td>
                                        <td>11/16/2020</td>
                                        <td><span class="badge badge-pill badge-warning">220</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/tree.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">Always win at all cost, never fall</a></td>
                                        <td><a href="#!">Marvin Gaye</a></td>
                                        <td>Science</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">45</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td><a href="{{ url('k_course/course_details') }}"><img src="{{ asset('user-dash/k_course/courses/ocean.jpg') }}" width="75px"></a></td>
                                        <td><a href="{{ url('k_course/course_details') }}">There is a I in win</a></td>
                                        <td><a href="#!">James Brown</a></td>
                                        <td>Science</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">25</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
	        <!-- Start of Analytics Tab -->
            <div class="tab-pane fade" id="tab-anal" role="tabpanel" aria-labelledby="analytics-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-chart-bar"></i> &nbsp;My Analytics</h5>
                            </div>	
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card mb-3">
                                    <div class="card-header pb-2" style="background-color: #009900;" >
                                        <h6 class="mb-0 mt-2 d-flex align-items-center" style="color:#FFFFFF;">Gender<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row h-100 justify-content-between no-gutters">
                                            <div class="col-5 col-sm-6 col-xxl pr-2">
                                    
                                                <div class="fs--2 mt-3">
                                                    <div class="d-flex flex-between-center mb-1">
                                                        <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="font-weight-semi-bold">Male</span>
                                                        </div>
                                                        <div class="d-xxl-none">&nbsp; ( 33% )
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-between-center mb-1">
                                                        <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Female</span>
                                                        </div>
                                                        <div class="d-xxl-none">&nbsp; ( 67% )
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="echart-doughnut"></div>
                                                <div class="absolute-centered font-weight-medium text-dark fs-2">26M</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card mb-3">
                                        <div class="card-header pb-2" style="background-color: #009900;" >
                                            <h6 class="mb-0 mt-2 d-flex align-items-center" style="color:#FFFFFF;">Age Range<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row h-100 justify-content-between no-gutters">
                                                <div class="col-5 col-sm-6 col-xxl pr-2">
                                                    
                                                        <div class="d-flex flex-between-center mb-1">
                                                            <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="font-weight-semi-bold small-text">Age: 16 - 30</span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex flex-between-center mb-1">
                                                            <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Age: 31 - 45</span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex flex-between-center mb-1">
                                                            <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Age: Above</span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                <div class="col-auto">
                                                    <div class="echart-doughnut"></div>
                                                    <div class="absolute-centered font-weight-medium text-dark fs-2">26M</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-sm-4">
                                    <div class="card mb-3">
                                        <div class="card-header pb-2" style="background-color: #009900;" >
                                            <h6 class="mb-0 mt-2 d-flex align-items-center" style="color:#FFFFFF;">Weekly Sales<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
                                            </h6>
                                        </div>
                                        <div class="card-body d-flex align-items-end">
                                            <div class="row flex-grow-1">
                                                <div class="col">
                                                    <div class="fs-4 font-weight-normal text-sans-serif text-700 line-height-1 mb-1">$47K</div><span class="badge badge-pill fs--2 badge-soft-success">+3.5%</span>
                                                    </div>
                                                    <div class="col-auto pl-0">
                                                        <div class="echart-bar-weekly-sales h-100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>		
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card h-300 mb-3">
                                                <div class="card-header pb-2" style="background-color: #009900;" >
                                                    <div class="row flex-between-center">
                                                        <div class="col-auto">
                                                            <h6 class="mt-2" style="color:#FFFFFF;">Monthly Sales</h6>
                                                        </div>
                                                        <div class="col-auto d-flex">
                                                            <select class="custom-select custom-select-sm select-month mr-2">
                                                                <option value="0">January</option>
                                                                <option value="1">February</option>
                                                                <option value="2">March</option>
                                                                <option value="3">April</option>
                                                                <option value="4">May</option>
                                                                <option value="5">Jun</option>
                                                                <option value="6">July</option>
                                                                <option value="7">August</option>
                                                                <option value="8">September</option>
                                                                <option value="9">October</option>
                                                                <option value="10">November</option>
                                                                <option value="11">December</option>
                                                            </select>
                                                        <div class="dropdown text-sans-serif btn-reveal-trigger">
                                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-total-saldes" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"   style="color:#FFFFFF;"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-total-saldes">
                                                                <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="card-body h-300 pr-0">
                                        <div class="echart-line-total-sales" style="min-height: 300px;" data-echart-responsive="true"></div>
                                    </div>
                                </div>      
                            </div>
                        <div class="col-sm">
            
                        <div class="card h-300">
                            <div class="card-header py-2" style="background-color:#009900; color:#FFFFFF">
                                <div class="row flex-between-center">
                                    <div class="col-auto pt-2">
                                        <h6 class="mb-0">Top Products</h6>
                                    </div>
                                    <div class="col-auto d-flex">
                                        <div class="dropdown text-sans-serif btn-reveal-trigger">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-running-projects" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-running-projects">
                                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-300 pr-0">
                            <div class="echart-bar-top-products" style="min-height: 300px;" data-echart-responsive="true"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>


@endsection
@section('additional-js')
<script type="text/javascript" src="{{ asset('user-dash/js/bootstrap2-toggle.min.js') }}"></script>
<script>
  var text_max = 150;
$('#count_message').html('0 / ' + text_max );

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_length + ' / ' + text_max);
});
</script>
<script>
    $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
<script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
<script>
var uppy = Uppy.Core()
        .use(Uppy.Dashboard, {
          inline: true,
          target: '#drag-drop-area'
        })
        .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'}) //you can put upload URL here, where you want to upload images
 
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      })
    </script

</script>
@endsection