<template>
    <app-layout>

        <template #header>
            <h2>
                Agregar Libro
            </h2>
        </template>

        <div class="container border rounded p-5">
            <form @submit.prevent="submit" enctype="multipart/form-data">

                <div class="form-floating mb-3">
                    <input type="text" v-model="form.title" class="form-control" id="floatingInput" placeholder="Note Excerpt">
                    <label for="floatingInput">Titulo del libro</label>
                    <input-error :message="errors.title" />
                </div>
                
                 <div class="form-floating mb-3">
                    <input type="text" v-model="form.author" class="form-control" id="floatingInput" placeholder="Note Excerpt">
                    <label for="floatingInput">Autor</label>
                    <input-error :message="errors.author" />
                </div>

                <div class="form-floating mb-3">
                    <input type="text" v-model="form.synopsis" class="form-control" id="NoteContent" placeholder="Note Content">
                    <label for="NoteContent">Synopsist</label>
                    <input-error :message="errors.synopsis" />
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Páginas</span>
                    <input v-model="form.pages" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <button class="btn my-4 btn-dark w-100" type="submit">Agregar</button>
                
            </form>
             
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Inertia} from "@inertiajs/inertia"
import InputError from "@/Jetstream/InputError"
import { useForm } from "@inertiajs/inertia-vue3"


export default{
    props: {errors: Object},
    components: { 
        AppLayout, 
        InputError 
    },
    setup (props) {
        const form = useForm ( props.book )


        function submit() {
            Inertia.post(route('books.store') , form);
        }

        return {form , submit}
    },

}

</script>