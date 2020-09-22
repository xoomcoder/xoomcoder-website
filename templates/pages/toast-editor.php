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

        const editor = new Editor({
            el: document.querySelector('#editor'),
            previewStyle: 'vertical',
            height: '500px',
            initialValue: '',
            plugins: [
                [chart, chartOptions], codeSyntaxHighlight, colorSyntax, tableMergedCell, uml
            ]
        });

        const viewer = Editor.factory({
            el: document.querySelector('#viewer'),
            viewer: true,
            height: '500px',
            initialValue: '',
            usageStatistics: false,
            plugins: [
                [chart, chartOptions], codeSyntaxHighlight, tableMergedCell, uml
            ]
        });
    </script>
</body>

</html>