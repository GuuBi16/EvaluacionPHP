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

                echo "Dado una cadena de texto, imprimir la primera letra que se repite, no distinguiendo entre mayúsculas y minúsculas. <br>
                ​No utilizar strpos, strstr y substr.   <br>
                a. Ejemplo: “zapato” la primera letra que más se repite es a. 
                <br> " ;

                $texto = "Escalera";
                echo "Contando letras de: '$texto'\n";
                $letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                $letras .= strtoupper($letras);
                for ($i = 0; $i < strlen($letras); $i++) {
                    $letra = $letras[$i];
                    $contador = 0;
                    for ($x = 0; $x < strlen($texto); $x++) {
                        $actual = $texto[$x];
                        if ($actual === $letra) {
                            $contador++;
                            }
                    }
                    if ($contador > 1) {
                        echo "$letra=";
                        echo $contador;
                        echo "\n";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>