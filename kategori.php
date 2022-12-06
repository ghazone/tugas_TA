<?php
session_start();
include('koneksi.php');
$query = "SELECT * FROM table_kategori";
$result = mysqli_query($con, $query);
$no = 1;
$row = mysqli_num_rows($result);
require_once('admin_header.php'); ?>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Info boxes -->
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-10">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Kategori</h3>
						<a href="kategori_tambah.php" class="btn btn-sm btn-primary" style="float: right;">Add</a>
					</div>

					<!-- /.card-header -->
					<div class="card-body">
						<table id="cat_table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Kategori</th>
									<th class="text-center">Aksi</th>

								</tr>
							</thead>

							<tbody>
								<?php while ($data = mysqli_fetch_array($result)) { ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['nama_kategori']; ?></td>
										<td><a href="kategori_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-md">Edit</a>
												<a class="btn btn-danger" href="kategori_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('apakah anda yakin?')">Delete</a></td>
									</tr>
								<?php } ?>

							</tbody>

						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>

		</div>
		<!-- /.row -->
	</div>
	<!--/. container-fluid -->
</section>
<!-- /.content -->
<?php require_once('admin_footer.php'); ?>