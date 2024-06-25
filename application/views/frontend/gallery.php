<main>

    <!-- breadcrumb-area-start -->
    <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?= base_url() ?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="it-breadcrumb-content z-index-3 text-center">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Gallery</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="<?= base_url() ?>">home</a></span>
                                <span class="dvdr">//</span>
                                <span>gallery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-area-start -->
    <div class="it-blog-area  pt-120 pb-90">
        <div class="container">
            <div class="row">
                <?php foreach ($gallery_view as $row) :
                    $id = $row->id; ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                        <div class="position-relative gallery-img ">

                            <figure class="m-0">
                                <img src="<?= base_url('uploads/gallery/') . $row->image; ?>" alt="Classes" class="img-fluid">
                            </figure>
                            <div class="gallery-title">
                                <div class=" px-3 py-2  d-flex flex-column  justify-content-center h-100 ">
                                    <h4 class="mb-0 text-white"><?= $row->image_name ?></h4>

                                    <div class="gallery-btn">
                                        <a href="<?= base_url('uploads/gallery/') . $row->image; ?>" data-fancybox="gallery1">
                                            <?php
                                            $sub_gallery_view = $this->sub_gallery_model->sub_gallery_get($id); ?>
                                            View Gallery <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                        <div class="d-none">
                                            <?php foreach ($sub_gallery_view as $row) : ?>
                                                <a href="<?= base_url('uploads/sub_gallery/') . $row->image; ?>" data-fancybox="gallery1"></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- blog-area-end -->

   

</main>
<!-- footer Include  -->