<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dropzone {
            width: 30vmin;
            height: 30vmin;
            background-color: greenyellow;
        }
    </style>
</head>

<body>
    <h1>DROP</h1>
    <div class="dropzone"></div>
    <script>
        // https://www.smashingmagazine.com/2018/01/drag-drop-file-uploader-vanilla-js/
        let dropArea = document.querySelector('.dropzone');
        ['dragover', 'drop'].forEach(event => dropArea.addEventListener(event, e => e.preventDefault(), false));

        function processFile(file) {
            console.log(file);
            let name = file.name;
            let parts = name.split('.');
            let extension = '';
            if (parts.length > 1) {
                extension = parts.pop();
                console.log(extension);
            }
            let extensionOK = ['txt', 'php', 'css', 'js'];
            if (extensionOK.includes(extension)) {
                // read the file content as text
                let reader = new FileReader;
                reader.readAsText(file);
                reader.addEventListener('load', function(event) {
                    console.log(reader.result);
                });
            }
        }

        function handleDrop(event) {
            let files = event.dataTransfer.files;
            // console.log(files);
            [...files].forEach(processFile);
        }
        dropArea.addEventListener('drop', handleDrop, false);
    </script>
</body>

</html>