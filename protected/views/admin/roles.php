
<div id="middle">
    <?php $this->renderPartial('/admin/_leftSide'); ?>
    <div id="middletwo" style="width:70%">
      <div align="left" class="box2" >
        <div class="box-t">
          <div class="box-r">
            <div class="box-b">
              <div class="box-l">
                <div class="box-tr">
                  <div class="box-br">
                    <div class="box-bl">
                      <div class="box-tl" align="left">
                        <div class="heading">
							Manage Roles
<span style="float:right;">
	<a href="<?php echo Yii::app()->getBaseUrl()."/admin/roles_add"?>" style="color:#FFFFFF; font-size:12px; font-weight:bold;">Add New Role</a>
</span>
						</div> <br/>
                        <div>
					 <div align="center" style="padding-top:10px; font-size:14px; color:#FF0000;">
						<span style="color:#00FF00; font-weight:bold;"><?php echo Yii::app()->user->getFlash("success");?> </span>
					</div>

							<?php if( ! empty($roles) ) : ?>
							<table width="100%" bgcolor="#101010" cellspacing="1" cellpadding="10" class="table-short">
								<thead bgcolor="#f9f9f9">
								  <tr class="header" align="left" height="40">
									<th width="35%">Name</th>
									<th width="35%">Description</th>
									<th width="10%">Action</th>
								  </tr>
								</thead>
								<tbody bgcolor="#ececec">
								<?php foreach($roles as $p) : ?>
								  <tr id="tr<?php echo $p['id'];?>">
									<td>
										<?php echo $p['role_name'];?>
									</td>
									<td>
										<?php echo $p['description'];?>
									</td>

									<td>
<a href="<?php echo Yii::app()->baseUrl.'/admin/roles_edit?rid='.$p['id'];?>" class="link button_grey" title="Edit">Edit</a>
<?php 
echo CHtml::ajaxLink(
	'Delete',
	array("/admin/roles_delete"),
	array(
		'type'=>'GET',
		'data'=>array("rid"=>$p['id'],'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
		'success' => 'function(d) {
          $("#tr"+d).remove();
        }',
	),
	array("href"=>"javascript:void(0);","confirm"=>"Are you sure?","class"=>"link button_grey")
);
?>

									</td>
								  </tr>
								<?php endforeach; ?>
								</tbody>
								<tfoot bgcolor="#f9f9f9">
								  <tr>
									<td colspan="6">
										<?php //$this->widget('CLinkPager', array('pages' => $pages,)); ?>
									</td>
								  </tr>
								</tfoot>
							  </table>
							<?php else : ?>
							<div class="error"><em>There is no record found!</em></div>
							<?php endif; ?>
						  <span class="clearFix">&nbsp;</span></div>
                        <div class="clear"></div>
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

