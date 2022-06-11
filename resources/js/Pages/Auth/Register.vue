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
    <BreezeGuestLayout>
        <Head title="Cadastrar" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">            

            <div class="mb-4">
                <BreezeLabel for="estado" value="Estado" />
                <BreezeInput id="estado" type="text" class="mt-1 block w-full" v-model="form.estado" required autofocus autocomplete="estado" />
            </div>

            <div class="mb-4">
                <BreezeLabel for="municipio" value="Município" />
                <BreezeInput id="municipio" type="text" class="mt-1 block w-full" v-model="form.municipio" required  autocomplete="municipio" />
            </div>

            <div class="mb-4">
                <BreezeLabel for="bairro" value="Bairro" />
                <BreezeInput id="bairro" type="text" class="mt-1 block w-full" v-model="form.bairro" required  autocomplete="bairro" />
            </div>

            <div class="mb-4">
                <BreezeLabel for="endereco" value="Endereco" />
                <BreezeInput id="endereco" type="text" class="mt-1 block w-full" v-model="form.endereco" required autocomplete="endereco" />
            </div>

            <div>
                <BreezeLabel for="parlamentar" value="Parlamentar" />
                <BreezeInput id="parlamentar" type="text" class="mt-1 block w-full" v-model="form.parlamentar" autocomplete="parlamentar" />
            </div>

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
</template>
