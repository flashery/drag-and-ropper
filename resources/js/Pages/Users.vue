<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Logo from '../Components/Logo.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <notifications />

    <Head title="Users" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
        </template>

        <div style="background-color: #840202;" class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Logo></Logo>
                <h1>List of Agents</h1>
                <div class="flex items-center justify-center">

                    <div class="users">
                        <div v-for="user in users" class="user">
                            <div class="info">
                                <a target="_self" @click="load()" rel="noopener noreferrer" aria-label="website" :href="'users/' + user.id"
                                    style="background-color: rgb(14, 14, 14);">
                                    <img :src="user.mug">
                                    <p class="text">
                                        {{ user.first_name + " " + user.last_name }}
                                    </p>
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
    props: ['users'],
    mounted() {
        console.log()
    },
    methods: {
        load() {
            let loader = this.$loading.show({
                // Optional parameters
                container: this.fullPage ? null : this.$refs.formContainer,
                canCancel: true,
                onCancel: this.onCancel,
            });
            // simulate AJAX
            setTimeout(() => {
                loader.hide()
            }, 5000)
        }
    }
}
</script>
<style>
.st0Unique {
    fill: #fff !important
}

.users {
    margin: 2rem 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.user {
    padding: 0.5rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.user {
    width: 24.33%;
}

.user img {
    width: 7rem;
    height: 7rem;
    border-radius: 100%;
    text-align: center;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 10rem;
    height: 10rem;
    border-radius: 100%;
    box-sizing: content-box;
    pointer-events: none;
    user-select: none;
}

.info p {
    margin: 0.5rem 0 0;
    font-size: 0.875rem;
}

.text {
    text-align: center;
    line-height: 1.5;
    color: #ffffff !important;
}

h1 {
    text-align: center;
    font-size: 3rem;
    font-weight: bold;
    text-transform: uppercase;
    color: white;
}
</style>