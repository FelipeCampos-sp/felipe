        
        
 <!--        scripts nav responsivo-->
 
 <script type="text/javascript" src="js/respNav.js"></script>




<!--script js do efeito de transiçao do site ancora -->
<!--<script type="text/javascript">// <![CDATA[
    $(document).ready(function () {
        function filterPath(string) {
            return string
                    .replace(/^\//, '')
                    .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
                    .replace(/\/$/, '');
        }
        $('a[href*=#]').each(function () {
            if (filterPath(location.pathname) == filterPath(this.pathname)
                    && location.hostname == this.hostname
                    && this.hash.replace(/#/, '')) {
                var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) + ']');
                var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
                if ($target) {
                    var targetOffset = $target.offset().top;
                    $(this).click(function () {
                        $('html, body').animate({scrollTop: targetOffset}, 700);
                        return false;
                    });
                }
            }
        });
    });
// ]]></script>-->
<!--script js do efeito de transiçao do site ancora -->


<!--MENU FIXO-->
<script type="text/javascript">
    $(function () {
        var nav = $('.main_header');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 80) {
                nav.addClass('main_header_fixed');
                $('.hidden-subtitle').hide();
                $('.main_header_fixed').fadeIn('slow');
            } else {
                nav.removeClass('main_header_fixed');
                $('.hidden-subtitle').show();
            }
        });
    });

</script>


