@extends('layout.layout')

{{-- @section('active_menu_item', ' current-menu-ancestor current_page_ancestor') --}}
@section('body_tag')
<body class="page body_style_wide body_filled article_style_stretch top_panel_opacity_transparent top_panel_show top_panel_above top_panel_over user_menu_hide sidebar_hide fixed_top_menu top_image_show"> 

    <div class="body_wrap">

        <div class="page_wrap">
@endsection
@section('content')

<section class="top_panel_image top_panel_bg1">
    <div class="top_panel_image_hover"></div>
    <div class="top_panel_image_header">
        <h1 class="top_panel_image_title entry-title">Our services</h1>
        <div class="breadcrumbs">
            <span class="breadcrumbs_item_first">You Are Here:</span>
            <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Our services</span>
        </div>
    </div>
</section>

<div class="page_content container">

    <section class="fullwidth_section news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_content container">
                            <div class="sc_blogger layout_news template_news sc_blogger_horizontal">
                                <div class="columns_wrap">
                                    <div class="col-sm-4 column_item_1">
                                        <div class="post_item post_item_news sc_blogger_item">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <img alt="Air Freight Forwarding" src="{{asset('images/news/400x250.png')}}">
                                                    <div class="hover_wrap">
                                                        <div class="link_wrap">
                                                            <a class="hover_link icon-link" href="#"></a>
                                                            <a class="hover_view icon-resize-full" href="images/news/1800x1125.png" title="Air Freight Forwarding"></a>
                                                        </div>
                                                    </div>          
                                                </div>
                                            </div>                                                    
                                            <h4 class="post_title sc_title sc_blogger_title">Air Freight Forwarding</h4>            
                                            <div class="post_content sc_blogger_content">
                                                <div class="post_descr">
                                                    <p>Duis eget dictum eros, in dictum sem. Vivamus sed molestie sapien. Aliquam et facilisis arcu, ut...</p>
                                                    <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        Learn more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                            </div>  
                                        </div>      
                                    </div>  
                                    <div class="col-sm-4 column_item_2">
                                        <div class="post_item post_item_news sc_blogger_item">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <img alt="Supply Chain Security" src="{{asset('images/news/400x250.png')}}">
                                                    <div class="hover_wrap">
                                                        <div class="link_wrap">
                                                            <a class="hover_link icon-link" href="#"></a>
                                                            <a class="hover_view icon-resize-full" href="images/news/1800x1125.png" title="Supply Chain Security"></a>
                                                        </div>
                                                    </div>          
                                                </div>
                                            </div>                                                    
                                            <h4 class="post_title sc_title sc_blogger_title">Supply Chain Security</h4>          
                                            <div class="post_content sc_blogger_content">
                                                <div class="post_descr">
                                                    <p>Duis eget dictum eros, in dictum sem. Vivamus sed molestie sapien. Aliquam et facilisis arcu, ut...</p>
                                                    <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        Learn more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                            </div>  
                                        </div>      
                                    </div>  
                                    <div class="col-sm-4 column_item_3">
                                        <div class="post_item post_item_news sc_blogger_item">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <img alt="The E-commerce Effect" src="{{asset('images/news/400x250.png')}}">
                                                    <div class="hover_wrap">
                                                        <div class="link_wrap">
                                                            <a class="hover_link icon-link" href="#"></a>
                                                            <a class="hover_view icon-resize-full" href="images/news/1800x1125.png" title="The E-commerce Effect"></a>
                                                        </div>
                                                    </div>          
                                                </div>
                                            </div>                                                    
                                            <h4 class="post_title sc_title sc_blogger_title">The E-commerce Effect</h4>          
                                            <div class="post_content sc_blogger_content">
                                                <div class="post_descr">
                                                    <p>Duis eget dictum eros, in dictum sem. Vivamus sed molestie sapien. Aliquam et facilisis arcu, ut...</p>
                                                    <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        Learn more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                            </div>  
                                        </div>      
                                    </div>  
                                    <div class="col-sm-4 column_item_4">
                                        <div class="post_item post_item_news sc_blogger_item sc_blogger_item_last">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <img alt="Ocean Cargo Roundtable" src="{{asset('images/news/400x250.png')}}">
                                                    <div class="hover_wrap">
                                                        <div class="link_wrap">
                                                            <a class="hover_link icon-link" href="#"></a>
                                                            <a class="hover_view icon-resize-full" href="images/news/1800x1125.png" title="Ocean Cargo Roundtable"></a>
                                                        </div>
                                                    </div>          
                                                </div>
                                            </div>                                                        
                                            <h4 class="post_title sc_title sc_blogger_title">Ocean Cargo Roundtable</h4>            
                                            <div class="post_content sc_blogger_content">
                                                <div class="post_descr">
                                                    <p>Duis eget dictum eros, in dictum sem. Vivamus sed molestie sapien. Aliquam et facilisis arcu, ut...</p>
                                                    <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        Learn more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                            </div>  
                                        </div>      
                                    </div>  
                                    <div class="col-sm-4 column_item_4">
                                        <div class="post_item post_item_news sc_blogger_item sc_blogger_item_last">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <img alt="Import Fundamentals" src="{{asset('images/news/400x250.png')}}">
                                                    <div class="hover_wrap">
                                                        <div class="link_wrap">
                                                            <a class="hover_link icon-link" href="#"></a>
                                                            <a class="hover_view icon-resize-full" href="images/news/1800x1125.png" title="Import Fundamentals"></a>
                                                        </div>
                                                    </div>          
                                                </div>
                                            </div>                                                        
                                            <h4 class="post_title sc_title sc_blogger_title">Import Fundamentals</h4>            
                                            <div class="post_content sc_blogger_content">
                                                <div class="post_descr">
                                                    <p>Duis eget dictum eros, in dictum sem. Vivamus sed molestie sapien. Aliquam et facilisis arcu, ut...</p>
                                                    <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
                                                        Learn more
                                                        <span class="sc_button_iconed icon-right"></span>
                                                    </a>
                                                </div>
                                            </div>  
                                        </div>      
                                    </div> 
                                    <div class="col-sm-4 column_item_4">
                                        <div class="post_item post_item_news sc_blogger_item sc_blogger_item_last">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <img alt="Intermodal Roundtable" src="{{asset('images/news/400x250.png')}}">
                                                    <div class="hover_wrap">
                                                        <div class="link_wrap">
                                                            <a class="hover_link icon-link" href="#"></a>
                                                            <a class="hover_view icon-resize-full" href="images/news/1800x1125.png" title="Intermodal Roundtable"></a>
                                                        </div>
                                                    </div>          
                                                </div>
                                            </div>                                                        
                                            <h4 class="post_title sc_title sc_blogger_title">Intermodal Roundtable</h4>            
                                            <div class="post_content sc_blogger_content">
                                                <div class="post_descr">
                                                    <p>Duis eget dictum eros, in dictum sem. Vivamus sed molestie sapien. Aliquam et facilisis arcu, ut...</p>
                                                    <a href="#" class="sc_button sc_button_square sc_button_bg_underline  sc_button_iconed ">
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

