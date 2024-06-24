@extends('layouts.user')
@section('title', 'Kpod Channel')
@section('additional-css')
@endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p>
                <a href="{{ url('k_pod/Kpod') }}" style="color: #FFFFFF"><img src="{{ asset('images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Kpod</a>
            |&nbsp;
                <a href="{{ url('k_pod/Kpod_settings') }}" style="font-size:20px; color: #ffffff;">
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
                        <input class="form-control" type="text" placeholder="Search Kpods" aria-label="Search">
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
                                        <option>Love</option>
                                        <option>Relationships</option>
                                        <option>Marriage</option>
                                        <option>Current Events</option>
                                        <option>Philosophy</option>
                                        <option>Religion</option>
                                        <option>Astrology</option>
                                        <option>Entertainment</option>
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
                                        <option>Current Events</option>
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
                            <label for="card-holder-country" style="color: #F1C40F">Uploaded</label>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Today</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Past 7 days </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Past 30 days</label>
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
                                </label>
                            </div>
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
                            <button class="btn btn-warning mr-5 mb-1" type="button"><a href="{{ url('k_pod/Kpod_list') }}">Filter</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>

<div class="row mb-2">
    <div class="col">
        <div class="card" >
			<img src="{{ asset('user-dash/k_pod/images/11.jpg') }}" class="img-fluid" style="height:250px;" 2alt="Responsive image">
		</div>
    </div>
</div>
			
