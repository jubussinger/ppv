<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>


<template>
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <div class="row">


                <!-- BARRA LATERAL -->
                <div class="d-none d-lg-block col-2 p-0 m-0 shadow" style="min-height: 100vh; background-color: #11507A;">

                    <div class="container">
                        <!-- Sidebar - Brand -->
                        <div class="row my-4">
                            <div class="col-12 d-block text-center p-0">
                                <img class="w-75" src="/img/Passaporte-branca-300x180.png">
                            </div>
                        </div>

                        <hr >

                        <div class="row ml-2">
                            <!-- Sidebar -->
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">CADASTRO</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="turma.html">TURMA</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="profissional.html">PROFISSIONAL</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">INSCRIÇÕES</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="ativas.html">ATIVAS</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="inativas.html">INATIVAS</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="documentacao.html">DOCUMENTAÇÃO</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">LANÇAMENTOS</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="alunos.html">ALUNOS</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="profissionais.html">PROFISSIONAIS</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="fotos.html">FOTOS</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">RELATÓRIOS</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="#">ALUNOS</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="#">ACOMPANHAMENTOS</a></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><a href="#">NÚCLEO</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End of Sidebar -->
                        </div>
                    </div>

                </div>
                <!-- FIM BARRA LATERAL -->
                
                <!-- CONTEÚDO -->
                <div class="col-12 col-lg-10 p-0">
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            <!-- BARRA DO TOPO -->
                            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                <!-- Topbar Navbar -->
                                <ul class="navbar-nav ml-auto mr-2">
                                    Cleyton Gomes
                                </ul>

                                <div class="dropdown mr-3">
                                    <Link :href="route('logout')" method="post" as="button" class="btn">
                                    <i class="fa fa-sign-out"></i>
                                    </Link>
                                </div>

                            </nav>
                            <!-- FIM BARRA DO TOPO -->

                            <!-- Begin Page Content -->
                            <div class="container">


                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

                    </div>
                    <!-- End of Content Wrapper -->
                </div>
                <!-- FIM CONTEÚDO -->

            </div>

        </div>
    </body>
</template>

<style>
    html, body {
 overflow: hidden;
}
</style>