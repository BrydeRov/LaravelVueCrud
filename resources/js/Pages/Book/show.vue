<template>
    <AppLayout>
            <template #header>{{book.id}}</template>

            <div class="card mb-3 w-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img :src="book.image" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">{{book.title}}</h2>
                            <p class="card-text">
                                {{book.synopsis}}
                            </p>
                            <p class="card-text"><small class="text-muted">{{book.author}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
export default{
    props: {book: Object},
    components: {AppLayout},
}
</script>