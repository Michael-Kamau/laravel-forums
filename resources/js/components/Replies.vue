<template>
<div>
    <dv v-for="reply in items">
        <reply :data="reply"></reply>
    </dv>
</div>
</template>

<script>
    import Reply from "./Reply.vue";
    export default {
        name: "Replies.vue",
        props:['data'],
        data(){
            return{
                items:this.data
            }
        }
    }
</script>

<style scoped>

</style>
