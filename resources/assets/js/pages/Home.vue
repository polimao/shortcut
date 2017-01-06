<template>
<main-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1" style="text-align: center;">

            <transition-group name="list-complete" tag="p">
                <span class="list-complete-item" :key="ring" v-for="ring in rings">
                <router-link
                    :to="{ name: 'level', params: { id: ring.id }}"
                    class="btn btn-default btn-inverse btn-homepage"
                    >{{ ring.name }}</router-link>

                </span>
              </transition-group>

              <button @click="onEnter"></button>


        </div>
    </div>
</main-layout>
</template>

<script>
    export default {
        mounted: function() {
            console.log('mounted')
            this.$http.jsonp('http://123.207.25.17/api/rings', {}, {
                headers: {

                },
                emulateJSON: true
            }).then(function(response) {
              // 这里是处理正确的回调
                this.rings       = response.data.rings;

            }, function(response) {
                // 这里是处理错误的回调
                console.log(response)
            });

            this.timer = setInterval(function(){
                console.log('--------------')
                this.rings = _.shuffle(this.rings)
            },1300)
        },
        data() {
            return {
                    command : '',
                    rings: []

            }
        },
        methods:{
            onEnter()
            {
                this.rings = _.shuffle(this.rings)
                console.log(23)
            }
        },
        created()
        {
            console.log('created')

        },
        beforeDestroy () {
            clearInterval(this.timer)
        },
    }



</script>
<style>
.btn-homepage {
    padding: 8px 8px;
    font-size: 16px;
    font-weight: bold;
    margin-right: 4px;
    min-width: 80px;
}

.btn-inverse {
    /*color: #ffffff;*/
    /*background-color: #404041;*/
    /*border-color: #333334;*/
}



.list-complete-item {
  transition: all 1s;
  display: inline-block;
  margin-right: 10px;
}
.list-complete-enter, .list-complete-leave-active {
  opacity: 0;
  transform: translateY(30px);
}
.list-complete-leave-active {
  position: absolute;
}
</style>
