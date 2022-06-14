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
  profissional: Object,
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
                                    <Link :href="route('lista_profissional')" style="color: white; text-decoration: none"><i class="fa fa-arrow-left"></i> Voltar ao cadastro</Link>
                                </button>
                            </div>
                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-secondary">Informações do Profissional</h1>
                            <p class="mb-4"></p>
                            
                            <form @submit.prevent="submit">
                                <div class="modal-body" >                    
                                    <div class="row" v-for="p in profissional.data" :key="p.id">
                                        <div class="form-group col-6">
                                            <label for="nome">Nome:</label>
                                            <input type="text" readonly v-model="p.nome" class="form-control" id="nome" placeholder="" name="nome">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="cpf">CPF:</label>
                                            <input type="text" readonly v-model="p.cpf" class="form-control" id="cpf" placeholder="" name="cpf">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="endereco">Endereço:</label>
                                            <input type="text" readonly v-model="p.endereco" class="form-control" id="endereco" placeholder="" name="endereco">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" readonly v-model="p.bairro" class="form-control" id="bairro" placeholder="" name="bairro">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="cidade">Cidade:</label>
                                            <input type="text" readonly v-model="p.cidade" class="form-control" id="cidade" placeholder="" name="cidade">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="estado">Estado:</label>
                                            <input type="text" readonly v-model="p.estado" class="form-control" id="estado" placeholder="" name="estado">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="contato">Contato:</label>
                                            <input type="text" readonly v-model="p.contato" class="form-control" id="contato" placeholder="" name="contato">
                                        </div>
                                    
                                        <div class="form-group col-6">
                                            <label for="funcao">Função:</label>
                                            <input type="text" class="form-control" readonly v-model="p.funcao">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="observacao">Observação:</label>
                                            <textarea id="observacao" readonly v-model="p.observacao"  class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </form>                           

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
