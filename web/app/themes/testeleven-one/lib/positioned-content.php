<?php
namespace Testeleven\Testeleven\PositionedContent;

$plugin = \Testeleven_Positioned_Content_Plugin::get_instance();

// Front page posts
$quick_introduction = new \Position('quick-introduction', 'front-page.php');
$find_out_more = new \Position('find-out-more', 'front-page.php');
$what_we_can_do_for_you = new \Position('what-we-can-do-for-you', 'front-page.php');
$assess_the_organization = new \Position('assess-the-organization', 'front-page.php');
$assessment_image = new \Position('assessment-image', 'front-page.php');
$build = new \Position('build', 'front-page.php');
$build_image = new \Position('build-image', 'front-page.php');
$launch = new \Position('launch', 'front-page.php');
$launch_image = new \Position('launch-image', 'front-page.php');
$you_fill_in_the_blanks = new \Position('you-fill-in-the-blanks', 'front-page.php');
$fill_in_the_blanks_image = new \Position('fill-in-the-blanks-image', 'front-page.php');

$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $quick_introduction);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_content', $find_out_more);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_title', $what_we_can_do_for_you);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $assess_the_organization);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $assessment_image);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $build);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $build_image);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $launch);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $launch_image);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $you_fill_in_the_blanks);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $fill_in_the_blanks_image);

// Footer posts
$footer_who = new \Position('footer-who', 'front-page.php');
$footer_contact = new \Position('footer-contact', 'front-page.php');
$footer_menu_intro = new \Position('footer-menu-intro', 'front-page.php');

$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $footer_who);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $footer_contact);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $footer_menu_intro);

// About Us posts
$about_us = new \Position('about-us', 'page-about-us.php');
$about_us_image = new \Position('about-us-image', 'page-about-us.php');
$how_we_got_here = new \Position('how-we-got-here', 'page-about-us.php');
$how_we_got_here_image = new \Position('how-we-got-here-image', 'page-about-us.php');
$why_this_makes_us_great = new \Position('why-this-makes-us-great', 'page-about-us.php');
$why_this_makes_us_great_image = new \Position('why-this-makes-us-great-image', 'page-about-us.php');

$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $about_us);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $about_us_image);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $how_we_got_here);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $how_we_got_here_image);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $why_this_makes_us_great);
$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_image', $why_this_makes_us_great_image);

// Pricing and promotions posts
$pricing_information = new \Position('pricing-information', 'page-pricing-and-promotions.php');

$plugin->create_positioned_post('Positioned_Post_Creator', 'positioned_full', $pricing_information);



