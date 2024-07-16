@extends('layout.layout')

{{-- @section('active_menu_item', ' current-menu-ancestor current_page_ancestor') --}}
@section('body_tag')
<body class="page body_style_wide body_filled article_style_stretch top_panel_opacity_transparent top_panel_show top_panel_above top_panel_over user_menu_hide sidebar_hide top_image_show"> 

    <div class="body_wrap">

        <div class="page_wrap">
@endsection
@section('content')

<section class="top_panel_image top_panel_bg2">
    <div class="top_panel_image_hover"></div>
    <div class="top_panel_image_header">
        <h1 class="top_panel_image_title entry-title">REQUEST A QUOTE</h1>
        <div class="breadcrumbs">
            <span class="breadcrumbs_item_first">You Are Here:</span>
            <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Request A Quote</span>
        </div>
    </div>
</section>
<div class="page_content container">

    <section class="fullwidth_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="contact_form contact_form_topic">
                            <div class="sc_contact_info">
                                <h4 class="sc_contact_title">Shipper Information</h4>
                            </div>
                            <form method="post" action="{{route('quote.store')}}">
                                @csrf
                                <div class="contact_form_info_first">
                                    <div class="sc_columns">
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_username">First Name</label>
                                                <input id="contact_form_username" type="text" name="first_name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_username2">Last Name</label>
                                                <input id="contact_form_username2" type="text" name="last_name" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_columns">
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_email">E-mail</label>
                                                <input id="contact_form_email" type="text" name="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_company">Company</label>
                                                <input id="contact_form_company" type="text" name="company" placeholder="Company">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_columns">
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_address">Address</label>
                                                <input id="contact_form_address" type="text" name="address" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_city">City</label>
                                                <input id="contact_form_city" type="text" name="city" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_columns">
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_zip">Zip</label>
                                                <input id="contact_form_zip" type="text" name="zip" placeholder="Zip">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_phone">Telephone (include country code)</label>
                                                <input id="contact_form_phone" type="text" name="telephone" placeholder="Telephone (include country code)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact_form_info_second">
                                    <h4 class="sc_contact_subtitle">Package Details</h4>
                                    <div class="sc_columns">
                                        <div class="col-sm-4 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_pieces">Number Of Pieces</label>
                                                <input id="contact_form_pieces" type="text" name="no_of_pieces" placeholder="Number Of Pieces">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_weight">Total Weight (LBS)</label>
                                                <input id="contact_form_weight" type="text" name="total_weight" placeholder="Total Weight (LBS)">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 sc_column_item"></div>
                                    </div>
                                    <div class="sc_columns">
                                        <div class="col-sm-4 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_height">Height (inches)</label>
                                                <input id="contact_form_height" type="text" name="height" placeholder="Height (inches)">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_width">Width (inches)</label>
                                                <input id="contact_form_width" type="text" name="width" placeholder="Width (inches)">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_depth">Depth (inches)</label>
                                                <input id="contact_form_depth" type="text" name="depth" placeholder="Depth (inches)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_columns">
                                        <div class="col-sm-12 sc_column_item">
                                            <div class="contact_form_item contact_form_field label_over">
                                                <label class="required" for="contact_form_commodity">Commodity</label>
                                                <input id="contact_form_commodity" type="text" name="commodity" placeholder="Commodity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 contact_form_item contact_form_message label_over">
                                        <label class="required" for="contact_form_message">Message Subject</label>
                                        <textarea id="contact_form_message" name="message" placeholder="Message Subject"></textarea>
                                    </div>
                                    <div class="col-sm-12 contact_form_item contact_form_button">
                                        <button>Submit</button>
                                    </div>
                                </div>
                                <div class="result sc_infobox"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>           
</div>
@endsection