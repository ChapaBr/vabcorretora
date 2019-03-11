<!-- Include Header -->
<?php 
include('layouts/header.php');
include('model/Conn.php');
include('model/PostModel.php');
?>

<!-- Start Blog -->
<section id="blogInterna">
    <div class="container">
        <div class="row">
            <?php 
            $postId = new PostModel();
            $post = $postId->listOnePost($_GET['post']); 
            
            foreach($post as $item){ ?>

            <div class="col-lg-12 text-center">
                <h1 class="tittle-back-white mt-5">
                    <?php echo $item['title_blog']?>
                </h1>

                <div class="content_capa">
                    <img class="banner_image" src="<?php echo $item['link_image'];?>" alt="Capa da imagem">
                    <hr>
                    <p class="data_post">
                        <?php echo $item['data_blog']?>
                    </p>
                </div>

                <div class="content_blog">
                    <p>
                        <?php echo $item['content_blog']?>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <a href="blog.php" class="btn_post">Voltar <i class="fa fa-long-arrow-alt-left"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->

<!-- Include Footer -->
<?php include('layouts/footer.php'); ?>