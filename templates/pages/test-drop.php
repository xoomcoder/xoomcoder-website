<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
            font-size:16px;
        }
        .dropzone {
            width: 30vmin;
            height: 30vmin;
            background-color: greenyellow;
        }

        .uploadzone>* {
            width: 10vmin;
            height: 10vmin;
            background-color: greenyellow;
            display: inline-block;
            overflow: hidden;
            margin: 0.5rem;
        }

        img {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <h1>DROP</h1>
    <div class="dropzone"></div>
    <div class="uploadzone"></div>
    <script>
        // https://www.smashingmagazine.com/2018/01/drag-drop-file-uploader-vanilla-js/
        let dropArea = document.querySelector('.dropzone');
        let uploadArea = document.querySelector('.uploadzone');

        dropArea.addEventListener('dragover', e => e.preventDefault());

        function processFile(file) {
            console.log(file);
            let name = file.name;
            let parts = name.split('.');
            let extension = '';
            if (parts.length > 1) {
                extension = parts.pop();
                console.log(extension);
            }
            let extensionTextOK = ['txt', 'php', 'css', 'js'];
            if (extensionTextOK.includes(extension)) {
                // read the file content as text
                // https://developer.mozilla.org/fr/docs/Web/API/FileReader/readAsText
                let reader = new FileReader;
                reader.readAsText(file);
                reader.addEventListener('loadend', function(event) {
                    console.log(reader.result);
                    let pre = document.createElement('pre');
                    pre.innerText = reader.result;
                    uploadArea.appendChild(pre);
                });
            }
            let extensionImgOK = ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg'];
            if (extensionImgOK.includes(extension)) {
                // read the file content as text
                // https://developer.mozilla.org/fr/docs/Web/API/FileReader/readAsText
                let reader = new FileReader;
                reader.readAsDataURL(file);
                reader.addEventListener('loadend', function(event) {
                    let img = document.createElement('img');
                    img.src = reader.result;
                    uploadArea.appendChild(img);
                });

            }
        }

        function handleDrop(event) {
            event.preventDefault();
            let files = event.dataTransfer.files;
            // console.log(files);
            [...files].forEach(processFile);
        }
        dropArea.addEventListener('drop', handleDrop, false);
    </script>
</body>

</html>