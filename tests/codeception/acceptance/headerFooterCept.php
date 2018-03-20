<?php
/**
 * Test Header/Footer in Live Composer.
 *
 * @since 1.0.0
 */


$I = new AcceptanceTester( $scenario );
$I->wantTo( 'Create Header/Footer.' );
$I->loginAsAdmin();
$I->waitForElement('#footer-thankyou');

// Publish new header.
$I->amOnPage( '/wp-admin/post-new.php?post_type=dslc_hf' );
$I->waitForElement( '[name="post_title"]', 30 );
$I->fillField( [ 'name' => 'post_title' ], 'Codeception Automatic Testing ( Header )' );
$I->click( '#dslc_hf_type1' );
$I->click( 'span#enternew' );
$I->fillField( 'input#metakeyinput', 'dslc_hf_for' );
$I->fillField( 'textarea#metavalue', 'header' );
$I->fillField( 'input#metakeyinput', 'dslc_code' );
$dslc_code = '[{"type":"wrapper","columns_spacing":"spacing","border_color":"","border_width":"0","border_style":"","border":"","bg_color":"#b53030","bg_image_thumb":"disabled","bg_image":"","bg_video":"","bg_video_overlay_color":"","bg_video_overlay_opacity":"","bg_image_repeat":"repeat","bg_image_attachment":"scroll","bg_image_position":"left top","bg_image_size":"auto","padding":"61","padding_h":"0","margin_h":"0","margin_b":"0","custom_class":"","custom_id":"","element_type":"row","show_on":"desktop tablet phone","section_instance_id":"9524cb2bad1","dslca-img-url":"","content":[{"element_type":"module_area","last":"yes","first":"no","size":"12","content":[{"css_show_on":"desktop tablet phone","content":"<h1>Header</h1>","css_custom":"enabled","css_main_bg_img_repeat":"repeat","css_main_bg_img_attch":"scroll","css_main_bg_img_pos":"top left","css_main_bg_img_size":"auto","css_main_border_trbl":"top right bottom left","css_main_font_size":"13","css_main_font_weight":"400","css_main_font_family":"Open Sans","css_main_font_style":"normal","css_main_line_height":"22","css_main_margin_bottom":"25","css_main_text_align":"left","css_h1_color":"#ffffff","css_h1_font_size":"46","css_h1_font_weight":"400","css_h1_font_family":"Open Sans","css_h1_font_style":"normal","css_h1_line_height":"50","css_h1_margin_bottom":"0","css_h1_text_align":"center","css_h1_border_trbl":"top right bottom left","css_h2_font_size":"23","css_h2_font_weight":"400","css_h2_font_family":"Open Sans","css_h2_font_style":"normal","css_h2_line_height":"33","css_h2_margin_bottom":"15","css_h2_text_align":"left","css_h2_border_trbl":"top right bottom left","css_h3_font_size":"21","css_h3_font_weight":"400","css_h3_font_family":"Open Sans","css_h3_font_style":"normal","css_h3_line_height":"31","css_h3_margin_bottom":"15","css_h3_text_align":"left","css_h3_border_trbl":"top right bottom left","css_h4_font_size":"19","css_h4_font_weight":"400","css_h4_font_family":"Open Sans","css_h4_font_style":"normal","css_h4_line_height":"29","css_h4_margin_bottom":"15","css_h4_text_align":"left","css_h4_border_trbl":"top right bottom left","css_h5_font_size":"17","css_h5_font_weight":"400","css_h5_font_family":"Open Sans","css_h5_font_style":"normal","css_h5_line_height":"27","css_h5_margin_bottom":"15","css_h5_text_align":"left","css_h5_border_trbl":"top right bottom left","css_h6_font_size":"15","css_h6_font_weight":"400","css_h6_font_family":"Open Sans","css_h6_font_style":"normal","css_h6_line_height":"25","css_h6_margin_bottom":"15","css_h6_text_align":"left","css_h6_border_trbl":"top right bottom left","css_li_font_size":"13","css_li_font_weight":"400","css_li_font_family":"Open Sans","css_li_line_height":"22","css_ul_margin_bottom":"25","css_ul_margin_left":"25","css_ul_style":"disc","css_ol_style":"decimal","css_ul_li_margin_bottom":"10","css_li_border_trbl":"top right bottom left","css_inputs_color":"#fffff","css_inputs_font_size":"13","css_inputs_font_weight":"500","css_inputs_font_family":"Open Sans","css_inputs_line_height":"23","css_inputs_margin_bottom":"15","css_inputs_padding_vertical":"10","css_inputs_padding_horizontal":"15","css_inputs_bg_color":"#fff","css_inputs_border_color":"#ddd","css_inputs_border_width":"1","css_inputs_border_trbl":"top right bottom left","css_blockquote_font_size":"13","css_blockquote_font_weight":"400","css_blockquote_font_family":"Open Sans","css_blockquote_line_height":"22","css_blockquote_text_align":"left","css_blockquote_bg_img_repeat":"repeat","css_blockquote_bg_img_attch":"scroll","css_blockquote_bg_img_pos":"top left","css_blockquote_border_trbl":"top right bottom left","css_button_bg_color":"#5890e5","css_button_bg_color_hover":"#5890e5","css_button_border_color":"#5890e5","css_button_border_color_hover":"#5890e5","css_button_border_trbl":"top right bottom left","css_button_border_radius":"3","css_button_color":"#fff","css_button_color_hover":"#fff","css_button_font_size":"13","css_button_font_weight":"500","css_button_font_family":"Open Sans","css_button_line_height":"13","css_button_padding_vertical":"10","css_button_padding_horizontal":"15","css_res_t":"disabled","css_res_t_main_font_size":"13","css_res_t_main_line_height":"22","css_res_t_main_text_align":"left","css_res_t_h1_font_size":"13","css_res_t_h1_line_height":"13","css_res_t_h1_margin_bottom":"15","css_res_t_h1_text_align":"left","css_res_t_h2_font_size":"13","css_res_t_h2_line_height":"13","css_res_t_h2_margin_bottom":"15","css_res_t_h2_text_align":"left","css_res_t_h3_font_size":"13","css_res_t_h3_line_height":"13","css_res_t_h3_margin_bottom":"15","css_res_t_h3_text_align":"left","css_res_t_h4_font_size":"13","css_res_t_h4_line_height":"13","css_res_t_h4_margin_bottom":"15","css_res_t_h4_text_align":"left","css_res_t_h5_font_size":"13","css_res_t_h5_line_height":"13","css_res_t_h5_margin_bottom":"15","css_res_t_h5_text_align":"left","css_res_t_h6_font_size":"13","css_res_t_h6_line_height":"13","css_res_t_h6_margin_bottom":"15","css_res_t_h6_text_align":"left","css_res_t_li_font_size":"13","css_res_t_li_line_height":"22","css_res_t_ul_margin_bottom":"25","css_res_t_ul_margin_left":"25","css_res_t_ul_li_margin_bottom":"10","css_res_t_blockquote_font_size":"13","css_res_t_blockquote_line_height":"22","css_res_t_blockquote_text_align":"left","css_res_p":"disabled","css_res_ph_main_font_size":"13","css_res_ph_main_line_height":"22","css_res_p_main_text_align":"left","css_res_ph_h1_font_size":"13","css_res_ph_h1_line_height":"13","css_res_ph_h1_margin_bottom":"15","css_res_p_h1_text_align":"left","css_res_ph_h2_font_size":"13","css_res_ph_h2_line_height":"13","css_res_p_h2_margin_bottom":"15","css_res_p_h2_text_align":"left","css_res_ph_h3_font_size":"13","css_res_ph_h3_line_height":"13","css_res_p_h3_margin_bottom":"15","css_res_p_h3_text_align":"left","css_res_ph_h4_font_size":"13","css_res_ph_h4_line_height":"13","css_res_p_h4_margin_bottom":"15","css_res_p_h4_text_align":"left","css_res_ph_h5_font_size":"13","css_res_ph_h5_line_height":"13","css_res_p_h5_margin_bottom":"15","css_res_p_h5_text_align":"left","css_res_ph_h6_font_size":"13","css_res_ph_h6_line_height":"13","css_res_p_h6_margin_bottom":"15","css_res_p_h6_text_align":"left","css_res_p_li_font_size":"13","css_res_p_li_line_height":"22","css_res_p_ul_margin_bottom":"25","css_res_p_ul_margin_left":"25","css_res_p_ul_li_margin_bottom":"10","css_res_p_blockquote_font_size":"13","css_res_p_blockquote_line_height":"22","css_res_p_blockquote_text_align":"left","css_anim":"none","css_anim_duration":"650","css_anim_easing":"ease","css_load_preset":"none","module_instance_id":"4bf4937068b","post_id":"1488","dslc_m_size":"12","module_id":"DSLC_Text_Simple","element_type":"module","last":"yes"}]}]}]';
$I->fillField( 'textarea#metavalue', $dslc_code );
$I->see( 'Publish' );
$I->click( 'Publish' );

