<?php 
include('../layouts/headerPanel.php');
include('../model/PostModel.php');
?>

<section id="panelPostagem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 block_title text-center">
                <h1>Todas postagens</h1>
            </div>

            <div class="col-lg-12 block_form mb-5">
                <table id="blogs" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $allPosts = new PostModel();
                            $post = $allPosts->list(); 
                            foreach($post as $item){ ?>
                        <tr>
                            <td>
                                <?php echo $item['id_blog'];?>
                            </td>
                            <td>
                                <?php echo $item['title_blog'];?>
                            </td>
                            <td>
                                <?php echo $item['data_blog'];?>
                            </td>
                            <td>
                                <a href="editBlog.php?post=<?php echo $item['id_blog'];?>" class="btn_edit"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Data</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="col-lg-12 text-center mb-5">
                <a href="../panel/" class="btn_post">Voltar <i class="fa fa-undo"></i></a>
            </div>
        </div>
    </div>
</section>

<div class="alerta">
    <div class="container">
        <?php if($_GET['post'] == "sucesso"){ ?>
        <div class="row margin_12_0_0_0">
            <div class="col-lg-12 text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>
                        <span id="nome-bold">Postagem</span>
                    </strong> atualizada com sucesso com sucesso.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php } if($_GET['delete'] == "sucesso"){ ?>
        <div class="row margin_12_0_0_0">
            <div class="col-lg-12 text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>
                        <span id="nome-bold">Postagem</span>
                    </strong> deletada com sucesso com sucesso.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php } if($_GET['post'] == "erro"){?>
        <div class="row margin_12_0_0_0">
            <div class="col-lg-12 text-center">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>
                        <span id="nome-bold">Desculpa!</span>
                    </strong> ocorreu um erro ao atualizar uma postagem.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php } if($_GET['delete'] == "erro"){ ?>
        <div class="row margin_12_0_0_0">
            <div class="col-lg-12 text-center">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>
                        <span id="nome-bold">Desculpa!</span>
                    </strong> ocorreu um erro ao deletar uma postagem.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php }  ?>
    </div>
</div>
<?php include('../layouts/footerPanel.php'); ?>