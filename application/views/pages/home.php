

<!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card blue-gradient wow fadeIn">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong><?= $title; ?></strong>
                    </h1>
                    <p>
                        <strong>Neko besedilo o izmenjavi datotek</strong>
                    </p>
                    <p class="mb-4">
                        <strong>Testko ima trenutno naloženih <strong>3243</strong> datotek.</strong>
                    </p>
                    <a href="<?php echo base_url(); ?>users/register" class="btn btn-outline-white btn-lg">
                    	Pridruži se
                        <i class="fa fa-graduation-cap ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <!--Section: Cards-->
            <section class="pt-5">

                <!-- Heading & Description -->
                <div class="wow fadeIn mb-5">
                    <!--Section heading-->
                    <h2 class="h1 text-center">Kako testko deluje?</h2>
                    <hr class="mb-5">
                    <!--Section description-->
                    <p class="text-center">Testko je spletna aplikacije namenjena izmenjavi izobraževalnega materiala v digitalni obliki(PDF,Word,mp4,txt,pptx,...)
                        and apps. </p>
                    <p class="text-center mb-5">Testko omogoča brezplačen prenos vseh datotek dokler je razmerje <span class="text-success">pozitivno.</span><br>
                        <strong>Razmerje</strong> je število prenešenih gradiv proti številu naloženih gradiv.</p>
                        <p class="text-center"><strong>Izboljšanje razmerja je možno na več načinov:</strong></p>
	                    <ul class="text-center">
                        	<li>Nalaganje kvalitetnih gradiv</li>
                        	<li>Pomagati na forumu</li>
                        	<li>Podati rešitve za ne rešene naloge</li>
                        	<li>Počakati X dni da se razmerje "resetira??" | "popravi??"</li>
	                    </ul>
                </div>


                <!-- Heading & Description -->
				<h2 class="h1 text-center">Priporočena gradiva</h2>
				<hr class="mb-5">


                <!--Grid row-->
                <div class="row wow fadeIn">
					
                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1-half">
                            <img src="<?php echo base_url(); ?>/assets/images/placeholder.jpg" height="210" alt="">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>MDB Quick Start</strong>
                        </h3>
                        <p class="grey-text">Get started with MDBootstrap, the world's most popular Material Design framework for building responsive,
                            mobile-first sites.</p>
                        <p>
                            <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
                        </p>
                        <a href="https://www.youtube.com/watch?v=cXTThxoywNQ" target="_blank" class="btn btn-primary btn-md">Start tutorial
                            <i class="fa fa-play ml-2"></i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <hr class="mb-5">

                


               

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->


