<div class="footer">
    <div class="w3-xlarge w3-section social">
        <a href="https://instagram.com/<?= $instagram ?>" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
        <a href="https://t.me/<?= $telegramgroup ?>" target="_blank" class="text-white"><i class="fab fa-telegram"></i></a>
        <a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp ?>" target="_blank" class="text-white"><i class="fab fa-whatsapp"></i></a>
        <a href="https://t.me/<?= $telegram ?>" target="_blank" class="text-white"><i class="fab fa-telegram"></i></a>
    </div>

    <p>
        Copyright © 2021 - 2022 Sekolah Ekspor Impor All Rights Reserved.
        <br>CV Surya Eka Internusa
        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
    </p>
</div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/isotope.min.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/owl-carousel.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/lightbox.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/tabs.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/video.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/slick-slider.js"></script>
<script src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/js/custom.js"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
</script>