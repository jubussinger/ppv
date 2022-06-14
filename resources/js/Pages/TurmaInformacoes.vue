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
  turma: Object,
  alunos: Object,
});
/*
const form = useForm({    
    faixa_etaria:'',
    horario_inicio:'',
    horario_fim:'',
});
*/
$(document).ready(function() {
    $('#dataTable').DataTable();
} );

/*const submit = () => {
    form.post(route('cadastro_turma'), {
        onFinish: () => form.reset(),
    });
};*/

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
                            <div class="row d-block text-right p-0 m-0">
                                <button type="button" class="btn btn-primary mb-2"  >
                                    <Link :href="route('lista_turma')" style="color: white; text-decoration: none"><i class="fa fa-arrow-left"></i> Voltar ao cadastro</Link>
                                </button>
                            </div>
                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-secondary">Informações da Turma</h1>
                            <p class="mb-4"></p>
                            
                            <form @submit.prevent="submit">
                                <div class="modal-body" >                    
                                    <div class="row" v-for="t in turma.data" :key="t.id">
                                        <div class="form-group col-4">
                                            <label for="faixa">Faixa Etária:</label>
                                            <BreezeInput type="text" class="form-control" id="faixa" name="faixa" v-model="t.faixa_etaria" readonly/>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="inicio">Horário Início:</label>
                                            <BreezeInput type="text" class="form-control" id="inicio" name="inicio" v-model="t.horario_inicio" readonly/>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="fim">Horário Final:</label>
                                            <BreezeInput type="text" class="form-control" id="fim" name="fim" v-model="t.horario_fim" readonly/>
                                        </div>
                                    </div>

                                </div>
                            </form>

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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="aluno in alunos.data" :key="aluno.id">
                                                    <td>{{aluno.nome}}</td>
                                                    <td>{{aluno.sexo}}</td>
                                                    <td>{{aluno.cpf}}</td>
                                                    <td>{{aluno.matricula}}</td>                                                    
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

  
</body>
</template>

<style>
    html, body {
 overflow: auto;
}
</style>
