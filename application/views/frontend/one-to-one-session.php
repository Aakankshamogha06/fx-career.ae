<main>

    <!-- breadcrumb-area-start -->
    <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?=base_url()?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="it-breadcrumb-content z-index-3 text-center">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">One to One Session</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="<?=base_url()?>">home</a></span>
                                <span class="dvdr">//</span>
                                <span>one-to-one-session</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- course-area-start -->
    <div class="it-course-area p-relative grey-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
            <?php  foreach($one_to_one_session_view as $row){?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="session-box">
                        <img src="<?=base_url('uploads/one_to_one_session/').$row->session_image;?>" class="card-img-top img-fluid object-fit-contain" style="width: 100%; border-radius: 10px; transition: 0.9s; height: 200px; object-fit: cover;     vertical-align: middle;" alt="">
                        <div class="mt-4 p-3 pt-0">
                            <h3 class="session-box-title mb-3"><?php $row->session_name;?></h3>

                            <div>
                                <ul class="p-0 m-0 list-none">
                                    <li class="course-info course-information ">
                                        <span><i class="fa-solid fa-calendar-days"></i> <?= date('d-m-Y', strtotime($row->date))?></span>
                                        <span><i class="fa-solid fa-clock"></i> <?= $row->time;?></span>
                                    </li>
                                    <li class="course-info course-information">
                                        <span><i class="fa-solid fa-location-dot"></i> <?= $row->location;?></span>
                                        <span><i class="fa-solid fa-globe"></i> <?= $row->language;?></span>
                                    </li>
                                    <li class="course-info course-information border-0">
                                        <span><i class="fa-solid fa-clock-rotate-left"></i> <?= $row->duration;?> Minutes</span>
                                        <span><i class="fa-solid fa-microphone"></i> <?= $row->speaker;?></span>
                                    </li>

                                </ul>
                            </div>
                            <div class="mt-3">
                                <a class="it-btn" role="button" data-bs-toggle="modal" data-bs-target="#InquiryModal">Book Now </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>


            </div>
        </div>
    </div>
    <!-- course-area-end -->
    <!-- Modal -->
    <div class="modal fade" id="InquiryModal" tabindex="-1" aria-labelledby="InquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="InquiryModalLabel">Enquiry About One To One Session</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('website/book_session'); ?>" method="post" class="mt-4">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="it-signup-input mb-20">
                                <input type="email" name="email" placeholder="Email *" class="border" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="it-signup-input mb-20">
                                <input type="tel" name="mobile" placeholder="Mobile*" class="border" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="it-signup-input mb-20">
                                <textarea name="message" cols="30" rows="3" class="border" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="">
                                <button class="it-btn border-0">Submit<i class="ps-2 ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>


</main>