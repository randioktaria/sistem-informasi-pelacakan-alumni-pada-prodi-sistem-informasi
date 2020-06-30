<div class="card shadow">
	<div class="container" style="padding: 10px;">
		<div class="text-center">
			<b>SELEMAT DATANG DI HALAMAN ADMINISTRATOR</b>
		</div>
	</div>
</div>

<div class="card" style="margin-top:10px;">
	<div class="card-header">
		Info dari Alumni
	</div>
	<div class="card-body">
		<div class="row" style="margin-top:5px;">
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-primary o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fa fa-fw fa-newspaper-o"></i>
						</div>
						<div class="mr-5"><?php echo $data['berita']->hitung; ?> Berita</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo url.'dashboard/list/berita'; ?>">
						<span class="float-left">Detail</span>
						<span class="float-right">
							<i class="fa fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-warning o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fa fa-bullhorn"></i>
						</div>
						<div class="mr-5"><?php echo $data['pengumuman']->hitung; ?> Pengumuman</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo url.'dashboard/list/pengumuman'; ?>">
						<span class="float-left">Detail</span>
						<span class="float-right">
							<i class="fa fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-success o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fa fa-fw fa-briefcase"></i>
						</div>
						<div class="mr-5"><?php echo $data['lowongan']->hitung; ?> Lowongan</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo url.'dashboard/list/lowongan'; ?>">
						<span class="float-left">Detail</span>
						<span class="float-right">
							<i class="fa fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-danger o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fa fa-fw fa-file-text"></i>
						</div>
						<div class="mr-5"><?php echo $data['kuisioner']->id_alumni ?> Kuisioner</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo url.'dashboard/list/kuisioner'; ?>">
						<span class="float-left">Detail</span>
						<span class="float-right">
							<i class="fa fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card shadow" style="margin-top:10px;">
	<div class="card-body">	
		<div class="row">
			<div class="col-md-8">
			<table class="table table-sm table-bordered table-striped">
				<thead>
					<tr>
						<th>Angkatan</th>
						<th>Alumni Yang Telah Mengisi Kuesioner</th>
						<th>Alumni Yang Bekerja</th>
					</tr>
				</thead>
				<tbody>
					<?php $alumni = new \app\models\Alumni; ?>
					<?php foreach ($data['alumni_angkatan'] as $data['alumni_angkatan']): 

							
							$data['alumni_bekerja'] = $alumni->hitung_alumni_bekerja($data['alumni_angkatan']->_angkatan);
							$data['jumlah_angkatan'] = $alumni->hitung_kuesioner_alumni($data['alumni_angkatan']->_angkatan);


							foreach ($data['alumni_bekerja'] as $data['alumni_bekerja']) :
							
						?>
						
							<tr>
								<td><?php echo $data['alumni_bekerja']->angkatan ?></td>

								<?php foreach ($data['jumlah_angkatan'] as $data['jumlah_angkatan']) : ?>

								<td><?php echo $data['jumlah_angkatan']->jml_angkatan ?></td>

								<?php endforeach ?>		

								<td><?php echo $data['alumni_bekerja']->pekerjaan ?></td>
							</tr>
							
					<?php endforeach ?>		
					<?php endforeach ?>	
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
