<template>
    <app-layout>
        <template #header>
            <h5>Users</h5>
        </template>
        <div>

            
            <Link :href="route('users.create')">
                <button type="button" class="btn btn-primary btn-lg btn-block my-4 w-100">Crear Usuario</button>
            </Link>
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="u in users" :key="u.id">
                    <!-- Fila de id's -->
                    <td scope="row">{{ u.id }}</td>
                    <!-- Fila de nombres -->
                    <td scope="row">{{ u.name }}</td>
                    <!-- Fial de correos -->
                    <td scope="row">{{ u.email }}</td>
                    <!-- Botones de Acciones -->
                    <td scope="row"> 
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <!-- Botón de Borrar -->
                        <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-trash"></i>                           
                        </button>
                        <!-- Botón de Editar -->
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-pencil"></i>
                            <!-- <Link :href="route('users.edit')"></Link> -->
                        </button>
                        </div>
                    </td>
                    </tr>                    
                </tbody>
            </table>
        </div>
        
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Link} from "@inertiajs/inertia-vue3"
export default{
    props: ['users'],
    components: { AppLayout, Link }
}

</script>