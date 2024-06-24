@extends('layouts.user')
 @section('title', 'Create a Post')
 @section('css/post')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href='https://fonts.googleapis.com/css?family=Dosis|Candal' rel='stylesheet' type='text/css'>
<style>

#editor {
  box-shadow: 0 0 2px #CCC;
  min-height: 150px;
  overflow: auto;
  padding: 1em;
  margin-top: 20px;
  resize: vertical;
  outline: none;
}

.toolbar {
  text-align: center;
}

.toolbar a,
.fore-wrapper,
.back-wrapper {
  border: 1px solid #AAA;
  background: #009900;
  font-family: 'Candal';
  font-size: 10px;
  border-radius: 50%;
  color: #ffffff;
  padding: 10px;
  width: 4.0em;
  margin: -2px;
  margin-top: 10px;
  display: inline-block;
  text-decoration: none;
  box-shadow: 0px 1px 0px #CCC;
}

.toolbar a:hover, .fore-wrapper:hover, .back-wrapper:hover {
  background: #f2f2f2;
  border-color: #8c8c8c;
}

a[data-command='redo'],a[data-command='strikeThrough'],a[data-command='justifyFull'],a[data-command='insertOrderedList'],a[data-command='outdent'],a[data-command='p'],a[data-command='superscript']{
  margin-right:5px;
  border-radius:50%;
}

a[data-command='undo'],.fore-wrapper,a[data-command='justifyLeft'],a[data-command='insertUnorderedList'],a[data-command='indent'],a[data-command='h1'],a[data-command='subscript']{
  border-radius: 50%;
}

a.palette-item {
  height: 1em;
  border-radius: 3px;
  margin: 2px 1px;
  width: 3em;
}

.fore-palette,
.back-palette {
  display: none;
}

.fore-wrapper,
.back-wrapper {
  display: inline-block;
  cursor: pointer;
}

.fore-wrapper:hover .fore-palette,
.back-wrapper:hover .back-palette {
  display: block;
  float: left;
  position: absolute;
  padding: 3px;
  width: 10em;
  background: #FFF;
  border: 1px solid #DDD;
  box-shadow: 0 0 5px #CCC;
  height: 16.4em;
}

.fore-wrapper:hover .fore-palette {
  left: 7%;
  top: 48px;
}

.back-wrapper:hover .back-palette {
  left: 17%;
  top: 48px;
}

.fore-palette a,
.back-palette a {
  background: #FFF;
  margin-bottom: 2px;
}
</style>
@endsection
@section('content')

<div class="card">
    <div class="card-header1">
        <div class="row">
            <div class="col-sm">
            <p>
                    <a href="{{ url('k_me/k2me') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Jobs</a>
                     |&nbsp;               
                    <a href="{{ url('k_me/k2me_post-list') }}" style="font-size:20px; color: #ffffff;">
                        <i class="fas fa-clipboard-list" data-toggle="tooltip" data-placement="bottom" title="Posts" style="color: #FFFFFF;"></i> 
                    <span1 class="badge badge-danger"> 3</span1>
                    </a>
                    &nbsp;               
                </p>
            </div>
  
            <div class="col-sm d-flex flex-row-reverse">
                <p>
                    <button class="btn btn-falcon-default  ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                    </button>
                </p>
            </div>
        </div>
        <div class="collapse" id="collapseSort1">
            <div class="row p-3">
                <div class="col">
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Search Opportunities" aria-label="Search">
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
			                            <select class="custom-select" id="card-holder-category" name="customSelectCategory" required="required">
					                        <option value="" disabled selected>Select Category ...</option>
                                            <option>Accounting</option>
                                            <option>Admin</option>
                                            <option>Art</option>
                                            <option>Architecture</option>
                                            <option>Beverage</option>
                                            <option>Business</option>
                                            <option>Customer</option>
                                            <option>Design</option>
                                            <option>Education</option>
                                            <option>Engineering</option>
                                            <option>Film</option>
                                            <option>Finance</option>
                                            <option>Fitness</option>
                                            <option>Food</option>
                                            <option>Government</option>
                                            <option>Health</option>
                                            <option>HR</option>
                                            <option>Hotel</option>
                                            <option>Labor</option>
                                            <option>Legal</option>
                                            <option>Manufacturing</option>
                                            <option>Marketing</option>
                                            <option>Media</option>
                                            <option>Medical</option>
                                            <option>Management</option>
                                            <option>Music</option>
                                            <option>Non-Profit</option>
                                            <option>Office</option>
                                            <option>Promotions</option>
                                            <option>Programming</option>
                                            <option>Real Estate</option>
                                            <option>Retail</option>
                                            <option>Sales</option>
                                            <option>Salon | Barber</option>
                                            <option>Spas</option>
                                            <option>Sys Network</option>
                                            <option>Tech Support</option>
                                            <option>Transportation</option>
                                            <option>TV</option>
                                            <option>Video</option>
                                            <option>Web</option>
                                            <option>Writing</option>
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
                                            <option value="" disabled selected>Type of Post ...</option>
                                            <option value="Afrikanns">Personal</option>
                                            <option value="Albanian">Company</option>  
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                            <option value="" disabled selected>Select Language ...</option>
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
                                </div>
					 
					            <div class="col-sm-2">
					                <div class="form-check-label" style="color: #F1C40F">Time</div>
					                <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">One Time </label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Full Time</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Part Time</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Remote</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Internship</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Freelance</label>
                                    </div>
						        <div>
                            </div>
						    <br>
						</div>
					 
                        <div class="col-sm-2">
                            <div class="form-check-label" style="color: #F1C40F">Payment</div>
					            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Flat Fee </label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Hourly</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Weekly</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Completion</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">No Payment</label>
                            </div>
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
                                <a href="{{ url('k_me/k2me_list') }}">Filter</a>
                            </button>
				        </div>
				    </div>
			    </div>
            </div>
	    </div>
    </div>
