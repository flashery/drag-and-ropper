<template>
    <div id="cta"><a id="vcard" rel="noreferrer" :href="'/users/vcf/' + user.id" target="_self" aria-label="Save Contact"
            style="background-color: rgb(14, 14, 14); width: 90%; padding: 1rem 1.5rem;" href="moniccrider.vcf">
            <div class="icon action">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </div>
            <p class="action">Save Contact</p>
        </a></div>
</template>
<script>
export default {
    props: ['user'],
}
</script>
<style>
#cta {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 90%;
}

#vcard {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    justify-content: center;
    border-radius: 5rem;
    /* margin-top: 1.5rem; */
    margin-bottom: 1.5rem;
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    line-height: 0;
}

#vcard .icon {
    margin-right: 0.5rem;
}
</style>