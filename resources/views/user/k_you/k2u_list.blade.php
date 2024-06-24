@extends('layouts.user')
@section('title', 'Kunnec To You')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/masonry.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/K2u_list.css') }}" rel="stylesheet"></link>

@endsection
@section('content')

<div class="card">
    <div class="card-header1">
        <div class="row">
            <div class="col-sm mt-2">
                <p>
                    <a href="{{ url('k_you/k2u') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec to You</a>
                     |&nbsp;               
                    <a href="{{ url('k_you/k2u_settings') }}" style="font-size:20px; color: #ffffff;">
                        <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;"></i> 
                    </a>&nbsp;   
                </p>
            </div>
  
            <div class="col-sm d-flex flex-row-reverse">
                <p>
                    <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                    </button>
                </p>
            </div>
        </div>
        <div class="collapse" id="collapseSort1">
            <div class="row p-3">
                <div class="col">
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Search Skilled Kunnec's" aria-label="Search">
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
                                            <option>Accountant</option>
                                            <option>Account Collector</option>
                                            <option>Account Executive</option>
                                            <option>Account Manager</option>
                                            <option>Accounts Payable/Receivable Clerk</option>
                                            <option>Account Representative</option>
                                            <option>Accounting Analyst</option>
                                            <option>Accounting Director</option>
                                            <option>Accounting Staff</option>
                                            <option>Actor</option>
                                            <option>Actress</option>
                                            <option>Actuary</option>
                                            <option>Entrepreneur</option>
                                            <option>Addiction Counselor</option>
                                            <option>Administrative Analyst</option>
                                            <option>Administrative Assistant</option>
                                            <option>Administrative Manager</option>
                                            <option>Administrative Specialist</option>
                                            <option>Administrator</option>
                                            <option>Animal Breeder</option>
                                            <option>Animal Control Officer</option>
                                            <option>Animal Shelter Board Member</option>
                                            <option>Animal Shelter Manager</option>
                                            <option>Animal Shelter Worker</option>
                                            <option>Animal Trainer</option>
                                            <option>Animal Shelter Volunteer</option>
                                            <option>Application Developer</option>
                                            <option>Architect</option>
                                            <option>Archivist</option>
                                            <option>Area Sales Manager</option>
                                            <option>Artificial Intelligence Engineer</option>
                                            <option>Artist</option>
                                            <option>Assistant Engineer</option>
                                            <option>Assistant Golf Professional</option>
                                            <option>Assistant Manager</option>
                                            <option>Assistant Professor</option>
                                            <option>Astronomer</option>
                                            <option>Atmospheric Scientist</option>
                                            <option>Attorney</option>
                                            <option>Auditor</option>
                                            <option>Auditing Clerk</option>
                                            <option>B2B Sales Specialist</option>
                                            <option>Bank Teller</option>
                                            <option>Barber</option>
                                            <option>Barista</option>
                                            <option>Beautician</option>
                                            <option>Bellhop</option>
                                            <option>Benefits Manager</option>
                                            <option>Biologist</option>
                                            <option>Biological Engineer</option>
                                            <option>Biostatistician</option>
                                            <option>Board of Director</option>
                                            <option>Boilermaker</option>
                                            <option>Bookkeeper</option>
                                            <option>Branch Manager</option>
                                            <option>Brand Manager</option>
                                            <option>Budget Analyst</option>
                                            <option>Building Inspector</option>
                                            <option>Bus Driver</option>
                                            <option>Business Analyst</option>
                                            <option>Business Manager</option>
                                            <option>Cab Driver</option>
                                            <option>Cafeteria Worker</option>
                                            <option>Call Center Representative</option>
                                            <option>Camera Operator</option>
                                            <option>Car Dealer</option>
                                            <option>Caregiver</option>
                                            <option>Caretaker or House Sitter</option>
                                            <option>Carpenter</option>
                                            <option>Cashier</option>
                                            <option>Casino Host</option>
                                            <option>CEO</option>
                                            <option>Chain Executive</option>
                                            <option>Chemist</option>
                                            <option>Chemical Engineer</option>
                                            <option>Chef</option>
                                            <option>Chief</option>
                                            <option>Chief Engineer</option>
                                            <option>Chief Executive Officer</option>
                                            <option>Chief Information Officer (CIO)</option>
                                            <option>Chief People Officer</option>
                                            <option>Chief Robot Whisperer</option>
                                            <option>Chief Technology Officer (CTO)</option>
                                            <option>Choreographer</option>
                                            <option>Church Volunteer</option>
                                            <option>Civil Engineer</option>
                                            <option>C-Level or C-Suite.</option>
                                            <option>Client Service Specialist</option>
                                            <option>Cloud Architect</option>
                                            <option>CNA</option>
                                            <option>Commercial Loan Officer</option>
                                            <option>Communications Director</option>
                                            <option>Community Food Project Worker</option>
                                            <option>Community Volunteer Jobs</option>
                                            <option>Computer Animator</option>
                                            <option>Computer Programmer</option>
                                            <option>Computer Scientist</option>
                                            <option>Concierge</option>
                                            <option>Conservation Scientist</option>
                                            <option>Conservation Volunteer</option>
                                            <option>Construction Worker</option>
                                            <option>Content Creator</option>
                                            <option>Content Marketing Manager</option>
                                            <option>Content Strategist</option>
                                            <option>Continuous Improvement Consultant</option>
                                            <option>Continuous Improvement Lead</option>
                                            <option>Controller</option>
                                            <option>Coordinator</option>
                                            <option>Copywriter</option>
                                            <option>Copy Editor</option>
                                            <option>Cosmetologist</option>
                                            <option>Counselor</option>
                                            <option>Couples Counselor</option>
                                            <option>Courier</option>
                                            <option>Crane Operator</option>
                                            <option>Credit Authorizer</option>
                                            <option>Credit Counselor</option>
                                            <option>Cruise Director</option>
                                            <option>Cruise Ship Attendant</option>
                                            <option>Culture Operations Manager</option>
                                            <option>Customer Care Associate</option>
                                            <option>Customer Service</option>
                                            <option>Customer Service Manager</option>
                                            <option>Customer Support</option>
                                            <option>Data Analyst</option>
                                            <option>Data Entry </option>
                                            <option>Delivery Driver</option>
                                            <option>Dental Hygienist</option>
                                            <option>Dentist</option>
                                            <option>DevOps Engineer</option>
                                            <option>Digital Marketing Manager</option>
                                            <option>Direct Salesperson</option>
                                            <option>Director</option>
                                            <option>Director of Ethical Hacking</option>
                                            <option>Director of First Impressions</option>
                                            <option>Director of Inside Sales</option>
                                            <option>Director of Maintenance</option>
                                            <option>Director of Photography</option>
                                            <option>Dispatcher for Trucks or Taxis</option>
                                            <option>Divorce Attorney</option>
                                            <option>Divorce Lawyer</option>
                                            <option>Doctor</option>
                                            <option>Dog Walker / Pet Sitter</option>
                                            <option>Drafter</option>
                                            <option>eCommerce Marketing Specialist</option>
                                            <option>Economist</option>
                                            <option>Editor/Proofreader</option>
                                            <option>Electrical Engineer</option>
                                            <option>Electrician</option>
                                            <option>Emergency Relief Worker</option>
                                            <option>Engineering Technician</option>
                                            <option>Entertainment Specialist</option>
                                            <option>Event Planner</option>
                                            <option>Events Manager</option>
                                            <option>Executive</option>
                                            <option>Executive Assistant</option>
                                            <option>Farm Worker</option>
                                            <option>Fast Food Worker</option>
                                            <option>File Clerk</option>
                                            <option>Film Critic</option>
                                            <option>Finance Director</option>
                                            <option>Finance Manager</option>
                                            <option>Financial Analyst</option>
                                            <option>Financial Planner</option>
                                            <option>Financial Services Representative</option>
                                            <option>Flight Attendant</option>
                                            <option>Foreman</option>
                                            <option>Food Kitchen Worker</option>
                                            <option>Founder</option>
                                            <option>Front Desk Associate</option>
                                            <option>Front Desk Manager</option>
                                            <option>Front-Line Employees</option>
                                            <option>Funeral Attendant</option>
                                            <option>Geological Engineer</option>
                                            <option>Geologist</option>
                                            <option>Ghostwriter</option>
                                            <option>Grant Writer</option>
                                            <option>Graphic Designer</option>
                                            <option>Group Sales</option>
                                            <option>Guidance Counselor</option>
                                            <option>Habitat for Humanity Builder</option>
                                            <option>Handyman</option>
                                            <option>Head</option>
                                            <option>Heavy Equipment Operator</option>
                                            <option>Help Desk</option>
                                            <option>Help Desk Worker/Desktop Support</option>
                                            <option>Homeless Shelter Worker</option>
                                            <option>Hospital Volunteer</option>
                                            <option>Hotel Front Door Greeter</option>
                                            <option>Hotel Manager</option>
                                            <option>Hotel Receptionist</option>
                                            <option>Housekeeper</option>
                                            <option>Human Resources</option>
                                            <option>HVAC Technician</option>
                                            <option>Image Consultant</option>
                                            <option>Information Security Analyst</option>
                                            <option>Investor</option>
                                            <option>Interior Designer</option>
                                            <option>Interpreter</option>
                                            <option>Iron Worker</option>
                                            <option>IT Manager</option>
                                            <option>IT Professional</option>
                                            <option>Journalist</option>
                                            <option>Landscaping Assistant</option>
                                            <option>Landscaping Worker</option>
                                            <option>Lawyer</option>
                                            <option>Lead</option>
                                            <option>Library Assistant</option>
                                            <option>Life Coach</option>
                                            <option>Line Cook</option>
                                            <option>Locksmith</option>
                                            <option>Lodging Manager</option>
                                            <option>Machinery Operator</option>
                                            <option>Mail Carrier</option>
                                            <option>Maintenance Engineer</option>
                                            <option>Makeup Artist</option>
                                            <option>Manager</option>
                                            <option>Management Consultant</option>
                                            <option>Managing Member</option>
                                            <option>Managing Partner</option>
                                            <option>Manicurist</option>
                                            <option>Manufacturing Assembler</option>
                                            <option>Market Development Manager</option>
                                            <option>Market Researcher</option>
                                            <option>Marketing Communications Manager</option>
                                            <option>Marketing Consultant</option>
                                            <option>Marketing Director</option>
                                            <option>Marketing Manager</option>
                                            <option>Marketing Research Analyst</option>
                                            <option>Marketing Specialist</option>
                                            <option>Marketing Staff</option>
                                            <option>Massage Therapy</option>
                                            <option>Mathematician</option>
                                            <option>Meals on Wheels Driver</option>
                                            <option>Mechanic</option>
                                            <option>Mechanical Engineer</option>
                                            <option>Meeting Planner</option>
                                            <option>Media Buyer</option>
                                            <option>Media Relations Coordinator</option>
                                            <option>Medical Administrator</option>
                                            <option>Medical Laboratory Tech</option>
                                            <option>Medical Researcher</option>
                                            <option>Medical Transcriptionist</option>
                                            <option>Mental Health Counselor</option>
                                            <option>Mentor</option>
                                            <option>Merchandising Associate</option>
                                            </option>
                                            <option>Mining Engineer</option>
                                            <option>Music Engineer</option>
                                            <option>Music Producer</option>
                                            <option>Molecular Scientist</option>
                                            <option>Mortgage Loan Processor</option>
                                            <option>Motion Picture Director</option>
                                            <option>Mover</option>
                                            <option>Musician</option>
                                            <option>Nail Technician</option>
                                            <option>Network Administrator</option>
                                            <option>Novelist/Writer</option>
                                            <option>Nuclear Engineer</option>
                                            <option>Nurse</option>
                                            <option>Officer</option>
                                            <option>Office Assistant</option>
                                            <option>Office Clerk</option>
                                            <option>Office Manager</option>
                                            <option>Office Volunteer</option>
                                            <option>Online ESL Instructor</option>
                                            <option>Operations Analyst</option>
                                            <option>Operations Assistant</option>
                                            <option>Operations Coordinator</option>
                                            <option>Operations Director</option>
                                            <option>Operations Manager</option>
                                            <option>Operations Professional</option>
                                            <option>Orderly</option>
                                            <option>Organizer</option>
                                            <option>Outside Sales Manager</option>
                                            <option>Overseer</option>
                                            <option>Owner</option>
                                            <option>Painter</option>
                                            <option>Paralegal</option>
                                            <option>Parking Attendant</option>
                                            <option>Payroll Clerk</option>
                                            <option>Payroll Manager</option>
                                            <option>Personal Assistant</option>
                                            <option>Personal Trainer</option>
                                            <option>Petroleum Engineer</option>
                                            <option>Pharmacist</option>
                                            <option>Pharmacy Assistant</option>
                                            <option>Phlebotomist</option>
                                            <option>Phone Sales Specialist</option>
                                            <option>Phone Survey Conductor</option>
                                            <option>Photographer</option>
                                            <option>Physical Therapist</option>
                                            <option>Physical Therapy Assistant</option>
                                            <option>Physical Trainer</option>
                                            <option>Proposal Writer</option>
                                            <option>Physicist</option>
                                            <option>Pipefitter</option>
                                            <option>Plant Engineer</option>
                                            <option>Playwright</option>
                                            <option>Plumber</option>
                                            <option>Porter</option>
                                            <option>Police Officer</option>
                                            <option>Political Scientist</option>
                                            <option>Preschool Teacher</option>
                                            <option>President</option>
                                            <option>Principal</option>
                                            <option>Producer</option>
                                            <option>Product Manager</option>
                                            <option>Production Engineer</option>
                                            <option>Professor</option>
                                            <option>Program Administrator</option>
                                            <option>Program Manager</option>
                                            <option>Proprietor</option>
                                            <option>Publicist</option>
                                            <option>Public Relations</option>
                                            <option>Public Relations Specialist</option>
                                            <option>Purchasing Staff</option>
                                            <option>Quality Assurance Technician</option>
                                            <option>Quality Control</option>
                                            <option>Quality Control Coordinator</option>
                                            <option>Quality Engineer</option>
                                            <option>Rapper</option>
                                            <option>Realtor</option>
                                            <option>Receptionist</option>
                                            <option>Recruiter</option>
                                            <option>Recyclables Collector</option>
                                            <option>Red Cross Volunteer</option>
                                            <option>Researcher</option>
                                            <option>Research Assistant</option>
                                            <option>Reservationist</option>
                                            <option>Restaurant Manager</option>
                                            <option>Retail Worker</option>
                                            <option>Risk Manager</option>
                                            <option>Roofer</option>
                                            <option>Safety Engineer</option>
                                            <option>Sales Engineer</option>
                                            <option>Sales Analyst</option>
                                            <option>Sales Associate</option>
                                            <option>Sales Engineer</option>
                                            <option>Sales Manager</option>
                                            <option>Sales Representative</option>
                                            <option>Salon Manager</option>
                                            <option>School Bus Driver</option>
                                            <option>School Counselor</option>
                                            <option>School Volunteer</option>
                                            <option>Screenwriter</option>
                                            <option>Scrum Master</option>
                                            <option>Secretary</option>
                                            <option>Security Guard</option>
                                            <option>SEO Manager</option>
                                            <option>Server</option>
                                            <option>Service Dog Trainer</option>
                                            <option>Shareholders</option>
                                            <option>Sheet Metal Worker</option>
                                            <option>Shelf Stocker</option>
                                            <option>Shipping and Receiving Staff</option>
                                            <option>Singer</option>
                                            <option>Skin Care Specialist</option>
                                            <option>Speechwriter</option>
                                            <option>Social Media Assistant</option>
                                            <option>Social Media Specialist</option>
                                            <option>Social Worker</option>
                                            <option>Software Engineer</option>
                                            <option>Software Ninjaneer</option>
                                            <option>Solar Photovoltaic Installer</option>
                                            <option>Sound Engineer</option>
                                            <option>Spa Manager</option>
                                            <option>Speech Pathologist</option>
                                            <option>Sports Volunteer</option>
                                            <option>SQL Developer</option>
                                            <option>Store Manager</option>
                                            <option>Strategist</option>
                                            <option>Substitute Teacher</option>
                                            <option>Suicide Hotline Volunteer</option>
                                            <option>Superintendent</option>
                                            <option>Supervisor</option>
                                            <option>Taper</option>
                                            <option>Teacher</option>
                                            <option>Teaching Assistant</option>
                                            <option>Team Leader</option>
                                            <option>Technical Specialist</option>
                                            <option>Technical Support Specialist</option>
                                            <option>Technical Writer</option>
                                            <option>Telemarketer</option>
                                            <option>Telephone Operator</option>
                                            <option>Therapist</option>
                                            <option>Title Analyst</option>
                                            <option>Title Researcher</option>
                                            <option>Tow Truck Operator</option>
                                            <option>Translator</option>
                                            <option>Travel Agent</option>
                                            <option>Travel Nurse</option>
                                            <option>Travel Writer</option>
                                            <option>Truck Driver</option>
                                            <option>Tutor/Online Tutor</option>
                                            <option>UPS Driver</option>
                                            <option>UX Designer & UI Developer</option>
                                            <option>Valet</option>
                                            <option>Veterinary Assistant</option>
                                            <option>Vehicle or Equipment Cleaner</option>
                                            <option>Vice President of Marketing</option>
                                            <option>Vice President of Operations</option>
                                            <option>Video Editor</option>
                                            <option>Video Game Writer</option>
                                            <option>Video or Film Producer</option>
                                            <option>Virtual Assistant</option>
                                            <option>Wait Staff Manager</option>
                                            <option>Waiter/Waitress</option>
                                            <option>Warehouse Worker</option>
                                            <option>Web Designer</option>
                                            <option>Web Developer</option>
                                            <option>Wedding Coordinator</option>
                                            <option>Welder</option>
                                            <option>Welding</option>
                                            <option>Well Driller</option>
                                            <option>Women’s Shelter Jobs</option>
                                            <option>Yoga Instructor</option>
                                            <option>Youth Volunteer</option>
                                            <option>Zoologist</option>
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
                                <a href="{{ url('k_you/k2u_list') }}">Filter</a>
                            </button>
				        </div>
				    </div>
			    </div>
            </div>
	    </div>
    </div>
