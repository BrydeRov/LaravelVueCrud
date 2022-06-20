<template>
    <AppLayout>
        <template #header>
            <h2>User</h2>
        </template>

        <div>
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="p-3">id</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="u in users" :key="u.id">
                        <td class="p-3 border">{{ u.id }}</td>
                        <td class="p-3 border">{{ u.name }}</td>
                        <td class="p-3 border">{{ u.email }}</td>
                        <td class="p-3 border">Acciones</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </Applayout>
</template>

<script>
import AppLayout from '../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Layouts/AppLayout.vue';
export default{
    props: ['users'],
    components: { AppLayout }
}
</script><template>
    <AppLayout>
        <template #header>
            <h2>User</h2>
        </template>

        <div>
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="p-3">id</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="u in users" :key="u.id">
                        <td class="p-3 border">{{ u.id }}</td>
                        <td class="p-3 border">{{ u.name }}</td>
                        <td class="p-3 border">{{ u.email }}</td>
                        <td class="p-3 border">Acciones</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </Applayout>
</template>

<script>
import AppLayout from '../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Layouts/AppLayout.vue';
export default{
    props: ['users'],
    components: { AppLayout }
}
</script>