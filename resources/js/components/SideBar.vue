<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>


<template>
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
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link :href="route('lista_turma')">TURMA</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link :href="route('lista_profissional')">PROFISSIONAL</Link></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">INSCRIÇÕES</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link :href="route('lista_aluno_status', '1')">ATIVAS</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link :href="route('lista_aluno_status', '0')">INATIVAS</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link :href="route('lista_aluno_status', '2')">DOCUMENTAÇÃO</Link></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">LANÇAMENTOS</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link href="alunos.html">ALUNOS</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link href="profissionais.html">PROFISSIONAIS</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link href="fotos.html">FOTOS</Link></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="col-12 d-block nav navbar-right top-nav p-0 ml-3 mt-4 rounded shadow" style="background-color:#ED8603;">
                                <li class="dropdown my-2">
                                    <a class="dropdown-toggle text-white h4 btn btn-lg btn-block p-0" data-toggle="dropdown">
                                        <labe class="d-inline-flex w-75 text-truncate">RELATÓRIOS</labe>
                                    </a>
                                    <ul class="dropdown-menu p-2 mt-2">
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link href="#">ALUNOS</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link href="#">ACOMPANHAMENTOS</Link></li>
                                        <li><span class="fa fa-soccer-ball-o mr-2"></span><Link href="#">NÚCLEO</Link></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End of Sidebar -->
                        </div>
                    </div>

                </div>
                <!-- FIM BARRA LATERAL -->
</template>