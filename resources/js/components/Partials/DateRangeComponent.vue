<template>
    
    <div class="container">
        <div class="row">
            <input type="date" v-model="dateRange.start">
            <input type="date" v-model="dateRange.end">
            <input type="button" value="submit" v-on:click="setDateRange(dateRange)">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="m-4" v-for="post in posts" :key="post.id">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div>
                                    {{ posts.title }}
                                </div>
                                <div class="ml-auto">
                                    {{ post.date }}
                                </div>   
                            </div>
                        </div>
                        <div class="card-body">
                            {{ post.body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            url: 'http://localhost/blog21320/public/',
            dateRange: {},
            posts: [],
        }
    },
    methods:{
        setDateRange(dateRange){
            axios.post('posts/get_all_details', dateRange)
            .then(res => {
                this.posts = res.data;
            })
        }
    }
}
</script>