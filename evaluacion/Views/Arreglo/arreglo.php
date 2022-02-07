<?php headerAdmin($data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?></h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item" style="text-align: center;"><a href="<?= base_url(); ?>/dashboard">Evaluación de Conocimientos PHP - VINCO
                    ORBIS</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            
            <?php
            function myFunction()
            {
                echo "Impresion de los valores del arreglo \n";
            }
              
            // Input arrays
            $arr1=array("1","2","3","4","5","6","7","8","9");
            
              
            // calling array_walk_recursive() with
            // extra parameter
            array_walk_recursive($arr1, "myFunction");
            ?>
            
        </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>