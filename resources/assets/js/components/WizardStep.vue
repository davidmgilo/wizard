<template>
    <div role="tabpanel" class="tab-pane" :class="{'active': isActive}" :id="id">
        <slot></slot>
    </div>
</template>

<script>
    import voca from 'voca'
    import {store} from './Store'
    export default {
        data () {
          return {
              currentStep: store.currentStep
          }
        },
        props:{
            title:{
                type: String,
                required: true
            }
        },
        computed : {
            isActive: function() {
              return this.currentStep === this.id
            },
            id: function(){
                return voca.latinise(voca.camelCase(this.title))
            },
            link: function(){
                return '#' + this.id
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
