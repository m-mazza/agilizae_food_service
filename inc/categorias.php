    <div class="col-12  px-0">
        <div class="categoriaArea">
            <div class="categorias owl-carousel">
                <?php
                $sqlCategoria = "SELECT * FROM categoria WHERE cd_restaurante = 01";
                $resultadoCategoria = $conexao->query($sqlCategoria);
                while( $rowcategoria = $resultadoCategoria->fetch_assoc() ) {
                ?>
                <a href="#cat-<?php echo$rowcategoria['cd_categoria']?>">
                    <div class="bg-dark p-2 text-center rounded">
                        <p class="mb-0 text-white"><?php echo$rowcategoria['nm_categoria']?></p>
                    </div>
                </a>
                <?php
                }                    
                ?>
            </div>
        </div>
    </div>