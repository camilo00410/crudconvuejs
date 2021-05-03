<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

    <!-- CSS custom -->
    <link rel="stylesheet" href="main.css">

    <title>Document</title>
</head>
<body>
    
    <header>
        <h2 class="text-center text-dark"><span class="badge badge-success">crud con vueJs</span></h2>
    </header>
    
    <div id="appMoviles">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo">
                        <i class="fas fa-plus-circle fa-2xs"></i>
                    </button>
                </div>
                <div class="col text-right">
                    <h5>Stock Total: <span class="bagde badge-success">{{totalStock}}</span></h5>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr v-for="(movil, indice) of moviles">
                            <td>{{movil.id}}</td>
                            <td>{{movil.marca}}</td>
                            <td>{{movil.modelo}}</td>
                            <td>
                                <div class="col-md-8">
                                    <input type="number" v-model.number="movil.stock" class="form-control text-right" disabled> 
                                </div>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id, movil.marca, mocil.modelo, movil.stock)">
                                        <i class="fas fa-pencil-alt"></i>                                    
                                    </button>
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                           </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- Vue.js -->
    <script src="https://unpkg.com/vue@next"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Codigo custom -->
    <script src="main.js"></script>

</body>
</html>