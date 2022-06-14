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
  aluno: Object,
  documentos: Object,
});

const form = useForm({    
    id:'',
    tam_uniforme:'',
    tam_chuteira:'',
    emergencia1:'',
    emergencia2:'',
    conhecimento_projeto:'',
});

$(document).ready(function() {
    $('#dataTable').DataTable();
} );

const submit = () => {
    form.put('\alunos', {
        onFinish: () => form.reset(),
    });
};

const getAge = (nascimento) => 
{
    var today = new Date();
    var birthDate = new Date(nascimento);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    if(age == 1){
        document.getElementById('idade').value = age + " ano";
    }else{
        document.getElementById('idade').value = age + " anos";
    }
    
}
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
                            <h1 class="h3 mb-2 text-secondary">Informações do Aluno</h1>
                            <p class="mb-4"></p>
                            
                            <form @submit.prevent="submit">
                                <div class="modal-body" v-for="a in aluno.data" :key="a.id">
                                            <div class="row d-block text-right p-0 m-0">
                                                <button type="button" class="btn btn-primary mb-2"  >
                                                    <Link :href="'/alunos/status/' + a.status" style="color: white; text-decoration: none"><i class="fa fa-arrow-left"></i> Voltar ao cadastro</Link>
                                                </button>
                                            </div>
                                    <h4 class="my-4">Informações Pessoais - Matrícula: {{a.matricula}}</h4>

                                    <div class="row">
                                        <div class="form-group col-4">
                                            <BreezeLabel for="nome" value="Nome" />
                                            <BreezeInput id="nome" type="text" class="form-control" readonly v-model="a.nome" required autofocus autocomplete="nome" />
                                        </div>                
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="cpf" value="CPF" />
                                            <BreezeInput id="cpf" type="text" class="form-control" readonly v-model="a.cpf" required autocomplete="cpf" />
                                        </div>

                                        <div class="form-group col-4">
                                            <BreezeLabel for="rg" value="RG" />
                                            <BreezeInput id="rg" type="text" class="form-control" readonly v-model="a.rg" required  autocomplete="rg" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="nascimento" value="Data Nascimento" />
                                            <BreezeInput id="nascimento" type="date" class="form-control" readonly v-model="a.nascimento" required autocomplete="nascimento" v-on:load="getAge(p.nascimento)" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="idade" value="Idade" />
                                            <BreezeInput id="idade" type="text" class="form-control" readonly  />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <div>
                                                <p>Sexo</p>
                                                <p v-if="aluno.sexo == 'M'">Masculino</p>
                                                <p v-else>Feminino</p>
                                            </div>
                                        </div> 
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="whatsapp" value="Whatsapp" />
                                            <BreezeInput id="whatsapp" type="text" class="form-control" readonly v-model="a.whatsapp" required  autocomplete="whatsapp" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="endereco" value="Endereço" />
                                            <BreezeInput id="endereco" type="text" class="form-control" readonly v-model="a.endereco" required  autocomplete="endereco" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="bairro" value="Bairro" />
                                            <BreezeInput id="bairro" type="text" class="form-control" readonly v-model="a.bairro" required autocomplete="bairro" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="cidade" value="Cidade" />
                                            <BreezeInput id="cidade" type="text" class="form-control" readonly v-model="a.cidade" required autocomplete="cidade" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="estado" value="Estado" />
                                            <BreezeInput id="estado" type="text" class="form-control" readonly v-model="a.estado" required autocomplete="estado" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="pai" value="Nome do Pai" />
                                            <BreezeInput id="pai" type="text" class="form-control" readonly v-model="a.pai" required autocomplete="pai" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="mae" value="Nome da Mãe" />
                                            <BreezeInput id="mae" type="text" class="form-control" readonly v-model="a.mae" required autocomplete="mae" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="responsavel" value="Responsável Legal" />
                                            <BreezeInput id="responsavel" type="text" class="form-control" readonly v-model="a.responsavel" required autocomplete="responsavel" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <div>
                                                <p>Deficiência</p>
                                                <p v-if="aluno.deficiencia">{{aluno.desc_deficiencia}}</p>
                                                <p v-else>Não possui</p>
                                            </div>
                                        </div>                                         
                                    </div>
                                    <hr />
                                    <h4 class="my-4">Informações Escolares</h4>

                                    <div class="row">
                                        <div class="form-group col-4">
                                            <BreezeLabel for="unid_escolar" value="Unidade Escolar" />
                                            <BreezeInput id="unid_escolar" type="text" class="form-control" readonly v-model="a.unid_escolar" required autocomplete="unid_escolar" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="ano_escolar" value="Ano da Escolaridade" />
                                            <BreezeInput id="ano_escolar" type="text" class="form-control" readonly v-model="a.ano_escolar" required autocomplete="ano_escolar" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="endereco_escolar" value="Endereço da Escola" />
                                            <BreezeInput id="endereco_escolar" type="text" class="form-control" readonly v-model="a.endereco_escolar" required autocomplete="endereco_escolar" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="bairro_escolar" value="Bairro da Escola" />
                                            <BreezeInput id="bairro_escolar" type="text" class="form-control"  readonly v-model="a.bairro_escolar" required autocomplete="bairro_escolar" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="cidade_escolar" value="Cidade da Escola" />
                                            <BreezeInput id="cidade_escolar" type="text" class="form-control" readonly v-model="a.cidade_escolar" required autocomplete="cidade_escolar" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="estado_escolar" value="Estado da Escola" />
                                            <BreezeInput id="estado_escolar" type="text" class="form-control" readonly v-model="a.estado_escolar" required autocomplete="estado_escolar" />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="telefone_escolar" value="Telefone da Escola" />
                                            <BreezeInput id="telefone_escolar" type="text" class="form-control" readonly v-model="a.telefone_escolar" required autocomplete="telefone_escolar" />
                                        </div>
                                        <div class="form-group col-4">
                                            <div>
                                                
                                                <div class="form-check form-check-inline">
                                                    <p >{{aluno.origem_escolar}}</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <h4 class="my-4">Documentos</h4>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <ul class="col-12 ml-5 list-inline" v-for="documento in documentos.data" :key="documento.id">
                                                <li><span class="fa fa-soccer-ball-o mr-2"></span><a :href="documento.caminho" >Documento {{documento.id}}</a></li>
                                            </ul>
                                        </div>
                                    </div>  
                                    <hr />                      
                                    <h4 class="my-4">Informações Complementares</h4>

                                    <div class="row">
                                        <input type="hidden" name="id" v-model="form.id"/>
                                        <div class="form-group col-4">
                                            <BreezeLabel for="tam_chuteira" value="Tamanho da Chuteira" />
                                            <BreezeInput id="tam_chuteira" type="text" class="form-control" v-model="form.tam_chuteira" required  />
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="tam_uniforme" value="Tamanho do Uniforme" />
                                            <BreezeInput id="tam_uniforme" type="text" class="form-control" v-model="form.tam_uniforme" required  />
                                        </div>
                                    
                                        <div class="form-group col-8">
                                            <BreezeLabel for="conhecimento" value="Como Conheceu o Projeto" />
                                            <textarea id="conhecimento" v-model="form.conhecimento_projeto"  class="md-textarea form-control" rows="5"></textarea>
                                        </div>
                                        <div class="form-group col-4"></div>
                                        <div class="form-group col-4">
                                            <BreezeLabel for="emergencia1" value="Contato de Emergência 1" />
                                            <BreezeInput id="emergencia1" type="text" class="form-control"  v-model="form.emergencia1" required/>
                                        </div>
                                    
                                        <div class="form-group col-4">
                                            <BreezeLabel for="emergencia2" value="Contato de Emergência 2" />
                                            <BreezeInput id="emergencia2" type="text" class="form-control" v-model="form.emergencia2" required  />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <BreezeLabel  />
                                            <BreezeButton class="btn btn-primary " type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                Atualizar Dados
                                            </BreezeButton>
                                        </div>                                    
                                    </div>
                                    <hr />  
                                    <h4 class="my-4">Status Aluno</h4>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <BreezeLabel for="status" value="Status do Aluno" />
                                            <BreezeInput type="text" v-if="a.status == 0" class="form-control" name="deficiencia" readonly value="Inativo"/>
                                            <BreezeInput type="text" v-else-if="a.status == 1" class="form-control" name="deficiencia" readonly value="Ativo"/>
                                            <BreezeInput type="text" v-else class="form-control" name="deficiencia" readonly value="Aguardando Documentos"/>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="form-group col-4">
                                            <BreezeLabel  />
                                            <BreezeButton v-if="a.status != '1'" class="btn btn-primary " :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                <Link :href="'/alunos/ativar/' + a.id" style="color: white; text-decoration: none"> Ativar Cadastro</Link>
                                            </BreezeButton>
                                            <BreezeButton v-else class="btn btn-primary " :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                <Link :href="'/alunos/inativar/' + a.id" style="color: white; text-decoration: none">Inativar Cadastro</Link>
                                            </BreezeButton>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                   <!-- <BreezeButton class="btn btn-primary " type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            Alterar
                                        </BreezeButton>-->
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
