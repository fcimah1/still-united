@extends('layout.layout')

{{-- @section('active_menu_item', ' current-menu-ancestor current_page_ancestor') --}}
@section('body_tag')
<body class="page body_style_wide body_filled article_style_stretch top_panel_opacity_solid top_panel_show top_panel_above user_menu_hide sidebar_hide fixed_top_menu">

    <div class="body_wrap">

        <div class="page_wrap">
@endsection
@section('content')
<div class="page_top_wrap page_top_title page_top_breadcrumbs">
    <div class="container">
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <a class="breadcrumbs_item all" href="#">All posts</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Blog</span>
        </div>
        <h1 class="page_title">Blog</h1>
    </div>
</div>

<div class="page_content container">
    <section class="fullwidth_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container">
                        <article class="post_item post_item_single">
                            <section class="post_featured">
                                <div class="post_thumb" data-image="images/news/1800x1125.png" data-title="Import Fundamentals">
                                    <a class="hover_icon hover_icon_view" href="images/news/1800x1125.png" title="Import Fundamentals">
                                        <img alt="Import Fundamentals" src="images/news/1150x647.png">
                                    </a>
                                </div>
                            </section>
                            <div class="post_info">
                                <span class="post_info_item post_info_posted">
                                    <a href="#" class="post_info_date date updated">January 11, 2015</a>
                                </span>
                                <span class="post_info_item post_info_posted_by vcard">
                                    by 
                                    <a href="#" class="post_info_author">Admin</a>
                                </span>
                                <span class="post_info_item post_info_counters">
                                    <span class="post_counters_item post_counters_views icon-eye" title="Views - 22">22</span>
                                </span>
                            </div>
                            <section class="post_content">
                                <div class="sc_reviews alignright">
                                    <div class="reviews_block">
                                        <div id="users_marks" class="sc_tabs_content">
                                            <div class="reviews_editor">
                                                <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                    <div class="reviews_criteria">Reviews criteria 1</div>
                                                    <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="42">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"></div>
                                                            <div class="reviews_stars_hover"></div>
                                                            <div class="reviews_slider"></div>
                                                        </div>
                                                        <div class="reviews_value">42</div>
                                                        <input type="hidden" name="reviews_marks[]" value="42">
                                                    </div>
                                                </div>
                                                <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                    <div class="reviews_criteria">Reviews criteria 2</div>
                                                    <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="44">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"></div>
                                                            <div class="reviews_stars_hover"></div>
                                                            <div class="reviews_slider"></div>
                                                        </div>
                                                        <div class="reviews_value">44</div>
                                                        <input type="hidden" name="reviews_marks[]" value="44">
                                                    </div>
                                                </div>
                                                <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                    <div class="reviews_criteria">Reviews criteria 3</div>
                                                    <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="65">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"></div>
                                                            <div class="reviews_stars_hover"></div>
                                                            <div class="reviews_slider"></div>
                                                        </div>
                                                        <div class="reviews_value">65</div>
                                                        <input type="hidden" name="reviews_marks[]" value="65">
                                                    </div>
                                                </div>
                                                <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                    <div class="reviews_criteria">Reviews criteria 4</div>
                                                    <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="35">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"></div>
                                                            <div class="reviews_stars_hover"></div>
                                                            <div class="reviews_slider"></div>
                                                        </div>
                                                        <div class="reviews_value">35</div>
                                                        <input type="hidden" name="reviews_marks[]" value="35">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reviews_accept">
                                                <a href="#" class="sc_button sc_button_square sc_button_bg_custom">
                                                    <span>Accept your votes</span>
                                                </a>
                                            </div>
                                            <div class="reviews_summary">
                                                <div class="reviews_item reviews_max_level_100" data-step="1">
                                                    <div class="reviews_criteria">
                                                        Summary rating from <b>9</b> user's marks. You can set own marks for this article - just click on stars above and press "Accept".
                                                    </div>
                                                    <div class="reviews_stars reviews_style_stars" data-mark="47">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"></div>
                                                            <div class="reviews_stars_hover"></div>
                                                        </div>
                                                        <div class="reviews_value">47</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse tristique neque tortor, et rhoncus ex ullamcorper vitae. Suspendisse convallis nisl a gravida malesuada. Cras eleifend ex sed mi gravida, sit amet vulputate est convallis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed at purus rhoncus, convallis purus congue, bibendum lacus. Nullam accumsan id velit sed accumsan.</p>
                                <p>Sed orci dolor, pulvinar nec luctus a, malesuada ac nisl. Aliquam eleifend et dui et suscipit. Nam semper accumsan ante, ac dapibus urna dapibus et. Aenean lobortis viverra nibh in porttitor. Aenean vel eros posuere, laoreet ligula et, lobortis tellus. Morbi quis nunc in risus ornare egestas et ac libero. Donec egestas nunc massa, ac euismod odio posuere sit amet. Ut interdum nisi lectus, eget aliquet quam sagittis et. Nam volutpat convallis sem vel lobortis. Nullam consectetur dolor urna, eget ultricies enim eleifend sit amet.</p>
                                <div class="post_info post_info_bottom">
                                    <span class="post_info_item post_info_tags">
                                        Tags:  
                                        <a class="post_tag_link" href="#">Supply Management</a>
                                    </span>
                                    <span class="post_info_item post_info_category">
                                        Category:  
                                        <a class="category_link" href="#">3 Columns</a>, 
                                        <a class="category_link" href="#">3 Columns</a>, 
                                        <a class="category_link" href="#">3 Columns</a>, 
                                        <a class="category_link" href="#">4 Columns</a>, 
                                        <a class="category_link" href="#">4 Columns</a>, 
                                        <a class="category_link" href="#">4 Columns</a>, 
                                        <a class="category_link" href="#">Gallery Classic</a>, 
                                        <a class="category_link" href="#">Gallery Grid</a>, 
                                        <a class="category_link" href="#">Gallery Masonry</a>, 
                                        <a class="category_link" href="#">Grid Alternative</a>
                                    </span>
                                </div>
                            </section>
                            <section class="post_author author vcard">
                                <div class="post_author_avatar">
                                    <a href="#">
                                        <img alt="" src="images/team/90x90.png" srcset="images/team/90x90.png" class="avatar avatar-90 photo">
                                    </a>
                                </div>
                                <h6 class="post_author_title">
                                    About 
                                    <span>
                                        <a href="#" class="fn">Admin</a>
                                    </span>
                                </h6>
                                <div class="post_author_info">
                                    Aliquam consequat dolor non lacus eleifend congue. In neque enim, vestibulum nec posuere sed, bibendum vel elit. Fusce scelerisque euismod facilisis.
                                </div>
                                <div class="sc_socials sc_socials_size_tiny">
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
                            </section>
                        </article>
                        <div class="related_wrap">
                            <h3 class="section_title">Related Posts</h3>
                            <div class="columns_wrap">
                                <div class="col-sm-6 column_padding_bottom">
                                    <article class="post_item post_item_related post_item_1">
                                        <div class="post_content">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <a href="#">
                                                        <img alt="Exclusive Transportation Study" src="images/news/750x442.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content_wrap">
                                                <h4 class="post_title">
                                                    <a href="#">Exclusive Transportation Study</a>
                                                </h4>
                                                <span class="post_info_posted post_info_date">
                                                    May 11, 2015
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 column_padding_bottom">
                                    <article class="post_item post_item_related post_item_2">
                                        <div class="post_content">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <a href="#">
                                                        <img alt="Driving Organizational Alignment" src="images/news/750x442.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content_wrap">
                                                <h4 class="post_title">
                                                    <a href="#">Driving Organizational Alignment</a>
                                                </h4>
                                                <span class="post_info_posted post_info_date">
                                                    May 11, 2015
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="comments_wrap no_comments">
                            <div class="comments_form_wrap">
                                <h3 class="section_title comments_form_title">Leave a Comment</h3>
                                <div class="comments_form">
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title"> 
                                            <small>
                                                <a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Cancel reply</a>
                                            </small>
                                        </h3>
                                        <form action="#" method="post" id="commentform" class="comment-form">
                                            <p class="comments_notes">Your email address will not be published. Required fields are marked *</p>
                                            <div class="columns_wrap">
                                                <div class="comments_field comments_author col-sm-6">
                                                    <label for="author" class="required">Name</label>
                                                    <input id="author" name="author" type="text" placeholder="Name *" value="" size="30" aria-required="true">
                                                </div>
                                                <div class="comments_field comments_email col-sm-6">
                                                    <label for="email" class="required">Email</label>
                                                    <input id="email" name="email" type="text" placeholder="Email *" value="" size="30" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="comments_field comments_message">
                                                <label for="comment" class="required">Your Message</label>
                                                <textarea id="comment" name="comment" placeholder="Comment" aria-required="true"></textarea>
                                            </div>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="send_comment" class="submit" value="send message"> 
                                                <input type="hidden" name="comment_post_ID" value="152" id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                            </p>
                                        </form>
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