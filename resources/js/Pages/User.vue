<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Board from '../Components/Board.vue';
import Card from '../Components/Card.vue';
import Action from '../Components/action/Index.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <notifications />

    <Head title="User View" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">User View</h2>
        </template>

        <div style="background-color: #840202;" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-center">
                    <Board>
                        <Card :user="user">
                            <Action :user="user"></Action>
                        </Card>
                    </Board>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
    props: ['user'],
}
</script>