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


        <div class="row justify-content-center">
            <div v-for="book in books" class="columnas col-sm-6 col-lg-3 mb-4">
                <flip_card  
                    :src="book.image"
                    :href="route('books.show' , book.id)"
                    :title="book.title"
                    >
                </flip_card>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia"
import flip_card from "@/Components/flip_card";

export default{
    props:{
        books: Object,
    },
    components: { AppLayout, Link, flip_card, },
    data(){
        return{
            term: ''
        }
    },
    watch:{
        term: function (value){
            Inertia.replace(route('books.index' , {term: value}))
        }
    },
}

</script>

<style>
    /* @media only screen and (max-width: 1199px){
        .columnas{
            margin-left: 25px;
            margin-right: 25px;
        }
    } */
</style>