<template>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="text-center">{{ cur.name }}</h1>
                        <textarea class="form-control" rows="3" v-model="command" @keyup.enter="onEnter"></textarea>
                    </div>
                </div>

                <div class="alert alert-info" v-for="item in items">
                    <h4>{{ item.input }}!</h4>
                    <strong>{{ item.name }}!</strong> {{ item.key }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('test Component mounted.')
            this.cur = this.keys[this.cur_index]
            console.log(this.cur,1)
        },
        data() {
            return {
                    author: "微信公众号 jinkey-love",
                    articles : '',
                    command : '',
                    cur_index : 0,
                    cur : [],
                    keys: [
                        {
                            'name' : '全选',
                            'key' : 'ctrl+a',
                        },
                        {
                            'name' : '复制',
                            'key' : 'ctrl+c',
                        },
                        {
                            'name' : '粘贴',
                            'key' : 'ctrl+v',
                        }
                    ],
                    items : []
            }
        },
        methods:{
            finish(command){
                this.command = ''
                alert(command)
            },
            onEnter(){
                this.cur = this.keys[this.cur_index]
                this.items.unshift({
                    key: this.cur.key,
                    name: this.cur.name,
                    input: this.command
                })
                this.command = ''
                this.cur_index +=1
                if(!this.keys[this.cur_index])
                    alert('闯关结束')
                else
                    this.cur = this.keys[this.cur_index]
            }
        },
        // mounted: function() {
        //     this.$http.jsonp('http://shortcut.com/api/test', {}, {
        //         headers: {

        //         },
        //         emulateJSON: true
        //     }).then(function(response) {
        //       // 这里是处理正确的回调
        //         this.articles = response.data.key;
        //         console.log(response.data.key);
        //         // this.articles = response.data["subjects"] 也可以

        //     }, function(response) {
        //         // 这里是处理错误的回调
        //         console.log(response)
        //     });
        // }
    }



</script>
