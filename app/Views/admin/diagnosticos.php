<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('css') ?>
<!-- third party css -->
<link href="admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    .list-group-item-action.active {
        background-color: rgba(54, 188, 175, 0.1);
        border-color: #36bcaf;
        color: #36bcaf;
        font-weight: 600;
    }

    .badge-soft-primary {
        background-color: rgba(59, 175, 218, 0.1);
        color: #3bafda;
    }

    .badge-soft-success {
        background-color: rgba(26, 188, 156, 0.1);
        color: #1abc9c;
    }

    .badge-soft-danger {
        background-color: rgba(241, 85, 108, 0.1);
        color: #f1556c;
    }

    .btn-view {
        color: #3bafda;
        background-color: rgba(59, 175, 218, 0.1);
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-view:hover {
        background-color: #3bafda;
        color: white;
    }
    .list-group-item {
        overflow: visible !important;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Gestión de Diagnósticos</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#lista-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            <i class="mdi mdi-format-list-bulleted me-1"></i> Lista de Diagnósticos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#preguntas-tab" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            <i class="mdi mdi-help-circle me-1"></i> Preguntas y Opciones
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Tab Lista de Diagnósticos -->
                    <div class="tab-pane show active" id="lista-tab">
                        <div class="mt-4">
                            <table id="basic-datatable" class="table table-hover table-centered dt-responsive nowrap w-100">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Nivel Académico</th>
                                        <th>Puntaje</th>
                                        <th>Color</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Pérez</td>
                                        <td>Pregrado</td>
                                        <td><span class="badge badge-soft-success">85/100</span></td>
                                        <td>
                                            <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #28a745;"></div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn-view" title="Ver detalle">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Maria Garcia</td>
                                        <td>Maestría</td>
                                        <td><span class="badge badge-soft-primary">92/100</span></td>
                                        <td>
                                            <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #007bff;"></div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn-view" title="Ver detalle">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Tab Preguntas y Opciones -->
                    <div class="tab-pane" id="preguntas-tab">
                        <div class="row mt-4">
                            <!-- Sección Preguntas -->
                            <div class="col-lg-6">
                                <div class="card shadow-none border">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Preguntas</h5>
                                        <button class="btn btn-primary btn-xs" onclick="nuevaPregunta()">
                                            <i class="mdi mdi-plus"></i> Agregar
                                        </button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="lista-preguntas" class="list-group list-group-flush">
                                            <a href="javascript:void(0);" class="list-group-item list-group-item-action active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">1. ¿Cuál es el objetivo principal de su tesis?</h6>
                                                    <small>ID: 101</small>
                                                </div>
                                                <small class="text-muted">Categoría: Metodología</small>
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">2. ¿Ha definido ya su marco teórico?</h6>
                                                    <small>ID: 102</small>
                                                </div>
                                                <small class="text-muted">Categoría: Estructura</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sección Opciones -->
                            <div class="col-lg-6">
                                <div class="card shadow-none border">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0 text-success">Opciones</h5>
                                        <button class="btn btn-success btn-xs" id="btn-nueva-opcion">
                                            <i class="mdi mdi-plus"></i> Agregar
                                        </button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="lista-opciones" class="list-group list-group-flush">
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="fw-bold me-2">A)</span> Explorar un nuevo fenómeno
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-link text-muted"><i class="mdi mdi-pencil"></i></button>
                                                    <button class="btn btn-xs btn-link text-danger"><i class="mdi mdi-close"></i></button>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="fw-bold me-2">B)</span> Validar una teoría existente
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-link text-muted"><i class="mdi mdi-pencil"></i></button>
                                                    <button class="btn btn-xs btn-link text-danger"><i class="mdi mdi-close"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- Modal Nueva Pregunta -->
<div id="modal-pregunta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-pregunta-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-pregunta-label">Nueva Pregunta</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-pregunta">
                    <input type="hidden" id="pregunta-id" value="">
                    <div class="mb-3">
                        <label for="pregunta-texto" class="form-label">Texto de la Pregunta</label>
                        <textarea class="form-control" id="pregunta-texto" rows="3" placeholder="Escribe la pregunta aquí..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="guardarPregunta()">Guardar Pregunta</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Nueva Opción -->
