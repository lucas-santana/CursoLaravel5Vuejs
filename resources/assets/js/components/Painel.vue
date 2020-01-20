<template>
<div v-bind:class="defineCor">
    <div class="panel-heading">{{titulo}}</div>

    <div class="panel-body">
        <slot></slot>
    </div>
</div>
</template>

<script>
    export default {
        "props":['titulo','cor'],
        computed: {
            defineCor:function(){
                return "panel "+(this.cor || "panel-default");
            }
        },
    }
</script>

<style media="screen">
.blue{
    border-color: #668eff;
}

.blue > .panel-heading {
    color: #3c763d;
    background-color: #668eff;
    border-color: #668eff;
}
</style>
