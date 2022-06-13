<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import SideBarLayout from '@/components/SideBar.vue';
import NavBarLayout from '@/components/NavBar.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"
import $ from 'jquery'; 

const props = defineProps({
  alunos: Object,
});

const form = useForm({    
    
});

$(document).ready(function() {
    $('#dataTable').DataTable();
} );

const submit = () => {
    form.post(route(''), {
        onFinish: () => form.reset(),
    });
};

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
                            <h1 class="h3 mb-2 text-secondary">Lançamento Aluno</h1>
                            <p class="mb-4">Lançamentos relacionados a alunos de turmas do núcleo.</p>


                            <!-- DataTales Example -->
                            <div class="mt-5 mb-4">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-sm mb-0" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Sexo</th>
                                                    <th>CPF</th>
                                                    <th>Matrícula</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="aluno in alunos.data" :key="aluno.id">
                                                    <td>{{aluno.nome}}</td>
                                                    <td>{{aluno.sexo}}</td>
                                                    <td>{{aluno.cpf}}</td>
                                                    <td>{{aluno.matricula}}</td>
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#editLancamentoAlunoModal" @click="setSelectedItem(aluno.documentos)"> <i class="fa fa-edit"></i> </a> </td>
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
    <div class="modal fade" id="editLancamentoAlunoModal" tabindex="-1" role="dialog" aria-labelledby="editLancamentoAlunoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLancamentoAlunoModalLabel">Lançamento Aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <h6 class="col-12">Presenças</h6>
                        <ul class="col-12 ml-5 list-inline">
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>Presente</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>Presente</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>Presente</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>Presente</label></li>
                        </ul>

                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Data</label>
                                <input type="date" class="form-control" >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Data</label>
                                <select class="form-control">
                                    <option>Presente</option>
                                    <option>Ausente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">&nbsp;</label>
                                <input type="submit" class="form-control btn btn-primary" value="Salvar">
                            </div>
                        </div>

                    </div>

                    <hr />

                    <div class="row">
                        <h6 class="col-12">IMC</h6>
                        <ul class="col-12 ml-5 list-inline">
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>12,7</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>13,5</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>13,5</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>13,5</label></li>
                        </ul>

                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Data</label>
                                <input type="date" class="form-control" >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">IMC</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">&nbsp;</label>
                                <input type="submit" class="form-control btn btn-primary" value="Salvar">
                            </div>
                        </div>

                    </div>

                    <hr />

                    <div class="row">
                        <h6 class="col-12">Notas</h6>
                        <ul class="col-12 ml-5 list-inline">
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>85</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label></li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label></li>
                        </ul>

                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Data</label>
                                <input type="date" class="form-control" >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Nota</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">&nbsp;</label>
                                <input type="submit" class="form-control btn btn-primary" value="Salvar">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
