<!DOCTYPE html>
<html>
    <?php include __DIR__ . '/tmp/template/headerDenis.tpl ' ?>
<body>
    <?php include __DIR__.'/tmp/template/menu-ren.tpl '?>
<div class="container">
    <?php include __DIR__.'/tmp/template/carousel.tpl '?>
</div>
<div class="container">
    <?php include __DIR__.'/tmp/template/cardssliderDenis.tpl '?>
</div>
   <?php include __DIR__.'/tmp/template/footer.tpl '?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $( document ).ready(function() {
            $(document).on('click', '.review_ratings_login', function () {
                //var $data = $('#review_product_id span').text();
                //var url = '/mycompany/login/'+$data;

                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (output) {
                        $('#login_for_review').html(output).modal('show');
                    },
                    error: function(output){
                        alert("error");
                    }
                });
            });
        });

    </script>
</body>
</html>
<?php
