 <!--jQuery -->
 <script src="../assets/lib/jquery/jquery.js"></script>

 <script>
            less = {
                env: "development",
                relativeUrls: false,
                rootpath: "../assets/"
            };
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
<script src="https://kit.fontawesome.com/12c1eea883.js" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>

<!--Bootstrap -->
<script src="../assets/lib/bootstrap/js/bootstrap.js"></script>
<!-- MetisMenu -->
<script src="../assets/lib/metismenu/metisMenu.js"></script>
<!-- onoffcanvas -->
<script src="../assets/lib/onoffcanvas/onoffcanvas.js"></script>
<!-- Screenfull -->
<script src="../assets/lib/screenfull/screenfull.js"></script>

<script src="../assets/lib/jquery-validation/jquery.validate.js"></script>
<!-- Metis core scripts -->
<script src="../assets/js/core.js"></script>
<!-- Metis demo scripts -->
<script src="../assets/js/app.js"></script>

<script>
$(function() {
Metis.formValidation();
});
</script>

<script src="../assets/js/style-switcher.js"></script>
<!-- Sweet Alert scripts -->
<script src="../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
</script>
