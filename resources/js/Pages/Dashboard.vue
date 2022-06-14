<script setup>
//import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import SideBarLayout from '@/components/SideBar.vue';
import NavBarLayout from '@/components/NavBar.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
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
                            <h1 class="h3 mb-2 text-secondary text-center">Seja Bem-Vindo(a)!</h1>
                            <p class="mb-4 mb-2 text-secondary text-center"><b>Informações do núcleo conectado:</b></p>
                            <p class="mb-4 mb-2 text-secondary text-center"><b>RESPONSÁVEL</b></p>
                            <p class="mb-4 mb-2 text-secondary text-center">{{$page.props.auth.user.responsavel}}</p>
                            <p class="mb-4 mb-2 text-secondary text-center"><b>ESTADO</b></p>                                
                            <p class="mb-4 mb-2 text-secondary text-center">{{$page.props.auth.user.estado}}</p>
                            <p class="mb-4 mb-2 text-secondary text-center"><b>MUNICÍPIO</b></p>
                            <p class="mb-4 mb-2 text-secondary text-center">{{$page.props.auth.user.municipio}}</p>
                            <p class="mb-4 mb-2 text-secondary text-center"><b>BAIRRO</b></p>
                            <p class="mb-4 mb-2 text-secondary text-center">{{$page.props.auth.user.bairro}}</p>
                        
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
