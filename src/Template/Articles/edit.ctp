<script src="<?php echo $this->request->webroot . "js/" ?>tinymce.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<?php echo $this->Form->create("Article", array("type" => "file","url" => "/edit/" . $article->id)); ?>
<fieldset>
    <h2>Add Articles</h2>
    <?php
    echo $this->Form->input("title", ["value" => $article->title]);
    echo $this->Form->input("map_url", ["value" => $article->map_url]);
    echo $this->Form->input("type", ["value" => $article->type]);
    echo $this->Form->input("metades", ["value" => $article->meta_des]);
    echo $this->Form->input("metakey", ["value" => $article->meta_keys]);
    echo $this->Form->input("description", ["value" => $article->des_article]);
    echo $this->Form->input("file", ["type" => "file", "value" => $article->image]);
    echo $this->Form->input("content", array("type" => "textarea", "id" => "content_article", "value" => $article->content));
    echo $this->Form->button("Submit");
    ?>
</fieldset>
<?php
echo $this->Form->end();
?>
<script>
    tinymce.init({
        selector: "#content_article",
        height: 500,
        plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help image code',
        toolbar1: "newdocument | bold italic underline | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect | image code",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table  | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
        content_css: [
            "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
            "//www.tinymce.com/css/codepen.min.css"],
        menubar: false,
        toolbar_items_size: "small",
        style_formats: [{
                title: "Bold text",
                inline: "b"
            }, {
                title: "Red text",
                inline: "span",
                styles: {
                    color: "#ff0000"
                }
            }, {
                title: "Red header",
                block: "h1",
                styles: {
                    color: "#ff0000"
                }
            }, {
                title: "Example 1",
                inline: "span",
                classes: "example1"
            }, {
                title: "Example 2",
                inline: "span",
                classes: "example2"
            }, {
                title: "Table styles"
            }, {
                title: "Table row 1",
                selector: "tr",
                classes: "tablerow1"
            }],
        templates: [{
                title: "Test template 1",
                content: "Test 1"
            }, {
                title: "Test template 2",
                content: "Test 2"
            }],
        // enable title field in the Image dialog
        image_title: true,
        // enable automatic uploads of images represented by blob or data URIs
        automatic_uploads: true,
        // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
        // images_upload_url: "postAcceptor.php",
        // here we add custom filepicker only to Image dialog
        file_picker_types: "image",
        // and here's our custom image picker
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");

            // Note: In modern browsers input[type="file"] is functional without 
            // even adding it to the DOM, but that might not be the case in some older
            // or quirky browsers like IE, so you might want to add it to the DOM
            // just in case, and visually hide it. And do not forget do remove it
            // once you do not need it anymore.

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    // Note: Now we need to register the blob in TinyMCEs image blob
                    // registry. In the next release this part hopefully won"t be
                    // necessary, as we are looking to handle it internally.
                    var id = "blobid" + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    // call the callback and populate the Title field with the file name
                    cb(blobInfo.blobUri(), {title: file.name});
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    });

</script>