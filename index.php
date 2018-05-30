<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DoTerra</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
    <link href="/app/modules/angular-material/1.1.5/angular-material.min.css" type="text/css" rel="stylesheet">
    <link href="/app/css/app.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-messages.min.js"></script>
    <!-- https://github.com/a8m/angular-filter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.16/angular-filter.js"></script>
    <script src="/app/modules/angular-material/1.1.5/angular-material.min.js"></script>
    <!-- Modules -->
    <script src="/app/app.js"></script>
    <!-- Controllers -->
    <script src="/app/controllers/main-ctrl.js"></script>
    <!-- Directives -->
  </head>
  <body ng-app="app" ng-cloak>
    <div class="mainContainer" ng-controller='mainCtrl'>
        <header
                layout="row"
                layout-align="space-around center">
            <label class="md-display-1">Kate Williams Health</label>
            <md-menu hide-gt-sm>
                <md-button aria-label="Open navigation menu"
                        class="md-icon-button"
                        ng-click="$mdMenu.open()">
                <md-icon md-menu-origin md-svg-icon="\app\assets\images\icons\baseline-menu-24px.svg"></md-icon>
                </md-button>
                <md-menu-content width="4"
                                md-selected-menu-item="currentMenuItem">
                <md-menu-item ng-click="navToSection1()" name="section1Nav">
                    <md-button>{{ section_1 }}</md-button>
                </md-menu-item>
                <md-menu-item ng-click="navToSection2()" name="section2Nav">
                    <md-button>{{ section_2 }}</md-button>
                </md-menu-item>
                <md-menu-item ng-click="navToSection3()" name="section3Nav">
                    <md-button>{{ section_3 }}</md-button>
                </md-menu-item>
                <!-- <md-menu-item ng-click="goto('page4')" name="page4">
                    <md-button>Page Four</md-button>
                </md-menu-item> -->
                </md-menu-content>
            </md-menu>
            <md-nav-bar
                hide
                show-gt-sm
                md-theme="default"
                md-no-ink-bar="true"
                md-selected-nav-item="currentNavItem"
                nav-bar-aria-label="navigation links"
                layout="row"
                layout-align="center center"
                flex="50">
                <md-nav-item md-nav-click="navToSection1()" name="section1Nav">
                    {{ section_1 }}
                </md-nav-item>
                <md-nav-item md-nav-click="navToSection2()" name="section2Nav">
                    {{ section_2 }}
                </md-nav-item>
                <md-nav-item md-nav-click="navToSection3()" name="section3Nav">
                    {{ section_3 }}
                </md-nav-item>
                <!-- <md-nav-item md-nav-click="goto('page4')" name="page4">
                Page Four
                </md-nav-item> -->
            </md-nav-bar>
        </header>
        <md-toolbar class="headerContainer bgHeaderImg"
                    layout="inherit"
                    layout-align="center center">
            <label class="md-display-3 textWhite" style="font-weight: 700">Getting Started With doTerra</label>
        </md-toolbar>
        <md-content-container id = "section_1"
                              class="md-padding md-margin"
                              md-whiteframe="5"
                              md-theme="default"
                              layout="column"
                              layout-align="center stretch">
            <md-toolbar layout="column" layout-align="center center" class="hue-1">
                <label class="md-display-1">{{ section_1 }}</label>
            </md-toolbar>
            <br/>
            <label class="md-headline"><strong>My Testimony</strong></label>
            <p>
                I've personally experienced the amazing benefits of using doTerra essential oils for mental health.
                For the last few years, I've used them to help me manage my severe anxiety and panic attacks.
                Honestly, I can't imagine a day without my oils. I'm obsessed! ❤
                <br/>
                There are so many ways to use essential oils, it's difficult to understand their amazingness without experiencing them firsthand.
                Contact me if you would like to try samples and/or join one of my online essential oils retreats which includes free samples and everything you need to know about how to use them!
                <strong>Xoxo</strong>
            </p>
            <p>
                doTERRA means “gift of the Earth” and that is truly what these oils are to me.
                doTERRA is a wellness company with the purest essential oils in the world as their core product
                and they have an amazing vision to help every home feel empowered to use natural approaches in
                their health + self care. I immediately saw that doTERRA was in the early stages of forming a
                revolution.  Where women (and men) around the globe would feel more empowered to take care of their
                family’s health in a natural way. Where health coaches could help their clients go to that next level
                of wellness. I wanted to be a part of it all - I believe so much in doTERRA’s mission.
                You will be amazed at what the oils will do for you  - there’s over 100 things you can do with the
                lemon, lavender + peppermint alone!
                Here is an essential oils video my friend, Ange, recorded for you - it’s about an hour long,
                so make sure your mug of tea is full and warm!
            </p>
            <iframe class="margin-center" width="800" height="500" src="https://www.youtube.com/embed/1fUNu9RBfoE?rel=0"
                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>
        </md-content-container>
        <md-content-container id = "section_2"
                              class="md-padding md-margin"
                              md-whiteframe="5"
                              md-theme="default"
                              layout="column"
                              layout-align="center stretch">
            <md-toolbar layout="column" layout-align="center center">
                <label class="md-display-1">Here's Why Over 3 Million People Use doTerra</label>
            </md-toolbar>
            <p>
                <label class="md-headline"><strong>The Sourcing Model</strong></label>
                <p>
                    doTERRA sources globally and not only that - they work WITH the farmers there to create a better economy.
                    This doesn't matter to everyone - but it did matter to me when I was comparing brands.
                </p>

                <label class="md-headline"><strong>Commitment to Purity Through CPTG Stamps</strong></label>
                <p>
                    There is no governing body that enforces corporations like Walmart,
                    Best Buy or NOW brand to be honest about what they're putting in their bottles.
                    It's important that you research a company and understand what they stand for...
                    and then if you try the oil and it aligns with what that company is saying - you have a great company.
                </p>
            </p>
            <label class="md-display-1">Why doTerra?</label>
            <p>Here are some of my fave reasons!</p>
            <div style="text-align: center;">
                <iframe width="45%" height="315" src="https://www.youtube.com/embed/OEnKOk4ad0U"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
                <iframe width="45%" height="315" src="https://www.youtube.com/embed/o_M4XsYaOxM"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
                <iframe width="45%" height="315" src="https://www.youtube.com/embed/Jbiu-Duwo2k"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
                <iframe width="45%" height="315" src="https://www.youtube.com/embed/OwLbPaIwrow"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>
                I’d like to simplify everything for you in this way…
                the dōTERRA wholesale membership works just like Costco.
                You open up your account and then you purchase your natural health products +
                the world’s most beautiful essential oils at your discount whenever you feel like shopping.
                The products arrive at your doorstep within a few days AND you can opt into ordering monthly
                to access the greatest rewards program ever!
                <br><br>
                <label class="md-headline"><strong>This is the way about 3.5 million people in doTerra purchase.</strong></label>
                <br><br>
                The majority of people begin by purchasing a starter kit,
                but you could also open the account for $35us/$42cdn
                and add whichever items you’d like at the wholesale price.
                (All of the starter kits dōTERRA offers have the wholesale membership included!)
                Also - you should know that there is never an obligation to sell oils or order monthly
                - absolutely no strings attached. But if you are part of the 10% that want to build a doTERRA biz
                - the option is there for you…
                we can chat more about that during our welcome call if it interests you.
            </p>
        </md-content-container>
        <md-content-container id = "section_3"
                              class="md-padding md-margin"
                              md-whiteframe="5"
                              md-theme="default"
                              layout="column"
                              layout-align="center stretch">
            <md-toolbar layout="column" layout-align="center center">
                <label class="md-display-1">Simple Steps to Get Started</label>
            </md-toolbar>
            <p>
                <ol>
                    <li>
                        <md-button class="md-raised md-primary" ng-click="toMyDoTerra()">Click Here</md-button>
                    </li>
                    <li>
                        <p>
                            Go to the "Join & Save" tab at the top of the page
                        </p>
                    </li>
                    <li>
                        <p>
                            Click the "Join DoTerra" box at the bottom right of the screen
                        </p>
                    </li>
                    <li>
                        <p>
                            Keep the "WholeSale Customer" option selected to receive wholesale pricing
                            (a 25% discount), other bonuses + free product points!
                            There is no monthly order commitment. Or select “wellness advocate”
                            if you’re interested in wholesale pricing, monthly bonuses, free product points
                            + are interested in sharing doTERRA products with your family & friends.
                            This option allows you to earn commission.
                        </p>
                    </li>
                    <li>
                        <p>
                            Fill in your personal info
                            The Enroller + Sponsor ID box should already be filled for you.
                            But if not - enter 2674439 in the box and Meghan Doll will appear.
                        </p>
                    </li>
                    <li>
                        <p>
                            Choose whichever starter kit you’re drawn to and add any additional items at the 25% off
                            price to your cart (here are the Canadian and US)
                            Note: If you don’t want to begin with one of the starter kits
                            - you can create your own by selecting the Introductory Packet
                            ($35in the US or $42 in Canada) and then adding a few items to your cart to begin with
                            by typing them into the field that says  “Enter additional item # or product name”.
                            You can view the entire doTERRA Product Catalog here or  (CANADIANS click here).
                        </p>
                    </li>
                    <li>
                        <p>
                            Finalize your shipping and payment options.  Click “Process Order Now & Continue”
                            On the last screen, you’ll be given the option of creating a monthly customized order
                            called Loyalty Rewards. This is how you maximize your wholesale membership
                            by receiving free product!
                        </p>
                    </li>
                </ol>
            </p>
            <label class="md-headline"><strong>Receive a Customized Order Every Month</strong></label>
            <p>
                Your monthly order can be created, changed or cancelled at any time so don’t fret if you skip it now
                and decide you want it later. To take full advantage of the Loyalty Rewards Promos
                - you’ll want to set your monthly ship date to be before the 15th of the month.
                For those months that your order is at least 125 pv - you’ll always receive a free product!
                <br><br>
                Still not sure about what the Loyalty Rewards Program is? <a href="https://youtu.be/SKJs8sL5faU">Watch this video</a>
            </p>
            <img src="/app/assets/images/LRP_chart.png" alt="Loyalty Rewards Eligability Chart" width="560" height="auto" class="margin-center">
        </md-content-container>
        <md-divider></md-divider>
        <footer layout="column" layout-align="center center">
            <p>Email Me: katewilliamshealth@gmail.com</p>
        </footer>
    </div>
    <!-- <div id = 'apiStuff'>

    </div>
    <script>
        var api = "http://katewilliamshealth.com/wp-json/wp/v2/posts";
        var username = 'kwadmin'
        var password = 'MrB00per05'
        var apiStuff = document.getElementById('apiStuff')
        $.get(api, {headers: {Authorization: 'Basic ' + btoa(username + ':' + password)}},function(res){
            console.log(res);
            res.forEach(function(item){
                apiStuff.innerHTML += item.title.rendered;
            })
        })
    </script> -->
  </body>
</html>