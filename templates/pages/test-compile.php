<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <div id="app">
    </div>
    <!-- Add the following at the end of your body tag -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3.0.0/dist/vue.global.prod.js"></script>

    <script id="code1" type="text/x-template">
        <button @click="act1">
            Hello {{ name }} {{ count }}
        </button>
    </script>
    <script>
        let res = Vue.compile(code1.innerHTML);
        let serial = res.toString();
        console.log(serial);
        let render2 = new Function('_Vue', 'return ' + serial.toString())(Vue);

        console.log(render2);
        Vue.createApp({
            data: function() {
                return {
                    name: 'Xoom',
                    count: 0
                }
            },
            methods: {
                act1 (event) {
                    console.log(event.target);
                    this.count++;
                }
            },
            render: render2
        }).mount('#app')
    </script>
</body>

</html>