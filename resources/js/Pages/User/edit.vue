<template>
    <app-layout>

        <!-- Contenedor de Formulario -->
        <div class="container">

            <!-- Formulario Para Editar Usuario -->
            <form @submit.prevent="submit">
                <!-- Input de Nombre -->
                 <div class="form-group">
                    <label for="name">Nombre</label>                        
                    <input type="text" class="form-control" v-model="name">
                    <input-error :message="errors.name" />
                </div>
                <!-- Input de Correo -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" class="form-control" v-model="email" aria-describedby="emailHelp">
                    <input-error :message="errors.email" />
                </div>
                <!-- Input de Contraseña -->
                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" v-model="password">
                    <input-error :message="errors.password" />
                </div>               
                <!-- Botón para Envíar Formulario -->
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