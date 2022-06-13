<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto mr-2">
            {{$page.props.auth.user.responsavel}}
        </ul>

        <div class="dropdown mr-3">
            <Link :href="route('logout')" method="post" as="button" class="btn">
                <i class="fa fa-sign-out"></i>
            </Link>
        </div>

    </nav>
</template>