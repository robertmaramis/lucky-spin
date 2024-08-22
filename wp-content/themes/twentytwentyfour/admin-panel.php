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
 * Template Name: Admin panel page
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
    <h2>Daftar Hadiah</h2>

    <div class="separator"></div>
    
    <table class="mainTable borderTable">
        <tr>
            <th>ID</th>
            <th>Kode Kupon</th>
            <th>ID Member</th>
            <th>User Admin</th>
            <th>Status</th>
            <th>Klaim</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>ACBD1234</td>
            <td>24</td>
            <td>Keyko</td>
            <td><div class="expierd">Hangus</div></td>
            <td></td>
            <td>Approved</td>
        </tr>
        <tr>
            <td>2</td>
            <td>EFTS6484</td>
            <td>30</td>
            <td>Keyko</td>
            <td><div class="used">Terpakai</div></td>
            <td>Belum approved</td>
            <td>Approved</td>
        </tr>
        <tr>
            <td>3</td>
            <td>EFTH3434</td>
            <td>37</td>
            <td>Admin</td>
            <td><div class="issued">Belum Terpakai</div></td>
            <td>Approved</td>
            <td>Approved</td>
        </tr>
        <tr>
            <td>4</td>
            <td>EFTH34377</td>
            <td>2</td>
            <td>Admin</td>
            <td><div class="issued">Terpakai</div></td>
            <td></td>
            <td>Approved</td>
        </tr>
    </table>
</div>

<?php
}
// END NOT CHOOSE
get_footer();