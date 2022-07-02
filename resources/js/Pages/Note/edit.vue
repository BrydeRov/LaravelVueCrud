<template>
    <AppLayout>

        <template #header>
            <h2>
                Editar una nota 
            </h2>
        </template>

        <div class="container border rounded p-5">
            <form @submit.prevent="submit">

                <div class="form-floating mb-3">
                    <input type="text" 
                    v-model="form.excerpt" 
                    class="form-control" 
                    id="floatingInput" 
                    placeholder="Note Excerpt">
                    <label for="floatingInput">Note Excerpt</label>
                </div>
                <div class="form-floating">
                    <input type="text" v-model="form.content" class="form-control" id="NoteContent" placeholder="Note Content">
                    <label for="NoteContent">Note Content</label>
                </div>

                <button class="btn my-4 btn-dark w-100" type="submit">Editar Nota</button>
                
            </form>
             
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Inertia} from "@inertiajs/inertia"
import InputError from "@/Jetstream/InputError"
import { useForm } from "@inertiajs/inertia-vue3"

export default{
    props: {note: Object},
    components: { 
        AppLayout, 
        InputError 
    },
    setup (props) {
        const form = useForm ( props.note )

        function submit() {
            Inertia.patch(route('notes.update' , props.note) , form)
        }


        return {form , submit}
    },

}

</script>