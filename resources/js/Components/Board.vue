<script setup>
import Logo from './Logo.vue';
</script>
<template>
    <div :id="id" class="board" @dragover.prevent @drop.prevent="drop">
        <Logo></Logo>
        <slot />
    </div>
</template>
<script>
</script>
<style>
.board {
    background-color: #840202;
    padding: 20px;
    color: black;
    width: 500px;
    margin: 20px auto;
}
</style>