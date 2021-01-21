<html lang="en-US">
<?php
    include 'header.php';
?>

<body class="page-template page-template-about-page page-template-about-page-php page page-id-114">
    <header class="header js-header" style="color:#020202; background-color:white;">
        <div class="header__content" >
            <div class="header__container">
                <div class="header__row">
                    <a href="index.php"><img class="pre-post__image logo" src="wp-content/uploads/2019/4/newlogo.png" alt="Softech Business Services Pvt Limited"> </a>
                    <button class="hamburger" type="button" title="Open menu" data-role="menu-trigger"><i class="fa fa-bars fa-lg"></i>
                    </button>
                    <div class="header__rpart header__mobile-menu" data-role="header-menu">
                        <?php
                        include 'header_nav.php';
                        ?>
                        <a href="contacts.php" class="btn btn--blue header__btn">
                            <span>Сontact us</span>
                                    </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'header_submenu.php';
        ?>
    </header>
    <main class="body-wrapper" id="main" role="main">
        <div class="welcome welcome--service" style="background-image:url(wp-content/themes/softech-business-services/images/benefits.png);">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-11 col-lg-7 offset-md-1 h-100">
                        <div class="d-flex flex-vam h-100">
                            <h1 class="welcome__heading">Grow beyond the limits</h1></div>
                    </div>
                </div>
            </div>
            <div class="welcome__socials socials">
                <?php
                    include 'social-links.php';
                ?>
            </div>
           <!--  <div class="welcome__counters">
                <div class="container">
                    <div class="row">
                        <div class="col-11 col-lg-5 col-md-10 offset-md-1">
                            <div class="counters">
                                <div class="counters__item">
                                    <div class="counter-item is-loaded" data-animation="counter-item">
                                        <div class="counter-item__count">
                                            <p data-animation="number" class="odometer odometer-auto-theme">
                                                <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span>
                                                    </span>
                                                    </span>
                                                    </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span>
                                                    </span>
                                                    </span>
                                                    </span>
                                                </div>
                                            </p>
                                        </div>
                                        <div class="counter-item__title">
                                            <p>Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="counters__item">
                                    <div class="counter-item is-loaded" data-animation="counter-item">
                                        <div class="counter-item__count">
                                            <p data-animation="number" class="odometer odometer-auto-theme">
                                                <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span>
                                                    </span>
                                                    </span>
                                                    </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span>
                                                    </span>
                                                    </span>
                                                    </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>
                                                    </span>
                                                    </span>
                                                    </span>
                                                </div>
                                            </p>
                                            <p class="extra">+</p>
                                        </div>
                                        <div class="counter-item__title">
                                            <p>Projects</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="counters__item">
                                    <div class="counter-item is-loaded" data-animation="counter-item">
                                        <div class="counter-item__count">
                                            <p data-animation="number" class="odometer odometer-auto-theme">
                                                <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span>
                                                    </span>
                                                    </span>
                                                    </span>
                                                </div>
                                            </p>
                                        </div>
                                        <div class="counter-item__title">
                                            <p>Awards</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="under-welcome"></div>
        <section class="sc grid-text">
            <div class="container">
                <div class="row grid-text__item text-item is-animated" data-animation="section">
                     <div class="col-12 col-lg-4 col-sm-5 text-item__image text-item__image_float-left" data-animation="fade-in">
                        <img style="height:230px;width:100%;" src="wp-content/uploads/2019/09/mission.jpg" alt="mission">
                     </div>
                    <div class="col-12 col-lg-8 offset-lg-4 col-sm-7 offset-sm-5 text-item__title">
                        <h2 class="sc__heading" data-animation="title" data-split-text="true">Our Mission</h2></div>
                    <!-- <div class="col-12 text-item__icon" data-animation="fade-in-up"><i class="fa fa-desktop fa-4x"></i></div> -->
                    <div class="col-12 col-lg-4 offset-lg-4 col-sm-7 offset-sm-5 text-item__text" data-animation="text">
                        <p>Having grown beyond the limits of a mobile and web development company, we defined our goals. Our mission is to help you to enhance and grow your business while overcoming technology challenges.</p>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-7 offset-lg-0 offset-sm-5 text-item__text" data-animation="text">
                        <p>Whether there is a need for website development, efficient project management or a full-scale digital transformation, Softech’s and constantly updated insight on the latest custom software development tendencies, powerful leadership and next level technologies are here to empower business owners with the benefits of the digital world.</p>
                    </div>
                </div>
                <div class="row grid-text__item text-item" data-animation="section">
                    <div class="col-12 col-lg-4 col-sm-5 text-item__image text-item__image_float-left" data-animation="fade-in">
                        <img src="wp-content/uploads/2019/09/vision.jpg" style="height:210px; width:100%;margin-top: 30px;" alt="vision">
                    </div>
                    <div class="col-12 col-lg-8 offset-lg-4 col-sm-7 offset-sm-5 text-item__title">
                        <h2 class="sc__heading" data-animation="title" data-split-text="true">Our Vision</h2>
                    </div><!-- 
                    <div class="col-12 col-lg-8 offset-lg-4 col-sm-7 offset-sm-5 text-item__icon" data-animation="fade-in-up"></div> -->
                    <div class="col-12 col-lg-4 offset-lg-4 col-sm-7 offset-sm-5 text-item__text" data-animation="text">
                        <p>New opportunities bring new inspiration and digital era is generous with possibilities. The accomplishments that used to take five years to achieve, now can be attained in just two years of using right digital solutions.</p>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-7 offset-lg-0 offset-sm-5 text-item__text" data-animation="text">
                        <p>It is a powerful knowledge that we aim to share. Through our work, we show and spread the benefits of positive digital experience, let our clients enjoy the faster, easier and more productive way of business management and encourage the emergence of new transformative projects.</p>
                    </div>
                </div>

                <div class="row grid-text__item text-item" data-animation="section">
                    <div class="col-12 col-lg-7 text-item__image" data-animation="fade-in">
                        <img src="wp-content/uploads/2019/4/newlogo.png" alt="SBS">
                    </div>
                    <div class="col-12 col-lg-5 text-item__title" style="margin-top: 249px;">
                        <h2 class="sc__heading" data-animation="title" data-split-text="true">What is SBS?</h2>
                        <div data-animation="text">
                            <p>Immediately after beginning its path of software development in 2016, SBS company has been working with small and medium businesses and enterprises in the USA and Europe. Rapidly evolving into a versatile brand specialized in providing modern software development solutions and website development services SBS is recognized as a beneficial partner by global company LSUK (Language Services UK) to offer verity of services regarding with software and support.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="row grid-text__item text-item" data-animation="section">
                    <div class="col-12 col-lg-5 offset-lg-1 text-item__text text-item__text_small cta-item">
                        <div class="item-inner">
                            <h3 class="cta-item__title" data-animation="title" data-split-text="true">Start building your next level brand now!</h3>
                            <div class="cta-item__button" data-animation="fade-in-up">
                                <button class="btn btn--blue" type="button" onclick="function register(){window.location.href='portal/register.php';};register()"><span>Register with Us</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 text-item__text" data-animation="text">
                        <p style="margin-left: 97px;">Currently, SBS cooperates with multiple clients worldwide, enabling them to digitize their business for a better profitability, task management, and goal setting. With its top tier development software, mobile gaming tools, AI tech, multi-skilled team leaders and accomplished frontend/backend experts, Softech Business Services exists to meet your custom development needs.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="sc pb-0 mb-minus-sc">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <header class="sc__header services__header">
                            <h2 class="sc__heading" data-animation="title" data-split-text="true">How do we work?</h2>
                            <p class="sc__subheading" data-animation="subtitle" data-split-text="lines">Our approach is based on understanding, agility and the perfect ratio of human resources, technology, heart and complex, yet fail-proof Scrum technology.</p>
                        </header>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="sc js-m-tabs o-hidden m-tabs">
            <div class="container">
                <div class="images-with-hr js-m-tabs-triggers">
                    <div class="img-tab active">
                        <div class="m-square-icon"> <i class="icon-request m-icon"></i></div> <span>Request</span></div>
                    <div class="img-tab">
                        <div class="m-square-icon"> <i class="icon-research m-icon"></i></div> <span>Research</span></div>
                    <div class="img-tab">
                        <div class="m-square-icon"> <i class="icon-identify m-icon"></i></div> <span>Identify</span></div>
                    <div class="img-tab">
                        <div class="m-square-icon"> <i class="icon-assemble m-icon"></i></div> <span>Assemble</span></div>
                    <div class="img-tab">
                        <div class="m-square-icon"> <i class="icon-webdev m-icon"></i></div> <span>Development</span></div>
                    <div class="img-tab">
                        <div class="m-square-icon"> <i class="icon-outcome m-icon"></i></div> <span>Outcome</span></div>
                </div>
                <div class="tabs__content js-m-tabs-scene">
                    <div class="tabs__item m-tabs__content active">
                        <div class="row-content"><span class="sc__h3 row-content__heading">Request</span>
                            <ul class="row-content__list styled-list">
                                <li class="tab-list-item"><span> We receive a detailed outline of the client’s project idea, information about the client’s target audience,  goals and vision of their digital project. This is a collaborative process that  involves participation of  every specialist on the project team. </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs__item m-tabs__content">
                        <div class="row-content"><span class="sc__h3 row-content__heading">Research</span>
                            <ul class="row-content__list styled-list">
                                <li class="tab-list-item"><span> We run an extensive analysis relevant to the project and perform competitive analysis to define how to make your digital solution unique and capable of overcoming the challenges. </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs__item m-tabs__content">
                        <div class="row-content"><span class="sc__h3 row-content__heading">Identify</span>
                            <ul class="row-content__list styled-list">
                                <li class="tab-list-item"><span> We outline the milestones, select the technologies, skills and tools that will make your project shine, estimate time and costs. After this, our digital sprint begins!</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs__item m-tabs__content">
                        <div class="row-content"><span class="sc__h3 row-content__heading">Assemble</span>
                            <ul class="row-content__list styled-list">
                                <li class="tab-list-item"><span> We bring together an exclusive team of experts with the skills that guarantee your project’s success. We assign the tasks, establish a communication between the team and the client.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs__item m-tabs__content">
                        <div class="row-content"><span class="sc__h3 row-content__heading">Development</span>
                            <ul class="row-content__list styled-list">
                                <li class="tab-list-item"><span> Our team works on the creation, development or integration within a fixed and reviewed time schedule to bring your project to life. All progress is documented, reviewed and discussed on the daily or weekly basis. </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs__item m-tabs__content">
                        <div class="row-content"><span class="sc__h3 row-content__heading">Outcome</span>
                            <ul class="row-content__list styled-list">
                                <li class="tab-list-item"><span> We deliver the finished project to the client. The result of our services increases the business efficiency and revenue growth of the client, allowing to achieve cost optimization,  automate and simplify the business processes, increase the number of customers, their satisfaction rate. </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container" data-role="mobile-slider">
                            <div class="swiper-wrapper lists-slider">
                                <div class="swiper-slide col-12 col-md-6 col-lg-4 lists-slider__item">
                                    <div class="item-inner">
                                        <h3 class="sc__h3">AI/Machine learning</h3>
                                        <ul class="styled-list">
                                            <li><span>Unleashing the potential of A.I. (iOS, Android, hybrid platforms, custom software)</span></li>
                                            <li><span>Learning models  for safe decision making</span></li>
                                            <li><span>Utilizing Java tools, Python, JavaScript and C# for building and superior flexible Machine Learning</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide col-12 col-md-6 col-lg-4 lists-slider__item">
                                    <div class="item-inner">
                                        <h3 class="sc__h3">UX/UI design</h3>
                                        <ul class="styled-list">
                                            <li><span>Website design that bonds with users</span></li>
                                            <li><span>Unique corporate design for enterprise software.</span></li>
                                            <li><span>Convenience and quick performance at the core of visual design</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide col-12 col-md-6 col-lg-4 lists-slider__item">
                                    <div class="item-inner">
                                        <h3 class="sc__h3">BIG DATA</h3>
                                        <ul class="styled-list">
                                            <li><span>Tools  and platforms for sorting, processing and managing your Big Data</span></li>
                                            <li><span>Powerful databases (MongoDB, Oracle, Redis, MySQL, etc)</span></li>
                                            <li><span>Solid  network for a better employee communication</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide col-12 col-md-6 col-lg-4 lists-slider__item">
                                    <div class="item-inner">
                                        <h3 class="sc__h3">QA</h3>
                                        <ul class="styled-list">
                                            <li><span>Inclusive range of tests to ensure the  quality of the your project</span></li>
                                            <li><span>Transparent methods and tools for testing usability</span></li>
                                            <li><span>Security, and performance testing</span></li>
                                            <li><span>Real user monitoring for your digital project</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide col-12 col-md-6 col-lg-4 lists-slider__item">
                                    <div class="item-inner">
                                        <h3 class="sc__h3">PM</h3>
                                        <ul class="styled-list">
                                            <li><span>Timely delivery of the digital project  for your company</span></li>
                                            <li><span>Three Engagement Model types to choose from</span></li>
                                            <li><span>Wide range of resource management options</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 lists-slider__item lists-slider__item_hidden-mobile cta-item">
                                    <div class="item-inner">
                                        <h3 class="cta-item__title">Start building your next level brand now!</h3>
                                        <div class="cta-item__button" data-animation="fade-in-up">
                                            <button class="btn btn--blue" type="button" data-fancybox="" data-src="#modal-form"><span>Get free quote</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination c-blue"></div>
                        </div>
                        <div class="col-12">
                            <div class="lists-slider__button" data-animation="fade-in-up">
                                <button class="btn btn--blue" type="button" data-fancybox="" data-src="#modal-form"><span>Get free quote</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<?php
