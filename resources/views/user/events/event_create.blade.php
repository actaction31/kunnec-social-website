@extends('layouts.user')
 @section('title', 'Event Create')
@section('additional-css')
@endsection
@section('content')
<div class="card mb-3">
        <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
            <a href="{{ url('events/event_home') }}" style="color: #FFFFFF">
                <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40" width="60"/> Create an Events</h5>
            </a>
        <div class="col-sm d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div>
    </div>
    <div class="collapse" id="collapseSort1" style="background-color:#009900;">
            <div class="row p-3">
                <div class="col">
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Search Events" aria-label="Search">
                        </div>
                        <div class="ml-2">
                            <button href="#!" class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
	
	        <div class=" col pb-4">
                <div class="border p-card rounded">
                    <div class="media">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                            <option value="" disabled selected>Select Country ...</option>
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
                                            <option value="" disabled selected>Select State...</option>
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
                                            <option value="" disabled selected>Select City ...</option>
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
                                        <select class="custom-select" id="event-type" name="event-type">
                                            <option>Select event type...</option>
                                            <option>Class, Training, or Workshop</option>
                                            <option>Concert or Performance</option>
                                            <option>Conference</option>
                                            <option>Convention</option>
                                            <option>Dinner or Gala</option>
                                            <option>Festival or Fair</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" id="event-topic" name="even-topic">
                                            <option value="" selected="selected">Select a topic</option>
                                            <option>Auto, Boat &amp; Air</option>
                                            <option>Business &amp; Professional</option>
                                            <option>Charity &amp; Causes</option>
                                            <option>Community &amp; Culture</option>
                                            <option>Family &amp; Education</option>
                                            <option>Fashion &amp; Beauty</option>
                                            <option>Film, Media &amp; Entertainment</option>
                                            <option>Food &amp; Drink</option>
                                            <option>Government &amp; Politics</option>
                                        </select>
                                    </div>
                                </div>
					 
					            <div class="col-sm-2">
					                <div class="form-check-label" style="color: #F1C40F">Days</div>
					                <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Monday </label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Tuesday</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Wednesday</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Thursday</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Friday</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Saturday</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Sunday</label>
                                    </div>
						        <div>
                            </div>
						    <br>
						</div>

					    <div class="col-sm-2">
                            <div class="form-check-label" style="color: #F1C40F">Posted</div>
					            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Today </label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">This Week</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">This Month</label>
                            </div>
                        </div>
					 
					    <div class="col-sm">
						    <button class="btn btn-warning mr-5 mb-1" type="button">
                                <a href="{{ url('events/event_search') }}">Filter</a>
                            </button>
				        </div>
				    </div>
			    </div>
            </div>
	    </div>
    </div>
