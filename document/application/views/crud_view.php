<style>
#content{
	margin-top:-450px;
}

 th {
	                font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	                color: #6D929B;
	                border-right: 1px solid #C1DAD7;
	                border-bottom: 1px solid #C1DAD7;
	                border-top: 1px solid #C1DAD7;
	                letter-spacing: 2px;
	                text-transform: uppercase;
	                text-align: left;
	                padding: 6px 6px 6px 12px;
	                background: #CAE8EA;
	            }
	            td {
	                border-right: 1px solid #C1DAD7;
	                border-bottom: 1px solid #C1DAD7;
	                background: #fff;
	                padding: 6px 6px 6px 12px;
	                color: #6D929B;
	            }
</style>

<div id="content">
			<div class="post">
				
				
					
					<?php 
					$flashmessage=$this->session->flashdata('message');
					echo ! empty($flashmessage) ? '<p class="message">' . $flashmessage . '</p>': '';
					?>
				  <table border="1" class='datatable'>
						<tr><center>
							<th>No.</th>
                            <th>Title</th> 
                            <th>Nama File</th> 
                            <th>Aksi</th> 
                            </center>
						</tr>
						<?php
						$c=0;
						
						foreach($data_file->result() as $row):?>
							
							<tr>
                            
								<td><?php echo $c=$c+1; ?></td>
                                <td><?php echo $row->title; ?></td>
                                <td><?php echo $row->filename; ?></td>
								<td align="center"><?php echo anchor('upload/update/'.$row->id,'edit')." | ".anchor('upload/delete_file/'.$row->id,'delete',array('onClick' => "return confirm('apakah anda yakin ?')."));?></td>
								<td align="center"><?php echo anchor('download/files/'.$row->id,' | download');?></td>
                             
                                
                                
							</tr>
							<?php $c++; endforeach;?>
					</table>
					
					
				
			</div>
</div>
		<!-- end #content -->