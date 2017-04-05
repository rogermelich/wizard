<template>
    <div role="tabpanel" class="tab-pane" :class="{'active': isActive}" :id="id">
        <slot></slot>
    </div>
</template>

<script>
    import voca from 'voca'
    import {state,store} from './Store'
    export default {
        data () {
            return {
                state: state,
            }
        },
        props: {
            title: {
                type: String,
                require: true
            },
            active: {
                type: [String, Boolean],
                default: false
            }
        },
        computed: {
            isActive: function() {
                return state.currentStep === this.id
            },
            id: function () {
                return voca.latinise(voca.camelCase(this.title))
            },
            link: function () {
                return '#' + this.id
            }
        },
        mounted() {
            console.log('Component Mounted to Wizard Step')
        }
    }
</script>