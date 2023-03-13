<?php include('inc/header.php')?>

<div class="mt-5">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-sm-8 col-md-5">
                <div class="cartWrapper">  
                    <div class="barra-produto-final">
                        <div class="my-2 row no-gutters align-items-center">
                            <div class="col-11">
                                <h5 class="bold mb-0"><strong>Finalizar Pedido</strong></h5>
                            </div>
                            <div class="col-1 text-right">
                                <a style="font-size: 1.3rem;" href="main"><i class="las la-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div id="finalProd" class="mb-3 py-2 border-bottom">
                        <div class="prodWrapper">
                            <img src="assets/img/produtos/prod_1.png">
                                <div class="prodInfo">
                                    <p>Nome do Produto</p>
                                    <p>Nome do Adicional</p>
                                    <p>R$ 00.00</p>
                                </div>
                            <input type="number" value="1" min="1" max="100" step="1">
                        </div>
                    </div>

                    <div class="finalarea">
                        <h6><strong>TOTAL DO PEDIDO: R$ 00.00</strong></h6>
                        <div class="infoFinal">
                            <p>Pagamento: Cartão - Débito</p>
                            <p>Observações: Retirar cebolas e alface do Lanche.</p>
                            <p>Endereço: Rua Paraná, 223 - Vila Mathias</p>
                        </div>
                        <a href="finalizar" class="btn btn-primary w-100">finalizar pedido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php')?>