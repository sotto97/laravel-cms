<html>

<head>
    <link rel="stylesheet" href="https://unpkg.com/mavon-editor@2.7.4/dist/css/index.css">
</head>

<body>
    <div id="app">
        <h1>MavonEditor</h1>
        <mavon-editor :language="'ja'" v-model="context"></mavon-editor>
        <button type="button" class="btn btn-primary" @click="onSave">保存する</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/mavon-editor@2.7.4/dist/mavon-editor.js"></script>
    <script>
        Vue.use(window['MavonEditor'])
        var app = new Vue({
            el: '#app',
            data() {
                return {
                    test: 'test',
                    title: 'tiels',
                    context: ''
                }
            },
            methods: {
                onSave() {
                    if (confirm('保存しますか？')) {
                        let url = '/post';
                        let method = 'POST';
                        // const params = {
                        //     _method: method,
                        //     description: this.richEditor.getData()
                        // };
                        axios.post(url, {
                                title: this.title,
                                description: this.context
                            })
                            .then(response => {
                                // if (response.data.result === true) {
                                //     this.getPosts();
                                //     this.changeStatus('index');
                                // }
                                console.log(response);
                            })
                            .catch(error => {
                                console.log(error); // エラーの場合

                            });
                    }
                },
            }
        })

    </script>
</body>

</html>
