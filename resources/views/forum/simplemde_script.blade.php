<script type="text/javascript">
    // https://github.com/sparksuite/simplemde-markdown-editor
    new SimpleMDE({
        spellChecker: false,
        placeholder: "使用 Markdown 格式书写",
        promptURLs: true,
        tabSize: 4,
        renderingConfig: {
            codeSyntaxHighlighting: false
        },
        styleSelectedText: false,
        element: document.getElementById('simplemde-editor'),
        toolbar: [
            "bold", "italic", "heading", "|",
            "code", "quote", "unordered-list", "ordered-list", "|",
            "link", "image", "table", "horizontal-rule", "|",
            "preview", "side-by-side", "fullscreen", "guide"
        ]
    });
</script>