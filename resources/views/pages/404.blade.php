@extends('layout.layout')

{{-- @section('active_menu_item', ' current-menu-ancestor current_page_ancestor') --}}
@section('body_tag')

<body class="page body_style_wide body_filled article_style_stretch top_panel_opacity_solid padding_content_yes top_panel_show top_panel_above user_menu_hide sidebar_hide">

    <div class="body_wrap">

        <div class="page_wrap">
@endsection
@section('content')
<section class="page_top_wrap no_padding_container page_top_title page_top_breadcrumbs">
    <div class="container">
        <div class="breadcrumbs"></div>
        <h1 class="page_title">URL not found</h1>
    </div>
</section>

<div class="page_content container">

    <section class="fullwidth_section light_section team_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sc_section">
                        <div class="sc_content container">
                            <article class="post_item post_item_404">
                                <div class="post_content">
                                    <h1 class="page_title">404</h1>
                                    <h4 class="page_subtitle">This Page Could Not Be Found!</h4>
                                    <p class="page_description">
                                        Go back, or return to 
                                        <a href="index.html">Global Logistics</a> 
                                        home page to choose a new page.
                                        <br>Please report any broken links to our team.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection