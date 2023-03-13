<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main id="cadArea" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">{{Nome do Produto}} <span class="badge badge-success">Ativo</span> <span class="badge badge-danger">Inativo</span></h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <form id="" method="" action="">
                                <div class="row no-gutters">
                                    <div class="col-5">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Nome do Produto</label>
                                                <input type="text" class="form-control" data-name="" name="" placeholder="nome do produto" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Valor</label>
                                                <input type="text" class="form-control" data-name="" name="" placeholder="00,00" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Categoria</label>
                                                <input type="text" class="form-control" data-name="" name="" placeholder="Nome Categoria" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="m-1">
                                            <label>Itens Adicionais Inclusos</label>
                                            <ul class="list-group">
                                                <li class="list-group-item  d-flex align-items-center justify-content-between">
                                                    <strong class="h6 mb-0">Nome do Item Adicional | R$ 00.00</strong> 
                                                    <div class="btn-area">
                                                        <a href="" class="btn btn-danger disabled" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                                        <a href="" class="btn btn-primary disabled" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                                        <a href="" class="btn btn-secondary disabled" title="ocultar"><i class="fa-solid fa-eye-slash"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Descrição do produto</label>
                                                <textarea class="form-control" id="" rows="3" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis dictum eros. Donec vitae lobortis enim. Nullam gravida sapien dui, non mollis felis efficitur nec." readonly></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="m-1">
                                            <button type="submit" class="btn btn-danger w-25">Excluir</button>
                                      
                                            <button type="submit" class="btn btn-primary w-25">Editar</button>
                                            <button type="submit" class="btn btn-success w-25">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
<?php include('inc/footer.php')?>