</div>
</div>

<div class="row mb-2">
    <div class="col">
			<div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-auto mb-2 mb-sm-0">
                        <h6 class="mb-0">Showing 205 of Attorneys</h6>
                    </div>
                    <div class="col-sm-auto">
                        <form class="d-inline-block mr-3">
                            <div class="input-group input-group-sm d-flex align-items-center"><small class="mr-1">Sort by: </small>
                                <select class="custom-select" aria-label="Bulk actions">
                                    <option selected="">Newest</option>
						            <option value="Refund">Oldest</option>
						            <option value="Refund">Highest Rated</option>
						            <option value="Refund">Lowest Rated</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<hr class="style12">	
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            <hr class="style12">
            <div class="col-12 p-2">
                <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/25.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
            	    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/22.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/sabrina.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/9.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/14.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/21.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/4.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/23.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/11.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/16.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
                    <!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/4.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search --><!-- Start of K2u Search -->
                <div class="p-1">
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ asset('public/user-dash/K_2You/images/profiles/8.jpg')}}" width="250" alt="Card image cap" >
                                <div class="overlay">
                                    <h2>
                                        <p class="card-text d-inline" style="font-size:.9rem;">
                                        <small class="text-white">{{Auth::user()->username}} </small>
                                        </p>
                                    </h2>
                                    <a class="info" href="{{ url('k_you/k2u_profile') }}">
                                        <button type="button" class="btn1 btn-kunnec">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <h5>{{Auth::user()->username}} - Calder B Gabroy</h5>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p  style="font-size: 14px;">Attorney</p>
                                    <p style="font-size: 12px;">Las Vegas, NV</p>
                                        <p style="font-size: 12px;">(702) 688-7563</p>
                                </div>
                                <div class="col-sm-9">
                                    Jonathan is a managing partner of Clear Counsel Law Group. Since opening their law firm in 2011, Jonathan Barlow and his partners have developed one of the fastest growing firms in all of the Las Vegas Valley. Jonathan... 
                                </div>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 p-1">
                            <div class="row">
                                <a href="{{ url('k_you/k2u_profile') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn1 btn-outline-danger">
                                        <i class="fas fa-heart fa-2x" data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                </a>
                                <a href="{{ url('messages/message_you') }}">
                                    <button type="button" class="btn1 btn-outline-success">
                                        <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                    </button>
                                </a>
                            </div>
                            <hr class="style12">
                            <div class="row">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="style12">
                    <!-- End of K2u Search -->
				<div class="card-footer">
				
                <div>
                    <button class="btn mr-1 mb-1" type="button" style="color:#009900;">
                        <span class="fas fa-plus mr-1" data-fa-transform="shrink-3"></span>Load More
                    </button> 
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