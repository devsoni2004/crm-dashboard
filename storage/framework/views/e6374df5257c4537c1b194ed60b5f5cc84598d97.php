<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Add-on Listing')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- wrapper start -->
<div class="wrapper">
    <section class="common-banner-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="common-banner-content">
                        <div class="section-title text-center">
                            <h2><?php echo $page['menubar_page_name']; ?></h2>
                            <p><?php echo $page['menubar_page_short_description']; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-listing-section product-custom-page padding-bottom">
        <div class="container">
            <div class="listing-info padding-top ">
                <?php echo $page['menubar_page_contant']; ?> </div>
        </div>
    </section>
</div>
<!-- wrapper end -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('landingpage::layouts.marketplace', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Dashboard/Modules/LandingPage/Resources/views/layouts/custompage.blade.php ENDPATH**/ ?>