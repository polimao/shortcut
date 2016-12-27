<template>

    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="col-xs-2" style="padding: 0px">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           结果提示
                        </div>
                        <div class="panel-body">



                        <input type="radio" id="hide" value="hide" v-model="capion">
                        <label for="hide"> 隐藏</label>
                        <br>
                        <input type="radio" id="display" value="display" v-model="capion">
                        <label for="display"> 显示</label>
                        <br>
                        <input type="radio" id="delay" value="delay" v-model="capion">
                        <label for="delay"> 延迟</label>
                        <br>
                        <span>Picked: {{ capion }}</span>


                        <hr/>
                           <div class="btn-group">
                               <button class="btn btn-default btn-xs" :class="{active: capion=='hide'}">隐藏</button>
                                <button class="btn btn-default btn-xs" :class="{active: capion=='display'}">显示</button>
                                <button class="btn btn-default btn-xs"  :class="{active: capion=='delay'}">延迟</button>
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
                            <h3 class="text-center">
                           <!--  <small>{{ cur_index+1 }}.</small> -->{{ cur.name }}</h3>
                            <input id="keyTextArea" class="input-lg form-control" rows="3" v-model="command" @keyup.enter="onEnter" :placeholder="cur.key"/>
                        </div>
                        <div class="panel-body">
                            <div :class="['alert',item.status?'alert-info':'alert-danger']" v-for="item in items">
                                <h4>{{ item.input }}</h4>
                                <strong>{{ item.name }}!</strong> {{ item.key }}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-2"  style="padding: 0px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           统计
                        </div>
                        <div class="panel-body">
                           <p>新：9</p>
                           <p>回顾：9</p>
                           <p>完成：9</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            console.log('mounted')
            this.$http.jsonp('http://shortcut.com/api/test', {}, {
                headers: {

                },
                emulateJSON: true
            }).then(function(response) {
              // 这里是处理正确的回调
                this.articles = response.data.key;
                console.log(response.data.key);
                // this.articles = response.data["subjects"] 也可以

            }, function(response) {
                // 这里是处理错误的回调
                console.log(response)
            });
        },
        data() {
            return {
                    command : '',
                    capion: 'hide',
                    cur_index : 0,
                    cur : [],
                    keys: [
                        {
                            'name' : '全选',
                            'key' : 'ctrla',
                        },
                        {
                            'name' : '复制',
                            'key' : 'ctrlc',
                        },
                        {
                            'name' : '粘贴',
                            'key' : 'ctrlv',
                        }
                    ],
                    items : []
            }
        },
        methods:{
            onEnter(){

                this.items.unshift({
                    key: this.cur.key,
                    name: this.cur.name,
                    input: this.command,
                    status: $.trim(this.command) == this.cur.key
                })


                this.cur = this.keys[this.cur_index]

                this.command = ''
                this.cur_index +=1
                if(!this.keys[this.cur_index])
                    this.cur_index = 0
            }
        },
        created()
        {
            console.log('created')
            this.cur = this.keys[this.cur_index]
        }
    }



</script>
<style>
    #keyTextArea{
        font-size: 30px;
        /*padding: 20px 0;*/
        height: 100px;
    }
</style>
