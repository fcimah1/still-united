@extends('layout.layout')
@section('body_tag')
<body class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent top_panel_show top_panel_above top_panel_over user_menu_hide sidebar_hide fixed_top_menu top_image_show"> 

    <div class="body_wrap">

        <div class="page_wrap">
@endsection
@section('content')

<section class="top_panel_image top_panel_bg2">
    <div class="top_panel_image_hover"></div>
    <div class="top_panel_image_header">
        <h1 class="top_panel_image_title entry-title">Contacts</h1>
        <div class="breadcrumbs">
            <span class="breadcrumbs_item_first">You Are Here:</span>
            <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Contacts</span>
        </div>
    </div>
</section>

    <section class="fullwidth_section no_padding_container map_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div id="sc_googlemap_2" class="sc_googlemap" data-zoom="3" data-style="simple">
                            <div id="sc_googlemap_2_1" class="sc_googlemap_marker" data-title="Madrid" data-description="
                            &lt;div class=&quot;sc_googlemap_desc&quot;&gt;&lt;img src=&quot;{{asset('images/map/150x150.png')}}&quot; alt=&quot;globallogistics_5&quot; class=&quot;alignnone sc_googlemap_img size-medium&quot;/&gt;
                            &lt;div class=&quot;sc_googlemap_textblock&quot; &gt;
                            &lt;h4 class=&quot;sc_googlemap_title&quot;&gt;Madrid&lt;/h4&gt;
                            &lt;p&gt;4100 W Sherman Dr.,&lt;br /&gt;
                            Paris, France&lt;br /&gt;
                            tel.: (677)-517-2386&lt;/p&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;p&gt;" data-address="Madrid" data-latlng="" data-point="{{asset('images/map/23x23.png')}}"></div>
                            <div id="sc_googlemap_2_2" class="sc_googlemap_marker" data-title="Montague" data-description="
                            &lt;div class=&quot;sc_googlemap_desc&quot;&gt;&lt;img src=&quot;{{asset('images/map/150x150.png')}}&quot; alt=&quot;globallogistics_5&quot; class=&quot;alignnone sc_googlemap_img size-medium&quot;/&gt;
                            &lt;div class=&quot;sc_googlemap_textblock&quot; &gt;
                            &lt;h4 class=&quot;sc_googlemap_title&quot;&gt;Montague&lt;/h4&gt;
                            &lt;p&gt;4100 W Sherman Dr.,&lt;br /&gt;
                            Paris, France&lt;br /&gt;
                            tel.: (677)-517-2386&lt;/p&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;p&gt;" data-address="Montague" data-latlng="" data-point="{{asset('images/map/23x23.png')}}"></div>
                            <div id="sc_googlemap_2_3" class="sc_googlemap_marker" data-title="Wien" data-description="
                            &lt;div class=&quot;sc_googlemap_desc&quot;&gt;&lt;img src=&quot;{{asset('images/map/150x150.png')}}&quot; alt=&quot;globallogistics_5&quot; class=&quot;alignnone sc_googlemap_img size-medium&quot;/&gt;
                            &lt;div class=&quot;sc_googlemap_textblock&quot; &gt;
                            &lt;h4 class=&quot;sc_googlemap_title&quot;&gt;Wien&lt;/h4&gt;
                            &lt;p&gt;4100 W Sherman Dr.,&lt;br /&gt;
                            Paris, France&lt;br /&gt;
                            tel.: (677)-517-2386&lt;/p&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;p&gt;" data-address="Wien" data-latlng="" data-point="{{asset('images/map/23x23.png')}}"></div>
                            <div id="sc_googlemap_2_4" class="sc_googlemap_marker" data-title="Adana" data-description="
                            &lt;div class=&quot;sc_googlemap_desc&quot;&gt;&lt;img src=&quot;{{asset('images/map/150x150.png')}}&quot; alt=&quot;globallogistics_5&quot; class=&quot;alignnone sc_googlemap_img size-medium&quot;/&gt;
                            &lt;div class=&quot;sc_googlemap_textblock&quot; &gt;
                            &lt;h4 class=&quot;sc_googlemap_title&quot;&gt;Adana&lt;/h4&gt;
                            &lt;p&gt;4100 W Sherman Dr.,&lt;br /&gt;
                            Paris, France&lt;br /&gt;
                            tel.: (677)-517-2386&lt;/p&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;p&gt;" data-address="Adana" data-latlng="" data-point="{{asset('images/map/23x23.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="page_content">
 
    <section class="fullwidth_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_content container">

                        <div class="contact_form contact_form_standard standard_light">
                            <div class="contact_form_left">
                                <div class="sc_contact_info">
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
                                            <span class="contact_form_address_label">tel.: </span>
                                            <span class="contact_form_address_data">+1 (44) 123-45-67</span>
                                        </div>
                                        <div class="contact_form_address_field">
                                            <span class="contact_form_address_label">e-mail: </span>
                                            <span class="contact_form_address_data">info@yoursite.com</span>
                                        </div>
                                    </div>
                                    <div class="sc_socials sc_socials_size_small  color_icons">
                                        <div class="sc_socials_item">
                                            <a href="https://twitter.com/Theme_REX" target="_blank" class="social_icons social_twitter icons">
                                                    <span class="icon-twitter"></span>
                                                    <span class="sc_socials_hover icon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="https://www.facebook.com/themerex" target="_blank" class="social_icons social_facebook icons">
                                                <span class="icon-facebook"></span>
                                                <span class="sc_socials_hover icon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="https://plus.google.com/102189073109602153696" target="_blank" class="social_icons social_gplus icons">
                                                <span class="icon-gplus"></span>
                                                <span class="sc_socials_hover icon-gplus"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_linkedin icons">
                                                <span class="icon-linkedin"></span>
                                                <span class="sc_socials_hover icon-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_form_right">
                                <form action="{{route('contact.store')}}" method="post" class="inited">
                                    @csrf
                                        <div class="contact_form_info">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_username">Name</label>
                                                <input id="contact_form_username" type="text" name="name" placeholder="Name">
                                            </div>
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_email">E-mail</label>
                                                <input id="contact_form_email" type="text" name="email" placeholder="Email">
                                            </div>
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_subj">Subject</label>
                                                <input id="contact_form_subj" type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="contact_form_item contact_form_message label_over">
                                            <label class="required" for="contact_form_message">Message</label>
                                            <textarea id="contact_form_message" name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="contact_form_item contact_form_button">
                                            <button type="submit">
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
    </section>          
      
</div>


@endsection