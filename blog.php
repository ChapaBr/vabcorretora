<!-- Include Header -->
<?php 
$page = 'blog';
include('layouts/header.php');
include('model/Conn.php');
include('model/PostModel.php');
?>

<!-- Start Blog -->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h3 class="tittle-back-white mt-5">Blog</h3>
            </div>
        </div>

        <div class="row justify-content-start">
            <?php 
            $allPosts = new PostModel();
            $post = $allPosts->list(); 
                    
            foreach($post as $item){ ?>
            <div class="col-lg-3 margin_35_40_0 bloco_card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $item['link_image'];?>" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php  echo $item['title_blog'];?></h5>
                        <a href="internaBlog.php?post=<?php echo $item['id_blog'];?>" class="btn btn_ver_mais">Ler mais</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Blog -->


<!-- Include Footer -->
<?php include('layouts/footer.php'); ?>