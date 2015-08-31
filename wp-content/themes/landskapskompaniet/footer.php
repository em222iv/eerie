<footer class="footer-distributed">
    <div class="footer-left">
        <h4>LANDSKAPSKOMPANIET AB</h4>
        <p class="footer-links">
            <a href="{{route('home')}}">Hem</a>
            ·
            <a href="{{route('services')}}">Tjänster</a>
            ·
            <a href="{{route('gallery')}}">Galleri</a>
            ·
            <a href="{{route('contact')}}">Kontakta oss</a>
            ·
            <a href="{{route('about')}}">Om oss</a>
    </div>
    <div class="footer-center">
        <div>
            <i class="mdi-communication-business"></i>
            <p><span>Råbyvägen 28</span>76172, Norrtälje</p>
        </div>
        <div>
            <i class="mdi-communication-phone"></i>
            <p>Telefon: <a href="tel:+1-303-499-7111">00736511977</a></p>
        </div>
        <div>
            <i class="mdi-communication-email"></i>
            <p>E-mail: <a href="mailto:webmaster@example.com">landskapskompaniet@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
        <div id="footer-contact-header">Kontakta oss</div><p>@include('_partials.contactButtons')</p>
        </p>
    </div>
</footer>

<a class="back-to-top" style="display: inline;" href="#"><i class="mdi-navigation-expand-less"></i><div class="ripple-wrapper"></div></a>
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<!--<script src="{{ asset('/js/select2.min.js') }}"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
<script>
    $(function() {
        $.material.init();
    });
</script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>