<div class="modal <?php echo $row['programid'];?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>YUF X'PLOSION<strong></strong></h2>
						</header>
					</div>
					<div class="modal-body">
					<div class="programs_detail-description">
									
									<img src="assets/img/<?php echo $row['program_img'];?>" alt="" width="100%">
									
									<div class="row programs_details">
										<div class="col-xs-12">

											<div class="detail-description">

												<strong style="font-size: 19px;font-weight: 200;" class="detail-summary">
													<?php echo $row['program_content'];?></strong>
												
											</div>
											</div>
							</div>
						</div>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>