<div class="card mb-3">
    <div class="card-header">
        <div class="col-lg-12">
		    <div class="d-inline-block"> 
                <div class="row">
                    <div class="col-sm-2 ">			
                        <div class="notification-avatar">
                            <div class="avatar avatar-5xl mr-3 justify-content-center">
                                <img class="img-thumbnail img-fluid rounded-circle" src="{{asset('user-dash/images/users/profiles/1.jpg')}}" alt="" />
                            </div>
                        </div> 
                    </div> 
			        <div class="col-sm-3 ">	
                        <div class="d-inline-block ">  
                            <h3 class="mb-1" style="color:#009900;">
                                <strong> {{Auth::user()->username}}</strong>
                            </h3>
                            <p>
                                <button class="btn btn-success mr-1 mb-1" type="button">
                                    <span class="fas fa-plus mr-1" data-fa-transform="shrink-3" style="color:#FFFFFF;"></span>Subscribe
                                </button>
                                <small class="text-muted">
                                    <button class="btn btn-outline-success btn-sm rounded-capsule" type="button">
                                        <span data-fa-transform="shrink-3"></span>2435
                                    </button>
                                </small>
                            </p> 
                        </div>
					</div>
					
				    <div class="col-sm-7">
					    <h3 class="mb-1" style="color:#009900;"><strong>Featured</strong></h3>
					    <hr class="style12">
				        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                    <button class="btn btn-success btn-sm rounded-capsule" type="button">
                            <span data-fa-transform="shrink-3"></span>Season : 1
                        </button>&nbsp;
                        <button class="btn btn-success btn-sm rounded-capsule" type="button">
                            <span data-fa-transform="shrink-3"></span>Episode : 14
                        </button>&nbsp;
						<button class="btn btn-warning btn-sm rounded-capsule" type="button">
                            <span data-fa-transform="shrink-3"></span>75 Credits
                        </button>&nbsp;
					    <small class="text-muted"> Rated: </small>
                        <span class="fa fa-star text-warning"></span>
                        <span class="fa fa-star text-warning"></span>
                        <span class="fa fa-star text-warning"></span>
                        <span class="fa fa-star text-warning"></span>
                        <span class="fa fa-star text-warning"></span>

                        <div class="row">
					        <div class="col-sm mt-3">						
					            <audio src="{{asset('user-dash/k_pod/mp3/All Time.mp3')}}" controls="controls"></audio>
                            </div>
                            <div class="col-sm mt-4">						
					            <button class="btn btn-outline-success btn-sm rounded-capsule" type="button"><span data-fa-transform="shrink-3"></span>Download</button>
                            </div>							
			            </div>	
				    </div>
				</div>
			</div> 
		</div>
	</div>
	
    <div class="card-body bg-light overflow-hidden">
        <div class="row">
            <div class="col-12">
				<!-- Start of Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true"><i class="fas fa-podcast"></i> Podcasts</a></li>
                    <li class="nav-item"><a class="nav-link" id="video-pl" data-toggle="tab" href="#tab-pl" role="tab" aria-controls="tab-pl" aria-selected="false"><i class="fas fa-user"></i> About</a></li>
				    <li class="nav-item"><a class="nav-link" id="video-sub" data-toggle="tab" href="#tab-sub" role="tab" aria-controls="tab-sub" aria-selected="false"><i class="fas fa-user-friends"></i> Subscribers</a></li>
				</ul>

                <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
   
                    <!-- Start of Home -->
	
	                <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
							        <div class="btn-group">
                                        <button class="btn dropdown mb-2 btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seasons</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Season 1</a>
                                            <a class="dropdown-item" href="#">Season 2</a>
                                            <a class="dropdown-item" href="#">Season 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    		<div class="table-responsive-sm">
						        <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">Episode #</th>
                                        <th scope="col">Descfription<i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Date<i class="fas fa-sort"></i></th>
                                        <th scope="col">Credit Price<i class="fas fa-sort"></i></th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                                                        
                                        <th scope="row">1</th>
                                        <td>
                                            <a href="k_pod_play.php">The Direction is Always Up</a>
                                        </td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                        <td>
                                            <a href="#!">
                                                <span class="badge badge-pill badge-success">Download</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td><a href="k_pod_play.php">The Sun Always shines</a></td>
                                    <td>10/09/2017</td>
                                    <td><span class="badge badge-pill badge-warning">102</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td><a href="k_pod_play.php">Two Can Keep A Secret if One is Dead</a></td>
                                    <td>11/16/2020</td>
                                    <td><span class="badge badge-pill badge-warning">220</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">4</th>
                                    <td><a href="k_pod_play.php">Always win at all cost, never fall</a></td>
                                    <td>03/1/2020</td>
                                    <td><span class="badge badge-pill badge-warning">45</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">5</th>
                                    <td><a href="k_pod_play.php">There is a I in win</a></td>
                                    <td>03/1/2020</td>
                                    <td><span class="badge badge-pill badge-warning">25</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">6</th>
                                    <td><a href="k_pod_play.php">The Direction is Always Up</a></td>
                                    <td>02/21/1988</td>
                                    <td><span class="badge badge-pill badge-warning">75</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">7</th>
                                    <td><a href="k_pod_play.php">The Sun Always shines</a></td>
                                    <td>10/09/2017</td>
                                    <td><span class="badge badge-pill badge-warning">102</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">8</th>
                                    <td><a href="k_pod_play.php">Two Can Keep A Secret if One is Dead</a></td>
                                    <td>11/16/2020</td>
                                    <td><span class="badge badge-pill badge-warning">220</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">9</th>
                                    <td><a href="k_pod_play.php">Always win at all cost, never fall</a></td>
                                    <td>03/1/2020</td>
                                    <td><span class="badge badge-pill badge-warning">45</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">10</th>
                                    <td><a href="k_pod_play.php">There is a I in win</a></td>
                                    <td>03/1/2020</td>
                                    <td><span class="badge badge-pill badge-warning">25</span></td>
                                    <td><a href="k_course_details.php"><span class="badge badge-pill badge-success">Download</span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn mr-1 mb-1" type="button" style="color:#009900;">
                                <span class="fas fa-plus mr-1" data-fa-transform="shrink-3"></span>Load More
                            </button> 
                        </div>
					</div>
                </div>
            </div>
			<div class="tab-pane fade" id="tab-pl" role="tabpanel" aria-labelledby="pl-tab">
            <!-- Start of Play List -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">About Podcast</h5>
                            </div>
                        </div>
						<p class="fs--1 mb-2 text-600">By Drik Smith â€¢ October 14, 2019</p>
                        <p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo. After the download I had a technical question, emailed the team and got a response right from the team CEO with helpful advice.</p>
                        <br>                                                                              <hr class="style12">
                        <div class="card">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Team</h5>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-sm-3">
									<div class="bg-white p-3 h-100">
                                        <a href="{{ url('profile') }}">
                                            <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/1.jpg')}}" alt="" width="100" />
                                        </a>
                                       <h6 class="mb-1">
                                           <a href="{{ url('profile') }}">Emma Watson</a>
                                       </h6>
                                       <p class="fs--2 mb-1">
                                           <a class="text-700" href="{{ url('profile') }}">Alpha Chi Omega</a>
                                        </p>
                                   </div>
								</div>
                                <div class="col-sm-9">
									<p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo. After the download I had a technical question, emailed the team and got a response right from the team CEO with helpful advice.</p>
                                </div>
                            </div>
									
							<hr class="style12">
								
								    <div class="row">
                                        <div class="col-sm-3">
										    <div class="bg-white p-3 h-100"><a href="{{ url('profile') }}"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/25.jpg')}}" alt="" width="100" /></a>
                                                <h6 class="mb-1"><a href="{{ url('profile') }}">Michelle Fairley</a>
                                                </h6>
                                                <p class="fs--2 mb-1"><a class="text-700" href="{{ url('profile') }}">Alpha Chi Omega</a></p>
                                            </div>
									    </div>
                                        <div class="col-sm-9">
										    <p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo. After the download I had a technical question, emailed the team and got a response right from the team CEO with helpful advice.</p>
                                        </div>
                                    </div>
								</div>
							</div>
                        </div>
                    </div>
					
					<div class="tab-pane fade" id="tab-sub" role="tabpanel" aria-labelledby="sub-tab">
  
                       
						
						
  
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                                        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Subscribers </h5>&nbsp;<small class="text-muted"><button class="btn btn-outline-success btn-sm rounded-capsule" type="button"><span data-fa-transform="shrink-3"></span>2435</button></small>
                                    </div>
                                </div>
                            </div>
							
							<div class="card">
         
            <div class="card-body bg-light p-0">
                <div class="row no-gutters text-center fs--1">
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/23.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Emilia Clarke</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Technext limited</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/22.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Kit Harington</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Harvard Korea Society</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/21.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Sophie Turner</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Graduate Student Council</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/19.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Peter Dinklage</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Art Club, MIT</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/18.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Nikolaj Coster</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Archery Club, MIT</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/17.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Isaac Hempstead</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="#!">Asymptones</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/16.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Alfie Allen</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Brain Trust</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/15.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Iain Glen</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">GSAS Action Coalition</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/14.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Liam Cunningham</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Caving Club, MIT</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/13.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">John Bradley</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Chess Club</a>
                            </p>
                        </div>
                    </div>
                     <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/12.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Rory McCann</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Chamber Music Society</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/11.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Joe Dempsie</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Clubchem</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/10.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Maisie Williams</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="#!">Brain Trust</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/9.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Lena Headey</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="#!{{ url('profile') }}">Clubchem</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/8.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Gwendoline Christie</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Technext limited</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/7.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Nathalie Emmanuel</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Asymptones</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/6.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Natalie Dormer</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Musical Club</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/5.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Carice Houten</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Concert Choir</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/4.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Hannah Murray</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Career Club</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/3.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Rose Leslie</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Musical Club</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/2.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Rory McCann</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Alpine Ski Club</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/1.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Diana Rigg</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Clubchem</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/25.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Michelle Fairley</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Alpha Chi Omega</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white p-3 h-100">
                            <a href="{{ url('profile') }}">
                                <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{asset('user-dash/images/users/profiles/24.jpg')}}" alt="" width="100" />
                            </a>
                            <h6 class="mb-1">
                                <a href="{{ url('profile') }}">Gemma Whelan</a>
                            </h6>
                            <p class="fs--2 mb-1">
                                <a class="text-700" href="{{ url('profile') }}">Chamber Music Society</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <button class="btn mr-1 mb-1" type="button" style="color:#009900;">
                <span class="fas fa-plus mr-1" data-fa-transform="shrink-3"></span>Load More
            </button> 
		</div>
    </div>
</div>
 


@endsection
@section('additional-js')
@endsection