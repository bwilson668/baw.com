@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="p-b"><strong>My Professional Journey</strong></h2>
    </div>

    <div class="Resume--Timeline">
        <ul class="Timeline">

            <!-- Universal Orlando -->
            <li class="Timeline__item container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-xs-4 text-center Timeline__connector">
                                <p>2014</p>
                                <hr class="Timeline__line">
                            </div>
                            <div class="col-xs-8 p-a-0">
                                <img src="/img/uo-globe-glow.png" alt="Universal Orlando" class="Timeline__image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Universal Orlando</h3>
                        <h4>Consumer Insights Tech Team</strong></h4>
                        <p><em>Programmer Analyst</em> | 2014 - Current</p>
                    </div>
                </div>

                <div class="p-a">
                    <p>
                        I was hired at Universal Orlando to maintain old .NET applications that created PDF reports, but what I was able to add to the team was so much more.
                    </p>
                    <p>
                        Since then the Consumer Insights department has transitioned from scanning paper surveys and reporting flat PDF or Excel files to an agile research stack that matches industry leaders.
                        The marriage of
                        <a href="//www.qualtrics.com" target="_BLANK">Qualtrics</a>,
                        <a href="//www.alteryx.com" target="_BLANK">Alteryx</a>, and
                        <a href="//www.tableau.com" target="_BLANK">Tableau</a>
                        has lead to a quick time to insight and increased trust from the organization.
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>Workflow Automation</strong>
                                 – Developed processes that automated manual processes, saving hundreds of man-hours over a year. Scheduled the processes at off-hours to avoid interrupting anyone's workflow, while maintaining process transparency with email status reports.
                             </p>
                        </li>
                        <li>
                            <p>
                                <strong>Application Development</strong>
                                 – Developed several internal tools and relaunched
                                 <a href="https://visitorsatisfaction.com/contactus" target="_BLANK">Universal Orlando’s Contact Us</a>
                                 , which allows Guest Services to field all the needs of online guests
                             </p>
                        </li>
                        <li>
                            <p>
                                <strong>Deployment Pipeline</strong>
                                 – Brought in a deployment process, where there was none before, that included version control, a staging environment, and integration tests
                             </p>
                        </li>
                        <li>
                            <p>
                                <strong>Server Architecture</strong>
                                 – Determined the proper server configuration for the different services the department uses and the scale at which we use them
                             </p>
                        </li>
                        <li>
                            <p>
                                <strong>Data Integration</strong>
                                 – Brought together information from turnstiles, tickets, finance, digital analytics, and our own survey results
                             </p>
                        </li>
                        <li>
                            <p>
                                <strong>Data Wrangling</strong>
                                 – Built replicable human-fault tolerant data pipelines like interviewer tracking, survey version control, calculated straight-liners, and triple response validation
                             </p>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- TagaPet -->
            <li class="Timeline__item container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-xs-4 text-center Timeline__connector">
                                <p>2012</p>
                                <hr class="Timeline__line">
                            </div>
                            <div class="col-xs-8 p-a-0">
                                <img src="/img/tagapet-logo.jpg" alt="TagaPet" class="Timeline__image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>TagaPet</strong></h3>
                        <p><em>Founding Partner &amp; Lead Developer</em> | 2012 - 2014</p>
                    </div>
                </div>

                <div class="p-a">
                    <p>
                        After graduating college I teamed up with a couple of my business savvy friends to create a business around protecting those furry family members. With the guidance, network, and resources available to
                        <a href="http://awesomeinc.org">Awesome Inc.</a> -- Kentucky's high tech incubator --
                        I was able to bring to life an idea in the form of two products, sell thousands of dollars of our goods, and most importantly reunite pet owners with their missing companions.
                    </p>
                    <p>
                        This promising success and creative NFC enabled pet tags landed us one of ten spots in a leading
                        <a href="http://startupbootcamp.org" target="_BLANK">European accelerator program</a> -
                        <a href="http://www.startupbootcamp.org/alumni/nfc-contactless-2013/tagapet.html" target="_BLANK">Startup Bootcamp</a>.
                        We represented America while in Amsterdam and were the youngest set of co-founders to be selected. From the program and in a partnership with Vodafone, I created a near real-time tracker that used cell phone tower triangulation to pinpoint a pet's location.
                    </p>
                    <p>
                        In the end my company ran out of capital and is now dissolved. Even though it did not work out I would not trade that experience for anything. It accelerated my learning by years and instilled a confidence that I'll always be able to accomplish what is required.
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>Solution Selection</strong>
                                – Assessed and determined which technologies to use by taking in our scale, development timeline, and the resources available
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Location Services</strong>
                                – Developed a device that used cell tower signal strength to determine location, then sent the updated location to our cloud at a set interval
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Platform Integration</strong>
                                – Aggregated Facebook, Twitter, WordPress, Shopify, PayPal, Mailchimp, and our own custom site into one platform
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Systems Administration</strong>
                                – Spun up servers on AWS to support the company’s needs
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>IT Governance</strong>
                                – Configured the firewall to the servers and added SSL encryption
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Project Management</strong>
                                – Broke down business objectives to tasks and assigned them to bi-weekly sprints
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Vendor Management</strong>
                                – Developed, negotiated, and built relationships with vendors for various projects, like a brand redesign and hardware prototype
                            </p>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Showcase Marketing -->
            <li class="Timeline__item container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-xs-4 text-center Timeline__connector">
                                <p>2010</p>
                                <hr class="Timeline__line">
                            </div>
                            <div class="col-xs-8 p-a-0">
                                <img src="/img/showcase-logo.jpg" alt="Showcase Marketing" class="Timeline__image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Showcase Marketing / Enkindle</strong></h3>
                        <p><em>Junior Developer</em> | 2010-2012</p>
                    </div>
                </div>

                <div class="p-a">
                    <p>
                        I got my start at Enkindle as an intern. Showing good promise and a good work ethic, they brought me on as a junior developer through my senior year of college. I was able to build websites for brands such as
                        <a href="http://www.coastapparel.com/" target="_BLANK">Coast Apparel</a>,
                        <a href="http://www.realtree.com/" target="_BLANK">Realtree</a>, and
                        <a href="http://rickerwins.com/" target="_BLANK">Rick Erwin's West End Grille</a> -- a truely superb dining experience in Greenville, SC.
                    </p>
                    <p>
                        It was a great company to get my feet wet in the world of web development and digital marketing.
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>CMS Development</strong>
                                - Enkindle had rolled out a custom content managament system. I was able to help develop WISYWIG editors and page templates.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Mockup to HTML</strong>
                                - Designers passed over photoshop files for new pages or emails and I was responsible for translating the design to clean HTML while extracting the needed images from the mockup.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Implemented SEO Strategies</strong>
                                - This was mainly writing and posting blog articles about the company. There was also some messy meta keyword stuffing when the search engines could still be gamed. While not the most exciting thing for me, it opened my eyes to the world of digital analytics.
                            </p>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Furman -->
            <li class="Timeline__item container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-xs-4 text-center Timeline__connector">
                                <p>2008</p>
                                <hr class="Timeline__line">
                            </div>
                            <div class="col-xs-8 p-a-0">
                                <img src="/img/furman-logo.jpg" alt="Furman" class="Timeline__image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Furman University</strong></h3>
                        <p><em>B.S. Information Technology</em> | 2008 - 2012</p>
                    </div>
                </div>

                <div class="p-a">
                    <p>
                        <a href="http://www.furman.edu/academics/cs/Pages/default.aspx">Furman</a>
                        formalized my childhood interest in computers into a skilled and ambitious young professional. Being a liberal arts institution, I was exposed to much more than CS classes. I believe this was key to my ability to understand new problem domains. Technology does not serve technology -- technology is always applied with a purpose.
                    </p>
                    <p>
                        I also learned my first and important lesson of programming, "Don't get mad at the computer. It's only as smart as you are." Thank you Dr. Catron!
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>Object-Oriented Programming</strong>
                                - The concepts of inheritence, abstraction, encapsilation, and polymorphism were reinforced through the development of a Java registrar application.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Database Design</strong>
                                - I was exhaustively drilled on the different normalized forms and ACID vs. BASE principles. It was still a very enjoyable and practical class.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>iPhone App Development</strong>
                                - In a May X intensive I was able to develop a game of Pong where you played against a NPC and tilted the phone to move your paddle.
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

@endsection