</div>
</div>
</div>

<div class="card-header1 mt-3">
     Create an Opportunity ( A post is 10 credit charge / wk , until ended. )
</div>
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-shield-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" id="inputOppTitle" placeholder="Opportunity Title">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <textarea class="form-control" id="ShortDescrt" placeholder="Description of Opportunity" rows="6"></textarea>
            </div>
        </div>
    </div>
</div>

<div class="card-header1 mt-3">
    Specification
</div>
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-star"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-category" name="customSelectCategory" required="required">
					    <option value="" disabled selected>Select Category ...</option>
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
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
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
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-state" name="customSelectState" required="required">
                        <option value="" disabled selected>Select State ...</option>
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
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
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
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class='fas fa-business-time'></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-oppType" name="customoppType" required="required">
                        <option value="" disabled selected> Type ...</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Internship</option>
                        <option>Freelance</option>
                        <option>Remote</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-Education" name="customEducation" required="required">
                        <option value="" disabled selected> Payment ...</option>
                        <option>One Time</option>
                        <option>Hourly</option>
                        <option>Weekly</option>
                        <option>Completion</option>
                        <option>Salary</option>
                        <option>No Payment</option>
                    </select>
                    
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class='far fa-clock'></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-hours" name="customSelectHours" required="required">
                        <option value="" disabled selected> Hours ...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                        <option>35</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text">.hrs / week</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-school"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-Education" name="customEducation" required="required">
                        <option value="" disabled selected> Education ...</option>
                        <option>High School</option>
                        <option>Associates</option>
                        <option>Bachelors</option>
                        <option>Master</option>
                        <option>PhD</option>
                        <option>Postdoc</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-bolt"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-Class" name="customClass" required="required">
                        <option value="" disabled selected>  Classification...</option>
                        <option>Personal</option>
                        <option>Company</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-Education" name="customEducation" required="required">
                        <option value="" disabled selected> Experience ...</option>
                        <option>1+</option>
                        <option>2+</option>
                        <option>3+</option>
                        <option>4+</option>
                        <option>5+</option>
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text">Years</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-video"></i></span>
                    </div>
                    <select class="custom-select" id="card-holder-Interview" name="customInterview" required="required">
                        <option value="" disabled selected> Interview ...</option>
                        <option>Face to Face ( camera )</option>
                        <option>In Person</option>
                    </select>
                </div>
            </div>
        </div>
   </div>  
</div>

<div class="card-header1 mt-3">
   Responsibilities
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="toolbar">
                    <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                    <a href="#" data-command='redo'><i class='fa fa-redo'></i></a>
                    <div class="fore-wrapper">
                        <i class='fa fa-paint-brush'></i>
                        <div class="fore-palette">
                        </div>
                    </div>
                    <div class="back-wrapper">
                        <i class='fa fa-paint-roller'></i>
                        <div class="back-palette">
                        </div>
                    </div>
                    <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                    <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                    <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                    <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                    <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                    <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                    <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                    <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                    <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                    <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                    <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                    <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                    <a href="#" data-command='h1'>H1</a>
                    <a href="#" data-command='h2'>H2</a>
                    <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                    <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                    <a href="#" data-command='p'>P</a>
                    <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                    <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                </div>
                <div id='editor' contenteditable placeholder="Salary">
                </div>  
            </div>
        </div>  
   </div>  
</div>

<div class="card-header1 mt-3">
    Qualifications
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="toolbar">
                    <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                    <a href="#" data-command='redo'><i class='fa fa-redo'></i></a>
                    <div class="fore-wrapper">
                        <i class='fa fa-paint-brush'></i>
                        <div class="fore-palette">
                        </div>
                    </div>
                    <div class="back-wrapper">
                        <i class='fa fa-paint-roller'></i>
                        <div class="back-palette">
                        </div>
                    </div>
                    <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                    <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                    <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                    <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                    <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                    <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                    <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                    <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                    <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                    <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                    <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                    <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                    <a href="#" data-command='h1'>H1</a>
                    <a href="#" data-command='h2'>H2</a>
                    <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                    <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                    <a href="#" data-command='p'>P</a>
                    <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                    <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                </div>
                <div id='editor' contenteditable>
                </div>  
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12"> 
                <button class="btn btn-lg btn-kunnec rounded-capsule mr-1 mb-1" type="button" href="#!" data-toggle="modal" data-target="#K2mePostModal">
                    <span class="fas fa-upload"></span> Post Opportunity
                </button>
            </div>
        </div>
   </div>  
</div>

@endsection
@section('additional-js')

<script>
     var colorPalette = ['000000', 'FF9966', '6699FF', '99FF66', 'CC0000', '00CC00', '0000CC', '333333', '0066FF', 'FFFFFF'];
var forePalette = $('.fore-palette');
var backPalette = $('.back-palette');

for (var i = 0; i < colorPalette.length; i++) {
  forePalette.append('<a href="#" data-command="forecolor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
  backPalette.append('<a href="#" data-command="backcolor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
}

$('.toolbar a').click(function(e) {
  var command = $(this).data('command');
  if (command == 'h1' || command == 'h2' || command == 'p') {
    document.execCommand('formatBlock', false, command);
  }
  if (command == 'forecolor' || command == 'backcolor') {
    document.execCommand($(this).data('command'), false, $(this).data('value'));
  }
    if (command == 'createlink' || command == 'insertimage') {
  url = prompt('Enter the link here: ','http:\/\/'); document.execCommand($(this).data('command'), false, url);
  }
  else document.execCommand($(this).data('command'), false, null);
});

</script>

@endsection