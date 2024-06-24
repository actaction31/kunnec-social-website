@extends('layouts.user')
 @section('title', 'Show')
@section('additional-css')
@endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p style="color: #FFFFFF">
                <a href="{{ url('k_live/live') }}" style="color: #FFFFFF">
                    <img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Show
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
                                    <option value="" disabled selected >Select Category ...</option>
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

 <!-- Start of COntent -->

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card">
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
				    <p class=" text-center" style="color: #009900">Top 12 Viewed Live Shows</p>
                    <div class="container-fluid pt-3">
                        <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li  data-target="#carouselExampleCaptions" data-slide-to="0"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <div class="card-body  p-0">
                                        <div class="row no-gutters text-center fs--1">
                                            <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top">
                                                        <a href="{{ url('k_screen/recording/record_details') }}" target="_blank">
                                                            <img class="img-fluid" src="{{ asset('public/user-dash/k_live/14.jpg') }}" alt="Card image" />
                                                        </a>
                                                    </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                        <h1>1</h1>
                                                        <a href="{{ url('profile') }}">
                                                            <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" alt="" width="50" />
                                                        </a>
                                                        <h6 class="mb-1"><a href="{{ url('profile') }}">Emilia Clarke</a></h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top">
                                                        <a href="{{ url('k_screen/recording/record_details') }}">
                                                            <img class="img-fluid" src="{{ asset('public/user-dash/k_live/15.jpg') }}" alt="Card image" />
                                                        </a>
                                                    </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                        <h1>2</h1>
                                                        <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/24.jpg')}}" alt="" width="50" /></a>
                                                        <h6 class="mb-1"><a href="{{ url('profile') }}">Kit Harington</a></h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/16.jpg') }}" alt="Card image" />
                                                    </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                        <h1>3</h1>
                                                        <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/15.jpg')}}" alt="" width="50" /></a>
                                                        <h6 class="mb-1"><a href="{{ url('profile') }}">Sophie Turner</a>
                                                        </h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/17.jpg') }}" alt="Card image" /></div>
                                                        <div class="card-img-overlay d-flex align-items-end">
                                                            <div>
                                                                <h5 class="card-title text-white">Show Title</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-white p-3 h-100">
                                                        <div class="row no-gutters ">
                                                            <h1>4</h1>
                                                            <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" alt="" width="50" /></a>
                                                            <h6 class="mb-1"><a href="{{ url('profile') }}">Peter Dinklage</a>
                                                            </h6>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="carousel-item">
                                        <div class="card-body  p-0">
                                            <div class="row no-gutters text-center fs--1">
                                                <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                    <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                        <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/20.jpg') }}" alt="Card image" />
                                                        </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                        <h1>5</h1>
                                                        <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/13.jpg')}}" alt="" width="50" /></a>
                                                        <h6 class="mb-1"><a href="{{ url('profile') }}">Emilia Clarke</a>
                                                        </h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=" card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/14.jpg') }}" alt="Card image" />
                                                    </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                        <h1>6</h1>
                                                        <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/10.jpg')}}" alt="" width="50" /></a>
                                                        <h6 class="mb-1"><a href="{{ url('profile') }}">Kit Harington</a>
                                                        </h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/19.jpg') }}" alt="Card image" />
                                                    </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                        <h1>7</h1>
                                                        <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/9.jpg')}}" alt="" width="50" /></a>
                                                        <h6 class="mb-1"><a href="{{ url('profile') }}">Sophie Turner</a>
                                                        </h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                                <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                    <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/18.jpg') }}" alt="Card image" />
                                                    </div>
                                                    <div class="card-img-overlay d-flex align-items-end">
                                                        <div>
                                                            <h5 class="card-title text-white">Show Title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-white p-3 h-100">
                                                    <div class="row no-gutters ">
                                                    <h1>8</h1>
                                                    <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/8.jpg')}}" alt="" width="50" /></a>
                                                    <h6 class="mb-1"><a href="{{ url('profile') }}">Peter Dinklage</a>
                                                    </h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body  p-0">
                                    <div class="row no-gutters text-center fs--1">
                                        <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                            <div class="card bg-dark text-white" style="max-width: 30rem;">
                                                <div class="card-img-top">
                                                    <img class="img-fluid" src="{{ asset('public/user-dash/k_live/14.jpg') }}" alt="Card image" />
                                                </div>
                                            <div class="card-img-overlay d-flex align-items-end">
                                                <div>
                                                    <h5 class="card-title text-white">Show Title</h5>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="bg-white p-3 h-100">
                                            <div class="row no-gutters ">
                                                <h1>9</h1>
                                                <a href="{{ url('profile') }}">
                                                    <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/7.jpg')}}" alt="" width="50" />
                                                </a>
                                                <h6 class="mb-1">
                                                    <a href="{{ url('profile') }}">Emilia Clarke</a>
                                                </h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class=" card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="card bg-dark text-white" style="max-width: 30rem;">
                                            <div class="card-img-top">
                                                <img class="img-fluid" src="{{ asset('public/user-dash/k_live/18.jpg') }}" alt="Card image" />
                                            </div>
                                        <div class="card-img-overlay d-flex align-items-end">
                                            <div>
                                                <h5 class="card-title text-white">Show Title</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white p-3 h-100">
                                        <div class="row no-gutters ">
                                            <h1>10</h1>
                                            <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/6.jpg')}}" alt="" width="50" /></a>
                                            <h6 class="mb-1"><a href="{{ url('profile') }}">Kit Harington</a>
                                            </h6>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                    <div class="card bg-dark text-white" style="max-width: 30rem;">
                                        <div class="card-img-top">
                                            <img class="img-fluid" src="{{ asset('public/user-dash/k_live/20.jpg') }}" alt="Card image" />
                                        </div>
                                        <div class="card-img-overlay d-flex align-items-end">
                                            <div>
                                                <h5 class="card-title text-white">Show Title</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white p-3 h-100">
                                        <div class="row no-gutters ">
                                            <h1>11</h1>
                                            <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/5.jpg')}}" alt="" width="50" /></a>
                                            <h6 class="mb-1">
                                                <a href="{{ url('profile') }}">Sophie Turner</a>
                                            </h6>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="card col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                    <div class="card bg-dark text-white" style="max-width: 30rem;">
                                        <div class="card-img-top"><img class="img-fluid" src="{{ asset('public/user-dash/k_live/17.jpg') }}" alt="Card image" />
                                        </div>
                                        <div class="card-img-overlay d-flex align-items-end">
                                            <div>
                                                <h5 class="card-title text-white">Show Title</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white p-3 h-100">
                                        <div class="row no-gutters ">
                                            <h1>12</h1>
                                            <a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('public/user-dash/images/users/profiles/4.jpg')}}" alt="" width="50" /></a>
                                            <h6 class="mb-1"><a href="{{ url('profile') }}">Manza Ades</a>
                                            </h6>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>   
        </div> 
    </div>
