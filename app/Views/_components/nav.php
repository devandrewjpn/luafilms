<div id="Header_wrapper">
    <header id="Header">
        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <div class="logo">
                            <a id="logo" style="color:white;text-transform:uppercase;font-size:22px;font-weight:700;"
                                href="<?= base_url('home') ?>" title="" data-height="60" data-padding="25">logo
                                lua films</a>
                            <!-- <a id="logo" href="<?//= base_url('home') ?>" title="" data-height="60"
                                data-padding="25"><img class="logo-main scale-with-grid"
                                    src="<?//= base_url('assets/s_asset/images/video2.png')?>"
                                    data-retina="<?//= base_url('assets/s_asset/images/retina-video2.png')?>"
                                    data-height="60" data-no-retina /><img class="logo-sticky scale-with-grid"
                                    src="<?//= base_url('assets/s_asset/images/video2.png')?>"
                                    data-retina="<?//= base_url('assets/s_asset/images/retina-video2.png')?>"
                                    data-height="60" data-no-retina /><img class="logo-mobile scale-with-grid"
                                    src="<?//= base_url('assets/s_asset/images/video2.png')?>"
                                    data-retina="<?//= base_url('assets/s_asset/images/retina-video2.png')?>"
                                    data-height="60" data-no-retina /><img class="logo-mobile-sticky scale-with-grid"
                                    src="<?//= base_url('assets/s_asset/images/video2.png')?>"
                                    data-retina="<?//= base_url('assets/s_asset/images/retina-video2.png')?>"
                                    data-height="60" data-no-retina /></a> -->
                        </div>
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-main-menu" class="menu menu-main">
                                    <li
                                        class="<?= uri_string() == 'home' || uri_string() == '/' ? 'current-menu-item' : ''?>">
                                        <a href="<?= base_url('home') ?>"><span>Home</span></a>
                                    </li>
                                    <li class="<?= uri_string() == 'sobre' ? 'current-menu-item' : ''?>">
                                        <a href="<?= base_url('sobre') ?>"><span>Sobre</span></a>
                                    </li>
                                    <li class="<?= uri_string() == 'servicos' ? 'current-menu-item' : ''?>">
                                        <a href="<?= base_url('servicos') ?>"><span>Serviço</span></a>
                                    </li>
                                    <li class="<?= uri_string() == 'portfolio' ? 'current-menu-item' : ''?>">
                                        <a href="<?= base_url('portfolio') ?>"><span>Portfólio</span></a>
                                    </li>
                                    <li class="<?= uri_string() == 'contato' ? 'current-menu-item' : ''?>">
                                        <a href="<?= base_url('contato') ?>"><span>Contato</span></a>
                                    </li>
                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(uri_string() == 'home' || uri_string() == '/') : ?>
        <div class="mfn-main-slider" id="mfn-rev-slider">
            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery"
                style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                    <ul>
                        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                            data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                            data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <img src="<?= base_url('assets/s_asset/images/hero-banner.jpg')?>"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="39" data-y="104"
                                data-width="['auto']" data-height="['auto']" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6;font-size: white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 400; color: #fff; letter-spacing: 0px;font-family:Montserrat;">
                                Transformando ideias<br>em imagens inesquecíveis
                            </div>
                            <div class="main-bg-color tp-caption rev-btn tp-resizeme" id="slide-1-layer-4" data-x="40"
                                data-y="283" data-width="['auto']" data-height="['auto']" data-type="button"
                                data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(151,124,99);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[15,15,15,15]" data-paddingright="[40,40,40,40]"
                                data-paddingbottom="[15,15,15,15]" data-paddingleft="[40,40,40,40]"
                                style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: px;font-family:Montserrat;background-color:rgb(184,157,133);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                shit dahmn
                            </div>
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-6" data-x="49" data-y="584"
                                data-width="['none','none','none','none']" data-height="['none','none','none','none']"
                                data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 10;"><img
                                    src="<?= base_url('assets/s_asset/images/home_video2_pic2.png')?>" data-ww="10"
                                    data-hh="17">
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </header>
</div>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">