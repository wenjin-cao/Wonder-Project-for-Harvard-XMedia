<?php
/**
*
* @package sitesplat BBcore
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

namespace sitesplat\BBCore\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\Container;
use phpbb\path_helper;

/**
* Event listener
*/
class listener implements EventSubscriberInterface 
{
	protected $config;
	protected $db;
	protected $user;
	protected $auth;
	protected $helper;
	protected $template;
	protected $phpbb_container;
	protected $phpbb_root_path;
	protected $php_ext;

	public function __construct(\phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\user $user, \phpbb\auth\auth $auth, \phpbb\controller\helper $helper, \phpbb\template\template $template, Container $phpbb_container, $phpbb_root_path, $php_ext, path_helper $path_helper)
	{
		$this->config = $config;
		$this->db = $db;
		$this->user = $user;
		$this->auth = $auth;
		$this->helper = $helper;
		$this->template = $template;
		$this->phpbb_container = $phpbb_container;
		$this->root_path = $phpbb_root_path;
		$this->path_helper = $path_helper;
		$this->php_ext = $php_ext;
	}

	
	//  This below will add the proper translation to all languages 
	//  but some of the UCP avatar page strings and other places will stll not work - phpBB bug?
	//  replace this "core.user_setup" with the event below instead
	//	'core.page_header'								=> 'add_lang',
	
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'								=> 'add_lang',
		//	'core.page_header'								=> 'add_lang',
			'core.page_header_after'						=> 'add_template_variables',
			'core.page_footer_after'						=> 'disabled_board',
			'core.index_modify_page_title'					=> 'statistics',
			'core.ucp_display_module_before'				=> 'rewrite_zebra',
			'core.viewtopic_assign_template_vars_before'	=> 'add_viewtopic_template_variables',
			'core.memberlist_memberrow_before'				=> 'toggle_use_contact_fields',
			'core.gen_sort_selects_after'					=> 'enhance_sort_selects',
			'core.ucp_prefs_view_after'						=> 'enhance_ucp_prefs_selects',
		);
	}

	public function disabled_board($event)
	{
		$style_id = ((!$this->config['override_user_style']) ? $this->user->data['user_style'] : $this->config['default_style']);
		$sql = 'SELECT style_id FROM ' . STYLES_TABLE . " WHERE style_copyright LIKE '© SiteSplat.com%'";
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$in_sitesplat = ($row) ?  in_array($style_id, $row) : false;
	
		if ($this->config['board_disable'] && !defined('IN_LOGIN') && $in_sitesplat && !$this->auth->acl_get('a_'))
		{		
			// This path is sent with the base template paths in the assign_vars() call below. We need to correct it in case we are accessing from a
			// controller because the web paths will be incorrect otherwise.
			$web_path = (defined('PHPBB_USE_BOARD_URL_PATH') && PHPBB_USE_BOARD_URL_PATH) ? generate_board_url() . '/' : $this->path_helper->get_web_root_path();

			// Send a proper content-language to the output
			$user_lang = $this->user->lang['USER_LANG'];
			if (strpos($user_lang, '-x-') !== false)
			{
				$user_lang = substr($user_lang, 0, strpos($user_lang, '-x-'));
			}
			
			$file = $this->root_path . 'ext/sitesplat/BBCore/styles/' . rawurlencode($this->user->style['style_path']) . '/template/offline_board_body.html';
			$fp = fopen( $file , 'r' );
			$content = fread( $fp , filesize($file) );
			fclose( $fp );

			$match = array('#\{S_CONTENT_DIRECTION\}#', '#\{BODY_CLASS\}#', '#\{S_USER_LANG\}#', '#\{S_CONTENT_ENCODING\}#', '#\{SITENAME\}#', '#\{PAGE_TITLE\}#', '#\{T_STYLESHEET_LINK\}#',
				'#\{T_STYLESHEET_OFFLINE\}#', '#\{T_STYLESHEET_ANIMATE\}#', '#\{T_THEME_PATH\}#', '#\{SCRIPT_NAME\}#', '#\{L_BOARD_DISABLED\}#', '#\{ACP_DISABLE_MESSAGE\}#',
				'#\{L_LOGIN_LOGOUT\}#', '#\{U_LOGIN_LOGOUT\}#');
			$replace = array(
				$this->user->lang['DIRECTION'],
				'',
				$user_lang,
				'UTF-8',
				$this->config['sitename'],
				$this->user->lang['WEBSITE']. ' &#187; ' . $this->user->lang['OFFLINE'],
				"{$web_path}styles/" . rawurlencode($this->user->style['style_path']) . '/theme/stylesheet.css?assets_version=' . $this->config['assets_version'],
				"{$web_path}ext/sitesplat/BBCore/styles/" . rawurlencode($this->user->style['style_path']) . '/theme/offline.css',
				"{$web_path}ext/sitesplat/BBCore/styles/" . rawurlencode($this->user->style['style_path']) . '/theme/animate.css',
				"{$web_path}styles/" . rawurlencode($this->user->style['style_path']) . '/theme',
				str_replace('.' . $this->php_ext, '', $this->user->page['page_name']),
				$this->user->lang['BOARD_UNAVAILABLE'],
				$this->config['board_disable_msg'],
				$this->user->lang['LOGIN'],
				append_sid("{$this->phpbb_root_path}ucp.php", 'mode=login')
			);

			$content = preg_replace($match, $replace, $content);
			
			$response = new Response(
				'Content',
				200,
				array('content-type' => 'text/html')
			);
			$response->setContent($content);
			$response->send();
			garbage_collection();	
			exit_handler();	
		}
	}

	public function add_lang($event)
	{
		$this->user->add_lang_ext('sitesplat/BBCore', 'BBCore');
	}
	
	public function add_template_variables()
	{
		$this->template->assign_vars(array(
			'USER_EMAIL_MENU'			=> $this->user->data['user_email'],
			'BOARD_EMAIL'				=> $this->config['board_contact'],
			'SITESPLAT_SEARCH_WEEK'		=> append_sid("{$this->root_path}search.{$this->php_ext}", 'search_id=active_topics&amp;tp=7&amp;st=7'),
			'SITESPLAT_SEARCH_LAST_DAY'	=> append_sid("{$this->root_path}search.{$this->php_ext}", 'search_id=active_topics&amp;tp=1&amp;st=1'),
			'U_UCP_PREFERENCE'			=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=prefs'),
			'U_UCP_PREFERENCE_SETTINGS'	=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=prefs&amp;mode=personal'),
			'U_UCP_PROFILE_SETTINGS'	=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=profile&amp;mode=reg_details'),
			'U_UCP_PROFILE_AVATAR'		=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=profile&amp;mode=avatar'),
			'U_UCP_ZEBRA_FRIENDS'		=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=zebra&amp;mode=friends'),
			'U_UCP_PM_INBOX'			=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=pm&amp;folder=inbox'),
			'U_UCP_PM_OUTBOX'			=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=pm&amp;folder=outbox'),
			'U_UCP_PM_SENTBOX'			=> append_sid("{$this->root_path}ucp.{$this->php_ext}", 'i=pm&amp;folder=sentbox'),
			
			'PM_NEW_COUNT_BADGE'=> $this->user->lang('PM_NEW_MSG_BUBBLE', (int) $this->user->data['user_new_privmsg']),
			'PM_NEW_COUNT'		=> $this->user->lang('PM_NEW_MSG', (int) $this->user->data['user_new_privmsg']),
			'PM_UNREAD_COUNT'	=> $this->user->lang('PM_UNREAD_MSG', (int) $this->user->data['user_unread_privmsg']),
		));
	}

	public function statistics($event)
	{
		$online_users = obtain_users_online(0, 'forum');
		$total_online_users = $online_users['total_online'];

		$this->template->assign_vars(array(
			'SITESPLAT_RECORD_ONLINE'		=> ($this->config['record_online_users']) ? $this->config['record_online_users'] : '0',
			'SITESPLAT_CURRENTLY_ONLINE'	=> (isset($total_online_users) && $total_online_users) ? $total_online_users : '0',
			'SITESPLAT_TOTAL_POSTS'     	=> ($this->config['num_posts']) ? $this->config['num_posts'] : '0',
			'SITESPLAT_TOTAL_TOPICS'		=> ($this->config['num_topics']) ? $this->config['num_topics'] : '0',
			'SITESPLAT_TOTAL_USERS'			=> ($this->config['num_users']) ? $this->config['num_users'] : '0',
			'SITESPLAT_NEWEST_USER'			=> ($this->config['newest_user_id']) ? get_username_string('full', $this->config['newest_user_id'], $this->config['newest_username'], $this->config['newest_user_colour']) : '',
		));
	}

	public function rewrite_zebra($event)
	{
		$context = $this->phpbb_container->get('template_context'); 
 		$tpldata = &$context->get_data_ref(); 

		// Friends offline
 		if (isset($tpldata['friends_offline'])) 
 		{ 
 			foreach ($tpldata['friends_offline'] as $index => &$postrow) 
 			{ 
 				$user_id = $postrow['USER_ID'];
				$sql = 'SELECT user_avatar, user_avatar_type, user_avatar_width, user_avatar_height FROM ' . USERS_TABLE . ' WHERE user_id = ' . $user_id;
				$result = $this->db->sql_query($sql);
				$row = $this->db->sql_fetchrow($result);
				
				$postrow['AVATAR'] = phpbb_get_user_avatar($row);
 			} 
 		} 

		// Friends online
 		if (isset($tpldata['friends_online'])) 
 		{ 
 			foreach ($tpldata['friends_online'] as $index => &$postrow) 
 			{ 
 				$user_id = $postrow['USER_ID'];
				$sql = 'SELECT user_avatar, user_avatar_type, user_avatar_width, user_avatar_height FROM ' . USERS_TABLE . ' WHERE user_id = ' . $user_id;
				$result = $this->db->sql_query($sql);
				$row = $this->db->sql_fetchrow($result);
				
				$postrow['AVATAR'] = phpbb_get_user_avatar($row);
 			} 
 		} 
	}
	
	public function add_viewtopic_template_variables($event)
	{
		$this->template->assign_vars(array(
			'BOOKMARK_CLASS'	=> ($this->user->data['is_registered'] && $this->config['allow_bookmarks'] && $event['topic_data']['bookmarked']) ? 'fa fa-star' : 'fa fa-star-o',
		));
	}

	public function toggle_use_contact_fields($event) {
		$event['use_contact_fields'] = true;
	}
	
	public function enhance_sort_selects($event)
	{
		$event['s_limit_days'] = str_replace('<select', '<select class="selectpicker" data-width="100%" data-style="btn btn-default form-control" data-container="body"', $event['s_limit_days']);
		$event['s_sort_key'] = str_replace('<select', '<select class="selectpicker" data-width="100%" data-style="btn btn-default form-control" data-container="body"', $event['s_sort_key']);
		$event['s_sort_dir'] = str_replace('<select', '<select class="selectpicker" data-width="100%" data-style="btn btn-default form-control" data-container="body"', $event['s_sort_dir']);
	}

	public function enhance_ucp_prefs_selects($event)
	{
		$_options = array('s_limit_topic_days', 's_sort_topic_key', 's_sort_topic_dir', 's_limit_post_days', 's_sort_post_key', 's_sort_post_dir');
		foreach ($_options as $sort_option)
		{
			$event[$sort_option] = str_replace('<select', '<select class="selectpicker" data-container="body"' , $event[$sort_option]);
		}
	}
	
}
