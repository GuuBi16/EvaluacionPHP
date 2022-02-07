<?php headerAdmin($data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?></h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item" style="text-align: center;"><a href="<?= base_url(); ?>/dashboard">Evaluación de Conocimientos PHP - VINCO ORBIS</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <?php
                echo "Recorrer los números del 1 al 100 e imprimir: <br>
                a. Si es divisible por 3, escribir Fizz <br>
                b. Si es divisible por 2 Buzz <br>";

                if (php_sapi_name() === 'cli') $lb = "\n";
                else $lb = "<br />";

                for ($i = 1; $i <= 100; $i++)
                {
                  if($i % 3 == 0){
                    echo "Fizz $lb";
                }else if($i % 2 == 0){
                  echo "Buzz $lb";
                }else {
                  echo $i." $lb";
                }
                }?>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>