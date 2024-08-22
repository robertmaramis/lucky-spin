<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 * 
 * Template Name: Master Kupon Page
 */

get_header();
global $wpdb;


?>
<div class="container">
<?php

if (!is_user_logged_in()) {
	?>
	<div class="formLogin">
		<?php wp_login_form(); ?>
		<br/>
	</div>
	<?php
} else {
?>
<div class="floatingPane">
    <a href="admin-panel" class="navMenu clearfix">
        <div class="fl pad5"><i class="fa-solid fa-house"></i></div>
        <div class="menuLabel fl pad5">Admin Panel</div>
    </a>
    <a href="master-hadiah" class="navMenu clearfix">
        <div class="fl pad5"><i class="fa-solid fa-gift"></i></div>
        <div class="menuLabel fl pad5">Master Hadiah</div>
    </a>

    <a href="buat-kupon" class="navMenu clearfix">
        <div class="fl pad5"><i class="fa-solid fa-ticket-simple"></i></div>
        <div class="menuLabel fl pad5">Buat Kupon</div>
    </a>
</div>

<div class="menuContainer clearfix">
    
</div>

<div class="mainContainer">
    <h2>Buat Kupon Baru</h2>

    <div class="separator"></div>
    
    <form id="createCoupon" method="POST">
        
    </form>
</div>

<?php
}
// END NOT CHOOSE
get_footer();