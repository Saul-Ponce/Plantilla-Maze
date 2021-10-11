<?php include 'header.php'; ?>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php include 'nav_bar.php';  ?>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Nuevo Expediente</h3>
                            <p style="color: lightgray;">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                            </nav>
                        </div>
                    </div>
                </div>

                <!--Extra Large Modal -->
                <div class="modal fade text-left w-100" id="completeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel16">Formulario Datos personales
                                </h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">DUI</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="00000000-0" id="Id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-credit-card-2-front"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">NIT</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="00-000-000-0" id="Id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-credit-card-2-front"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">ISSS</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="0000000" id="Id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-credit-card-2-front"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Nombre-icon">Nombre</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Juan Carlos" id="Nombre-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Apellido-icon">Apellido</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Perez Soza" id="Apellido-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Fecha de Nacimiento</label>
                                            <div class="position-relative">
                                                <input type="date" class="form-control" placeholder="" id="Id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Genero</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Femenino
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Estado civil</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Seleccione una opción</option>
                                                <option value="1">Soltero</option>
                                                <option value="2">Casado</option>
                                                <option value="3">Viudo</option>
                                                <option value="3">Divorciado</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Nombre-icon">Direccion</label>
                                            <div class="position-relative">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Apellido-icon">Lugar de Nacimiento</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="San Vicente" id="Apellido-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-geo"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Correo-icon">Correo Personal</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="jose145@gmail.com" id="Correo-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Correo-icon">Correo Institucional</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="jose145@pnc.com" id="Correo-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Tipo de sangre</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Seleccione una opción</option>
                                                <option value="1">O negativo</option>
                                                <option value="2">ORH positivo</option>
                                                <option value="3">A negativo</option>
                                                <option value="4">ARH positivo</option>
                                                <option value="5">B negativo</option>
                                                <option value="6">BRH positivo</option>
                                                <option value="7">AB negativo</option>
                                                <option value="8">ABRH positivo</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Estatura</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" value="4.5" data-decimals="2" min="0" max="9" step="0.01" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-lines-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Peso</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" value="4.5" data-decimals="2" min="0" max="9" step="0.01" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-lines-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Correo-icon">Fecha de Ingreso</label>
                                            <div class="position-relative">
                                                <input type="date" class="form-control" placeholder="" id="Id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Nombre-icon">Señales Especiales</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Tatuje en la costilla" id="Nombre-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-heart-half"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Apellido-icon">Fotografia</label>
                                            <div class="position-relative">
                                                <input class="form-control" type="file" id="formFile">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-camera"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancelar</span>
                                </button>
                                <button type="button" class="btn btn-primary ml-1" onclick="validarCampos()">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="basic-modals">
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <div class="card">

                                <div class="card-body">

                                    <!-- Button trigger for basic modal -->

                                    <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#completeModal" class="btn btn-outline-primary"><i class="bi bi-file-earmark-person"></i> Datos Personales</button>
                                        <button type="button" class="btn btn-outline-primary"><i class="bi bi-person-lines-fill"></i> ONI</button>
                                        <button type="button" class="btn btn-outline-primary">Promocion</button>
                                        <button type="button" class="btn btn-outline-primary">Licencias</button>
                                        <button type="button" class="btn btn-outline-primary">Arma</button>
                                        <button type="button" class="btn btn-outline-primary">Familiares</button>
                                        <button type="button" class="btn btn-outline-primary">Telefonos</button>
                                        <button type="button" class="btn btn-outline-primary">AFP</button>
                                        <button type="button" class="btn btn-outline-primary">Telefonos</button>
                                        <button type="button" class="btn btn-outline-primary">Educación</button>
                                        <button type="button" class="btn btn-outline-primary">Experiencia laboral</button>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Apellido</th>
                                                    <th>Nombre</th>
                                                    <th>ONI</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cortez Carmona</td>
                                                    <td>Josue Daniel</td>
                                                    <td>076 4820 8838</td>
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Osorio Rivaz</td>
                                                    <td>Daniela Sarai</td>
                                                    <td>076 4820 8838</td>
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sanchez Campos</td>
                                                    <td>Marta Gloria</td>
                                                    <td>076 4820 8838</td>
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>
                <?php include 'footer.php'; ?>

            </div>
        </div>

</body>