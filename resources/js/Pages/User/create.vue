<template>
    <app-layout>

        <template #header>
            <h2>
                Registrar Usuario
            </h2>
        </template>

        <div class="container">


            <!-- <div v-if="Object.keys(errors).length" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Campos vacios</strong>
                 <div class="">
                    <ul>
                        <li v-for="error in errors" v-bind:key="error">
                            {{error}}
                        </li>
                    </ul>
                 </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->


            <form @submit.prevent="submit">
                 <div class="form-group">
                    <label for="name">Nombre</label>                        
                    <input type="text" class="form-control" v-model="name">
                    <input-error :message="errors.name" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" class="form-control" v-model="email" aria-describedby="emailHelp">
                    <input-error :message="errors.email" />
                </div>

                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" v-model="password">
                    <input-error :message="errors.password" />
                </div>
               
            
                <button class="btn btn-primary w-100 text-light" type="submit">Crear Usuario</button>
                
            </form>
             
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Inertia} from "@inertiajs/inertia"
import InputError from "@/Jetstream/InputError"

export default{
    props: {errors: Object},
    components: { 
        AppLayout, 
        InputError 
    },
    methods: {
        submit(){
            Inertia.post(route('users.store'), {
                name: this.name,
                email: this.email,
                password: this.password,
            })
        }
    },

}

</script>