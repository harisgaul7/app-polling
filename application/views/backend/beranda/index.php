<?php error_reporting(0) ?>
<script src="<?= base_url() ?>/assets/js/highchart/jquery-3.1.1.min.js"></script>
<script src="<?= base_url() ?>/assets/js/highchart/highcharts.js"></script>
<script src="<?= base_url() ?>/assets/js/highchart/highcharts-3d.js"></script>
<script src="<?= base_url() ?>/assets/js/highchart/exporting.js"></script>
<script src="<?= base_url() ?>/assets/js/highchart/export-data.js"></script>
<script src="<?= base_url() ?>/assets/js/highchart/accessibility.js"></script>
<div class="row">
	<div class="col-md-8">
		<h4>Laporan hari ini : <?= date_indo(date('Y-m-d')) ?></h4>
	</div>

</div>
<hr>
<div class="row state-overview">
	<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div width="100%" class="info-box5 animate-bar bg-b-purple">
                        <div class="knob-icon">
                            <img src="<?= base_url() ?>assets/images/smile.png" width="80" height="80" alt="User">
                        </div>
                        <div class="info-box-content" width="100%">
                            <span class="info-box-text">Sangat Baik</span>
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-green shadow-style width-per-<?= round($sangatbaik,0) ?>" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                <h5><?= $sangatbaik ?> %</h5>
                            </span>
                        </div>
                       
                    </div>
                </div>
 -->
	<?php if ($this->session->userdata('sess_hr_versi')=='tiga'): ?>

	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div width="100%" class="info-box5 animate-bar bg-b-purple">
			<div class="knob-icon">
				<img src="<?= base_url() ?>assets/images/jwb/tiga/1.png" width="80" height="80" alt="User">
			</div>
			<div class="info-box-content" width="100%">
				<span class="info-box-text"><?= $jawaban[0]['jwb_ket'] ?></span>
				<div class="progress m-t-20">
					<div class="progress-bar l-bg-green shadow-style width-per-<?= round($baikpersen,0) ?>" role="progressbar"
						aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<span class="progress-description">
					<h5><?= $baikpersen ?> %</h5>
				</span>
			</div>
			<!-- /.info-box-content -->
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div width="100%" class="info-box5 animate-bar bg-b-purple">
			<div class="knob-icon">
				<img src="<?= base_url() ?>assets/images/jwb/tiga/2.png" width="80" height="80" alt="User">
			</div>
			<div class="info-box-content" width="100%">
				<span class="info-box-text"><?= $jawaban[1]['jwb_ket'] ?></span>
				<div class="progress m-t-20">
					<div class="progress-bar l-bg-orange shadow-style width-per-<?= round($cukuppersen,0) ?>" role="progressbar"
						aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<span class="progress-description">
					<h5><?= $cukuppersen ?> %</h5>
				</span>
			</div>
			<!-- /.info-box-content -->
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div width="100%" class="info-box5 animate-bar bg-b-purple">
			<div class="knob-icon">
				<img src="<?= base_url() ?>assets/images/jwb/tiga/3.png" width="80" height="80" alt="User">
			</div>
			<div class="info-box-content" width="100%">
				<span class="info-box-text p-b-10"><?= $jawaban[2]['jwb_ket'] ?></span>
				<div class="progress m-t-20" width="100%">
					<div class="progress-bar l-bg-cyan shadow-style width-per-<?= round($burukpersen,0) ?>" role="progressbar"
						aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<span class="progress-description" width="100%">
					<h5><?= $burukpersen ?> %</h5>
				</span>
			</div>
			<!-- /.info-box-content -->
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div width="100%" class="info-box5 animate-bar bg-b-purple">
			<div class="knob-icon">
				<img src="<?= base_url() ?>assets/images/vote.png" width="80" height="80" alt="User">
			</div>
			<div class="info-box-content" width="100%">
				<span class="info-box-text">Jumlah Vote</span>
				<div class="progress m-t-20">
					<div class="progress-bar l-bg-purple shadow-style width-per-100" role="progressbar" aria-valuenow="45"
						aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<span class="progress-description">
					<h5><?= $total_vote ?> vote</h5>
				</span>
			</div>
		</div>
	</div>
</div>

<?php endif ?>

