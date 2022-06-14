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
  aluno: Object,
  aulas: Object,
  lancamentosImc: Object,
  notas:Object,
  chamadas:Object,
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
 
                        <div class="container px-2 px-lg-5 px-xl-4" v-for="a in aluno.data" :key="a.id">

                            <div class="row d-block text-right p-0 m-0">
                                <button type="button" class="btn btn-primary mb-2"  >
                                    <Link :href="route('lista_aluno')" style="color: white; text-decoration: none"><i class="fa fa-arrow-left"></i> Voltar </Link>
                                </button>
                            </div>
                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-secondary">Lançamento de Aluno</h1>
                            <p class="mb-4">Lançamentos relacionados ao aluno: <b>{{a.nome}} - {{a.matricula}}</b></p>

                            <div class="modal-content">                                
                                <div class="modal-body">

                                    <div class="row">
                                        <h6 class="col-12">Presenças</h6>
                                        <ul class="col-12 ml-5 list-inline">
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>Presente</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>13/06/2022 - <label>Presente</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>14/06/2022 - <label>Falta</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>15/06/2022 - <label>Presente</label></li>
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
                                                    <option>Falta</option>
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
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>24,7</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/07/2022 - <label>25,5</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/08/2022 - <label>24,9</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/09/2022 - <label>24,9</label></li>
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
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/02/2022 - <label>85</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/04/2022 - <label>92</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label></li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/08/2022 - <label>92</label></li>
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

                                    <hr />

                                    <div class="row">
                                        <h6 class="col-12">Chamadas</h6>
                                        <ul class="col-12 ml-5 list-inline">
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>85</label> - <label>sucesso</label><br/>
                                                <label>A mãe do aluno reclamou da falta de adaptação da criança</label> </li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label> - <label>sucesso</label><br/>
                                                <label>A mãe do aluno disse estar feliz com o desenvolvimento do filho</label> </li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label> - <label>sem sucesso</label><br/>
                                                <label>Na ligação, deu que a linha não existe mais</label> </li>
                                            <li><span class="fa fa-soccer-ball-o mr-2"></span>12/06/2022 - <label>92</label> - <label>sem sucesso</label><br/>
                                                <label>Caixa Postal</label> </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Data:</label>
                                                <input type="date" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="observacao">Observações:</label>
                                                <textarea id="observacao" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div> 
                                        <div class="col-3 mt-4 ml-3">
                                            <div class="form-group">                                                
                                                <input type="checkbox" class="form-check-input" id="sucesso">
                                                <label for="sucesso">Sucesso</label>                                                
                                            </div>
                                        </div>  
                                    </div>    
                                    <div class="row">
                                        <div class="col-10"></div>                                 
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">&nbsp;</label>
                                                <input type="submit" class="form-control btn btn-primary" value="Salvar">
                                            </div>
                                        </div>

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
