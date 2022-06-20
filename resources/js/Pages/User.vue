<template>
    <AppLayout>
        <template #header>
            <h2>User</h2>
        </template>

        <div>
            <pre>
                {{ users }}
            </pre>
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