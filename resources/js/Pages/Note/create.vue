<template>
    <app-layout>

        <template #header>
            <h2>
                Registrar Usuario
            </h2>
        </template>

        <div class="container border rounded p-5">
            <form @submit.prevent="submit">

                <div class="form-floating mb-3">
                    <input type="text" v-model="form.excerpt" class="form-control" id="floatingInput" placeholder="Note Excerpt">
                    <label for="floatingInput">Note Excerpt</label>
                    </div>
                    <div class="form-floating">
                    <input type="text" v-model="form.content" class="form-control" id="NoteContent" placeholder="Note Content">
                    <label for="NoteContent">Note Content</label>
                </div>

                <button class="btn my-4 btn-dark w-100" type="submit">Crear Nota</button>
                
            </form>
             
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Inertia} from "@inertiajs/inertia"
import InputError from "@/Jetstream/InputError"
import { reactive } from 'vue'

export default{
    props: {errors: Object},
    components: { 
        AppLayout, 
        InputError 
    },
    setup () {
        const form = reactive ({
            'excerpt': null,
            'content': null
        })


        function submit() {
            Inertia.post(route('notes.store') , form)
        }

        return {form , submit}
    },

}

</script>