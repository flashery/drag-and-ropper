<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Board from '../Components/Board.vue';
import Card from '../Components/Card.vue';
import Action from '../Components/action/Index.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <notifications />

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div style="background-color: #840202;" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-center"   >
           
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
    data: () => {
        return {
            boards: [
                {
                    id: 'board-1',
                    title: "Common",
                    cards: [
                        {
                            id: 'card-1',
                            title: "Himachal",
                            folder: "India",
                            img_src: "https://lp-cms-production.imgix.net/2019-06/GettyImages-149353949_high.jpg?fit=crop&q=40&sharp=10&vib=20&auto=format&ixlib=react-8.6.4",
                            draggable: true,
                        },
                        {
                            id: 'card-2',
                            title: "Gujrat",
                            folder: "India",
                            img_src: "https://garvigujarati.com/wp-content/uploads/2019/11/Somnath-Temple.jpg",
                            draggable: true,
                        },
                        {
                            id: 'card-3',
                            title: "Manila",
                            folder: "Philippines",
                            img_src: "https://specials-images.forbesimg.com/imageserve/904288674/960x0.jpg?fit=scale",
                            draggable: true,
                        },
                        {
                            id: 'card-4',
                            title: "Cebu",
                            folder: "Philippines",
                            img_src: "https://www.madmonkeyhostels.com/wp-content/uploads/2018/10/shutterstock_cebu-.jpg",
                            draggable: true,
                        },
                    ]
                },
                {
                    id: 'board-2',
                    title: "India"
                },
                {
                    id: 'board-3',
                    title: "Philippines"
                },
            ],
        }
    }
}
</script>