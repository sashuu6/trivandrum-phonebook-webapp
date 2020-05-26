<?php
define("PAGE_TITLE", "Add Phonebook");
require 'global.php';
if($_POST) {
    phonebook_public_form_submit($_POST);
    die();
}
site_header();
?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Add Phonebook</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Here you can add a phonebook encrypted entry.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered card-preview">
                                <?php phonebook_public_form($_GET); ?>
                            </div>
                        </div> <!-- nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
<?php
site_footer();