<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <input type="date" v-model="dateRange.start" />
                    <input type="date" v-model="dateRange.end" />
                    <input
                        type="button"
                        value="submit"
                        v-on:click="setDateRange(dateRange)"
                    />
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
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</template>

<script>
export default {
    data() {
        return {
            url: "http://localhost/blog21320/public/",
            dateRange: {},
            posts: []
        };
    },
    methods: {
        setDateRange(dateRange) {
            axios.post("posts/get_all_details", dateRange).then(res => {
                this.posts = res.data;
            });
        }
    }
};
</script>
