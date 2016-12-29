<template>
<main-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="col-xs-12" style="padding: 0px">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Level 列表
                        </div>
                        <div class="panel-body">
                        <router-link :to="{ name: 'key', params: { id: level.id }}" v-for="level in levels">{{ level.name }}</router-link>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</main-layout>
</template>

<script>
    export default {
        mounted: function() {
            console.log('mounted')
            this.$http.jsonp('http://shortcut.com/api/1/levels', {}, {
                headers: {

                },
                emulateJSON: true
            }).then(function(response) {
              // 这里是处理正确的回调
                this.levels       = response.data.levels;

            }, function(response) {
                // 这里是处理错误的回调
                console.log(response)
            });
        },
        data() {
            return {
                    levels : []

            }
        },
        methods:{

        },
        created()
        {
            console.log('created')

        }
    }



</script>
<style>

</style>
