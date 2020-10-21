<!-- partial -->
<div class="content-wrapper">
  <h3 class="page-heading mb-4"><?= lang('index_heading');?></h3>
  <div class="row">
  	<div class="col-12">
  		<p><?= lang('index_subheading');?></p>

  		<div id="infoMessage"><?= $message;?></div>

  		<table id="dataTable" cellpadding=0 class="table table-bordered table-hover" cellspacing=10>
  			<tr class="bg-primary text-white">
          <th>#</th>
  				<th><?= lang('index_fname_th');?></th>
  				<th><?= lang('index_lname_th');?></th>
  				<th><?= lang('index_email_th');?></th>
  				<th><?= lang('index_groups_th');?></th>
  				<th><?= lang('index_status_th');?></th>
  				<th><?= lang('index_action_th');?></th>
  			</tr>
  			<?php $no = 1; foreach ($users as $user):?>
  				<tr>
            <td><?= $no++  ?></td>    
            <td><?= htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?= htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?= htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
  					<td>
  						<?php foreach ($user->groups as $group):?>
  							<?= anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
  		                <?php endforeach?>
  					</td>
  					<td><?= ($user->active) ? anchor("auth/deactivate/".$user->id,'<span class="badge badge-pill badge-success">'.lang('index_active_link').'</span>') : anchor("auth/activate/". $user->id,'<span class="badge badge-pill badge-danger">'.lang('index_inactive_link').'</span>');?></td>
  					<td><?= anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
  				</tr>
  			<?php endforeach;?>
  		</table>

  		<p><?= anchor('auth/create_user', lang('index_create_user_link'))?> | <?= anchor('auth/create_group', lang('index_create_group_link'))?></p>
  	</div>
  </div>
</div>      	