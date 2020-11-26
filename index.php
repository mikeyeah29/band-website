<?php include 'config.php'; ?>

<?php include('inc/_head.php'); ?>

    <body>

        <?php include('inc/_header.php'); ?>        

        <div class="section section--hero">
            <div class="container d-flex justify-content-center">

                <div class="justify-content-center align-self-center">
                    <div class="hero-logo">
                        <img src="img/logo.png" />
                    </div>

                    <h1 class="latest-headline text-center"><?php echo $headline_one; ?></h1>
                    <a href="<?php echo $streaming_link; ?>" class="streaming_link text-center"><?php echo $call_to_action_text; ?></a>

                    <ul class="social text-center">

                        <?php foreach ($socials as $social) { ?>
                            <li>
                                <a href="<?php echo $social['link']; ?>">
                                    <img src="img/social/<?php echo $social['icon']; ?>" />
                                </a>
                            </li>    
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>

        <div class="section section--photos bg-dark" id="photos">
            <div class="container">

                <h2 class="hdln-2 color-white">Photos</h2>

                <div class="row">

                <?php foreach ($photos as $photo) { ?>
                        
                    <div class="col-sm-4">
                        <div class="square-img mb-4">
                            <a href="img/<?php echo $photo; ?>">
                                <img src="img/<?php echo $photo ?>" />
                            </a>
                        </div>
                    </div>

                <?php } ?>

                </div>
            </div>
        </div>

        <div class="section section--contact bg-light">
            <div class="container">
                
                <h2 class="hdln-2 color-black">Music</h2>

                <div class="row">

                    <?php foreach ($releases as $release) { ?>
                            
                        <div class="col-sm-3">
                            <div class="album-art">
                                <img src="img/<?php echo $release['img']; ?>" />
                                <a href="<?php echo $release['link']; ?>" class="album-art__title"><?php echo $release['title']; ?></a>
                            </div>
                        </div>

                    <?php } ?>

                </div>

            </div>
        </div>

        <div class="section section--photos bg-dark" id="videos">
            <div class="container">

                <h2 class="hdln-2 color-white">Videos</h2>

                <div class="row">
                    <?php foreach ($videos as $video) { ?>
                                
                        <div class="col-sm-4">

                            <iframe src="<?php echo $video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>

                    <?php } ?>
                </div>

            </div>
        </div>

        <footer>
            <div class="container">

                <div class="text-center">
                    <img src="img/100px.png" />
                </div>
                <div class="d-flex justify-content-center">
                    <!-- <a href="<?php // echo $epk_link; ?>">download EPK</a>
                    <span>|</span> -->
                    <a href="mailto:<?php echo $email; ?>">email: <?php echo $email; ?></a>
                </div>
                <p class="text-center text-sm">© <?php echo date('Y'); ?> <?php echo $site_name; ?>. All Rights Reserved.</p>



                <?php include('inc/_mailchimp_signup.php') ?>



            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

        <script type="text/javascript">

            var init_header_position = $('.header').offset().top;

            $(window).on("scroll touchmove", function() {
                var header = $('.header');
                scroll = $(window).scrollTop();
                        
                if (scroll >= $("#photos").position().top - 77) {
                    header.addClass('header--scroll');
                } else{
                    header.removeClass('header--scroll');
                }
            });

            // MENU

            var mainMenu = $('.main-nav-wrapper');
            var burger = $('.burger');
            var closeMenuBtn = $('.close-menu');

            function openMenu(){
                mainMenu.addClass('is-open');
                burger.addClass('is-open');
            }

            function closeMenu(){
                mainMenu.removeClass('is-open');
                burger.removeClass('is-open');
            }

            burger.on('click', function(){
                openMenu();
            });

            closeMenuBtn.on('click', function(){
                closeMenu();
            });

            $('.main-nav a').on('click', function(){
                closeMenu();
            });

        </script>

    </body>
</html>