            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home</a>
                    <a class="nav-item nav-link js-scroll-trigger" href="#berita">Berita</a>
                    <a class="nav-item nav-link js-scroll-trigger" href="#pengumuman">Pengumuman</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Website <span>Tracer Study</span> </h1>
            <p class="lead">Selamat datang di website pelacakan alumni jurusan sistem informasi <br> Universitas Putra Indonesia YPTK Padang.</p>
            <a class="btn btn-primary btn-login tombol" href="<?php echo url. 'dashboard' ?>" target="_blank">Login</a>
        </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- content -->
    <section id="berita">

        <div class="container">
            <div class="row justify-content-center">
                <h4 class="content-header">BERITA</h4>
            </div>
        </div>

        <div class="container-fluid content shadow" style="background-color: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);">
            <div class="row">
                <?php foreach ($data['berita'] as $berita) :?>
                
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo url.'image/berita/'.$berita->foto; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $berita->judul; ?></h5>
                                    <p class="card-text text-justify">
                                        <small><b><?php echo $berita->tgl_post; ?></b></small> <br>
                                        <?php echo substr($berita->isi, 0, 100).'.....'; ?>
                                    </p>
                                    <a href="#" class="btn btn-primary btn-sm berita" data-toggle="modal" id="<?php echo $berita->id; ?>" data-target="#modal-berita">selangkapnya &raquo;</a>
                                </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section id="pengumuman">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="content-header">PENGUMUMAN</h4>
            </div>
        </div>

        <div class="container-fluid content shadow" style="background-image: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);">
            <div class="row">
                <?php foreach($data['pengumuman'] as $pengumumna) : ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <b><?php echo $pengumumna->judul ?></b>
                                    <small><i>(Post Tgl <?php echo  $pengumumna->tgl_post ?>)</i></small> <br>
                                    <small><?php echo $pengumumna->isi?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <section>
    <!-- akhir kontent -->
    
    <!-- modal -->
        
    <div class="modal fade bd-example-modal-lg" id="modal-berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body" id="data-berita">

                </div>
            </div>
        </div>

        
    <!-- akhir -->

</div>

