@extends('layouts.user')
 @section('title', 'Shop Checkout')
@section('additional-css')

<style>

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

</style>

@endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p><a href="{{ url('k_shop/shop') }}" style="color: #FFFFFF"><img src="{{ asset('images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Shop</a>|&nbsp;
            <a href="{{ url('k_shop/shop_cart') }}" style="font-size:20px; color: #ffffff;">
                  <i class="fas fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Notifications" style="color: #FFFFFF;"></i> 
                  <span1 class="badge badge-danger"> 15</span1>
                  </a>
                  &nbsp;
                  <a href="{{ url('k_shop/shop_wlist') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-heart" data-toggle="tooltip" data-placement="bottom" title="Notifications" style="color: #FFFFFF;"></i> 
                  <span1 class="badge badge-danger"> 15</span1>
                </a>
                  &nbsp;&nbsp;&nbsp; 
                  </p>
        </div>
      
        <div class="col-sm d-flex flex-row-reverse">
            <p><button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span></button></p>
        </div>
    </div>
	<div class="collapse" id="collapseSort1">
	    <div class="row p-3">
	        <div class="col">
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control" type="text" placeholder="Search Shop" aria-label="Search">
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
				        <div class="col-sm-4">

                            <div class="form-group">
                                <select class="form-control" name="categories" id="FormControl Categories">
                                    <option selected>Select a Category</option>
                                    <optgroup label="TV">
                                        <option value="Flat Screen">Flat Screen</option>
                                        <option value="Smart Tv">Smart TV</option>
                                        <option value="DVD">DVD</option>
                                        <option value="Accessories">Accessories</option>
                                        <option value="Blue Tooth Suround">Blue Tooth Surround </option>
                                    </optgroup>
                                    <optgroup label="Computers">
                                        <option value="laptops">Laptops</option>
                                        <option value="chromebooks">Chromebooks</option>
                                        <option value="apple">Apple</option>
                                        <option value="ipad">I Pad</option>
                                        <option value="tablets">Tablets</option>
                                        <option value="desktops">Desktops</option>
                                        <option value="printers">Printers</option>
                                        <option value="monitors">Monitors</option>
                                        <option value="network">Network</option>
                                        <option value="software">Software</option>
                                        <option value="speakers">Speakers</option>
                                        <option value="microphone">Microphone</option>
                                        <option value="camera">Camera</option>
                                    </optgroup>
                                    <optgroup label="Phones">
                                        <option value="unlocked phones">Unlocked Phones</option>
                                        <option value="refurbished">Refurbished</option>
                                        <option value="phone cases">Phone Cases</option>
                                        <option value="iphones">I-Phones</option>
                                        <option value="galaxy">Galaxy</option>
                                        <option value="android">Android</option>
                                    </optgroup>
                                    <optgroup label="Fashion Tech">
                                        <option value="iphone watch">I Phone Watch</option>
                                        <option value="blue tooth headphones">Blue Tooth Headphones</option>
                                        <option value="mp3 players">MP3 Players</option>
                                    </optgroup>
                                    <optgroup label="Mens Clothes">
                                        <option value="pants">Pants</option>
                                        <option value="shirts">Shirts</option>
                                        <option value="jacket">Jackets</option>
                                        <option value="coats">Coats</option>
                                        <option value="sneakers">Sneakers</option>
                                        <option value="ties">Ties</option>
                                        <option value="bags">Bags</option>
                                        <option value="suits">Suits</option>
                                        <option value="wallets">Wallets</option>
                                        <option value="belts">Belts</option>
                                        <option value="watches">Watches</option>
                                        <option value="hats">Hats</option>
                                        <option value="casual shoes">Casual Shoes</option>
                                        <option value="dress shoes">Dress Shoes</option>
                                        <option value="hoodies">Hoodies</option>
                                        <option value="shorts">Shorts</option>
                                        <option value="tshirts">T-Shirts</option>
                                        <option value="socks">Socks</option>
                                        <option value="jogging pants">Jogging Pants</option>
                                        <option value="sun glasses">Sun Glasses</option>
                                        <option value="cologne">Cologne</option>
                                    </optgroup>
                                
                                    <optgroup label="Boys Clothes">
                                        <option value="pants">Pants</option>
                                        <option value="shirts">Shirts</option>
                                        <option value="jacket">Jackets</option>
                                        <option value="coats">Coats</option>
                                        <option value="sneakers">Sneakers</option>
                                        <option value="ties">Ties</option>
                                        <option value="bags">Bags</option>
                                        <option value="suits">Suits</option>
                                        <option value="wallets">Wallets</option>
                                        <option value="belts">Belts</option>
                                        <option value="watches">Watches</option>
                                        <option value="hats">Hats</option>
                                        <option value="casual shoes">Casual Shoes</option>
                                        <option value="dress shoes">Dress Shoes</option>
                                        <option value="hoodies">Hoodies</option>
                                        <option value="shorts">Shorts</option>
                                        <option value="tshirts">T-Shirts</option>
                                        <option value="socks">Socks</option>
                                        <option value="jogging pants">Jogging Pants</option>
                                        <option value="sun glasses">Sun Glasses</option>
                                        <option value="cologne">Cologne</option>
                                    </optgroup>
                              
                                    <optgroup label="Womens Clothes">
                                        <option value="pants">Pants</option>
                                        <option value="skirts">Skirts</option>
                                        <option value="blouses">Blouses</option>
                                        <option value="tops">Tops</option>
                                        <option value="dresses">Dresses</option>
                                        <option value="skirts">Skirts</option>
                                        <option value="jumpers">Jumpers</option>
                                        <option value="tops">Tops</option>
                                        <option value="tanks">Tanks</option>
                                        <option value="lingerie">Lingerie</option>
                                        <option value="leggings">Leggings</option>
                                        <option value="rompers">Rompers</option>
                                        <option value="jacket">Jackets</option>
                                        <option value="coats">Coats</option>
                                        <option value="sneakers">Sneakers</option>
                                        <option value="sandals">Sandals</option>
                                        <option value="bags">Bags</option>
                                        <option value="suits">Suits</option>
                                        <option value="wallets">Wallets</option>
                                        <option value="belts">Belts</option>
                                        <option value="watches">Watches</option>
                                        <option value="hats">Hats</option>
                                        <option value="casual shoes">Casual Shoes</option>
                                        <option value="heels">Heels</option>
                                        <option value="hoodies">Hoodies</option>
                                        <option value="shorts">Shorts</option>
                                        <option value="tshirts">T-Shirts</option>
                                        <option value="socks">Socks</option>
                                        <option value="jogging pants">Jogging Pants</option>
                                        <option value="sun glasses">Sun Glasses</option>
                                        <option value="perfume">Perfume</option>
                                    </optgroup>

                                    <optgroup label="Girl Clothes">
                                        <option value="pants">Pants</option>
                                        <option value="skirts">Skirts</option>
                                        <option value="blouses">Blouses</option>
                                        <option value="tops">Tops</option>
                                        <option value="dresses">Dresses</option>
                                        <option value="skirts">Skirts</option>
                                        <option value="jumpers">Jumpers</option>
                                        <option value="tops">Tops</option>
                                        <option value="tanks">Tanks</option>
                                        <option value="lingerie">Lingerie</option>
                                        <option value="leggings">Leggings</option>
                                        <option value="rompers">Rompers</option>
                                        <option value="jacket">Jackets</option>
                                        <option value="coats">Coats</option>
                                        <option value="sneakers">Sneakers</option>
                                        <option value="sandals">Sandals</option>
                                        <option value="bags">Bags</option>
                                        <option value="suits">Suits</option>
                                        <option value="wallets">Wallets</option>
                                        <option value="belts">Belts</option>
                                        <option value="watches">Watches</option>
                                        <option value="hats">Hats</option>
                                        <option value="casual shoes">Casual Shoes</option>
                                        <option value="heels">Heels</option>
                                        <option value="hoodies">Hoodies</option>
                                        <option value="shorts">Shorts</option>
                                        <option value="tshirts">T-Shirts</option>
                                        <option value="socks">Socks</option>
                                        <option value="jogging pants">Jogging Pants</option>
                                        <option value="sun glasses">Sun Glasses</option>
                                        <option value="perfume">Perfume</option>
                                    </optgroup>

                                    <optgroup label="Guitars">
                                        <option value="e-guitar">E Guitar</option>
                                        <option value="e-guitar-l">E Guitar ( LH )</option>
                                        <option value="a-guitar">A guitar</option>
                                        <option value="a-guitar-12">A Guitar 12 string</option>
                                        <option value="a-guitar-6">A Guitar 6 strings</option>
                                        <option value="a-guitar-l">A Guitar ( LH )</option>
                                        <option value="e-bass-4">E Bass Guitar 4 String</option>
                                        <option value="e-bass-6">E Bass 6 String</option>
                                        <option value="e-bass-l">E Bass ( LH )</option>
                                        <option value="banjos">Banjos</option>
                                        <option value="latin guitar">Latin Guitar</option>
                                        <option value="mandolin">Mandolin</option>
                                        <option value="picks">Picks</option>
                                    </optgroup>

                                    <optgroup label="Amps">
                                        <option value="guitar amp">Guitar Amp</option>
                                        <option value="speaker amp">Speaker Amp</option>
                                        <option value="drum amp">Drum Amp</option>
                                        <option value="headphone amp">Headphone Amp</option>
                                        <option value="keyboard amp">Keyboard Amp</option>
                                        <option value="mic preamp">Mic PreAmp</option>
                                        <option value="footswitch amp">Footswitch Amp</option>
                                        <option value="amp stands">Amp Stands</option>
                                        <option value="amp cover-cases">Amp Cover / Cases</option>
                                        <option value="banjos">Banjos</option>
                                        <option value="latin guitar">Latin Guitar</option>
                                        <option value="mandolin">Mandolin</option>
                                        <option value="picks">Picks</option>
                                    </optgroup>

                                    <optgroup label="Drums">
                                        <option value="snare Drum">Snare Drum</option>
                                        <option value="toms">Toms</option>
                                        <option value="bass Drum">Bass Drum</option>
                                        <option value="headphone amp">Headphone Amp</option>
                                        <option value="keyboard amp">Keyboard Amp</option>
                                        <option value="mic preamp">Mic PreAmp</option>
                                        <option value="footswitch amp">Footswitch Amp</option>
                                        <option value="amp stands">Amp Stands</option>
                                        <option value="amp cover-cases">Amp Cover / Cases</option>
                                        <option value="banjos">Banjos</option>
                                        <option value="latin guitar">Latin Guitar</option>
                                        <option value="mandolin">Mandolin</option>
                                        <option value="picks">Picks</option>
                                    </optgroup>

                                    <optgroup label="Amps">
                                        <option value="guitar amp">Guitar Amp</option>
                                        <option value="speaker amp">Speaker Amp</option>
                                        <option value="drum amp">Drum Amp</option>
                                        <option value="sticks">Sticks</option>
                                        <option value="stands">Stands</option>
                                        <option value="racks">Racks</option>
                                        <option value="cymbals">Cymbals</option>
                                        <option value="amp stands">Pedals</option>
                                    </optgroup>

                                    <optgroup label="Brass">
                                        <option value="trumpets">Trumpets</option>
                                        <option value="trombone">Trombone</option>
                                        <option value="french horn">French Horn</option>
                                        <option value="sax">Sax</option>
                                        <option value="clarinet">Clarinets</option>
                                        <option value="flute">Flute</option></option>
                                        <option value="cello">Cello</option>
                                        <option value="violin">Violin</option>
                                    </optgroup>

                                    <optgroup label="Keys">
                                        <option value="workstations">Workstations</option>
                                        <option value="organs">Organs</option>
                                        <option value="synthesizers">Synthesizers</option>
                                        <option value="piano">Piano</option>
                                        <option value="keyboards">Keyboards</option>
                                        <option value="keyboard stands">Keyboard Stands</option>
                                        <option value="piano seat">Piano Seats</option>
                                        <option value="pedals">Pedals</option>
                                        <option value="stands & racks">Stands & Racks</option>
                                    </optgroup>

                                    <optgroup label="Live Sounds">
                                        <option value="pa sounds">PA Sounds</option>
                                        <option value="pa speakers">Pa Speakers</option>
                                        <option value="subwoofers">Subwoofers</option>
                                        <option value="monitors">Monitors</option>
                                        <option value="power amps">Power Amps</option>
                                        <option value="stage lights">Stage Lights</option>
                                        <option value="stands & racks">Stands & Racks</option>
                                        <option value="pedals">Pedals</option>
                                        <option value="caes-covers-bags">Cases, Covers & Bags</option>
                                    </optgroup>

                                    <optgroup label="Mixers">
                                        <option value="turntables">Turntables</option>
                                        <option value="digital mixers">Digital Mixers</option>
                                        <option value="analog mixers">Analog Mixers</option>
                                    </optgroup>

                                    <optgroup label="Recording">
                                        <option value="daw">DAW</option>
                                        <option value="audio recorders">Audio Recorders</option>
                                        <option value="screen monitors">Screen Monitors</option>
                                        <option value="audio interfaces">Audio Interfaces</option>
                                        <option value="signal processors">Signal Processors</option>
                                        <option value="condenser mic">Condenser Mic</option>
                                        <option value="dynamic mic">Dynamic Mic</option>
                                        <option value="headphones">Headphones</option>
                                        <option value="mic stands">Mic Stands</option>
                                        <option value="samplers">Samplers</option>
                                        <option value="vocal pitch">Vocal Pitch Proceesors</option>
                                        <option value="acoustic absorb panels">Acoutic Absorb Panels</option>
                                        <option value="acoustic reducer panels">Acoustic Reducer Panels</option>
                                        <option value="power amps">Power Amps</option>
                                        <option value="stage lights">Stage Lights</option>
                                        <option value="stands & racks">Stands & Racks</option>
                                        <option value="pedals">Pedals</option>
                                        <option value="caes-covers-bags">Cases, Covers & Bags</option>
                                    </optgroup>

                                    <optgroup label="Bedroom">
                                        <option value="mattress">Mattress</option>
                                        <option value="dressor">Dressor</option>
                                        <option value="night standss">Night Stands</option>
                                        <option value="headboards">Headboards</option>
                                        <option value="vanities">Vanities</option>
                                        <option value="bunk beds">Bunk Beds</option>
                                        <option value="pillows">Pillows</option>
                                        <option value="mirrors">Mirrors</option>
                                    </optgroup>

                                    <optgroup label="Pictures">
                                        <option value="frames">Frames</option>
                                        <option value="canvas pictures">Canvas Pictures</option>
                                        <option value="nature images">Nature Images</option>
                                        <option value="inspirational images">Inspirational Images</option>
                                        <option value="culture images">Culture Images</option>
                                        <option value="city images">City Images</option>
                                        <option value="funny images">Funny Images</option>
                                        <option value="paintings">Paintings</option>
                                    </optgroup>

                                    <optgroup label="Living Room">
                                        <option value="sofa">Sofa</option>
                                        <option value="sectionals">Sectionals</option>
                                        <option value="accent chairs">Accent Chairs</option>
                                        <option value="entryway tables">Entryway Tables</option>
                                        <option value="Love Seats">Love Seats</option>
                                        <option value="rugs">Rugs</option>
                                        <option value="recliners">Recliners</option>
                                        <option value="ottomans">Ottomans</option>
                                        <option value="throw pillows">Throw Pillows</option>
                                        <option value="chaise lounges">Chaise Lounges</option>
                                        <option value="coffee tables">Coffee Tables</option>
                                        <option value="end tables">End Tables</option>
                                        <option value="console tables">Console Tables</option>
                                        <option value="book cases">Book Cases</option>
                                    </optgroup>

                                    <optgroup label="Clocks">
                                        <option value="digital">Digital</option>
                                        <option value="small clocks">Small Clocks</option>
                                        <option value="large clocks">Large Clocks</option>
                                        <option value="godfather clocks">Grandfather Clocks</option>
                                    </optgroup>

                                    <optgroup label="Dining Room">
                                        <option value="tables">Tables</option>
                                        <option value="chairs">Chairs</option>
                                        <option value="bar stools">Bar Stools</option>
                                        <option value="serving carts">Serving Carts</option>
                                        <option value="bars">Bars</option>
                                        <option value="cabinets">Cabinets</option>
                                        <option value="folding chairs">Folding Chairs</option>
                                        <option value="dining trays">Dining Trays</option>
                                        <option value="wine racks">Wine Racks</option>
                                        <option value="kitchen island">Kitchen Island</option>
                                        <option value="pantries">Pantries</option>
                                        <option value="china cabinets">China Cabinets</option>
                                        <option value="pub tables">Pub Tables</option>
                                    </optgroup>

                                    <optgroup label="Entertainment">
                                        <option value="tv stands">TV Stands</option>
                                        <option value="entertainment centers">Entertainment Center</option>
                                        <option value="fireplace stands">Fireplace Stands</option>
                                        <option value="speaker stands">Speaker Stands</option>
                                        <option value="Pool Tables">Pool Tables</option>
                                    </optgroup>

                                    <optgroup label="Office">
                                        <option value="desks">Desks</option>
                                        <option value="chairs">Chairs</option>
                                        <option value="bookcases">Bookcases</option>
                                        <option value="file cabinets">File Cabinets</option>
                                        <option value="Chair Mats">Chair Mats</option>
                                    </optgroup>

                                    <optgroup label="Outdoor">
                                        <option value="charcoal grill">Chargoal Grill</option>
                                        <option value="electric grill">Electric Grill</option>
                                        <option value="rugs">Rugs</option>
                                        <option value="ceiling fans">Ceiling Fans</option>
                                        <option value="fans">Fans</option>
                                        <option value="patio table">Patio Table</option>
                                        <option value="patio chairs">Patio Chairs</option>
                                        <option value="outside tables">Outside Tables</option>
                                        <option value="patio swing">Patio Swing</option>
                                        <option value="hammock">Hammock</option>
                                        <option value="heaters">Heaters</option>
                                        <option value="stoves">Stoves</option>
                                        <option value="refridgerators">Refridgerators</option>
                                        <option value="dishwashers">Dishwashers</option>
                                        <option value="water heaters">Water Heaters</option>
                                        <option value="air purifiers">Air Purifiers</option>
                                        <option value="air humidifiers">Air Humidifiers</option>
                                    </optgroup>

                                    <optgroup label="Game Consoles">
                                        <option value="x-box">X-Box</option>
                                        <option value="playstation">Playstation</option>
                                        <option value="nintendo">Nintendo</option>
                                        <option value="audio interfaces">Virtual Reality</option>
                                    </optgroup>

                                    <optgroup label="Excercise">
                                        <option value="elipticals"> Elipticals</option></option>
                                        <option value="treadmills">Treadmills</option>
                                        <option value="excercise bikes">Excercise Bikes</option>
                                        <option value="steppers">Steppers</option>
                                        <option value="boxing gloves">Boxing Gloves</option>
                                        <option value="mma gloves">MMA Gloves</option>
                                        <option value="hand wraps">Hand Wraps</option>
                                        <option value="speedbag">Speedbag</option>
                                        <option value="boxing head gear">Boxing Head Gear</option>
                                        <option value="wrestling head gear">Wrestling Head Gear</option>
                                        <option value="excercise mats">Excercise Mats</option>
                                        <option value="ankle weights">Ankle Weights</option>
                                        <option value="wrist weights">Wrist Weights</option>
                                        <option value="jump rope">Jump Rope</option>
                                        <option value="medicine ball">Medicine Ball</option>
                                        <option value="pull up bar">Pull-Up Bar</option>
                                        <option value="resisitant bands">Resistant Bands</option>
                                        <option value="barbells">Barbells</option>
                                        <option value="weight bench">Weight Bench</option>
                                    </optgroup>

                                    <optgroup label="Power Tools">
                                        <option value="drill driver">Drill Driver</option>
                                        <option value="hammer drill">Hammer Drill</option>
                                        <option value="right angle drill">Right Angle Drill</option>
                                        <option value="impact driver">Impact Drivers</option>
                                        <option value="belt sander">Belt Sander</option>
                                        <option value="orbital sander">Orbital Sander</option>
                                        <option value="bench grinder">Bench Grinder</option>
                                        <option value="drill Press">Drill Press</option>
                                        <option value="band saw">Band Saw</option>
                                        <option value="circular saw">Circular Saw</option>
                                        <option value="miter saw">Miter Saw</option>
                                        <option value="jig saw">Jig Saw</option>
                                        <option value="concrete saw">Concrete Saw</option>
                                        <option value="batteries and chargers">Batteries and Chargers</option>
                                        <option value="grinders">Grinders</option>
                                        <option value="framing Nail Gun">Framing Nail Gun</option>
                                        <option value="floor nailing">Floor Nailing</option>
                                        <option value="pnuematic nailing">Pnuematic Nailing</option>
                                        <option value="roofing nail gun">Roofing Nail Gun</option>
                                    </optgroup>

                                    <optgroup label="Hand Tools">
                                        <option value="hammers">Hammers</option>
                                        <option value="hex keys">Hex Key</option>
                                        <option value="knives blade">Knives Blade</option>
                                        <option value="measuring and layout tools">Measuring and Layout Tools</option>
                                        <option value="pliers">Pliers</option>
                                        <option value="ratchet and sockets">Ratchets and Sockets</option>
                                        <option value="scfrewdriver and drivers">Screwdriver and Drivers</option>
                                        <option value="stud finder">Stud Finder</option>
                                        <option value="taps and dies">Taps and Dies</option>
                                        <option value="adjustable wrench">Adjustable Wrench</option>
                                        <option value="torque wrench">Torque Wrench</option>
                                        <option value="chests">Chestss</option>
                                        <option value="bags">Bags</option>
                                        <option value="power amps">Power Amps</option>
                                        <option value="stage lights">Stage Lights</option>
                                        <option value="stands & racks">Stands & Racks</option>
                                        <option value="pedals">Pedals</option>
                                        <option value="caes-covers-bags">Cases, Covers & Bags</option>
                                    </optgroup>

                                    <optgroup label="Yard Tools">
                                        <option value="lawn mowers">Lawn Mowers</option>
                                        <option value="riding mower">Riding Mower</option>
                                        <option value="leaf blower">Leaf Blower</option>
                                        <option value="generator">Generator</option>
                                        <option value="pressure washer">Pressure Washer</option>
                                        <option value="chain saw">Chain Saw</option>
                                        <option value="log splitter">Log Splitter</option>
                                        <option value="snow blower">Snow Blower</option>
                                        <option value="snow shovel">Snow Shovel</option>
                                    </optgroup>

                                    <optgroup label="New Cars">
                                        <option value="acura">Acura</option>
                                        <option value="audi">Audi</option>
                                        <option value="bmw">BMW</option>
                                        <option value="cadillac">Cadillac</option>
                                        <option value="chevrolet">Chevrolet</option>
                                        <option value="chrysler">Chrysler</option>
                                        <option value="dodge">Dodge</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="gmc">GMC</option>
                                        <option value="genesis">Genesis</option>
                                        <option value="honda">Honda</option>
                                        <option value="hyundai">Hyundai</option>
                                        <option value="infiniti">Infiniti</option>
                                        <option value="jaguar">Jaguar</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="kia">Kia</option>
                                        <option value="land rover">Land Rover</option>
                                        <option value="lexus">Lexus</option>
                                        <option value="lincoln">Lincoln</option>
                                        <option value="mazda">Mazda</option>
                                        <option value="mercedes benz">Mercedes Benz</option>
                                        <option value="mercury">Mercury</option>
                                        <option value="mitsubishi">Mitsubishi</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="porsche">Porsche</option>
                                        <option value="ram">Ram</option>
                                        <option value="scion">Scion</option>
                                        <option value="smart">Smart</option>
                                        <option value="subaru">Subaru</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="volkswagon">Volkswagon</option>
                                        <option value="volvo">Volvo</option>
                                    </optgroup>

                                    <optgroup label="Previously Owned Cars">
                                        <option value="acura">Acura</option>
                                        <option value="audi">Audi</option>
                                        <option value="bmw">BMW</option>
                                        <option value="cadillac">Cadillac</option>
                                        <option value="chevrolet">Chevrolet</option>
                                        <option value="chrysler">Chrysler</option>
                                        <option value="dodge">Dodge</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="gmc">GMC</option>
                                        <option value="genesis">Genesis</option>
                                        <option value="honda">Honda</option>
                                        <option value="hyundai">Hyundai</option>
                                        <option value="infiniti">Infiniti</option>
                                        <option value="jaguar">Jaguar</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="kia">Kia</option>
                                        <option value="land rover">Land Rover</option>
                                        <option value="lexus">Lexus</option>
                                        <option value="lincoln">Lincoln</option>
                                        <option value="mazda">Mazda</option>
                                        <option value="mercedes benz">Mercedes Benz</option>
                                        <option value="mercury">Mercury</option>
                                        <option value="mitsubishi">Mitsubishi</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="porsche">Porsche</option>
                                        <option value="ram">Ram</option>
                                        <option value="scion">Scion</option>
                                        <option value="smart">Smart</option>
                                        <option value="subaru">Subaru</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="volkswagon">Volkswagon</option>
                                        <option value="volvo">Volvo</option>
                                    </optgroup>

                                    <optgroup label="Homes for Sale">
                                        <option value="1 Bedroom">1 Bedroom</option>
                                        <option value="2-Bedroom">2-Bedroom</option>
                                        <option value="3-Bedroom">3-Bedroom</option>
                                        <option value="4 bedroom">4 Bedroom</option>
                                        <option value="5 Bedroom">5 Bedroom</option>
                                        <option value="6 bedroom">6-Bedroom</option>
                                    </optgroup>

                                    <optgroup label="Homes for Rent">
                                        <option value="1 Bedroom-hr">1 Bedroom</option>
                                        <option value="2-Bedroom-hr">2-Bedroom</option>
                                        <option value="3-Bedroom-hr">3-Bedroom</option>
                                        <option value="4 bedroom-hr">4 Bedroom</option>
                                        <option value="5 Bedroom-hr">5 Bedroom</option>
                                        <option value="6 bedroom-hr">6-Bedroom</option>
                                    </optgroup>

                                    <optgroup label="Condos">
                                        <option value="1 Bedroom-c">1 Bedroom</option>
                                        <option value="2-Bedroom-c">2-Bedroom</option>
                                        <option value="3-Bedroom-c">3-Bedroom</option>
                                        <option value="4 bedroom-c">4 Bedroom</option>
                                        <option value="5 Bedroom-c">5 Bedroom</option>
                                        <option value="6 bedroom-c">6-Bedroom</option>
                                    </optgroup>

                                    <optgroup label="Apartments">
                                        <option value="1 Bedroom-a">1 Bedroom</option>
                                        <option value="2-Bedroom-a">2-Bedroom</option>
                                        <option value="3-Bedroom-a">3-Bedroom</option>
                                        <option value="4 bedroom-a">4 Bedroom</option>
                                    </optgroup>

                                    <optgroup label="Townhomes">
                                        <option value="1 Bedroom-t">1 Bedroom</option>
                                        <option value="2-Bedroom-t">2-Bedroom</option>
                                        <option value="3-Bedroom-t">3-Bedroom</option>
                                        <option value="4 bedroom-t">4 Bedroom</option>
                                        <option value="5 Bedroom-t">5 Bedroom</option>
                                        <option value="6 bedroom-t">6-Bedroom</option>
                                    </optgroup>
                                    
                                </select>
                            </div>

                            <div class="form-group">
			                    <select class="custom-select" id="service" name="customSelectService" required="required">
                                    <optgroup label="Living Space and Cars select View">
                                        <option value="">Select Service </option>
                                        <option value="meet">In Person Meet</option>
                                        <option value="Delivery">Delivery</option>
                                        <option value="View">View</option>
                                    </optgroup>
                                </select>
				            </div>
                        </div>

                        <div class="col-sm-4">
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
					 
                        <div class="col-sm-2">
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
                        <div class="col-sm-2">
                            <button class="btn btn-warning mr-5 mb-1" type="button"><a href="{{ url('k_shop/shop_list') }}">Filter</a></button>
                        </div>
			        </div>
		        </div>
            </div>
	    </div>
    </div>	
