<?php
define("PAGE_TITLE", "Section List");
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

                                <h2 class="nk-block-title fw-normal">Sections List</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Here you can see the list of all sections.</p>
                                </div>
                            </div>
                        </div>




                        <div class="nk-block nk-block-lg">

                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <div class="row g-gs">
                                        <?php section_public_list(); ?>
                                    </div>
                                </div>
                            </div><!-- .card-preview -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <!-- content @e -->
<?php
site_footer();