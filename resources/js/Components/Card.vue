<script setup>
import ProfilePicture from './ProfilePicture.vue';
</script>
<template>
    <div :id="id" class="card" :test="folder" :draggable="draggable" @dragstart="dragstart" @dragover.stop>
        <ProfilePicture :user="user"></ProfilePicture>
        <slot />
    </div>
</template>
<script>
export default {
    props: ['user'],
}
</script>
<style>
.card {
    background: rgb(243, 243, 243);
    margin: 10px;
    padding-bottom: 2rem;
    border-radius: 20px;
}
</style>