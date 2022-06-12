<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

/*defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})*/

const form = useForm({    
    nome:'',
    sexo:'',
    rg:'',
    nascimento:'',
    cpf:'',
    whatsapp:'',
    endereco:'',
    bairro:'',
    cidade:'',
    estado:'',
    pai:'',
    mae:'',
    responsavel:'' , 
    deficiencia:'0',
    desc_deficienca:'',
    unid_escolar:'',
    ano_escolar:'',
    endereco_escolar:'',
    bairro_escolar:'',
    cidade_escolar:'',
    estado_escolar:'',
    origem_escolar:'',
    telefone_escolar:'',
});

const submit = () => {
    form.post(route('cadastro_aluno'), {
        onFinish: () => form.reset(),
    });
};


 const onChange = () => {
    if(form.deficiencia == 1){
        form.deficiencia = 0;
    }else{
        form.deficiencia = 1;
    }
};

</script>

<script>


</script>

<template>
    <Head title="Passaporte para Vitória" />

    <body class="" style="background-color: #11507a;">

    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="position: fixed; top: 0px; width: 100vw; z-index: 1000; background-color: #ED8603;">
        <Link class="navbar-brand" :href="route('welcome')" method="get">
            <img src="/img/logo.png" width="50px" />
        </Link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <Link class="nav-link" href="#">Início</Link>
            </li>
            <li class="nav-item ">
                <Link class="nav-link" href="#quemsomos">Quem Somos</Link>
            </li>
            <li class="nav-item ">
                <Link class="nav-link" href="#comoparticipar">Como Participar</Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link" href="#locais">Locais</Link>
              </li>
            <li class="nav-item">
              <Link class="nav-link" href="#inscricao">Cadastro</Link>
            </li>
          </ul>
        </div>
      </nav>

    <div class="text-center mx-auto my-5">
        <img class="mt-5 pt-5" src="/img/Passaporte-branca-300x180.png" alt="">
    </div>

    <div class="container">  
        <div class="shadow bg-light rounded p-5 ">
            <div class="row" id="quemsomos">
                <div class="col-12 col-lg-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner border rounded shadow-sm">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/escolhinha_1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/escolhinha_2.jpg" alt="Second slide">
                            </div>
                        </div>
                        <Link class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </Link>
                        <Link class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </Link>
                    </div>
                </div>
                <div class="col-12 col-lg-6" >
                    <h3 class="mt-2">Quem Somos</h3>
                    <p class="my-4">O Projeto Passaporte Para Vitória tem como objetivo gerar oportunidades para crianças e jovens em sua formação cidadã e sócio-esportiva. Aqui, também, contribuímos no desenvolvimento de atletas para o futebol profissional.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">  
        <div class="shadow bg-light rounded p-5 my-5" id="comoparticipar">
            <h3 class="mt-2">Como participar?</h3>
            <p class="my-4">Meninos e meninas de 05 a 15 anos são muito bem-vindos. As pré-inscrições são realizadas aqui e serão efetivadas mediante entrega de documentos e assinatura dos responsáveis no termo de inscrições nos núcleos do projeto.</p>
        </div>
    </div>

    <div class="container">  
        <div class="shadow bg-light rounded p-5 my-5" id="locais">
            <h3 class="mt-2">Onde tem?</h3>
            <p class="my-4">Através do Ministério da Cidadania – Secretaria Especial do Esporte, sob gestão do Instituto Léo Moura, temos núcleos oficiais das escolinhas de futebol do Projeto Passaporte Para Vitória em todas as regiões do estado do Rio de Janeiro. Confira!</p>

            <!-- RIO DE JANEIRO -->
            <div class="row col mt-2">
                <h5 class="col-12 btn btn-success" data-toggle="collapse" href="#collapseRJ" role="button" aria-expanded="false" aria-controls="collapseRJ">Rio de Janeiro (62)</h5>
                <div class="collapse row w-100" id="collapseRJ">
                    <ul class="col-12 col-lg-4 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Aperibé – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Araruama – Bicuíba – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Bom Jesus de Itabapoana – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Cachoeiras de Macacu – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Cambuci – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Cantagalo – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Cardoso Moreira – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Carmo – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Casimiro de Abreu – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Cordeiro – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Duas Barras – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Duque de Caxias – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Duque de Caxias – RJ (Jardim Anhangá)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Duque de Caxias – RJ (Franciscão)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Duque de Caxias – RJ (Saracuruna)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Duque de Caxias – RJ (Campo do Guedes)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Engenheiro Paulo de Frontin – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Iguaba Grande – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Italva – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Itaocara – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Itaperuna – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Itatiaia – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Laje do Muriaé – RJ</li>
                    </ul>
                    <ul class="col-12 col-lg-4 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Macuco – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Mangaratiba – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Miracema – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Nova Friburgo – RJ (Cônego-Olaria)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Nova Friburgo – RJ (São Pedro-Lumiar)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Nova Iguaçu – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Pádua – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Petrópolis – RJ (Campo do Laginha)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Petrópolis – RJ (Itaipava)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Piraí – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio Bonito – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio Claro – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio das Ostras – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Araticum)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Bangu)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Campo do Anil)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Campo Grande)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Casinha)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Curicica)</li>
                    </ul>
                    <ul class="col-12 col-lg-4 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Marinha)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Ramos)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Realengo)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Santa Cruz)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Rio de Janeiro – RJ (Vila Valqueire)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>São Fidélis – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>São Gonçalo – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>São João de Meriti – RJ (Vila Olímpica)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>São João de Meriti – RJ (Thomazinho Gato Preto)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Sapucaia – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Saquarema – RJ (Bacaxá)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Saquarema – RJ (Sampaio Corrêa)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Sumidouro – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Tanguá – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Teresópolis – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Valença – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Varre-Sai – RJ</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Vassouras – RJ</li>
                    </ul>
                </div>
            </div>

            <!-- AMÁPA -->
            <div class="row col mt-2">
                <h5 class="col-12 btn btn-success" data-toggle="collapse" href="#collapseAP" role="button" aria-expanded="false" aria-controls="collapseAP">Amapa (20)</h5>
                <div class="collapse row w-100" id="collapseAP">
                    <ul class="col-12 col-lg-6 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Amapá – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Calçoene – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Cutias – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Ferreira Gomes – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Itaubal – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Laranjal do Jari – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Macapá – AP (Arena Muca)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Macapá – AP (Arena Pantanal)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Macapá – AP (Arena Santa Inês)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Macapá – AP (Arena Zerão)</li>
                    </ul>
                    <ul class="col-12 col-lg-6 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Mazagão – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Oiapoque – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Pedra Branca do Amapari – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Porto Grande – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Pracuuba – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Santana – AP (Arena Nalbert Lima)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Santana – AP (Arena Provedor)</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Serra do Navio – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Tartarugalzinho – AP</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Vitória do Jari – AP</li>
                    </ul>
                </div>
            </div>

            <!-- DISTRITO FEDERAL -->
            <div class="row col mt-2">
                <h5 class="col-12 btn btn-success" data-toggle="collapse" href="#collapseDF" role="button" aria-expanded="false" aria-controls="collapseDF">Distrito Federal (1)</h5>
                <div class="collapse row w-100" id="collapseDF">
                    <ul class="col-12 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Distrito Federal – DF</li>
                    </ul>
                </div>
            </div>

            <!-- PARANÁ -->
            <div class="row col mt-2">
                <h5 class="col-12 btn btn-success" data-toggle="collapse" href="#collapsePR" role="button" aria-expanded="false" aria-controls="collapsePR">Paraná (2)</h5>
                <div class="collapse row w-100" id="collapsePR">
                    <ul class="col-12 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Candói – PR</li>
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>Realeza – PR</li>
                    </ul>
                </div>
            </div>

            <!-- ACRE -->
            <div class="row col mt-2">
                <h5 class="col-12 btn btn-success" data-toggle="collapse" href="#collapseAC" role="button" aria-expanded="false" aria-controls="collapseAC">Acre (1)</h5>
                <div class="collapse row w-100" id="collapseAC">
                    <ul class="col-12 list-inline px-5">
                        <li><span class="fa fa-soccer-ball-o mr-2"></span>ACRE – AC</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div id="inscricao" class="shadow bg-light rounded p-5 my-5">

            <h2>Faça logo sua pré-inscrição!</h2>
            Preencha os campos abaixo e agilize a documentação. As vagas são limitadas!
            <BreezeValidationErrors class="mb-4" />
            
            <form @submit.prevent="submit">

                <h4 class="my-4">Informações Pessoais</h4>

                <div class="row">
                    <div class="form-group col-12">
                        <BreezeLabel for="nome" value="Nome" />
                        <BreezeInput id="nome" type="text" class="form-control" v-model="form.nome" required autofocus autocomplete="nome" />
                    </div>                
                
                    <div class="form-group col-4">
                        <BreezeLabel for="rg" value="RG" />
                        <BreezeInput id="rg" type="text" class="form-control" v-model="form.rg" required  autocomplete="rg" />
                    </div>
                
                    <div class="form-group col-4">
                        <BreezeLabel for="nascimento" value="Data Nascimento" />
                        <BreezeInput id="nascimento" type="date" class="form-control" v-model="form.nascimento" required autocomplete="nascimento" />
                    </div>
                
                    <div class="form-group col-4">
                        <BreezeLabel for="cpf" value="CPF" />
                        <BreezeInput id="cpf" type="text" class="form-control" v-model="form.cpf" required autocomplete="cpf" />
                    </div>
                
                    <div class="form-group col-6">
                        <div>
                            <p>Sexo</p>
                            <div class="form-check form-check-inline">
                                <BreezeInput type="radio" class="form-check-input" name="sexo" id="M" value="M" v-model="form.sexo"/>
                                <BreezeLabel for="M" value="Masculino" class="form-check-label" />
                            </div>
                            <div class="form-check form-check-inline">
                                <BreezeInput type="radio" class="form-check-input"  name="sexo" id="F" value="F" v-model="form.sexo"/>
                                <BreezeLabel for="F" value="Feminino" class="form-check-label" />
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="whatsapp" value="Whatsapp" />
                        <BreezeInput id="whatsapp" type="text" class="form-control" v-model="form.whatsapp" required  autocomplete="whatsapp" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="endereco" value="Endereço" />
                        <BreezeInput id="endereco" type="text" class="form-control" v-model="form.endereco" required  autocomplete="endereco" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="bairro" value="Bairro" />
                        <BreezeInput id="bairro" type="text" class="form-control" v-model="form.bairro" required autocomplete="bairro" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="cidade" value="Cidade" />
                        <BreezeInput id="cidade" type="text" class="form-control" v-model="form.cidade" required autocomplete="cidade" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="estado" value="Estado" />
                        <BreezeInput id="estado" type="text" class="form-control" v-model="form.estado" required autocomplete="estado" />
                    </div>
                
                    <div class="form-group col-12">
                        <BreezeLabel for="pai" value="Nome do Pai" />
                        <BreezeInput id="pai" type="text" class="form-control" v-model="form.pai" required autocomplete="pai" />
                    </div>
                
                    <div class="form-group col-12">
                        <BreezeLabel for="mae" value="Nome da Mãe" />
                        <BreezeInput id="mae" type="text" class="form-control" v-model="form.mae" required autocomplete="mae" />
                    </div>
                
                    <div class="form-group col-12">
                        <BreezeLabel for="responsavel" value="Responsável Legal" />
                        <BreezeInput id="responsavel" type="text" class="form-control" v-model="form.responsavel" required autocomplete="responsavel" />
                    </div>
                
                    <div class="form-group col-3">
                        <div>
                            <p></p>
                        <div class="form-check ">
                            
                            <BreezeInput type="checkbox" @change="onChange" class="form-check-input" name="deficiencia" id="deficiencia" v-model="form.deficiencia"/>
                            <BreezeLabel for="deficiencia" class="form-check-label" value="Possuo Deficiência" />
                        </div> 
                        </div>
                    </div> 
                    <div class="form-group col-9">    
                        <BreezeLabel for="desc_deficienca" value="Se sim, qual?" />
                        <BreezeInput id="desc_deficienca" type="text" class="form-control" v-model="form.desc_deficienca" autocomplete="desc_deficienca" />
                    </div>
                </div>
                <hr />
                <h4 class="my-4">Informações Escolares</h4>

                <div class="row">
                    <div class="form-group col-6">
                        <BreezeLabel for="unid_escolar" value="Unidade Escolar" />
                        <BreezeInput id="unid_escolar" type="text" class="form-control" v-model="form.unid_escolar" required autocomplete="unid_escolar" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="ano_escolar" value="Ano da Escolaridade" />
                        <BreezeInput id="ano_escolar" type="text" class="form-control" v-model="form.ano_escolar" required autocomplete="ano_escolar" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="endereco_escolar" value="Enderço da Escola" />
                        <BreezeInput id="endereco_escolar" type="text" class="form-control" v-model="form.endereco_escolar" required autocomplete="endereco_escolar" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="bairro_escolar" value="Bairro da Escola" />
                        <BreezeInput id="bairro_escolar" type="text" class="form-control" v-model="form.bairro_escolar" required autocomplete="bairro_escolar" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="cidade_escolar" value="Cidade da Escola" />
                        <BreezeInput id="cidade_escolar" type="text" class="form-control" v-model="form.cidade_escolar" required autocomplete="cidade_escolar" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="estado_escolar" value="Estado da Escola" />
                        <BreezeInput id="estado_escolar" type="text" class="form-control" v-model="form.estado_escolar" required autocomplete="estado_escolar" />
                    </div>
                
                    <div class="form-group col-6">
                        <BreezeLabel for="telefone_escolar" value="Telefone da Escola" />
                        <BreezeInput id="telefone_escolar" type="text" class="form-control" v-model="form.telefone_escolar" required autocomplete="telefone_escolar" />
                    </div>
                    <div class="form-group col-6">
                        <div>
                            <p>Origem Escolar</p>
                            <div class="form-check form-check-inline">
                                <BreezeInput name="origem" class="form-check-input" type="radio" id="particular" value="PARTICULAR" v-model="form.origem_escolar" />
                                <BreezeLabel class="form-check-label" for="particular" value="Particular"/>
                            </div>
                            <div class="form-check form-check-inline">
                                <BreezeInput name="origem" class="form-check-input" type="radio" id="estadual" value="ESTADUAL" v-model="form.origem_escolar" />
                                <BreezeLabel class="form-check-label" for="estadual" value="Estadual"/>
                            </div>
                            <div class="form-check form-check-inline">
                                <BreezeInput name="origem" class="form-check-input" type="radio" id="municipal" value="MUNICIPAL" v-model="form.origem_escolar" />
                                <BreezeLabel class="form-check-label" for="municipal" value="Municipal"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">                        
                    </div>
                    <div class="col-4">
                        <BreezeButton class="btn btn-primary btn-user btn-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Enviar Pré-Inscrição
                        </BreezeButton>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-2">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="/img/institulo_leo.png" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <img src="/img/brasil.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </footer>

</body>
</template>

<style scoped>
   /* .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }*/
</style>
