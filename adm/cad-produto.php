<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <?php 
    $itemAdicional = "SELECT * FROM complemento_produto WHERE cd_restaurante =  $cdRest";
    $resultitemAdicional = $conexao->query($itemAdicional);
    ?>
    <script> 
        var item_adicional = JSON.parse('<?php echo json_encode($resultitemAdicional->fetch_all(MYSQLI_ASSOC)); ?>');
    </script>
   

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main id="cadArea" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">Cadastro - Produto</h3>
                </div>

                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-6">
                            <div class="mx-1">
                                <h5 class="mb-2">Produto</h5>
                            </div>
                            <form id="cadProd" method="POST">
                                <input type="hidden" name="prodcad" value="prodcadastrado">
                                <div class="row no-gutters">
                                    <!-- Nome | Categoria | Valor -->
                                    <div class="col-12">
                                        <div class="row no-gutters">
                                            <div class="col-5">
                                                <div class="m-1">
                                                    <div class="form-group mb-0">
                                                        <label>Nome do Produto</label>
                                                        <input type="text" class="form-control" data-name="Nome do Produto" name="nmproduto">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="m-1">
                                                    <div class="form-group mb-0">
                                                        <label>Escolha a categoria</label>
                                                        <select class="form-control" name="cdcategoria">
                                                            <?php 
                                                            $catProd = "SELECT * FROM categoria WHERE cd_restaurante = $cdRest";
                                                            $resultCatProd = $conexao->query($catProd);
                                                            $linhasCatProd = $resultCatProd->num_rows; 
                                                            if($linhasCatProd > 0) {
                                                                while($rowCtPrd = $resultCatProd->fetch_assoc()) { ?>
                                                            <option value="<?php echo $rowCtPrd["cd_categoria"]?>" ><?php echo$rowCtPrd["nm_categoria"]?></option>
                                                            <?php 
                                                                };
                                                            }else {?>
                                                            <option>Não Categorias</option>
                                                            <?php };?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="m-1">
                                                    <div class="form-group mb-0">
                                                        <label>Valor do Produto</label>
                                                        <input type="text" class="form-control" data-name="Valor do Produto" name="vlproduto">
                                                    </div>
                                                </div>
                                            </div>
                                     
                                        </div>
                                    </div>
                                    <hr class="w-100">
                                    <!-- itens adicionais -->
                                    <div class="col-12 mt-3">
                                        <div class="row no-gutters align-items-center justify-content-between">
                                            <div classs="col-5 mb-3">
                                                <h5 class="m-0">Incluir Item Adicional</h5>
                                            </div>
                                            <div class="col-4 mb-3 d-flex justify-content-end">
                                                <a href="#" class="btn btn-primary w-50 adicionar"><i class="fa-solid fa-plus"></i> adicionar</a>
                                            </div>
                                            <div class="itensAdicionais no-gutters m-1" style="display:contents"></div>
                                        </div>
                                    </div>

                                    <hr class="w-100">
                                    <!-- Descrição do produto -->
                                    <div class="col-12">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label>Descrição do produto</label>
                                                <textarea class="form-control" id="" rows="3" data-name="Descrição do Produto" name="descproduto"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="m-1">
                                            <button type="submit" class="btn btn-primary w-100">Cadastrar Produto</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-12 col-sm-6">
                            <?php                    
                                $mostraProduto = "SELECT nm_produto, vl_produto FROM produto  WHERE cd_restaurante = $cdRest";
                                $resultmostraProduto = $conexao->query($mostraProduto);
                                $linhasmostraProd = $resultmostraProduto->num_rows; 
                                if($linhasmostraProd > 0) {
                            ?>
                            <div class="mx-3">
                                <div class="mx-1">
                                    <h5 class="mb-2">Últimos Produtos Cadastrados</h5>
                                </div>
                                <?php while($rowmstPrd = $resultmostraProduto->fetch_assoc()) { ?>
                                <div class="my-3">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                            <strong class="h6 mb-0"><?php echo$rowmstPrd["nm_produto"]?> | R$ <?php echo$rowmstPrd["vl_produto"]?></strong> 
                                            <div class="btn-area">
                                                <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                                <a href="produto" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                                <a href="produto" class="btn btn-secondary"title="visualizar"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } else { ?>
                            <div class="mx-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-items-center justify-content-center">
                                        <strong class="h6 mb-0">você não tem <strong>produtos</strong> cadastradas aindas.</strong>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>           
                    </div>
                </div>
    
            </main>
        </div>
    </div>
    
<?php include('inc/footer.php')?>

<?php
    // var_dump($_POST);

    if(@$_POST['prodcad'] == "prodcadastrado") {
        $nmproduto      = mysqli_real_escape_string($conexao, trim($_POST["nmproduto"]));
        $vlproduto      = mysqli_real_escape_string($conexao, trim($_POST["vlproduto"]));
        $dsproduto    = mysqli_real_escape_string($conexao, trim($_POST["descproduto"]));  
        $cdcategoria    = mysqli_real_escape_string($conexao, trim($_POST["cdcategoria"]));        
      
        // insere dados na tabela produto
        $sqlCadProd = "INSERT INTO produto (cd_categoria,nm_produto,vl_produto,ds_produto,cd_restaurante)
        VALUES(".$cdcategoria .",'".$nmproduto."',".$vlproduto.",'".$dsproduto."',$cdRest)";
        GetBanco()->query($sqlCadProd);

        $id = mysqli_insert_id(GetBanco());
        $sqlRelacao = "INSERT INTO prod_item (cd_produto, cd_itemad) VALUES ";
        foreach($_POST["itemadicional"] as $value){
            $sqlRelacao.="($id, $value),";
        }
        $sqlRelacao = rtrim($sqlRelacao,",");
        GetBanco()->query($sqlRelacao);
        ?>
        <script>
            $(document).ready(function() {
                $('.modal-header h4').html('Sucesso').css('color','#28a745');
                $('.modal-body p').html('Produto cadastrado com sucesso!').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'cad-produto'; 
                }, 1500); 
            })
         </script>
    <?php 
    } 
?>