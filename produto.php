<?php include('inc/header.php');?>
    <div class="my-5">
        <div class="container">
            <div class="row no-gutters justify-content-center">

                <div class="col-12 col-sm-8 col-md-5">

         
                <div class="barra-produto">
                    <div class="my-2 row no-gutters align-items-center">
                        <div class="col-11">
                            <h5 class="bold mb-0"><strong>Título do produto</strong></h5>
                        </div>
                        <div class="col-1 text-right">
                            <a style="font-size: 1.3rem;" href="main"><i class="las la-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Imagem do produto -->
          
                    <div class="my-2">
                        <div class="imgProd" data-img="assets/img/produtos/prod_1.png"></div>
                    </div>
      

                <!-- Descrição do Produto -->
         
                    <div class="my-3">
                        <h5 class="bold"><strong>R$ 00.00</strong></h5>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor dignissim dapibus. Suspendisse condimentum placerat augue, posuere accumsan mauris ultricies quis. </p>
                        <div class="my-2">
                            <p class="my-2"><strong>Itens Adicionais</strong></p>
                            <div class="list-group">
                                <label class="form-check-label" for="">
                                    <div class="form-check list-group-item list-group-item-action">
                                        <div class="d-flex d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Adicional 1 + <strong>R$ 0,00</strong></p>
                                            <input type="radio" name="complementos" id="" value="">
                                        </div>
                                    </div>
                                </label>
                            </div>              
                        </div>
                    </div>

                <!-- finalização do pedido colocar tudo no formulário, até o botão azul de adcionar, vai ser o submit -->
                    <form id="prod-indv"  method="POST" action="">
                        <div class="form-group">
                            <label for="modificacao">Observações:</label>
                            <textarea class="form-control px-2 py-2" rows="2" name="modificacao" placeholder="informe modificações aqui"></textarea>
                        </div>
                        
                        <div class="mt-2 mb-4">
                            <p class="my-2"><strong>Forma de Pagamento:</strong></p>
                            <div class="list-group">
                                <label class="form-check-label" for="">
                                    <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                        <div class="d-flex d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Dinheiro</p>
                                            <input type="radio" name="complementos" id="" value="">
                                        </div>
                                    </div>
                                </label>
                                <label class="form-check-label" for="">
                                    <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                        <div class="d-flex d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Cartão - Débito</p>
                                            <input type="radio" name="complementos" id="" value="">
                                        </div>
                                    </div>
                                </label>
                                <label class="form-check-label" for="">
                                    <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                        <div class="d-flex d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Cartão - Crédito</p>
                                            <input type="radio" name="complementos" id="" value="">
                                        </div>
                                    </div>
                                </label>
                                <label class="form-check-label" for="">
                                    <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                        <div class="d-flex d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Vale Refeição - VR</p>
                                            <input type="radio" name="complementos" id="" value="">
                                        </div>
                                    </div>
                                </label>
                            </div>              
                        </div>

                        <div class="mt-2 mb-4">
                            <p class="my-2"><strong>Endereço de Entrega: </strong></p> 
                            <input type="text" class="form-control">           
                        </div>
                        
                        <div id="cart" class="d-flex align-items-center justify-content-between">
                            <input type="number" value="1" min="1" max="100" step="1">
                            <button type="submit" class="btn btn-primary">Adicionar&nbsp;&nbsp;<strong>R$ 00.00</strong></button>
                        </div>
                    </form>
                    <div class="my-2 text-center">
                        <a href="main" class="d-block py-2"><i class="las la-plus-circle mr-2"></i>incluir mais itens</a>
                        <a href="finalizar" class="btn btn-primary w-100">finalizar pedido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('inc/footer.php')?>