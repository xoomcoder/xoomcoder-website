
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
		<title>Workodin ReCoder</title>
    <style>
html, body {
    width:100%;
    height:100%;
}
.ed {
    width:100%;
    height:35vmin;
}
    </style>
	</head>
	<body>
		
<section>
    <div id="container" class="ed ed1"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.js"></script>
    <script>

// https://github.com/Microsoft/monaco-editor-samples/blob/master/sample-editor/index.html
require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs' }});
// Before loading vs/editor/editor.main, define a global MonacoEnvironment that overwrites
// the default worker url location (used when creating WebWorkers). The problem here is that
// HTML5 does not allow cross-domain web workers, so we need to proxy the instantiation of
// a web worker through a same-domain script
window.MonacoEnvironment = {
	getWorkerUrl: function(workerId, label) {
        return '/monaco-editor-worker-loader-proxy';
	}
};

require(['vs/editor/editor.main'], function() {
	var editor = monaco.editor.create(document.getElementById('container'), {
    	theme: "vs-dark"
	});
	
	htmlModel = monaco.editor.createModel("", "html");
		
    editor.setModel(htmlModel);

    // resize
    window.addEventListener('resize', function(){
       editor.layout(); 
    });
});



    </script>
</section>

	</body>
</html>