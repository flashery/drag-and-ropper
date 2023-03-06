<script setup>
import Cta from './CallToAction.vue';
import Actions from './Actions.vue';

</script>
<template>
    <div class="actions">
        <Cta :user="user"></Cta>
        <Actions :user="user"></Actions>
    </div>
</template>
<script>
export default {
    props: ['user']
}
</script>
<style>
.actions {
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

.action {
    color: #fff;
}
</style>