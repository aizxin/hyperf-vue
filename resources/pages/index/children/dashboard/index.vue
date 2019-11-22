<template>
    <div id="dashboard">
        <app-card/>
    </div>
</template>
<script>
  import appCard from './components/card'

  export default {
    name: 'dashboard',
    data() {
      return {}
    },
    mounted() {
    },
    components: {
      appCard
    },
    methods: {}
  }
</script>
<style lang='stylus' scoped>
    #dashboard {
        padding-top: 10px;
        padding-bottom: 20px;
        padding-right: 30px;
        background-color: #fff;
    }
</style>