</div>

<div class="row no-gutters">
    <div class="col-xl-4 order-xl-1 pl-xl-2">
        <div class="card mb-3">
            <div class="card-header bg-light btn-reveal-trigger d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Order Summary</h5><a class="btn btn-link btn-sm btn-reveal text-600" href="../e-commerce/shopping-cart.html"><span class="fas fa-pencil-alt"></span></a>
            </div>
                <div class="card-body">
                    <table class="table table-borderless fs--1 mb-0">
                        <tr class="border-bottom">
                            <th class="pl-0 pt-0">Apple MacBook Pro 15" x 1
                                <div class="text-400 font-weight-normal fs--2">Z0V20008N: 2.9GHz 6-core 8th-Gen Intel Core i9, 32GB RAM
                                </div>
                            </th>
                            <th class="pr-0 text-right pt-0">$1345</th>
                        </tr>
                        <tr class="border-bottom">
                            <th class="pl-0">Apple iMac Pro x 1
                                <div class="text-400 font-weight-normal fs--2">27-inch with Retina 5K Display, 3.0GHz 10-core Intel Xeon W, 1TB
                                </div>
                            </th>
                            <th class="pr-0 text-right">$2010</th>
                        </tr>
                        <tr class="border-bottom">
                            <th class="pl-0">Subtotal</th>
                            <th class="pr-0 text-right">$3355</th>
                        </tr>
                        <tr class="border-bottom">
                            <th class="pl-0">Coupon: <span class="text-success">40SITEWIDE</span></th>
                            <th class="pr-0 text-right">-$55</th>
                        </tr>
                        <tr class="border-bottom">
                            <th class="pl-0">Shipping</th>
                            <th class="pr-0 text-right">$20</th>
                        </tr>
                        <tr class="border-bottom">
                            <th class="pl-0">Tax</th>
                            <th class="pr-0 text-right">$20</th>
                        </tr>
                        <tr>
                            <th class="pl-0 pb-0">Total</th>
                            <th class="pr-0 text-right pb-0">$3320</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-between bg-100">
                    <div class="font-weight-semi-bold">Payable Total
                    </div>
                    <div class="font-weight-bold">$3320</div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 pr-xl-2">
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-auto">
                            <h5 class="mb-2 mb-sm-0">Items in Cart: 2</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="font-weight-bold">ITEM ( 1 )</p>
                        </div>
                        <div class="col-sm-2">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <img class="img-fluid" src="{{ asset('user-dash/k_shop/products/2.jpg') }}" width="125px"alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <th class="pl-0 pt-0">Apple MacBook Pro 15" x 1
                                    <div class="text-400 font-weight-normal fs--2">Z0V20008N: 2.9GHz 6-core 8th-Gen Intel Core i9, 32GB RAM
                                    </div>
                                </th>
                            </a>
                        </div>
                        <div class="col-sm-2 text-right">
                            <p class="font-weight-bold">$1345</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="ml-3 p-2">Remove | Purchase Later</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <p class="font-weight-bold">ITEM ( 2 )</p>
                        </div>
                        <div class="col-sm-2"  href="{{ url('k_shop/shop_details') }}">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <img class="img-fluid" src="{{ asset('user-dash/k_shop/products/6.jpg') }}" width="125px"alt="Card image cap">
                            </a>    
                        </div>
                        <div class="col-sm">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <th class="pl-0 pt-0">Apple MacBook Pro 15" x 1
                                    <div class="text-400 font-weight-normal fs--2">Z0V20008N: 2.9GHz 6-core 8th-Gen Intel Core i9, 32GB RAM
                                    </div>
                                </th>
                            </a>
                        </div>
                        <div class="col-sm-2 text-right">
                            <p class="font-weight-bold">$2010</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="ml-3 p-2">Remove | Purchase Later</p>
                    </div>

                    <hr class="style12">
                    <div class="row">
                    <div class="card-header bg-light">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-auto">
                            <h5 class="mb-2 mb-sm-0">Wish List Items: 2</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="font-weight-bold">ITEM ( 1 )</p>
                        </div>
                        <div class="col-sm-2">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <img class="img-fluid" src="{{ asset('user-dash/k_shop/products/2.jpg') }}" width="125px"alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <th class="pl-0 pt-0">Apple MacBook Pro 15" x 1
                                    <div class="text-400 font-weight-normal fs--2">Z0V20008N: 2.9GHz 6-core 8th-Gen Intel Core i9, 32GB RAM
                                    </div>
                                </th>
                            </a>
                        </div>
                        <div class="col-sm-2 text-right">
                            <p class="font-weight-bold">$1345</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="ml-3 p-2">Remove | Add to Cart</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <p class="font-weight-bold">ITEM ( 2 )</p>
                        </div>
                        <div class="col-sm-2"  href="{{ url('k_shop/shop_details') }}">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <img class="img-fluid" src="{{ asset('user-dash/k_shop/products/6.jpg') }}" width="125px"alt="Card image cap">
                            </a>    
                        </div>
                        <div class="col-sm">
                            <a  href="{{ url('k_shop/shop_details') }}">
                                <th class="pl-0 pt-0">Apple MacBook Pro 15" x 1
                                    <div class="text-400 font-weight-normal fs--2">Z0V20008N: 2.9GHz 6-core 8th-Gen Intel Core i9, 32GB RAM
                                    </div>
                                </th>
                            </a>
                        </div>
                        <div class="col-sm-2 text-right">
                            <p class="font-weight-bold">$2010</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="ml-3 p-2">Remove | Add to Cart</p>
                    </div>  
                </div>
        </div>
   </div>
