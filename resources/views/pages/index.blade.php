@extends('layout.layout_index')

{{-- @section('active_menu_item', ' current-menu-ancestor current_page_ancestor') --}}
@section('body_tag')

    <body
        class="home page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent top_panel_over user_menu_hide sidebar_hide">

        <div class="body_wrap">

            <div class="page_wrap">
            @endsection
            @section('content')
                <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_main">

                    <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                        <!-- START REVOLUTION SLIDER 4.6.92 fullwidth mode -->
                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner tp-simpleresponsive">
                            <ul class="tp-revslider-mainul"> <!-- SLIDE  -->
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="400"
                                    data-saveperformance="off" class="tp-revslider-slidesli">
                                    <!-- MAIN IMAGE -->
                                    <div class="slotholder" data-bgposition="center top" data-bgfit="cover">
                                        <img class="tp-bgimg defaultimg" alt="" src="images/slider/2200x1400.png"
                                            data-src="images/slider/2200x1400.png">
                                    </div>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption customin fadeout start" data-x="-2115" data-y="-2"
                                        data-customin="x:3000;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0.66;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="7700" data-start="0" data-easing="Power0.easeIn" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Quad.easeInOut">
                                        <img src="images/slider/1889x527.png" alt="">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption trx-big tp-fade fadeout tp-resizeme start" data-x="center"
                                        data-hoffset="0" data-y="200" data-speed="500" data-start="600"
                                        data-easing="Quad.easeOut" data-splitin="none" data-splitout="none"
                                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400">
                                        Large enough to handle, <br>
                                        small enough to care
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption customin ltr start" data-x="center" data-hoffset="-16"
                                        data-y="235"
                                        data-customin="x:-590;y:-140;z:-70;rotationX:0;rotationY:0;rotationZ:10;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="600" data-start="1200" data-easing="Quad.easeOut"
                                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600"
                                        data-endeasing="Quad.easeIn">
                                        <img src="images/slider/1400x283.png" alt="" data-ww="1241.696113074205"
                                            data-hh="251">
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption trx-no-style sfb fadeout start" data-x="center" data-hoffset="0"
                                        data-y="500" data-speed="500" data-start="1600" data-easing="Quad.easeOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="400">
                                        <a href="#" class="sc_button sc_button_square sc_button_bg_light">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="400"
                                    data-saveperformance="off" class="tp-revslider-slidesli">
                                    <!-- MAIN IMAGE -->
                                    <div class="slotholder" data-bgposition="center top" data-bgfit="cover">
                                        <img class="tp-bgimg defaultimg" alt="" src="images/slider/2200x1400.png"
                                            data-src="images/slider/2200x1400.png">
                                        <div class="slot">
                                            <div class="slotslide">
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption lfl stl start" data-x="center" data-hoffset="-408"
                                        data-y="bottom" data-voffset="1" data-speed="500" data-start="1900"
                                        data-easing="Quad.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                        data-endspeed="400" data-endeasing="Quad.easeIn">
                                        <img src="images/slider/283x246.png" alt="">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfr ltr start" data-x="center" data-hoffset="146"
                                        data-y="bottom" data-voffset="4" data-speed="500" data-start="1400"
                                        data-easing="Quad.easeOut" data-elementdelay="0.1" data-endelementdelay="0.5"
                                        data-endspeed="700" data-endeasing="Quad.easeIn">
                                        <img src="images/slider/815x246.png" alt="">
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption trx-big-extra tp-fade fadeout tp-resizeme start"
                                        data-x="center" data-hoffset="65" data-y="200" data-speed="500"
                                        data-start="600" data-easing="Quad.easeOut" data-splitin="none"
                                        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                        data-endspeed="400">
                                        Large enough to handle,<br>
                                        small enough to care
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption randomrotate fadeout start" data-x="center" data-hoffset="435"
                                        data-y="307" data-speed="700" data-start="2500" data-easing="easeOutBounce"
                                        data-elementdelay="1" data-endelementdelay="0.1" data-endspeed="500">
                                        <img src="images/slider/107x53.png" alt="">
                                    </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="400"
                                    data-saveperformance="off" class="tp-revslider-slidesli">
                                    <!-- MAIN IMAGE -->
                                    <div class="slotholder" data-bgposition="center top" data-bgfit="cover">
                                        <img class="tp-bgimg defaultimg" alt="" src="images/slider/2200x1400.png"
                                            data-src="images/slider/2200x1400.png">
                                    </div>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption trx-big-left sfb fadeout tp-resizeme start" data-x="100"
                                        data-y="250" data-speed="500" data-start="1200" data-easing="Quad.easeOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="400">
                                        Large enough to handle,<br>
                                        small enough to care
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption trx-normal-white sfb fadeout tp-resizeme start" data-x="100"
                                        data-y="370" data-speed="500" data-start="1600" data-easing="Quad.easeOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="300">
                                        As a market leader in global air freight forwarding, Global<br>
                                        Logistics excels in providing tailored transportation<br>
                                        solutions for client-specific needs.
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption trx-no-style sfb fadeout start" data-x="100" data-y="475"
                                        data-speed="500" data-start="2000" data-easing="Quad.easeOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-endspeed="400">
                                        <a href="#" class="sc_button sc_button_square sc_button_bg_light">
                                            <span>read more</span>
                                        </a>
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption sfb stb start" data-x="right" data-hoffset="-120"
                                        data-y="bottom" data-voffset="10" data-speed="600" data-start="800"
                                        data-easing="Quad.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                        data-endspeed="400" data-endeasing="Quad.easeIn">
                                        <img src="images/slider/480x538.png" alt="" data-ww="408.9807692307693"
                                            data-hh="459">
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div><!-- END REVOLUTION SLIDER -->
                </section>

                <div class="page_content">

                    <section class="fullwidth_section forwarding_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section">
                                        <div class="sc_content container">
                                            <div class="columns_wrap">
                                                <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                                    <h4 class="sc_title sc_title_regular">Air Freight</h4>
                                                    <h4 class="sc_title sc_title_regular">Forwarding</h4>
                                                    <p>As a leader in global air freight forwarding, OIA Global excels in
                                                        providing tailored transportation</p>
                                                    <a href="#"
                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed">
                                                        read more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                                    <h4 class="sc_title sc_title_regular">Ocean Freight</h4>
                                                    <h4 class="sc_title sc_title_regular">Forwarding</h4>
                                                    <p>Ocean Freight plays perhaps the most vital role in most
                                                        transportation and supply chain</p>
                                                    <a href="#"
                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        read more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                                    <h4 class="sc_title sc_title_regular">Road Freight</h4>
                                                    <h4 class="sc_title sc_title_regular">Forwarding</h4>
                                                    <p>Nearly all items of cargo are transported at some stage of their
                                                        journey along the world’s roads</p>
                                                    <a href="#"
                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        read more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                                    <h4 class="sc_title sc_title_regular">Expedited</h4>
                                                    <h4 class="sc_title sc_title_regular">Services</h4>
                                                    <p>Global Logistic understands part of the supply chain optimization
                                                        process is having a level of service</p>
                                                    <a href="#"
                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        read more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="fullwidth_section no_padding_container dark_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section">
                                        <div class="sc_section_overlay">
                                            <div class="sc_section_content">
                                                <div class="sc_content container">
                                                    <div class="sc_section sc_tabs_section style_3">
                                                        <div id="sc_tabs_1" class="sc_tabs sc_tabs_style_3"
                                                            data-active="0">
                                                            <div class="sc_tabs_wrap_first">
                                                                <div class="sc_tabs_wrap">
                                                                    <div class="sc_tabs_top">
                                                                        <h4 class="subtitle">Still United</h4>
                                                                        <h2 class="title">our<br>services</h2>
                                                                        <div class="description">As a market leader in
                                                                            global air freight forwarding.</div>
                                                                    </div>
                                                                    <ul class="sc_tabs_titles" role="tablist">
                                                                        <li class="sc_tabs_title" role="tab"
                                                                            tabindex="0" aria-controls="sc_tab_1"
                                                                            aria-labelledby="sc_tab_1_tab"
                                                                            aria-selected="true" aria-expanded="true">
                                                                            <a href="#sc_tab_1"
                                                                                class="theme_button ui-tabs-anchor"
                                                                                id="sc_tab_1_tab" tabindex="-1">
                                                                                Logistics
                                                                                <span class="icon-right11"></span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="sc_tabs_title" role="tab"
                                                                            tabindex="-1" aria-controls="sc_tab_2"
                                                                            aria-labelledby="sc_tab_2_tab"
                                                                            aria-selected="false" aria-expanded="false">
                                                                            <a href="#sc_tab_2"
                                                                                class="theme_button ui-tabs-anchor"
                                                                                id="sc_tab_2_tab" tabindex="-1">
                                                                                Packaging
                                                                                <span class="icon-right11"></span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="sc_tabs_title last ui-state-default ui-corner-top"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="sc_tab_3"
                                                                            aria-labelledby="sc_tab_3_tab"
                                                                            aria-selected="false" aria-expanded="false">
                                                                            <a href="#sc_tab_3"
                                                                                class="theme_button ui-tabs-anchor"
                                                                                id="sc_tab_3_tab" tabindex="-1">
                                                                                Materials
                                                                                <span class="icon-right11"></span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div id="sc_tab_1" class="sc_tabs_content"
                                                                    aria-labelledby="sc_tab_1_tab" role="tabpanel"
                                                                    aria-hidden="false">
                                                                    <p>Whether you require distribution or fulfillment,
                                                                        defined freight forwarding, or a complete supply
                                                                        chain solution, GL can provide you with a customized
                                                                        solution tailored to your needs.</p>
                                                                    <div class="sc_skills sc_skills_bar3 sc_skills_vertical"
                                                                        data-type="bar3" data-subtitle="Skills"
                                                                        data-dir="vertical">
                                                                        <div
                                                                            class="columns_wrap sc_skills_columns sc_skills_columns_5">
                                                                            <div
                                                                                class="sc_skills_column col-sm-2 col-xs-2">
                                                                                <div
                                                                                    class="sc_skills_item sc_skills_style_1">
                                                                                    <div class="sc_skills_icon">
                                                                                        <span class="icon-plane-2"></span>
                                                                                    </div>
                                                                                    <div class="sc_skills_total width_icon"
                                                                                        data-start="0" data-stop="99"
                                                                                        data-step="1" data-max="100"
                                                                                        data-speed="31"
                                                                                        data-duration="3069"
                                                                                        data-ed="%"></div>
                                                                                    <div class="sc_skills_count"></div>
                                                                                    <div class="sc_skills_info">
                                                                                        <div class="sc_skills_label">Air
                                                                                            Freight </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="sc_skills_column col-sm-2 col-xs-2">
                                                                                <div
                                                                                    class="sc_skills_item sc_skills_style_1">
                                                                                    <div class="sc_skills_icon">
                                                                                        <span class="icon-ship-2"></span>
                                                                                    </div>
                                                                                    <div class="sc_skills_total width_icon"
                                                                                        data-start="0" data-stop="90"
                                                                                        data-step="1" data-max="100"
                                                                                        data-speed="13"
                                                                                        data-duration="1170"
                                                                                        data-ed="%"></div>
                                                                                    <div class="sc_skills_count"></div>
                                                                                    <div class="sc_skills_info">
                                                                                        <div class="sc_skills_label">Ocean
                                                                                            Freight</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="sc_skills_column col-sm-2 col-xs-2">
                                                                                <div
                                                                                    class="sc_skills_item sc_skills_style_1">
                                                                                    <div class="sc_skills_icon">
                                                                                        <span class="icon-truck-2"></span>
                                                                                    </div>
                                                                                    <div class="sc_skills_total width_icon"
                                                                                        data-start="0" data-stop="98"
                                                                                        data-step="1" data-max="100"
                                                                                        data-speed="15"
                                                                                        data-duration="1470"
                                                                                        data-ed="%"></div>
                                                                                    <div class="sc_skills_count"></div>
                                                                                    <div class="sc_skills_info">
                                                                                        <div class="sc_skills_label">Road
                                                                                            Freight</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="sc_skills_column col-sm-2 col-xs-2">
                                                                                <div
                                                                                    class="sc_skills_item sc_skills_style_1">
                                                                                    <div class="sc_skills_icon">
                                                                                        <span class="icon-cargo"></span>
                                                                                    </div>
                                                                                    <div class="sc_skills_total width_icon"
                                                                                        data-start="0" data-stop="86"
                                                                                        data-step="1" data-max="100"
                                                                                        data-speed="11"
                                                                                        data-duration="946"
                                                                                        data-ed="%"></div>
                                                                                    <div class="sc_skills_count"></div>
                                                                                    <div class="sc_skills_info">
                                                                                        <div class="sc_skills_label">
                                                                                            Warehousing</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="sc_skills_column col-sm-2 col-xs-2">
                                                                                <div
                                                                                    class="sc_skills_item sc_skills_style_1">
                                                                                    <div class="sc_skills_icon">
                                                                                        <span class="icon-support"></span>
                                                                                    </div>
                                                                                    <div class="sc_skills_total width_icon"
                                                                                        data-start="0" data-stop="89"
                                                                                        data-step="1" data-max="100"
                                                                                        data-speed="16"
                                                                                        data-duration="1424"
                                                                                        data-ed="%"></div>
                                                                                    <div class="sc_skills_count"></div>
                                                                                    <div class="sc_skills_info">
                                                                                        <div class="sc_skills_label">
                                                                                            Expedited Services</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="sc_tab_2" class="sc_tabs_content"
                                                                    aria-labelledby="sc_tab_2_tab" role="tabpanel"
                                                                    aria-hidden="true">
                                                                    <h3 class="sc_title sc_title_regular">Secure Packaging
                                                                    </h3>
                                                                    <p>GL has a menu of supply chain solutions that can
                                                                        optimize the effectiveness of your product
                                                                        promotion, and reduce the cost of your packaging and
                                                                        distribution as well as your carbon footprint.</p>
                                                                    <p>“Sales Lift” is music to any marketing, brand or
                                                                        merchandising manager’s ears. GL understands the
                                                                        impact packaging has when your customers are
                                                                        competing for market dollars.</p>
                                                                    <p>Above all OIA’s retail business model combines
                                                                        material choices with an innovative design approach
                                                                        and color management process that supports “Sales
                                                                        Lift” to meet or exceed your ROI expectations.</p>
                                                                    <div class="sc_section aligncenter">
                                                                        <figure class="sc_image  sc_image_shape_square">
                                                                            <img src="images/packaging.webp"
                                                                                alt="">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div id="sc_tab_3" class="sc_tabs_content"
                                                                    aria-labelledby="sc_tab_3_tab" role="tabpanel"
                                                                    aria-hidden="true">
                                                                    <h3 class="sc_title sc_title_regular">Retail &amp;
                                                                        Transit Packaging</h3>
                                                                    <p>GL has a menu of supply chain solutions that can
                                                                        optimize the effectiveness of your product
                                                                        promotion, and reduce the cost of your packaging and
                                                                        distribution as well as your carbon footprint.</p>
                                                                    <p>“Sales Lift” is music to any marketing, brand or
                                                                        merchandising manager’s ears. GL understands the
                                                                        impact packaging has when your customers are
                                                                        competing for market dollars.</p>
                                                                    <h3 class="sc_title sc_title_regular">Optimization</h3>
                                                                    <p>GL is taking optimization to a whole new level. It
                                                                        has evolved into a comprehensive, fully integrated
                                                                        program designed to maximize productivity, minimize
                                                                        waste, and above all, reduce your per unit cost.
                                                                        Nothing exposes the weak links in your supply chain
                                                                        like optimization. And once those weaknesses are
                                                                        identified, we’ll work to eliminate them through our
                                                                        extensive program that includes the following key
                                                                        components:</p>
                                                                    <div
                                                                        class="columns_wrap sc_columns sc_columns_count_2">
                                                                        <div class="col-sm-6 sc_column_item">
                                                                            <ul class="sc_list sc_list_style_iconed">
                                                                                <li class="sc_list_item">
                                                                                    <span
                                                                                        class="sc_list_icon icon-ok"></span>
                                                                                    Solutions Engineering
                                                                                </li>
                                                                                <li class="sc_list_item">
                                                                                    <span
                                                                                        class="sc_list_icon icon-ok"></span>
                                                                                    High-Performance Material
                                                                                </li>
                                                                                <li class="sc_list_item">
                                                                                    <span
                                                                                        class="sc_list_icon icon-ok"></span>
                                                                                    Supply Chain Network
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-6 sc_column_item">
                                                                            <ul class="sc_list sc_list_style_iconed">
                                                                                <li class="sc_list_item">
                                                                                    <span
                                                                                        class="sc_list_icon icon-ok"></span>
                                                                                    Deployed Resources
                                                                                </li>
                                                                                <li class="sc_list_item">
                                                                                    <span
                                                                                        class="sc_list_icon icon-ok"></span>
                                                                                    Logistics
                                                                                </li>
                                                                                <li class="sc_list_item">
                                                                                    <span
                                                                                        class="sc_list_icon icon-ok"></span>
                                                                                    Financial Reporting
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="fullwidth_section no_padding_top_container calculator_bg1">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section calculator">
                                        <div class="sc_section_overlay">
                                            <div class="sc_section_content">
                                                <div class="sc_content container">
                                                    <h4 class="subtitle_container">Still United</h4>
                                                    <div class="sc_columns">
                                                        <div class="col-md-8 col-sm-7 sc_column_item"></div>
                                                        <div class="col-md-4 col-sm-5 sc_column_item">
                                                            <h2 class="sc_title sc_title_regular sc_align_left">service<br>
                                                                calculator</h2>
                                                            <div class="sc_section">
                                                                <p>Starting form. Basic calculated fields sample.</p>
                                                            </div>
                                                            <div class="sc_section">
                                                                <form name="cp_calculatedfieldsf_pform_1"
                                                                    id="cp_calculatedfieldsf_pform_1" action="#"
                                                                    method="post" data-evalequations="1"
                                                                    autocomplete="on" novalidate="novalidate">
                                                                    <input type="hidden" name="form_structure_1"
                                                                        id="form_structure_1"
                                                                        value="[[{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname11&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:0,&quot;ftype&quot;:&quot;fdiv&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;fields&quot;:[&quot;fieldname12&quot;,&quot;fieldname13&quot;,&quot;fieldname23&quot;,&quot;fieldname20&quot;],&quot;columns&quot;:&quot;1&quot;,&quot;title&quot;:&quot;div&quot;,&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname13&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:1,&quot;ftype&quot;:&quot;fdiv&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;fields&quot;:[&quot;fieldname17&quot;,&quot;fieldname21&quot;,&quot;fieldname22&quot;],&quot;columns&quot;:&quot;3&quot;,&quot;title&quot;:&quot;div&quot;,&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname12&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:2,&quot;ftype&quot;:&quot;fdiv&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;fields&quot;:[&quot;fieldname2&quot;,&quot;fieldname26&quot;],&quot;columns&quot;:1,&quot;title&quot;:&quot;div&quot;,&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname2&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:3,&quot;ftype&quot;:&quot;fnumber&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;title&quot;:&quot;Distance&quot;,&quot;predefined&quot;:&quot;&quot;,&quot;predefinedClick&quot;:false,&quot;required&quot;:false,&quot;size&quot;:&quot;large&quot;,&quot;thousandSeparator&quot;:&quot;&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;min&quot;:&quot;&quot;,&quot;max&quot;:&quot;&quot;,&quot;dformat&quot;:&quot;number&quot;,&quot;formats&quot;:[&quot;digits&quot;,&quot;number&quot;],&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname26&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:4,&quot;ftype&quot;:&quot;fnumber&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;title&quot;:&quot;Weight&quot;,&quot;predefined&quot;:&quot;&quot;,&quot;predefinedClick&quot;:false,&quot;required&quot;:false,&quot;size&quot;:&quot;large&quot;,&quot;thousandSeparator&quot;:&quot;&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;min&quot;:&quot;&quot;,&quot;max&quot;:&quot;&quot;,&quot;dformat&quot;:&quot;number&quot;,&quot;formats&quot;:[&quot;digits&quot;,&quot;number&quot;],&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname17&quot;,&quot;shortlabel&quot;:&quot;Length&quot;,&quot;index&quot;:5,&quot;ftype&quot;:&quot;fnumber&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;title&quot;:&quot;Length&quot;,&quot;predefined&quot;:&quot;&quot;,&quot;predefinedClick&quot;:false,&quot;required&quot;:false,&quot;size&quot;:&quot;large&quot;,&quot;thousandSeparator&quot;:&quot;&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;min&quot;:&quot;&quot;,&quot;max&quot;:&quot;&quot;,&quot;dformat&quot;:&quot;number&quot;,&quot;formats&quot;:[&quot;digits&quot;,&quot;number&quot;],&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname21&quot;,&quot;shortlabel&quot;:&quot;Height&quot;,&quot;index&quot;:6,&quot;ftype&quot;:&quot;fnumber&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;title&quot;:&quot;Height&quot;,&quot;predefined&quot;:&quot;&quot;,&quot;predefinedClick&quot;:false,&quot;required&quot;:false,&quot;size&quot;:&quot;large&quot;,&quot;thousandSeparator&quot;:&quot;&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;min&quot;:&quot;&quot;,&quot;max&quot;:&quot;&quot;,&quot;dformat&quot;:&quot;number&quot;,&quot;formats&quot;:[&quot;digits&quot;,&quot;number&quot;],&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname22&quot;,&quot;shortlabel&quot;:&quot;Width&quot;,&quot;index&quot;:7,&quot;ftype&quot;:&quot;fnumber&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;title&quot;:&quot;Width&quot;,&quot;predefined&quot;:&quot;&quot;,&quot;predefinedClick&quot;:false,&quot;required&quot;:false,&quot;size&quot;:&quot;large&quot;,&quot;thousandSeparator&quot;:&quot;&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;min&quot;:&quot;&quot;,&quot;max&quot;:&quot;&quot;,&quot;dformat&quot;:&quot;number&quot;,&quot;formats&quot;:[&quot;digits&quot;,&quot;number&quot;],&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname9&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:8,&quot;ftype&quot;:&quot;fCalculated&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;result&quot;,&quot;title&quot;:&quot;The field below will show the double of the number above ($)&quot;,&quot;predefined&quot;:&quot;&quot;,&quot;required&quot;:false,&quot;size&quot;:&quot;large&quot;,&quot;toolbar&quot;:&quot;default|mathematical&quot;,&quot;eq&quot;:&quot;(fieldname2*fieldname26*fieldname17*fieldname21*fieldname22)/20+fieldname24+fieldname25&quot;,&quot;optimizeEq&quot;:true,&quot;eq_factored&quot;:&quot;((fieldname2*fieldname26*fieldname17*fieldname21*fieldname22)/20+fieldname24+fieldname25)&quot;,&quot;suffix&quot;:&quot;&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;decimalsymbol&quot;:&quot;.&quot;,&quot;groupingsymbol&quot;:&quot;&quot;,&quot;dependencies&quot;:[{&quot;rule&quot;:&quot;&quot;,&quot;complex&quot;:false,&quot;fields&quot;:[&quot;&quot;]}],&quot;readonly&quot;:false,&quot;hidefield&quot;:false,&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname20&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:9,&quot;ftype&quot;:&quot;fdiv&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;fields&quot;:[&quot;fieldname9&quot;],&quot;columns&quot;:1,&quot;title&quot;:&quot;div&quot;,&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname23&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:10,&quot;ftype&quot;:&quot;fdiv&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;&quot;,&quot;fields&quot;:[&quot;fieldname24&quot;,&quot;fieldname25&quot;],&quot;columns&quot;:1,&quot;title&quot;:&quot;div&quot;,&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname24&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:11,&quot;ftype&quot;:&quot;fradio&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;radio_label_top&quot;,&quot;title&quot;:&quot;Fragile:&quot;,&quot;layout&quot;:&quot;three_column&quot;,&quot;required&quot;:false,&quot;choiceSelected&quot;:&quot;Yes - 100&quot;,&quot;showDep&quot;:false,&quot;choices&quot;:[&quot;Yes&quot;,&quot;No&quot;],&quot;choicesVal&quot;:[&quot;100&quot;,&quot;0&quot;],&quot;choicesDep&quot;:[[],[]],&quot;fBuild&quot;:{}},{&quot;form_identifier&quot;:&quot;&quot;,&quot;name&quot;:&quot;fieldname25&quot;,&quot;shortlabel&quot;:&quot;&quot;,&quot;index&quot;:12,&quot;ftype&quot;:&quot;fcheck&quot;,&quot;userhelp&quot;:&quot;&quot;,&quot;userhelpTooltip&quot;:false,&quot;csslayout&quot;:&quot;label_top&quot;,&quot;title&quot;:&quot;Extra services:&quot;,&quot;layout&quot;:&quot;one_column&quot;,&quot;required&quot;:false,&quot;showDep&quot;:false,&quot;choices&quot;:[&quot;Express Delivery&quot;,&quot;Insurance&quot;,&quot;Packaging&quot;],&quot;choicesVal&quot;:[&quot;100&quot;,&quot;100&quot;,&quot;100&quot;],&quot;choiceSelected&quot;:[true,false,false],&quot;choicesDep&quot;:[[],[],[]],&quot;fBuild&quot;:{}}],[{&quot;title&quot;:&quot;&quot;,&quot;description&quot;:&quot;&quot;,&quot;formlayout&quot;:&quot;top_aligned&quot;,&quot;formtemplate&quot;:&quot;&quot;,&quot;evalequations&quot;:1,&quot;autocomplete&quot;:1}]]">
                                                                    <div id="fbuilder">
                                                                        <div id="fieldlist_1" class="top_aligned">
                                                                            <div class="pb0 pbreak">
                                                                                <div class="fields">
                                                                                    <div class="fields">
                                                                                        <div class="fields">
                                                                                            <label>Distance</label>
                                                                                            <div class="dfield">
                                                                                                <input name="fieldname2_1"
                                                                                                    class="field number large"
                                                                                                    type="text"
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fields">
                                                                                            <label>Weight</label>
                                                                                            <div class="dfield">
                                                                                                <input name="fieldname26_1"
                                                                                                    class="field number large"
                                                                                                    type="text"
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fields">
                                                                                        <div class="fields column3">
                                                                                            <label>Length</label>
                                                                                            <div class="dfield">
                                                                                                <input name="fieldname17_1"
                                                                                                    class="field number large"
                                                                                                    type="text"
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fields column3">
                                                                                            <label>Height</label>
                                                                                            <div class="dfield">
                                                                                                <input name="fieldname21_1"
                                                                                                    class="field number large"
                                                                                                    type="text"
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fields column3">
                                                                                            <label>Width</label>
                                                                                            <div class="dfield">
                                                                                                <input name="fieldname22_1"
                                                                                                    class="field number large"
                                                                                                    type="text"
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fields">
                                                                                        <div
                                                                                            class="fields radio_label_top">
                                                                                            <label>Fragile:</label>
                                                                                            <div class="dfield">
                                                                                                <div class="three_column">
                                                                                                    <div
                                                                                                        class="jq-radio field  group  checked">
                                                                                                        <input
                                                                                                            name="fieldname24_1"
                                                                                                            class="field  group "
                                                                                                            value="100"
                                                                                                            type="radio"
                                                                                                            checked="">
                                                                                                        <div
                                                                                                            class="jq-radio__div">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    Yes
                                                                                                </div>
                                                                                                <div class="three_column">
                                                                                                    <div
                                                                                                        class="jq-radio field  group ">
                                                                                                        <input
                                                                                                            name="fieldname24_1"
                                                                                                            class="field  group "
                                                                                                            value="0"
                                                                                                            type="radio">
                                                                                                        <div
                                                                                                            class="jq-radio__div">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    No
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fields label_top">
                                                                                            <label>Extra services:</label>
                                                                                            <div class="dfield">
                                                                                                <div class="one_column">
                                                                                                    <div
                                                                                                        class="jq-checkbox field  group  checked">
                                                                                                        <input
                                                                                                            name="fieldname25_1[]"
                                                                                                            class="field  group "
                                                                                                            value="100"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <div
                                                                                                            class="jq-checkbox__div">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    Express Delivery
                                                                                                </div>
                                                                                                <div class="one_column">
                                                                                                    <div
                                                                                                        class="jq-checkbox field  group ">
                                                                                                        <input
                                                                                                            name="fieldname25_1[]"
                                                                                                            class="field  group "
                                                                                                            value="100"
                                                                                                            type="checkbox">
                                                                                                        <div
                                                                                                            class="jq-checkbox__div">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    Insurance
                                                                                                </div>
                                                                                                <div class="one_column">
                                                                                                    <div
                                                                                                        class="jq-checkbox field  group ">
                                                                                                        <input
                                                                                                            name="fieldname25_1[]"
                                                                                                            class="field  group "
                                                                                                            value="100"
                                                                                                            type="checkbox">
                                                                                                        <div
                                                                                                            class="jq-checkbox__div">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    Packaging
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fields ">
                                                                                        <div class="fields result">
                                                                                            <label>The field below will show
                                                                                                the double of the number
                                                                                                above ($)</label>
                                                                                            <div class="dfield">
                                                                                                <input name="fieldname9_1"
                                                                                                    class="codepeoplecalculatedfield field large"
                                                                                                    type="text"
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="fullwidth_section grey_section no_padding_top_container timeline_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section">
                                        <div class="sc_section_overlay">
                                            <div class="sc_section_content">
                                                <div class="sc_content container">
                                                    <h4 class="subtitle_container">Still United</h4>
                                                    <h2 class="sc_title sc_title_regular sc_align_left">Company timeline
                                                    </h2>
                                                </div>
                                                <div class="sc_section bg_tint_none">
                                                    <!-- BEGIN TIMELINE -->

                                                    <div id="tl1" class="timeline flatLine">
                                                        <div class="item" data-id="01/04/2015"
                                                            data-description="April, 1" data-count="0">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim1-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 1</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="01/04/2015" data-count="0">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="0" data-id="01/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="05/04/2015"
                                                            data-description="April, 5" data-count="1">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim2-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 5</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="05/04/2015" data-count="1">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="1" data-id="05/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="08/04/2015"
                                                            data-description="April, 8" data-count="2">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim3-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 8</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="08/04/2015" data-count="2">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="2" data-id="08/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="11/04/2015"
                                                            data-description="April, 11" data-count="3">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim4-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 11</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored </span>
                                                        </div>
                                                        <div class="item_open" data-id="11/04/2015" data-count="3">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="3" data-id="11/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="16/04/2015"
                                                            data-description="April, 16" data-count="4">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim5-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 16</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored </span>
                                                        </div>
                                                        <div class="item_open" data-id="16/04/2015" data-count="4">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="4" data-id="16/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="19/04/2015"
                                                            data-description="April, 19" data-count="5">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim6-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 19</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="19/04/2015" data-count="5">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="5" data-id="19/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="23/04/2015"
                                                            data-description="April, 23" data-count="6">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim7-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 23</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored </span>
                                                        </div>
                                                        <div class="item_open" data-id="23/04/2015" data-count="6">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="6" data-id="23/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="27/04/2015"
                                                            data-description="April, 27" data-count="7">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim8-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>April, 27</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored </span>
                                                        </div>
                                                        <div class="item_open" data-id="27/04/2015" data-count="7">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="7" data-id="27/04/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="02/05/2015"
                                                            data-description="May, 2" data-count="8">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim9-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>May, 2</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="02/05/2015" data-count="8">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="8" data-id="02/05/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="06/05/2015"
                                                            data-description="May, 6" data-count="9">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim10-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>May, 6</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="06/05/2015" data-count="9">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="9" data-id="06/05/2015">
                                                                    Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="12/05/2015" data-name="May, 12"
                                                            data-description="May, 12" data-count="10">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim11-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>May, 12</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="12/05/2015" data-count="10">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="10"
                                                                    data-id="12/05/2015">Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="22/05/2015"
                                                            data-description="May, 22" data-count="11">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim7-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>May, 22</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored</span>
                                                        </div>
                                                        <div class="item_open" data-id="22/05/2015" data-count="11">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="11"
                                                                    data-id="22/05/2015">Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item" data-id="02/06/2015"
                                                            data-description="June, 2" data-count="12">
                                                            <a class="con_borderImage">
                                                                <img src="images/timeline/tim6-_resized240x130.webp"
                                                                    alt="">
                                                            </a>
                                                            <h2>June, 2</h2>
                                                            <span>As a market leader in global air freight forwarding, OIA
                                                                Global excels in providing tailored </span>
                                                        </div>
                                                        <div class="item_open" data-id="02/06/2015" data-count="12">
                                                            <div class="item_open_cwrapper">
                                                                <div class="t_close" data-count="12"
                                                                    data-id="02/06/2015">Close</div>
                                                                <div class="item_open_content">
                                                                    <img class="ajaxloader"
                                                                        src="images/timeline/loadingAnimation.gif"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END TIMELINE -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="fullwidth_section no_padding_container news_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section">
                                        <div class="sc_content container">
                                            <h4 class="subtitle_container">Global<br>
                                                Logistics</h4>
                                            <h2 class="sc_title sc_title_regular sc_align_left">featured news</h2>
                                            <div class="sc_blogger layout_news template_news sc_blogger_horizontal">
                                                <div class="columns_wrap">
                                                    <div class="col-sm-3 column_item_1">
                                                        <div class="post_item post_item_news sc_blogger_item">
                                                            <h4 class="post_title sc_title sc_blogger_title">Air Freight
                                                                Forwarding</h4>
                                                            <div class="post_content sc_blogger_content">
                                                                <div class="post_descr">
                                                                    <p>As a market leader in global air freight forwarding,
                                                                        OIA Global excels in providing tailored...</p>
                                                                    <a href="#"
                                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                                        Learn more
                                                                        <span class="sc_button_iconed icon-right"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 column_item_2">
                                                        <div class="post_item post_item_news sc_blogger_item">
                                                            <h4 class="post_title sc_title sc_blogger_title">Ocean Freight
                                                                Forwarding</h4>
                                                            <div class="post_content sc_blogger_content">
                                                                <div class="post_descr">
                                                                    <p>Ocean Freight plays perhaps the most vital role in
                                                                        most transportation and supply chain...</p>
                                                                    <a href="#"
                                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                                        Learn more
                                                                        <span class="sc_button_iconed icon-right"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 column_item_3">
                                                        <div class="post_item post_item_news sc_blogger_item">
                                                            <h4 class="post_title sc_title sc_blogger_title">Road Freight
                                                                Forwarding</h4>
                                                            <div class="post_content sc_blogger_content">
                                                                <div class="post_descr">
                                                                    <p>Nearly all items of cargo are transported at some
                                                                        stage of their journey along the world’s...</p>
                                                                    <a href="#"
                                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                                        Learn more
                                                                        <span class="sc_button_iconed icon-right"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 column_item_4 last">
                                                        <div
                                                            class="post_item post_item_news sc_blogger_item sc_blogger_item_last">
                                                            <h4 class="post_title sc_title sc_blogger_title">Expedited
                                                                Services</h4>
                                                            <div class="post_content sc_blogger_content">
                                                                <div class="post_descr">
                                                                    <p>Global Logistic understands part of the supply chain
                                                                        optimization process is having a level of...</p>
                                                                    <a href="#"
                                                                        class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                                        Learn more
                                                                        <span class="sc_button_iconed icon-right"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="fullwidth_section no_padding_top_container emailer_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section">
                                        <div class="sc_content container">
                                            <div class="sc_line sc_line_style_solid"></div>
                                            <div class="sc_emailer alignleft sc_emailer_opened">
                                                <form class="sc_emailer_form">
                                                    <span class="title">Newsletter</span>
                                                    <input type="text" class="sc_emailer_input" name="email"
                                                        value="" placeholder="Enter your Email here">
                                                    <a href="#" class="sc_emailer_button" title="Submit"
                                                        data-group="E-mailer subscription">Subscribe</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="fullwidth_section no_padding_top_container dark_section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="sc_section">
                                        <div class="sc_section_overlay">
                                            <div class="sc_section_content">
                                                <div class="sc_content container">
                                                    <div class="contact_form contact_form_standard">
                                                        <div class="contact_form_left">
                                                            <div class="sc_contact_info">
                                                                <h6 class="contact_form_subtitle">Still United</h6>
                                                                <h2 class="contact_form_title">contact us</h2>
                                                                <div class="contact_form_address_wrap">
                                                                    <div class="contact_form_address_field">
                                                                        <span class="contact_form_address_data">
                                                                            <b>Global Logistics</b>
                                                                            <br>San Francisco, CA 94102, US
                                                                            <br>1234 Some St
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc_contact_info_bottom">
                                                                <div class="contact_form_address_wrap">
                                                                    <div class="contact_form_address_field">
                                                                        <span class="contact_form_address_label">tel.:
                                                                        </span>
                                                                        <span class="contact_form_address_data">+1 (44)
                                                                            123-45-67</span>
                                                                    </div>
                                                                    <div class="contact_form_address_field">
                                                                        <span class="contact_form_address_label">e-mail:
                                                                        </span>
                                                                        <span
                                                                            class="contact_form_address_data">info@yoursite.com</span>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_socials sc_socials_size_small  color_icons">
                                                                    <div class="sc_socials_item">
                                                                        <a href="https://twitter.com/Theme_REX"
                                                                            target="_blank"
                                                                            class="social_icons social_twitter icons">
                                                                            <span class="icon-twitter"></span>
                                                                            <span
                                                                                class="sc_socials_hover icon-twitter"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="sc_socials_item">
                                                                        <a href="https://www.facebook.com/themerex"
                                                                            target="_blank"
                                                                            class="social_icons social_facebook icons">
                                                                            <span class="icon-facebook"></span>
                                                                            <span
                                                                                class="sc_socials_hover icon-facebook"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="sc_socials_item">
                                                                        <a href="https://plus.google.com/102189073109602153696"
                                                                            target="_blank"
                                                                            class="social_icons social_gplus icons">
                                                                            <span class="icon-gplus"></span>
                                                                            <span
                                                                                class="sc_socials_hover icon-gplus"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="sc_socials_item">
                                                                        <a href="#" target="_blank"
                                                                            class="social_icons social_linkedin icons">
                                                                            <span class="icon-linkedin"></span>
                                                                            <span
                                                                                class="sc_socials_hover icon-linkedin"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="contact_form_right">
                                                            <p class="contact_form_description">Your email address will not
                                                                be published. Required fields are marked *</p>
                                                            <form data-formtype="contact" method="post" action="#">
                                                                <div class="contact_form_info">
                                                                    <div
                                                                        class="contact_form_item contact_form_field label_over">
                                                                        <label class="required"
                                                                            for="contact_form_username">Name</label>
                                                                        <input id="contact_form_username" type="text"
                                                                            name="username" placeholder="Name">
                                                                    </div>
                                                                    <div
                                                                        class="contact_form_item contact_form_field label_over">
                                                                        <label class="required"
                                                                            for="contact_form_email">E-mail</label>
                                                                        <input id="contact_form_email" type="text"
                                                                            name="email" placeholder="Email">
                                                                    </div>
                                                                    <div
                                                                        class="contact_form_item contact_form_field label_over">
                                                                        <label class="required"
                                                                            for="contact_form_subj">Subject</label>
                                                                        <input id="contact_form_subj" type="text"
                                                                            name="subject" placeholder="Subject">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="contact_form_item contact_form_message label_over">
                                                                    <label class="required"
                                                                        for="contact_form_message">Message</label>
                                                                    <textarea id="contact_form_message" name="message" placeholder="Message"></textarea>
                                                                </div>
                                                                <div class="contact_form_item contact_form_button">
                                                                    <button>
                                                                        Send message
                                                                        <span class="icon-mail-alt"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="result sc_infobox"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            @endsection
