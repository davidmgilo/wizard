<template>
    <div role="tabpanel" class="tab-pane" :class="{'active': active}" id="id">
        <slot></slot>
    </div>
</template>

<script>
    import voca from 'voca'
    export default {
        props:{
            title:{
                type: String,
                required: true
            },
            active:{
                type:[Boolean,String],
                default:false
            }
        },
        computed : {
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
