@extends('layouts.user')
 @section('title', 'Screen Settings')
@section('additional-css')
@endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p style="color: #FFFFFF">
            <a href="{{ url('k_screen/recording/record') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Screen
                </a> |&nbsp;
                <a href="{{ url('k_screen/recording/record_settings') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;">
                    </i> 
                </a>
                 &nbsp;&nbsp;<small style="color:#FFFFFF;"> ( Record Requirements: 2nd Monitor, Camera, & Microphone )</small>
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
                        <input class="form-control" type="text" placeholder="Search Recorders" aria-label="Search">
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
					    <label for="card-holder-country" style="color: #F1C40F">Level</label>
					    <div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">All ( 1200 )</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Beginner ( 400 )</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Intermediate ( 150 )</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Advanced ( 175 )</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1"style="color: #FFFFFF">Expert ( 425 )</label>
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
                                <label class="form-check-label" for="defaultcheckbox1">
                                <div>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star-half-alt text-warning star-icon"></span>
                                    <span class="ml-1" style="color: #FFFFFF">4.5 & above(20)</span>
                                </div>
                            </div>
						</label>
                        
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1">
                                <div>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="ml-1" style="color: #FFFFFF">4.0 & above(20)</span>
                                </div>
							</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1">
                                <div>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star-half-alt text-warning star-icon"></span>
                                    <span class="ml-1" style="color: #FFFFFF">3.5 & above(800)</span>
                                </div>
							</label>
                        </div>
						<div class="form-group form-check">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                            <label class="form-check-label" for="defaultcheckbox1">
                                <div>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="ml-1" style="color: #FFFFFF">3.0 & above(20)</span>
                                </div>
							</label>
                        </div>
						<button class="btn btn-warning mr-5 mb-1" type="button">
                            <a href="{{ url('k_screen/recording/record_list') }}">Filter</a>
                        </button>
				    </div>
				</div>
			</div>
        </div>
	</div>
</div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="alert alert-danger">
                    <strong>Best Performance:</strong> Two Monitors, Camera, & Microphone : See system requirements
                </div>
            </div>
            <div class="col-3">
                <a href="{{ url('k_screen/recording/record_apple') }}" class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" role="button">
                    <span class="fab fa-apple"></span> MAC OS Requirements - Click HERE
                </a>
            </div>
            <div class="col-3">
                <a href="{{ url('k_screen/recording/record_windows') }}" class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" role="button">
                    <span class="fab fa-windows"></span> Windows Requirements - Click HERE
                </a>
            </div>
        </div>
    </div>
