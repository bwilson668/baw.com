@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="green-text">Projects I've Built</h2>

        <p class="lead">
            I have had the opportunity to work on some fun and challenging applications over the years. I pride myself on balancing technical implementation with delivering on the business needs.
        </p>

        <div class="container">

            <div class="PortfolioEntry block block-bordered" id="universal-big-data">
                <h3 class="PortfolioEntry__heading m-b-md">Big Data comes to Consumer Research</h3>
                <div class="row">
                    <div class="col-sm-3 PortfolioEntry__image">
                        <img src="/img/qualtrics-alteryx-tableau.png" alt="Qualtics, Alteryx, and Tableau Integration">
                    </div>
                    <div class="col-sm-9">
                        <div class="PortfolioEntry__tags m-b">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Qualtrics</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Alteryx</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Tableau</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>SQL Server</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>API</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="PortfolioEntry__body">
                            <p>
                                In two years my team went from hand checking paper surveys to having fully automated reports through an enterprise level research stack.
                                We have taken common industry standard research practices and brought them into the Big Data game.
                            </p>
                            <p>
                                So how does Consumer Research fit into Big Data? Well take a look at the three V's of Big Data:
                            </p>
                            <ul>
                                <li>
                                    <strong>Volume</strong> - There are over several dozen longitudinal studies tracking KPIs through the year where we collect close to a million.
                                </li>
                                <li>
                                    <strong>Velocity</strong> - Our responses are brought in every half-hour to update dashboards that let our field team track progress on the fly.
                                </li>
                                <li>
                                    <strong>Variety</strong> - Some studies call for blending in external data sources (DMA, School Schedule, Flight Arrivals), which adds to the challenge.
                                </li>
                                <li>
                                    <strong>Veracity</strong> <small>(BONUS)</small> - Building these data pipelines automates the survey response validation, which ensures consistent and clean data each reporting cycle.
                                </li>
                                <li>
                                    <strong>Value</strong> <small>(BONUS)</small> - This would not be worth the effort if it did not add value. Our leaders can make more informed decisions with the data I help provide.
                                </li>
                            </ul>
                            <p>
                                The combination of Qualtrics for the survey data collection, Alteryx for the data cleaning, SQL Server for the data storage, and Tableau for the data reporting has enabled Big Data in Consumer Resarch. These tools do not work together out of the box and I played a big role in developing a way for them to play nice.
                            </p>
                            <p>
                                I am truly proud of what my team and I have accomplished. I believe we have become industry leaders in our approach to Consumer Research and many other organizations will start to follow suit in the coming years. In the meantime Universal Orlando will continue to set new personal records and make informed strategic decisions from the platform my team has been able to provide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="PortfolioEntry block block-bordered" id="universal-contact-us">
                <h3 class="PortfolioEntry__heading m-b-md">Universal Orlando Contact Us</h3>
                <div class="row">
                    <div class="col-sm-3 PortfolioEntry__image">
                        <img src="/img/uo-contact-us-vip.png" alt="Universal Orlando Contact Us">
                    </div>
                    <div class="col-sm-9">
                        <div class="PortfolioEntry__tags m-b">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Vue.js</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Laravel</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Bootstrap</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="PortfolioEntry__body">
                            <p>
                                I rewrote and deployed the <a href="http://visitorsatisfaction.com/contactus/" target="_BLANK">Universal Orlando Contact Us</a> application. This handles all online guest service requests, everything from a technical issue on the website, to requesting an update to tickets or hotel rooms, to recovering an item lost during their stay.
                            </p>
                            <p>
                                A few fun facts about this application:
                            </p>
                            <ul>
                                <li>It uses real-time form field validation. You cannot submit the form until it is properly completed.</li>
                                <li>There are nested AJAX calls to dynamically update the content whenever the subject or sub-subject changes.</li>
                                <li>The application fires off two emails upon form submission. One for the user to say we got it and a second for the Guest Services team to field the request.</li>
                                <li>Thousands of guests receive help through this tool daily.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="PortfolioEntry block block-bordered" id="tagapet-website">
                <h3 class="PortfolioEntry__heading m-b-md">TagaPet Site Development</h3>
                <div class="row">
                    <div class="col-sm-3 PortfolioEntry__image">
                        <img src="/img/1460681960-TagaPetHome.png" alt="TagaPet Homepage">
                    </div>
                    <div class="col-sm-9">
                        <div class="PortfolioEntry__tags m-b">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Node.JS</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>AWS</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>PHP</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Sublime Text</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="PortfolioEntry__body">
                            <p>
                                The TagaPet website underwent multiple massive changes in the few years it was operating. I relaunched the website on my own four times! It started as a Wordpress site, then I added a custom mobile site. The branding did not match between those two, so it was rewritten in vanilla PHP. The final iteration made use of Node.JS and the Express.JS framework.
                            </p>
                            <p>
                                Thanks to the efforts of the Internet Archive and their fun "<a href="http://archive.org/web/" target="_BLANK">Way Back Machine</a>" you can still see some iterations of the website, even though the site has since been taken down. Looking back on the sites is a lot of fun! I see how the company's strategy developed and the progression of my personal skills.
                            </p>

                            <h4>Wordpress (Iteration 1)</h4>
                            <div class="media">
                                <div class="media-body">
                                    <p>
                                        The Wordpress version of the site was clunky, slow development, and just plain ugly. What the company needed the site to do did not align with what Wordpress does well. It got the idea launched though and I was able to grow from there.
                                    </p>
                                    <p>
                                        Yogi, who is pictured in this profile, is my family pup. He was happy to put our product to the test multiple times.
                                    </p>
                                </div>
                                <div class="media-right">
                                    <img src="/img/tgp-profile.jpg" alt="TagaPet Profile" class="img-thumbnail"/>
                                </div>
                            </div>

                            <h4><a href="http://web.archive.org/web/20140110153931/http://tagapet.com/" target="_BLANK">Vanilla PHP Version</a> (Iteration 3)</h4>
                            <div class="media">
                                <div class="media-body">
                                    <p>
                                        In this version of the site I had learned about Bootstrap. This allowed me to create a mobile and desktop site at the same time. While better visually and functionally, the store was still broken out to its own site and hosted on Shopify.
                                    </p>
                                </div>
                                <div class="media-right">
                                    <img src="/img/TGPHomeV3.png" alt="TagaPet Homepage v3" class="img-thumbnail"/>
                                </div>
                            </div>

                            <h4><a href="http://web.archive.org/web/20140430093333/https://www.tagapet.com/" target="_BLANK">Node.js and Express.js Version</a> (Iteration 4)</h4>
                            <div class="media">
                                <div class="media-body">
                                    <p>
                                        For this version of the site we had a professional design company work with us to provide PSDs and some CSS for the look of the site. In my opinion, we lost some of the mobile responsiveness, but it sure does look good!
                                    </p>
                                    <p>
                                        I also rolled the <a href="#tgp-online-store">online store</a> into the site and created an API for our <a href="#tgp-live-tracker">prototype live-tracker</a> to update the owner of a pet's location in near real-time.
                                    </p>
                                </div>
                                <div class="media-right">
                                    <img src="/img/1460681960-TagaPetHome.png" alt="TagaPet Homepage v4" class="img-thumbnail"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="PortfolioEntry block block-bordered" id="tgp-online-store">
                <h3 class="PortfolioEntry__heading m-b-md">TagaPet Online Store</h3>
                <div class="row">

                    <div class="col-sm-3 PortfolioEntry__image">
                        <img src="/img/TagaPetProducts.png" alt="TagaPet Store">
                    </div>

                    <div class="col-sm-9">
                        <div class="PortfolioEntry__tags m-b">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>E-Commerce</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>PayPal API</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>SSL</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="PortfolioEntry__body">
                            <p>
                                As the company grew there was more demand to integrate the different applications into one platform. Mobile and desktop sites used to be separate, we needed a responsive site so they could live together. Our blog was on Wordpress and needed to be rolled in with our members-only application. Our transactional emails did not match our Mailchimp newsletters, so we needed to bring those two platforms together.
                            </p>
                            <p>
                                I was able to accomplish the other challenges, but an online e-commerce store is different. You are now handling someone's financial information and taking on a lot more liabilty. You have to get a special bank merchant account, add SSL to your site, and stay PCI compliant. This was all before
                                <a href="" target="_BLANK">Stripe</a> or
                                <a href="" target="_BLANK">Braintree</a> had been created (or before I was aware of them at least).
                            </p>
                            <p>
                                Below is the checkout flow that I implemented to build our online store on top of the PayPal API. PayPal returns a token which is used to identify the user and complete a secure transaction.
                            </p>
                            <div class="text-center">
                                <img src="/img/PayPal-API-Flow.png" alt="PayPal API" class="img-thumbnail" width="350" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="PortfolioEntry block block-bordered" id="tgp-live-tracker">
                <h3 class="PortfolioEntry__heading m-b-md">TagaPet Live-Tracker Prototype</h3>
                <div class="row">

                    <div class="col-sm-3 PortfolioEntry__image">
                        <img src="/img/arduino-vodafone.jpg" alt="Live Pet Tracker powered by Arduino and Vodafone">
                    </div>

                    <div class="col-sm-9">
                        <div class="PortfolioEntry__tags m-b">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>API</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>IoT</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Arduino</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Twilio API</span></span>
                                </li>
                                <li>
                                    <span class="text-ribbon text-ribbon-primary m-r"><span>Google Maps API</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="PortfolioEntry__body">
                            <p>
                                Through a partnership with European telecom company Vodafone and a contract with a hardware developer, I was able to prototype a device that tracked its location using cell phone towers.
                            </p>
                            <p>
                                The prototype used an Arduino Uno board and a SIM shield. The SIM card was registered with Vodafone, giving us access to their network. The SIM card was also a nice unique ID to associate to a pet's profile, which allowed me to know which pet's location to update.
                            </p>
                            <p>
                                In order to conserve battery the default time was to have the device ping our server once an hour. Once it pinged our API with the current location data, I would send back a response that set a timer for the next ping. This allowed the owner to determine how often they received updates of their pet's location. If they reported their pet missing the timer would automatically be set to once a minute. The location would be marked on a Google Map that updated with the latest ping.
                            </p>
                            <p>
                                When we made our first successful location update the power of the Internet really struck me. A device in Rotterdam was able to determine its location from 4 cell phone towers close by, it then sent that information to our servers in the AWS N Virginia region, which updated the location in our MongoLab DB in San Francisco. Once the San Fran DB alerted North Virginia the update was succesful that server pushed the updated location to me in Amsterdam, where I viewed it on my cell phone and laptop. This all happened in less than 5 seconds.
                            </p>
                            <div class="text-center">
                                <img src="/img/Real-Time-Tracker.png" alt="Prototype Network Journey" class="img-thumbnail" width="350" />
                            </div>
                            <p>
                                Since it was essentially a mobile phone strapped to a pet's neck, it enabled the pet to send text messages. Buddy could send his owner a text if he wondered off too far. Lucy alerted her master if she sat inactive for too long. This was an interesting concept powered by Twilio, but the location was too inaccurate and the time between location updates was too long for me to productize that feature.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="callout">
                <div class="callout-content">
                    <strong>Want to talk about one of these projects?</strong> Just send me a message!
                </div>
                <div class="callout-secondary">
                    <a href="mailto:bwilson668@gmail.com" class="btn btn-lg btn-block btn-success"><span class="icon icon-mail"></span></a>
                </div>
            </div>

        </div>

    </div>

@endsection
