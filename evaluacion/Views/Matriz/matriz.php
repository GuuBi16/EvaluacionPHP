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
            function transpose(&$A, &$B)
            {
                $matriz = 4;
                for ($i = 0; $i < $matriz; $i++)
                for ($j = 0; $j < $matriz; $j++)
                $B[$i][$j] = $A[$j][$i];
            }

            $A = array(array(5, 7, 9, 3),
                       array(1, 5, 8, 2),
                       array(9, 4, 3, 1),
                       array(3, 7, 2, 6));

            $matriz = 4;

            transpose($A, $B); 
            echo "El resultado de la matriz transpuesta es: <br><br>";
            for ($i = 0; $i < $matriz; $i++)
            {
                for ($j = 0; $j < $matriz; $j++)
                {
                    echo $B[$i][$j];
                    echo " ";
                }
                echo "<br>";
            }
            ?>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>