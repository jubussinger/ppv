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
  categorias: Object,
});

const form = useForm({    
    file:[],
    categoria_id: '',
});

$(document).ready(function() {
    $('#dataTable').DataTable();
} );

const submit = () => {
    form.post(route('doc_categoria'), {
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
                            <h1 class="h3 mb-2 text-secondary">Categorias</h1>
                            <p class="mb-4">Anexos das categorias</p>


                            <!-- DataTales Example -->
                            <div class="mt-5 mb-4">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-sm mb-0" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>                                                    
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr  v-for="categoria in categorias.data" :key="categoria.id">
                                                    <td>{{categoria.nome}}</td>
                                                    <td class="text-center"> <Link :href="'/lancamento/categoria/'+ categoria.id" ><i class="fa fa-arrow-right"></i></Link> </td>
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
    <div class="modal fade" id="editFotoModal" tabindex="-1" role="dialog" aria-labelledby="editFotoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFotoModalLabel">Anexos Enviados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <h6 class="col-12">Imagens Cadastradas</h6>
                        <ul class="col-12 ml-5 list-inline">
                            <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="imagens/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="imagens/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="imagens/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                            <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="imagens/escolhinha_1.jpg" >Imagem 1</a> 12/06/2022</li>
                        </ul>
                    </div>

                    <hr />

                    <div class="row">
                        <form @submit.prevent="submit">
                            <div class="form-group col-12">
                                <label for="imagem">Nova Imagem:</label><br />
                                <input type="file" name="imagem" accept="image/*"><br />
                                <BreezeButton type="submit" name="enviar" value="Salvar" />
                            </div>
                        </form>
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
 overflow: auto;
}
</style>
