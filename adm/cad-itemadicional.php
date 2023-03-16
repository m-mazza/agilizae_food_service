<?php include('inc/header.php');?>
    <?php include('inc/navbar.php');?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">Cadastro - item adicional</h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <form id="cadItemAd" method="POST">
                                    <input type="hidden" name="cadAdicional" value="s">
                                        <div class="row no-gutters justify-content-end">
                                            <div class="col-7">
                                                <div class="form-group mb-0">
                                                    <label>Nome Item Adicional</label>
                                                    <input type="text" class="form-control" data-name="Nome Item Adicional" name="nmitemad">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="mx-1">
                                                    <label>Valor</label>
                                                    <div class="form-group d-flex mb-0">
                                                        <input type="text" class="form-control" data-name="Valor Item Adicional" name="vlitemad">&nbsp;
                                                        <button type="submit" class="btn btn-primary p-1 w-100">Cadastrar item</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <?php 
                        $slectItemAd = "SELECT * FROM complemento_produto WHERE cd_restaurante = $cdRest";
                        $resultItemAd = $conexao->query($slectItemAd);
                        $linhasItemAd = $resultItemAd->num_rows; 
                        if($linhasItemAd > 0) {?>  

                        <div class="col-6">
                            <div class="mx-1">
                                <h5 class="mb-2">Itens Adicionais Ativos</h5>
                            </div>
                            <?php 
                             while($rowItAd = $resultItemAd->fetch_assoc()) { ?>
                            <div class="my-3">
                                <ul class="list-group">
                                    <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                        <strong class="h6 mb-0"><?php echo$rowItAd["nm_itemad"]?> | R$ <?php echo$rowItAd["vl_itemad"]?></strong> 
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
                                    <h5 class="mb-2">Itens Adicionais Inativos</h5>
                                </div>
                                <div class="my-3">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <strong class="h6 mb-0">Nome do item Adicional | R$ 00.00</strong> 
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
                                        <strong class="h6 mb-0">você não tem <strong>itens adcicionais</strong> cadastradas aindas.</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <?php }?>

                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include('inc/footer.php')?>

<?php
    //var_dump($_POST);

    if(array_key_exists('cadAdicional', $_POST) && $_POST['cadAdicional'] == "s") {
        $nomeItemAd     = mysqli_real_escape_string($conexao, trim($_POST["nmitemad"]));
        $vlItemAd       = mysqli_real_escape_string($conexao, trim($_POST["vlitemad"]));
        
        $sqlItemAd = "INSERT INTO complemento_produto (nm_itemad, cd_restaurante, vl_itemad) 
        VALUES ('".$nomeItemAd ."',".$cdRest.",".floatval($vlItemAd).")";  
        GetBanco()->query($sqlItemAd);
        //TO-DO: corrigir o fload do vl_itemad
        
        ?>
        <script>
            $(document).ready(function() {
                $('.modal-header h4').html('Sucesso').css('color','#28a745');
                $('.modal-body p').html('Seu cadastro foi concluído com sucesso!').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'cad-itemadicional'; 
                }, 1500); 
            })
         </script>
    <?php 
    } 
?>

