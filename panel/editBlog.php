<?php
include('../layouts/headerPanel.php');
include('../model/PostModel.php'); ?>
<section id="panelPostagem">
    <div class="container">
        <?php 
            $postId = new PostModel();
            $post = $postId->listOnePost($_GET['post']); 
            
            foreach($post as $item){ ?>
        <div class="row">
            <div class="col-lg-12 block_title text-center">
                <h1>Editando a postagem #
                    <?php echo $item['id_blog'];?>
                </h1>
            </div>

            <div class="col-lg-12 block_form mb-5">
                <form action="../controller/UpadatePost.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $item['id_blog'];?>">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control form_style" id="title" name="title" value="<?php echo $item['title_blog'];?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="title">Data</label>
                        <input type="text" class="form-control form_style" id="date" name="data" value="<?php echo $item['data_blog'];?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="content">Conteúdo</label>
                        <textarea class="form-control form_style" id="content" name="content" rows="10" required>
                            <?php echo $item['content_blog']?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="uploadFile">Inserir uma foto</label>
                        <input type="text" class="form-control" name="uploadFile" id="uploadFileExist" value="<?php echo $item['link_image']?>"
                            readonly>

                        <button type="button" id="btnShowTrocar">Trocar de foto</button>

                        <input type="file" class="form-control-file" name="uploadFile" id="uploadFileNovo" value="<?php echo $item['link_image']?>">
                    </div>

                    <div class="form-group text-center">
                        <a href="../panel/" class="btn_post float-left">Voltar <i class="fa fa-undo"></i></a>
                        <button type="submit" class="btn_post float-right">Atualizar <i class="far fa-paper-plane"></i></button>
                    </div>
                </form>

                <form action="../controller/DeletePost.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $item['id_blog'];?>">
                    <button type="submit" class="btn_post btn_delete">Deletar <i class="fa fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php include('../layouts/footerPanel.php'); ?>