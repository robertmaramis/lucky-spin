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
 * Template Name: Add Hadiah Page
 */

get_header();
global $wpdb;

?>
<div class="container">
<?php

if (isset($_POST["submit"])) {
    $hadiah = $_POST["valueHadiah"];
    //check data
    $checkHadiah = $wpdb->get_row( "SELECT * FROM master_hadiah WHERE hadiah = '$hadiah'");
    
    if (!empty($checkHadiah)) {
        echo "<script>alert('Hadiah Sudah ada.');</script>";
    } else {
        $wpdb->insert('master_hadiah', array('hadiah'=>$hadiah));

        echo "<script>alert('Hadiah Berhasil ditambahkan.');</script>";
    }
}


if (!is_user_logged_in()) {
	?>
	<div class="formLogin">
		<?php wp_login_form(); ?>
		<br/>
	</div>
	<?php
} else {
    $listHadiah = $wpdb->get_results( "SELECT * FROM master_hadiah");


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
    <h2>Buat hadiah Baru</h2>

    <div class="separator"></div>
    
    <form id="masterHadiahForm" class="mainForm" method="POST">
        <label>Jumlah Hadiah</label>
        <div class="fieldForm">
            <input type="number" id="valueHadiah" name="valueHadiah" class="valueHadiah" />
        </div>
        <br/>
        <div class="buttonNormal" id="submitMasterHadiah">
            Simpan
        </div>
        <button id="submitHadiah" name="submit" type="submit" value="draw" class="hid"></button>
    </form>
</div>


<script>
    $( document ).ready(function() {
        $(document).on("click","#submitMasterHadiah",function(e){
			e.stopPropagation();
			e.stopImmediatePropagation();
    
			var value = $("#valueHadiah").val();
            if (value == "") {
                alert("Harap isi hadiah");
                return false;
            }

            $("#submitHadiah").click();
        });
    });
</script>

<?php
}
// END NOT CHOOSE
get_footer();