</div>
<div class="card mb-3">
    <div class="card-header bg-light">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto">
                <h5 class="mb-2 mb-sm-0">Your Shipping Address</h5>
            </div>
            <div class="col-sm-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="fas fa-plus mr-2" data-fa-transform="shrink-2"></span>Add New Address</a></div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="custom-control custom-radio radio-select">
                    <input class="custom-control-input" id="address-1" type="radio" name="clientName" checked>
                    <label class="custom-control-label font-weight-bold d-block" for="address-1">Antony Hopkins<span class="radio-select-content"><span> 2392 Main Avenue,<br>Pensaukee,<br>New Jersey 02139<span class="d-block mb-0 pt-2">+(856) 929-229</span></span></span></label><a class="mt-2 fs--1" href="#!">Edit</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative">
                    <div class="custom-control custom-radio radio-select">
                        <input class="custom-control-input" id="address-2" type="radio" name="clientName">
                        <label class="custom-control-label font-weight-bold d-block" for="address-2">Robert Bruce<span class="radio-select-content"><span>3448 Ile De France St #242,<br>Fort Wainwright, <br>Alaska, 99703<span class="d-block mb-0 pt-2">+(901) 637-734</span></span></span></label><a class="mt-2 fs--1" href="#!">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="card mb-3">
                <div class="card-header bg-light">
                  <h5 class="mb-0">Payment Method</h5>
                </div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="col-12">
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input radio-collapse" type="radio" name="payment-method" id="credit-card" checked="checked" />
                        <label class="custom-control-label" for="credit-card"><span class="d-flex align-items-center mb-2 fs-1">Credit Card</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-12 pl-4">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-row align-items-center">
                            <div class="col">
                              <div class="form-group">
                                <label class="ls text-uppercase text-600 font-weight-semi-bold mb-0">Card Number</label>
                                <input class="form-control" type="text" placeholder="•••• •••• •••• ••••">
                              </div>
                            </div>
                          </div>
                          <div class="form-row align-items-center">
                            <div class="col-6">
                              <div class="form-group">
                                <label class="ls text-uppercase text-600 font-weight-semi-bold mb-0">Exp Date</label>
                                <input class="form-control" type="text" placeholder="mm/yyyy">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label class="ls text-uppercase text-600 font-weight-semi-bold mb-0">CVV<a class="d-inline-block" href="#"><span class="fa fa-question-circle ml-2" data-toggle="tooltip" data-placement="top" title="Card verification value"></span></a></label>
                                <input class="form-control" type="text" placeholder="123" maxlength="3" pattern="[0-9]{3}">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 text-center pt-2 d-none d-sm-block">
                          <div class="rounded p-2 mt-3 bg-100">
                            <div class="text-uppercase fs--2 font-weight-bold">We Accept</div><img src="../assets/img/icons/icon-payment-methods-grid.png" alt="" width="120">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="payment-method" id="paypal" />
                        <label class="custom-control-label" for="paypal"><img class="pull-right" src="../assets/img/icons/icon-paypal-full.png" height="20" alt="">
                        </label>
                      </div>
                    </div>
                  </div>
                  <hr class="border-dashed my-5">
                  <div class="row">
                    <div class="col-md-7 col-xl-12 col-xxl-7 vertical-line px-md-3 mb-xxl-0">
                      <div class="media"><img class="mr-3" src="../assets/img/icons/shield.png" alt="" width="60">
                        <div class="media-body">
                          <h5 class="mb-2">Buyer Protection</h5>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="protection-option-1" type="checkbox" checked>
                            <label class="custom-control-label" for="protection-option-1"> <strong>Full Refund </strong>If you don't <br class="d-none d-md-block d-lg-none">receive your order</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="protection-option-2" type="checkbox" checked>
                            <label class="custom-control-label" for="protection-option-2"> <strong>Full or Partial Refund, </strong>If the product is not as described in details</label>
                          </div><a class="fs--1 ml-3 pl-2" href="#!">Learn More<span class="fas fa-caret-right ml-1" data-fa-transform="down-2">    </span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 col-xl-12 col-xxl-5 pl-lg-4 pl-xl-2 pl-xxl-5 text-center text-md-left text-xl-center text-xxl-left">
                      <hr class="border-dashed d-block d-md-none d-xl-block d-xxl-none my-4">
                      <div class="fs-2 font-weight-semi-bold">All Total: <span class="text-primary">$3320</span></div>
                      <a  href="{{ url('k_shop/shop_receipt') }}">
                      <button class="btn btn-success mt-3 px-5" type="submit">Confirm &amp; Pay</button>
                        </a>
                      <p class="fs--1 mt-3 mb-0">By clicking <strong>Confirm & Pay </strong>button you agree to the <a href="#!">Terms &amp; Conditions</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@section('additional-js')
@endsection