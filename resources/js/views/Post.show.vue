<template>
    <div>
        <div class="container">
            pagina di dettaglio dei post
            {{$route.params.slug}}
        </div>
    </div>
</template>

<script>
export default{
    mounted(){
        console.log(this.$route)
    },
    beforeMount() {
        axios.get(`api/posts/${slug}`)
    }
}
</script>

<style lang="scss" scoped>

</style>