<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © sisfo.tracer.alumni 2019</small>
        </div>
    </div>
</footer>

<script src="<?php echo url.'assets/vendor/jquery/jquery.min.js' ?>"></script>
<script src="<?php echo url.'assets/vendor/bootstrap/js/bootstrap.js' ?>"></script>

<script>

    $(document).ready(function() {
        $('.berita').click(function() {
            var id_berita = $(this).attr('id');

            $.ajax({
                url: 'http://localhost/My Project/Project Skripsi/sisfo.tracer.alumni/public/home/berita/'+id_berita,
                data: {id_berita:id_berita},

                success: function(data) {
                    $('#data-berita').html(data);
                    $('#modal-berita').modal('show');
                }
            })
        })
    })
</script>

</body>
</html>