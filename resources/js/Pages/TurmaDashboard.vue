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
  turmas: Object,
  alunos: Object,
});

const form = useForm({    
    faixa_etaria:'',
    horario_inicio:'',
    horario_fim:'',
});

$(document).ready(function() {
    $('#dataTable').DataTable();
} );

const submit = () => {
    form.post(route('cadastro_turma'), {
        onFinish: () => console.log('teste'),
    });
};

$("#close_modal").click(function () {
   $('.modal').modal('hide');
});

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
                            <h1 class="h3 mb-2 text-secondary">Turmas</h1>
                            <p class="mb-4">Cadastro de turmas do núcleo logado</p>

                            
                            <!-- iniciar Modal -->
                            <div class="row d-block text-right p-0 m-0">
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#novaTurmaModal" >
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
                                                    <th>Faixa Etária</th>
                                                    <th>Horário Início</th>
                                                    <th>Horário Fim</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="turma in turmas.data" :key="turma.id">
                                                    <td>{{turma.faixa_etaria}}</td>
                                                    <td>{{turma.horario_inicio}}</td>
                                                    <td>{{turma.horario_fim}}</td>
                                                    <td class="text-center" ><Link  :href="'turmas/'+ turma.id" ><i class="fa fa-arrow-right"></i></Link></td>
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
                <form @submit.prevent="submit">
                    <div class="modal-body">                    
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="faixa">Faixa Etária:</label>
                                <input type="text" class="form-control" id="faixa" name="faixa" v-model="form.faixa_etaria">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="inicio">Horário Início:</label>
                                <input type="time" class="form-control" id="inicio" name="inicio" v-model="form.horario_inicio">
                                
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="fim">Horário Final:</label>
                                <input type="time" class="form-control" id="fim" name="fim" v-model="form.horario_fim">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <BreezeButton id="close_modal" class="btn btn-primary " type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Cadastrar
                            </BreezeButton>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--
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
                                <BreezeLabel for="faixa">Faixa Etária:</BreezeLabel>
                                <BreezeInput type="text" class="form-control" id="faixa" name="faixa" disabled v-model="selectedItem.faixa_etaria"/>
                            </div>
                        
                            <div class="form-group col-12">
                                <BreezeLabel for="inicio">Horário Início:</BreezeLabel>
                                <BreezeInput type="text" class="form-control" id="inicio" name="inicio" disabled v-model="selectedItem.horario_inicio"/>
                            </div>
                        
                            <div class="form-group col-12">
                                <BreezeLabel for="fim">Horário Final:</BreezeLabel>
                                <BreezeInput type="text" class="form-control" id="fim" name="fim" disabled v-model="selectedItem.horario_fim"/>
                            </div>
                        </div>

                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Criar</button>
                </div>
            </div>
        </div>
    </div>-->
    
</body>
</template>

<style>
    html, body {
 overflow: auto;
}
</style>
