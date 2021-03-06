<?php
/**
*
* FLATBOOTS Mini CMS extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
*
*/

namespace sitesplat\flatbootsminicms\acp;

class flatboots_style_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $template, $request, $user, $config, $db, $table_prefix, $phpbb_root_path;

		$this->tpl_name = 'flatboots_style';

		$template->assign_vars(array(
			'FONT_AWESOME_CSS_LINK'		=> generate_board_url() . "/styles/FLATBOOTS/theme/font/font-awesome/css/font-awesome.css",
		));

		switch($mode)
		{
			case 'config':
		
				$this->page_title = $user->lang('FLATBOOTS_STYLE_TITLE') . ' - ' . $user->lang('FLATBOOTS_STYLE_CONFIG');

				if ($request->is_set_post('submit'))
				{
					$sql_ary = array(
						'SELECT'	=> 'fsc.*',
						'FROM'		=> array(
							$table_prefix . 'flatboots_style_config'	=> 'fsc',
						),
					);
					$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));

					while ($row = $db->sql_fetchrow($result))
					{
						$value	= $request->variable($row['config_name'], '', true);

						$sql = 'UPDATE ' . $table_prefix . 'flatboots_style_config
								SET ' . $db->sql_build_array('UPDATE', array(
									'config_value'	=> $value,
								)) . '
								WHERE config_name = "'. $row['config_name'] . '"';
						$db->sql_query($sql);
					}
					$db->sql_freeresult($result);
			
					$config->set('flatboots_avatar_effect', $request->variable('flatboots_avatar_effect', 'none'));

					trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
				}		 

				$sql_ary = array(
					'SELECT'	=> 'fsc.*',
					'FROM'		=> array(
						$table_prefix . 'flatboots_style_config'	=> 'fsc',
					),
				);
				$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_vars(array(
						strtoupper($row['config_name'])	=> $row['config_value'],
					));
				}
				$db->sql_freeresult($result);
		
				$template->assign_vars(array(
					'S_FLATBOOTS_STYLE_CONFIG'	=> true,
					'AVATAR_EFFECT'				=> $config['flatboots_avatar_effect'],
				));
				
			break; // config

			case 'links':

				$this->page_title	= $user->lang('FLATBOOTS_STYLE_TITLE') . ' - ' . $user->lang('FLATBOOTS_STYLE_LINKS');

				$action	= $request->variable('action', '');
				$button_id = $request->variable('button_id', 0);

				$template->assign_vars(array(
					'S_FLATBOOTS_STYLE_LINKS'	=> true,
				));

				switch ($action)
				{
					case "delete":

						if (confirm_box(true))
						{
							$sql = 'DELETE FROM ' . $table_prefix . 'flatboots_style_links
									WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							redirect($this->u_action);
						}
						else
						{
							confirm_box(false, $user->lang('DELETE_LINK_CONFIRM'));

							redirect($this->u_action);
						}

					break; // delete

					case "add_button":

						$button_name = $request->variable('button_name', '', true);

						$template->assign_vars(array(
							'S_NAME'				=> $button_name,
							'S_MENU_CREATE_BUTTON'	=> true,
						));

						if ($request->is_set_post('submit'))
						{
							$button_url	= $request->variable('button_url', '', true);
							$button_name	= $request->variable('button_name', '', true);
							$button_external	= $request->variable('button_external', 0);
							$button_display	= $request->variable('button_display', 1);
							$button_only_registered	= $request->variable('button_only_registered', 0);
							$button_only_guest	= $request->variable('button_only_guest', 0);
							$button_icon	= $request->variable('button_icon', '');

							$sql_ary = array(
								'SELECT'	=> 'MAX(fsl.right_id) AS right_id',
								'FROM'		=> array(
									$table_prefix . 'flatboots_style_links'	=> 'fsl',
								),
							);
							$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
							$row = $db->sql_fetchrow($result);
							$db->sql_freeresult($result);

							$left_id = $row['right_id'] + 1;
							$right_id = $row['right_id'] + 2;

							$sql_ary = array(
								'button_url'				=> $button_url,
								'button_name'				=> $button_name,
								'button_external'			=> $button_external,
								'button_display'			=> $button_display,
								'button_only_registered'	=> $button_only_registered,
								'button_only_guest'			=> $button_only_guest,
								'left_id'					=> $left_id,
								'right_id'					=> $right_id,
								'icon'						=> $button_icon,
							);
							$db->sql_query('INSERT INTO ' . $table_prefix . 'flatboots_style_links ' . $db->sql_build_array('INSERT', $sql_ary));

							trigger_error($user->lang('LINK_ADDED') . adm_back_link($this->u_action));
						}

					break; // add_button

					case "edit_button":

						$sql_ary = array(
							'SELECT'	=> 'fsl.*',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_links'	=> 'fsl',
							),
							'WHERE'		=> 'button_id = ' . $button_id,
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						$row = $db->sql_fetchrow($result);

						$template->assign_vars(array(
							'S_URL'						 => $row['button_url'],
							'L_ACP_MENU_EDIT_BUTTON'		=> $user->lang('FLATBOOTS_STYLE_EDIT_LINK') . ' » ' . $row['button_name'],
							'S_EXTERNAL'					=> $row['button_external'],
							'S_NAME'						=> $row['button_name'],
							'S_DISPLAY'					 => $row['button_display'],
							'S_ONLY_REGISTERED'			 => $row['button_only_registered'],
							'S_ONLY_GUEST'				=> $row['button_only_guest'],
							'S_ICON'						=> $row['icon'],
							'S_MENU_EDIT_BUTTON'			=> true,
						));
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{
							$button_url	= $request->variable('button_url', '', true);
							$button_name	= $request->variable('button_name', '', true);
							$button_external	= $request->variable('button_external', 0);
							$button_display	= $request->variable('button_display', 1);
							$button_only_registered	= $request->variable('button_only_registered', 0);
							$button_only_guest	= $request->variable('button_only_guest', 0);
							$button_icon	= $request->variable('button_icon', '');

							$sql_ary = array(
								'button_url'				=> $button_url,
								'button_name'				=> $button_name,
								'button_external'			=> $button_external,
								'button_display'			=> $button_display,
								'button_only_registered'	=> $button_only_registered,
								'button_only_guest'			=> $button_only_guest,
								'icon'						=> $button_icon,
							);
							$sql = 'UPDATE ' . $table_prefix . 'flatboots_style_links
									SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
									WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							trigger_error($user->lang('LINK_UPDATED') . adm_back_link($this->u_action));
						}

					break; // edit_button

					case 'move_up':
					case 'move_down':

						$sql_ary = array(
							'SELECT'	=> 'fsl.left_id, fsl.right_id',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_links'	=> 'fsl',
							),
							'WHERE'		=> 'button_id = ' . $button_id,
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						$row = $db->sql_fetchrow($result);

						$this->acp_move_button($table_prefix . 'flatboots_style_links', $row, $action);

						redirect($this->u_action);

					break; // move_up, move_down

					default:

						$sql_ary = array(
							'SELECT'	=> 'fsl.*',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_links'	=> 'fsl',
							),
							'ORDER_BY'		=> 'left_id',
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('links', array(
								'ID'				=> $row['button_id'],
								'NAME'			=> $row['button_name'],
								'URL'			 => $row['button_url'],
								'U_DELETE'		=> $this->u_action . '&amp;action=delete&amp;button_id=' . $row['button_id'],
								'U_EDIT'			=> $this->u_action . '&amp;action=edit_button&amp;button_id=' . $row['button_id'],
								'U_MOVE_UP'			=> $this->u_action . '&amp;action=move_up&amp;button_id=' . $row['button_id'],
								'U_MOVE_DOWN'	 => $this->u_action . '&amp;action=move_down&amp;button_id=' . $row['button_id'],
							));
						}
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{
							$button_name = $request->variable('button_name', '', true);
							redirect($this->u_action . '&amp;action=add_button&amp;button_name='.$button_name);
						}

						$template->assign_vars(array(
							'S_MENU_BUTTONS_LIST'	 => true,
						));
				}

			break; // links

			case 'upload':

				$this->page_title = $user->lang('FLATBOOTS_STYLE_TITLE') . ' - ' . $user->lang('FLATBOOTS_STYLE_UPLOAD');

				if ($request->is_set_post('submit'))
				{
					$image = $request->file('image');
					$image_name = $image['name'];
					$upload_bg	= $request->variable('upload_bg', '0');
					$temp = explode(".", $image_name);

					if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif')
					{
						if ($image["error"] > 0)
						{
							trigger_error("Return Code: " . $image["error"] . adm_back_link($this->u_action), E_USER_WARNING);
						}
						else
						{
							if (!$upload_bg)
							{
								$files = glob($phpbb_root_path . 'ext/sitesplat/flatbootsminicms/images/logo/*');
					
								if ($files && sizeof($files))
								{
									foreach($files as $file)
									{
										if(is_file($file))
										{
											unlink($file);
										}
									}
								}

								move_uploaded_file($image["tmp_name"], $phpbb_root_path. "ext/sitesplat/flatbootsminicms/images/logo/" . $image_name);
							}
							else
							{
								$files = glob($phpbb_root_path . 'ext/sitesplat/flatbootsminicms/images/bg/*');
					
								if ($files && sizeof($files))
								{
									foreach($files as $file)
									{
										if(is_file($file))
										{
											unlink($file);
										}
									}
								}

								move_uploaded_file($image["tmp_name"], $phpbb_root_path."ext/sitesplat/flatbootsminicms/images/bg/" . $image_name);
							}
							
							trigger_error($user->lang('IMG_UPLOADED') . adm_back_link($this->u_action));
						}
					}
					else
					{
						trigger_error($user->lang('IMG_UPLOAD_ERROR') . adm_back_link($this->u_action), E_USER_WARNING);
					}
				}

				if ($request->is_set_post('delete'))
				{
					$delete_logo = $request->variable('delete_logo', '0');
					$delete_bg = $request->variable('delete_bg', '0');

					if ($delete_logo || $delete_bg)
					{
						if ($delete_logo)
						{
							$files = glob($phpbb_root_path . 'ext/sitesplat/flatbootsminicms/images/logo/*');

							if ($files && sizeof($files))
							{
								foreach($files as $file)
								{
									if(is_file($file))
									{
										unlink($file);
									}
								}
							}
						}

						if ($delete_bg)
						{
							$files = glob($phpbb_root_path . 'ext/sitesplat/flatbootsminicms/images/bg/*');
							
							if ($files && sizeof($files))
							{
								foreach($files as $file)
								{
									if(is_file($file))
									{
										unlink($file);
									}
								}
							}
						}

						redirect($this->u_action);
					}
				}

				// Does logo image exist?
				$logo_exist = false;
				$logo_filename = '';
				$files = glob($phpbb_root_path . 'ext/sitesplat/flatbootsminicms/images/logo/*');

				if ($files && sizeof($files))
				{
					foreach($files as $file)
					{
						if(is_file($file))
						{
							$temp = explode(".", $file);
							if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif')
							{
								$logo_exist = true;
								$logo_filename = basename($file);
							}
						}
					}
				}

				// Does background image exist?
				$bg_exist = false;
				$bg_filename = '';
				$files = glob($phpbb_root_path . 'ext/sitesplat/flatbootsminicms/images/bg/*');

				if ($files && sizeof($files))
				{
					foreach($files as $file)
					{
						if(is_file($file))
						{
							$temp = explode(".", $file);
							if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif')
							{
								$bg_exist = true;
								$bg_filename = basename($file);
							}
						}
					}
				}

				// Uploaded images
				$template->assign_vars(array(
					'LOGO_IMAGE_EXIST'			=> $logo_exist,
					'BACKGROUND_IMAGE_EXIST'	=> $bg_exist,
					'LOGO_FILENAME'				=> generate_board_url() . "/ext/sitesplat/flatbootsminicms/images/logo/" . $logo_filename,
					'BACKGROUND_FILENAME'		=> generate_board_url() . "/ext/sitesplat/flatbootsminicms/images/bg/" . $bg_filename,
					'S_FLATBOOTS_STYLE_UPLOAD'	=> true,
				));

			break;
		
			case 'menu':
		
				$this->page_title	= $user->lang('FLATBOOTS_STYLE_TITLE') . ' - ' . $user->lang('FLATBOOTS_STYLE_BUTTONS');
		
				$action	= $request->variable('action', '');
				$parent_id = $request->variable('parent_id', 0);
				$button_id = $request->variable('button_id', 0);
		
				$template->assign_vars(array(
					'S_FLATBOOTS_STYLE_MENU'	=> true,
					'S_PARENT_ID'				=> $parent_id,
					'ENABLED_CUSTOM_LINKS'	    => $config['flatboots_enable_custom_links'],
				));				

				if ($request->is_set_post('set_config'))
				{
					// save enable/disable custom links option
					$config->set('flatboots_enable_custom_links', $request->variable('enable_custom_links', 0));

					trigger_error($user->lang('CONFIGURATION_UPDATED') . adm_back_link($this->u_action));
				}	 
				
				
				switch ($action)
				{
					case "delete":
			
						if (confirm_box(true))
						{
							$sql_ary = array(
								'SELECT'	=> 'fsm.button_id',
								'FROM'		=> array(
									$table_prefix . 'flatboots_style_menu'	=> 'fsm',
								),
								'WHERE'		=> 'parent_id = ' . $button_id,
							);
							$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
							while ($row = $db->sql_fetchrow($result))
							{	 
								$sql = 'DELETE FROM ' . $table_prefix . 'flatboots_style_menu
										WHERE button_id = ' . $row['button_id'];
								$db->sql_query($sql);	
							}
							$db->sql_freeresult($result);
						
							$sql = 'DELETE FROM ' . $table_prefix . 'flatboots_style_menu
									WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							redirect($this->u_action . '&amp;parent_id=' . $parent_id);
						}
						else
						{
							$sql_ary = array(
								'SELECT'	=> 'fsm.button_id',
								'FROM'		=> array(
									$table_prefix . 'flatboots_style_menu'	=> 'fsm',
								),
								'WHERE'		=> 'parent_id = ' . $button_id,
							);
							$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));

							if ($db->sql_affectedrows())
							{
								confirm_box(false, $user->lang('DELETE_SUBBUTTONS_CONFIRM'));
							}
							else
							{
								confirm_box(false, $user->lang('DELETE_BUTTON_CONFIRM'));
							}

							redirect($this->u_action . '&amp;parent_id=' . $parent_id);
						}
						
					break;
			
					case "add_button":	
							
						$button_name = $request->variable('button_name', '', true);
			
						$template->assign_vars(array(
							'S_NAME'					 => $button_name,
							'S_MENU_CREATE_BUTTON'	 => true,
						));

						// Load buttons for select
						$sql_ary = array(
							'SELECT'	=> 'fsm.button_name, fsm.button_id',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_menu'	=> 'fsm',
							),
							'WHERE'		=> 'parent_id = 0',
							'ORDER_BY'	=> 'left_id',
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						while ($row = $db->sql_fetchrow($result))
						{	 
							$template->assign_block_vars('parents', array(
								'ID'				 => $row['button_id'],
								'NAME'				 => $row['button_name'],
							));
						}
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{		 
							$button_url	= $request->variable('button_url', '', true);
							$button_name	= $request->variable('button_name', '', true);
							$button_desc	= $request->variable('button_desc', '', true);
							$button_parent	= $request->variable('button_parent', 0);
							$button_external	= $request->variable('button_external', 0);
							$button_display	= $request->variable('button_display', 1);
							$button_only_registered	= $request->variable('button_only_registered', 0);	 
							$button_only_guest	= $request->variable('button_only_guest', 0);
							$button_icon	= $request->variable('button_icon', '');

							$sql_ary = array(
								'SELECT'	=> 'MAX(fsm.right_id) AS right_id',
								'FROM'		=> array(
									$table_prefix . 'flatboots_style_menu'	=> 'fsm',
								),
							);
							$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
							$row = $db->sql_fetchrow($result);
							$db->sql_freeresult($result);
							
							$left_id = $row['right_id'] + 1;
							$right_id = $row['right_id'] + 2;

							$sql_ary = array(
								'button_url'				=> $button_url,
								'button_name'				=> $button_name,
								'button_desc'				=> $button_desc,
								'button_external'			=> $button_external,
								'button_display'			=> $button_display,
								'button_only_registered'	=> $button_only_registered,
								'button_only_guest'			=> $button_only_guest,
								'left_id'					=> $left_id,
								'right_id'					=> $right_id,
								'parent_id'					=> $button_parent,
								'icon'						=> $button_icon,
							);
							$db->sql_query('INSERT INTO ' . $table_prefix . 'flatboots_style_menu ' . $db->sql_build_array('INSERT', $sql_ary));

							trigger_error($user->lang('BUTTON_ADDED') . adm_back_link($this->u_action.'&amp;parent_id='.$button_parent));
						}
			
					break;		
			
					case "edit_button":

						// Load buttons for select
						$sql_ary = array(
							'SELECT'	=> 'fsm.button_name, fsm.button_id',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_menu'	=> 'fsm',
							),
							'WHERE'		=> 'parent_id = 0 AND button_id <> ' . $button_id,
							'ORDER_BY'	=> 'left_id',
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						while ($row = $db->sql_fetchrow($result))
						{	 
							$template->assign_block_vars('parents', array(
								'ID'	=> $row['button_id'],
								'NAME'	=> $row['button_name'],
							));
						}
						$db->sql_freeresult($result);

						$sql_ary = array(
							'SELECT'	=> 'fsm.*',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_menu'	=> 'fsm',
							),
							'WHERE'		=> 'button_id = ' . $button_id,
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						$row = $db->sql_fetchrow($result);
					
						$template->assign_vars(array(
							'S_URL'						 => $row['button_url'],
							'L_ACP_MENU_EDIT_BUTTON'		=> $user->lang('FLATBOOTS_STYLE_EDIT_BUTTON') . ' » ' . $row['button_name'],
							'S_EXTERNAL'					=> $row['button_external'],
							'S_NAME'						=> $row['button_name'],
							'S_DESC'						=> $row['button_desc'],
							'S_PARENT'					=> $row['parent_id'],
							'S_DISPLAY'					 => $row['button_display'],
							'S_ONLY_REGISTERED'			 => $row['button_only_registered'],
							'S_ONLY_GUEST'				=> $row['button_only_guest'],	
							'S_ICON'						=> $row['icon'],
							'S_MENU_EDIT_BUTTON'			=> true,
						));
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{
							$button_url	= $request->variable('button_url', '', true);
							$button_name	= $request->variable('button_name', '', true);
							$button_desc	= $request->variable('button_desc', '', true);
							$button_parent	= $request->variable('button_parent', 0);
							$button_external	= $request->variable('button_external', 0);
							$button_display	= $request->variable('button_display', 1);
							$button_only_registered	= $request->variable('button_only_registered', 0);
							$button_only_guest	= $request->variable('button_only_guest', 0);
							$button_icon	= $request->variable('button_icon', '');
							
							if ($button_parent && !$row['parent_id'])
							{
								$sql_ary = array(
									'SELECT'	=> 'fsm.button_id',
									'FROM'		=> array(
										$table_prefix . 'flatboots_style_menu'	=> 'fsm',
									),
									'WHERE'		=> 'parent_id = ' . $parent_id,
								);
								$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
								if ($db->sql_affectedrows())
								{
									trigger_error($user->lang('MOVE_BUTTON_WITH_SUBS') . adm_back_link($this->u_action.'&amp;parent_id='.$parent_id), E_USER_WARNING);	
								}
							}

							$sql_ary = array(
								'button_url'				=> $button_url,
								'button_name'				=> $button_name,
								'button_desc'				=> $button_desc,
								'button_external'			=> $button_external,
								'button_display'			=> $button_display,
								'button_only_registered'	=> $button_only_registered,
								'button_only_guest'			=> $button_only_guest,
								'parent_id'					=> $button_parent,
								'icon'						=> $button_icon,
							);
							$sql = 'UPDATE ' . $table_prefix . 'flatboots_style_menu
									SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
									WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							trigger_error($user->lang('BUTTON_UPDATED') . adm_back_link($this->u_action.'&amp;parent_id='.$button_parent));
						}
			
					break;
					
					case 'move_up':
					case 'move_down':

						$sql_ary = array(
							'SELECT'	=> 'fsm.left_id, fsm.right_id, fsm.parent_id',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_menu'	=> 'fsm',
							),
							'WHERE'		=> 'button_id = ' . $button_id,
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						$row = $db->sql_fetchrow($result);

					//	$this->acp_move_button($table_prefix . 'flatboots_style_menu', $row, $action);
						
						$this->move_menu_by($row, $action);
						
						redirect($this->u_action);
						
					break;
		
					default:

						$sql_ary = array(
							'SELECT'	=> 'fsm.*',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_menu'	=> 'fsm',
							),
							'WHERE'		=> 'parent_id = ' . $parent_id,
							'ORDER_BY'	=> 'left_id',
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('buttons', array(
								'ID'				=> $row['button_id'],
								'NAME'			=> $row['button_name'],
								'URL'			 => $row['button_url'],
								'U_OPEN'			=> ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=&amp;parent_id='.$row['button_id'] : $this->u_action . '&amp;action=&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
								'U_DELETE'		=> ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=delete&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=delete&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
								'U_EDIT'			=> ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=edit_button&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=edit_button&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
								'U_MOVE_UP'			=> ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=move_up&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=move_up&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
								'U_MOVE_DOWN'	 => ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=move_down&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=move_down&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
							));
						}
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{			
							$button_name = $request->variable('button_name', '', true);
							redirect($this->u_action . '&amp;action=add_button&amp;parent_id=' . $parent_id . '&amp;button_name=' . $button_name);
						}	
			
						$button_nav = $user->lang('MENU_NAV');
			
						if ($parent_id)
						{
							$sql_ary = array(
								'SELECT'	=> 'fsm.button_name',
								'FROM'		=> array(
									$table_prefix . 'flatboots_style_menu'	=> 'fsm',
								),
								'WHERE'		=> 'button_id = ' . $parent_id,
							);
							$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
							$button_nav .= ' » ' . $db->sql_fetchfield('button_name');
						}
							 
						$template->assign_vars(array(
							'S_MENU_BUTTONS_LIST'			=> true,
							'S_BUTTONS_NAV'				=> $button_nav,
						));
				}

			break;

			case 'social':

				$this->page_title	= $user->lang('FLATBOOTS_STYLE_TITLE') . ' - ' . $user->lang('FLATBOOTS_STYLE_SOCIAL');

				$action	= $request->variable('action', '');
				$button_id = $request->variable('button_id', 0);

				$template->assign_vars(array(
					'S_FLATBOOTS_STYLE_SOCIAL'			 => true,
				));

				switch ($action)
				{
					case "delete":

						if (confirm_box(true))
						{
							$sql = 'DELETE FROM ' . $table_prefix . 'flatboots_style_social
									WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							redirect($this->u_action);
						}
						else
						{
							confirm_box(false, $user->lang('DELETE_SOCIAL_CONFIRM'));

							redirect($this->u_action);
						}

					break;

					case "add_button":

						$button_name = $request->variable('button_name', '', true);

						$template->assign_vars(array(
							'S_NAME'						 => $button_name,
							'S_MENU_CREATE_BUTTON'			 => true,
						));

						if ($request->is_set_post('submit'))
						{
							$button_url	= $request->variable('button_url', '', true);
							$button_name	= $request->variable('button_name', '', true);
							$button_display	= $request->variable('button_display', 1);
							$button_only_registered	= $request->variable('button_only_registered', 0);
							$button_only_guest	= $request->variable('button_only_guest', 0);
							$button_icon	= $request->variable('button_icon', '');

							$sql_ary = array(
								'SELECT'	=> 'MAX(fss.right_id) AS right_id',
								'FROM'		=> array(
									$table_prefix . 'flatboots_style_social'	=> 'fss',
								),
							);
							$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
							$row = $db->sql_fetchrow($result);
							$db->sql_freeresult($result);

							$left_id = $row['right_id'] + 1;
							$right_id = $row['right_id'] + 2;

							$sql_ary = array(
								'button_url'				=> $button_url,
								'button_name'				=> $button_name,
								'icon'						=> $button_icon,
								'button_display'			=> $button_display,
								'button_only_registered'	=> $button_only_registered,
								'button_only_guest'			=> $button_only_guest,
								'left_id'					=> $left_id,
								'right_id'					=> $right_id,
							);
							$db->sql_query('INSERT INTO ' . $table_prefix . 'flatboots_style_social ' . $db->sql_build_array('INSERT', $sql_ary));

							trigger_error($user->lang('SOCIAL_ADDED') . adm_back_link($this->u_action));
						}

					break;

					case "edit_button":

						$sql_ary = array(
							'SELECT'	=> 'fss.*',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_social'	=> 'fss',
							),
							'WHERE'		=> 'button_id = ' . $button_id,
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						$row = $db->sql_fetchrow($result);

						$template->assign_vars(array(
							'S_URL'						 => $row['button_url'],
							'L_ACP_MENU_EDIT_BUTTON'		=> $user->lang('FLATBOOTS_STYLE_EDIT_SOCIAL') . ' » ' . $row['button_name'],
							'S_NAME'						=> $row['button_name'],
							'S_DISPLAY'					 => $row['button_display'],
							'S_ONLY_REGISTERED'			 => $row['button_only_registered'],
							'S_ONLY_GUEST'				=> $row['button_only_guest'],
							'S_ICON'						=> $row['icon'],
							'S_MENU_EDIT_BUTTON'			=> true,
						));
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{
							$button_url	= $request->variable('button_url', '', true);
							$button_name	= $request->variable('button_name', '', true);
							$button_display	= $request->variable('button_display', 1);
							$button_only_registered	= $request->variable('button_only_registered', 0);
							$button_only_guest	= $request->variable('button_only_guest', 0);
							$button_icon	= $request->variable('button_icon', '');

							$sql_ary = array(
								'button_url'				=> $button_url,
								'button_name'				=> $button_name,
								'button_display'			=> $button_display,
								'button_only_registered'	=> $button_only_registered,
								'button_only_guest'			=> $button_only_guest,
								'icon'						=> $button_icon,
							);
							$sql = 'UPDATE ' . $table_prefix . 'flatboots_style_social
									SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
									WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							trigger_error($user->lang('SOCIAL_UPDATED') . adm_back_link($this->u_action));
						}

					break;

					case 'move_up':
					case 'move_down':

						$sql_ary = array(
							'SELECT'	=> 'fss.left_id, fss.right_id',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_social'	=> 'fss',
							),
							'WHERE'		=> 'button_id = ' . $button_id,
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						$row = $db->sql_fetchrow($result);

						$this->acp_move_button($table_prefix . 'flatboots_style_social', $row, $action);

						redirect($this->u_action);

					break;

					default:

						$sql_ary = array(
							'SELECT'	=> 'fss.*',
							'FROM'		=> array(
								$table_prefix . 'flatboots_style_social'	=> 'fss',
							),
							'ORDER_BY'	=> 'left_id',
						);
						$result = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));
						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('social', array(
								'ID'				=> $row['button_id'],
								'NAME'			=> $row['button_name'],
								'URL'			 => $row['button_url'],
								'U_DELETE'		=> $this->u_action . '&amp;action=delete&amp;button_id=' . $row['button_id'],
								'U_EDIT'			=> $this->u_action . '&amp;action=edit_button&amp;button_id=' . $row['button_id'],
								'U_MOVE_UP'			=> $this->u_action . '&amp;action=move_up&amp;button_id=' . $row['button_id'],
								'U_MOVE_DOWN'	 => $this->u_action . '&amp;action=move_down&amp;button_id=' . $row['button_id'],
							));
						}
						$db->sql_freeresult($result);

						if ($request->is_set_post('submit'))
						{
							$button_name = $request->variable('button_name', '', true);
							redirect($this->u_action . '&amp;action=add_button&amp;button_name=' . $button_name);
						}

						$template->assign_vars(array(
							'S_MENU_BUTTONS_LIST'				=> true,
						));
				}

			break;

			case 'css':

				$this->page_title	= $user->lang('FLATBOOTS_STYLE_TITLE') . ' - ' . $user->lang('FLATBOOTS_STYLE_CSS');

				if ($request->is_set_post('submit'))
				{
					// save enable/disable custom css option
					$config->set('flatboots_enable_custom_css', $request->variable('enable_custom_css', 0));

					// save custom.css content
					file_put_contents($phpbb_root_path . 'styles/FLATBOOTS/theme/custom.css', htmlspecialchars_decode($request->variable('css_data', '', true)), ENT_COMPAT);

					trigger_error($user->lang('CSS_UPDATED') . adm_back_link($this->u_action));
				}	 
		
				$template->assign_vars(array(
					'S_FLATBOOTS_STYLE_CSS'	=> true,
					'ENABLED_CUSTOM_CSS'	=> $config['flatboots_enable_custom_css'],
					'CSS_DATA'				=> file_get_contents($phpbb_root_path . 'styles/FLATBOOTS/theme/custom.css'),
				));

			break;
		}
	}

	/**
	* Move menu position by $steps up/down, 3.1 compatabillity
	*/
	function move_menu_by($module_row, $action = 'move_up', $steps = 1)
	{
		global $db, $table_prefix;
		/**
		* Fetch all the siblings between the menu's current spot
		* and where we want to move it to. If there are less than $steps
		* siblings between the current spot and the target then the
		* menu will move as far as possible
		*/
		$sql_ary = array(
			'SELECT'	=> 'fsm.button_id, fsm.left_id, fsm.right_id',
			'FROM'		=> array(
				$table_prefix . 'flatboots_style_menu'	=> 'fsm',
			),
			'WHERE'		=> 'parent_id = ' . (int) $module_row['parent_id'] . '
								AND ' . (($action == 'move_up') ? 'right_id < ' . (int) $module_row['right_id'] : 'left_id > ' . (int) $module_row['left_id']),
			'ORDER_BY'	=> ($action == 'move_up') ? 'right_id DESC' : 'left_id ASC',
		);
		$result = $db->sql_query_limit($db->sql_build_query('SELECT', $sql_ary), $steps);

		$target = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$target = $row;
		}
		$db->sql_freeresult($result);

		if (!sizeof($target))
		{
			// The menu is already on top or bottom
			return false;
		}

		/**
		* $left_id and $right_id define the scope of the nodes that are affected by the move.
		* $diff_up and $diff_down are the values to substract or add to each node's left_id
		* and right_id in order to move them up or down.
		* $move_up_left and $move_up_right define the scope of the nodes that are moving
		* up. Other nodes in the scope of ($left_id, $right_id) are considered to move down.
		*/
		if ($action == 'move_up')
		{
			$left_id = (int) $target['left_id'];
			$right_id = (int) $module_row['right_id'];

			$diff_up = (int) ($module_row['left_id'] - $target['left_id']);
			$diff_down = (int) ($module_row['right_id'] + 1 - $module_row['left_id']);

			$move_up_left = (int) $module_row['left_id'];
			$move_up_right = (int) $module_row['right_id'];
		}
		else
		{
			$left_id = (int) $module_row['left_id'];
			$right_id = (int) $target['right_id'];

			$diff_up = (int) ($module_row['right_id'] + 1 - $module_row['left_id']);
			$diff_down = (int) ($target['right_id'] - $module_row['right_id']);

			$move_up_left = (int) ($module_row['right_id'] + 1);
			$move_up_right = (int) $target['right_id'];
		}

		// Now do the dirty job
		$sql = 'UPDATE ' . $table_prefix . 'flatboots_style_menu' . "
			SET left_id = left_id + CASE
				WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			right_id = right_id + CASE
				WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END
			WHERE left_id BETWEEN {$left_id} AND {$right_id}
				AND right_id BETWEEN {$left_id} AND {$right_id}";
		$db->sql_query($sql);
	}

	protected function acp_move_button($table, $button_row, $action = 'move_up')
	{
		global $db;

		$sql_ary = array(
			'SELECT'	=> 'tbl.*',
			'FROM'		=> array(
				$table	=> 'tbl',
			),
			'WHERE'		=> ($action == 'move_up') ? "right_id < {$button_row['right_id']}" : "left_id > {$button_row['left_id']}",
			'ORDER_BY'	=> ($action == 'move_up') ? 'right_id DESC' : 'left_id ASC',
		);
		$result = $db->sql_query_limit($db->sql_build_query('SELECT', $sql_ary), 1);

		$target = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$target = $row;
		}
		$db->sql_freeresult($result);

		if (!sizeof($target))
		{
		  // The button is already on top or bottom
			return false;
		}

		/*
		 * $left_id and $right_id define the scope of the nodes that are affected by the move.
		 * $diff_up and $diff_down are the values to substract or add to each node's left_id
		 * and right_id in order to move them up or down.
		 * $move_up_left and $move_up_right define the scope of the nodes that are moving
		 * up. Other nodes in the scope of ($left_id, $right_id) are considered to move down.
		 */
		if ($action == 'move_up')
		{
			$left_id = $target['left_id'];
			$right_id = $button_row['right_id'];

			$diff_up = $button_row['left_id'] - $target['left_id'];
			$diff_down = $button_row['right_id'] + 1 - $button_row['left_id'];

			$move_up_left = $button_row['left_id'];
			$move_up_right = $button_row['right_id'];
		}
		else
		{
			$left_id = $button_row['left_id'];
			$right_id = $target['right_id'];

			$diff_up = $button_row['right_id'] + 1 - $button_row['left_id'];
			$diff_down = $target['right_id'] - $button_row['right_id'];

			$move_up_left = $button_row['right_id'] + 1;
			$move_up_right = $target['right_id'];
		}

		$sql = 'UPDATE ' . $table . "
				SET left_id = left_id + CASE
				WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
				END,
				right_id = right_id + CASE
				WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
				END
				WHERE
				left_id BETWEEN {$left_id} AND {$right_id}
				AND right_id BETWEEN {$left_id} AND {$right_id}";
		$db->sql_query($sql);
	}	
}
