<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Contactos</h4>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Lista de Contactos</h4>
                <p class="sub-header">
                    Lista de Contactos de la página web
                </p>

                <div class="table-responsive">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Celular</th>
                                <th>Carrera Profesional</th>
                                <th>Universidad</th>
                                <th>Ciudad</th>
                                <th>Origen</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyContactos">

                        </tbody>
                    </table>
                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script src="admin/assets/js/contacto.js"></script>

<?= $this->endSection() ?>