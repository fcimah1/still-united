@extends('layout.layout')

{{-- @section('active_menu_item', ' current-menu-ancestor current_page_ancestor') --}}
@section('body_tag')
<body class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent padding_content_yes top_panel_show top_panel_over user_menu_hide sidebar_hide fixed_top_menu">

    <div class="body_wrap">

        <div class="page_wrap">
                    
@endsection
@section('content')
<section class="top_panel_image top_panel_bg4">
    <div class="top_panel_image_hover"></div>
    <div class="top_panel_image_header">
        <h1 class="top_panel_image_title entry-title">About Us</h1>
        <div class="breadcrumbs">
            <span class="breadcrumbs_item_first">You Are Here:</span>
                <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">About Us</span>                     
        </div>
    </div>
</section>

<div class="page_content">

    <section class="fullwidth_section forwarding_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_content container">
                            <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                <h4 class="sc_title sc_title_regular">Air Freight</h4>
                                <h4 class="sc_title sc_title_regular">Forwarding</h4>
                                    <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                                <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed">
                                    read more
                                    <span class="sc_button_iconed icon-right"></span> 
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                <h4 class="sc_title sc_title_regular">Ocean Freight</h4>
                                <h4 class="sc_title sc_title_regular">Forwarding</h4>
                                    <p>Ocean Freight plays perhaps the most vital role in most transportation and supply chain</p>
                                <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                    read more
                                    <span class="sc_button_iconed icon-right"></span> 
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                <h4 class="sc_title sc_title_regular">Road Freight</h4>
                                <h4 class="sc_title sc_title_regular">Forwarding</h4>
                                    <p>Nearly all items of cargo are transported at some stage of their journey along the world’s roads</p>
                                <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                    read more
                                    <span class="sc_button_iconed icon-right"></span> 
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 sc_column_item">
                                <h4 class="sc_title sc_title_regular">Expedited</h4>
                                <h4 class="sc_title sc_title_regular">Services</h4>
                                    <p>Global Logistic understands part of the supply chain optimization process is having a level of service</p>
                                <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                    read more
                                    <span class="sc_button_iconed icon-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fullwidth_section about_section dark_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_section_overlay">
                            <div class="sc_section_content">
                                <div class="sc_content container">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                        <div class="col-sm-4 sc_column_item sc_column_item_1">
                                            <h2 class="sc_title sc_title_regular">about us</h2>
                                            <p>Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, GL can provide you with a customized solution tailored to your needs.</p>
                                            <p>Aliquam pretium ullamcorper dolor nec pretium. Proin lacinia feugiat justo sit amet vulputate.</p>
                                            <a href="#" class="sc_button sc_button_square sc_button_bg_light">
                                            <span>read more</span>
                                            </a>
                                        </div>
                                        <div class="col-sm-8 sc_column_item sc_column_item_2 even span_2">
                                            <div class="sc_skills sc_skills_bar3 sc_skills_vertical" data-type="bar3" data-subtitle="Skills" data-dir="vertical">
                                                <div class="sc_skills_columns sc_skills_columns_5">
                                                    <div class="sc_skills_column col-sm-2 col-xs-2">
                                                        <div class="sc_skills_item sc_skills_style_1">
                                                            <div class="sc_skills_icon">
                                                                <span class="icon-plane-1"></span>
                                                            </div>
                                                            <div class="sc_skills_total width_icon" data-start="0" data-stop="99" data-step="1" data-max="100" data-speed="13" data-duration="1287" data-ed="%">99%</div>
                                                            <div class="sc_skills_count"></div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">Air Freight</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_skills_column col-sm-2 col-xs-2">
                                                        <div class="sc_skills_item sc_skills_style_1">
                                                            <div class="sc_skills_icon">
                                                                <span class="icon-ship"></span>
                                                            </div>
                                                            <div class="sc_skills_total width_icon" data-start="0" data-stop="90" data-step="1" data-max="100" data-speed="26" data-duration="2340" data-ed="%">90%</div>
                                                            <div class="sc_skills_count"></div>
                                                                <div class="sc_skills_info">
                                                            <div class="sc_skills_label">Ocean Freight</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_skills_column col-sm-2 col-xs-2">
                                                        <div class="sc_skills_item sc_skills_style_1">
                                                            <div class="sc_skills_icon">
                                                                <span class="icon-truck"></span>
                                                            </div>
                                                            <div class="sc_skills_total width_icon" data-start="0" data-stop="98" data-step="1" data-max="100" data-speed="16" data-duration="1568" data-ed="%">98%</div>
                                                            <div class="sc_skills_count"></div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">Road Freight</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_skills_column col-sm-2 col-xs-2">
                                                        <div class="sc_skills_item sc_skills_style_1">
                                                            <div class="sc_skills_icon">
                                                                <span class="icon-location"></span>
                                                            </div>
                                                            <div class="sc_skills_total width_icon" data-start="0" data-stop="86" data-step="1" data-max="100" data-speed="19" data-duration="1634" data-ed="%">86%</div>
                                                            <div class="sc_skills_count"></div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">Warehousing</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_skills_column col-sm-2 col-xs-2">
                                                        <div class="sc_skills_item sc_skills_style_1">
                                                            <div class="sc_skills_icon">
                                                                <span class="icon-phone-1"></span>
                                                            </div>
                                                            <div class="sc_skills_total width_icon" data-start="0" data-stop="89" data-step="1" data-max="100" data-speed="24" data-duration="2136" data-ed="%">89%</div>
                                                            <div class="sc_skills_count"></div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">Expedited Services</div>
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
        </div>
    </section>  

    <section class="fullwidth_section light_section team_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_content container">
                            <h2 class="sc_title sc_title_regular sc_align_center">Our Great Team</h2>
                            <div class="sc_section aligncenter">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam justo lacus, scelerisque eget massa sit amet,<br>
                                mollis ultrices lacus. Cras consectetur cursus nulla, non finibus enim varius nec. Sed pharetra, ex eget convallis vulputate,<br>
                                nulla diam molestie orci, sit amet sodales est quam ut ligula.</p>
                            </div>
                            <div class="sc_team sc_team_style_2">
                                <div class="sc_columns columns_wrap">
                                    <div class="col-sm-4">
                                        <div class="sc_team_item">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team1.jpg" src="images/team/350x350.png">
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h4 class="sc_team_item_title">
                                                    <a href="#">Terri Roberts</a>
                                                </h4>
                                                <div class="sc_team_item_position">Manager</div>
                                                <div class="sc_team_item_socials">
                                                    <div class="sc_socials sc_socials_size_small">
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_twitter icons">
                                                                <span class="icon-twitter"></span>
                                                                <span class="sc_socials_hover icon-twitter"></span>
                                                            </a>
                                                        </div>
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_facebook icons">
                                                                <span class="icon-facebook"></span>
                                                                <span class="sc_socials_hover icon-facebook"></span>
                                                            </a>
                                                        </div>
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_gplus icons">
                                                                <span class="icon-gplus"></span>
                                                                <span class="sc_socials_hover icon-gplus"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="sc_team_item">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team2.jpg" src="images/team/350x350.png">
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h4 class="sc_team_item_title">
                                                    <a href="#">Tom Anderson</a>
                                                </h4>
                                                <div class="sc_team_item_position">Senior Architect</div>
                                                <div class="sc_team_item_socials">
                                                    <div class="sc_socials sc_socials_size_small">
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_twitter icons">
                                                                <span class="icon-twitter"></span>
                                                                <span class="sc_socials_hover icon-twitter"></span>
                                                            </a>
                                                        </div>
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_facebook icons">
                                                                <span class="icon-facebook"></span>
                                                                <span class="sc_socials_hover icon-facebook"></span>
                                                            </a>
                                                        </div>
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_gplus icons">
                                                                <span class="icon-gplus"></span>
                                                                <span class="sc_socials_hover icon-gplus"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="sc_team_item">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team3.jpg" src="images/team/350x350.png">
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h4 class="sc_team_item_title">
                                                    <a href="#">Vanessa Smith</a>
                                                </h4>
                                                <div class="sc_team_item_position">Financial Accountant</div>
                                                <div class="sc_team_item_socials">
                                                    <div class="sc_socials sc_socials_size_small">
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_twitter icons">
                                                                <span class="icon-twitter"></span>
                                                                <span class="sc_socials_hover icon-twitter"></span>
                                                            </a>
                                                        </div>
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_facebook icons">
                                                                <span class="icon-facebook"></span>
                                                                <span class="sc_socials_hover icon-facebook"></span>
                                                            </a>
                                                        </div>
                                                        <div class="sc_socials_item">
                                                            <a href="#" target="_blank" class="social_icons social_gplus icons">
                                                                <span class="icon-gplus"></span>
                                                                <span class="sc_socials_hover icon-gplus"></span>
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
            </div>
        </div>
    </section>

    <section class="fullwidth_section light_section counter_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_content container">
                            <div class="sc_line sc_line_style_styling"></div>
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">
                                <div class="col-md-3 col-sm-3 col-xs-6 sc_column_item">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-subtitle="Skills">
                                        <div class="sc_skills_item sc_skills_style_2">
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="987" data-step="10" data-max="987" data-speed="20" data-duration="1974" data-ed="">987</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">air freight</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 sc_column_item">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-subtitle="Skills">
                                        <div class="sc_skills_item sc_skills_style_2">
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="549" data-step="5" data-max="549" data-speed="23" data-duration="2525" data-ed="">549</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">ocean freight</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 sc_column_item">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-subtitle="Skills">
                                        <div class="sc_skills_item sc_skills_style_2">
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="68" data-step="1" data-max="100" data-speed="14" data-duration="952" data-ed="">68</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">road freight</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 sc_column_item">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-subtitle="Skills">
                                        <div class="sc_skills_item sc_skills_style_2">
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="174" data-step="2" data-max="174" data-speed="24" data-duration="2088" data-ed="">174</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">rail freight</div>
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

    <section class="fullwidth_section testimonals_section testimonals_bg2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_section_overlay">
                            <div class="sc_section_content">
                                <div class="sc_content container" >
                                    <h2 class="sc_title sc_title_regular sc_align_left">what people say about us</h2>
                                    <div class="sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_controls sc_slider_height_auto" data-interval="7000">
                                        <div class="slides swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="sc_testimonial_item">
                                                    <div class="sc_testimonial_avatar">
                                                        <img alt="testimonial2.jpg" src="images/testimonial/135x135.png">
                                                    </div>
                                                    <div class="sc_testimonial_wrap">
                                                        <div class="sc_testimonial_content">
                                                            <p>Their performance on our project was extremely successful. As a result of this collaboration, the project<br>
                                                        was built with exceptional quality and was delivered in time and within budget.</p>
                                                        </div>
                                                        <div class="sc_testimonial_author">
                                                            <a href="#">Samuel Kleo</a>
                                                        </div>
                                                        <div class="sc_testimonial_field">CEO, Global Company Inc., France </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="sc_testimonial_item">
                                                    <div class="sc_testimonial_avatar">
                                                        <img alt="testimonial3.jpg" src="images/testimonial/135x135.png">
                                                    </div>
                                                    <div class="sc_testimonial_wrap">
                                                        <div class="sc_testimonial_content">
                                                            <p>The construction process with this crew was a pleasurable experience! They did<br>
                                                        all in time and  with no safety incidents. Thank you so much guys!</p>
                                                        </div>
                                                        <div class="sc_testimonial_author">
                                                            <a href="#">Amy Adams</a>
                                                        </div>
                                                        <div class="sc_testimonial_field">CEO, Global Company Inc., France </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="sc_testimonial_item">
                                                    <div class="sc_testimonial_avatar">
                                                        <img alt="testimonial1.jpg" src="images/testimonial/135x135.png">
                                                    </div>
                                                    <div class="sc_testimonial_wrap">
                                                        <div class="sc_testimonial_content">
                                                            <p>These guys are just the coolest builders ever! They were aware of our financial structure<br>
                                                        and focus on cost efficiencies , and they did deliver an exceptional project!</p>
                                                        </div>
                                                        <div class="sc_testimonial_author">
                                                            <a href="#">Michael Holberg</a>
                                                        </div>
                                                        <div class="sc_testimonial_field">CEO, Global Company Inc., France </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_slider_controls_wrap">
                                            <a class="sc_slider_prev" href="#"></a>
                                            <a class="sc_slider_next" href="#"></a>
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

    <section class="fullwidth_section clients_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_content container">
                        <h2 class="sc_title sc_title_regular sc_align_center">Our clients</h2>
                        <div class="sc_section">
                            <div id="clients_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container swiper-free-mode clients_scroll">
                                <div class="sc_scroll_wrapper swiper-wrapper">
                                    <div class="sc_scroll_slide swiper-slide">
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="sc_image_wrap  alignleft">
                                            <figure class="sc_image  sc_image_shape_square">
                                                <img src="images/slider/99x99.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div id="clients_scroll_bar" class="sc_scroll_bar clients_scroll_bar sc_scroll_bar_horizontal"></div>
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </section>  
</div>

@endsection