</div>

    <p class=" text-center" style="color: #009900"><strong>Top Rated Shows</p></div>  
    <div class="card-deck">
        <div class="card">
            <div class="card-img-top">
                <span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Top Rated</span>
            </div>
            <a href="{{ url('k_live/live_details') }}" >
                <img class="img-fluid" src="{{ asset('public/user-dash/k_live/7.jpg') }}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h6 class="fs-9">
                    <strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/ Mamp</a></strong>
                </h6>
                <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                <div class="media align-items-center">
			        <div class="avatar avatar-m">
                        <a href="{{ url('profile') }}">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" alt="" />
                        </a>
                    </div>
                    <div class="media-body ml-2">
                        <a href="{{ url('profile') }}">
                            <h5 class="mb-0 fs-0">Lea</h5>
                        </a>
                    </div>
			    </div>
                <p class="fs--1 mb-1">Credits: <strong class="text-danger">96</strong></p>
            </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
	
	<div class="card">
        <div class="card-img-top">
            <span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Top Rated</span>
        </div>
        <a href="{{ url('k_live/live_details') }}" >
            <img class="img-fluid" src="{{ asset('public/user-dash/k_live/bg-2.jpg') }}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Apple MacBook Pro (15&quot; Retina, Touch Bar, 2.2GHz </a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/24.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Sabrina</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">125</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(20)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
	
   <div class="card">
        <div class="card-img-top"><span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Top Rated</span></div>
        <a href="{{ url('k_live/live_details') }}" ><img class="img-fluid" src="{{ asset('public/user-dash/k_live/9.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/ Mamp</a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/23.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Mike</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">65</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
    <div class="card">
        <div class="card-img-top"><span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Top Rated</span></div>
        <a href="{{ url('k_live/live_details') }}" ><img class="img-fluid" src="{{ asset('public/user-dash/k_live/6.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Photoshop CS4 training</a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Shirl</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">46</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(29)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
  
</div>
</br>
<div> <p class=" text-center" style="color: #009900"><strong>Trending Shows</p></div>  
<div class="card-deck">

    <div class="card">
        <div class="card-img-top"><span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span></div>
        <a href="{{ url('k_live/live_details') }}" >
        <img class="img-fluid" src="{{ asset('public/user-dash/k_live/11.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/ Mamp</a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/21.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Lea</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">96</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
	
	<div class="card">
        <div class="card-img-top"><span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span></div>
        <a href="{{ url('k_live/live_details') }}" ><img class="img-fluid" src="{{ asset('public/user-dash/k_live/10.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Apple MacBook Pro (15&quot; Retina, Touch Bar, 2.2GHz </a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/19.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Sabrina</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">125</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(20)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
	
   <div class="card">
        <div class="card-img-top"><span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span></div>
        <a href="{{ url('k_live/live_details') }}" ><img class="img-fluid" src="{{ asset('public/user-dash/k_live/9.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/ Mamp</a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/8.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Mike</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">65</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
   <div class="card">
        <div class="card-img-top"><span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span></div>
        <a href="{{ url('k_live/live_details') }}" ><img class="img-fluid" src="{{ asset('public/user-dash/k_live/4.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h6 class="fs-9"><strong><a href="{{ url('k_live/live_details') }}" style="font-size: 1.0rem; color: #009900;">Photoshop CS4 training</a></strong></h6>
            <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
            <div class="media align-items-center">
			    <div class="avatar avatar-m">
                    <a href="{{ url('profile') }}">
                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/6.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="media-body ml-2">
                    <a href="{{ url('profile') }}">
                    <h5 class="mb-0 fs-0">Shirl</h5>
                    </a>
                </div>
			</div>
            <p class="fs--1 mb-1">Credits: <strong class="text-danger">46</strong></p>
        </div>
		<div class="d-flex align-items-center justify-content-between px-3">
            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(29)</span>
            </div>
            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a>
			</div>
        </div>
    </div>
  
</div>
	
<!-- Functional JavaScript -->
    <!-- jQuery -->
    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../../js/sbt.js"></script>
	<script type="text/javascript" src="../../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/lib/@fortawesome/all.min.js"></script>

@endsection
@section('additional-js')
@endsection