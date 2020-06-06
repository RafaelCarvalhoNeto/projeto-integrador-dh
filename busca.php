<?php $tituloDaPagina = "Busca Avançada" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<?php include('basededados_connection.php'); ?>

<div class="container">
    <h2 class="col-12 p-3 mt-3 mb-3 text-dark border-bottom"><?= $tituloDaPagina?></h2>
    <div class="container">
        <div class="list-group">
            <h3>Preço</h3>
            <div class="slidecontainer">
                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
            </div>
            <h3>Marca</h3>
            <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                <?php

                    $query = "SELECT DISTINCT(product_brand) FROM product WHERE product_status = '1' ORDER BY product_id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector brand"
                            value="<?php echo $row['product_brand']; ?>"> <?php echo $row['product_brand']; ?></label>
                </div>
                <?php
                    }

                    ?>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-4 pb-1 pb-md-0 mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\celular.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Samsung S20</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\computador.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Computador Zika</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\controle-ps5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Controle PS5</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php" class="link">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\celular.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Samsung S20</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\computador.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Computador Zika</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\controle-ps5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Controle PS5</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php" class="link">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\celular.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Samsung S20</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\computador.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Computador Zika</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\controle-ps5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Controle PS5</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php" class="link">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\celular.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Samsung S20</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\computador.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Computador Zika</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <img class="card-img-top mt-3" src="assets\img\controle-ps5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" id="produto">Controle PS5</h3>
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    </div>
</div>



    </body>
    <?php require_once("./inc/footer.php"); ?>