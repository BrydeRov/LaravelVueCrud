<template>
    <app-layout>
        <template #header>
            <h2>Users</h2>
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
                    <th scope="col">Fecha Creación</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="u in users" :key="u.id">
                    <td scope="row">{{ u.id }}</td>
                    <td scope="row">{{ u.name }}</td>
                    <td scope="row">{{ u.email }}</td>
                    <td scope="row">{{ u.created_at}}</td>
                    <td scope="row">Acción</td>
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