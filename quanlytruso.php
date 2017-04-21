<div class="container">
  		<div class="row">
  			 <div class="col-md-6">
  			 <nav class="navbar" style="background-color: #E1EFFB; position: relative;min-height: 5px; margin-bottom: 5px;">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      
				    

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    				   
				      <form class="navbar-form navbar-left" >
						<div class="btn-group" role="group" aria-label="..." >
						  <ol class="breadcrumb" style = "margin-bottom: 0px; padding: 7px 5px" >
							<li><a href="index.php">Trang Chủ</a></li>
							<li class="active">Nhân Sự</li>
							<li class="active">Quản Lý Trụ Sở</li>
								</ol>
						  
									
				      </form>
				     
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>	
  			 </div> 
			<div class="col-md-6">
			<?php echo validation_errors(); ?>
			 <?php
			$message_flashdata = $this->session->flashdata('message_flashdata');
			if(isset($message_flashdata) && count($message_flashdata)){
				if($message_flashdata['type'] == 'successful'){
				?>
					<div class="alert alert-success alert-dismissible" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message'] ?>
					</div>
					<?php
				}
				else if($message_flashdata['type'] == 'error'){
				?>
					<div class="alert alert-danger alert-dismissible" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message'] ?>
					</div>
					<?php
				}
			}
			?>
			</div>
  		</div>
  		<div class="row">
  			 <div class="col-md-12">
			 <form action="" method="post">
  			 <div class="panel panel-primary ">
				  <div class="panel-heading" style = "overflow: hidden; padding: 0px 15px 0px 0px ">
					<span class="panel-title" style="margin-top:5px; margin-left:10px; float:left">Bảng Trụ Sở </span>
					<div class="btn-group navbar-right" role="group" aria-label="..." >
					  <button type="button" class="btn btn-default"
						  <?php echo (isset($active) && $active == 'quanly-truso-themmoitruso')?' class="active"':''?>>
						  <a href="index.php/quanly_truso/themmoitruso" style = "color: blue" >
						  <span class="fa fa-plus" aria-hidden="true"></span>Thêm</a>
					  </button>
					  <button type="button" class="btn btn-default" onclick="alert("he")" type="submit" name="submit" id="sm-alert">
					  <span class="fa fa-trash-o-lg" aria-hidden="true"></span>Xóa</button>
					</div>
					
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed" cellspacing="0" width="100%">
				  <thead>
				    <tr>	
							<th>STT</th>
                            <th></th>	
							<th>MÃ TRỤ SỞ</th>							
                            <th>TÊN</th>
                            <th>ĐỊA CHỈ</th>
								         
                        </tr>
                    </thead>                   
                     <tbody>	
					 <?php if(isset($list_quanly_truso) && count($list_quanly_truso)){foreach($list_quanly_truso as $key => $val){?>
						<tr>	
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
                            <th><a href="index.php/quanly_truso/updatetruso/<?php echo $val['id'];?>"><?php echo htmlspecialchars($val['matruso']);?></th>						
                            <th><?php echo htmlspecialchars($val['tentruso']);?></th>
							<th><?php echo htmlspecialchars($val['diachi']);?></th>
	
                        </tr>
					 <?php	}} //else { 		
						//}
					 ?> 
                     </tbody>   	
				  </table>
				</div>
				  <ul class="list-group">
					<li class="list-group-item" style="height: 50px">
						<div class="row">
							<div class="col-md-9">
								<input onclick="myFunction()" type="submit" name="submit" id="sm-alert" class="btn btn-primary" value="Xóa Dữ Liệu" />
							</div>
							
						</div>	
					</li>

				  </ul>
  			 </div>
			</form>
  		</div> 			
  		</div>
 </div>
     