<!-- BATAS -->
<?php if ($this->session->userdata('sess_hr_versi')=='empat'): ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/empat/5.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text"><?= $jawaban[0]['jwb_ket'] ?></span>
			<div class="progress m-t-20">
				<div class="progress-bar l-bg-green shadow-style width-per-<?= round($sangatpersen,0) ?>" role="progressbar"
					aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description">
				<h5><?= $sangatpersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/empat/6.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text"><?= $jawaban[1]['jwb_ket'] ?></span>
			<div class="progress m-t-20">
				<div class="progress-bar l-bg-orange shadow-style width-per-<?= round($puaspersen,0) ?>" role="progressbar"
					aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description">
				<h5><?= $puaspersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/empat/7.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text p-b-10"><?= $jawaban[2]['jwb_ket'] ?></span>
			<div class="progress m-t-20" width="100%">
				<div class="progress-bar l-bg-cyan shadow-style width-per-<?= round($cukuppersen,0) ?>" role="progressbar"
					aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description" width="100%">
				<h5><?= $cukuppersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/empat/8.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text p-b-10"><?= $jawaban[3]['jwb_ket'] ?></span>
			<div class="progress m-t-20" width="100%">
				<div class="progress-bar l-bg-cyan shadow-style width-per-<?= round($tidakpersen,0) ?>" role="progressbar"
					aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description" width="100%">
				<h5><?= $tidakpersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
</div>

<?php endif ?>

<!-- BATAS -->
<?php if ($this->session->userdata('sess_hr_versi')=='lima'): ?>
<div class="col ">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/lima/9.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text"><?= $jawaban[0]['jwb_ket'] ?></span>
			<div class="progress m-t-20">
				<div class="progress-bar l-bg-green shadow-style width-per-<?= round($sangatpersen,0) ?>" role="progressbar"
					aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description">
				<h5><?= $sangatpersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col ">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/lima/10.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text"><?= $jawaban[1]['jwb_ket'] ?></span>
			<div class="progress m-t-20">
				<div class="progress-bar l-bg-orange shadow-style width-per-<?= round($puaspersen,0) ?>" role="progressbar"
					aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description">
				<h5><?= $puaspersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col ">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/lima/11.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text p-b-10"><?= $jawaban[2]['jwb_ket'] ?></span>
			<div class="progress m-t-20" width="100%">
				<div class="progress-bar l-bg-cyan shadow-style width-per-<?= round($cukuppersen,0) ?>" role="progressbar"
					aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description" width="100%">
				<h5><?= $cukuppersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col ">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/lima/12.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text p-b-10"><?= $jawaban[3]['jwb_ket'] ?></span>
			<div class="progress m-t-20" width="100%">
				<div class="progress-bar l-bg-cyan shadow-style width-per-<?= round($tidakpersen,0) ?>" role="progressbar"
					aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description" width="100%">
				<h5><?= $tidakpersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
<div class="col">
	<div width="100%" class="info-box5 animate-bar bg-b-purple">
		<div class="knob-icon">
			<img src="<?= base_url() ?>assets/images/jwb/lima/13.png" width="80" height="80" alt="User">
		</div>
		<div class="info-box-content" width="100%">
			<span class="info-box-text p-b-10"><?= $jawaban[3]['jwb_ket'] ?></span>
			<div class="progress m-t-20" width="100%">
				<div class="progress-bar l-bg-cyan shadow-style width-per-<?= round($stidakpersen,0) ?>" role="progressbar"
					aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<span class="progress-description" width="100%">
				<h5><?= $stidakpersen ?> %</h5>
			</span>
		</div>
		<!-- /.info-box-content -->
	</div>
</div>
</div>

<?php endif ?>



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Grafik Polling Kepuasan</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-5">
						<div id="chartDonut" style="min-width: 440px; height: 400px; max-width: 600px; margin: 0 auto"></div>

					</div>
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div id="chartBar" style="min-width: 470px; height: 400px; max-width: 600px; "></div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ($this->session->userdata('sess_hr_versi')=='tiga'): ?>

<script>
	Highcharts.chart('chartDonut', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Grafik Persentase'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				}
			}
		},
		series: [{
			name: 'Jumlah',
			colorByPoint: true,
			data: [{
				name: 'Puas',
				y: <?= $baikpersen ?> ,
				sliced: true,
				selected: true
			}, {
				name: 'Cukup Puas',
				y: <?= $cukuppersen ?>
			}, {
				name: 'Tidak Puas',
				y: <?= $burukpersen ?>
			}]
		}]
	});

