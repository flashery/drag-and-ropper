<template>
    <div class="actionsC">
        <div class="actionBtn"><a :href="'tel:+' + user.phone" target="_blank" rel="noopener noreferrer" aria-label="Office"
                style="background-color: rgb(14, 14, 14);">
                <div class="icon action">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                </div>
            </a>
            <p class="text">
                Office
            </p>
        </div>
    </div>
    <div class="actionsC">
        <div class="actionBtn"><a :href="'tel:+' + user.phone" target="_blank" rel="noopener noreferrer" aria-label="Mobile"
                style="background-color: rgb(14, 14, 14);">
                <div class="icon action">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                </div>
            </a>
            <p class="text">
                Mobile
            </p>
        </div>
    </div>
    <div class="actionsC">
        <div class="actionBtn"><a :href="'SMS:+'+ user.phone" target="_blank" rel="noopener noreferrer" aria-label="SMS"
                style="background-color: rgb(14, 14, 14);">
                <div class="icon action">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                </div>
            </a>
            <p class="text">
                SMS
            </p>
        </div>
    </div>
    <div class="actionsC">
        <div class="actionBtn"><a :href="'mailto:'+ user.email" target="_blank" rel="noopener noreferrer"
                aria-label="email" style="background-color: rgb(14, 14, 14);">
                <div class="icon action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <path d="M22 6l-10 7L2 6"></path>
                    </svg></div>
            </a>
            <p class="text">
                Email
            </p>
        </div>
    </div>
    <div class="actionsC">
        <div class="actionBtn"><a target="_blank" rel="noopener noreferrer" aria-label="location"
                href="#"
                style="background-color: rgb(14, 14, 14);">
                <div class="icon action">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
            </a>
            <p class="text">
                Location
            </p>
        </div>
    </div>
    <div class="actionsC">
        <div class="actionBtn"><a target="_blank" rel="noopener noreferrer" aria-label="website"
                href="#" style="background-color: rgb(14, 14, 14);">
                <div class="icon action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path
                            d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z">
                        </path>
                    </svg></div>
            </a>
            <p class="text">
                Website
            </p>
        </div>
    </div>
</template>
<script>
export default {
    props: ['user'],
    mounted() {
        
        console.log('======================================', this.user);
        
    }
}
</script>

<style>
.st0Unique {
    fill: #fff !important
}

.actionsC {
    width: 33.33%;
}

.actionBtn {
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

.actionBtn a {
    border-radius: 100%;
    padding: 0.75rem;
    line-height: 0;
}

.actionBtn p {
    margin: 0.5rem 0 0;
    font-size: 0.875rem;
}

.text {
    text-align: center;
    line-height: 1.5;
    color: #000 !important;
}</style>