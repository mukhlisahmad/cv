<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<section>
	<div class="card">
		<div class="container">
			<div class="card-header">
				<h1 class="page-header">
					hallo
				</h1>
			</div>
			<div class="card-body">
				<div class=" table-responsive">
					<table class="table table-bordered">
						<thead class="table-dark">
							<tr>
								<td> no </td>
								<td> Nama</td>
								<td> Kelas</td>
								<td> Prodi</td>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;?>
							<tr>
								<td> <?php echo $no++; ?></td>
								<td> wak sunari</td>
								<td> 20</td>
								<td> Teknik </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$this->load->view('main/footer');
?>
