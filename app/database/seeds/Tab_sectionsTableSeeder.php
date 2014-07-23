<?php

class Tab_sectionsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('tab_sections')->delete();

        $tab_sections = array(
        	[	'package_tab_id' => 1,
                'header_bool' => 1,
                'order' => 0,
        		'title' => 'Martis Camp: A Four-Season Tahoe Community Where You’re Never Forced to Choose One Lifestyle Over Another',
                'subtitle' => null,
        		'content' => '<div class="row-fluid"><div class="span5"><p>For all its enduring traits, Tahoe has historically required a tradeoff for families seeking a second home—a choice between convenience and privacy, summer and winter, golf and skiing, ease of access and ease of use. Upon discovering Martis Camp, families instantly understand that  Nowhere else in Tahoe offers private ski access, championship golf and virtually endless family recreation, all inside the gates of 2,177-breathtaking acres.</p></div>
<div class="span5"><p>Ownership opportunities are not unlimited, so call us today to arrange your tour of  the one Tahoe community where no trade-off’s are required....a High Sierra retreat that’s as access as it is to enjoy.</p></div></div>',
                'image' => null,
				'video' => '<iframe src="http://player.vimeo.com/video/84357622?title=0&amp;byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
				],
            [   'package_tab_id' => 2,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'From Iconic Custom Homes to Breathtaking Homesites, Families Are Building Their Legacies At Martis Camp',
                'subtitle' => null,
                'content' => '<p>There are two paths to ownership at Martis Camp: a limited collection of custom homes or a selection of distinctive homesites.</p>',
                'image' => 'martiscamp_1-0-Ownership.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 2,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Custom Homes',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>Martis Camp’s custom homes represent diverse mountain architecture perfectly reflective of the iconic Tahoe lifestyle.</p></div><div class="span5"><p>Martis Camp’s luxury homes range from grand estate homes on larger homesites to cabin-style homes starting in the $2,000,000‘s.</p><p><a href="http://www.martiscamp.com/luxury-homes-for-sale/" target="_blank">View Martis Camp Custom Homes »</a></p></div></div>',
                'image' => 'martiscamp_1-1-CustomHomes1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 2,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Homesites',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>Our homesites serve as a great pallet to create your completely unique Martis Camp experience. With most homesites starting in the $700,000s and averaging well over an acre, they afford a great sense of mountain privacy.</p></div>
                <div class="span5"><p>We invite you to call us today to arrange a private tour and discuss a weekend stay in this Tahoe’s most versatile luxury community, where ownership opportunities are increasingly limited.</p><p>Call 1-800-721-9005 or simply visit the invtiaton tab above.</p><p><a href="http://www.martiscamp.com/community-map" target="_blank">View Martis Camp Homesites »</a></p></div></div>',
                'image' => 'martiscamp_1-2-Homesites.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 2,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'In The News',
                'subtitle' => 'Martis Camp Accolades & Recognition Reflect Excellence and Popularity',
                'content' => '<div class="row-fluid"><div class="span5"><p>As Martis Camp has played such a big part in the lives of our members, others have taken notice. To the right are just a few of the accolades we’re honored to have received.</p><p>If you’d like to discover the reasons why Martis Camp is so heralded, call us today to arrange your private tour.</p></div>
                <div class="span5"><ul>
                    <li><a href="http://online.barrons.com/article/SB50001424052970203979804576152351515182700.html" target="_blank">Best Place to Own a Second Home in Tahoe</a> — Barron’s</li>
                    <li><a href="http://www.forbes.com/sites/larryolmsted/2011/08/08/12-best-private-golf-communities/2/" target="_blank">12 Best Private Golf Communities</a> — Forbes</li>
                    <li><a href="http://blog.pacunion.com/neighborhood-martis-camp/" target="_blank">Top-Ranked Golf Course, Easy Access to Ski Runs at Tahoe-Area’s Martis Camp</a> — Bay Area Real Estate Blog</li>
                    <li><a href="http://d12ndl6gmmx0dt.cloudfront.net/wp-content/uploads/2012/05/golfinc_2012spring.pdf" target="_blank">Camp Lodge is Top Private Clubhouse of the Year</a> — Golf Inc</li>
                    <li><a href="http://www.golfdigest.com/golf-courses/2010-01/bestnewprivate" target="_blank">Best New Private Courses</a> — Golf Digest</li>
                    <li><a href="http://www.hauteliving.com/2008/07/the-air-the-angels-breathe/3091/" target="_blank">Air The Angels Breathe</a> — Haute Living</li>
                    <li><a href="#" target="_blank">Host Course for 2013 Junior Amateur Championship</a> — USGA</li>
                    <li><a href="#" target="_blank">Modern Architecture Gets Foothold at Martis Camp</a> - San Francisco Chronicle</li>
                </ul></div></div>',
                'image' => 'martiscamp_1-4-InTheNew.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 2,
                'header_bool' => 0,
                'order' => 4,
                'title' => 'Developer\'s Story',
                'subtitle' => 'Seasoned Developers and $100 million in Amenities Create Momentum and Stability',
                'content' => '<div class="row-fluid"><div class="span5"><p>Martis Camp is the collaborative effort of DMB and Highlands Management Group – two names synonymous with the development of the West’s leading private communities.</p>
<p>Thanks to their steadfast commitment, Martis Camp boasts $100 million in fully-completed amenities—resulting in a generationally sustainable, and completely unique Tahoe community. </p>
<p>Fundamentals are critical to successful development and, in the case of Martis Camp, DMB Highlands Group capitalized on an extraordinary set of fundamentals: 2,177 breathtaking acres that are easy to access and contiguous to California’s leading ski resort.</p></div>
<div class="span5"><p>By applying capital—in a responsible and wise manner—families are now reaping the most distinctive legacy lifestyle available in the High Sierra. </p><p>The developer’s foresight, vision and commitment has led to hundreds of families who have already made this one-of-a-kind community part of their family’s story.</p>
<p>Because of its unique success, ownership opportunities at Martis Camp are quickly diminishing, so we invite you to call us today to schedule your private tour of this remarkable Tahoe community.</p></div></div>',
                'image' => 'martiscamp_1-5-DeveloperStory.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 2,
                'header_bool' => 0,
                'order' => 5,
                'title' => 'Getting Here',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>Lake Tahoe’s attraction is due in no small part to its ease of access from across the nation—whether driving or flying. </p>
<p>Martis Camp is centrally located in the historic Martis Valley, between Interstate 80 and Lake Tahoe’s North Shore, so finding us is easy.</p></div>
<div class="span5"><p><strong>If You’re Driving:</strong> Martis Camp is located between Interstate 80 and Lake Tahoe’s North Shore, approximately three and a half hours from the Bay Area. </p>
<p><strong>If You’re Flying:</strong> To fly commercial to Martis Camp, fly into Reno-Tahoe (RNO) and it’s less than an hour drive to Martis Camp. RNO is an hour flight from Los Angeles. To fly private, the Truckee Tahoe Airport accommodates most any size jet and is only a five minute drive from Martis Camp</p></div></div>',
                'image' => 'martiscamp_1-6-GettingHere.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 2,
                'header_bool' => 0,
                'order' => 6,
                'title' => 'Downloads',
                'subtitle' => null,
                'content' => '<p>Below you will find some files that we have available for you to download:</p>
                <p><a class="btn btn-info btn-large" href="/uploads/downloads/Martis_Camp_Brochure.pdf"><i class="icon-white icon-download"></i> Download Martis Camp Brochure</a></p>
                <p><a class="btn btn-info btn-large" href="/uploads/downloads/Martis_Camp_Community_Map_2013.pdf"><i class="icon-white icon-download"></i> Download Martis Community Map 2013</a></p>
                <p><a class="btn btn-info btn-large" href="/uploads/downloads/Northstar_Martis_Camp_Map.pdf"><i class="icon-white icon-download"></i> Download Northstar Martis Camp Map</a></p>
                <p><em>Right click the buttons to download the files to your computer</em></p>',
                'image' => 'martiscamp_4-0-Downloads.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 3,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'The Club &amp; Community',
                'subtitle' => null,
                'content' => '<p>Martis Camp is a 2,177-acre private golf and ski community of increasingly limited opportunity, Barron’s ranked as Tahoe’s Best Place to Own a Second Home. Providing the perfect balance of respite and recreation, Martis Camp is a legacy community that makes it easy to say yes to the things that matter most.</p>',
                'image' => 'martiscamp_2-0-ClubCommunity.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 3,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Club Membership',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>One very unique aspect of Martis Camp is the vertical nature of our club memberships that allows your extended family to use amenities unaccompanied. Another distinguishing factor is that we offer two Club Memberships: a Social Membership and a Golf Membership.</p></div><div class="span5"><p>The Social Membership allows families to enjoy Martis Camp’s unique amenity mix (including our winter amenities) while providing limited access to golf. The Golf Membership includes everything offered in the Social Membership, but with full access to golf. In 2013, the Social Membership dues are $8,900 and the Golf Membership dues are $15,400.</p></div></div>',
                'image' => 'martiscamp_2-1-ClubMembership.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 3,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Community Association',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>The Martis Camp Community Association provides 24-hour, private, gated access with trained security. Security officers also patrol Martis Camp 24 hours a day.</p></div><div class="span5"><p>The Association also provides common area maintenance, common road repair and snow removal, as well as architectural review. 2013 Community Association dues are $250 per month.</p></div></div>',
                'image' => 'martiscamp_2-2-CommunityAssoc.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 4,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Tahoe’s Only Four Season Community',
                'subtitle' => null,
                'content' => '<p>The idea that seeing is believing is nowhere more true than Martis Camp, where you have to experience it to fully understand the breadth of everything to do up here!</p>
<p>Because there’s simply no way to describe all of the four-season amenities and experiences, following are a few of the highlights...</p>',
                'image' => 'martiscamp_3-0-Lifestyle.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 4,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Experiences',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p><strong>Summer experiences include:</strong></p>
<ul>
<li>Playing the Tom Fazio golf course</li>
<li>The Beach Shack — a quaint building and private lawn adjacent to a sandy beach on Lake Tahoe with valet parking, light dining and beach amenities</li>
<li>Hiking or mountain biking the 26-mile Community Trail system</li>
<li>Soaking up the sun at our Family Barn summer swimming venue </li>
<li>Recreational and match play at the Tennis Pavilion </li>
<li>Summer Concert Series at our outdoor amphitheater</li>
<li>Warm afternoons at the Park Pavilion, Putting Park, Fishing Lake </li>
<li>Culinary expressions and magnificent vistas on the Camp Lodge dining decks</li>
<li>Attending special events like the USGA Junior Amateur Tournament</li>
<li>A truly unique spa experience with a fitness center and lap pools</li>

</ul></div>
<div class="span5">
<p><strong>Winter experiences include:</strong></p>
<ul>
<li>One-of-a-kind direct ski access to Vail Resort’s Northstar™ California</li>
<li>Snowshoeing or Nordic skiing on the groomed Community Trails </li>
<li>Relaxing with your favorite read at the Lost Library  </li>
<li>The community’s family-oriented sledding hill</li>
<li>Exquisite dining overlooking the 18th green from the Camp Lodge</li>
</ul>
</div>
</div>',
                'image' => 'martiscamp_3-1-Experiences.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 4,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Owner Demographics',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>If any single characteristic defines Martis Camp, it’s progressive. Anything but the kind of place where laughter is frowned upon, Martis Camp is all about surpassing experiences and memorable moments, with everyone you love. That’s one reason our multi-generational club memberships are so popular.</p>
<p>Our broad appeal, however, doesn’t mean we lack elegance. Far from it, thoughtful luxury and sophistication are woven through every aspect of Martis Camp and they’re fully embodied at the Camp Lodge—where you can retreat to dine, exercise, be pampered at the spa, and connect with friends before or after a round of golf.</p></div>
<div class="span5"><p>At Martis Camp, kids are welcome, shorts are smiled upon, and enjoyment is the ultimate aim. In a word, it’s a community where connection is preeminent. As a result, our age demographics are as diverse as our amenity offerings, because we understand that the places where people really want to spend time are the places where they can connect with those who matter most.</p>
<p>That’s why USA Today recognized Martis Camp as one of the country’s most family-friendly private communities and why families continue to flock to Martis Camp.</p>
<p>Call us today to arrange a time to bring your family to Martis Camp. It will be a transforming experience!</p></div></div>',
                'image' => 'martiscamp_3-1-OwnerDemographics.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 4,
                'header_bool' => 0,
                'order' => 4,
                'title' => 'Beyond The Camp',
                'subtitle' => null,
                'content' => '<div class="row-fluid"><div class="span5"><p>While Martis Camp offers an abundance of recreation inside the community’s gates, residents of a Tahoe community clearly need easy-access to Lake Tahoe itself. That’s why our 35’ private Formula Cruiser is at a nearby marina for the exclusive enjoyment of Martis Camp members. Whether you want to spend a couple of hours touring Emerald Bay or a full day on the world’s most scenic lake with chef-catered fare—Martis Camp makes experiencing the wonders of Lake Tahoe as simple as picking up the phone and grabbing the sunscreen.</p></div>
<div class="span5"><p>While Lake Tahoe is easily accessible from Martis Camp, so is the heart of historic downtown Truckee—a quaint California mountain town that’s emerging as a treasure trove of culture, boutique shops and great restaurants. For the outdoor enthusiast, Truckee is literally a world-renowned destination, with some of the best fly-fishing, hiking and mountain biking in the western U.S.</p></div></div>',
                'image' => 'martiscamp_3-2-BeyondTheCamp.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 4,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'The Beach Shack',
                'subtitle' => 'Announcing the Martis Camp Beach Shack on Lake Tahoe',
                'content' => '<div class="row-fluid">
                <div class="span10">Since its inception, the Martis Camp lifestyle has been defined by an incomparable array of family amenities within the gates of its private 2,100 acres. This vision has been a catalyst for what many consider the most successful private recreational community in America.</p>
                <p>We are excited to announce that Martis Camp has added an amenity that complements the true Tahoe lifestyle like no other...The Martis Camp Beach Shack at Lake Tahoe (planned opening July 2014). Situated only 12 miles from Martis Camp, The Beach Shack encompasses over an acre of property on the shores of Lake Tahoe. This private setting and adjacent sandy beach will enable Martis Camp members to enjoy convenient access to one of the nation’s most treasured natural settings - Lake Tahoe. The Beach Shack adds another dimension to the Martis Camp lifestyle by simplifying member access to the Lake with:</p>
                <ul>
                <li>Valet Parking</li>
                <li>Kayaks, Paddleboards, sand toys and more </li>
                <li>Casual Fare and Beverages </li>
                <li>Chaise Lounges and Towel Service </li>
                <li>Shower Suites, Restrooms and Lounge area</li>
                </ul>
                </div>
                </div>',
                'image' => 'martiscamp_1-3-BeachShack.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 5,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Invitation',
                'subtitle' => null,
                'content' => '<p>Now that you have gotten to know a bit more about Martis Camp, we encourage you to come and experience the lifestyle firsthand.  Please call us today or simply complete the form below to start the process of arranging your private tour of Martis Camp.</p>',
                'image' => 'martiscamp_5-0-Invitation.jpg',
                'video' => null
                ],
            /*[   'package_tab_id' => 5,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Invitation Form',
                'subtitle' => null,
                'content' => '<p>Fill out the form below to contact us with any questions or comments that you may have regarding Martis Camp.</p>
                <form class="form-horizontal" id="contact_form" action="/contact" method="POST">
                    <div class="control-group">
                        <label class="control-label" for="first_name">First Name:</label>
                        <div class="controls">
                            <input type="text" name="first_name" id="first_name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="last_name">Last Name:</label>
                        <div class="controls">
                            <input type="text" name="last_name" id="last_name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="phone">Phone #:</label>
                        <div class="controls">    
                            <input type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email:</label>
                        <div class="controls">    
                            <input type="text" name="email" id="email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="comments">Questions or Comments:</label>
                        <div class="controls">    
                            <textarea name="comments" id="comments" rows="7" class="span4"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" id="contact_submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>',
                'image' => null,
                'video' => null
                ],*/
            [   'package_tab_id' => 6,
                'header_bool' => 1,
                'order' => 0,
                'title' => null,
                'subtitle' => null,
                'content' => null,
                'image' => null,
                'video' => '<iframe src="http://player.vimeo.com/video/39665825?title=0&byline=0&portrait=0" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
                ],
            [   'package_tab_id' => 7,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Freedom, Flexibilty, Ultimate Lifestyle',
                'subtitle' => null,
                'content' => '<p>A beach vacation offers freedom from daily routines and responsibilities as well as an escape from timelines, deadlines, housework and deskwork.</p><p>Beach vacation home ownership can mean flexibility, too. Flexibility to visit when you want to and to stay as long as you can; to share your special retreat with friends and family; and to relax in the knowledge that your special slice of paradise is in good hands while you’re away.</p>',
                'image' => 'thepalms_1-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 7,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Ownership Options',
                'subtitle' => 'Prestigious and Sensible',
                'content' => '<p>At The Palms, you can enjoy all the benefits of effortless oceanfront living without worries of usual second home upkeep and maintenance hassles. Whether you choose to purchase your own full villa or decide that membership in the Private Residence Club is more your speed, a deeded interest will secure your asset, one that is your own and can be handed down for generations to come.</p>
<div class="row-fluid">
<div class="span5">
<h4 class="italic">Whole Villa Ownership</h4>
<ul>
<li>Privately titled, deeded ownership of beachfront property – rare in Costa Rica</li>
<li>Vacation in your home when you wish, or rent to offset costs when you don’t</li>
<li>Enjoy all benefits of The Palms’ services, amenities and concierge services</li>
<li>Reciprocal vacation opportunities to enjoy travel adventures at other prestigious resorts around the world via 3RDHOME.com</li>
</ul>
</div>
<div class="span5">
<h4 class="italic">Private Residence Club Ownership</h4>
<ul>
<li>A fraction of the cost of traditional second-home ownership</li>
<li>Privately titled, deeded ownership of beachfront property – rare in Costa Rica</li>
<li>Intelligent way to minimize the initial investment and match annual costs with annual usage</li>
<li>Flexible and abundant usage throughout the year – no assigned “weeks”</li>
<li>Reciprocal vacation opportunities to enjoy travel adventures at other prestigious resorts around the world via 3RDHOME.com</li>
</ul>
</div>
</div>',
                'image' => 'thepalms_1-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 7,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Pricing',
                'subtitle' => 'Ownership at The Palms - You Have Options',
                'content' => '<h4 class="italic">Purchase Price</h4>
<p>Owners can choose full villa ownership starting at $795,000* or purchase a 1/10th interest in The Palms Private Residence Club for $129,000*.<br><small>* prices subject to change without notice.</small></p>
<h4 class="italic">Comprehensive Club Management and Maintenance Fees</h4>
<p>Owners pay HOA fees for the professional management, operation and maintenance of Club Villas, facilities and common areas. Included in these fees are funds for maintenance, insurance, utilities, salaries, supplies, taxes, trash removal, legal/accounting and reserves for the replacement and/or refurbishing of Club facilities and common areas.</p>
<div class="row-fluid">
<div class="span5">
<p><strong>Current Club Fees</strong><br>
Whole Villa Ownership Fees: $1,065 per month, billed monthly
1/10th Ownership Fees: $5,646 per year, billed quarterly</p>
</div>
<div class="span5">
<p><strong>Housekeeping Services:</strong><br>
For Private Residence Club owners, the Club provides daily housekeeping services consisting of bath linen replenishment, bed making and trash removal; a mid-week linen change; and, a complete Villa cleaning upon departure. Whole villa owners may choose to add housekeeping services for an additional fee. Please inquire with the sales team.</p>
</div>
</div>
',
                'image' => 'thepalms_1-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 7,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Unforgettable Vacations Worldwide',
                'subtitle' => 'Your Home in Costa Rica is the Key to the World',
                'content' => '<p>Owners at The Palms will enjoy the privilege of visiting more extraordinary properties through our exclusive reciprocity agreements with The Elite Alliance, The Elite Alliance Select and 3RD HOME. Palms owners receive complimentary memberships to these fantastic reciprocity clubs and can explore far beyond Playa Flamingo to other exotic golf, ski, city and beach destinations.</p>
<p>Lake Tahoe, CA | Deer Valley, UT | Paris, France | New York, New York | Tuscany, Italy | Vail, CO | Great Exuma, Bahamas | Koh Samui, Thailand | Cabo San Lucas, MX | Southampton, Bermuda | Palm Desert, CA</p>
<p>For more information please visit <a href="http://www.theelitealliance.com" target="_blank">www.theelitealliance.com</a> and <a href="http://www.thepalms.3rdhome.com" target="_blank">www.thepalms.3rdhome.com</a></p>
                ',
                'image' => 'thepalms_1-4.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 7,
                'header_bool' => 0,
                'order' => 4,
                'title' => 'Residence Club FAQs',
                'subtitle' => 'You Might be Wondering',
                'content' => '
                <div class="row-fluid">
                <div class="span5">
                <p><strong class="italics">If I purchase at The Palms Private Residence Club, do I own real estate?</strong><br>
Yes. Ownership is evidenced by a privately titled real estate deed which is extremely rare for beachfront property in Costa Rica. Less than 5% of Costa Rica’s coastline is privately titled property. These other properties can only be leased from the government through a Concession Agreement, which does not provide the benefits of private property ownership. The opportunity to own privately titled beachfront property along Costa Rica’s beautiful Gold Coast of Guanacaste is extremely rare and valuable.</p>
                </div>
                <div class="span5">
                <p><strong class="italics">Is The Palms Private Residence Club a typical timeshare development?</strong><br>
No. The Palms offers rare deeded ownership of real estate in Costa Rica. While often confused with timesharing, the Residence Club is enjoyed much like a private equity golf country club. Rather than reserving tee times, Residence Club Owners reserve Club Villas. Timesharing typically provides the right to use only a specific week or weeks and lodging is limited to a specific unit. The Residence Club doesn’t sell “weeks of vacation”. Residence Club Owners have access to all the Club Villas with unlimited usage, in accordance with the Club’s reservation privileges and availability.</p>
                </div>
                </div>
                <div class="row-fluid">
                <div class="span5">
                <p><strong class="italics">What are the advantages of Private Residence Club ownership?</strong><br>
Residence Club ownership is an innovative concept provides the ultimate vacation experience and the benefits of real estate ownership while dramatically reducing the responsibilities and financial burdens associated with traditional ownership. The Palms Private Residence Club has been created for those who desire a worry-free Costa Rican home with hotel style services and amenities.</p>
                </div>
                <div class="span5">
                <p><strong class="italics">How do Residence Club owners reserve lodging?</strong><br>
The Club’s reservation privileges enable Owners to reserve vacations well in advance, while also accommodating more spontaneous visits. Each May, Owners reserve their most important vacation dates for the coming Club Year which starts in November. Additional Club vacations may be reserved throughout the year based on availability.
                </div>
                </div>
                <div class="row-fluid">
                <div class="span5">
                <p><strong class="italics">As a Residence Club Owner, how often can I vacation at the Club?</strong><br>
Owners can vacation at The Palms as often as they wish, in accordance with the Club’s generous and flexible reservation privileges. The Residence Club is operated much like a prestigious equity golf country club where there is no limit on use. If some owners visit their Club less often, other owners can visit more. As an Owner, you have the flexibility of reserving vacations well in advance as well as booking additional space available and short-notice vacations whenever available.</p>
                </div>
                <div class="span5">
                <p><strong class="italics">What if the number of Club Owners wishing to vacation at the Club exceeds the number of Villas available?</strong><br>
The Palms is designed to equitably allocate peak-period vacations in the unlikely event that demand for lodging may exceed supply. The Flex-Res System™ ensures that all Owners will have equal access to high-demand periods over the years. This system has proven to be fair and equitable for more than 18 years at other similar residence clubs.</p>
                </div>
                </div>
                <div class="row-fluid">
                <div class="span5">
                <p><strong class="italics">How many Residence Club ownerships will be sold?</strong><br>
The Club is limited to only ten owners per Club Villa. Residence Club ownership affords frequent, flexible and totally relaxing Costa Rican vacations.</p>
                </div>
                <div class="span5">
                <p><strong class="italics">Will Residence Club Owners always stay in the same Villa?</strong><br>
Not necessarily. To provide greater flexibility and availability, Owners have equal access to all Club Villas. Although the Villas are virtually identical, requests for specific Villas will be granted when possible.</p>
                </div>
                </div>
                <div class="row-fluid">
                <div class="span5">
                <p><strong class="italics">Can more than one family or individual share a single Residence Club ownership?</strong><br>
Yes. Multiple individuals or families can share a single Club Ownership; however, their reservation privileges are not increased beyond that of a single Club Ownership.</p>
                </div>
                <div class="span5">
                <p><strong class="italics">Do Residence Club Owners have guest privileges?</strong><br>
Yes. Owners may invite guests to stay with them and they may also send Unaccompanied Guests to enjoy their confirmed Planned Vacation reservations without a guest fee.</p>
                </div>
                </div>
                <div class="row-fluid">
                <div class="span5">
                <p><strong class="italics">Can Residence Club Owners reserve more than one Villa during the same time period?</strong><br>
Yes. Because Club Owners are not restricted to a particular Villa and can have multiple reservations confirmed at any one time, they can reserve more than one Villa at any given time, if sufficient Villas are available. This unique expandability benefit of residence club ownership enables Owners to host larger groups of family, friends and colleagues while ensuring enjoyment of their own private retreat.</p>
                </div>
                <div class="span5">
                <p></p>
                </div>
                </div>',
                'image' => 'thepalms_1-5.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 8,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'The Wonder of Playa Flamingo at Your Doorstep.',
                'subtitle' => null,
                'content' => '<p>The Palms’ villas have been beautifully designed to provide ultimate comfort for the entire family, while also showcasing the natural beauty of Playa Flamingo. Here you can retreat into nature and luxury at the same time.</p>',
                'image' => 'thepalms_2-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 8,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Area Map',
                'subtitle' => 'Guanacaste &amp; The Gold Coast',
                'content' => '<p>The Pacific or “Gold Coast” region of Guanacaste is home to many of the country’s most beautiful beaches, best surfing breaks and plentiful natural wonders. Playa Flamingo is renowned amongst locals as the most exclusive beach in the area, and is made for relaxation. For those days when you want a most robust itinerary, many area activities are just a short drive away, and the charming beach town of Flamingo is within walking distance of The Palms.</p>',
                'image' => 'thepalms_2-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 8,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Master Plan',
                'subtitle' => 'A Home for Your Memories',
                'content' => '<p>The Palms is distinguished by its prestigious and exclusive location, unique in the area, and its intimate, welcoming environment that offers you all the luxury you deserve. Having a smooth site on Playa Flamingo, the beach at The Palms is just a few steps from your gardens and you will be able to relax in comfort and privacy.</p>',
                'image' => 'thepalms_2-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 8,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Villa Features',
                'subtitle' => 'Elegant and Refined, Both Inside and Out',
                'content' => '<p>Each oceanfront villa is magnificently appointed with luxuriously comfortable furnishings that complement the natural surroundings, from floor-to-ceiling glass doors offering breathtaking sunset views, to ultra-plush bedding, richly colored native hardwood floors and inviting seating areas for your family to gather both inside and out.</p>
                <p><strong>The villas include:</strong></p>
                <div class="row-fluid">
                    <div class="span5">
                        <ul>
                            <li>Two sumptuously furnished bedrooms, each with its own luxe master bathroom</li>
                            <li>Spacious, fully- equipped kitchen with granite countertops, Sub-Zero and Viking appliances</li>
                            <li>Comfortable outdoor living terrace and upper level balcony, perfect for entertaining</li>
                        </ul>
                    </div>
                    <div class="span5">
                        <ul>
                            <li>Exquisite marble and solid hardwood flooring</li>
                            <li>Vaulted ceilings with crown molding, natural native materials and old-world craftsmanship</li>
                            <li>Wireless Internet (WiFi) access and global Vonage phone service</li>
                            <li>Panoramic ocean views with magnificent sunsets</li>
                        </ul>
                    </div>
                </div>',
                'image' => 'thepalms_2-4.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 9,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'A Private Beachfront Escape - All Your Own.',
                'subtitle' => null,
                'content' => '<p>Located in the heart of Guanacaste’s Gold Coast, The Palms Private Residence Club offers the rare opportunity to bask in the rich culture of sun, soft white sand, surf and nature in comfort, luxury and privacy. As you will see at The Palms, gracious, carefree living is as easy and relaxing as the Pacific waves of Playa Flamingo outside your door.</p>',
                'image' => 'thepalms_3-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 9,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Unmatched Amenities',
                'subtitle' => 'Relaxation &amp; Refinement',
                'content' => '<p>The moment you are greeted at the private gate of your Playa Flamingo retreat, you know you have arrived. Settle in to the soothing rhythm of the Pacific Ocean, and leave your cares behind as you step into a world where elegant amenities and exquisite service merge to surround you with total comfort, convenience and serenity.</p>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Location, Location, Location!</strong><br>
                        Your private beach escape is directly on one of Costa Rica’s most scenic beaches, Playa Flamingo. With warm water year round, soft white sand and a gentle slope, it is ideal for swimming, boogie-boarding, bodysurfing or simply relaxing in the sun.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Grilling and Entertainment Area</strong><br>
                        Your private beach escape is directly on one of Costa Rica’s most scenic beaches, Playa Flamingo. With warm water year round, soft white sand and a gentle slope, it is ideal for swimming, boogie-boarding, bodysurfing or simply relaxing in the sun.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Beach Amenities</strong><br>
                        Your beach is staffed and guarded to enhance privacy, and you’ll find signature umbrellas, luxurious chaises, side tables, beach towels, sand toys, kayaks, boogie boards and other water sports equipment available to use everyday.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Pristine Manicured Gardens</strong><br>
                        Start your day with an exhilarating walk through the gardens and down the beach. Adorned with an array of exotic plants, beautiful tropical flowers and stately Royal palms, these lush gardens attract butterflies and dozens of tropical bird species – just as nature intended.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Tropical Spa Pool and Infinity-Edge Swimming Pool</strong><br>
                        The Club’s tropical spa pool flows gently into a spectacular infinity-edge pool that seemingly pours into the warm, blue waters of the Pacific Ocean.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Poolside Bar</strong><br>
                        Quench your thirst with your favorite beverage, our signature iced tea, or try our mixologist’s newest tropical concoction from the Club’s poolside bar.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Fitness Center</strong><br>
                        Maintain your fitness program in the Club’s fully-equipped fitness center, with cardio and weights, overlooking the ocean.
                        </p>
                    </div>
                    <div class="span5">
                        <p>&nbsp;</p>
                    </div>
                </div>',
                'image' => 'thepalms_3-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 9,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Hospitality Services',
                'subtitle' => 'Attention to Detail. And to Your Every Wish.',
                'content' => '<p>When here, Club Owners enjoy comfort and relaxation while our staff attends to every need.</p>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Private, Gated Community</strong><br>
                        The Palms Private Residence Club is within a gated compound where your privacy and security is ensured by the Club’s 24-hour security.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Massage Services</strong><br>
                        The Club concierge will arrange in-Villa massage services to maximize your enjoyment and relaxation.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Private Staff</strong><br>
                        Your professional, friendly, attentive Club staff ensures that every visit is fun-filled and worry-free.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Bellman Service</strong><br>
                        Club staff are available to assist you with luggage upon arrival and departure and also care for your Owner storage.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Concierge</strong><br>
                        The Club concierge will provide the level of personal attention you deserve and expect from the finest hotels, to enrich each and every one of your vacations.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Pre-arrival Grocery Shopping Service</strong><br>
                        At your request, your favorite foods and beverages will be purchased on your account and placed in your spacious kitchen just prior to your arrival.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Daily Housekeeping</strong><br>
                        Club owners receive daily housekeeping services consisting of bath linen replenishment, bed-making and trash removal as well as a mid-week linen change. A total cleaning of every Villa is completed prior to arrival and immediately after departure.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Clothing and Equipment Storage</strong><br>
                        To free you from the burden of transporting vacation clothing and beach gear, your personal items may be stored in a secure, climate-controlled area, awaiting your next visit. Just prior to your arrival, your belongings will be placed in your Club Villa.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Airport Transportation</strong><br>
                        While you may prefer the scenic drive from San José or the mobility to explore the area with a rental car, the Club will arrange a personal welcome and transportation from either Liberia or Tamarindo airports for those arriving by air.
                        </p>
                    </div>
                    <div class="span5">
                        <p>&nbsp;</p>
                    </div>
                </div>',
                'image' => 'thepalms_3-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 9,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Exhilarating Activities',
                'subtitle' => 'Pairing Good Living with Great Adventures',
                'content' => '<p>Whether you seek a rare butterfly, a perfect par shot or a battle with a mighty marlin, any and all excursions can be pre-arranged to ensure that you fully experience the area’s multitude of delights. A multi-lingual driver and car are available to ensure that you get the most of your tours and activities. Here are just a few of the area’s highlights:</p>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Deep Sea Fising</strong><br>
                        Tarpon, marlin, sailfish, dorado, mahi mahi and tuna call the Gold Coast home – charter your own boat or go with a group and enjoy world-class fishing! Full and half day trips depart from the nearby Flamingo marina.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Canopy Tours</strong><br>
                        Hook up your harness and soar with the birds and monkeys above the tree line. The Congo Trail will pick you up at The Palms in a jungle jeep and take you to the zip lines. At the end of the tour, don’t miss the chance hold and pet the monkeys and serpents!
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">White Water Rafting</strong><br>
                        Enjoy the rip-roaring rapids and spectacular scenery as you navigate your way through inner Costa Rica on the Corobici, Colorado or Tenorio rivers.
                        </p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Surfing</strong><br>
                        Your concierge will deliver you to your beach of choice, you hit the waves! Optimal surfing conditions occur from December through July, and surfing lessons are available for the novice rider.
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <p><strong class="italics">Golf</strong><br>
                        The Gold Coast offers world class golf courses including the 7,300-yard, par 72 masterpiece Hacienda Pinilla golf course created by Mike Young. When in residence at The Palms, owners enjoy a corporate membership and discounted greens fees at Hacienda Pinilla.
                        </p>
                        <p>The par 71 Garr de Leon course at Reserva Conchal is also nearby and was designed in the classic tradition by Robert Trent Jones II, accentuated with lakes and ravines and meandering through the rolling terrain with breathtaking ocean views.</p>
                    </div>
                    <div class="span5">
                        <p><strong class="italics">Scuba and Snorkeling Trips</strong><br>
                        An average year round water temperature of 80 degrees make exploring the Gold Coast’s underwater wonderland irresistible. Dolphins, sea turtles and whales (in season) can be viewed up close and popular dive sites include the Catalina Islands, Danta and Pan de Azucar, Coco Beaches, Blanca and Virador.
                        </p>
                    </div>
                </div>',
                'image' => 'thepalms_3-4.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 10,
                'header_bool' => 1,
                'order' => 0,
                'title' => null,
                'subtitle' => null,
                'content' => null,
                'image' => null,
                'video' => null
                ],
            [   'package_tab_id' => 17,
                'header_bool' => 1,
                'order' => 0,
                'title' => '<em style="font-size:34px;">"Welcome to Grand Isle Resort &amp; Spa!"</em>',
                'subtitle' => null,
                'content' => '<p>Great Exuma and its Cays are the most exotic of the Bahamas Out Islands, a collection of tiny jewel-like islands set in the most beautiful mosaic of blues you\'ve ever seen. World-renowned for its magnificent coral reefs, colorful sea life, and powdery white-sand beaches, Great Exuma offers the ultimate Caribbean experience.</p>
<p>The largest island of the 365 cays comprised within the Exuma chain, Great Exuma has been named as one of the top 10 places to visit in the Caribbean and has always been the best kept secret of savvy tropical vacationers.</p>',
                'image' => null,
                'video' => '<iframe src="//player.vimeo.com/video/87060443?title=0&amp;byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'
                ],
            [   'package_tab_id' => 18,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Your Privileges',
                'subtitle' => null,
                'content' => '<p>Brick and mortar is only the start.  The amenities and service provided to owners and their guests at Grand Isle is among the best in the world.</p>',
                'image' => 'grandisle_1-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 18,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Resort Accolades',
                'subtitle' => 'Continually Noticed, Continually Acclaimed',
                'content' => '  <div class="row-fluid">
                                    <div class="span7">
                                    <p><strong>2013 Traveler’s Choice Awards</strong>
                                    <ul>
                                    <li>Ranked 3rd best hotel in Caribbean out of 25</li>
                                    <li>Ranked the top resort in the Bahamas</li>
                                    </ul></p>
                                    <p>The Travelers’ Choice Award is the highest honor a hotel can receive from the TripAdvisor community. It is based on reviews and opinions of millions of travelers, and is awarded only to a select and distinguished group of hotels.</p>
                                    <p><strong>2012 Travelers’ Choice Awards</strong>
                                    <ul>
                                    <li>Top 25 Luxury Hotels in the Caribbean</li>
                                    <li>Top 25 Relaxation & Spa Hotels in the Caribbean</li>
                                    </ul></p>
                                    <p><strong>2012 TripAdvisor Certificate of Excellence Award</strong></p>
                                    <p>This accolade honors hospitality excellence and is given only to establishments that consistently achieve outstanding traveler reviews on TripAdvisor. Only 10% of accommodations listed on TripAdvisor receive this prestigious award. To qualify, Grand Isle maintained an overall rating of four or higher, out of five, as reviewed by travelers on TripAdvisor.</p>
                                    <p><strong>2012 Four-Diamond Rating from AAA</strong></p>
                                    <p>Grand Isle Resort attained the coveted AAA Four-Diamond Rating, ranking Grand Isle Resort & Spa as a premier establishment esteemed by AAA professional inspectors, the hospitality industry, and over 53 million AAA/CAA members. Fewer than 4.5% of more than 31,000 properties approved by AAA achieve this prestigious distinction!</p>
                                    </div>
                                    <div class="span3">
                                        <div class="row-fluid">
                                            <div class="span10">
                                                <p style="text-align:center"><img src="/uploads/images/2012_travelers_choice.png"></p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span10">
                                                <p style="text-align:center"><img src="/uploads/images/2013_travelers_choice.jpg"></p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span10">
                                                <p style="text-align:center"><img src="/uploads/images/Certificate-of-Excellence.jpg"></p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span10">
                                                <p style="text-align:center"><img src="/uploads/images/aaa_four_diamond_award.jpg"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>',
                'image' => 'grandisle_1-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 18,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Resort Amenities',
                'subtitle' => '',
                'content' => '  <h4>Sea Star Spa</h4>
                                <p>Revitalize mind, body and spirit at the Sea Star Spa, an oasis of seclusion and peace offering luxurious treatments and sublime skin care in a dreamlike sanctuary. With everything from sea salt therapies, organic facials, massages, manicure/pedicure, waxing and makeup applications; you will certainly love the variety of revitalizing treatments available. The spa center has three private rooms, one specifically designed to accommodate couples.</p>
                                <p>Kids are also welcome to a healthy dose of pampering with mini-manicure/pedicures or  kiddie facials. Spa appointments are available seven days a week from 9am to 5pm. You can also book treatments and enjoy soothing spa procedures in the privacy of your own villa.</p>
                                <h4>The Palapa Grill</h4>
                                <p>Celebrate the bold flavors and traditions of the Bahamas poolside at the Palapa Grill where fresh seafood is complemented by the ocean breeze and our tropical outdoor setting. From Caribbean jerk-style seafood to Bahamian barbecue, we offer a real taste of the islands coupled with American style cuisine. Take in the sun over breakfast or lunch and enjoy dinner under the stars. You can also visit our full service bar throughout the day for a tempting selection of tropical libations.</p>
                                <h4>The Infinity Pool</h4>
                                <p>Gaze at Emerald Bay and watch the sunset while relaxing on the infinities edge. This zen-like feature has become a destination for many who crave an infinity pool with a view. The Palapa Grill is at your service while you take in the sun or relax in the shade. From snacks and cocktails to entree service, the Grill’s menu is available poolside. </p>
                                <p>*Children are welcome but require supervision. </p>
                                <h4>Fitness Center</h4>
                                <p>Grand Isle features a state of the art fitness center outfitted with Magnum Fitness Systems equipment including free weights, strength training and cardiovascular machines.</p>
                                <p>Maximize your gym-time with a surround sound audio system, HD TV and complimentary towels.</p>',
                'image' => 'grandisle_1-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 18,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Villa Features',
                'subtitle' => null,
                'content' => '  <p>Each villa is fully furnished and outfitted with every detail an owner could ask for without the hassle of having to ship anything to the island.</p> 
                                <p><strong>Amenities come standard with every villa...</strong>
                                <ul>
                                <li>Cable TV in Living area and Bedrooms</li>
                                <li>56-Inch HD TV with DVD Player</li>
                                <li>Wireless Internet Access</li>
                                <li>Electricity/Water/Sewer</li>
                                <li>Central air conditioning</li>
                                <li>Fully Appointed Gourmet Kitchen with utensils and flatware</li>
                                <li>Sub-Zero Refrigerator</li>
                                <li>Dacor® Oven & Stovetop</li>
                                <li>Fisher & Paykel Dishwasher</li>
                                <li>Coffee Maker, blender and food processor</li>
                                <li>Full Size Bosch Washer & Dryer</li>
                                </ul>',
                'image' => 'grandisle_1-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 18,
                'header_bool' => 0,
                'order' => 4,
                'title' => 'At Your Service',
                'subtitle' => null,
                'content' => '  <p>Grand Isle Resort and Spa boasts the most accommodating staff on the island. The front desk team runs a tight ship to insure every aspect of your stay is tailored to fit your needs. From our grounds staff that maintains the remarkable landscape to the housekeeping that is available for your villa upon your request; nothing is overlooked. </p>
                                <h4>In Villa Dining</h4>
                                <p>Dining in? For those who choose to entertain in their villa, the chefs are at your service to accommodate you. Whether it’s a romantic dinner for two or entertaining friends and family, you can enjoy the many flavors Grand Isle has to offer in the privacy of your own home.</p>
                                <h4>Event Catering</h4>
                                <p>The Palapa Grill can also cater to special events. From celebrations to weddings, our catering manager will apply all his creative skills to prepare a delicious menu that will certainly appeal to the sophisticated tastes of our international visitors.</p>
                                <h4>Housekeeping Services</h4>
                                <p>Housekeeping at Grand Isle is on a reserve basis which many owners find is ideal. This gives the owner and renter the power to decide when their residence needs attending to. A simple call to the concierge desk will set up your service that works with your schedule which adds to its convenience.</p>
                                <h4>Concierge Service</h4>
                                <p>Whether you need dinner reservations, advice on local activities or a special request to enhance your stay, the concierge staff can oblige daily from 8 am to 8 pm (EST) to handle all of your questions and ensure your stay at Grand Isle exceeds your expectations. Some of the many requests are for...</p>
                                <ul>
                                <li>Dinner Reservations</li>
                                <li>Recommendations & Reservations for Excursions</li>
                                <li>Requests for Special Events (Such as Bonfires and In-Villa Dining)</li>
                                <li>Information on Activities and Local Entertainment</li>
                                <li>Grocery Service to Stock Kitchen Upon Arrival</li>
                                <li>Chauffeur Services</li>
                                </ul>',
                'image' => 'grandisle_1-4.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 18,
                'header_bool' => 0,
                'order' => 5,
                'title' => 'Explore The Bahamas',
                'subtitle' => null,
                'content' => '  <h4>Water Sports and Beach Fun</h4>
                                <p>The white sand beach and blue sea are just a few steps away from your villa’s doorstep. If an afternoon spent snorkeling or building a sand castle is your typical day in the tropics, Grand Isle provides the tools. From boogie boards to volleyballs, the staff can assist you in building a memorable day in the sun.</p>
                                <p>Kayaks are parked at the entryway to the beach awaiting your journey adrift crystal clear water.</p>
                                <p>Or let the wind take the wheel. The mix of trade winds and frontal winds across Emerald Bay has made this area a major destinations in the Bahamas for kite surfers. Grand Isle doesn’t provide the equipment but welcomes those who bring their own.</p>
                                <p>When the sun sets the fun begins. Bonfire celebrations happen on the beach once a week and available for special occasions, upon request.</p>
                                <h4>Championship Golf Course</h4>
                                <p>Grand Isle’s neighbor Sandals Resort hosts the expansive 18-hole championship golf course, designed by golf legend Greg Norman. This award winning course is par 72 and covered in paspalum grass which makes it a fabulous play area for golf enthusiasts.</p>
                                <p>Experience the dramatic fairways and stunning rocky peninsula while overlooking the Exuma blue waters. Playing golf in this fantastic ocean setting with spectacular panoramic views certainly will be thrilling for any golfer. The golf cart that comes with your villa purchase will usher you through the 7,200 yard course.</p>
                                <h4>Meet Bahamas Wildlife</h4>
                                <p>Come face to face with the Bahamas wildlife, a vibrant tropical archipelago. Feed the  iguanas near Guana Cay, swim with the friendly nurse sharks at Compass Cay, hand out treats to the stingrays at the Chat-N-Chill on Stocking Island...and don’t forget to swim with the pigs. People come from near and far to swim with the pigs on Major Cay. Grand Isle staff can arrange a boat excursion to visit them as well as venture through the hidden caves and remote sandbars.</p>
                                <h4>Fishing and Boating Excursions</h4>
                                <p>Great Exuma is all about the water. You’ll experience the island’s treasures at their best as you sail the stunning Exuma Cays and take part in world class sports fishing from one of our charter fishing boats. Experience bone-fishing in the shallow water flats, deep sea fishing, reef and spearfishing - it’s all here. There are half and full day fishing charters that offer experienced sports fishing guides and all the gear you’ll need for a day on the water. Packages can be tailored for different levels and interests. The bonus is taking your catch back to Grand Isle for the chef to prepare or for you or to cook in your villa.</p>
                                <p>Or charter the boat for an easy-going cruise to see the sites. Many celebrities have purchased their own plots in the Exuma chain of over 360 islands. Fly past villa covered islands owned by Johnny Depp, Eddie Murphy, David Copperfield, Tyler Perry, Tim McGraw and Faith Hill. See for yourself the beautiful grotto filmed for the movie Thunderball and the sandbar where Pirates of the Caribbean was shot.</p> ',
                'image' => 'grandisle_1-5.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 19,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Pricing',
                'subtitle' => null,
                'content' => '<p>A limited selection of beautifully designed and completely furnished villas are still available at Grand Isle. Below you will see update availability for each villa category in addition to commonly asked questions.</p>',
                'image' => 'grandisle_5-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 19,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Available Villas &amp; Floorplans',
                'subtitle' => null,
                'content' => '  <p>Please contact Stefani in our real estate office regarding projected annual expenses for each villa category.</p>
                                <div class="accordion" id="floorplan-accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#floorplan-accordion" href="#floorplan-1"><h3><i class="icon-collapse"></i>&nbsp;&nbsp;Arawak - 1 bed, 1 bath</h3></a>
                                        </div>
                                        <div id="floorplan-1" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row-fluid gallery">
                                                    <div class="span5">
                                                        <p><a href="/uploads/images/arawak01.jpg"><img src="/uploads/images/arawak01.jpg"></a></p>
                                                    </div>
                                                    <div class="span5">
                                                        <p><a href="/uploads/images/arawak02.jpg"><img src="/uploads/images/arawak02.jpg"></a></p>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span5 gallery">
                                                        <p style="text-align:center"><a href="/uploads/images/grandisle_floorplans_02.jpg" target="_blank"><img src="/uploads/images/grandisle_floorplans_02.jpg"></a></p>
                                                    </div>
                                                    <div class="span5">
                                                        <h4>Availablity:</h4>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Villa #</th>
                                                                    <th>View</th>
                                                                    <th>Price *</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>6104</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$500K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>6201</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$520K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>6202</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$520K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>6204</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>Sold</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>1522</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$595K</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:left">* Prices subject to change</p>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/invitation"><i class="icon-white icon-envelope"></i> Request a Visit</a></p>
                                                        <h4>Total Square Footage:</h4>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Air Conditioned interior living space</td>
                                                                    <td>1,040 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Average Terrace</td>
                                                                    <td>125 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Golf cart garage</td>
                                                                    <td>115 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-alight:right"><strong>TOTAL</strong></td>
                                                                    <td><strong>1,280 sq. ft.</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/uploads/downloads/property-arawak.pdf" target="_blank"><i class="icon-white icon-download"></i> View or Print Complete Brochure</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group" id="floorplan_2">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle scrollAccordion" data-scroll="#floorplan_2" data-toggle="collapse" data-parent="#floorplan-accordion" href="#floorplan-2"><h3><i class="icon-collapse"></i>&nbsp;&nbsp;Bahia Mar - 2 bed, 2.5 bath</h3></a>
                                        </div>
                                        <div id="floorplan-2" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <div class="gallery">
                                                    <div class="row-fluid gallery">
                                                        <div class="span5">
                                                            <p><a href="/uploads/images/bahiamar01.jpg"><img src="/uploads/images/bahiamar01.jpg"></a></p>
                                                        </div>
                                                        <div class="span5">
                                                            <p><a href="/uploads/images/bahiamar02.jpg"><img src="/uploads/images/bahiamar02.jpg"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span10">
                                                            <p style="text-align:center"><a href="/uploads/images/grandisle_floorplans_03.jpg" target="_blank"><img src="/uploads/images/grandisle_floorplans_03.jpg"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span5">
                                                        <h4>Availablity:</h4>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Villa #</th>
                                                                    <th>View</th>
                                                                    <th>Price *</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>1102</strong></td>
                                                                    <td>Garden View</td>
                                                                    <td>$695K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>9102</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td style="color:#D00">SOLD</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>3102</strong></td>
                                                                    <td>Garden View</td>
                                                                    <td>$650K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>1113</strong></td>
                                                                    <td>Ocean Front</td>
                                                                    <td>$850K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>8102</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>Contract Signed</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:left">* Prices subject to change</p>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/invitation"><i class="icon-white icon-envelope"></i> Request a Visit</a></p>
                                                    </div>
                                                    <div class="span5">
                                                        <h4>Total Square Footage:</h4>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Air Conditioned interior living space</td>
                                                                    <td>1,895 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Average Terrace</td>
                                                                    <td>305 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Golf cart garage / storage</td>
                                                                    <td>80 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-alight:right"><strong>TOTAL</strong></td>
                                                                    <td><strong>2,280 sq. ft.</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/uploads/downloads/property-bahia-mar.pdf" target="_blank"><i class="icon-white icon-download"></i> View or Print Complete Brochure</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#floorplan-accordion" href="#floorplan-3"><h3><i class="icon-collapse"></i>&nbsp;&nbsp;Lucayan - 3 bed, 3 bath</h3></a>
                                        </div>
                                        <div id="floorplan-3" class="accordion-body collapse">
                                            <div class="accordion-inner ">
                                                <div class="gallery">
                                                <div class="row-fluid">
                                                    <div class="span5">
                                                        <p><a href="/uploads/images/lucayan01.jpg"><img src="/uploads/images/lucayan01.jpg"></a></p>
                                                    </div>
                                                    <div class="span5">
                                                        <p><a href="/uploads/images/lucayan02.jpg"><img src="/uploads/images/lucayan02.jpg"></a></p>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span10">
                                                        <p style="text-align:center"><a href="/uploads/images/grandisle_floorplans_04.jpg" target="_blank"><img src="/uploads/images/grandisle_floorplans_04.jpg"></a></p>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span5">
                                                        <h4>Availablity:</h4>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Villa #</th>
                                                                    <th>View</th>
                                                                    <th>Price *</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>9104</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td style="color:#D00">SOLD</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>5104</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$879K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>7104</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$895K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>9101</strong></td>
                                                                    <td>Ocean View</td>
                                                                    <td>$980K</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>1014</strong></td>
                                                                    <td>Ocean Front</td>
                                                                    <td>$1.125M</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>1111</strong></td>
                                                                    <td>Ocean Front</td>
                                                                    <td>$1.195M</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:left">* Prices subject to change</p>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/invitation"><i class="icon-white icon-envelope"></i> Request a Visit</a></p>
                                                    </div>
                                                    <div class="span5">
                                                        <h4>Total Square Footage:</h4>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Air Conditioned interior living space</td>
                                                                    <td>2,145 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Average Terrace</td>
                                                                    <td>470 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Golf cart garage</td>
                                                                    <td>80 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-alight:right"><strong>TOTAL</strong></td>
                                                                    <td><strong>2,695 sq. ft.</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/uploads/downloads/property-lucayan.pdf" target="_blank"><i class="icon-white icon-download"></i> View or Print Complete Brochure</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#floorplan-accordion" href="#floorplan-4"><h3><i class="icon-collapse"></i>&nbsp;&nbsp;Grand Villa - 2 bed penthouse, 2.5 bath</h3></a>
                                        </div>
                                        <div id="floorplan-4" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <div class="row-fluid">
                                                    <div class="gallery">
                                                        <div class="row-fluid">
                                                            <div class="span5">
                                                                <p><a href="/uploads/images/2br_entrance.jpg"><img src="/uploads/images/2br_entrance.jpg"></a></p>
                                                            </div>
                                                            <div class="span5">
                                                                <p><a href="/uploads/images/2br_living.jpg"><img src="/uploads/images/2br_living.jpg"></a></p>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span5">
                                                                <p><a href="/uploads/images/2br_master.jpg"><img src="/uploads/images/2br_master.jpg"></a></p>
                                                            </div>
                                                            <div class="span5">
                                                                <p><a href="/uploads/images/2br_sunset.jpg"><img src="/uploads/images/2br_sunset.jpg"></a></p>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span5">
                                                                <p style="text-align:center"><a href="/uploads/images/grandisle_floorplans_05.jpg" target="_blank"><img src="/uploads/images/grandisle_floorplans_05.jpg"></a></p>
                                                            </div>
                                                            <div class="span5">
                                                                <h4>Availablity:</h4>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Villa #</th>
                                                                            <th>View</th>
                                                                            <th>Price *</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>7302</td>
                                                                            <td>360°</td>
                                                                            <td>$1.495M</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p style="text-align:left">* Prices subject to change</p>
                                                                <p style="text-align:right"><a class="btn btn-info btn-large" href="/invitation"><i class="icon-white icon-envelope"></i> Request a Visit</a></p>
                                                                <h4>Total Square Footage:</h4>
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Air Conditioned interior living space</td>
                                                                            <td>2,030 sq. ft.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Average Terrace</td>
                                                                            <td>460 sq. ft.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Golf cart garage</td>
                                                                            <td>80 sq. ft.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="text-alight:right"><strong>TOTAL</strong></td>
                                                                            <td><strong>2,570 sq. ft.</strong></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p style="text-align:right"><a class="btn btn-info btn-large" href="/uploads/downloads/property-grand-villa.pdf" target="_blank"><i class="icon-white icon-download"></i> View or Print Complete Brochure</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#floorplan-accordion" href="#floorplan-5"><h3><i class="icon-collapse"></i>&nbsp;&nbsp;Grand Penthouse - 4 bed penthouse, 4.5 bath</h3></a>
                                        </div>
                                        <div id="floorplan-5" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <div class="gallery">
                                                    <div class="row-fluid ">
                                                        <div class="span5">
                                                            <p><a href="/uploads/images/grandpenthouse01.jpg"><img src="/uploads/images/grandpenthouse01.jpg"></a></p>
                                                        </div>
                                                        <div class="span5">
                                                            <p><a href="/uploads/images/grandpenthouse02.jpg"><img src="/uploads/images/grandpenthouse02.jpg"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span10">
                                                            <p style="text-align:center"><a href="/uploads/images/grandisle_floorplans_01.jpg" target="_blank"><img src="/uploads/images/grandisle_floorplans_01.jpg"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span5">
                                                        <h4>Availablity:</h4>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Villa #</th>
                                                                    <th>View</th>
                                                                    <th>Price *</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>9301</strong></td>
                                                                    <td>360°</td>
                                                                    <td style="color:#D00">SOLD</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:left">* Prices subject to change</p>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/invitation"><i class="icon-white icon-envelope"></i> Request a Visit</a></p>
                                                    </div>
                                                    <div class="span5">
                                                        <h4>Total Square Footage:</h4>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Air Conditioned interior living space</td>
                                                                    <td>4,090 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Terrace</td>
                                                                    <td>1,035 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Golf cart garage / storage</td>
                                                                    <td>80 sq. ft.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-alight:right"><strong>TOTAL</strong></td>
                                                                    <td><strong>5,205 sq. ft.</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="text-align:right"><a class="btn btn-info btn-large" href="/uploads/downloads/property-grand-penthouse_2.pdf" target="_blank"><i class="icon-white icon-download"></i> View or Print Complete Brochure</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ',
                'image' => 'grandisle_2-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 20,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Dollars &amp; Sense',
                'subtitle' => null,
                'content' => '<p>The HOA board at Grand Isle is comprised of leaders in their respective industries that have been hands-on since day one and continue to proudly and effectively serve on the board. Every detail meets their scrutiny and Grand Isle has become an even more remarkable resort for it.</p>',
                'image' => 'grandisle_3-0-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 20,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Annual Expenses',
                'subtitle' => null,
                'content' => '  <h4>Home Owners Association</h4>

                                <p>HOA fees are charged as a quarterly assessment AND include the following: 
                                <ul>
                                <li>Utilities for common areas only. Note: Each villa\'s utilities are billed separately. (electricity, water, cable, high-speed WIFI internet)</li>
                                <li>Operations (spa, landscape, maintenance, 24-hour security, concierge, towel service, restaurant, villa marketing, reception, etc.)</li>
                                <li>Property and Liability only for common areas and for the exterior of villas. Content and other liability is per each villa owner.</li>
                                <li>Work orders are paid separately (repairs and maintenance issues)</li>
                                <li>Elevator maintenance fee (penthouse owners only)</li>
                                </ul></p>
                                <p>HOA fees are re-evaluated each year by the Directors, in participation with DCM, and revised based on actual experience. Once established for the calendar year, HOA fees remain constant for that year and are billed quarterly 30 days prior to the first day of each quarter. </p>
                                <p>The board has made great strides to insure the property improves every year, and the resort closes annually for one month in October to be structurally detailed and to allow the board to meet and make financial and physical decisions to further increase the value of the resort.</p>
                                <p>Current rates are outlined on the Villa Assessment Rates document upon request from the sales representative.</p>

                                <h4>Property Taxes</h4>

                                <p>Actual real property tax depends on appraised value and whether or not the villa is participating in the Hotel Rental Program
                                <ul>
                                <li>Villa in Rental Program: Tax 0%</li>
                                <li>Villa Outside of Program: First $500,000 Tax at 1%; Above $500,000 Tax at 2%</li>
                                </ul>
                                As an example, a villa selling for $1.5 million would be subject to annual property tax of $25,000 if it is not part of the rental pool.</p>',
                'image' => 'grandisle_3-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 20,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Villa Rental Program',
                'subtitle' => null,
                'content' => '  <p>The Hotel Rental Program is voluntary – your villa does not have to be part of the Hotel Rental Program. However, there are several key advantages to participating in the program. In addition to receiving recurring rental revenue, you will also be exempt from paying real property tax. The Bahamas Hotel Encouragement Act provides a real property tax exemption for qualified investments in order to encourage tourism. Grand Isle has been approved for this exemption and all villas in our program are eligible regardless of the level of rental revenue created. You will not receive this exemption if your villa is not part of the Hotel Rental Program.</p>
                                <p>For those Owners in the Hotel Rental Program, upkeep of your villa is year-round whether occupied or not, and marketing and promotion of its availability are taken care of for you.</p>
                                <p>If the Hotel Rental Program or other operations do not cover costs due to revenue shortfalls, owners will be assessed. Since the homeowners get the benefit of the upside, they also have the responsibility of funding unforeseen costs. Should the property incur shortfalls, the amount will be communicated to all villa Owners via billing and assessed equally.</p>
                                <p>The Rental Program is administered by GCR and DCM. The rental revenue is distributed between the Owners, Resort and DCM. This arrangement serves as compensation to DCM for their services while creating incentive to increase rental revenue for the Owners.</p>',
                'image' => 'grandisle_3-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 20,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Frequently Asked Questions',
                'subtitle' => null,
                'content' => '  <div class="accordion" id="faq-accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-1">
                                            What is the management structure of Grand Isle and who runs the resort?
                                            </a>
                                        </div>
                                        <div id="collapse-1" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <p>Grand Isle Resort & Spa Villa Owners have ultimate control of the resort through their Board of Directors. The HOA has a contractual relationship with DCM Hospitality (DCM), a boutique resort and hotel management company located in Dallas, TX, which provides the back office support to oversee and coordinate day-to-day operations and to handle many of the business functions. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-2">
                                            What is the financial condition of the resort?
                                            </a>
                                        </div>
                                        <div id="collapse-2" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>Grand Isle is completely debt free with no debt service obligations. All obligations with our vendors are kept on a “current basis.” The villas are individually owned and expenses are billed to each owner in quarterly assessments. The hotel operation is funded through a combination of rental income from the villas, as well as revenue from a range of services.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-4">
                                            Who owns the common areas such as The Palapa Grill, the reception area and The SeaStar Spa?
                                            </a>
                                        </div>
                                        <div id="collapse-4" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>Ownership of all common areas is being transferred to the HOA which is solely comprised of individual villa Owners. There are no outside entities that will be involved with ownership of any common areas. This arrangement ensures that Grand Isle villa Owners have complete control of every aspect of the resort.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-5">
                                            What level of appreciation (return on my investment) is realistic to anticipate?
                                            </a>
                                        </div>
                                        <div id="collapse-5" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>While it is difficult to predict future values, investors making a purchase at this time have many positive influences working in their favor. Of 78 villas in total, the first 47 were purchased from the original developer by 2008 and represented combined investments in excess of $100 million. Since that time, the remaining 31 villas have been purchased by a private investor. By working together, all of the Owners have contributed to improving Grand Isle and added significant value to the resort. </p>
                                                <p>Major enhancements to the infrastructure have already been completed. These include an expanded dining venue that accommodates 80 people in a single seating, a brand new kitchen, a 9,500 square foot maintenance building to house the laundry, refrigerated food storage, parts inventory and a repair shop. </p>
                                                <p>In addition, ownership of all common areas including the restaurant, reception building and spa are being transferred to the HOA. Owners have already funded these projects and Grand Isle remains debt free. </p>
                                                <p>An investor making a purchase today inherits benefits and assets far in excess of the purchase price of a villa. Grand Isle is a complete resort with the staffing, infrastructure and management required to operate at a 4-Star level. Rental rates, owner distribution and rental occupancy continue to increase year after year. Specifically, occupancy has shown a double digit increase each year.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-6">
                                            Are the Grand Isle facilities open to the public?
                                            </a>
                                        </div>
                                        <div id="collapse-6" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>The Palapa Grill are open to the public. However, the pool area is reserved for Owners, hotel guests and permitted invitees only.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-7">
                                            Is there any agreement with Sandals to use their facilities?
                                            </a>
                                        </div>
                                        <div id="collapse-7" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>Day passes for unlimited access to Sandals facilities are available. The golf course and marina facilities are open to the public. However, the restaurants and other facilities are not open to walk-in guests without a pre-purchased day or evening pass. You can get more information about these passes and facilities from the Concierge at Grand Isle.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-8">
                                            What revenue sources exist in addition to rental revenue?
                                            </a>
                                        </div>
                                        <div id="collapse-8" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>In addition to villa rental revenue, which is reviewed in detail in the Dollars and Sense tab in this Package, there are a number of other revenue sources. They include revenue from such items as food & beverage, spa and catering. These revenue sources are handled differently than room rental revenue and are not distributed to the Owners each quarter. They remain with GCR and contribute to overall profitability.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-9">
                                            How often would my villa be rented out? 
                                            </a>
                                        </div>
                                        <div id="collapse-9" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>Many Owners are interested in maximizing their revenue while others simply want to enjoy Grand Isle during “high season” – December through May.  There are two categories of occupancy rates to consider. Paying guests are represented as “Transient Occupancy“ and provide rental income for the resort. “Total Occupancy“ represents the combination of Transient Occupancy and Owner Occupancy.  Transient Occupancy has increased significantly in 2013 as a result of enhanced marketing activities and is approaching 25%. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-10">
                                            How much time can I spend per year at my villa while remaining in the rental pool?
                                            </a>
                                        </div>
                                        <div id="collapse-10" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>The Bahamian Government limits an Owner to 90 days of in-residence visits per year if they participate in the Hotel Rental program. Most Owners don’t ever reach the maximum, and the resort is closed for 30 days each Fall for maintenance and training.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-11">
                                            Can I advertise my own villa on rental sites such as Home Away or VRBO?
                                            </a>
                                        </div>
                                        <div id="collapse-11" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>No reservations are handled solely by DCM for GCR and assigned on a rotating basis to ensure that all Owners are treated fairly. However, rental guests will stipulate the number of bedrooms desired and a location preference, such as garden view, ocean view and oceanfront. Given these preferences, DCM matches requests to available villas on a rotating basis.</p>
                                                <p>An active, comprehensive marketing program is in place at Grand Isle that continues to increase rental activity and gain recognition each month. The website tells our story about activities, special offers, and packages at Grand Isle. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-12">
                                            What percentage of the rental revenue do I receive?
                                            </a>
                                        </div>
                                        <div id="collapse-12" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>Net rental revenue is split between three parties – the villa Owner (50%), the management company (25%), and resort operations (25%). The split to resort operations adds to our operating cash, and serves as a reserve for resort expenses. Payments are made to the Owners four times per year after the completion of each calendar quarter. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-13">
                                            Who decides the price at which my villa is rented out?
                                            </a>
                                        </div>
                                        <div id="collapse-13" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p>GCR/DCM has established the rate structure for each villa size, type and location with input from the Directors. The annual Marketing Plan is addressed each year regarding pricing, promotions and advertising, and villa rates are re-evaluated annually as part of that effort.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>',
                'image' => 'grandisle_3-3.jpg',
                'video' => null
                ],

            [   'package_tab_id' => 20,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Purchasing Real Estate in Exuma',
                'subtitle' => null,
                'content' => '<p>Purchasing outside of your country may seem daunting and some countries are more difficult to purchase in than others, but you will find the process in the Bahamas to be seamless. There are elements that make the transaction unique and Grand Isle Resort will consult with you on any questions regarding the buying process.</p>',
                'image' => 'grandisle_3-3-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 21,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Travel the World',
                'subtitle' => null,
                'content' => '<p>Villa ownership at Grand Isle Resort & Spa just got better! Joining the Hotel Rental Program now gives access to our second home reciprocity programs.  Your villa opens the door to dozens of luxury destinations all over the world. We are constantly growing our connections with new premier destinations, allowing you to always enjoy new travel experiences.</p>',
                'image' => 'grandisle_4-0-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 21,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'The Elite Alliance',
                'subtitle' => null,
                'content' => '  <p>Elite Alliance is an exchange program for owners at our select family of prestigious residence clubs and luxurious, professionally managed vacation homes. The simple exchange process transforms your real estate ownership into a key that unlocks the door to seamless travel adventures – ski trips, golf getaways, beach escapes and much more, at a growing array of coveted destinations worldwide.</p>
                                <p>Properties in the Elite Alliance meet premium standards of quality, service, location and amenities. You will experience the luxury, convenience and personal attention you’ve come to expect, whenever and wherever you go on an Elite Alliance vacation. Elite Alliance offers a diverse, enticing and expanding portfolio of elegant residences at exciting locations. By activating your membership, each visit to a new destination will create lifelong memories for you and your family. You can view the exchange opportunities on the map below. For more details on Elite Alliance, please visit: <a href="http://www.elitealliance.com" targer="_blank">www.elitealliance.com</a></p>',
                'image' => 'grandisle_4-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 21,
                'header_bool' => 0,
                'order' => 2,
                'title' => '3RD HOME',
                'subtitle' => null,
                'content' => '<p>The 3RD HOME portfolio includes over 1600 luxury properties worldwide with an average value of $2.25 Million. In addition to private homes, you can travel to world-class residence clubs and developments that endorse 3RD HOME such as the Tucker’s Point Club in Bermuda, the Trump International Hotel and Tower in NYC and the Deer Valley Club in Park City, Utah.
You simply go online, browse, click and instantly reserve your vacation. Never before have you been able to get so much value from your second home. You can save thousands of dollars on just one trip. For more details on 3RD HOME, please visit: <a href="http://3rdhome.com/" target="_blank">www.3RDHOME.com</a></p>',
                'image' => 'grandisle_4-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 21,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Where You Can Go',
                'subtitle' => null,
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><ul class="unstyled">
                                            <li><strong>Golf:</strong></li>
                                            <li>La Paz, Mexico</li>
                                            <li>La Quinta, California</li>
                                            <li>Lake Geneva, Wisconsin</li>
                                            <li>Lake Keowee, South Carolina</li>
                                            <li>Lake Tahoe, California</li>
                                            <li>Pinehurst, North Carolina</li>
                                            <li>Scottsdale, Arizona</li>
                                            <li>Sedona, Arizona</li>
                                            <li>Teton Valley, Idaho</li>
                                        </ul></p>
                                        <p>
                                        <ul class="unstyled">
                                            <li><strong>Beach:</strong></li>
                                            <li>Acapulco, Mexico</li>
                                            <li>Bermuda</li>
                                            <li>Cabo San Lucas, Mexico</li>
                                            <li>Costa Rica</li>
                                            <li>Great Exuma, The Bahamas</li>
                                            <li>Huatulco, Mexico</li>
                                            <li>La Paz, Mexico</li>
                                            <li>Maui, Hawaii</li>
                                            <li>Rosemary Beach, Florida</li>
                                            <li>Sea Island, Georgia</li>
                                        </ul></p>
                                        <p>
                                        <ul class="unstyled">
                                            <li><strong>Urban:</strong></li>
                                            <li>New York City, New York</li>
                                            <li>San Francisco, California</li>
                                            <li>Las Vegas, Nevada</li>
                                            <li>Chicago, Illinois</li>
                                            <li>Paris, France</li>
                                            <li>London, United Kingdom</li>
                                        </ul></p>
                                    </div>
                                    <div class="span5">
                                        <p>
                                        <ul class="unstyled">
                                            <li><strong>Mountain:</strong></li>
                                            <li>Asheville, North Carolina</li>
                                            <li>Deer Valley, Utah</li>
                                            <li>Jackson Hole, Wyoming</li>
                                            <li>Lake Tahoe, California</li>
                                            <li>Mammoth Lakes, California</li>
                                            <li>Sandpoint, Idaho</li>
                                            <li>Steamboat Springs, Colorado</li>
                                            <li>Teton Valley, Idaho</li>
                                            <li>Tuscany, Italy</li>
                                        </ul></p>
                                        <p>
                                        <ul class="unstyled">
                                            <li><strong>Escapes:</strong></li>
                                            <li>Austin, Texas</li>
                                            <li>Buenos Aires</li>
                                            <li>Chicago, Illinois</li>
                                            <li>Florence, Italy</li>
                                            <li>Lake Geneva, Wisconsin</li>
                                            <li>Lake Keowee, South Carolina</li>
                                            <li>Las Vegas, Nevada</li>
                                            <li>Napa Valley, California</li>
                                            <li>New York City, New York</li>
                                            <li>San Francisco, California</li>
                                            <li>Sandpoint, Idaho</li>
                                            <li>Scottsdale, Arizona</li>
                                            <li>Sedona, Arizona</li>
                                            <li>Teton Valley, Idaho</li>
                                            <li>Tuscany, Italy</li>
                                        </ul></p>
                                    </div>
                                </div>',
                'image' => 'grandisle_4-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 21,
                'header_bool' => 0,
                'order' => 4,
                'title' => 'Bahamas Weather',
                'subtitle' => null,
                'content' => '  <p>Great Exuma enjoys warm weather year-round that is perfect for swimming in our sapphire-blue waters or watching the sunset with a drink in your hand. Grand Isle Resort & Spa in particular is located on the Eastern side of the island and receives a constant stream of mild breezes. Some travelers may assume that the Bahamas and the Out Islands are uncomfortably hot in the summer, but given our unique tropical location, there are minimal temperature fluctuations from season to season. This makes Great Exuma an ideal Caribbean destination throughout the year.</p>
                                <h4>Weather</h4>
                                <p>Average high temperatures for Great Exuma:</p>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Fahrenheit</th>
                                            <th>Month</th>
                                            <th>Fahrenheit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>January</td>
                                            <td>75</td>
                                            <td>July</td>
                                            <td>87</td>
                                        </tr>
                                        <tr>
                                            <td>February</td>
                                            <td>76</td>
                                            <td>August</td>
                                            <td>88</td>
                                        </tr>
                                        <tr>
                                            <td>March</td>
                                            <td>78</td>
                                            <td>September</td>
                                            <td>86</td>
                                        </tr>
                                        <tr>
                                            <td>April</td>
                                            <td>80</td>
                                            <td>October</td>
                                            <td>83</td>
                                        </tr>
                                        <tr>
                                            <td>May</td>
                                            <td>83</td>
                                            <td>November</td>
                                            <td>88</td>
                                        </tr>
                                        <tr>
                                            <td>June</td>
                                            <td>85</td>
                                            <td>December</td>
                                            <td>77</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Great Exuma, Bahamas and all Caribbean islands can be affected by the Atlantic Hurricane season which runs from June 1st to November 30th. Luckily, hurricanes never come as a surprise because of today\'s advanced weather forecasting abilities and when they do come, today’s island architecture is built to withstand gale force winds. Grand Isle is indestructable.</p>
                                <p>The Caribbean basin consists of millions of square miles, so keep in mind that when there is a storm in the Caribbean, it does not automatically mean that the Bahamas or Great Exuma will be affected.  Should a storm threaten Great Exuma or look to impact your vacation plans, the staff at Grand Isle Resort & Spa will contact you ahead of time. Please review our Hurricane Policy for additional information.</p>',
                'image' => 'grandisle_4-4.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 21,
                'header_bool' => 0,
                'order' => 5,
                'title' => 'Getting Here',
                'subtitle' => null,
                'content' => '  <p>Great Exuma is located within the family islands (or Out Islands) of the Bahamas just above the Tropic of Cancer. Great Exuma is roughly 120 miles southeast of Nassau, Bahamas, 300 miles southeast of Miami, and 700 miles from Atlanta.</p>

                                <p><strong>Latitude 23° 37\' 45.64 North<br>
                                Longitude 75° 54\' 55.39 West</strong></p>

                                <p>Getting to Great Exuma is now easier than ever. Direct flights to Exuma International Airport (GGT) are available from several U.S. cities, as well as Canada:</p>
                                <p><strong>Direct Flights to Exuma...</strong></p>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>City</th>
                                            <th>Airline</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Atlanta</td>
                                            <td>Delta Airlines</td>
                                        </tr>
                                        <tr>
                                            <td>Ft. Lauderdale</td>
                                            <td>Silver Airways</td>
                                        </tr>
                                        <tr>
                                            <td>Miami</td>
                                            <td>American Eagle</td>
                                        </tr>
                                        <tr>
                                            <td>Toronto, Ontario</td>
                                            <td>Air Canada</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p><strong>Connecting Flights through Nassau</strong></p>
                                <p>There are also numerous commercial airlines that fly from the U.S., Canada and Europe to Nassau International Airport (NAS) which is located on the island of New Providence.</p>
                                <p><strong>Major Air Carriers Now Serving Nassau</strong></p>
                                <p>Air Canada, American Airlines®, British Airways, Continental Airlines, Delta Airlines, JetBlue, Spirit Airlines, United Airlines, US Airways and WestJet.</p>
                                <p><strong>Bahamas-Based Airlines</strong></p>
                                <p>From Nassau, there are daily flights through several excellent Bahamas-based carriers, including Bahamasair and Sky Bahamas. They offer short "air taxi" flights to Great Exuma. There are multiple charter companies and private pilots that offer flights, as well.  The frequency of flights varies by season, so it\'s always a good idea to start researching your travel options early on. </p>

                                <p>Once you arrive on the island, Grand Isle Resort & Spa is located about 15 minutes from Exuma International Airport (GGT) by car. Our concierge will contact you beforehand to arrange transport from the airport to Grand Isle.</p>

                                <p><strong>Travel Tips</strong></p>

                                <p>If you\'re going to fly a larger air carrier into Nassau and then "puddle jump" over to Great Exuma on one of the local Bahamian airlines, give yourself enough time to land in Nassau and move through immigration at the Great Exuma International Arrivals Terminal. You\'ll need to retrieve your bags and make your way over to the Domestic Terminal to check-in and board your regional flight.  Landing in Nassau in the late morning and taking an afternoon flight to Great Exuma usually works best. Passengers are required to arrive at the gate 60 minutes prior to the scheduled flight time.  It\'s easy to get from one terminal to another at the Nassau Airport and Sky Caps are available to help with luggage.</p>

                                <p><em>NOTE: A valid passport is required for all individuals traveling to the Bahamas.</em></p>',
                'image' => 'grandisle_4-5.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 22,
                'header_bool' => 1,
                'order' => 0,
                'title' => null,
                'subtitle' => null,
                'content' => null,
                'image' => null,
                'video' => null
                ],
            [   'package_tab_id' => 11,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'The Vines’ Story',
                'subtitle' => 'We’re on a quest to make the world’s best wine.',
                'content' => '  <p>The Vines of Mendoza is more than an extraordinary place. It’s a style of living and being.</p>
                                <p>Rooted in the pleasures of making, drinking and sharing wine, The Vines immerses you in the delights of Argentine culture, natural beauty, and warm-hearted hospitality.</p>
                                <p>Revel in the pride and joy of making your wine, your way from your vineyard. There’s nothing else like it in the world.</p>',
                'image' => null,
                'video' => '<iframe src="//player.vimeo.com/video/74049087?title=0&amp;byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'
                ],
           /* [   'package_tab_id' => 11,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'In The News',
                'subtitle' => 'The Vines of Mendoza is receiving international recognition',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Wall Street Journal</strong> – Owning a Piece of the Vineyard</p>
                                        <p><em>Two years ago, a colleague bragged that he and two friends had bought three acres of vineyards in Argentina\'s Uco Valley for $210,000, including the first two years of farming fees. Each harvest season since, he and his partner-pals have gone down to the fast-growing wine region to pick and crush their grapes, then blend them into premium wines under the guidance of Santiago Achával, one of Argentina\'s most revered winemakers.</em></p>
                                        <p><strong>New York Times</strong> – Argentina’s Napa Valley</p>
                                        <p><em>“Mendoza is Napa 30 or 40 years ago,” said Michael Evans, a former Democratic campaign strategist from Washington, D.C., who moved to Mendoza six years ago to go into the wine business. But while money is pouring in, charming hotels are popping up, and wineries are going all-out architecturally, Mendoza remains very much an old-world experience.</em></p>
                                        <p><strong>Bloomberg</strong> – Texas Boy Investor Can’t Resist Taste of New Argentine Winery</p>
                                        <p><em>The 56-year-old financier, who has sold three companies with a total value of about $1 billion, is waiting to taste the fruit of his latest investment. “Never in my wildest dreams would I have thought about owning a vineyard,” he said.</em></p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Bloomberg</strong> – Argentina Lures Bankers Dreaming of Owning Their Own Vineyard</p>
                                        <p><em>For his 50th birthday two years ago, Phil Asmundson, vice chairman of technology at Deloitte LLP, flew to Argentina for a vacation and ended up buying a vineyard. As a long-time wine collector, making his own was a secret dream. During harvest in March or April, he’ll fly down from New York to pick malbec grapes and play cellar rat.</em></p>
                                        <p><strong>Vanity Fair</strong> – What’s the Easiest Way to Become a Winemaker? </p>
                                        <p><em>Step One: Contact The Vines of Mendoza, situated in Mendoza’s Uco Valley, in Argentina</em></p>
                                        <p><strong>Forbes</strong> - Harvesting Profits in Argentina’s Wine Country</p>
                                        <p><em>Evans restored his juices in Mendoza, in the foothills of the Andes. He discovered a new career: vine renting. His five-year-old company, Vines of Mendoza, manages a 1,046-acre Argentinean vineyard on behalf of casual winemakers who would rather do the quaffing and let others handle the pruning.</em></p>
                                    </div>
                                </div>',
                'image' => 'vines_1-0.jpg',
                'video' => null
                ],*/
            [   'package_tab_id' => 11,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'About Mendoza',
                'subtitle' => 'An exciting frontier, like Napa 30 years ago',
                'content' => '  <p>While Mendoza has been a winemaking region centuries before the birth of Napa Valley, it remains a new frontier to explore and discover. This hidden gem is South America’s top wine region, producing wines that are among the top rated in the world. </p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p>With fabulous hotels, world-class restaurants, and a vibrant local culture, Mendoza and its outer regions are a perfect place for wine lovers and adventurers. From white water rafting to mountain biking to fly fishing, there’s something for everyone here. Delight in an afternoon of wine tasting at historical or newly emerging wineries, enjoy olive oil tasting or bask in the luxury of relaxing by the pool or in our tranquil spa. There’s always more to taste and discover! </p>
                                    </div>
                                    <div class="span5">
                                        <p>Conveniently located just a short flight from both Buenos Aires and Santiago, consider extending your trip to experience world class skiing at La Lenas or head south to Patagonia for hiking and adventure among the glaciers.</p>
                                        <p>Consider joining other adventurous wine lovers who have planted roots here at The Vines as <a href="http://www.vinesresortandspa.com/destination/the-vines/" target="_blank">vineyard or villa owners.</a></p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <img src="/uploads/images/mike_pablo.jpg">
                                        <h4 class="text-center"><em>Pablo Gimenez Riili and Michael Evans, co-founders, The Vines of Mendoza</em></h4>
                                    </div>
                                    <d
                                </div>',
                'image' => 'vines_1-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 12,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Vineyard Ownership',
                'subtitle' => null,
                'content' => '  <p>At the root of The Vines is our Private Vineyards,  the vineyard ownership experience you’ve always dreamed about.  Work side-by-side with world-renowned consulting winemaker Santiago Achaval and our expert winemaking and agronomy teams to make your custom small-batch wine.  Jump in and get your hands dirty or leave the details to us. Along the way, we’ll share Argentina’s magic with you. </p>',
                'image' => 'vines_2-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 12,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'How It Works',
                'subtitle' => null,
                'content' => '  <p>Set amid 1,500 acres in the prestigious Uco Valley, The Vines offers wine lovers the chance to own their very own 3- to 10-acre professionally managed private vineyard while learning and having fun along the way.</p>
                                <p style="text-align:center"><a class="btn btn-info btn-large" href="/uploads/downloads/vines-siteplan-eng.pdf" target="_blank"><i class="icon-white icon-download"></i> View Our Vineyard Site Plan</a></a>
                                <p>Since 2004, we’ve helped more than 130 wine lovers become winemakers. Our expert team works side by side with you throughout the entire process, from planting and harvesting to bottling and labeling. You’ll learn from our consulting winemaker Santiago Achaval, one of Argentina’s top rated winemakers by Wine Spectator and Wine Advocate.</p>
                                <p>Be as hands-on as you’d like or leave the details to us. It’s your wine, your experience, your way. Here’s how it works:</p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Choose your vineyard.</strong> Choosing a vineyard and the varietals you want to plant is an exciting decision. Our team personally guides you, learning your winemaking goals and discussing the specific characteristics of our terroir. </p>
                                        <p><strong>Discover your palate.</strong> We’ll send you a case of wine, blind (no labels), so you can discover the wines you love the most and help us understand your taste and preferences. From there, you’ll work with our winemaking team, choosing from 20 varietals and determining the plant spacing and farming considerations that best suit your vineyard and winemaking goals. </p>
                                        <p><strong>Plant your vines.</strong> Under the leadership of Francisco Evangelista, our vineyard development team plans and then plants your vineyard, consulting with you on major decisions like clones, plant spacing, etc. based on your preferences for either personal and/or commercial goals. Ideally you will join us in Mendoza and plant a few vines yourself!</p>
                                        <p><strong>Grow your grapes.</strong> Your vines need tending and time—2 ½ years from planting to producing their first harvest. While they grow, you can make wine by purchasing grapes from other owners on the property. It’s a great way to gain skills, inspiration and experience while you wait for your own vines to bear fruit.</p>
                                        <p><strong>Craft your wine.</strong> At this stage, we’ll work with you to create your own winemaking plan with world-renowned consulting winemaker Santiago Achaval of Achaval-Ferrer fame, Wine Director, Mariana Onofri and Winemaker, Pablo Martorell along with The Vines’ expert winemaking team. We offer more than 100 ways to craft your own custom small-batch wine, using your grapes from your very own vineyard.</p>
                                    </div>
                                    <div class="span5">
                                        <p>You decide on the specific style of wine, how much to make and the targeted price level. We’ll choose the harvest brix targets, fermentation strategies, type and toast of oak barrel, and other winemaking factors.</p>
                                        <p><strong>Harvest your grapes.</strong> Ferment and age your wine. March and April is harvest, an exhilarating time to visit the Uco Valley. Come pick and sort your grapes, or let our staff of more than 150 professionals lend a hand or do it all. We’ll then ferment your wine and age it for 9 to 18 months in an oak or stainless steel barrels, depending on the style of wine you desire.</p>
                                        <p><strong>Design your wine brand.</strong> While your wine is aging, create your custom brand through both name and label with our designers and marketing team. We can also set up an online store, should you choose to sell your wine.</p>
                                        <p><strong>Blend your wine.</strong> September through December is blending time, a key part of the winemaking process. Visit and participate in the blending of your wine to create a vintage that reflects your exact taste.</p>
                                        <p><strong>Bottle, label and ship your wine.</strong> Your wine is now ready to be bottled, labeled and shipped to your desired location. Our import/export team will handle all compliance and regulatory procedures, along with shipping, to make the process seamless. </p>
                                        <p><strong>Cheers!</strong> Your wine has arrived. Open a bottle and take your first sip. Revel in the pride and joy of what you’ve created! </p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <p style="text-align:center"><img src="/uploads/images/hal_quote.jpg"></p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <blockquote style="margin: 0px 40px">
                                            <p>The Vines relieves me from the responsibility of managing the day-to-day administrative and operational functions of making wine so I have the flexibility to be involved to the extent (which can be much or a little) my schedule permits.</p>
                                            <small>Hal Hess, Vineyard Owner</small>
                                        </blockquote>
                                    </div>
                                </div>
                                ',
                'image' => 'vines_3-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 12,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Personalized To You & Fully Supported',
                'subtitle' => 'Jump in and get your hands dirty or leave the details to us.',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Over the past 9 years, we’ve worked tirelessly to fine-tune our farming and winemaking practices and processes. We have created over 1,100 small batch wines and are using that data to make better wines every year. Our proven operations, talented agronomist staff, and expert winemaking team support you and your vineyard every step of the way to make your very own wines, using your very own grapes, tanks and barrels. </p>
                                    </div>
                                    <div class="span5">
                                        <p>We’re never out of reach. We keep you connected to the latest happenings in your vineyard, your vintage, and throughout Mendoza. Our dedicated bi-lingual client services and concierge staff provides detailed quarterly reports on farming activities and harvest, our marketing team works with you on label and online store development, and our import/export team ensures you wine arrives safely and on time. </p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p>At The Vines we knew we could make wine from the same vineyard that produces wines that are among the top ranked by Wine Spectator and Wine Advocate. Who knew that along the way we would also discover gorgeous wide open spaces and meet a top notch team who have become our close friends. Additionally, this has been a convenient way to diversify our portfolio into some fun and interesting foreign investments. </p>
                                    <small>Mike Brochu, Vineyard Owner</small>
                                </blockquote>',
                'image' => 'vines_2-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 13,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Our Wines',
                'subtitle' => null,
                'content' => '<p>The most rewarding part of what we do is creating wines with our vineyard owners—and the wines are fabulous! Each year we craft nearly 300 custom vintages working side by side with our vineyard owners, and from this experience, we’ve accumulated a lot of hard-earned knowledge and expertise. No other winery knows as much about custom winemaking as we do, and it shows. </p>',
                'image' => 'vines_3-0-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 13,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Private Vineyard Owner Wines',
                'subtitle' => 'We’re on a quest to make the world’s best wine',
                'content' => '  <p>The most rewarding part of what we do is creating wines with our vineyard owners—and the wines are fabulous! Each year we craft nearly 300 custom vintages working side by side with our vineyard owners, and from this experience, we’ve accumulated a lot of hard-earned knowledge and expertise. No other winery knows as much about custom winemaking as we do, and it shows.</p> 
                                <p>We take tremendous pride in the top industry awards our Private Vineyard owners are earning for their wines. Noel & Terry Neelands\' 2010 Solo Contigo Malbec Reserva and 2010 Solo Contigo Malbec Coleccion scored 92 points from Wine Enthusiast, earning the magazine’s “Top Shelf” status. Other owners from Europe and the United States have consistently received top ranking in the UK’s International Wine Challenge (IWC). </p>
                                <p>Our vineyard owners have not only earned the respect of the toughest wine critics but have also achieved commercial success with sellout vintages and bottle prices reaching $125. Of course, all of our owners take pride in sharing their very own wines with friends and family.</p>
                                
                                <div class="row-fluid">
                                    <div class="span10">
                                        <img src="/uploads/images/vines_3-1-1.jpg">
                                    </div>
                                </div>
                                <blockquote>
                                    <p>Drinking good wine is easy. Making good wine is hard, but succeeding is incredibly rewarding. Making wine with this team is a lifetime opportunity to work with the best to achieve the seemingly impossible.</p>
                                    <small>Barry Chaiken, Vineyard Owner</small>
                                </blockquote>',
                'image' => 'vines_3-1-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 13,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Recuerdo Wines',
                'subtitle' => 'Wine Spectator, Wine Advocate & Wine Enthusiast are already giving our wines 90+ points.',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>The Vines of Mendoza signature wine, Recuerdo Wines, are exceptional premium wines that capture the best of Argentina\'s unique terroir, specifically within the sun-filled high-altitude Uco Valley. This same wine offers Private Vineyard owners the opportunity to contribute to this wine by selling their excess grapes to The Vines. </p>
                                    </div>
                                    <div class="span5">
                                        <p>Wine Spectator rated Recuerdo Reserva 2011 92 points and Recuerdo Gran Corte 2011 91 points. Wine Advocate also scored Recuerdo with 92 and 90 points in 2013. It’s a landmark moment for us as our wines, and our owners’ wines, are often praised by industry experts.</p>
                                    </div>
                                </div>',
                'image' => 'vines_3-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 13,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'The Vines’ Winemaking Team',
                'subtitle' => 'An Internationally acclaimed team',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Santiago Achával, Consulting Winemaker</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/santiago.jpg&w=440"></p>
                                        <p>As owner of Achával-Ferrer wines, Santiago has been recognized as one of the world leaders in winemaking by Wine Spectator and Robert Parker’s Wine Advocate. His wines consistently score in the high 90s, and his passion for winemaking and teaching it to others is unmatched. As The Vines of Mendoza’s Consulting Winemaker, Achával’s office is a tasting room filled with wine samples and bottles awaiting his critical palate. He is intimately involved with every wine and every owner, and his teachings in the vineyards amass and distill decades of wine expertise that let our visitors enjoy a truly hands on experience.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Pablo Martorell, Winemaker</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/pablo.jpg&w=440"></p>
                                        <p>The Vines of Mendoza’s winemaker, Pablo Martorell, is young, but accomplished, with high marks from Wine Spectator, Wine Advocate and Wine Enthusiast for The Vines’ Recuerdo Wines. Born and raised in Tunuyán, also home to our vineyard, he has worked at some of the most important wineries in Mendoza, including Bodega Nieto Senetiner, Catena Zapata, Trivento and Bodega Flecha de los Andes, under Michel Rolland’s tutelage. In 2006 he worked with Chateau de Lauret in Pomerol, Bordeaux, and in 2007, for Chateau Peyre Lebade and Chateau Clarke in Medoc, Bordeaux, both part of the Rothschild Group. </p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Francisco Evangelista, Chief Agronomist</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/francisco.jpg&w=440"></p>
                                        <p>Coming from a family of Mendoza grape growers, and working in vineyards since 1994, Francisco Evangelista has managed vineyard development at The Vines of Mendoza since the company’s beginning, before there were even vines in the ground. Today, he watches over our 700+ planted acres. Prior to The Vines, Francisco worked in winemaking for many influential Mendoza wineries, as well as Wente Vineyards in California\'s Livermore Valley.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Mariana Onofri, Wine Director</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/mariana.jpg&w=440"></p>
                                        <p>Mariana Onofri has been the Wine Director for The Vines of Mendoza since 2009, overseeing all vineyard owner winemaking plans and customized wine design. This includes overseeing blending sessions and barrel tastings for the company’s 130 Private Vineyard owners, and 300 fermentations in The Vines\' 2013 harvest alone. She also manages wine selection for the company’s Tasting Room, Vinoteca, and online sales. Prior to The Vines she worked at Chateau La Violette in Pomerol, Bordeaux, France, and has also been Sommelier in La Bourgogne in Punta Del Este, Uruguay.</p>
                                    </div>
                                </div>',
                'image' => 'vines_2-1.jpg',
                'video' => null
                ],
            /*[   'package_tab_id' => 14,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Finances',
                'subtitle' => null,
                'content' => '<p>Managing the finances of your vineyard is simple when you’re working with the right team of experts. Our local relationships, paired with our efficiency and expertise, keep your money matters simple.</p>',
                'image' => 'vines_4-1-1.jpg',
                'video' => null
                ],*/
            [   'package_tab_id' => 14,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Vineyard Economics',
                'subtitle' => 'From planting to exporting',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>1) How much does it cost to own a Private Vineyard?</strong><br>
                                        Your investment of $85,000 per acre for a new vineyard planted for you (or $95,000 and above for vineyards planted in 2007-2012) includes property title, planting, farming and maintenance costs for the first two growing seasons. Owning a vineyard is an investment that requires these up-front expenses, but the true value comes from knowing that your family will enjoy these vines for generations to come.</p>

                                        <p><strong>2) What can I expect from my purchase? </strong><br>
                                        High quality vineyards in Mendoza continue to appreciate in value. Expect the most fully supported and personally rewarding Private Vineyard ownership experience in the world. Expect an investment in a region that is like Napa 25 years ago.  Expect to share the magic of your own wine with friends and family for decades.  </p>
                                        <p>Founded in 2004, we\'re a combination of the best of North American and Argentina: the local passion and relationships to get things done paired with the rigor and excellence of North American business practices to put your mind at ease. We\'re on a quest to make the best wine in the world. </p>

                                        <p><strong>3) What is the cost of winemaking?</strong><br>
                                        Producing a super premium wine (US$70-100 retail) costs roughly $11–14 per bottle. Premium wine (US$20 retail) is about $6 per bottle. These costs include winemaking, barrels, bottles, capsules, labels and all other winemaking expenses. All expenses reflected above are calculated on a cost +25% basis.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>4) What is the cost of farming? </strong><br>
                                        Annual farming costs are approximately $3,500 per acre. Once vines mature, five years after planting, they should yield 4,000 to 4,500 kilos of premium grapes per acre or 2,000 to 2,500 kilos of super premium fruit per acre. This, in turn, will produce between 1,500 and 4,000 bottles of wine. Keep in mind that higher quality wines use fewer, more robust, grapes. All farming expenses reflected above are calculated on a cost +25% basis.</p>

                                        <p><strong>5) Can I sell my grapes? </strong><br>
                                        Most owners offset their farming and winemaking costs by selling some or all of their grapes. A three acre vineyard can produce 12,000 kilos of fruit, which can be sold for approx $16,000, paying for farming costs or winemaking.</p>

                                        <p><strong>6) What is the import/export process?</strong><br>
                                        Once your wine has aged and is ready to be enjoyed, we handle all the regulatory details to get your wine to you: export/import, customs, shipping and label approval. Typically it costs about $2 – $4 per bottle to ship your wine from Mendoza to the US. We can also set up an online store to help sell your wine or assist with securing distribution.</p>
                                    </div>
                                </div>',
                'image' => 'vines_4-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 15,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'The Vines Resort & Spa',
                'subtitle' => null,
                'content' => '  <p>The Vines Resort & Spa, one of the Leading Hotels of the World, offers laid-back luxury at the base of the majestic Andes Mountains and is the ultimate retreat for wine lovers and outdoor adventurers.  Owners of Private Vineyards receive 50% off stays at the resort.</p>
                                <p>We welcome owners as close friends, curating unique, uncommon adventures to enrich their Argentine experiences.</p>',
                'image' => 'vines_5-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 15,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Residence Villas',
                'subtitle' => 'The perfect blend of rustic elegance, modern comfort, and Argentine hospitality',
                'content' => '  <p><a href="/uploads/downloads/VinesResortPlan.pdf" target="_blank"><img src="/uploads/images/vinesmap2.jpg"></a></p>
                                <p style="text-align:right"><a href="/uploads/downloads/VinesResortPlan.pdf" target="_blank">View Enlarged Resort Plan</a></p>',
                'image' => 'vines_5-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 15,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Francis Mallmann’s Siete Fuegos',
                'subtitle' => 'Open-flame Argentine cooking, refined over hundreds of years, in our exclusive restaurant ',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Immerse your senses in the natural bounty of rustic, fiery flavors and exceptional wines of the Uco Valley where Argentina’s internationally acclaimed chef Francis Mallmann showcases his irreverent cuisine at our signature restaurant, Siete Fuegos. </p>
                                    </div>
                                    <div class="span5">
                                        <p>Guests will enjoy rustic, fiery specialties including 9-hour slow-grilled rib eye, cast iron baked salt-encrusted salmon, and grilled seasonal fruits paired with award-winning boutique wines. </p>
                                        <p style="text-align:right"><a href="http://www.vinesresortandspa.com/wine-dine/reservation/" class="btn btn-info" target="_blank">Make A Reservation</a></p>
                                    </div>
                                </div>',
                'image' => 'vines_5-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 15,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'The Vines Spa',
                'subtitle' => 'A multisensory experience, just for you',
                'content' => '  <p>Revive your senses and rejuvenate your body. Our Spa and Gym experiences are designed to invigorate, relax, restore and replenish body, mind and spirit through the thriving natural elements of the Uco Valley.</p>
                                <p>All Spa treatments are tailored to your preference and designed to fully immerse your senses, incorporating scent, sound, sight, and touch. Your Spa experience begins by choosing a specially formulated scent that evokes a distinct element inspired by the rich natural surroundings of the Uco Valley. Developed by Argentine perfume lab FUEGUIA 1833, these fragrances pair with the elements of fire, water, air, earth or light. Our therapists will help design the custom treatment suited to your needs and desires.</p>',
                'image' => 'vines_5-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 16,
                'header_bool' => 1,
                'order' => 0,
                'title' => null,
                'subtitle' => null,
                'content' => null,
                'image' => null,
                'video' => null
                ],
            [   'package_tab_id' => 23,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'La historia de The Vines',
                'subtitle' => 'Buscamos producir el mejor vino del mundo',
                'content' => '<p>The Vines of Mendoza es mucho más que un lugar extraordinario, es una forma de ser y un estilo de vida. Aquí, a los pies de la majestuosa cordillera de los Andes, usted podrá cumplir el sueño de elaborar vinos con uvas provenientes de su viñedo, para compartirlos con sus afectos más cercanos.</p>',
                'image' => null,
                'video' => '<iframe src="//player.vimeo.com/video/74071921?title=0&amp;byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'
                ],
           /* [   'package_tab_id' => 23,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'In The News',
                'subtitle' => 'The Vines of Mendoza is receiving international recognition',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Wall Street Journal</strong> – Owning a Piece of the Vineyard</p>
                                        <p><em>Two years ago, a colleague bragged that he and two friends had bought three acres of vineyards in Argentina\'s Uco Valley for $210,000, including the first two years of farming fees. Each harvest season since, he and his partner-pals have gone down to the fast-growing wine region to pick and crush their grapes, then blend them into premium wines under the guidance of Santiago Achával, one of Argentina\'s most revered winemakers.</em></p>
                                        <p><strong>New York Times</strong> – Argentina’s Napa Valley</p>
                                        <p><em>“Mendoza is Napa 30 or 40 years ago,” said Michael Evans, a former Democratic campaign strategist from Washington, D.C., who moved to Mendoza six years ago to go into the wine business. But while money is pouring in, charming hotels are popping up, and wineries are going all-out architecturally, Mendoza remains very much an old-world experience.</em></p>
                                        <p><strong>Bloomberg</strong> – Texas Boy Investor Can’t Resist Taste of New Argentine Winery</p>
                                        <p><em>The 56-year-old financier, who has sold three companies with a total value of about $1 billion, is waiting to taste the fruit of his latest investment. “Never in my wildest dreams would I have thought about owning a vineyard,” he said.</em></p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Bloomberg</strong> – Argentina Lures Bankers Dreaming of Owning Their Own Vineyard</p>
                                        <p><em>For his 50th birthday two years ago, Phil Asmundson, vice chairman of technology at Deloitte LLP, flew to Argentina for a vacation and ended up buying a vineyard. As a long-time wine collector, making his own was a secret dream. During harvest in March or April, he’ll fly down from New York to pick malbec grapes and play cellar rat.</em></p>
                                        <p><strong>Vanity Fair</strong> – What’s the Easiest Way to Become a Winemaker? </p>
                                        <p><em>Step One: Contact The Vines of Mendoza, situated in Mendoza’s Uco Valley, in Argentina</em></p>
                                        <p><strong>Forbes</strong> - Harvesting Profits in Argentina’s Wine Country</p>
                                        <p><em>Evans restored his juices in Mendoza, in the foothills of the Andes. He discovered a new career: vine renting. His five-year-old company, Vines of Mendoza, manages a 1,046-acre Argentinean vineyard on behalf of casual winemakers who would rather do the quaffing and let others handle the pruning.</em></p>
                                    </div>
                                </div>',
                'image' => 'vines_1-0.jpg',
                'video' => null
                ],*/
            [   'package_tab_id' => 23,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Sobre Mendoza ',
                'subtitle' => 'Una tierra fascinante, como Napa hace 30 años',
                'content' => '  <p>Aunque Mendoza nació como región vitivinícola varios siglos antes que el Valle de Napa, aún sigue siendo tierra virgen para explorar y descubrir. Esta gema oculta es la región vitivinícola más importante de Sudamérica, y produce vinos que se ubican entre los más prestigiosos del mundo. </p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p>Con hoteles fabulosos, restaurantes de nivel internacional y una cultura local vibrante, Mendoza y sus regiones son el lugar perfecto para los amantes del vino y los aventureros. Desde rafting en aguas rápidas, ciclismo de montaña o pesca con mosca, aquí todos encuentran algo para disfrutar. Deléitese en una tarde de degustaciones en bodegas históricas o de reciente inauguración; saboree el aceite de oliva o dése el gusto de relajarse en la lujosa piscina o en nuestro apacible spa. ¡Siempre hay más para probar y descubrir! </p>
                                    </div>
                                    <div class="span5">
                                        <p>Por su conveniente ubicación, a solo un corto viaje en avión desde Buenos Aires o Santiago, considere extender su paseo para experimentar la práctica de esquí de primer nivel en La Leñas, o dirigirse al sur para visitar la Patagonia y vivir una aventura entre los glaciares. </p>
                                        <p>No deje de conocer a otros aventureros amantes del vino que también han puesto sus raíces aquí en The Vines como los <a href="http://www.vinesresortandspa.com/destination/the-vines/" target="_blank">propietarios de viñedos o de villas.</a></p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <img src="/uploads/images/mike_pablo.jpg">
                                        <h4 class="text-center"><em>Pablo Gimenez  Riili y Michael Evans, co fundadores de The Vines of Mendoza</em></h4>
                                    </div>
                                    <d
                                </div>',
                'image' => 'vines_1-1.jpg',
                'video' => null
                ],
            
            [   'package_tab_id' => 24,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Propiedad del viñedo',
                'subtitle' => null,
                'content' => '  <p>A través de nuestro programa Private Vineyards, le ofrecemos la posibilidad de ser propietario del viñedo que siempre soñó en una de las regiones vitivinícolas más prestigiosas del mundo. Junto con Santiago Achával, consultor y winemaker reconocido internacionalmente, y asesorado por nuestro equipo de expertos, podrá experimentar el orgullo de elaborar su propio vino, ya sea involucrándose activamente en el proceso o simplemente dejando que nos ocupemos de todos los detalles. En el camino, compartiremos con usted la magia de la Argentina como solo alguien local puede hacerlo.</p>',
                'image' => 'vines_2-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 24,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Cómo funciona',
                'subtitle' => null,
                'content' => '  <p>En medio de más de 600 hectáreas en el prestigioso Valle de Uco, The Vines ofrece a los amantes del vino la posibilidad de poseer su propio viñedo privado de entre 1,2 a 4 hectáreas, gestionado profesionalmente, mientras que aprende y se divierte a lo largo del proceso.</p>
                                <p style="text-align:center"><a class="btn btn-info btn-large" href="/uploads/downloads/vines-siteplan-esp.pdf" target="_blank"><i class="icon-white icon-download"></i> Vea nuestro Plano de Viñedos </a></a>
                                <p>Desde 2004, hemos ayudado a más de 130 amantes del vino a convertirse en productores. Nuestro equipo de expertos trabaja codo a codo con usted a través de todo el proceso, desde la plantación y cosecha, hasta el embotellamiento y etiquetado. Aprenderá de nuestro consultor de vinos, Santiago Achaval, rec onocido por Wine Spectator y Wine Advocate como uno de los enólogos más prestigiosos de la Argentina.</p>
                                <p>Intervenga en el proceso, si lo desea, o deje que nosotros nos ocupemos de todos los detalles. Es su vino, su experiencia, su estilo. Funciona así:</p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Escoja su viñedo. </strong> Elegir un viñedo y los varietales que desea plantar es una decisión fascinante. Nuestro equipo le brinda orientación personalizada, basada en sus objetivos de producción de vino, y lo interioriza en las características específicas de nuestro terroir. </p>
                                        <p><strong>Descubra los sabores que prefiere su paladar. </strong> Le enviaremos una caja de vinos sin etiqueta (cata ciega) para que pueda descubrir cuáles son sus vinos favoritos y nos ayude así a comprender sus gustos y preferencias. Después comenzará el trabajo con su equipo vitivinicultor: escogerán entre 20 varietales y definirán los espacios de plantación y demás consideraciones agrícolas que mejor se adapten a sus viñedos y objetivos de producción. </p>
                                        <p><strong>Plante sus vides. </strong> Con el liderazgo de Francisco Evangelista, nuestro equipo de desarrollo de viñedos planifica y planta sus vides, siempre teniendo en cuenta su opinión en decisiones clave (clones, espacios de plantación, etc.) y sus preferencias en términos de objetivos personales y/o comerciales. ¡Sería ideal que nos visite en Mendoza y plante algunas vides usted mismo!</p>
                                        <p><strong>Desarrolle su viñedo. </strong> Sus vides necesitan tiempo y cuidado; desde la plantación hasta la primera cosecha deben pasar dos años y medio. Mientras crecen, usted puede producir vino comprando uvas a otros dueños en la propiedad. Es una excelente forma de aprender, inspirarse y ganar experiencia mientras espera que sus propios viñedos den frutos.</p>
                                        <p><strong>Elabore su vino. </strong> En esta etapa, trabajaremos juntos para crear su plan vitivinícola. Contaremos con la ayuda de Santiago Achával, consultor de vinos reconocido a nivel mundial, de Achával-Ferrer; Mariana Onofri, Directora de Vinos; y Pablo Martorell, enólogo; además de todo el equipo de enología especializado de The Vines. Le ofrecemos más de 100 maneras de elaborar su partida de vino a partir de uvas de su propio viñedo.</p>
                                    </div>
                                    <div class="span5">
                                        <p>Usted decidirá el estilo específico del vino, el volumen de la producción y el rango de precios deseado. Nosotros elegiremos los grados Brix de la cosecha, las estrategias de fermentación, el tipo y tostado de las barricas de roble, y otros aspectos de la producción de vinos.  </p>
                                        <p><strong>Coseche sus uvas. Participe en la fermentación y la crianza de su vino. </strong> Marzo y abril son los meses de la vendimia, una época fabulosa para visitar el Valle de Uco. Venga a recolectar y seleccionar sus uvas, o permita que nuestro personal (compuesto por más de 150 profesionales) lo ayude o se encargue de todo. El siguiente paso será fermentar y añejar su vino entre 9 y 18 meses en barricas de roble o tanques de acero inoxidable, según el estilo de vino que prefiera. </p>
                                        <p><strong>Diseñe su marca de vino. </strong> Mientras su vino se añeja, nuestro equipo de marketing y diseño lo ayudarán a crear un logo y una etiqueta para su marca personalizada. Además, si desea vender su vino, podemos armarle una tienda virtual. </p>
                                        <p><strong>Mezcle su vino. </strong> De septiembre a diciembre se realiza el blend, una parte clave del proceso vitivinícola. Visítenos y participe de una sesión de blend para crear una cosecha que refleje su gusto a la perfección. </p>
                                        <p><strong>Envase, etiquete y envíe su vino. </strong> Su vino ya está listo para ser embotellado, etiquetado y enviado a donde usted desee. Nuestro equipo de importación/exportación se ocupará de cumplir con todos los procedimientos regulatorios y de envío, para que se cumpla el proceso sin sobresaltos. </p>
                                        <p><strong>¡Salud! </strong> Su vino ha llegado a destino. Descorche una botella y beba el primer sorbo. Deléitese, enorgullézcase y disfrute de su creación.</p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <p style="text-align:center"><img src="/uploads/images/hal_quote.jpg"></p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <blockquote style="margin: 0px 40px">
                                            <p>The Vines me libera de las responsabilidades que implica gestionar en forma cotidiana las tareas administrativas y operativas de la elaboración del vino, y me permite tener mayor flexibilidad para involucrarme mucho o poco, según me lo permita mi agenda.</p>
                                            <small>Hal Hess, propietario de viñedo</small>
                                        </blockquote>
                                    </div>
                                </div>
                                ',
                'image' => 'vines_3-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 24,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Servicio personalizado y asistencia permanente ',
                'subtitle' => 'Trabaje la tierra con sus manos para experimentar lo que significa “hacer vino”, o deje que nosotros nos ocupemos de todos los detalles.',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Durante los últimos 9 años, hemos trabajado incansablemente para poner a punto las prácticas y los procesos del cultivo y la producción. Hemos elaborado una partida de más de 1100 vinos usando la información necesaria para mejorar las cosechas año a año. Nuestra experiencia, el talentoso equipo de agrónomos y los enólogos expertos lo asistirán a usted y a su viñedo a cada paso del proceso para elaborar sus propios vinos con sus uvas, tanques y barricas.</p>
                                    </div>
                                    <div class="span5">
                                        <p>Siempre estamos comunicados. Lo mantenemos informado sobre las últimas novedades de su viñedo y cosecha, así como también sobre lo que ocurre en Mendoza. Desde el departamento de servicio al cliente, nuestro amable personal bilingüe le envía detallados informes trimestrales con todas las novedades del cultivo y la cosecha. Además, nuestro equipo de marketing trabaja con usted en el desarrollo de su etiqueta y tienda virtual, y el departamento de comercio exterior se asegura de que su vino llegue en tiempo y forma a destino. </p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p>Siempre supimos que en The Vines podríamos elaborar vinos a partir del mismo viñedo que produce algunos de los vinos mejor puntuados por Wine Spectator y Wine Advocate. Sabíamos que en el camino descubriríamos increíbles lugares al aire libre y conoceríamos a un equipo de profesionales de primer nivel, quienes se convirtieron pronto en nuestros amigos cercanos. Además, esta ha sido una forma conveniente de diversificar nuestras inversiones en el exterior de manera más interesante y divertida. </p>
                                    <small>Mike Brochu, Vineyard Owner</small>
                                </blockquote>',
                'image' => 'vines_2-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 25,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Nuestros Vinos',
                'subtitle' => null,
                'content' => '<p>Lo más gratificante de nuestro trabajo es crear vinos junto a nuestros propietarios de viñedos. Además, ¡los vinos son exquisitos! Cada año, y gracias a nuestro trabajo codo a codo con los propietarios de viñedos, elaboramos unas 300 cosechas personalizadas. Es por ello que hemos acumulado conocimientos y experiencias de primera mano. Ninguna otra bodega sabe tanto sobre vinos personalizados como nosotros, y se nota.</p>',
                'image' => 'vines_3-0-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 25,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Vinos producidos en viñedos privados',
                'subtitle' => 'Buscamos producir el mejor vino del mundo.',
                'content' => '  <p>Estamos extremadamente orgullosos de todos los premios importantes que el sector ha otorgado por sus vinos a nuestros propietarios de viñedos privados. La revista Wine Enthusiast calificó con 92 puntos a los malbec Reserva Solo Contigo 2010 y malbec Colección Solo Contigo 2010 de Noel y Terry Neelands, lo que los colocó entre los más destacados (“Top Shelf”) de la publicación. Otros dueños de Europa y Estados Unidos también suelen estar entre los primeros puestos del International Wine Challenge (IWC) del Reino Unido. </p>
                                <p>Nuestros dueños de viñedos no solo se han ganado el respeto de los críticos de vino más estrictos, sino que además han alcanzado el éxito comercial con cosechas agotadas y botellas que rozan los USD 125. Naturalmente, todos los propietarios están orgullosos de poder compartir sus vinos con su familia y amigos.</p>
                                
                                <div class="row-fluid">
                                    <div class="span10">
                                        <img src="/uploads/images/vines_3-1-1.jpg">
                                    </div>
                                </div>',
                'image' => 'vines_3-1-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 25,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Vinos Recuerdo',
                'subtitle' => 'Wine Spectator, Wine Advocate y Wine Enthusiast califican a nuestros vinos con puntajes superiores a 90. ',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Recuerdo, los vinos de autor de The Vines of Mendoza, son extraordinarios vinos de alta gama que capturan lo mejor de un terroir único en Argentina: el de las soleadas alturas del Valle de Uco. Los propietarios de viñedos privados pueden también contribuir a este vino mediante la venta de sus uvas excedentes a The Vines. </p>
                                    </div>
                                    <div class="span5">
                                        <p>Wine Spectator calificó a Recuerdo Reserva 2011 con 92 puntos, y con 91 a Recuerdo Gran Corte 2011. Wine Advocate, por su parte, le otorgó 92 y 90 puntos en 2013, respectivamente. Es un momento histórico para nosotros, ya que los expertos del sector suelen elogiar a nuestros vinos y a sus dueños.</p>
                                    </div>
                                </div>',
                'image' => 'vines_3-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 25,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'Equipo de enólogos de The Vines',
                'subtitle' => 'Un equipo aclamado a nivel internacional',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Santiago Achával, Consultor de Enología </strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/santiago.jpg&w=440"></p>
                                        <p>Santiago es dueño de la bodega Achával-Ferrer y, tanto Wine Spectator como Wine Advocate, de Robert Parker, lo han calificado como uno de los mejores enólogos del mundo. Sus vinos siempre reciben calificaciones superiores a 90, y es inigualable su pasión por la enología y por transmitir sus conocimientos a los demás. Como Enólogo Consultor en The Vines of Mendoza, la oficina de Santiago es una sala de degustaciones repleta de muestras y botellas de vino a la espera de su paladar crítico. Conoce a la perfección  cada uno de los vinos y a sus dueños, y lo que enseña en los viñedos es producto de acumular y procesar décadas de experiencias vitivinícolas, lo que permite que quienes nos visitan disfruten de un momento verdaderamente ilustrativo.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Pablo Martorell, Enólogo</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/pablo.jpg&w=440"></p>
                                        <p>Pablo Martorell es el joven enólogo de The Vines of Mendoza, quien, con su talento, ha ganado notables calificaciones en Wine Spectator, Wine Advocate y Wine Enthusiast para los vinos Recuerdo, de The Vines. Pablo es oriundo de Tunuyán, donde creció y donde también se ubica nuestro viñedo. Ha trabajado en algunas de las bodegas más importantes de Mendoza, como Bodega Nieto Senetiner, Catena Zapata, Trivento y Bodega Flecha de los Andes, con Michel Rolland como tutor. En 2006 fue parte de Chateau de Lauret en Pomerol, Burdeos, y en 2007 trabajó para Chateau Peyre Lebade y Chateau Clarke en Medoc, Burdeos, ambos parte del Rothschild Group. </p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Francisco Evangelista, Ingeniero Agrónomo en Jefe </strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/francisco.jpg&w=440"></p>
                                        <p>Francisco Evangelista proviene de una familia mendocina de productores de uva, y trabaja entre viñedos desde 1994. Ha gestionado el desarrollo de los viñedos de The Vines of Mendoza desde los inicios de la compañía, incluso antes de que se plantasen las vides. En la actualidad, supervisa nuestras más de 280 hectáreas sembradas. Antes de trabajar en The Vines, Francisco se desempeñó en el ámbito de la producción de vinos para varias prestigiosas bodegas de Mendoza, así como también en Wente Vineyards, en el Livermore Valley de California. </p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Mariana Onofri, Directora de Vinos </strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/mariana.jpg&w=440"></p>
                                        <p>Mariana Onofri se desempeña como directora de vinos en The Vines of Mendoza desde 2009, y está a cargo de la supervisión de todos los planes de producción y diseño de vinos personalizados para los  propietarios de viñedos. Esto implica monitorear las sesiones de blend y catas de barricas para los 125 dueños de viñedos privados de la compañía, además de las 300 fermentaciones en The Vines solamente durante la vendimia 2013. También se ocupa de seleccionar los vinos para la Sala de Degustaciones, la Vinoteca y las ventas  online de la compañía. Antes de llegar a The Vines, Mariana trabajó en Chateau La Violette en Pomerol, Burdeos, Francia, y también fue sommelier de La Bourgogne en Punta del Este, Uruguay.</p>
                                    </div>
                                </div>',
                'image' => 'vines_2-1.jpg',
                'video' => null
                ],
            /*[   'package_tab_id' => 26,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Finances',
                'subtitle' => null,
                'content' => '<p>Managing the finances of your vineyard is simple when you’re working with the right team of experts. Our local relationships, paired with our efficiency and expertise, keep your money matters simple.</p>',
                'image' => 'vines_4-1-1.jpg',
                'video' => null
                ],*/
            [   'package_tab_id' => 26,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Economía del viñedo',
                'subtitle' => 'De la plantación a la exportación',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>1) ¿Cuánto cuesta ser dueño de un viñedo privado?</strong><br>
                                        Su inversión de USD 212 500 por hectárea, necesaria para plantar un nuevo viñedo (o a partir de USD 237 500 para viñedos sembrados entre 2007-2012), incluye el título de propiedad, los costos de plantación, cultivo y mantenimiento durante las dos primeras temporadas de crecimiento. Ser propietario de un viñedo es hacer una inversión que significa afrontar estos costos al principio, pero el verdadero valor está en saber que su familia disfrutará estas vides durante generaciones.</p>

                                        <p><strong>2) ¿Qué puedo esperar de lo que adquiero?</strong><br>
                                        El valor de los viñedos mendocinos de excelente calidad continúa en ascenso. Ser propietario de un viñedo privado es una de las experiencias más gratificantes a nivel personal que podría vivir, y durante la cual contará con nuestro apoyo en todo momento. Prepárese para compartir la magia de su propio vino con su familia y amigos durante décadas.  </p>
                                        <p>Fundada en 2004, esta compañía es la combinación de lo mejor de América del Norte y Argentina: la pasión local y los vínculos sociales que facilitan que se hagan las cosas, por un lado, y el rigor y la excelencia de las prácticas comerciales norteamericanas –que harán que usted se despreocupe– por el otro.  Buscamos producir el mejor vino del mundo. </p>

                                        <p><strong>3) ¿Cuánto cuesta producir vino?</strong><br>
                                        La producción de un vino de muy alta gama (USD 70-100 para venta minorista) cuesta entre USD 11 y 14 la botella. Un vino de alta gama (USD 20 para venta minorista) cuesta unos USD 6 la botella. Estos costos incluyen la producción, las barricas o tanques, botellas, cápsulas, etiquetas y todos los demás gastos de elaboración. Todos los gastos antes mencionados se calculan sobre la base del costo +25 %.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>4) ¿Cuál es el costo del mantenimiento del cultivo?  </strong><br>
                                        Los costos de cultivo anuales son de aproximadamente USD 10 000 por hectárea. Una vez que la vid está madura (cinco años después de la plantación), deberían tener un rinde de entre 10 000 y 11 250 kilos de uvas de alta gama por hectárea; o de entre 5000 y 6250 kilos de fruta de muy alta gama por hectárea. Esto, a su vez, producirá entre 1500 y 4000 botellas de vino. Tenga en cuenta que para los vinos de más alta calidad se utilizan menos uvas, pero más robustas. Todos los gastos de cultivo mencionados se calculan sobre la base del costo +25 %.</p>

                                        <p><strong>5) ¿Puedo vender mis uvas? </strong><br>
                                        La mayoría de los propietarios recupera los gastos de cultivo y producción mediante la venta de parte o todas sus uvas. Por ejemplo, si un  propietario vende 2800 kilos de fruta a USD 1,50 el kilo, esto le permite recuperar el gasto que implica hacer una barrica de vino de muy alta gama (unos USD 4200) o el 40 % de los gastos de cultivo anuales para una hectárea. Algunos propietarios  posponen la producción de vino para aprovechar las ganancias obtenidas por la venta de las uvas.</p>

                                        <p><strong>6) ¿En qué consiste el proceso de importación/exportación?</strong><br>
                                        Una vez que su vino se haya añejado y esté listo para beber, nosotros nos encargaremos de todos los trámites oficiales necesarios para hacérselo llegar: exportación/importación, aduanas, envíos y aprobación de etiquetas. Por lo general, enviar vino de Mendoza a Estados Unidos cuesta entre USD 3 y 5 la botella. Además, podemos crear una tienda virtual para ayudarlo a vender su vino o a garantizar su distribución.</p>
                                    </div>
                                </div>',
                'image' => 'vines_4-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 27,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'The Vines Resort & Spa',
                'subtitle' => null,
                'content' => '  <p>The Vines Resort & Spa es miembro de Leading Hotels of the World y ofrece un lujoso ambiente relajado a los pies de la majestuosa cordillera de los Andes, un refugio sofisticado para los aventureros y los amantes del vino. Tratamos a nuestros huéspedes como a nuestros amigos, y les brindamos aventuras únicas y singulares que enriquecerán su experiencia en Argentina.  Todos los propietarios de viñedos podrán disfrutar del resort al 50 % de la tarifa normal y, además, tendrán acceso especial a los servicios de lujo ofrecidos, como el restaurante Siete Fuegos y The Vines Spa. </p>',
                'image' => 'vines_5-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 27,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Atrévase a vivir una aventura vitivinícola en nuestras villas residenciales.',
                'subtitle' => ': La combinación perfecta de la rústica elegancia y la comodidad moderna, ligada a la cálida hospitalidad de la gente.',
                'content' => '  <p><a href="/uploads/downloads/VinesResortPlan.pdf" target="_blank"><img src="/uploads/images/vinesmap-esp.jpg"></a></p>
                                <p style="text-align:right"><a href="/uploads/downloads/VinesResortPlan.pdf" target="_blank">Vista ampliada del Plan Resort</a></p>',
                'image' => 'vines_5-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 27,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Siete Fuegos, de Francis Mallmann',
                'subtitle' => 'Cocina argentina a fuego abierto, refinada durante cientos de años, en nuestro exclusivo restaurante ',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Déle el gusto a sus sentidos con sabores fuertes y atrevidos que se combinan con vinos excepcionales del Valle de Uco, donde el afamado chef argentino, Francis Mallmann, presenta su cocina irreverente en nuestro restaurante Siete Fuegos.  </p>
                                    </div>
                                    <div class="span5">
                                        <p>Los comensales disfrutarán de exquisiteces rústicas y atrevidas, como el ojo de bife cocido a fuego lento durante 9 horas a la parrilla, el salmón a la sal horneado en chapa de hierro fundido y frutas de estación grilladas y marinadas con premiados vinos boutique. </p>
                                        <p style="text-align:right"><a href="http://www.vinesresortandspa.com/wine-dine/reservation/" class="btn btn-info" target="_blank">Hagá su reserva</a></p>
                                    </div>
                                </div>',
                'image' => 'vines_5-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 27,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'The Vines Spa',
                'subtitle' => 'Una experiencia multisensorial solo para usted',
                'content' => '  <p>Estimule sus sentidos y rejuvenezca su cuerpo. Nuestro spa y nuestro gimnasio están diseñados para brindarle experiencias que tonifiquen, relajen, recuperen y satisfagan su cuerpo, mente y espíritu gracias a los elementos naturales que abundan en el Valle de Uco.</p>
                                <p>Todos los tratamientos del spa se adaptan a sus gustos, y están diseñados para que usted se deje guiar por sus sentidos, incorporando el olfato, la audición, la vista y el tacto. Su experiencia de spa comienza por la elección de una fragancia especialmente formulada, que evoca un elemento distintivo inspirado en el entorno rico y natural del Valle de Uco. Desarrolladas por el laboratorio de perfumes argentino FUEGUIA 1833, estas fragancias se combinan con los elementos fuego, agua, aire, tierra o luz. Nuestros terapeutas lo ayudarán a diseñar el tratamiento personalizado adecuado a sus necesidades y deseos.</p>',
                'image' => 'vines_5-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 28,
                'header_bool' => 1,
                'order' => 0,
                'title' => null,
                'subtitle' => null,
                'content' => null,
                'image' => null,
                'video' => null
                ],
            [   'package_tab_id' => 29,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'História da The Vines',
                'subtitle' => 'Estamos em busca de fazer o melhor vinho do mundo',
                'content' => '  <p>Liderados por nossos fundadores Michael Evans, um empreendedor dos Estados Unidos, e Pablo Gimenez Riili, terceira geração duma família de produtores de vinhos argentinos, reunimos uma equipe de padrão internacional, em uma região produtora de padrão internacional, para fazer vinhos de padrão internacional juntamente com os nossos proprietários do Private Vineyards.</p>
                                <p>A The Vines of Mendoza é mais do que um lugar extraordinário, é um estilo de viver, uma filosofia de vida. Aqui, na base da majestosa Cordilheira dos Andes, você pode realizar seu sonho de possuir um vinhedo, fazer vinhos com suas próprias uvas e compartilhar com seus amigos e família.</p>
                                <p>Desde 2004, nós já produzimos mais de 1.100 pequenos lotes de vinhos customizados e ajudamos mais de 130 amantes de vinho, de todas as partes do mundo, a se tornarem orgulhosos produtores. Nossa equipe de experts trabalha com você em cada passo do caminho, desde o plantio e a colheita, ao engarrafamento, rotulamento e exportação. Você irá trabalhar lado a lado com nosso enólogo consultor, Santiago Achával, considerado um dos melhores enólogos argentinos, segundo a Wine Spectator e a Wine Advocate.</p>
                                <p>Enraizada nos prazeres de produzir, beber e compartilhar vinho, a The Vines of Mendoza te faz mergulhar nos encantos da cultura argentina, da beleza natural e da cordial e calorosa hospitalidade. Cavalgue rumo ao pôr do sol e explore o glorioso terreno enquanto saboreia alguns dos melhores vinhos do mundo. A Argentina é o nosso lar e queremos dividi-lo com você. Estamos aninhados na base da majestosa Cordilheira do Andes, no prestigioso Valle de Uco.</p>
                                <h2>Visão Geral</h2>
                                <p>Na The Vines nós aperfeiçoamos todos os aspectos da produção de vinhos para os nossos proprietários. Nosso time é composto por 150 profissionais dedicados, incluindo talentosos experts em vinhedos e produção, que te assessoram em cada passo do caminho.</p>
                                <p>Ao longo dos últimos 9 anos, trabalhamos incansavelmente para refinar nossas práticas e processos, das videiras à produção de vinhos. Já criamos mais de 1.100 pequenos lotes de vinhos, agregando a soma total de nossa experiência e utilizando o conhecimento coletivo para confeccionar safras melhores a cada ano.</p>
                                <p>Participe o quanto quiser ou deixe todos os detalhes conosco. A melhor maneira de aprender sobre a produção de vinhos é se envolver nela. Mergulhe - desde o plantio, à colheita, ao corte (blend) - e aproveite as emoções únicas de criar seu próprio vinho. Você irá rapidamente aprofundar seu conhecimento e se tornar um verdadeiro produtor. </p>
                                <p>Além da produção, nós oferecemos serviços de concierge para proporcionar autênticas aventuras argentinas, desde rafting, ao trekking, até o tango - e muito mais. É nosso prazer compartilhar as riquezas da nossa região com você.</p>',
                'image' => null,
                'video' => '<iframe src="//player.vimeo.com/video/75307040?title=0&amp;byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'
                ],
           /* [   'package_tab_id' => 29,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'In The News',
                'subtitle' => 'The Vines of Mendoza is receiving international recognition',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Wall Street Journal</strong> – Owning a Piece of the Vineyard</p>
                                        <p><em>Two years ago, a colleague bragged that he and two friends had bought three acres of vineyards in Argentina\'s Uco Valley for $210,000, including the first two years of farming fees. Each harvest season since, he and his partner-pals have gone down to the fast-growing wine region to pick and crush their grapes, then blend them into premium wines under the guidance of Santiago Achával, one of Argentina\'s most revered winemakers.</em></p>
                                        <p><strong>New York Times</strong> – Argentina’s Napa Valley</p>
                                        <p><em>“Mendoza is Napa 30 or 40 years ago,” said Michael Evans, a former Democratic campaign strategist from Washington, D.C., who moved to Mendoza six years ago to go into the wine business. But while money is pouring in, charming hotels are popping up, and wineries are going all-out architecturally, Mendoza remains very much an old-world experience.</em></p>
                                        <p><strong>Bloomberg</strong> – Texas Boy Investor Can’t Resist Taste of New Argentine Winery</p>
                                        <p><em>The 56-year-old financier, who has sold three companies with a total value of about $1 billion, is waiting to taste the fruit of his latest investment. “Never in my wildest dreams would I have thought about owning a vineyard,” he said.</em></p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Bloomberg</strong> – Argentina Lures Bankers Dreaming of Owning Their Own Vineyard</p>
                                        <p><em>For his 50th birthday two years ago, Phil Asmundson, vice chairman of technology at Deloitte LLP, flew to Argentina for a vacation and ended up buying a vineyard. As a long-time wine collector, making his own was a secret dream. During harvest in March or April, he’ll fly down from New York to pick malbec grapes and play cellar rat.</em></p>
                                        <p><strong>Vanity Fair</strong> – What’s the Easiest Way to Become a Winemaker? </p>
                                        <p><em>Step One: Contact The Vines of Mendoza, situated in Mendoza’s Uco Valley, in Argentina</em></p>
                                        <p><strong>Forbes</strong> - Harvesting Profits in Argentina’s Wine Country</p>
                                        <p><em>Evans restored his juices in Mendoza, in the foothills of the Andes. He discovered a new career: vine renting. His five-year-old company, Vines of Mendoza, manages a 1,046-acre Argentinean vineyard on behalf of casual winemakers who would rather do the quaffing and let others handle the pruning.</em></p>
                                    </div>
                                </div>',
                'image' => 'vines_1-0.jpg',
                'video' => null
                ],*/
            [   'package_tab_id' => 29,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Sobre Mendoza ',
                'subtitle' => 'Uma excitante fronteira, como Napa há 30 anos. ',
                'content' => '  <p>Mesmo que Mendoza venha sendo uma região vinícola séculos antes do nascimento do Napa Valley, ela permanece uma nova fronteira para se explorar e descobrir. Esta joia escondida é a melhor região de vinhos da América do Sul, produzindo rótulos que figuram ao lado dos mais bem conceituados do mundo.</p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p>Com fabulosos hotéis, restaurantes de nível internacional, e uma vibrante cultura, Mendoza e suas regiões periféricas são lugares perfeitos para amantes de vinho e aventureiros. Desde rafting em águas cristalinas, a trilhas de bike pelas montanhas, até pesca com mosca, existe algo para todo mundo aqui. Desfrute de uma tarde de degustação de vinhos em uma vinícola histórica ou em uma nova emergente saboreie uma degustação de azeites de oliva ou aqueça-se se entregando ao luxo de relaxar na beira da piscina ou em nosso tranquilo Spa. Sempre há algo mais para descobrir e experimentar! </p>
                                    </div>
                                    <div class="span5">
                                        <p>Convenientemente localizado a um curto voo de distância tanto de Buenos Aires, quanto de Santiago, considere estender sua viagem para vivenciar a oportunidade de esquiar na internacionalmente nivelada Las Leñas, ou rume ao sul para a Patagonia e escale aventurando-se entre as geleiras.</p>
                                        <p>Considere juntar-se a outros aventureiros amantes do vinho que plantaram raízes aqui na The Vines como <a href="http://www.vinesresortandspa.com/destination/the-vines/" target="_blank">proprietários de vinhedos ou de nossas Villas.</a></p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <img src="/uploads/images/mike_pablo.jpg">
                                        <h4 class="text-center"><em>Pablo Gimenez Riili e Michael Evans, co-fundadores, The Vines of Mendoza</em></h4>
                                    </div>
                                    <d
                                </div>',
                'image' => 'vines_1-1.jpg',
                'video' => null
                ],
            
            [   'package_tab_id' => 30,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Possuir um Vinhedo',
                'subtitle' => null,
                'content' => '  <p>Na raíz da The Vines estão nossos Private Vineyards (Vinhedos Privados), a experiência de possuir um vinhedo com a qual você sempre sonhou. Trabalhe lado-a-lado com o consultor enólogo, mundialmente renomado, Santiago Achával e nossas equipes experts de produtores e agrônomos para fazer a sua pequena safra de vinhos customizados. Mergulhe de cabeça e suje suas mãos, ou deixe os detalhes conosco. Ao longo do caminho, compartilharemos toda a magia da Argentina com você.</p>',
                'image' => 'vines_2-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 30,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Como Funciona',
                'subtitle' => null,
                'content' => '  <p>Situada ao longo de 600 hectares, no prestigioso Valle de Uco, a The Vines oferece aos amantes do vinho a oportunidade de possuir seu próprio vinhedo - de 1,2 a 4 hectares -, profissionalmente manejado, enquanto aprendem e se divertem ao longo do caminho.</p>
                                <p style="text-align:center"><a class="btn btn-info btn-large" href="/uploads/downloads/vines-siteplan-pt.pdf" target="_blank"><i class="icon-white icon-download"></i> Veja nosso plano dos vinhedos</a></a>
                                <p>Desde 2004, nós ajudamos mais de 130 amantes do vinho a se tornarem produtores. Nossa equipe de experts trabalha lado a lado com você ao longo de todo o processo, do plantio e colheita, ao engarrafamento e rotulamento. Você irá aprender com nosso enólogo consultor, Santiago Achával, um dos mais bem conceituados enólogos argentinos segundo a Wine Spectator e a Wine Advocate. </p>
                                <p>Envolva-se o quanto quiser, ou deixe os detalhes conosco. É o seu vinho, sua experiência, do seu jeito. Assim é como funciona:</p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Escolha seu vinhedo. </strong> Escolher um vinhedo e as varietais que você quer plantar é uma decisão excitante. Nosso time lhe guiará pessoalmente, considerando e apreendendo seus objetivos de produção e discutindo as características específicas do nosso terroir. </p>
                                        <p><strong>Desbrave seu paladar. </strong> Nós te enviaremos uma caixa de vinhos, “cega” (sem rótulos), para que você possa descobrir os vinhos que gosta mais e ajudar-nos a entender seu gosto e preferências. A partir daí, você trabalhará com nossa equipe de produção, escolhendo entre 20 varietais e determinando a configuração do espaço plantado e as considerações agrícolas que melhor se adequam ao seu vinhedo e objetivos de produção. </p>
                                        <p><strong>Plante suas videiras. </strong> Sob a supervisão do Francisco Evangelista, nosso time de desenvolvimento dos vinhedos planeja e depois planta seu vinhedo, sempre lhe consultando sobre importantes decisões como clones, espaçamento de plantio etc., baseando-se tanto em suas preferências pessoais quanto em seus propósitos comerciais. O ideal é que se junte a nós em Mendoza e plante você mesmo algumas parreiras!</p>
                                        <p><strong>Cultive suas uvas. </strong> Suas vinhas necessitam de cuidado e tempo - 2 anos e meio desde o plantio até a primeira colheita. Enquanto elas crescem, você pode produzir seu vinho comprando uvas de outros proprietários. É uma ótima maneira de conquistar habilidades, inspiração e experiência enquanto espera suas próprias videiras darem frutos. </p>
                                        <p><strong>Crie seu vinho. </strong> A esta altura, nós trabalharemos com você para criar seu próprio plano de vinificação, contando com a supervisão do mundialmente renomado enólogo consultor, Santiago Achával, da famosa Achaval-Ferrer, da Diretora de Vinhos, Mariana Onofri e do enólogo Pablo Martorell, em conjunto com toda a equipe de produção. Nós oferecemos mais de 100 modos de desenhar seu próprio pequeno lote de vinhos customizados, utilizando suas próprias uvas, do seu próprio vinhedo.</p>
                                    </div>
                                    <div class="span5">
                                        <p>Você decide o estilo específico do seu vinho, o quanto fazer e a média de preço alvo. Nós escolheremos os alvos brix para a colheita, as estratégias de fermentação, tipo e a tostagem da barrica de carvalho, e outros fatores de vinificação. </p>
                                        <p><strong>Colha suas uvas. Fermente e envelheça seu vinho. </strong> Março e abril são a época de colheita, uma entusiasmante época para visitar o Valle de Uco. Venha colher e selecionar suas uvas, deixe nossos 150 profissionais darem uma mão, ou deixe que eles cuidem de tudo. Daí iremos fermentar seu vinho e envelhecê-lo, entre 9 e 18 meses, em barricas de carvalho ou aço - dependendo do tipo e estilo do vinho que desejar.</p>
                                        <p><strong>Desenhe a marca de seu vinho. </strong> Enquanto seu vinho estiver envelhecendo, crie sua marca customizada, nome e rótulo, com nossos designers e equipe de Marketing. Se você quiser vender online, podemos até mesmo ajudá-lo a desenvolver uma loja online.</p>
                                        <p><strong>Faça o corte do seu vinho. </strong> De setembro a dezembro é a temporada do corte (blend), uma parte chave do processo de produção. Visite e participe do corte de seu vinho para criar safras que refletem seu exato gosto.</p>
                                        <p><strong>Engarrafe, rotule e envie. </strong> Seu vinho está pronto para ser engarrafado, rotulado e enviado para o destino que desejar. Nossa equipe de importação/exportação irá lidar com todas as conformidades e procedimentos regulatórios, juntamente com o envio, para tornar o processo perfeito. </p>
                                        <p><strong>Saúde! </strong> Seu vinho chegou. Abra uma garrafa e beba seu primeiro gole. Deleite com alegria e orgulho sua criação!</p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <blockquote>
                                            <p>"Quando as pessoas me perguntam sobre minha experiência na The Vines of Mendoza, eu sempre repito uma frase que minha filha me disse quando visitou pela primeira vez os vinhedos da The Vines: " Pai, você não comprou um pedaço de terra, você comprou um pedacinho do céu. "</p>
                                            <small>Emerson (MG), Proprietario dum Vinhedo</small>
                                        </blockquote>
                                    </div>
                                </div>
                                ',
                'image' => 'vines_3-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 30,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Personalizado Para Você & Total Suporte',
                'subtitle' => 'Mergulhe de cabeça e suje suas mãos ou deixe os detalhes conosco. ',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Ao longo dos últimos 9 anos nós trabalhamos incansavelmente para refinar nossas práticas e processos, das videiras à produção de vinhos. Já criamos mais de 1.100 pequenos lotes de vinhos, agregando a soma total de nossa experiência e utilizando o conhecimento coletivo para confeccionar safras melhores a cada ano. Nossos comprovado operacional, talentoso pessoal agronomo e expert equipe de produção oferecem suporte a você e a seu vinhedo em cada passo do caminho para fazer seus próprios vinhos, utilizando suas próprias uvas, tanques e barricas.</p>
                                    </div>
                                    <div class="span5">
                                        <p>Nós nunca estamos indisponíveis. Mantemos você conectado com os últimos acontecimentos em seu vinhedo, em sua safra, e em toda Mendoza. Nosso dedicado grupo bilíngue de atendimento ao cliente e concierge providencia relatórios trimestrais sobre as atividades agrícolas e colheita, nossa equipe de Marketing trabalha com você em seu rótulo e desenvolvimento de loja online, e nosso pessoal de importação/exportação garante que seu vinho chegue seguro e a tempo. </p>
                                    </div>
                                </div>',
                'image' => 'vines_2-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 31,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Nossos Vinhos',
                'subtitle' => null,
                'content' => '<p>A parte mais gratificante do que fazemos é criar vinhos com nossos proprietários de vinhedos - e os vinhos são fabulosos! A cada ano, desenhamos cerca de 300 safras customizadas trabalhando lado a lado com nossos donos, e dessa experiência, acumulamos consideráveis conhecimento e expertise - arduamente conquistados. Nenhuma outra bodega sabe tanto sobre produção de vinhos customizados como sabemos, e isto está se tornando visível. </p>',
                'image' => 'vines_3-0-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 31,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Vinhos dos Proprietários dos Private Vineyards ',
                'subtitle' => 'Estamos em busca de fazer o melhor vinho do mundo',
                'content' => '  <p>A parte mais gratificante do que fazemos é criar vinhos com nossos proprietários de vinhedos - e os vinhos são fabulosos! A cada ano, desenhamos cerca de 300 safras customizadas trabalhando lado a lado com nossos donos, e dessa experiência, acumulamos consideráveis conhecimento e expertise - arduamente conquistados. Nenhuma outra bodega sabe tanto sobre produção de vinhos customizados como sabemos, e isto está se tornando visível. </p> 
                                <p>Orgulhamos-nos tremendamente por nossos proprietários do Private Vineyards estarem recebendo reconhecimento das grandes indústrias de premiação por seus vinhos. O Solo Contigo Malbec Reserva 2010 e o Solo Contigo Malbec Colection 2010, de Noel & Terry Neeland, conquistaram 92 pontos na Wine Enthusiast, recebendo o status de “Top Shelf” da revista. Outros donos da Europa e dos Estados Unidos constantemente atingem altas posições no International Wine Challenge (IWC) do Reino Unido.  </p>
                                <p>Nossos proprietários de vinhedos não somente conseguiram o respeito dos mais severos críticos, como também alcançaram sucesso comercial com safras esgotadas e garrafas chegando a custar U$125 nos Estados Unidos. Claro, todos eles têm enorme prazer e orgulho em compartilhar seus vinhos próprios com a família e os amigos. </p>
                                
                                <div class="row-fluid">
                                    <div class="span10">
                                        <img src="/uploads/images/vines_3-1-1.jpg">
                                    </div>
                                </div>
                                <blockquote>
                                    <p>"Quando as pessoas me perguntam sobre minha experiência na The Vines of Mendoza, eu sempre repito uma frase que minha filha me disse quando visitou pela primeira vez os vinhedos da The Vines: " Pai, você não comprou um pedaço de terra, você comprou um pedacinho do céu."</p>
                                    <small>Emerson (MG), Proprietario dum Vinhedo</small>
                                </blockquote>',
                'image' => 'vines_3-1-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 31,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Vinhos Recuerdo',
                'subtitle' => 'Memórias engarrafadas com nossos donos dos Private Vineyards e nossa equipe ',
                'content' => '  <p>A Wine Spectator, Wine Advocate & Wine Enthusiast estão avaliando nossos vinhos com mais de 90 pontos. </p>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p>A marca de assinatura da The Vines of Mendoza, os Recuerdo Wines, são excepcionais vinhos Premium feitos com o excesso das uvas dos proprietários de vinhedos (eles podem vendê-las para The Vines, ou para outras vinícolas) e que capturam o melhor do peculiar terroir argentino, especificamente a alta altitude ensolarada do Valle de Uco. </p>
                                    </div>
                                    <div class="span5">
                                        <p>A Wine Spectator avaliou o Recuerdo Reserva 2011 com 92 pontos e o Recuerdo Gran Corte 2011 com 91 pontos. A Wine Advocate também pontuou o Recuerdo Gran Corte 2010 em 92, e o Recuerdo Malbec 2011 em 90. É um momento histórico para nós: nossos vinhos, e os vinhos dos proprietários dos Private Vineyards, são frequentemente elogiados e reconhecidos pelos expertos da indústria. </p>
                                    </div>
                                </div>',
                'image' => 'vines_3-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 31,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'A Equipe de Produção de Vinhos da The Vines',
                'subtitle' => 'Uma equipe internacionalmente aclamada',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Santiago Achával, Enólogo Consultor</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/santiago.jpg&w=440"></p>
                                        <p>Como proprietário da vinícola Achaval-Ferrer, Santiago foi reconhecido como um dos líderes da enologia mundial pela Wine Spectator e pela Wine Advocate de Robert Parker. Seus vinhos consistentemente são pontuados acima dos 90; sua paixão por produzir e ensinar outros é incomparável. Como enólogo consultor da The Vines of Mendoza, tem seu escritório transformado em uma sala de degustações repleta de vinhos e garrafas aguardando por seu crítico paladar. Ele está intimamente envolvido com cada vinho de cada dono, e seus ensinamentos nas vinhas transbordam décadas de experiências, permitindo aos nossos visitantes desfrutar de verdadeira participação na experiência de produção.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Pablo Martorell, Enólogo</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/pablo.jpg&w=440"></p>
                                        <p>O enólogo da The Vines of Mendoza, Pablo Martorell, é jovem, mas reconhecido. Tendo conquistado altas notas na Wine Spectator, Wine Advocate e Wine Enthusiast pelos vinhos Recuerdo, da The Vines. Nascido e criado em Tunuyán, a poucos minutos do nosso vinhedo, trabalhou em algumas das mais aclamadas vinícolas de Mendoza, incluindo a Bodega Nieto Senetiner, Catena Zapata, Trivento e na Bodega Flecha de Los Andes, sob a supervisão de Michel Rolland. Em 2006 ele trabalhou na Château de Lauret em Pomerol, Bordeaux, e, em 2007, para a Chateau Peyre Lebade e Château Clarke em Medoc, Bordeaux, ambas parte do Grupo Rothschild. </p>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>Francisco Evangelista, Diretor Agrônomo</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/francisco.jpg&w=440"></p>
                                        <p>Vindo de uma família mendocina de cultivadores de uva, e trabalhando em vinhedos desde 1994, Francisco Evangelista vem gerindo o desenvolvimento dos vinhas na The Vines of Mendoza desde o começo da empresa, antes mesmo de haverem parreiras no solo. Atualmente, ele administra as mais de 300 hectares já plantadas. Anteriormente à The Vines, Francisco trabalhou com a produção de vinhos para muitas vinícolas influentes em Mendoza, assim como na Wente Vineyards, no Livermore Valley, Califórnia.</p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>Mariana Onofri, Diretora de Vinhos</strong></p>
                                        <p><img src="/libs/timthumb.php?src=../uploads/images/mariana.jpg&w=440"></p>
                                        <p>Mariana Onofri tem sido a Diretora de Vinhos na The Vines of Mendoza desde 2009, supervisionando os planos de produção e a customização de todos os vinhos dos donos de vinhedos. Isso inclui a supervisão de sessões de corte (blending) e provas de barril para os mais de 130 proprietários de vinhedos que a empresa possui; sendo 300 vinhos em processo de fermentação considerando-se apenas a colheita de 2013. Ela também gerencia a seleção de rótulos das Tasting Rooms (Salas de Degustação) da The Vines, da Vinoteca, além daqueles de venda online. Anteriormente à The Vines, ela trabalhou na Chateau La Violette em Pomerol, Bordeaux, França, e foi também Sommelier no Restaurante La Bourgogne em Punta Del Este, Uruguai. </p>
                                    </div>
                                </div>',
                'image' => 'vines_2-1.jpg',
                'video' => null
                ],
            /*[   'package_tab_id' => 32,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'Finances',
                'subtitle' => null,
                'content' => '<p>Managing the finances of your vineyard is simple when you’re working with the right team of experts. Our local relationships, paired with our efficiency and expertise, keep your money matters simple.</p>',
                'image' => 'vines_4-1-1.jpg',
                'video' => null
                ],*/
            [   'package_tab_id' => 32,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Economias do Vinhedo',
                'subtitle' => 'Do plantio à exportação ',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p><strong>1) Quanto custa ter um Private Vineyard (Vinhedo Privado)?</strong><br>
                                        Seu investimento de U$ 210.000 por hectare por um vinhedo a ser plantado para você (ou desde U$ 235000 para vinhedos plantados entre 2007 e 2013) incluem a escritura do terreno, plantio, cuidados agrícola e custos de manutenção para as duas primeiras temporadas de cultivo e crescimento (18 meses aproximadamente desde a plantação). Você, e sua família, irá aproveitar esses vinhedos por gerações.  </p>

                                        <p><strong>2) O que posso esperar de minha aquisição?</strong><br>
                                        Os vinhedos de alta qualidade em Mendoza continuam a ser cada vez mais valorizados. Espere a experiência mais gratificante de possuir um vinhedo. Espere um investimento em uma região que é como o Napa Valley de 25 anos atrás. Espere compartilhar a magia de seu próprio vinho com seus amigos e sua família, por décadas. </p>
                                        <p>Fundada em 2004, somos a combinação do melhor da América do Norte e da Argentina: a paixão e os relacionamentos para fazerem as coisas acontecerem pareados com o rigor e excelência norte-americana em práticas empresariais para fazerem as asas de nossa imaginação voarem. Estamos em busca de  fazer o melhor vinho do mundo. </p>

                                        <p><strong>3) Qual é o custo da vinificação? </strong><br>
                                        Produzir um vinho super Premium (R$200-300 preço médio de varejo no Brasil) custa grosseiramente R$11–14 por garrafa. Vinhos Premium (R$70 preço médio de varejo no Brasil), cerca de U$6 por garrafa. Esses custos incluem produção (vinificação), barris, garrafas, cápsulas, rótulos e todas as outras despesas de produção. </p>
                                    </div>
                                    <div class="span5">
                                        <p><strong>4) Qual é o custo de cultivo?</strong><br>
                                        Os custos anuais de cultivo são de aproximadamente U$10.000 por hectare. Uma vez que as vinhas atingem a maturidade, 5 anos após o plantio, elas devem produzir aproximadamente  10.000kg de uvas Premium por hectare, ou 5.000kg de uvas super Premium por hectare. Isto, em conversão, irá produzir entre 9.000 a 4.500 garrafas de vinho. Lembre-se de que para produzir vinhos de maior qualidade, a quantidade por hectare tem que ser menor, e as uvas menores e mais robustas.  Considera-se, dentro desses custos, um 25% dos custos direitos como taxa de administração. </p>

                                        <p><strong>5) Posso vender minhas uvas? </strong><br>
                                        A maioria dos donos diluem seus custos de cultivo e produção vendendo algumas, ou todas, suas uvas. Por exemplo, se um proprietário vender 2.800kg de uvas por U$1,50/kg, sua venda compensa o custo de fazer uma barrica (286 garrafas aproximadamente) de vinho super Premium (aproximadamente U$4.200 de custo), ou o 40% (aprox.) do custo de cultivo anual de um hectare. Alguns proprietários adiam a produção de vinhos para tirar proveito dos rendimentos da venda de uvas. </p>

                                        <p><strong>6) O que é o processo de importação/exportação?</strong><br>
                                        Após  seu vinho envelhecer e estar pronto para ser aproveitado, nós lidamos com todos os detalhes regulatórios para levá-lo até você: exportação/importação, alfândega, envio e aprovação do rótulo. Também podemos desenvolver uma loja online para ajudá-lo a vender o seu vinho.  </p>
                                    </div>
                                </div>',
                'image' => 'vines_4-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 33,
                'header_bool' => 1,
                'order' => 0,
                'title' => 'The Vines Resort & Spa',
                'subtitle' => null,
                'content' => '  <p>O The Vines Resort & Spa oferece um descontraído luxo na base da imponente Cordilheira dos Andes e é o destino ideal para os amantes do vinho e os que apreciam aventuras ao ar livre. Nós recebemos nossos hóspedes como se fossem amigos próximos, oferecendo aventuras únicas e incomuns para enriquecer suas experiências argentinas.</p>
                                <p>Nós recebemos os proprietários como se eles fossem velhos amigos, buscando proporcionar aventuras únicas e peculiares para enriquecer suas experiências argentinas.</p>',
                'image' => 'vines_5-0.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 33,
                'header_bool' => 0,
                'order' => 1,
                'title' => 'Residence Villas',
                'subtitle' => 'Mistura perfeita entre rústica elegância e moderno conforto, amarrada com calorosa hospitalidade',
                'content' => '  <p>O The Vines Resort & Spa irá inaugurar em 1º de janeiro de 2014. Todos os donos de vinhedo receberão 50% de desconto para o Resort e acesso especial para seus luxuosos serviços, incluindo o Siete Fuegos e o The Vines Spa. Nós já estamos aceitando reservas, por favor visite “Seu Convite” neste pacote para solicitar mais informações sobre uma Villa só sua.</p>
                                <p><a href="/uploads/downloads/VinesResortPlan.pdf" target="_blank"><img src="/uploads/images/vinesmap-pt.jpg"></a></p>
                                <p style="text-align:right"><a href="/uploads/downloads/VinesResortPlan.pdf" target="_blank">Vista ampliada del Plan Resort</a></p>',
                'image' => 'vines_5-1.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 33,
                'header_bool' => 0,
                'order' => 2,
                'title' => 'Siete Fuegos de Francis Mallmann',
                'subtitle' => 'Cozinha argentina a chama aberta, refinada por mais de cem anos, em nosso restaurante exclusivo ',
                'content' => '  <div class="row-fluid">
                                    <div class="span5">
                                        <p>Mergulhe seus sentidos na graça natural dos rústicos sabores do fogo, acompanhados por excepcionais vinhos do Valle de Uco, onde o internacionalmente aclamado chef argentino, Francis Mallmann, apresenta sua irreverente cozinha em nosso restaurante de exclusivo.</p>
                                    </div>
                                    <div class="span5">
                                        <p>Os visitantes irão aproveitar especialidades como a costela de lento cozimento, assada por 9 horas; o salmão encrustado com sal grosso, assado sobre ferro fundido; frutas sazonais grelhadas e outros pratos harmonizados com nossos premiados vinhos de vinícolas boutique. </p>
                                        <p style="text-align:right"><a href="http://www.vinesresortandspa.com/wine-dine/reservation/" class="btn btn-info" target="_blank">Fazer uma reserva</a></p>
                                    </div>
                                </div>',
                'image' => 'vines_5-2.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 33,
                'header_bool' => 0,
                'order' => 3,
                'title' => 'The Vines Spa',
                'subtitle' => 'Uma experiência multissensorial, só para você ',
                'content' => '  <p>Revigore seus sentidos e rejuvenesça seu corpo. Nossas experiências de Spa e Academia são desenhadas para energizar, relaxar, restaurar e reabastecer seu corpo, mente e espírito, através dos prósperos elementos naturais do Valle de Uco.</p>
                                <p>Todos os tratamentos do Spa são adaptados às suas preferências e elaboradas para submergir seus sentidos por completo, incorporando aroma, som, vista e toque. Sua experiência no Spa começa ao escolher um aroma especialmente formulado, que evoca um elemento distinto inspirado pelas ricas redondezas do Valle de Uco. Desenvolvido pelo laboratório de perfumes argentinos, FUEGUIA 1833, essas fragrâncias combinam-se com os elementos fogo, água, ar, terra ou luz. Nossos terapeutas irão ajudar a planejar o tratamento ideal para suas necessidades e desejos.</p>',
                'image' => 'vines_5-3.jpg',
                'video' => null
                ],
            [   'package_tab_id' => 34,
                'header_bool' => 1,
                'order' => 0,
                'title' => null,
                'subtitle' => null,
                'content' => null,
                'image' => null,
                'video' => null
                ],
        );

        // Uncomment the below to run the seeder
        DB::table('tab_sections')->insert($tab_sections);
        
/*
        foreach($tab_sections as $key => $section) {
            $id = $key + 1;
            if(DB::table('tab_sections')->where('id', $id)->update($section)) {
                echo "Tab Section ({$id}) updated!\n";
            }
        }

        */
    }

}