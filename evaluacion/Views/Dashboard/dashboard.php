<?php headerAdmin($data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboad - Evaluación</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Evaluación de Conocimientos PHP - VINCO ORBIS</div>
                <br />
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nombre completo:</font> José Agustín Guerrero Romero
                        </font>
                    </label>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fecha:</font> 07/Febrero/2021
                            </font>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>