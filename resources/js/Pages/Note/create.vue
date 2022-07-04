<template>
    <app-layout>

        <template #header>
            <h2>
                Crear una nota 
            </h2>
        </template>

        <div class="container border rounded p-5">
            <form @submit.prevent="submit">

                <div class="form-floating mb-3">
                    <input type="text" v-model="form.excerpt" class="form-control" id="floatingInput" placeholder="Note Excerpt">
                    <label for="floatingInput">Note Excerpt</label>
                    <input-error :message="errors.excerpt" />
                </div>
                <div class="form-floating">
                    <input type="text" v-model="form.content" class="form-control" id="NoteContent" placeholder="Note Content">
                    <label for="NoteContent">Note Content</label>
                    <input-error :message="errors.content" />
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
import { useForm } from "@inertiajs/inertia-vue3"
import Swal from 'sweetalert2'


export default{
    props: {errors: Object},
    components: { 
        AppLayout, 
        InputError 
    },
    setup (props, errors) {
        const form = useForm ( props.note )


        function submit() {
            Inertia.post(route('notes.store') , form);

            if(errors.isEmpty){
                const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })

                Toast.fire({
                icon: 'success',
                title: 'Note Created Succesfully'
                })
            }
        }

        return {form , submit}
    },

}

</script>