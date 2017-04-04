<template>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs nav-justified">
            <li v-for="step in steps" :class="{'active':step.active}" @click="stepChanged($event.target.id)">
                <a href="step.link" :id="step.id" :aria-controls="step.id" data-toggle="tab">{{ step.title }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <slot></slot>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat pull-left">Previos</button>
            <button type="submit" class="btn btn-primary btn-flat pull-right">Next</button>
        </div>
    </div>
</template>

<script>
    import {store} from './Store';
    export default {
        data () {
            return {
                steps: [],
                currentStep: store.CurrentStep
            }
        },
        mounted () {
            console.log('Component Mounted')
            this.$children.forEach( step => {
                if (step.active) {
                    this.currentStep = step.id
                }
                this.steps.push(step);
            })
        },
        methods: {
            stepChanged: function (step) {
                this.currentStep = step;
            }
        }
    }
</script>