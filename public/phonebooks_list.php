<?php
define("PAGE_TITLE", "Phonebook List");
require 'global.php';
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
                                            <!--<div class="nk-block-head-sub"><a class="back-to" href="html/general/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>-->
                                            <h2 class="nk-block-title fw-normal">Phonebook List</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">The Personal Contacts phonebook, enables you to create a list of phone numbers that are encrypted in the database, which are accessible by API.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <?php phonebook_public_list_view($_GET); ?>
                                    </div> <!-- nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
<?php
site_footer();