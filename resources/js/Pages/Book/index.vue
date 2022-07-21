<template>
    <app-layout>
        <template #header>
            <div class="row">
                <div class="col">
                    <h3>Books</h3>
                </div>
                <div class="col">
                     <div class="input-group mb-3 w-100">
                        <input v-model="term" type="text" class="form-control" placeholder="Buscar . . ."
                         aria-label="Buscar" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col">
                    <Link :href="route('books.create')" type="button" class="btn btn-outline-dark w-100">
                        <i class="bi bi-plus-circle"></i>
                        Crear
                    </Link>
                </div>
            </div>
        </template>

        
    
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div v-for="book in books" class="col mb-5">
                <flip_card class="my-5"
                    src="/images/PadreRicoPadrePobre.jpg"
                    :title="book.title"
                    :subtitle="book.author"
                    >
                </flip_card>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/inertia-vue3";
import flip_card from "@/Components/flip_card";

export default{
    props:{
        books: Object,
    },
    components: { AppLayout, Link, flip_card, },
}

</script>

