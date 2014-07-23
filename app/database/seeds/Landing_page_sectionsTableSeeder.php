<?php

class Landing_page_sectionsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('landing_page_sections')->delete();

		$landing_page_sections = array(
			[	'landing_page_id' => 1,
				'order' => 0,
				'header_bool' => 1,
				'title' => null,
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span10">
							<img src="http://thepalms.cve.io/libs/timthumb.php?src=../uploads/images/balcony.jpg&w=970&ar=1">
						</div>
					</div>'],
			[	'landing_page_id' => 1,
				'order' => 1,
				'header_bool' => 0,
				'title' => 'A Special Invitation from David Barker',
				'subtitle' => 'If you have ever dreamed about owning a piece of paradise, this is your chance!',
				'content' => '
					<div class="row-fluid">
						<div class="span6">
							<p class="text-justify">After relaxing for a few days in one of the most beautiful villas we\'ve had the privilege to stay in, Lisa and I had the urge to learn more about the real estate opportunities at The Palms Private Residences in Guanacaste, Costa Rica. </p>
							<p class="text-justify">We met with Vice President of Real Estate, Mark Randall and learned that not only is the oceanfront view special, so is the ownership opportunity. Deeded real estate ownership directly on the white sand beaches of the Pacific Ocean is almost unheard of in Costa Rica, as the government owns 95% of this valued land. The Palms Private Residences however, is grandfathered and offers deeded real estate literally steps from the beach.</p>
							<p class="text-justify">Through our business, we have worked to offer my colleagues and friends a special nightly rate to experience The Palms firsthand. Now we invite you to take advantage of it and enjoy true pampering that only The Palms\' hospitality crew can deliver.</p>
							<p class="text-justify">Please complete this simple form to instantly receive more detailed information about The Palms and then get on a plane, high season is just around the corner!  </p>
                            <p class="text-right">David and Lisa Barker</p>
						</div>
						<div class="span4">
							<!--  ----------------------------------------------------------------------  -->
							<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
							<!--  If necessary, please modify the charset parameter to specify the        -->
							<!--  character set of your HTML page.                                        -->
							<!--  ----------------------------------------------------------------------  -->

							<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

							<!--  ----------------------------------------------------------------------  -->
							<!--  NOTE: Please add the following <FORM> element to your page.             -->
							<!--  ----------------------------------------------------------------------  -->

							<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

							<input type=hidden name="oid" value="00D4000000082v2">
							<input type=hidden name="retURL" value="http://">

							<!--  ----------------------------------------------------------------------  -->
							<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
							<!--  these lines if you wish to test in debug mode.                          -->
							<!--  <input type="hidden" name="debug" value=1>                              -->
							<!--  <input type="hidden" name="debugEmail" value="eric@kempfintl.com">      -->
							<!--  ----------------------------------------------------------------------  -->

							<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

							<label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

							<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

							<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

							<input type="hidden" id="00N40000001XwPv" name="00N40000001XwPv" value="The Palms"/>

							<input type="hidden" id="00N40000001WyzU" name="00N40000001WyzU" value="Landing Page"/>

							<input type="hidden" id="00N400000028xJB" name="00N400000028xJB" value="Referral - Broker"/>

							<input type="hidden" id="00N40000002aFgM" name="00N40000002aFgM" value="David Barker"/>

							<input type="hidden" id="00N4000000279i2" name="00N4000000279i2" value="TODAY" />

							<input type="hidden" id="00N4000000279cJ" name="00N4000000279cJ" value="3%" />

							<input type="hidden" id="00N4000000278pX" name="00N4000000278pX" value="2. Info Response" />

							<input type="submit" name="submit">

							</form>

						</div>
					</div>'],
			[	'landing_page_id' => 2,
				'order' => 0,
				'header_bool' => 1,
				'title' => null,
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span10">
							<img src="http://grandisle.cve.io/libs/timthumb.php?src=../uploads/images/grandisle_1-2.jpg&w=970&ar=1">
						</div>
					</div>'],
			[	'landing_page_id' => 2,
				'order' => 1,
				'header_bool' => 0,
				'title' => 'A Special Invitation from Ann Marie and Jim Walberg',
				'subtitle' => 'If you have ever dreamed about owning a piece of paradise, this is your chance!',
				'content' => '
					<div class="row-fluid">
						<div class="span6">
							<p class="text-justify">In 1979 we began serving the real estate needs of the San Francisco Bay Area – one of the world class destinations in the world. And, since 2005 we have been representing extraordinary global properties. Grand Isle Resort & Spa is just the latest one we have discovered.</p>
							<p class="text-justify">Grand Isle Resort & Spa is widely considered the most luxurious real estate opportunity in the Bahamas, and this is why we want to offer you the opportunity to purchase your piece of Paradise.</p>
							<p class="text-justify">Take a moment and complete this simple form to instantly receive more detailed information about Grand Isle, and then get on a plane! Their entire staff is awaiting your arrival.</p>
                            <p class="text-right">Ann Marie and Jim Walberg</p>
						</div>
						<div class="span4">
							<form name="web2prospect" method="get" action="http://grandislevillas.force.com/pba__WebserviceWebToProspect">
							<input type="hidden" name="successpage" value="http://walberg.grandisle.cve.io/lp?success=1" />
							<input type="hidden" name="errorpage" value="http://walberg.grandisle.cve.io/lp?error=1" />
							<!-- uncomment the following line to get error messages in the response if the web2prospect process fails. -->
							<!-- <input type="hidden" name="debugmode" value="true" /> -->

							<input type="hidden" name="Contact.ContactType__c" value="Buyer" />
							<input type="hidden" name="Contact.Stage__c" value="2. Info Response" />
							<input type="hidden" name="Contact.Status__c" value="Active" />
							<input type="hidden" name="Contact.Lead_Contact_Method__c" value="Landing Page" />
							<input type="hidden" name="Contact.Lead_Source__c" value="External Referral" />
							<input type="hidden" name="Contact.Referral_Source__c" value="Jim Walberg" />

							<label for="Contact.FirstName">First name</label>
							<input type="text" size="40" name="Contact.FirstName" maxlength="40" id="Contact.FirstName" /><br/>

							<label for="Contact.LastName">Last name</label>
							<input type="text" size="40" name="Contact.LastName" maxlength="80" id="Contact.LastName" /><br/>

							<label for="Contact.Email">Email</label>
							<input type="text" size="40" name="Contact.Email" maxlength="80" id="Contact.Email" /><br/>

							<label for="Contact.Phone">Telephone</label>
							<input type="text" size="40" name="Contact.Phone" maxlength="40" id="Contact.Phone" /><br/>

							<input type="submit" value="Submit" name="submit" />

							</form>
						</div>
					</div>'],
			[	'landing_page_id' => 3,
				'order' => 0,
				'header_bool' => 1,
				'title' => null,
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span10">
							<img src="http://grandisle.cve.io/libs/timthumb.php?src=../uploads/images/grandisle_1-2.jpg&w=970&ar=1">
						</div>
					</div>'],
			[	'landing_page_id' => 3,
				'order' => 1,
				'header_bool' => 0,
				'title' => 'A Special Invitation from Peter Nicholson',
				'subtitle' => 'If you have ever dreamed about owning a piece of paradise, this is your chance!',
				'content' => '
					<div class="row-fluid">
						<div class="span6">
							<p class="text-justify">Grand Isle Resort & Spa is widely considered the most luxurious real estate opportunity in the Bahamas. But don\'t take our word for it. Like so many good things in life, you need to see it to believe it.</p>
							<p class="text-justify">Our team has worked hard to offer my colleagues and friends a special nightly rate to experience Grand Isle firsthand. Now we invite you to take advantage of it and enjoy true pampering that only the Grand Isle hospitality crew can deliver.</p>
							<p class="text-justify">Please complete this simple form to instantly receive more detailed information about Grand Isle and its exciting ownership opportunities.</p>
              <p class="text-right">Peter Nicholson</p>
						</div>
						<div class="span4">
							<form name="web2prospect" method="get" action="http://grandislevillas.force.com/pba__WebserviceWebToProspect">
							<input type="hidden" name="successpage" value="http://peter.grandisle.cve.io/lp?success=1" />
							<input type="hidden" name="errorpage" value="http://peter.grandisle.cve.io/lp?error=1" />
							<!-- uncomment the following line to get error messages in the response if the web2prospect process fails. -->
							<!-- <input type="hidden" name="debugmode" value="true" /> -->

							<input type="hidden" name="Contact.ContactType__c" value="Buyer" />
							<input type="hidden" name="Contact.Stage__c" value="2. Info Response" />
							<input type="hidden" name="Contact.Status__c" value="Active" />
							<input type="hidden" name="Contact.Lead_Contact_Method__c" value="Landing Page" />
							<input type="hidden" name="Contact.Lead_Source__c" value="External Referral" />
							<input type="hidden" name="Contact.Referral_Source__c" value="Peter Nicholson" />

							<label for="Contact.FirstName">First name</label>
							<input type="text" size="40" name="Contact.FirstName" maxlength="40" id="Contact.FirstName" /><br/>

							<label for="Contact.LastName">Last name</label>
							<input type="text" size="40" name="Contact.LastName" maxlength="80" id="Contact.LastName" /><br/>

							<label for="Contact.Email">Email</label>
							<input type="text" size="40" name="Contact.Email" maxlength="80" id="Contact.Email" /><br/>

							<label for="Contact.Phone">Telephone</label>
							<input type="text" size="40" name="Contact.Phone" maxlength="40" id="Contact.Phone" /><br/>

							<input type="submit" value="Submit" name="submit" />

							</form>
						</div>
					</div>'],
			[	'landing_page_id' => 4,
				'order' => 0,
				'header_bool' => 1,
				'title' => null,
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span10">
							<img src="http://grandisle.cve.io/libs/timthumb.php?src=../uploads/images/grandisle_1-2.jpg&w=970&ar=1">
						</div>
					</div>'],
			[	'landing_page_id' => 4,
				'order' => 1,
				'header_bool' => 0,
				'title' => 'A Special Invitation from Collingwood "Woody" Turnquest',
				'subtitle' => 'If you have ever dreamed about owning a piece of paradise, this is your chance!',
				'content' => '
					<div class="row-fluid">
						<div class="span6">
							<p class="text-justify">All of this content is intended to be specific to you. Here is an example. A personal introparagraph to start would be ideal</p>
							<p class="text-justify">Grand Isle Resort & Spa is widely considered the most luxurious real estate opportunity in the Bahamas, and this is why we want to offer it to you.</p>
							<p class="text-justify">Please complete this simple form to instantly receive more detailed information about The Palms and then get on a plane, high season is here!</p>
                            <p class="text-right">Collingwood "Woody" Turnquest</p>
						</div>
						<div class="span4">
							<form name="web2prospect" method="get" action="http://grandislevillas.force.com/pba__WebserviceWebToProspect">
							<input type="hidden" name="successpage" value="http://woody.grandisle.cve.io/lp?success=1" />
							<input type="hidden" name="errorpage" value="http://woody.grandisle.cve.io/lp?error=1" />
							<!-- uncomment the following line to get error messages in the response if the web2prospect process fails. -->
							<!-- <input type="hidden" name="debugmode" value="true" /> -->

							<input type="hidden" name="Contact.ContactType__c" value="Buyer" />
							<input type="hidden" name="Contact.Stage__c" value="2. Info Response" />
							<input type="hidden" name="Contact.Status__c" value="Active" />
							<input type="hidden" name="Contact.Lead_Contact_Method__c" value="Landing Page" />
							<input type="hidden" name="Contact.Lead_Source__c" value="External Referral" />
							<input type="hidden" name="Contact.Referral_Source__c" value="Woody Turnquest" />

							<label for="Contact.FirstName">First name</label>
							<input type="text" size="40" name="Contact.FirstName" maxlength="40" id="Contact.FirstName" /><br/>

							<label for="Contact.LastName">Last name</label>
							<input type="text" size="40" name="Contact.LastName" maxlength="80" id="Contact.LastName" /><br/>

							<label for="Contact.Email">Email</label>
							<input type="text" size="40" name="Contact.Email" maxlength="80" id="Contact.Email" /><br/>

							<label for="Contact.Phone">Telephone</label>
							<input type="text" size="40" name="Contact.Phone" maxlength="40" id="Contact.Phone" /><br/>

							<input type="submit" value="Submit" name="submit" />

							</form>
						</div>
					</div>'],
			[	'landing_page_id' => 5,
				'order' => 0,
				'header_bool' => 1,
				'title' => null,
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span10">
							<img src="http://grandisle.cve.io/libs/timthumb.php?src=../uploads/images/grandisle_1-2.jpg&w=970&ar=1">
						</div>
					</div>'],
			[	'landing_page_id' => 5,
				'order' => 1,
				'header_bool' => 0,
				'title' => 'A Special Invitation from Wendy Rowe',
				'subtitle' => 'If you have ever dreamed about owning a piece of paradise, this is your chance!',
				'content' => '
					<div class="row-fluid">
						<div class="span6">
							<p class="text-justify">Believe it or not you have found it. Grand Isle Resort & Spa is widely considered the most luxurious real estate opportunity in the Bahamas, and this is why we want to offer it to you.</p>
							<p class="text-justify">When I sat at the breath taking pool at Grand Isle and looked out over Exuma’s distinguishing crystal clear waters of brilliant blue and green hues I knew I had found the perfect place. </p>
							<p class="text-justify">Feeling a sense of calm, the warmth of the sun, being able to have the sand between my toes and watching the brilliant stars is absolute heaven to me. This is what Grand Isle Villa owners enjoy with ownership here. So why not invest into this one of a kind property, truly you won’t be disappointed!</p>
							<p class="text-justify">Complete the brief form on the right and receive detailed ownership information to your inbox instantly!</p>
                            <p class="text-right">Wendy Rowe</p>
						</div>
						<div class="span4">
							<form name="web2prospect" method="get" action="http://grandislevillas.force.com/pba__WebserviceWebToProspect">
							<input type="hidden" name="successpage" value="http://wendy.grandisle.cve.io/lp?success=1" />
							<input type="hidden" name="errorpage" value="http://wendy.grandisle.cve.io/lp?error=1" />
							<!-- uncomment the following line to get error messages in the response if the web2prospect process fails. -->
							<!-- <input type="hidden" name="debugmode" value="true" /> -->

							<input type="hidden" name="Contact.ContactType__c" value="Buyer" />
							<input type="hidden" name="Contact.Stage__c" value="2. Info Response" />
							<input type="hidden" name="Contact.Status__c" value="Active" />
							<input type="hidden" name="Contact.Lead_Contact_Method__c" value="Landing Page" />
							<input type="hidden" name="Contact.Lead_Source__c" value="External Referral" />
							<input type="hidden" name="Contact.Referral_Source__c" value="Wendy Rowe" />

							<label for="Contact.FirstName">First name</label>
							<input type="text" size="40" name="Contact.FirstName" maxlength="40" id="Contact.FirstName" /><br/>

							<label for="Contact.LastName">Last name</label>
							<input type="text" size="40" name="Contact.LastName" maxlength="80" id="Contact.LastName" /><br/>

							<label for="Contact.Email">Email</label>
							<input type="text" size="40" name="Contact.Email" maxlength="80" id="Contact.Email" /><br/>

							<label for="Contact.Phone">Telephone</label>
							<input type="text" size="40" name="Contact.Phone" maxlength="40" id="Contact.Phone" /><br/>

							<input type="submit" value="Submit" name="submit" />

							</form>
						</div>
					</div>'],
			[	'landing_page_id' => 6,
				'order' => 0,
				'header_bool' => 1,
				'title' => null,
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span10">
							<img src="http://grandisle.cve.io/libs/timthumb.php?src=../uploads/images/grandisle_1-2.jpg&w=970&ar=1">
						</div>
					</div>'],
			[	'landing_page_id' => 6,
				'order' => 1,
				'header_bool' => 0,
				'title' => 'Bahamian paradise is within your grasp, but not forever!',
				'subtitle' => null,
				'content' => '
					<div class="row-fluid">
						<div class="span6">
							<p class="text-justify">Limited availability is left in several Villa categories, this is because the Grand Isle Villas checks all the boxes that savvy second home owners want. Ultra luxury, fully furnished residences with the option to cover expenses as part of the Grand Isle rental program and enjoy other fantastic destinations around the world via two luxury reciprocity clubs, The Elite Alliance and 3RD HOME.  </p>
							<p class="text-justify">Grand Isle Villa owners enjoy all the aforementioned finer points of second home ownership along with the niceties they demand; white sand, blue water, fresh cuisine, room service, housekeeping and concierge service. </p>
							<p class="text-justify">Prices starting in the $500’s up to $4 million. Inquire now and receive detailed ownership information to your inbox instantly.</p>
						</div>
						<div class="span4">
							<form name="web2prospect" method="get" action="http://grandislevillas.force.com/pba__WebserviceWebToProspect">
							<input type="hidden" name="successpage" value="http://grandisle.cve.io/lp?success=1" />
							<input type="hidden" name="errorpage" value="http://grandisle.cve.io/lp?error=1" />
							<!-- uncomment the following line to get error messages in the response if the web2prospect process fails. -->
							<!-- <input type="hidden" name="debugmode" value="true" /> -->

							<input type="hidden" name="Contact.ContactType__c" value="Buyer" />
							<input type="hidden" name="Contact.Stage__c" value="2. Info Response" />
							<input type="hidden" name="Contact.Status__c" value="Active" />
							<input type="hidden" name="Contact.Lead_Contact_Method__c" value="Landing Page" />
							<input type="hidden" name="Contact.Lead_Source__c" value="Google PPC" />

							<label for="Contact.FirstName">First name</label>
							<input type="text" size="40" name="Contact.FirstName" maxlength="40" id="Contact.FirstName" /><br/>

							<label for="Contact.LastName">Last name</label>
							<input type="text" size="40" name="Contact.LastName" maxlength="80" id="Contact.LastName" /><br/>

							<label for="Contact.Email">Email</label>
							<input type="text" size="40" name="Contact.Email" maxlength="80" id="Contact.Email" /><br/>

							<label for="Contact.Phone">Telephone</label>
							<input type="text" size="40" name="Contact.Phone" maxlength="40" id="Contact.Phone" /><br/>

							<input type="submit" value="Submit" name="submit" />

							</form>
						</div>
					</div>'],
		);

		//DB::table('landing_page_sections')->insert($landing_page_sections);
		foreach($landing_page_sections as $key => $landing_page_section) {
            $id = $key + 1;
            if(DB::table('landing_page_sections')->where('id', $id)->update($landing_page_section)) {
                echo "landing_page_sections ({$id}) updated!\n";
            }
        }
	}

}
