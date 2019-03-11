<?php include('../layouts/headerPanel.php'); ?>
<section id="panelPostagem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 block_title text-center">
                <h1>Criando uma postagem</h1>
            </div>

            <div class="col-lg-12 block_form mb-5">
                <form action="../controller/CreatePost.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control form_style" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Data</label>
                        <input type="text" class="form-control form_style" id="date" name="data" value="<?php echo date('d/m/Y'); ?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="content">Conteúdo</label>
                        <textarea class="form-control form_style" id="content" name="content" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="uploadFile">Inserir uma foto</label>
                        <input type="file" class="form-control-file" name="uploadFile" id="uploadFile">
                    </div>

                    <div class="form-group text-center">
                        <a href="../panel/" class="btn_post float-left">Voltar <i class="fa fa-undo"></i></a>
                        <button type="submit" class="btn_post float-right">Postar <i class="far fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('../layouts/footerPanel.php'); ?>