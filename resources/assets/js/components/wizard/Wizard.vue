<template>
    <div class="nav-tabs-custom" >
        <div class="progress progress-sm active">
            <div class="progress-bar progress-bar-success progress-bar-striped"
                 role="progressbar" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100"
                 :style="'width: ' + progress +'%'">
                <span class="sr-only">{{ progress }}% Complete</span>
            </div>
        </div>

        <ul class="nav nav-tabs nav-justified">
            <li v-for="step in steps" :class="{'active':step.isActive}" @click="stepChanged($event.target.id)">
                <a :href="step.link" :id="step.id" :aria-controls="step.id">{{step.title}}</a>
            </li>
        </ul>
        <div class="tab-content">
            <slot></slot>
        </div>
        <div class="box-footer">

            <button type="submit" class="btn btn-primary btn-flat pull-left" v-if="!first" @click="previous()"><i v-if="rewinding" class="fa fa-refresh fa-spin"></i> Previous</button>
            <button type="submit" class="btn btn-primary btn-flat pull-right" v-if="!last" @click="tryNext()"><i v-if="forwarding" class="fa fa-refresh fa-spin"></i> Next</button>
            <button type="submit" class="btn btn-primary btn-flat pull-right" v-if="last" @click="finish()"><i v-if="finishing" class="fa fa-refresh fa-spin"> Finish</i></button>

        </div>
    </div>
</template>

<script>
    import {state,store} from './Store'
    export default {
        data () {
            return {
                steps: [],
                state: state,
                progress: 0,
                forwarding: false,
                rewinding: false,
                finishing: false
            }
        },
        mounted() {
            this.$children.forEach( step => {
                if (step.active) {
                    store.changeStep(step.id)
                }
                this.steps.push(step);
            })
            this.onFormSubmit()
        },
        methods: {
            stepChanged: function(step) {
                store.changeStep(step)
            },
            getStepByNumber: function(step) {
                return this.stepsByName[step -1]
            },
            next: function() {
                if (this.currentStepNumber + 1 <= this.steps.length) {
                    store.changeStep(this.getStepByNumber(this.currentStepNumber + 1))
                    this.forwarding = false
                }
            },
            tryNext: function() {
                this.forwarding = true
                //NORMALLY NOT ALWAYS THIS IS GOOD! DON'T DO THAT -> Parent coupled to child not FIRST (I independent / isolated)
                //this.$children[this.currentStepNumber].doSomething
                // Submitting form
                ////this.$children[this.currentStepNumber].$children[0].submit()
                this.$bus.$emit('wizardNext',this.currentStepNumber)
            },
            previous: function() {
                if (this.currentStepNumber - 1 >= 0) {
                    store.changeStep(this.getStepByNumber(this.currentStepNumber - 1))
                }
            },
            finish: function() {
                console.log('TODO FINISH EVENT!')
            },
            changeProgress : function() {
                console.log('TODO CHANGE PROGRESS EVENT!')
            },
            onFormSubmit() {
                this.$bus.$on('formSubmit', ()=> {
                    this.next();
                });
            }
        },
        computed: {
            stepsByName: function() {
                return this.steps.map( step => step.id)
            },
            currentStepNumber: function() {
                return this.stepsByName.indexOf(state.currentStep) + 1
            },
            first: function() {
                return this.currentStepNumber === 1
            },
            last: function() {
                return this.currentStepNumber === this.steps.length
            }
        }
    }
</script>