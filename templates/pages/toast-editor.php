<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/toastui/codemirror.min.css" />
    <!-- Editor's Style -->
    <link rel="stylesheet" href="assets/toastui/toastui-editor.min.css" />

</head>

<body>

    <!-- Editor -->
    <h2>Editor</h2>
    <div id="editor"></div>
    <!-- Viewer Using Editor -->
    <h2>Viewer</h2>
    <div id="viewer"></div>

    <script src="assets/toastui/toastui-editor-all.min.js"></script>
    <script src="assets/toastui/toastui-editor-plugin-chart.min.js"></script>
    <script src="assets/toastui/toastui-editor-plugin-code-syntax-highlight.min.js"></script>
    <script src="assets/toastui/toastui-editor-plugin-color-syntax.min.js"></script>
    <script src="assets/toastui/toastui-editor-plugin-table-merged-cell.min.js"></script>
    <script src="assets/toastui/toastui-editor-plugin-uml.min.js"></script>

    <script>
        // https://github.com/nhn/tui.editor/blob/master/apps/editor/docs/getting-started.md
        // https://github.com/nhn/tui.editor/blob/master/apps/editor/docs/plugins.md

        // const Editor = toastui.Editor;
        // const editor = new Editor({
        //     el: document.querySelector('#editor'),
        //     height: '600px',
        //     initialEditType: 'markdown',
        //     previewStyle: 'vertical',
        //     usageStatistics: false
        // });

        // editor.getHtml();

        const {
            Editor
        } = toastui;
        const {
            chart,
            codeSyntaxHighlight,
            colorSyntax,
            tableMergedCell,
            uml
        } = Editor.plugin;

        const chartOptions = {
            minWidth: 100,
            maxWidth: 600,
            minHeight: 100,
            maxHeight: 300
        };

        // http://www.plantuml.com/plantuml/uml/
        const umlOptions = {
//            rendererURL: 'http://www.plantuml.com/plantuml/png/'
              rendererURL: 'http://www.plantuml.com/plantuml/svg/'
//            rendererURL: 'http://www.plantuml.com/plantuml/txt/'
        };

        const editor = new Editor({
            el: document.querySelector('#editor'),
            previewStyle: 'vertical',
            height: '500px',
            initialValue: '',
            usageStatistics: false,
            plugins: [
                [chart, chartOptions], codeSyntaxHighlight, colorSyntax, tableMergedCell, [uml, umlOptions]
            ]
        });

        const viewer = Editor.factory({
            el: document.querySelector('#viewer'),
            viewer: true,
            height: '500px',
            initialValue: '',
            usageStatistics: false,
            plugins: [
                [chart, chartOptions], codeSyntaxHighlight, colorSyntax, tableMergedCell, [uml, umlOptions]
            ]
        });
    </script>
</body>

</html>
<?php

function encodep($text) {
     $data = utf8_encode($text);
     $compressed = gzdeflate($data, 9);
     return encode64($compressed);
}

function encode6bit($b) {
     if ($b < 10) {
          return chr(48 + $b);
     }
     $b -= 10;
     if ($b < 26) {
          return chr(65 + $b);
     }
     $b -= 26;
     if ($b < 26) {
          return chr(97 + $b);
     }
     $b -= 26;
     if ($b == 0) {
          return '-';
     }
     if ($b == 1) {
          return '_';
     }
     return '?';
}

function append3bytes($b1, $b2, $b3) {
     $c1 = $b1 >> 2;
     $c2 = (($b1 & 0x3) << 4) | ($b2 >> 4);
     $c3 = (($b2 & 0xF) << 2) | ($b3 >> 6);
     $c4 = $b3 & 0x3F;
     $r = "";
     $r .= encode6bit($c1 & 0x3F);
     $r .= encode6bit($c2 & 0x3F);
     $r .= encode6bit($c3 & 0x3F);
     $r .= encode6bit($c4 & 0x3F);
     return $r;
}

function encode64($c) {
     $str = "";
     $len = strlen($c);
     for ($i = 0; $i < $len; $i+=3) {
            if ($i+2==$len) {
                  $str .= append3bytes(ord(substr($c, $i, 1)), ord(substr($c, $i+1, 1)), 0);
            } else if ($i+1==$len) {
                  $str .= append3bytes(ord(substr($c, $i, 1)), 0, 0);
            } else {
                  $str .= append3bytes(ord(substr($c, $i, 1)), ord(substr($c, $i+1, 1)),
                      ord(substr($c, $i+2, 1)));
            }
     }
     return $str;
}

/*
 <!--  taken from https://github.com/johan/js-deflate -->
<script src="deflate.js"></script>
<script>
$ = function(id){ return document.getElementById(id) };

function encode64(data) {
r = "";
for (i=0; i<data.length; i+=3) {
 if (i+2==data.length) {
r +=append3bytes(data.charCodeAt(i), data.charCodeAt(i+1), 0);
} else if (i+1==data.length) {
r += append3bytes(data.charCodeAt(i), 0, 0);
} else {
r += append3bytes(data.charCodeAt(i), data.charCodeAt(i+1),
data.charCodeAt(i+2));
}
}
return r;
}

function append3bytes(b1, b2, b3) {
c1 = b1 >> 2;
c2 = ((b1 & 0x3) << 4) | (b2 >> 4);
c3 = ((b2 & 0xF) << 2) | (b3 >> 6);
c4 = b3 & 0x3F;
r = "";
r += encode6bit(c1 & 0x3F);
r += encode6bit(c2 & 0x3F);
r += encode6bit(c3 & 0x3F);
r += encode6bit(c4 & 0x3F);
return r;
}

function encode6bit(b) {
if (b < 10) {
 return String.fromCharCode(48 + b);
}
b -= 10;
if (b < 26) {
 return String.fromCharCode(65 + b);
}
b -= 26;
if (b < 26) {
 return String.fromCharCode(97 + b);
}
b -= 26;
if (b == 0) {
 return '-';
}
if (b == 1) {
 return '_';
}
return '?';
}

function compress(s) {
  //UTF8
  s = unescape(encodeURIComponent(s));
  $('im').src = "http://www.plantuml.com/plantuml/img/"+encode64(zip_deflate(s, 9));
}
</script>

 */
?>