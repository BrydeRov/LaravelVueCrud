<template>
    <app-layout>

        <template #header>
            <h2>
                Registrar Usuario
            </h2>
        </template>

        <div class="container">

            <form @submit.prevent="submit">
                 <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" v-model="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" class="form-control" v-model="email" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" v-model="password" required>
                </div>
               
            
                <button class="btn btn-primary w-100" type="submit">Crear Usuario</button>
                
            </form>
             
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Inertia, useForm} from "@inertiajs/inertia"
export default{
    components: { AppLayout },
    setup() {
        const form = {
            
        }
    },

}
</script>