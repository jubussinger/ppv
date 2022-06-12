<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({    
    municipio: '',
    bairro: '',
    estado: '',
    parlamentar: '',
    emenda: '',
    responsavel: '',
    whatsapp: '',
    endereco: '',
    inauguracao: '',
    username: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Cadastrar" />
    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 col-12 text-center mx-auto my-5 m-lg-auto">
                                    <img src="/img/Passaporte-branca-300x180.png" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <BreezeValidationErrors class="mb-4" />

                                        <form @submit.prevent="submit">
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <BreezeLabel for="endereco" value="Endereço" />
                                                    <BreezeInput id="endereco" type="text" class="form-control" v-model="form.endereco" required autofocus autocomplete="endereco" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="estado" value="Estado" />
                                                    <BreezeInput id="estado" type="text" class="form-control" v-model="form.estado" required autofocus autocomplete="estado" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="municipio" value="Município" />
                                                    <BreezeInput id="municipio" type="text" class="form-control" v-model="form.municipio" required  autocomplete="municipio" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="bairro" value="Bairro" />
                                                    <BreezeInput id="bairro" type="text" class="form-control" v-model="form.bairro" required autocomplete="bairro" />
                                                </div>                                                
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="parlamentar" value="Parlamentar" />
                                                    <BreezeInput id="parlamentar" type="text" class="form-control" v-model="form.parlamentar" required autocomplete="parlamentar" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="emenda" value="Emenda" />
                                                    <BreezeInput id="emenda" type="text" class="form-control" v-model="form.emenda" required autocomplete="emenda" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="whatsapp" value="Whatsapp" />
                                                    <BreezeInput id="whatsapp" type="text" class="form-control" v-model="form.whatsapp" required autocomplete="whatsapp" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="responsavel" value="Responsável" />
                                                    <BreezeInput id="responsavel" type="text" class="form-control" v-model="form.responsavel" required autocomplete="responsavel" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="inauguracao" value="Inauguraçâo" />
                                                    <BreezeInput id="inauguracao" type="date" class="form-control" v-model="form.inauguracao" required autocomplete="inauguracao" />
                                                </div>
                                                <div class="form-group col-12">
                                                    <BreezeLabel for="username" value="Usuário" />
                                                    <BreezeInput id="username" type="text" class="form-control" v-model="form.username" required autocomplete="username" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="password" value="Senha" />
                                                    <BreezeInput id="password" type="password" class="form-control" v-model="form.password" required autocomplete="password" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <BreezeLabel for="password_confirmation" value="Confirmar Senha" />
                                                    <BreezeInput id="password_confirmation" type="password" class="form-control" v-model="form.password_confirmation" required autocomplete="password_confirmation" />
                                                </div>
                                            </div>

                                            <BreezeButton class="btn btn-primary col-12" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                Cadastrar
                                            </BreezeButton>
                                        </form>
                    

                                        <hr>
                                        <div class="text-center">
                                            <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                                                    Já está cadastrado?
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>
    <!--
    <BreezeGuestLayout>
        <Head title="Cadastrar" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">           

            <div>
                <BreezeLabel for="emenda" value="Emenda" />
                <BreezeInput id="emenda" type="text" class="mt-1 block w-full" v-model="form.emenda" autocomplete="emenda" />
            </div>

            <div class="mb-4">
                <BreezeLabel for="responsavel" value="Responsavel" />
                <BreezeInput id="responsavel" type="text" class="mt-1 block w-full" v-model="form.responsavel" required autocomplete="responsavel" />
            </div>

            <div class="mb-4">
                <BreezeLabel for="whatsapp" value="Whatsapp" />
                <BreezeInput id="whatsapp" type="text"  class="mt-1 block w-full" v-model="form.whatsapp" required autocomplete="whatsapp" />
            </div>            

            <div class="mb-4">
                <BreezeLabel for="inauguracao" value="Inauguracao" />
                <BreezeInput id="inauguracao" type="date" class="mt-1 block w-full" v-model="form.inauguracao" required autocomplete="inauguracao" />
            </div>

            <div class="mb-4">
                <BreezeLabel for="username" value="Usuário" />
                <BreezeInput id="username" type="text" class="mt-1 block w-full" v-model="form.username" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Senha" />
                <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password_confirmation" value="Confirmar Senha" />
                <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Já está cadastrado?
                </Link>

                <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Cadastrar
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
    -->
</template>