// Publish new footer.
$I->amOnPage( '/wp-admin/post-new.php?post_type=dslc_hf' );
$I->waitForElement( '[name="post_title"]', 30 );
$I->fillField( [ 'name' => 'post_title' ], 'Codeception Automatic Testing ( Footer )' );
$I->selectOption('#dslc_hf_for','footer');
$I->click( '#dslc_hf_type1' );
$I->click( 'span#enternew' );
$I->fillField( 'input#metakeyinput', 'dslc_code' );
$dslc_code = '[{"type":"wrapper","columns_spacing":"spacing","border_color":"","border_width":"0","border_style":"","border":"","bg_color":"#50b3f5","bg_image_thumb":"disabled","bg_image":"","bg_video":"","bg_video_overlay_color":"","bg_video_overlay_opacity":"","bg_image_repeat":"repeat","bg_image_attachment":"scroll","bg_image_position":"left top","bg_image_size":"auto","padding":"61","padding_h":"0","margin_h":"0","margin_b":"0","custom_class":"","custom_id":"","element_type":"row","show_on":"desktop tablet phone","section_instance_id":"9524cb2bad1","dslca-img-url":"","content":[{"element_type":"module_area","last":"yes","first":"no","size":"12","content":[{"css_show_on":"desktop tablet phone","content":"<h1>Footer</h1>","css_custom":"enabled","css_main_bg_img_repeat":"repeat","css_main_bg_img_attch":"scroll","css_main_bg_img_pos":"top left","css_main_bg_img_size":"auto","css_main_border_trbl":"top right bottom left","css_main_font_size":"13","css_main_font_weight":"400","css_main_font_family":"Open Sans","css_main_font_style":"normal","css_main_line_height":"22","css_main_margin_bottom":"25","css_main_text_align":"left","css_h1_color":"#ffffff","css_h1_font_size":"46","css_h1_font_weight":"400","css_h1_font_family":"Open Sans","css_h1_font_style":"normal","css_h1_line_height":"50","css_h1_text_align":"center","css_h1_border_trbl":"top right bottom left","css_h2_font_size":"23","css_h2_font_weight":"400","css_h2_font_family":"Open Sans","css_h2_font_style":"normal","css_h2_line_height":"33","css_h2_margin_bottom":"15","css_h2_text_align":"left","css_h2_border_trbl":"top right bottom left","css_h3_font_size":"21","css_h3_font_weight":"400","css_h3_font_family":"Open Sans","css_h3_font_style":"normal","css_h3_line_height":"31","css_h3_margin_bottom":"15","css_h3_text_align":"left","css_h3_border_trbl":"top right bottom left","css_h4_font_size":"19","css_h4_font_weight":"400","css_h4_font_family":"Open Sans","css_h4_font_style":"normal","css_h4_line_height":"29","css_h4_margin_bottom":"15","css_h4_text_align":"left","css_h4_border_trbl":"top right bottom left","css_h5_font_size":"17","css_h5_font_weight":"400","css_h5_font_family":"Open Sans","css_h5_font_style":"normal","css_h5_line_height":"27","css_h5_margin_bottom":"15","css_h5_text_align":"left","css_h5_border_trbl":"top right bottom left","css_h6_font_size":"15","css_h6_font_weight":"400","css_h6_font_family":"Open Sans","css_h6_font_style":"normal","css_h6_line_height":"25","css_h6_margin_bottom":"15","css_h6_text_align":"left","css_h6_border_trbl":"top right bottom left","css_li_font_size":"13","css_li_font_weight":"400","css_li_font_family":"Open Sans","css_li_line_height":"22","css_ul_margin_bottom":"25","css_ul_margin_left":"25","css_ul_style":"disc","css_ol_style":"decimal","css_ul_li_margin_bottom":"10","css_li_border_trbl":"top right bottom left","css_inputs_color":"#fffff","css_inputs_font_size":"13","css_inputs_font_weight":"500","css_inputs_font_family":"Open Sans","css_inputs_line_height":"23","css_inputs_margin_bottom":"15","css_inputs_padding_vertical":"10","css_inputs_padding_horizontal":"15","css_inputs_bg_color":"#fff","css_inputs_border_color":"#ddd","css_inputs_border_width":"1","css_inputs_border_trbl":"top right bottom left","css_blockquote_font_size":"13","css_blockquote_font_weight":"400","css_blockquote_font_family":"Open Sans","css_blockquote_line_height":"22","css_blockquote_text_align":"left","css_blockquote_bg_img_repeat":"repeat","css_blockquote_bg_img_attch":"scroll","css_blockquote_bg_img_pos":"top left","css_blockquote_border_trbl":"top right bottom left","css_button_bg_color":"#5890e5","css_button_bg_color_hover":"#5890e5","css_button_border_color":"#5890e5","css_button_border_color_hover":"#5890e5","css_button_border_trbl":"top right bottom left","css_button_border_radius":"3","css_button_color":"#fff","css_button_color_hover":"#fff","css_button_font_size":"13","css_button_font_weight":"500","css_button_font_family":"Open Sans","css_button_line_height":"13","css_button_padding_vertical":"10","css_button_padding_horizontal":"15","css_res_t":"disabled","css_res_t_main_font_size":"13","css_res_t_main_line_height":"22","css_res_t_main_text_align":"left","css_res_t_h1_font_size":"13","css_res_t_h1_line_height":"13","css_res_t_h1_margin_bottom":"15","css_res_t_h1_text_align":"left","css_res_t_h2_font_size":"13","css_res_t_h2_line_height":"13","css_res_t_h2_margin_bottom":"15","css_res_t_h2_text_align":"left","css_res_t_h3_font_size":"13","css_res_t_h3_line_height":"13","css_res_t_h3_margin_bottom":"15","css_res_t_h3_text_align":"left","css_res_t_h4_font_size":"13","css_res_t_h4_line_height":"13","css_res_t_h4_margin_bottom":"15","css_res_t_h4_text_align":"left","css_res_t_h5_font_size":"13","css_res_t_h5_line_height":"13","css_res_t_h5_margin_bottom":"15","css_res_t_h5_text_align":"left","css_res_t_h6_font_size":"13","css_res_t_h6_line_height":"13","css_res_t_h6_margin_bottom":"15","css_res_t_h6_text_align":"left","css_res_t_li_font_size":"13","css_res_t_li_line_height":"22","css_res_t_ul_margin_bottom":"25","css_res_t_ul_margin_left":"25","css_res_t_ul_li_margin_bottom":"10","css_res_t_blockquote_font_size":"13","css_res_t_blockquote_line_height":"22","css_res_t_blockquote_text_align":"left","css_res_p":"disabled","css_res_ph_main_font_size":"13","css_res_ph_main_line_height":"22","css_res_p_main_text_align":"left","css_res_ph_h1_font_size":"13","css_res_ph_h1_line_height":"13","css_res_ph_h1_margin_bottom":"15","css_res_p_h1_text_align":"left","css_res_ph_h2_font_size":"13","css_res_ph_h2_line_height":"13","css_res_p_h2_margin_bottom":"15","css_res_p_h2_text_align":"left","css_res_ph_h3_font_size":"13","css_res_ph_h3_line_height":"13","css_res_p_h3_margin_bottom":"15","css_res_p_h3_text_align":"left","css_res_ph_h4_font_size":"13","css_res_ph_h4_line_height":"13","css_res_p_h4_margin_bottom":"15","css_res_p_h4_text_align":"left","css_res_ph_h5_font_size":"13","css_res_ph_h5_line_height":"13","css_res_p_h5_margin_bottom":"15","css_res_p_h5_text_align":"left","css_res_ph_h6_font_size":"13","css_res_ph_h6_line_height":"13","css_res_p_h6_margin_bottom":"15","css_res_p_h6_text_align":"left","css_res_p_li_font_size":"13","css_res_p_li_line_height":"22","css_res_p_ul_margin_bottom":"25","css_res_p_ul_margin_left":"25","css_res_p_ul_li_margin_bottom":"10","css_res_p_blockquote_font_size":"13","css_res_p_blockquote_line_height":"22","css_res_p_blockquote_text_align":"left","css_anim":"none","css_anim_duration":"650","css_anim_easing":"ease","css_load_preset":"none","module_instance_id":"4bf4937068b","post_id":"1488","dslc_m_size":"12","module_id":"DSLC_Text_Simple","element_type":"module","last":"yes"}]}]}]';
$I->fillField( 'textarea#metavalue', $dslc_code );
$I->see( 'Publish' );
$I->click( 'Publish' );

// Publish new page.
$I->amOnPage( '/wp-admin/post-new.php?post_type=page' );
$I->waitForElement( '[name="post_title"]', 30 );
$I->fillField( [ 'name' => 'post_title' ], 'Codeception Automatic Testing ( Header/Footer )' );
$I->see( 'Publish' );
$I->click( 'Publish' );
$I->click( 'View page' );
$I->see( 'Header' );
$I->see( 'Footer' );