</div>

	<!-- Start of Tabs -->
    <div class="card">
    <div class="card-body">
	
	<!-- Start of Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="setup-tab" data-toggle="tab" href="#tab-setup" role="tab" aria-controls="tab-setup" aria-selected="true">Screen Setup</a></li>
            <li class="nav-item"><a class="nav-link" id="purchase-tab" data-toggle="tab" href="#tab-purchase" role="tab" aria-controls="tab-purchase" aria-selected="true">Recorder List</a></li>
		    <li class="nav-item"><a class="nav-link" id="wish-tab" data-toggle="tab" href="#tab-wish" role="tab" aria-controls="tab-wish" aria-selected="true">Favorite Recorders</a></li>
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
                                        <h5 class="mb-0">Recorder Details</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <form>
                                            <div class="row">
					                            <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Brief Title Description</label>
                                                        <input class="form-control" id="heading" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <select class="selectpicker form-control">
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
                                                    </div>
                                                    <div class="col-lg-6">
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
                                                                <label for="intro">Full Recorder Description</label>
                                                                <textarea class="form-control" id="intro" name="intro" cols="30" rows="13">
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-success" type="submit">Update </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h5 class="mb-0">Schedule Days</h5>
                                            </div>
                                            <div class="card-body bg-light">
                                                <form>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <strong> Select Days and Time that you are avaiable.
                                                                </strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customMonday" type="checkbox">
                                                                <label class="custom-control-label" for="customMonday">Monday
                                                                </label>
                                                                <label for="customMonday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customMonday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customTuesday" type="checkbox">
                                                                <label class="custom-control-label" for="customTuesday">Tuesday</label>
                                                                <label for="customTuesday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customTuesday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customWednesday" type="checkbox">
                                                                <label class="custom-control-label" for="customWednesday">Wednesday</label>
                                                                <label for="customWednesday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customWednesday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customThursday" type="checkbox">
                                                                <label class="custom-control-label" for="customThursday">Thursday</label>
                                                                <label for="customThursday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customThursday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customFriday" type="checkbox">
                                                                <label class="custom-control-label" for="customFriday">Friday</label>
                                                                <label for="customFriday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customFriday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customSaturday" type="checkbox">
                                                                <label class="custom-control-label" for="customSaturday">Saturday</label>
                                                                <label for="customSaturday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customSaturday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="customSunday" type="checkbox">
                                                                <label class="custom-control-label" for="customSunrday">Sunday</label>
                                                                <label for="customSunday_t1"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                                <label>through</label>
                                                                <label for="customSunday_t21"><input type="time" id="appt" name="appt" min="09:00" max="18:00" required=""></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>	  
			  
                                        <div class="card-header">
                                            <h5 class="mb-0">Save Recorder</h5>
                                        </div>
                                        
                                        <div class="card-body bg-light">
                                            <a class="btn btn-primary d-block" href="{{ url('k_screen/recording/record_details_view') }}" type="button">View Record Details</a>
                                        </div>
                                        <div class="card-body bg-light">
                                            <a class="btn btn-success d-block" href="#!" type="button" href="#!">Save Settings</a>
                                        </div>
                                        
                                        </div>
                                        <div class="col-lg-4 pl-lg-2">
                                            <div class="sticky-top sticky-sidebar">
			                                    <div class="card mb-3 overflow-hidden">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Recorder Cover Image</h5>
                                                    </div>
                                                    <div class="card-body bg-light">
                                                        <div class="pl-2">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <div class="form-group">
                                                                                <table>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Upload Image<input id="upload-Image" type="file" onchange="loadImageFile();"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><img id="upload-Preview"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
			  
                                                <div class="card mb-3 overflow-hidden">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Monitor</h5>
                                                    </div>
                                                    <div class="card-body bg-light">
                                                        <div class="pl-2">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" id="customCheckMonitor" type="checkbox">
                                                                            <label class="custom-control-label" for="customCheckMonitor">Desktop with Monitor</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>			  
			  
                                                <div class="card mb-3 overflow-hidden">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Credit Time</h5>
                                                    </div>
                                                        <div class="card-body bg-light">
                                                            <div class="pl-2">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <div class="custom-control custom-radio">
                                                                                <input class="custom-control-input" type="radio" name="view-settings" id="minute">
                                                                                <label class="custom-control-label" for="minute">per minute</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input class="custom-control-input" type="radio" name="view-settings" id="fifteen" checked="checked">
                                                                                <label class="custom-control-label" for="fifteen">per 15 minutes</label>
                                                                            </div>
                                                                                    <div class="custom-control custom-radio">
                                                                                <input class="custom-control-input" type="radio" name="view-settings" id="hour" checked="checked">
                                                                                <label class="custom-control-label" for="hour"> hour</label>
                                                                            </div>
                                                                                    <div class="custom-control custom-radio">
                                                                                <input class="custom-control-input" type="radio" name="view-settings" id="flat" checked="checked">
                                                                                <label class="custom-control-label" for="flat"> flat fee</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <h6 class="mt-2 font-weight-bold">Credit Price
                                                                                <span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="This will be the credit price for tutoring"><svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle"></span> --></span>
                                                                            </h6>
                                                                            <div class="form-group">
                                                                                <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                                                    <option value="">Select Credits ...</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                </select>
                                                                            </div>
                                                                            <h6 class="mt-2 font-weight-bold">Recording Level
                                                                                <span class="fs--2 ml-1 text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="This will be the level you want the user to be when recording"><svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle"></span> -->
                                                                                </span>
                                                                            </h6>
                                                                            <div class="form-group">
                                                                                <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                                                                    <option value="">Select Level ...</option>
                                                                                    <option value="1">Beginner</option>
                                                                                    <option value="2">Intermediate</option>
                                                                                    <option value="3">Advanced</option>
                                                                                    <option value="4">Expert</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-3 overflow-hidden">
                                                        <div class="card">
                                                            <div class="card-header">
                                                            </div>
                                                            <div class="card-body bg-light">
                                                                <h5 class="fs-0">Delete Your Recording Account </h5>
                                                                <p class="fs--1">Once you delete this account, there is no going back. Please be certain.</p>
                                                                <a class="btn btn-danger d-block" href="#!" type="button" data-toggle="modal" data-target="#deleteModal">Delete Recording Account</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>			
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Start of New Tab -->

                        <!-- Start of New Tab -->
                        <div class="tab-pane fade" id="tab-purchase" role="tabpanel" aria-labelledby="purchase-tab">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                            <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-eye"></i> &nbsp; Recorders Watched</h5>
                                        </div>
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table table-hover">
                                            <thead style="color:#FFFFFF; background-color:#009900;">
                                                <tr>
                                                    <th class="th-sm">#</th>
                                                    <th scope="col">Tutor</th>
                                                    <th scope="col">Description <i class="fas fa-sort-alpha-up"></i></th>
                                                    <th scope="col">Name <i class="fas fa-sort"></i></th>
                                                    <th scope="col">Category <i class="fas fa-sort"></i></th>
                                                    <th scope="col">Date <i class="fas fa-sort"></i></th>
                                                    <th scope="col">Credit Price <i class="fas fa-sort"></i></th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="75px"></a></td>
                                                <td><a href="{{ url('k_screen/recording/record_details') }}">The Direction is Always Up</a></td>
                                                <td><a href="{{ url('k_screen/recording/record_details') }}">Tupac Amoru Shakur</a></td>
                                                <td>Math</td>
                                                <td>02/21/1988</td>
                                                <td><span class="badge badge-pill badge-warning">75</span></td>
                                                </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/24.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">The Sun Always shines</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                                </td>
                                                <td>Science</td>
                                                <td>10/09/2017</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning">102</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/23.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Two Can Keep A Secret if One is Dead</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                                </td>
                                                <td>English</td>
                                                <td>11/16/2020</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning">220</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Always win at all cost, never fall</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Carlo Gambino</a>
                                                </td>
                                                <td>Gym</td>
                                                <td>03/1/2020</td>
                                                <td><span class="badge badge-pill badge-warning">45</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/21.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">There is a I in win</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Timagin</a>
                                                </td>
                                                <td>Science</td>
                                                <td>03/1/2020</td>
                                                <td><span class="badge badge-pill badge-warning">25</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">The Direction is Always Up</a>
                                                </td>
                                                <td><a href="#!">Tupac Amoru Shakur</a></td>
                                                <td>Math</td>
                                                <td>02/21/1988</td>
                                                <td><span class="badge badge-pill badge-warning">75</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/19.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">The Sun Always shines</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                                </td>
                                                <td>Science</td>
                                                <td>10/09/2017</td>
                                                <td><span class="badge badge-pill badge-warning">102</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Two Can Keep A Secret if One is Dead</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                                </td>
                                                <td>English</td>
                                                <td>11/16/2020</td>
                                                <td><span class="badge badge-pill badge-warning">220</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Always win at all cost, never fall</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                                </td>
                                                <td>Science</td>
                                                <td>03/1/2020</td>
                                                <td><span class="badge badge-pill badge-warning">45</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">There is a I in win</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                                </td>
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
			        <!-- Start of New Tab -->
                    <div class="tab-pane fade" id="tab-wish" role="tabpanel" aria-labelledby="wish-tab">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-heart"></i> &nbsp; Recoders I want to record with</h5>
                                    </div>
                                </div>
                    			<div class="table-responsive-sm">
						            <table class="table table-hover">
                                        <thead style="color:#FFFFFF; background-color:#009900;">
                                            <tr>
                                                <th class="th-sm">#</th>
                                                <th scope="col">Tutor</th>
                                                <th scope="col">Descfription<i class="fas fa-sort-alpha-up"></i></th>
                                                <th scope="col">Name<i class="fas fa-sort"></i></th>
                                                <th scope="col">Category<i class="fas fa-sort"></i></th>
                                                <th scope="col">Date<i class="fas fa-sort"></i></th>
                                                <th scope="col">Credit Price<i class="fas fa-sort"></i></th>
                                                <th scope="col">Watch</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="75px"></a></td>
                                                <td><a href="{{ url('k_screen/recording/record_details') }}">The Direction is Always Up</a></td>
                                                <td><a href="{{ url('k_screen/recording/record_details') }}">Tupac Amoru Shakur</a></td>
                                                <td>Math</td>
                                                <td>02/21/1988</td>
                                                <td><span class="badge badge-pill badge-warning">75</span></td>
                                                </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/24.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">The Sun Always shines</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                                </td>
                                                <td>Science</td>
                                                <td>10/09/2017</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning">102</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/23.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Two Can Keep A Secret if One is Dead</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                                </td>
                                                <td>English</td>
                                                <td>11/16/2020</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning">220</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Always win at all cost, never fall</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Carlo Gambino</a>
                                                </td>
                                                <td>Gym</td>
                                                <td>03/1/2020</td>
                                                <td><span class="badge badge-pill badge-warning">45</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/21.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">There is a I in win</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Timagin</a>
                                                </td>
                                                <td>Science</td>
                                                <td>03/1/2020</td>
                                                <td><span class="badge badge-pill badge-warning">25</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">The Direction is Always Up</a>
                                                </td>
                                                <td><a href="#!">Tupac Amoru Shakur</a></td>
                                                <td>Math</td>
                                                <td>02/21/1988</td>
                                                <td><span class="badge badge-pill badge-warning">75</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/19.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">The Sun Always shines</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                                </td>
                                                <td>Science</td>
                                                <td>10/09/2017</td>
                                                <td><span class="badge badge-pill badge-warning">102</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Two Can Keep A Secret if One is Dead</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                                </td>
                                                <td>English</td>
                                                <td>11/16/2020</td>
                                                <td><span class="badge badge-pill badge-warning">220</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Always win at all cost, never fall</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                                </td>
                                                <td>Science</td>
                                                <td>03/1/2020</td>
                                                <td><span class="badge badge-pill badge-warning">45</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>
                                                    <a href="{{ url('profile') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" width="75px"></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">There is a I in win</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                                </td>
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
                    <!-- Start of New Tab -->
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
                                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-running-projects" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;"><span class="fas fa-ellipsis-h fs--2"></span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-running-projects">
                                                        <div class="bg-white py-2">
                                                            <a class="dropdown-item" href="#!">View</a>
                                                            <a class="dropdown-item" href="#!">Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body h-300 pr-0">
                                        <div class="echart-bar-top-products" style="min-height: 300px;" data-echart-responsive="true">
                                        </div>
                                    </div>
                                </div>
	                        </div>
                        </div>	
                    </div>
                </div>
            </div>
		</div>
        <!-- End of Tabs -->
    </div>			
</div>

@endsection
@section('additional-js')
@endsection