</script>



<script>
	var chart = new Highcharts.Chart({

		chart: {
			animation: false,
			renderTo: 'chartBar',
			type: 'column',
			options3d: {
				enabled: true,
				alpha: 20,
				beta: 20,
				depth: 40,
				viewDistance: 25
			}
		},
		title: {
			text: 'Grafik Jumlah Vote'
		},
		xAxis: {
			categories: ['Puas', 'Cukup Puas', 'Tidak Puas'],
			labels: {
				skew3d: true,
				style: {
					fontSize: '16px'
				}
			}
		},
		// subtitle: {
		//   text: 'Test options by dragging the sliders below'
		// },
		plotOptions: {
			column: {
				depth: 25
			}
		},
		series: [{
			name: 'Jumlah',
			data: [ <?= $baikvotes ?> , <?= $cukupvotes ?> , <?= $burukvotes ?> ]
		}]
	});

</script>


<?php endif ?>

<?php if ($this->session->userdata('sess_hr_versi')=='empat'): ?>

<script>
	Highcharts.chart('chartDonut', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Grafik Persentase'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				}
			}
		},
		series: [{
			name: 'Jumlah',
			colorByPoint: true,
			data: [{
				name: 'Sangat Puas',
				y: <?= $sangatpersen ?> ,
				sliced: true,
				selected: true
			}, {
				name: 'Puas',
				y: <?= $puaspersen ?>
			}, {
				name: 'Cukup Puas',
				y: <?= $cukuppersen ?>
			}, {
				name: 'Tidak Puas',
				y: <?= $tidakpersen ?>
			}]
		}]
	});

</script>

<script>
	var chart = new Highcharts.Chart({

		chart: {
			animation: false,
			renderTo: 'chartBar',
			type: 'column',
			options3d: {
				enabled: true,
				alpha: 20,
				beta: 20,
				depth: 40,
				viewDistance: 25
			}
		},
		title: {
			text: 'Grafik Jumlah Vote'
		},
		xAxis: {
			categories: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Tidak Puas'],
			labels: {
				skew3d: true,
				style: {
					fontSize: '16px'
				}
			}
		},
		// subtitle: {
		//   text: 'Test options by dragging the sliders below'
		// },
		plotOptions: {
			column: {
				depth: 25
			}
		},
		series: [{
			name: 'Jumlah',
			data: [ <?= $sangat ?> , <?= $puas ?> , <?= $cukup ?> , <?= $tidak ?> ]
		}]
	});

</script>

<?php endif ?>

<?php if ($this->session->userdata('sess_hr_versi')=='lima'): ?>

<script>
	Highcharts.chart('chartDonut', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Grafik Persentase'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				}
			}
		},
		series: [{
			name: 'Jumlah',
			colorByPoint: true,
			data: [{
				name: 'Sangat Puas',
				y: <?= $sangatpersen ?> ,
				sliced: true,
				selected: true
			}, {
				name: 'Puas',
				y: <?= $puaspersen ?>
			}, {
				name: 'Cukup Puas',
				y: <?= $cukuppersen ?>
			}, {
				name: 'Tidak Puas',
				y: <?= $tidakpersen ?>
			}, {
				name: 'Sangat Tidak Puas',
				y: <?= $stidakpersen ?>
			}]
		}]
	});

</script>

<script>
	var chart = new Highcharts.Chart({

		chart: {
			animation: false,
			renderTo: 'chartBar',
			type: 'column',
			options3d: {
				enabled: true,
				alpha: 20,
				beta: 20,
				depth: 40,
				viewDistance: 25
			}
		},
		title: {
			text: 'Grafik Jumlah Vote'
		},
		xAxis: {
			categories: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Tidak Puas', 'Sangat Tidak Puas'],
			labels: {
				skew3d: true,
				style: {
					fontSize: '16px'
				}
			}
		},
		// subtitle: {
		//   text: 'Test options by dragging the sliders below'
		// },
		plotOptions: {
			column: {
				depth: 25
			}
		},
		series: [{
			name: 'Jumlah',
			data: [ <?= $sangat ?> , <?= $puas ?> , <?= $cukup ?> , <?= $tidak ?> , <?= $stidak ?> ]
		}]
	});

</script>
<?php endif ?>
