<template>
    <inertia-link :href="$page.props.app.url">
        <img
            :alt="$page.props.app.name"
            class="max-h-full text-white"
            :src="logoUrl"
        />
    </inertia-link>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
    data() {
        return {
            logoUrl: '/images/logo.png',
        };
    },
});
</script>
