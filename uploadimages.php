<?php include __DIR__ . '/tmp/template/headerDenis.tpl ' ?>
<div class="container">
    <form action="upload.php" class="dropzone" id="dropzoneFrom">
    </form>

    </form>
    <br />
    <br />
    <div align="center">
        <button type="button" class="btn btn-info" id="submit-all">Upload</button>
    </div>
    <br />
    <br />
    <div id="preview"></div>
    <br />
    <br />
</div>
<script>

    $(document).ready(function(){

        Dropzone.options.dropzoneFrom = {
            autoProcessQueue: false,
            acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
            init: function(){
                var submitButton = document.querySelector('#submit-all');
                myDropzone = this;
                submitButton.addEventListener("click", function(){
                    myDropzone.processQueue();
                });
                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                    list_image();
                });
            },
        };

        list_image();

        function list_image()
        {
            $.ajax({
                url:"upload.php",
                success:function(data){
                    $('#preview').html(data);
                }
            });
        }

        $(document).on('click', '.remove_image', function(){
            var name = $(this).attr('id');
            $.ajax({
                url:"upload.php",
                method:"POST",
                data:{name:name},
                success:function(data)
                {
                    list_image();
                }
            })
        });

    });
</script>