<div id="modal-opcion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-opcion-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-opcion-label">Nueva Opción</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-opcion">
                    <input type="hidden" id="opcion-id" value="">
                    <input type="hidden" id="opcion-pregunta-id" value="">
                    <div class="mb-3">
                        <label for="opcion-texto" class="form-label">Texto de la Opción</label>
                        <input type="text" class="form-control" id="opcion-texto" placeholder="Ej: Explorar un nuevo fenómeno">
                    </div>
                    <div class="mb-3">
                        <label for="opcion-valor" class="form-label">Puntaje/Valor</label>
                        <input type="number" class="form-control" id="opcion-valor" placeholder="Ej: 5">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="guardarOpcion()">Guardar Opción</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- third party js -->
<script src="admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="admin/assets/libs/sortablejs/Sortable.min.js"></script>
<!-- third party js ends -->

<script>
    $(document).ready(function() {
        $('#basic-datatable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
            },
            pageLength: 10,
            responsive: true
        });

        $('#btn-nueva-opcion').on('click', function() {
            nuevaOpcion();
        });

        listaPreguntas();
    });

    let sortableInstance = null;

    function listaPreguntas() {
        $.ajax({
            url: '<?= base_url('/listaPreguntas') ?>',
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if (response.status === 'success') {
                    let html = '';
                    if (response.data.length > 0) {
                        response.data.forEach((pregunta, index) => {
                            html += `
                                <div class="list-group-item d-flex align-items-center justify-content-between p-2" data-id="${pregunta.id}">
                                    <div class="drag-handle me-2" style="cursor: grab; padding: 5px;">
                                        <i class="bi bi-grip-vertical font-20 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1" onclick="seleccionarPregunta(${pregunta.id})" style="cursor: pointer;">
                                        <h6 class="mb-0">${index + 1}. ${pregunta.enunciado}</h6>
                                        <small class="text-muted">ID: ${pregunta.id}</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle arrow-none text-muted p-0" data-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical font-18"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item" onclick="editarPregunta(${pregunta.id}, '${pregunta.enunciado.replace(/'/g, "\\'")}')">
                                                <i class="mdi mdi-pencil me-1"></i> Editar
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item text-danger" onclick="eliminarPregunta(${pregunta.id})">
                                                <i class="mdi mdi-trash-can me-1"></i> Eliminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                    } else {
                        html = '<div class="text-center p-3 text-muted">No hay preguntas registradas</div>';
                    }
                    $('#lista-preguntas').html(html);
                    initSortable();
                }
            }
        });
    }

    function initSortable() {
        const lista = document.getElementById('lista-preguntas');
        if (sortableInstance) {
            sortableInstance.destroy();
        }
        sortableInstance = Sortable.create(lista, {
            animation: 150,
            handle: '.drag-handle',
            ghostClass: 'bg-light',
            onEnd: function() {
                reordenarPreguntas();
            }
        });
    }

    // Cerrar dropdowns al hacer clic fuera
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu').removeClass('show');
        }
    });

    // Manejar el clic en el toggle manualmente para asegurar que solo uno esté abierto
    $(document).on('click', '[data-toggle="dropdown"]', function(e) {
        e.preventDefault();
        const $menu = $(this).next('.dropdown-menu');
        const isVisible = $menu.hasClass('show');
        
        $('.dropdown-menu').removeClass('show');
        if (!isVisible) {
            $menu.addClass('show');
        }
    });

    function reordenarPreguntas() {
        const ids = [];
        $('#lista-preguntas .list-group-item').each(function() {
            ids.push($(this).data('id'));
        });

        $.ajax({
            url: '<?= base_url('/reorderPreguntas') ?>',
            type: 'POST',
            data: {
                ids: ids
            },
            dataType: 'JSON',
            success: function(response) {
                if (response.status === 'success') {
                    console.log('Orden actualizado');
                    // Opcional: refrescar para actualizar los números (1., 2., etc)
                    listaPreguntas();
                }
            }
        });
    }

    let preguntaSeleccionada = null;

    function seleccionarPregunta(id) {
        preguntaSeleccionada = id;
        $('#lista-preguntas .list-group-item').removeClass('active');
        // Usar selector por data-id ya que la estructura cambió
        $(`[data-id="${id}"]`).addClass('active');
        
        listaOpciones(id);
    }

    function listaOpciones(pregunta_id) {
        $.ajax({
            url: '<?= base_url('/listaOpciones') ?>',
            type: 'GET',
            data: { pregunta_id: pregunta_id },
            dataType: 'JSON',
            success: function(response) {
                if (response.status === 'success') {
                    let html = '';
                    if (response.data.length > 0) {
                        response.data.forEach((opcion, index) => {
                            const letras = ['A', 'B', 'C', 'D', 'E'];
                            const letra = letras[index] || index;
                            html += `
                                <div class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <div>
                                        <span class="fw-bold me-2">${letra})</span> ${opcion.texto_opcion}
                                        <span class="badge badge-soft-info ms-1">${opcion.puntos} pts</span>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle arrow-none text-muted p-0" data-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item" onclick="editarOpcion(${opcion.id}, '${opcion.texto_opcion.replace(/'/g, "\\'")}', ${opcion.puntos})">
                                                <i class="mdi mdi-pencil me-1"></i> Editar
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item text-danger" onclick="eliminarOpcion(${opcion.id})">
                                                <i class="mdi mdi-trash-can me-1"></i> Eliminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                    } else {
                        html = '<div class="text-center p-3 text-muted">No hay opciones para esta pregunta</div>';
                    }
                    $('#lista-opciones').html(html);
                }
            }
        });
    }

    function nuevaOpcion() {
        if (!preguntaSeleccionada) {
            alert('Por favor selecciona una pregunta primero');
            return;
        }
        $('#form-opcion')[0].reset();
        $('#opcion-id').val('');
        $('#opcion-pregunta-id').val(preguntaSeleccionada);
        $('#modal-opcion-label').text('Nueva Opción');
        $('#modal-opcion').modal('show');
    }

    function editarOpcion(id, texto, puntos) {
        $('#opcion-id').val(id);
        $('#opcion-pregunta-id').val(preguntaSeleccionada);
        $('#opcion-texto').val(texto);
        $('#opcion-valor').val(puntos);
        $('#modal-opcion-label').text('Editar Opción');
        $('#modal-opcion').modal('show');
    }

    function eliminarOpcion(id) {
        if (confirm('¿Estás seguro de eliminar esta opción?')) {
            $.ajax({
                url: '<?= base_url('/deleteOpcion') ?>',
                type: 'POST',
                data: { id: id },
                dataType: 'JSON',
                success: function(response) {
                    if (response.status === 'success') {
                        listaOpciones(preguntaSeleccionada);
                    } else {
                        alert(response.message);
                    }
                }
            });
        }
    }

    function nuevaPregunta() {
        $('#form-pregunta')[0].reset();
        $('#pregunta-id').val('');
        $('#modal-pregunta-label').text('Nueva Pregunta');
        $('#modal-pregunta').modal('show');
    }

    function editarPregunta(id, enunciado) {
        $('#pregunta-id').val(id);
        $('#pregunta-texto').val(enunciado);
        $('#modal-pregunta-label').text('Editar Pregunta');
        $('#modal-pregunta').modal('show');
    }

    function eliminarPregunta(id) {
        if (confirm('¿Estás seguro de eliminar esta pregunta?')) {
            $.ajax({
                url: '<?= base_url('/deletePregunta') ?>',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: 'JSON',
                success: function(response) {
                    if (response.status === 'success') {
                        listaPreguntas();
                        $('#lista-opciones').html('<div class="text-center p-3 text-muted">Selecciona una pregunta para ver sus opciones</div>');
                        preguntaSeleccionada = null;
                    } else {
                        alert(response.message);
                    }
                }
            });
        }
    }

    function guardarPregunta() {
        const id = $('#pregunta-id').val();
        const texto = $('#pregunta-texto').val();

        if (!texto) {
            alert('Por favor escribe la pregunta');
            return;
        }

        $.ajax({
            url: '<?= base_url('/savePregunta') ?>',
            type: 'POST',
            data: {
                id: id,
                enunciado: texto
            },
            dataType: 'JSON',
            success: function(response) {
                if (response.status === 'success') {
                    $('#modal-pregunta').modal('hide');
                    $('#form-pregunta')[0].reset();
                    listaPreguntas();
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Ocurrió un error al guardar la pregunta');
            }
        });
    }

    function guardarOpcion() {
        const id = $('#opcion-id').val();
        const pregunta_id = $('#opcion-pregunta-id').val();
        const texto = $('#opcion-texto').val();
        const valor = $('#opcion-valor').val();

        if (!texto) {
            alert('Por favor escribe la opción');
            return;
        }

        $.ajax({
            url: '<?= base_url('/saveOpcion') ?>',
            type: 'POST',
            data: {
                id: id,
                pregunta_id: pregunta_id,
                texto_opcion: texto,
                puntos: valor
            },
            dataType: 'JSON',
            success: function(response) {
                if (response.status === 'success') {
                    $('#modal-opcion').modal('hide');
                    $('#form-opcion')[0].reset();
                    listaOpciones(pregunta_id);
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Ocurrió un error al guardar la opción');
            }
        });
    }
</script>
<?= $this->endSection() ?>