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
  status_filtro: String,
});

const form = useForm({    
    
});



const setSelectedItem = (item) => {
    //document.getElementById('nome').value = data.selectedItem.nome;
    //console.log(selectedItem[0]);
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
                            <h1 class="h3 mb-2 text-secondary">Alunos</h1>
                            <p class="mb-4">Cadastro de Alunos - <b>{{status_filtro}}</b></p>

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
                                                    <td class="text-center" ><Link  :href="'/alunos/'+ aluno.id" ><i class="fa fa-arrow-right"></i></Link></td>
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
    <div class="modal fade" id="viewInscricaoModal" tabindex="-1" role="dialog" aria-labelledby="viewInscricaoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewInscricaoModalLabel">Inscrição</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="submit">
                    <div class="modal-body" >
                        
                        <h4 class="my-4">Informações Pessoais</h4>

                        <div class="row">
                            <div class="form-group col-8">
                                <BreezeLabel for="nome" value="Nome" />
                                <BreezeInput id="nome" type="text" class="form-control" required autofocus autocomplete="nome" />
                            </div>                
                        
                            <div class="form-group col-4">
                                <BreezeLabel for="cpf" value="CPF" />
                                <BreezeInput id="cpf" type="text" class="form-control" required autocomplete="cpf" />
                            </div>

                            <div class="form-group col-4">
                                <BreezeLabel for="rg" value="RG" />
                                <BreezeInput id="rg" type="text" class="form-control" required  autocomplete="rg" />
                            </div>
                        
                            <div class="form-group col-4">
                                <BreezeLabel for="nascimento" value="Data Nascimento" />
                                <BreezeInput id="nascimento" type="date" class="form-control" required autocomplete="nascimento" @change="getAge(form.nascimento)" />
                            </div>
                        
                            <div class="form-group col-4">
                                <BreezeLabel for="idade" value="Idade" />
                                <BreezeInput id="idade" type="text" class="form-control" readonly="readonly" />
                            </div>
                        
                            <div class="form-group col-6">
                                <div>
                                    <p>Sexo</p>
                                    <div class="form-check form-check-inline">
                                        <BreezeInput type="radio" class="form-check-input" name="sexo" id="M" value="M" />
                                        <BreezeLabel for="M" value="Masculino" class="form-check-label" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <BreezeInput type="radio" class="form-check-input"  name="sexo" id="F" value="F" />
                                        <BreezeLabel for="F" value="Feminino" class="form-check-label" />
                                    </div>
                                </div>
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="whatsapp" value="Whatsapp" />
                                <BreezeInput id="whatsapp" type="text" class="form-control" required  autocomplete="whatsapp" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="endereco" value="Endereço" />
                                <BreezeInput id="endereco" type="text" class="form-control" required  autocomplete="endereco" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="bairro" value="Bairro" />
                                <BreezeInput id="bairro" type="text" class="form-control" required autocomplete="bairro" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="cidade" value="Cidade" />
                                <BreezeInput id="cidade" type="text" class="form-control" required autocomplete="cidade" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="estado" value="Estado" />
                                <BreezeInput id="estado" type="text" class="form-control" required autocomplete="estado" />
                            </div>
                        
                            <div class="form-group col-12">
                                <BreezeLabel for="pai" value="Nome do Pai" />
                                <BreezeInput id="pai" type="text" class="form-control" required autocomplete="pai" />
                            </div>
                        
                            <div class="form-group col-12">
                                <BreezeLabel for="mae" value="Nome da Mãe" />
                                <BreezeInput id="mae" type="text" class="form-control" required autocomplete="mae" />
                            </div>
                        
                            <div class="form-group col-12">
                                <BreezeLabel for="responsavel" value="Responsável Legal" />
                                <BreezeInput id="responsavel" type="text" class="form-control" required autocomplete="responsavel" />
                            </div>
                        
                            <div class="form-group col-3">
                                <div>
                                    <p></p>
                                <div class="form-check ">
                                    
                                    <BreezeInput type="checkbox" @change="checkChange" class="form-check-input" name="deficiencia" id="deficiencia" />
                                    <BreezeLabel for="deficiencia" class="form-check-label" value="Possuo Deficiência" />
                                </div> 
                                </div>
                            </div> 
                            <div class="form-group col-9">    
                                <BreezeLabel for="desc_deficienca" value="Se sim, qual?" />
                                <BreezeInput id="desc_deficienca" type="text" class="form-control" autocomplete="desc_deficienca" />
                            </div>
                        </div>
                        <hr />
                        <h4 class="my-4">Informações Escolares</h4>

                        <div class="row">
                            <div class="form-group col-6">
                                <BreezeLabel for="unid_escolar" value="Unidade Escolar" />
                                <BreezeInput id="unid_escolar" type="text" class="form-control" required autocomplete="unid_escolar" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="ano_escolar" value="Ano da Escolaridade" />
                                <BreezeInput id="ano_escolar" type="text" class="form-control" required autocomplete="ano_escolar" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="endereco_escolar" value="Endereço da Escola" />
                                <BreezeInput id="endereco_escolar" type="text" class="form-control" required autocomplete="endereco_escolar" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="bairro_escolar" value="Bairro da Escola" />
                                <BreezeInput id="bairro_escolar" type="text" class="form-control"  required autocomplete="bairro_escolar" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="cidade_escolar" value="Cidade da Escola" />
                                <BreezeInput id="cidade_escolar" type="text" class="form-control" required autocomplete="cidade_escolar" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="estado_escolar" value="Estado da Escola" />
                                <BreezeInput id="estado_escolar" type="text" class="form-control" required autocomplete="estado_escolar" />
                            </div>
                        
                            <div class="form-group col-6">
                                <BreezeLabel for="telefone_escolar" value="Telefone da Escola" />
                                <BreezeInput id="telefone_escolar" type="text" class="form-control" required autocomplete="telefone_escolar" />
                            </div>
                            <div class="form-group col-6">
                                <div>
                                    <p>Origem Escolar</p>
                                    <div class="form-check form-check-inline">
                                        <BreezeInput name="origem" class="form-check-input" type="radio" id="particular" value="PARTICULAR" />
                                        <BreezeLabel class="form-check-label" for="particular" value="Particular"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <BreezeInput name="origem" class="form-check-input" type="radio" id="estadual" value="ESTADUAL" />
                                        <BreezeLabel class="form-check-label" for="estadual" value="Estadual"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <BreezeInput name="origem" class="form-check-input" type="radio" id="municipal" value="MUNICIPAL" />
                                        <BreezeLabel class="form-check-label" for="municipal" value="Municipal"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="my-4">Documentos</h4>
                        <div class="row">
                            <div class="form-group col-12">
                                <ul class="col-12 ml-5 list-inline" >
                                    <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="/img/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                                    <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="/img/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                                    <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="/img/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                                </ul>
                            </div>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <BreezeButton class="btn btn-primary " type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Ativar/Inativar
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
 overflow: auto;
}
</style>
