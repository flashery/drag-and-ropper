<template>
    <div :id="id" class="card" :test="folder" :draggable="draggable" @dragstart="dragstart" @dragover.stop>
        <div>
            <h3>{{ title }}</h3>
            <img :src="img_src" />
        </div>
    </div>
</template>
<script>
export default {
    props: ['id', 'title', 'folder', 'draggable', 'img_src'],

    methods: {
        dragstart(e) {
            const target = e.target;
            e.dataTransfer.setData('card_id', target.id)
            e.dataTransfer.setData('folder', this.folder)

            // setTimeout(() => {
            //     target.style.display = "none";
            // }, 0);
        }
    }
}
</script>
<style>
.card {
    background: wheat;
    margin: 10px;
}
</style>