</div>

    <section class="parallax_section">
        <div class="sc_parallax bg_tint_dark" data-parallax-speed="0.6" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
            <div class="sc_parallax_content parallax_bg1">
                <div class="sc_parallax_overlay">
                    <div class="sc_section aligncenter">
                        <h2 class="sc_title sc_title_underline sc_align_center">The company promise</h2>
                        <p>As a contractor we promise to take care of all supply chain management, to make your<br>
                        shipments travel safe, fast and on time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

<div class="page_content container">

    <section class="fullwidth_section clients_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_content container">
                        <nav class="flex justify-center  nav-tabs" role="tablist">
                            <h2 class="sc_title sc_title_regular sc_align_center">
                                    <a href="#" class="cursor-pointer hover:decoration-0 active" id="nav-client-tab" data-bs-toggle="tab" data-bs-target="#nav-client"  role="tab" aria-controls="nav-client" aria-selected="true">client</a>
                                    <span> / </span>
                                    <a class="cursor-pointer underline-offset-0	 decoration-0 hover:decoration-0" id="nav-partner-tab" data-bs-toggle="tab" data-bs-target="#nav-partner" role="tab" aria-controls="nav-partner" aria-selected="false">partner</a>
                            </h2>
                        </nav>
                        
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane  show active" id="nav-client" role="tabpanel" aria-labelledby="nav-client-tab" tabindex="0">
                                <div class="sc_section">
                                <div id="clients_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container swiper-free-mode clients_scroll">
                                    <div class="sc_scroll_wrapper swiper-wrapper">
                                        <div class="sc_scroll_slide swiper-slide">
                                            @foreach ($clients as $client) 
                                            <div class="sc_image_wrap text-center floatLeft">
                                                <figure class="sc_image  sc_image_shape_round">
                                                    <img class="partnerAndClientImg" src="{{asset($client->image)}}" alt="{{$client->name}}">
                                                </figure>
                                                <h6 class="partnerAndClientName">{{$client->name}}</h6>
                                                <small>{{$client->type}}</small>
                                                </div>
                                            @endforeach
                                            </div>
                                    </div>
                                    <div id="clients_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal clients_scroll_bar">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="nav-partner" role="tabpanel" aria-labelledby="nav-partner-tab" tabindex="0">
                                <div class="sc_section">
                                    <div id="clients_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container swiper-free-mode clients_scroll">
                                        <div class="sc_scroll_wrapper swiper-wrapper">
                                            <div class="sc_scroll_slide swiper-slide">
                                                @foreach ($partners as $partner) 
                                                <div class="sc_image_wrap text-center floatLeft">
                                                    <figure class="sc_image  sc_image_shape_round">
                                                        <img class="partnerAndClientImg" src="{{asset($partner->image)}}" alt="{{$partner->name}}">
                                                    </figure>
                                                    <h6 class="partnerAndClientName">{{$partner->name}}</h6>
                                                    <small>{{$partner->type}}</small>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="clients_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal clients_scroll_bar">
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