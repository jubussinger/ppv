<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    username: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
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
                                       <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                                            {{ status }}
                                        </div>
                                        <form @submit.prevent="submit" class="user">
                                            <BreezeLabel for="username" value="Usuário" />
                                            <div class="form-group">
                                                <BreezeInput id="username" type="text" class="form-control form-control-user" v-model="form.username" required autofocus autocomplete="username" />
                                            </div>
                                            <BreezeLabel for="password" value="Senha" />                
                                            <div class="form-group">
                                                <BreezeInput id="password" type="password" class="form-control form-control-user" v-model="form.password" required autocomplete="current-password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <br />
                                                </div>
                                            </div>

                                             <!--<BreezeCheckbox name="remember" v-model:checked="form.remember" />
                                             <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>-->
                                            <BreezeButton class="btn btn-primary btn-user btn-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                Entrar
                                            </BreezeButton>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <Link :href="route('register')" class="small">
                                                Não está cadastrado?
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
<!--<div id="app">
    <BreezeGuestLayout>
        <Head title="Entrar" />

        <BreezeValidationErrors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="username" value="Usuário" />
                <BreezeInput id="username" type="text" class="mt-1 block w-full" v-model="form.username" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Senha" />
                <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('register')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Não está cadastrado?
                </Link>

                <BreezeButton class="btn btn-primary btn-user btn-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Entrar
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
    </div>
-->
</template>
