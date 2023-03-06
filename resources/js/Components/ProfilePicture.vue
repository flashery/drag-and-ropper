<template>
    <div id="profile" class="flex items-center justify-center">
        <img class="rounded-full" :src="user.mug">
    </div>
</template>
<script>
export default {
    props: ['user'],
}
</script>
<style>
#profile img {
    width: 7rem;
    height: 7rem;
    border-radius: 100%;
    text-align: center;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-top: -4.5rem;
    width: 10rem;
    height: 10rem;
    border-radius: 100%;
    box-sizing: content-box;
    pointer-events: none;
    user-select: none;
    margin-top: -6rem;
}
</style>