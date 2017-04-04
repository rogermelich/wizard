<template>
    <div role="tabpanel" class="tab-pane" :class="('active': active)"></div>
</template>

<script>

    export default {
        props: {
            title: {
                type: String,
                require: true
            },
            active: {
                type: [Boolean, String],
                default: false
            }
        },
        computed: {
            id: function () {
                return true
            },
            link: function () {
                return '#' + this.id
            }
        },
        mounted() {
            console.log('Component Mounted')
        }
    }
</script>