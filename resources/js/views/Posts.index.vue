<template>
    <div>
        <div class="container">
            <div v-for="post in posts" :key="post.id">
                {{post.title}}
            </div>
        </div>
    </div>
</template>

<script>
export default{
    data() {
        return {
            posts: []
        }      
    },
    methods: {
        catchPosts(){
            axios.get('/api/posts')
            .then( res => {
                const {posts} = res.data
                this.posts = posts
            })
        }   
    },
    mounted() {
        this.catchPosts();
    }
}
</script>

<style lang="scss" scoped>

</style>