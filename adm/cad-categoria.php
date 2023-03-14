<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main id="cadArea" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">Cadastro - Categoria</h3>
                </div>
      
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <form id="cadCateg" method="POST">
                                <input type="hidden" name="cadCategor" value="s">
                                <div class="row no-gutters">
                                    <div class="col-5">
                                        <label>Nome da Categoria</label>
                                        <div class="form-group d-flex mb-0">                                                
                                            <input type="text" class="form-control" data-name="Nome da Categoria" name="categ">&nbsp;
                                            <button type="submit" class="btn btn-primary w-50">Cadastrar Categoria</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>                   
                        </div>
                        <?php 
                        $catProd = "SELECT nm_categoria FROM categoria";
                        $resultCatProd = $conexao->query($catProd);
                        $linhasCatProd = $resultCatProd->num_rows; 
                        if($linhasCatProd > 0) {?>                          
                        <div class="col-6">
                            <div class="mx-1">
                                <h5 class="mb-2">Categorias Ativas</h5>
                            </div>
                            <?php
                            while($rowCtPrd = $resultCatProd->fetch_assoc()) { ?>
                            <div class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                        <strong class="h6 mb-0"><?php echo$rowCtPrd["nm_categoria"]?></strong> 
                                        <div class="btn-area">
                                            <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                            <a href="" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="" class="btn btn-secondary" title="ocultar"><i class="fa-solid fa-eye-slash"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php }; ?>
                        </div>
                        <div class="col-6">
                            <div class="mx-3"> 
                                <div class="mx-1">
                                    <h5 class="mb-2">Categorias Inativas</h5>
                                </div>
                                <div class="my-2">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <strong class="h6 mb-0">Nome da categoria</strong>  
                                            <div class="btn-area-two">
                                                <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                                <a href="" class="btn btn-secondary" title="mostrar"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } else {?>
                        <div class="col-12">
                            <div class="mx-1 my-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-items-center justify-content-center">
                                        <strong class="h6 mb-0">você não tem <strong>categorias</strong> cadastradas aindas.</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include('inc/footer.php')?>

<?php
    if(@$_POST['cadCategor'] == "s") {
    
        $nomeCategoria = mysqli_real_escape_string($conexao, trim($_POST["categ"]));

        // aqui o código do restaurante precisa ser igual ao código do gestor. ==> pesquisar
        /* SELECT cd_restaurante FROM restaurante WHERE código do gestor é igual ao código de gestor na tabela gestor */
        $sqlCdRestaurante = "SELECT cd_restaurante FROM restaurante ORDER BY cd_restaurante DESC LIMIT 1";
        $cdRest     = $conexao->query($sqlCdRestaurante);
        $rowCdRest  = $cdRest->fetch_assoc();
        $cdRest     = $rowCdRest['cd_restaurante'];

  
        // insere dados na tabela categoria
        $sqlCat = "INSERT INTO categoria (cd_restaurante, nm_categoria) 
        VALUES ('".$cdRest."','".$nomeCategoria."')";  
        GetBanco()->query($sqlCat);
        ?>
        <script>
            $(document).ready(function() {
                $('.modal-header h4').html('Sucesso').css('color','#28a745');
                $('.modal-body p').html('Seu cadastro foi concluído com sucesso!').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'cad-categoria'; 
                }, 1500); 
            })
        </script>
    <?php 
    } 
?>
