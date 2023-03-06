<template>
    <div :id="id" class="board" @dragover.prevent @drop.prevent="drop">
        <h3>{{ title }}</h3>
        <slot />
    </div>
</template>
<script>
export default {
    props: ['id', 'title'],
    methods: {
        drop(e) {
            const validated = this.validate(e);

            if (!validated) {
                this.$notify({ type: "error", text: "This item is not belong to this directory" });
                return
            }

            this.$notify({ type: "success", text: "Item added successfully" });
            const card_id = e.dataTransfer.getData('card_id');
            const card = document.getElementById(card_id);
            

            card.style.display = "block";
            e.target.appendChild(card);
        },
        validate(e) {
            const folder = e.dataTransfer.getData('folder');

            if ('Common' === this.title) return true

            if (folder !== this.title) return false

            return true

        }
    }
}
</script>
<style>
.board {
    background: white;
    border: 1px solid black;
    padding: 20px;
    color: black;
    float: left;
    width: 300px;
    height: auto;
    margin: 20px;
}
</style>