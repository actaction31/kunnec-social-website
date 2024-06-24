@extends('layouts.user')
 @section('title', 'Show Details')
@section('additional-css')
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

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="product-slider position-relative">
                    <div class="position-relative h-sm-50">
                        <img class="img-fluid fit-cover w-sm-50 h-sm-50 rounded absolute-sm-centered" src="{{ asset('public/user-dash/k_live/7.jpg') }}" alt="" /> 
                    </div>
                </div>
                  
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" type="button" href="#!" data-toggle="modal" data-target="#showModal"><span class="fas fa-handshake"></span> Enter Live Show
                    </button>
                    <small class="text-muted">
                    <button class="btn btn-warning btn-sm rounded-capsule" type="button">
                        <span data-fa-transform="shrink-3"></span>
                        <a href="{{ url('k_live/live_channel') }}" style="color:#FFFFF;">Go To Channel</a>
                    </button>
                </small>
                  <h5>Oracle DBA 11g/12c - Database Administration for Junior DBA</h5>
                  <p class="fs--1">Learn to become an Oracle Database Administrator (DBA) in 6 weeks and get a well paid job as a Junior DBA.</p>
				  <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Tutor: </small><img src="{{ asset('public/user-dash/images/users/profiles/4.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                  <h4 class="d-flex align-items-center"><span class="text-warning mr-2">400 Credits</span><span class="mr-1 fs--1 text-500"> per 15 mins.</h4>
				  <a class="fs--2 mb-3 d-inline-block text-decoration-none" href="#review" data-tab-target="#review" data-fancyscroll data-offset="80"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1 text-600">(8)</span></a>
                  
				  
				  <p class="fs--1 mb-1"> <span>Language: </span><strong>English</strong></p>
                  <div class="row">
                    <div class="col-auto pr-0">
                      
                    </div>
                    <div class="col-sm-auto pl-3 pl-sm-0"><a class="btn btn-sm btn-outline-danger border-300 mr-2 mt-2 mt-sm-0" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Recorder List"><span class="far fa-heart mr-1"></span>282</a></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="fancy-tab overflow-hidden mt-4">
                    <div class="nav-bar">
                      <div class="nav-bar-item active pl-0 pr-2 pr-sm-4">
                        <div class="mt-1 fs--1"><strong>Description</strong></div>
                      </div>
                    </div>
                    <div class="tab-contents">
                      <div class="tab-content active">
                        <p>Over the years, Apple has built a reputation for releasing its products with a lot of fanfare â€“ but that didnâ€™t exactly happen for the MacBook Pro 2018. Rather, Appleâ€™s latest pro laptop experienced a subdued launch, in spite of it offering a notable spec upgrade over the 2017 model â€“ along with an improved keyboard. And, as with previous generations the 15-inch MacBook Pro arrives alongside a 13-inch model.</p>
                        <p>Apple still loves the MacBook Pro though, despite the quiet release. This is because, while the iPhone XS and iPad, along with the 12-inch MacBook, are aimed at everyday consumers, the MacBook Pro has always aimed at the creative and professional audience. This new MacBook Pro brings a level of performance (and price) unlike its more consumer-oriented devices. </p>
                        <p>Still, Apple wants mainstream users to buy the MacBook Pro, too. So, if youâ€™re just looking for the most powerful MacBook on the market, youâ€™ll love this new MacBook Pro. Just keep in mind that, while the keyboard has been updated, there are still some issues with it.</p>
                        <p>Thereâ€™s enough of a difference between the two sizes when it comes to performance to warrant two separate reviews, and here weâ€™ll be looking at how the flagship 15-inch MacBook Pro performs in 2019.</p>
                        <p>It's build quality and design is batter than elit. Numquam excepturi a debitis, sint voluptates, nam odit vel delectus id repellendus vero reprehenderit quidem totam praesentium vitae nesciunt deserunt. Sint, veniam?</p>
                      </div>
            <div class="tab-content">
		        <div class="nav-bar-item active pl-0 pr-2 pr-sm-4">
                    <hr class="style12">
		            <i class="fas fa-chart-line" title="Trending" style="color: #009900;"></i>
			        My Recorded Shows
                    <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                                <div class="card-img-top">
                                    <div class="hovereffect">
                                        <a href="{{ url('k_live/live_channel') }}">
                                            <img class="img-fluid" src="{{ asset('public/user-dash/k_vid/thumbs/1.jpg') }}" alt="Card image cap">
                                        </a>
                                        <div class="overlay">
                                            <h2>
                                                <span class="badge badge-light"><small class="text-green">23:18</small></span>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">21 Views </small><small class="text-white"> | </small></p>
                                                <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 month ago</small></p>
                                            </h2>
                                            <a class="info" href="{{ url('k_live/live_channel') }}">
                                                <img class="rounded-circle" src="{{ asset('public/user-dash/k_vid/thumbs/play.png') }}" height="50px" width="50px" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;"><a class="info" href="{{ url('k_vid/vid_screen') }}">See the Lights Behind </a></h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" alt="" />
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
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_vid/thumbs/2.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">12:05</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">1001 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 1 week ago</small></p>
                                                </h2>
                                                <a class="info" href="{{ url('k_vid/vid_screen') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/k_vid/thumbs/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;"><a class="info" href="{{ url('k_vid/vid_screen') }}">Watching things go by always</a></h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/13.jpg')}}" alt="" />
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
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_vid/thumbs/4.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">7:25</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">4700 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 minutes ago</small></p>
                                                </h2>
                                                <a class="info" href="{{ url('k_vid/vid_screen') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/k_vid/thumbs/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;"><a class="info" href="{{ url('k_vid/vid_screen') }}">Lost in the City</a></h5>
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
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_vid/thumbs/11.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light"><small class="text-green">11:04</small></span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white">200,421 Views </small><small class="text-white"> | </small></p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;"><small class="text-white"> 6 weeks ago</small></p>
                                                </h2>
                                                <a class="info" href="{{ url('k_vid/vid_screen') }}"><img class="rounded-circle" src="{{ asset('public/user-dash/k_vid/thumbs/play.png') }}" height="50px" width="50px" alt="" /></a>
                                            </div>
                                    </div>
                                </div>			
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1.0rem;"><a class="info" href="{{ url('k_vid/vid_screen') }}">Look at this Skyline</a></h5>
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-m">
                                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/5.jpg')}}" alt="" />
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
                                        <img class="img-fluid" src="{{ asset('public/user-dash/k_vid/thumbs/5.jpg') }}" alt="Card image cap">
                                            <div class="overlay">
                                                <h2>
                                                    <span class="badge badge-light">
                                                        <small class="text-green">8:25</small>
                                                    </span>
                                                    <p class="card-text d-inline" style="font-size:.8rem;">
                                                        <small class="text-white">1,200,465 Views </small><small class="text-white"> | </small>
                                                    </p>
                                                    <p class="card-text d-inline" style="font-size:.8rem;">
                                                        <small class="text-white"> 17 days ago</small>
                                                    </p>
                                                </h2>
                                                <a class="info" href="{{ url('k_vid/vid_screen') }}">
                                                    <img class="rounded-circle" src="{{ asset('public/user-dash/k_vid/thumbs/play.png') }}" height="50px" width="50px" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>			
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 1.0rem;"><a class="info" href="{{ url('k_vid/vid_screen') }}">Dark Nights in Gotham</a></h5>
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-m">
                                                <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/13.jpg')}}" alt="" />
                                            </div>
                                            <div class="media-body ml-2">
                                                <h5 class="mb-0 fs-0">Michael</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 pr-lg-2">
                        <p class=" text-center" style="color: #FF8C00">Return to this page to rate and review.</p>
                    </div>

                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="nav-bar-item active pl-0 pr-2 pr-sm-4">
                                    <div class="mt-1 fs--1"><strong>Reviews</strong></div>
                                </div>
                                <div class="mb-1">
                                    <span class="fa fa-star text-warning fs--1"></span>
                                    <span class="fa fa-star text-warning fs--1"></span>
                                    <span class="fa fa-star text-warning fs--1"></span>
                                    <span class="fa fa-star text-warning fs--1"></span>
                                    <span class="fa fa-star text-warning fs--1"></span>
                                    <span class="ml-3 text-dark font-weight-semi-bold">Awesome support, great code ðŸ˜</span>
                                </div>
                                <p class="fs--1 mb-2 text-600">By Drik Smith â€¢ October 14, 2019</p>
                                <p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo. After the download I had a technical question, emailed the team and got a response right from the team CEO with helpful advice.</p>
                                <hr class="my-4">
                                <div class="mb-1"><span class="fa fa-star text-warning fs--1"></span><span class="fa fa-star text-warning fs--1"></span><span class="fa fa-star text-warning fs--1"></span><span class="fa fa-star text-warning fs--1"></span><span class="fa fa-star-half-alt text-warning star-icon fs--1"></span><span class="ml-3 text-dark font-weight-semi-bold">Outstanding Design, Awesome Support</span>
                            </div>
                            <p class="fs--1 mb-2 text-600">By Liane â€¢ December 14, 2019</p>
                            <p class="mb-0">This really is an amazing template - from the style to the font - clean layout. SO worth the money! The demo pages show off what Bootstrap 4 can impressively do. Great template!! Support response is FAST and the team is amazing - communication is important.</p>
                            <hr class="my-4">
                        </div>
                        <div class="col-lg-6 pl-lg-5">
                            <form>
                                <h5 class="mb-3">Write your Review</h5>
                                <div class="form-group">
                                    <label>Rate:</label>
                                    <a class="fs--2 mb-3 d-inline-block text-decoration-none" href="#review" data-tab-target="#review" data-fancyscroll data-offset="80"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1 text-600"></a>
                                </div>
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input class="form-control" type="text">
                                </div>
                                
                                <div class="form-group">
                                    <label>Review:</label>
                                    <textarea class="form-control" rows="2"></textarea>
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Content -->			



@endsection
@section('additional-js')
@endsection