include 'contact_us_form.php';
?>
    </main>
    <?php
        include 'footer.php';
    ?>
    <div id="thankmodal" style="display:none">
        <p class="h2 c-secondary">Thank you</p>
        <p>Our project manager will call you soon to begin
            <br> your new digital experience! Softech company wishes
            <br> you a great day</p>
    </div>
    <div id="modal-form" style="display:none">
        <p class="h2 mb-0 text-center">Contact us</p>
        <form class="form free-quote-form contacts__form js-form js-form-sender" data-action="callback" novalidate="">
            <input name="page_title" type="hidden" value="Get free quote trigger button">
            <input data-animation="fade-in-up" name="user_name" type="text" placeholder="Name">
            <input data-animation="fade-in-up" name="user_tel" type="tel" placeholder="Phone" pattern="[0-9+]$">
            <div class="errors"> <span class="pattern-error-text">Invalid phone number</span></div>
            <input data-animation="fade-in-up" name="user_company" type="text" placeholder="Company">
            <input data-animation="fade-in-up" name="user_email" type="email" placeholder="E-mail*" required="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            <div class="errors"> <span class="require-error-text">Email address is required</span> <span class="pattern-error-text">Invalid email address</span></div>
            <textarea data-animation="fade-in-up" name="user_comment" placeholder="Extra Information"></textarea>
            <select size="1" name="source">
                <option disabled="" selected="">How did you learn about Softech?</option>
                <option value="website">Website</option>
                <option value="newsletters">Newsletters</option>
                <option value="recommendations">Recommendations</option>
                <option value="references">Reference from friends/colleagues</option>
                <option value="social_media">Social media</option>
                <option value="linkedin">Linkedin</option>
                <option value="referral">Referral</option>
                <option value="trade_show">Trade show</option>
                <option value="upwork">Upwork</option>
                <option value="google">Google</option>
                <option value="other_sources">Other sources</option>
            </select>
            <div data-animation="fade-in-up">
                <button class="btn btn--blue form__btn" type="submit"><span>I'm ready to talk</span></button>
            </div>
        </form>
        <p class="text-center f12 form-caption">By sending this form I confirm that I have read and accept Softech&nbsp;<a class="link-underline" href="#">Terms and Conditions</a></p>
    </div>
    <script type="text/javascript" defer="" src="wp-content/cache/autoptimize/js/autoptimize_a03cf0c866d728129af7851542b2ce9d.js"></script>
</body>

</html>