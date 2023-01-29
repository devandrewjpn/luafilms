    <script src="<?= base_url('assets/js/main.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery-migrate-3.4.0.min.js')?>"></script>
    <script src="<?= base_url('assets/js/mfn.menu.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery.plugins.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery.jplayer.min.js')?>"></script>
    <script src="<?= base_url('assets/js/animations/animations.js')?>"></script>
    <script src="<?= base_url('assets/js/translate3d.js')?>"></script>
    <script src="<?= base_url('assets/js/scripts.js')?>"></script>
    <script src="<?= base_url('assets/js/email.js')?>"></script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js')?>">
    </script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js')?>">
    </script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js')?>">
    </script>
    <script
        src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js')?>">
    </script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js')?>">
    </script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js')?>">
    </script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js')?>">
    </script>
    <script src="<?= base_url('assets/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js')?>">
    </script>


    <script>
var revapi1, tpj;
(function() {
    if (!/loaded|interactive|complete/.test(document.readyState))
        document.addEventListener("DOMContentLoaded", onLoad);
    else
        onLoad();

    function onLoad() {
        if (tpj === undefined) {
            tpj = jQuery;
            if ("off" == "on")
                tpj.noConflict();
        }
        if (tpj("#rev_slider_1_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                sliderType: "hero",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1080,
                gridheight: 860,
                lazyType: "none",
                shadow: 0,
                spinner: "spinner2",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        };
    };
}());
    </script>

    </body>

    </html>