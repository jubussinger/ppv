<script setup>
import SideBarLayout from '@/components/SideBar.vue';
import NavBarLayout from '@/components/NavBar.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Passaporte para Vitória" />
    
    
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <div class="row">
            <SideBarLayout/>
           <div class="col-12 col-lg-10 p-0">
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <NavBarLayout />
 
                        <div class="container px-2 px-lg-5 px-xl-4">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-secondary">Turma</h1>
                            <p class="mb-4">LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM .</p>

                            
                            <!-- iniciar Modal -->
                            <div class="row d-block text-right p-0 m-0">
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#novaTurmaModal">
                                    Adicionar Turma
                                </button>
                            </div>

                            <!-- DataTales Example -->
                            <div class="mt-5 mb-4">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-sm mb-0" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Faixa Etária</th>
                                                    <th>Data Criação</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0001</td>
                                                    <td>07-09</td>
                                                    <td>12/08/2017</td>
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#viewTurmaModal"> <i class="fa fa-eye"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>0002</td>
                                                    <td>07-09</td>
                                                    <td>12/08/2017</td>
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#viewTurmaModal"> <i class="fa fa-eye"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>0001</td>
                                                    <td>09-10</td>
                                                    <td>12/08/2017</td>
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#viewTurmaModal"> <i class="fa fa-eye"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>0001</td>
                                                    <td>07-09</td>
                                                    <td>12/08/2022</td>
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#viewTurmaModal"> <i class="fa fa-eye"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>0001</td>
                                                    <td>07-09</td>
                                                    <td>12/08/2017</td>
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#viewTurmaModal"> <i class="fa fa-eye"></i> </a> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- FIM CONTEÚDO -->

        </div>

    </div>
    <!-- End of Page Wrapper -->

  
    <!-- Modal -->
    <div class="modal fade" id="novaTurmaModal" tabindex="-1" role="dialog" aria-labelledby="novaTurmaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="novaTurmaModalLabel">Nova Turma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="email">Faixa Etária:</label>
                            <input type="email" class="form-control" id="email" placeholder="" name="email">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Criar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="viewTurmaModal" tabindex="-1" role="dialog" aria-labelledby="viewTurmaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewTurmaModalLabel">Visualizar Turma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="email">Faixa Etária:</label>
                            <input type="email" class="form-control" id="email" placeholder="" name="email">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Criar</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</template>

<style>
    html, body {
 overflow: hidden;
}
</style>