</div>
</div>

     <div class="row no-gutters">
            <div class="col-lg-8 pr-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Event Details</h5>
                </div>
                <div class="card-body bg-light">
                  <form>
                    <div class="form-row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="event-name">Event Title</label>
                          <input class="form-control" id="event-name" type="text" placeholder="Event Title">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="start-date">Start Date</label>
                          <input class="form-control datetimepicker" id="start-date" type="text">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="start-time">Start Time</label>
                          <input class="form-control datetimepicker" id="start-time" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="end-date">End Date</label>
                          <input class="form-control datetimepicker" id="end-date" type="text">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="end-time">End Time</label>
                          <input class="form-control datetimepicker" id="end-time" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-0">
                          <label for="registration-deadline">Registration Deadline</label>
                          <input class="form-control datetimepicker" id="registration-deadline" type="text">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-0">
                          <label for="time-zone">Timezone</label>
                          <select class="custom-select" id="time-zone">
                            <option>GMT-12:00 Etc/GMT-12</option>
                            <option>GMT-11:00 Etc/GMT-11</option>
                            <option>GMT-11:00 Pacific/Midway</option>
                            <option>GMT-10:00 America/Adak</option>
                            <option>GMT-09:00 America/Anchorage</option>
                            <option>GMT-09:00 Pacific/Gambier</option>
                            <option>GMT-08:00 America/Dawson_Creek</option>
                            <option>GMT-08:00 America/Ensenada</option>
                            <option>GMT-08:00 America/Los_Angeles</option>
                            <option>GMT-07:00 America/Chihuahua</option>
                            <option>GMT-07:00 America/Denver</option>
                            <option>GMT-06:00 America/Belize</option>
                            <option>GMT-06:00 America/Cancun</option>
                            <option>GMT-06:00 America/Chicago</option>
                            <option>GMT-06:00 Chile/EasterIsland</option>
                            <option>GMT-05:00 America/Bogota</option>
                            <option>GMT-05:00 America/Havana</option>
                            <option>GMT-05:00 America/New_York</option>
                            <option>GMT-04:30 America/Caracas</option>
                            <option>GMT-04:00 America/Campo_Grande</option>
                            <option>GMT-04:00 America/Glace_Bay</option>
                            <option>GMT-04:00 America/Goose_Bay</option>
                            <option>GMT-04:00 America/Santiago</option>
                            <option>GMT-04:00 America/La_Paz</option>
                            <option>GMT-03:00 America/Argentina/Buenos_Aires</option>
                            <option>GMT-03:00 America/Montevideo</option>
                            <option>GMT-03:00 America/Araguaina</option>
                            <option>GMT-03:00 America/Godthab</option>
                            <option>GMT-03:00 America/Miquelon</option>
                            <option>GMT-03:00 America/Sao_Paulo</option>
                            <option>GMT-03:30 America/St_Johns</option>
                            <option>GMT-02:00 America/Noronha</option>
                            <option>GMT-01:00 Atlantic/Cape_Verde</option>
                            <option>GMT Europe/Belfast</option>
                            <option>GMT Africa/Abidjan</option>
                            <option>GMT Europe/Dublin</option>
                            <option>GMT Europe/Lisbon</option>
                            <option>GMT Europe/London</option>
                            <option>UTC UTC</option>
                            <option>GMT+01:00 Africa/Algiers</option>
                            <option>GMT+01:00 Africa/Windhoek</option>
                            <option>GMT+01:00 Atlantic/Azores</option>
                            <option>GMT+01:00 Atlantic/Stanley</option>
                            <option>GMT+01:00 Europe/Amsterdam</option>
                            <option>GMT+01:00 Europe/Belgrade</option>
                            <option>GMT+01:00 Europe/Brussels</option>
                            <option>GMT+02:00 Africa/Cairo</option>
                            <option>GMT+02:00 Africa/Blantyre</option>
                            <option>GMT+02:00 Asia/Beirut</option>
                            <option>GMT+02:00 Asia/Damascus</option>
                            <option>GMT+02:00 Asia/Gaza</option>
                            <option>GMT+02:00 Asia/Jerusalem</option>
                            <option>GMT+03:00 Africa/Addis_Ababa</option>
                            <option>GMT+03:00 Asia/Riyadh89</option>
                            <option>GMT+03:00 Europe/Minsk</option>
                            <option>GMT+03:30 Asia/Tehran</option>
                            <option>GMT+04:00 Asia/Dubai</option>
                            <option>GMT+04:00 Asia/Yerevan</option>
                            <option>GMT+04:00 Europe/Moscow</option>
                            <option>GMT+04:30 Asia/Kabul</option>
                            <option>GMT+05:00 Asia/Tashkent</option>
                            <option>GMT+05:30 Asia/Kolkata</option>
                            <option>GMT+05:45 Asia/Katmandu</option>
                            <option>GMT+06:00 Asia/Dhaka</option>
                            <option>GMT+06:00 Asia/Yekaterinburg</option>
                            <option>GMT+06:30 Asia/Rangoon</option>
                            <option>GMT+07:00 Asia/Bangkok</option>
                            <option>GMT+07:00 Asia/Novosibirsk</option>
                            <option>GMT+08:00 Etc/GMT+8</option>
                            <option>GMT+08:00 Asia/Hong_Kong</option>
                            <option>GMT+08:00 Asia/Krasnoyarsk</option>
                            <option>GMT+08:00 Australia/Perth</option>
                            <option>GMT+08:45 Australia/Eucla</option>
                            <option>GMT+09:00 Asia/Irkutsk</option>
                            <option>GMT+09:00 Asia/Seoul</option>
                            <option>GMT+09:00 Asia/Tokyo</option>
                            <option>GMT+09:30 Australia/Adelaide</option>
                            <option>GMT+09:30 Australia/Darwin</option>
                            <option>GMT+09:30 Pacific/Marquesas</option>
                            <option>GMT+10:00 Etc/GMT+10</option>
                            <option>GMT+10:00 Australia/Brisbane</option>
                            <option>GMT+10:00 Australia/Hobart</option>
                            <option>GMT+10:00 Asia/Yakutsk</option>
                            <option>GMT+10:30 Australia/Lord_Howe</option>
                            <option>GMT+11:00 Asia/Vladivostok</option>
                            <option>GMT+11:30 Pacific/Norfolk</option>
                            <option>GMT+12:00 Etc/GMT+12</option>
                            <option>GMT+12:00 Asia/Anadyr</option>
                            <option>GMT+12:00 Asia/Magadan</option>
                            <option>GMT+12:00 Pacific/Auckland</option>
                            <option>GMT+12:45 Pacific/Chatham</option>
                            <option>GMT+13:00 Pacific/Tongatapu</option>
                            <option>GMT+14:00 Pacific/Kiritimati</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <hr class="border-dashed border-bottom-0">
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="event-venue">Venue</label>
                          <input class="form-control" id="event-venue" type="text" placeholder="Venue">
                          <button class="btn btn-link btn-sm btn p-0" type="button">Online Event</button>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="event-address">Address</label>
                          <input class="form-control" id="event-address" type="text" placeholder="Address">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="event-city">City</label>
                          <input class="form-control" id="event-city" type="text" placeholder="City">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="event-state">State</label>
                          <input class="form-control" id="event-state" type="text" placeholder="state">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="event-country">Country</label>
                          <input class="form-control" id="event-country" type="text" placeholder="country">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="event-description">Description</label>
                          <textarea class="form-control" id="event-description" rows="6"> </textarea>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Ticket Price</h5>
                </div>
                <div class="card-body bg-light">
                  <div class="mb-3">
                    <button class="btn btn-falcon-default btn-sm" type="button">Free<span class="d-none d-sm-inline"> Ticket</span></button>
                    <button class="btn btn-falcon-primary btn-sm ml-2" type="button">Paid<span class="d-none d-sm-inline"> Ticket</span></button>
                    <button class="btn btn-falcon-default btn-sm ml-2" type="button">Donation</button>
                  </div>
                  <hr>
                  <h6>Pricing Options:</h6>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="customCheck1" type="checkbox" checked>
                    <label class="custom-control-label" for="customCheck1">Enable varible pricing</label>
                  </div>
                  <div class="custom-control custom-checkbox mt-2">
                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                    <label class="custom-control-label" for="customCheck2">Enable multi-option purchase mode.</label>
                  </div>
                  <table class="table table-bordered mt-2 bg-white">
                    <thead>
                      <tr class="fs--1">
                        <th>Option Name</th>
                        <th>Price</th>
                        <th>Default</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Front desks">
                        </td>
                        <td>
                          <input class="form-control form-control-sm" type="text" placeholder="Price" value="$0.00">
                        </td>
                        <td class="text-center align-middle">
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio" checked>
                            <label class="custom-control-label" for="customRadio1"></label>
                          </div>
                        </td>
                        <td class="text-center align-middle">
                          <button class="btn btn-link btn-sm"><span class="fas fa-times-circle text-danger" data-fa-transform="shrink-3"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Green gallery">
                        </td>
                        <td>
                          <input class="form-control form-control-sm" type="text" placeholder="Price" value="$5.00">
                        </td>
                        <td class="text-center align-middle">
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio2"></label>
                          </div>
                        </td>
                        <td class="text-center align-middle">
                          <button class="btn btn-link btn-sm"><span class="fas fa-times-circle text-danger" data-fa-transform="shrink-3"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input class="form-control form-control-sm" type="text" placeholder="VIP" value="VIP">
                        </td>
                        <td>
                          <input class="form-control form-control-sm" type="text" placeholder="Price" value="$20.00">
                        </td>
                        <td class="text-center align-middle">
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                            <label class="custom-control-label" for="customRadio3"></label>
                          </div>
                        </td>
                        <td class="text-center align-middle">
                          <button class="btn btn-link btn-sm"><span class="fas fa-times-circle text-danger" data-fa-transform="shrink-3"></span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Schedule</h5>
                </div>
                <div class="card-body bg-light">
                  <div class="border rounded position-relative bg-white p-3">
                    <div class="form-row">
                      <div class="position-absolute r-0 t-0 mt-2 mr-3 z-index-1">
                        <button class="btn btn-link btn-sm p-0" type="button">
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="schedule-title">Title</label>
                          <input class="form-control form-control-sm" id="schedule-title" type="text" placeholder="Title">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="schedule-start-date">Start Date</label>
                          <input class="form-control form-control-sm datetimepicker" id="schedule-start-date" type="text" data-options='{"dateFormat":"d/m/y","enableTime":false}'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="schedule-start-time">Start Time</label>
                          <input class="form-control form-control-sm datetimepicker" id="schedule-start-time" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="schedule-end-date">End Date</label>
                          <input class="form-control form-control-sm datetimepicker" id="schedule-end-date" type="text" data-options='{"enableTime":true}'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="schedule-end-time">End Time</label>
                          <input class="form-control form-control-sm datetimepicker" id="schedule-end-time" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-falcon-default btn-sm mt-2" type="button"><span class="fas fa-plus fs--2 mr-1" data-fa-transform="up-1"></span>Add Item </button>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Upload Cover Photo</h5>
                </div>
                <div class="card-body bg-light">
                  <div class="dropzone dropzone-multiple p-0" data-dropzone data-options='{"url":"valid/url"}'>
                    <div class="fallback">
                      <input type="file" name="file2">
                    </div>
                    <div class="dz-message" data-dz-message> <img class="mr-2" src="../assets/img/icons/cloud-upload.svg" width="25" alt="">Drop your files here</div>
                    <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                      <div class="media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="..." alt="..." data-dz-thumbnail>
                        <div class="media-body d-flex flex-between-center">
                          <div>
                            <h6 data-dz-name></h6>
                            <div class="d-flex align-items-center">
                              <p class="mb-0 fs--1 text-400 line-height-1" data-dz-size></p>
                              <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                            </div>
                          </div>
                          <div class="dropdown text-sans-serif">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                            <div class="dropdown-menu dropdown-menu-right border py-0">
                              <div class="bg-white py-2"><a class="dropdown-item" href="#!" data-dz-remove>Remove File</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 mb-lg-0">
                <div class="card-header">
                  <h5 class="mb-0">Custom Fields</h5>
                </div>
                <div class="card-body bg-light">
                  <div class="position-relative rounded border bg-white p-3">
                    <div class="position-absolute r-0 t-0 mt-2 mr-3 z-index-1">
                      <button class="btn btn-link btn-sm p-0" type="button"></button>
                    </div>
                    <div class="form-row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="field-name">Name</label>
                          <input class="form-control form-control-sm" id="field-name" type="text" placeholder="Name (e.g. T-shirt)">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="field-type">Type</label>
                          <select class="custom-select custom-select-sm" id="field-type">
                            <option>Select a type</option>
                            <option>Text</option>
                            <option>Checkboxes</option>
                            <option>Radio Buttons</option>
                            <option>Textarea</option>
                            <option>Date</option>
                            <option>Dropdowns</option>
                            <option>File</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="field-options">Field Options</label>
                          <textarea class="form-control form-control-sm" id="field-options" rows="3"></textarea><small class="form-text fs--1 text-warning">* Separate your options with comma</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-falcon-default btn-sm mt-2" type="submit"><span class="fas fa-plus fs--2 mr-1" data-fa-transform="up-1"></span>Add Item</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 pl-lg-2">
              <div class="sticky-top sticky-sidebar">
                <div class="card mb-3 mb-lg-0">
                  <div class="card-header">
                    <h5 class="mb-0">Other Info</h5>
                  </div>
                  <div class="card-body bg-light">
                    <div class="form-group">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="mb-0" for="organizer">Organizer</label>
                        <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                      </div>
                      <select class="form-control selectpicker" id="organizer" multiple size="1" name="organizer" data-options='{"placeholder":"Select Organizer..."}'>
                        <option>Massachusetts Institute of Technology</option>
                        <option>University of Chicago</option>
                        <option>GSAS Open Labs At Harvard</option>
                        <option>California Institute of Technology</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="mb-0" for="sponsors">Sponsors</label>
                        <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                      </div>
                      <select class="form-control selectpicker" id="sponsors" multiple size="1" name="language" data-options='{"placeholder":"Select Sponsors..."}'>
                        <option>Microsoft Corporation</option>
                        <option>Technext Limited</option>
                        <option>Hewlett-Packard</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="event-type">Event Type</label>
                      <select class="custom-select" id="event-type" name="event-type">
                        <option>Select event type...</option>
                        <option>Class, Training, or Workshop</option>
                        <option>Concert or Performance</option>
                        <option>Conference</option>
                        <option>Convention</option>
                        <option>Dinner or Gala</option>
                        <option>Festival or Fair</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="event-topic">Event Topic</label>
                      <select class="custom-select" id="event-topic" name="even-topic">
                        <option value="" selected="selected">Select a topic</option>
                        <option>Auto, Boat &amp; Air</option>
                        <option>Business &amp; Professional</option>
                        <option>Charity &amp; Causes</option>
                        <option>Community &amp; Culture</option>
                        <option>Family &amp; Education</option>
                        <option>Fashion &amp; Beauty</option>
                        <option>Film, Media &amp; Entertainment</option>
                        <option>Food &amp; Drink</option>
                        <option>Government &amp; Politics</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="mb-0" for="event-tags">Tags</label>
                        <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                      </div>
                      <select class="form-control selectpicker" id="event-tags" multiple size="1" data-options='{"placeholder":"Select tags"}'>
                        <option>Concert</option>
                        <option>New Year</option>
                        <option>Party</option>
                      </select>
                    </div>
                    <hr class="border-dashed border-bottom-0">
                    <h6>Listing Privacy</h6>
                    <div class="form-group custom-control custom-radio">
                      <input class="custom-control-input" id="customRadio4" type="radio" name="listingPrivacy" checked>
                      <label class="custom-control-label" for="customRadio4"> <strong>Public page:</strong></label><small class="form-text mt-0">Discoverable by anyone on Falcon, our distribution partners, and search engines.</small>
                    </div>
                    <div class="form-group custom-control custom-radio">
                      <input class="custom-control-input" id="customRadio5" type="radio" name="listingPrivacy">
                      <label class="custom-control-label" for="customRadio5"> <strong>Private page:</strong></label><small class="form-text mt-0">Accessible only by people you specify. </small>
                    </div>
                    <hr class="border-dashed border-bottom-0">
                    <h6>Remaining Tickets</h6>
                    <div class="form-group custom-control custom-checkbox mb-0">
                      <input class="custom-control-input" id="customRadio6" type="checkbox">
                      <label class="custom-control-label" for="customRadio6">Show the number of remaining tickets.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Save your Event / Also make your Event go live!!!</h5>
                </div>
                <div class="col-auto">
                  <button class="btn btn-success btn-sm mr-2">Save</button>
                  <button class="btn btn-primary btn-sm">Make your event live </button>
                </div>
              </div>
            </div>
          </div>


@endsection
@section('additional-js')
@endsection