<template>
    <AppLayout>

        <template #header>
            <h2>
                Editar una nota 
            </h2>
        </template>

        <div class="container w-75 border rounded p-3">
            <form @submit.prevent="submit">
                
                <div class="mb-3">
                    <label class="form-label" for="floatingTextarea2">Note Excerpt</label>
                    <textarea 
                        v-model="form.excerpt"  
                        class="form-control" 
                        placeholder="Note Excerpt" 
                        id="floatingTextarea2" 
                        style="height: 100px">
                    </textarea>
                </div> 
                
                <div class="mb-3">
                    <label class="form-label" for="floatingTextarea2">Note Content</label>
                    <textarea 
                        v-model="form.content"  
                        class="form-control" 
                        placeholder="Note Content" 
                        id="floatingTextarea2" 
                        style="height: 150px"
                        rows="10">
                    </textarea>
                </div> 


                <button class="btn mt-4 mb-2 btn-dark w-100" type="submit">Editar Nota</button>
                
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