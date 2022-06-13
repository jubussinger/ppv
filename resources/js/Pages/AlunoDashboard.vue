<script setup>
import SideBarLayout from '@/components/SideBar.vue';
import NavBarLayout from '@/components/NavBar.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
  alunos: Object,
  status_filtro: String,
});

const data = () => {
  return {
     selectedItem: {
     }
  }
}

const setSelectedItem = (item) => {
    data.selectedItem = item;
    document.getElementById('nome').value = data.selectedItem.nome;
    console.log(data.selectedItem.nome);
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
                                                    <td class="text-center"> <a data-toggle="modal" data-target="#viewInscricaoModal" @click="setSelectedItem(aluno)"> <i class="fa fa-edit"></i> </a> </td>
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
                <div class="modal-body">
                    
                    <h4 class="my-4">Informações Pessoais</h4>

                    <div class="row">
                        <div class="form-group col-12">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="pwd">RG ou Certidão de Nascimento:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                        <div class="form-group col-6">
                            <label for="pwd">CPF:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="whatsapp">Whatsapp:</label>
                            <input type="text" class="form-control" id="whatsapp" placeholder="" name="whatsapp" >
                        </div>
                        <div class="form-group col-6">
                            <label for="pwd">Data de Nascimento:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="pwd">Como conheceu o Projeto:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                    </div>
    
                    <hr />
    
                    <h4 class="my-4">Uniforme</h4>
    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="pwd">Tamanho do Uniforme:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">Tamanho da Chuteira:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                    </div>
    
                    <hr />
    
                    <h4 class="my-4">Logradouro</h4>
    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="pwd">Endereço:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">Município:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-12">
                            <label for="pwd">Bairro:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                    </div>
    
                    <hr />
    
                    <h4 class="my-4">Dados do Responsável 1</h4>
    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="pwd">Nome:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">CPF:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">Whatsapp:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">Parentesco:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
                    </div>
    
                    <hr />
    
                    <h4 class="my-4">Dados do Responsável 2</h4>
    
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="pwd">Nome:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">CPF:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">Whatsapp:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="pwd">Parentesco:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
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
