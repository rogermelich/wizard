<template>
    <div class="nav-tabs-custom">
        <div class="progress progress-sm active">
            <div class="progress-bar progress-bar-success progress-bar-striped"
                 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                 style="width: 25%">
                <span class="sr-only">25% Complete</span>
            </div>
        </div>

        <ul class="nav nav-tabs nav-justified">
            <li v-for="step in steps" :class="{'active':step.isActive}" @click="stepChanged($event.target.id)">
                <a :href="step.link" :id="step.id" :aria-controls="step.id" data-toggle="tab">{{ step.title }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <slot></slot>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat pull-left" v-if="!first" @click="previous()">
                Previous
            </button>
            <button type="submit" class="btn btn-primary btn-flat pull-right" v-if="!last" @click="next()">Next</button>
            <button type="submit" class="btn btn-primary btn-flat pull-right" v-if="last" @click="finish()">Finish
            </button>
        </div>
    </div>
</template>

<script>
    import {state, store} from './Store';
    export default {
        data () {
            return {
                steps: [],
                state: state,
            }
        },
        mounted () {
            console.log('Component Mounted to Wizard')
            this.$children.forEach(step => {
                if (step.active) {
                    store.changeStep(step.id)
                }
                this.steps.push(step);
            })
        },
        methods: {
            stepChanged: function (step) {
                store.changeStep(step)
            },
            getStepByNumber: function (step) {
                return this.stepsByName[step - 1]
            },
            next: function () {
                if (this.currentStepNumber + 1 <= this.steps.length) {
                    store.changeStep(this.getStepByNumber(this.currentStepNumber + 1))
                }
            },
            previous: function () {
                if (this.currentStepNumber - 1 >= 0) {
                    store.changeStep(this.getStepByNumber(this.currentStepNumber - 1))
                }
            },
            finish: function () {
                console.log('FINISH TODO')
            }
        },
        computed: {
            stepsByName: function () {
                return this.steps.map(step => step.id)
            },
            currentStepNumber: function () {
                return this.stepsByName.indexOf(state.currentStep) + 1
            },
            first: function () {
                return this.currentStepNumber === 1
            },
            last: function () {
                return this.currentStepNumber === this.steps.length
            }
        }
    }
</script>