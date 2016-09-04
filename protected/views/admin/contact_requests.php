
  <div id="middle">
    <?php $this->renderPartial('/admin/_leftSide'); ?>
    <div id="middletwo">
      <div align="left" class="box2" >
        <div class="box-t">
          <div class="box-r">
            <div class="box-b">
              <div class="box-l">
                <div class="box-tr">
                  <div class="box-br">
                    <div class="box-bl">
                      <div class="box-tl" align="left">
                        <div class="heading">Contact Requests Listing </div> <br/>
                        <div>

					 <div align="center" style="padding-top:10px; font-size:14px; color:#FF0000;">
						<span style="color:#00FF00; font-weight:bold;"><?php echo Yii::app()->user->getFlash("success");?> </span>
					</div>
                      <table class="table_show" width="100%" class="table-short" cellpadding="10" cellspacing="1">
                        <thead>
                          <tr bgcolor="#c3c3c3" class="header" align="left" height="40">
                            <th align="left">Name</th>
                            <th align="left">Request For</th>
							<th align="left">Email</th>
							<th align="left">Message</th>
							<th align="left">Date</th>
                            <th align="center">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php if(count($requests)>0){foreach($requests as $k){?>
						<tr id="tr<?php echo $k['id']?>">
                            <td align="left"><?=$k['name']?></td>
							<td align="left"><?=$k['subject']?></td>
							<td align="left"><?=$k['email']?></td>
							<td align="left"><?=$k['message']?></td>
							<td align="left"><?=@date("dS(l)-m(F)Y",strtotime($k['created_at']))?></td>
                            <td align="center">
<?php 
echo CHtml::ajaxLink(
	'Delete',
	array("/admin/request_del"),
	array(
		'type'=>'POST',
		'data'=>array('d'=>$k['id'],'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
		'success' => 'function(d) {
          $("#tr"+d).remove();
        }',
	),
	array("href"=>"javascript:void(0);","confirm"=>"Are you sure?")
);
?> | <a href="<?=Yii::app()->baseUrl."/admin/request?id=".$k['id']?>">show</a></td>
						</tr>
						<?php }}else{?>
						<tr><td colspan="4" align="center">
						 	<strong>There are no request sent yet!</strong>
							</td>
						</tr>
						<?php }?>  
                        </tbody>
                        <tfoot>
							<tr bgcolor="#d3d3d3" height="35">
								<td colspan="6">
									<strong>Total Record(s) : <?php //echo $total; ?></strong>
									<?php //$this->widget('CLinkPager', array('pages' => $pages,)); ?>
								</td>
							</tr>
                        </tfoot>
                      </table>


					<script>
					$(document).ready(function(){
						$('table.table_show tbody tr:even').css('background','#ececec');
						$('table.table_show tbody tr:odd').css('background','#e1e1e0');
					});
					</script>
						<span class="clearFix">&nbsp;</span> </div>
                        <div class="clear"> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
