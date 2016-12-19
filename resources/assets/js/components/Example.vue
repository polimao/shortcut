<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        test component test test TESTS limao {{ author }}
                    </div>
                    <hr/>
                    <div class="panel-body">
                         {{ articles }}123
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('test Component mounted.')
        },
        data () {
            return {
              author: "微信公众号 jinkey-love",
              articles : '',
            }
        },
        mounted: function() {
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
        }
    }



</script>
