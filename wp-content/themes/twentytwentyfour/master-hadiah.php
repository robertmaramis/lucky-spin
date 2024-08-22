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
 * Template Name: Master Hadiah Page
 */

get_header();
global $wpdb;


?>
<div class="container">
<?php

if (isset($_POST["submit"])) {
    switch ($_POST["submit"]) {
        case "delete":
            $data_id = $_POST["dataId"];
            $wpdb->delete('master_hadiah',array('id_hadiah' => $data_id));

            echo "<script>alert('Hadiah berhasil di delete.');</script>";
    default: 
        break;
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
    <h2>Master Hadiah</h2>

    <div class="separator"></div>

    <div><a href="add-hadiah" class="buttonNormal"><i class="fa-solid fa-plus"></i> Tambah Hadiah</a></div>
    
    <?php 
        if (empty($listHadiah)) {
            ?>
            <div class="emptyTable">
                Tidak Ada Hadiah
            </div>
            <?php
        } else {
            ?>
            
            <table class="hadiahList borderTable">
                <tr>
                    <th>Id</th>
                    <th>Hadiah</th>
                    <th>Action</th>
                </tr>

                <?php 
                $i=0;
                foreach($listHadiah as $key=>$hadiah) {
                ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo "Rp. ".number_format($hadiah->hadiah,0,",","."); ?></td>
                    <td class="ac"><div class="deletHadiah" data-id="<?php echo $hadiah->id_hadiah;?>"><i class="fa-solid fa-trash"></i></div></td>
                </tr>
                <?php 
                $i++;
                }
                ?>
            </table>

            <form id="deleteData" method="POST">
                <input type="hidden" id="dataId" name="dataId" value="" ?>
                <button id="deleteHadiahSubmit" name="submit" type="submit" value="delete" class="hid"></button>
            </form>

            <?php 
        }
    ?>
</div>


<script>
    $( document ).ready(function() {
        $(document).on("click",".deletHadiah",function(e){
            e.stopPropagation();
			e.stopImmediatePropagation();

            var dataId = $(this).attr('data-id');
            console.log(dataId);

            if (confirm('Apakah kamu yakin mau delete data ini?')) {
                //action confirmed
                $("#dataId").val(dataId);
                $("#deleteHadiahSubmit").click();
            } else {
                //action cancelled
                console.log('Cancel is clicked.');
            }

            // confirm("Apakah kamu yakin mau delete data ini?", function(result){
            //     console.log("SINI");
            //     $("#dataId").val(dataId);
            //     $("#deleteHadiahSubmit").click();
            // });
        });
    });

</script>

<?php
}
// END NOT CHOOSE
get_footer();