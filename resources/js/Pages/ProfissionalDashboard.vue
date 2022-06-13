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
  profissionais: Object,
});

const form = useForm({    
    nome:'',
    cpf:'',
    endereco:'',
    bairro:'',
    cidade:'',
    estado:'',
    contato:'',
    observacao:'',
    funcao:'',
});

const submit = () => {
    form.post(route('cadastro_profissional'), {
        onFinish: () => form.reset(),
    });
};

$(document).ready(function() {
    $('#dataTable').DataTable();
} );

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
                            <h1 class="h3 mb-2 text-secondary">Profissional</h1>
                            <p class="mb-4">Cadastro de profissionais no núcleo</p>

                            
                            <!-- iniciar Modal -->
                            <div class="row d-block text-right p-0 m-0">
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#novoProfissionalModal">
                                    Adicionar Profissional
                                </button>
                            </div>

                            <!-- DataTales Example -->
                            <div class="mt-5 mb-4">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-sm mb-0" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>CPF</th>
                                                    <th>Função</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="profissional in profissionais.data" :key="profissional.id">
                                                    <td>{{profissional.nome}}</td>
                                                    <td>{{profissional.cpf}}</td>
                                                    <td>{{profissional.funcao}}</td>
                                                    <td class="text-center" ><a data-toggle="modal" data-target="#novoProfissionalModal" ><i class="fa fa-eye"></i></a></td>
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
    <div class="modal fade" id="novoProfissionalModal" tabindex="-1" role="dialog" aria-labelledby="novoProfissionalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="novoProfissionalModalLabel">Novo Profissional</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="submit">
                    <div class="modal-body">                        
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="nome">Nome:</label>
                                <input type="text" v-model="form.nome" class="form-control" id="nome" placeholder="" name="nome">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="cpf">CPF:</label>
                                <input type="text" v-model="form.cpf" class="form-control" id="cpf" placeholder="" name="cpf">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="endereco">Endereço:</label>
                                <input type="text" v-model="form.endereco" class="form-control" id="endereco" placeholder="" name="endereco">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="bairro">Bairro:</label>
                                <input type="text" v-model="form.bairro" class="form-control" id="bairro" placeholder="" name="bairro">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="cidade">Cidade:</label>
                                <input type="text" v-model="form.cidade" class="form-control" id="cidade" placeholder="" name="cidade">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="estado">Estado:</label>
                                <input type="text" v-model="form.estado" class="form-control" id="estado" placeholder="" name="estado">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="contato">Contato:</label>
                                <input type="text" v-model="form.contato" class="form-control" id="contato" placeholder="" name="contato">
                            </div>
                        
                            <div class="form-group col-6">
                                <label for="funcao">Função:</label>
                                <select v-model="form.funcao" class="form-select form-select-sm form-control" >                                    
                                    <option value="PROFISSIONAL">PROFISSIONAL</option>
                                    <option value="COORDENADOR">COORDENADOR</option>
                                    <option value="TÉCNICO AUXILIAR">TÉCNICO AUXILIAR</option>
                                    <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                                </select>
                            </div>

                            <div class="form-group col-12">
                                <label for="observacao">Observação:</label>
                                <textarea id="observacao" v-model="form.observacao"  class="md-textarea form-control" rows="3"></textarea>
                            </div>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <BreezeButton class="btn btn-primary " type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Cadastrar
                            </BreezeButton>
                    </div>
                </form>
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
