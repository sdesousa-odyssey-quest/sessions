<?php require 'inc/data/products.php'; ?>

<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_COOKIE as $name => $id) {
            if (array_key_exists($id, $catalog)){ ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $catalog[$id]['name']; ?></h3>
                            <p><?= $catalog[$id]['description']; ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php }
        }?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
