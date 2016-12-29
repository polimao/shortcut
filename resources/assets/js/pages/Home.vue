<template>
<main-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1" style="text-align: center;">

            <!-- <a href="" class="btn btn-primary btn-inverse btn-homepage" v-for="ring in rings">{{ ring.name }}</a> -->

            <router-link
                :to="{ name: 'level', params: { id: ring.id }}"
                v-for="ring in rings"
                class="btn btn-primary btn-inverse btn-homepage">{{ ring.name }}</router-link>


                <!-- <div class="col-xs-2" style="padding: 0px">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           结果提示
                        </div>
                        <div class="panel-body">
                           <div class="btn-group">

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           按键说明
                        </div>
                        <div class="panel-body">
                           ↵ - 回车
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>

                </div>
                <div class="col-xs-2"  style="padding: 0px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           统计
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</main-layout>
</template>

<script>
    export default {
        mounted: function() {
            console.log('mounted')
            this.$http.jsonp('http://shortcut.com/api/rings', {}, {
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
        },
        data() {
            return {
                    command : '',
                    rings: []

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
</style>
