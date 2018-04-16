<?php
/**
*
* Fancy Lazy Topics Loader
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

namespace sitesplat\fltl\controller;

use Symfony\Component\DependencyInjection\Container;

class main
{
	protected $db;
	protected $auth;
	protected $config;
	protected $user;
	protected $request;
	protected $dispatcher;
	protected $phpbb_root_path;
	protected $php_ext;

	public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\user $user, \phpbb\request\request $request, \phpbb\event\dispatcher_interface $dispatcher, $phpbb_root_path, $php_ext)
	{
		$this->db = $db;
		$this->auth = $auth;
		$this->config = $config;
		$this->user = $user;
		$this->request = $request;
		$this->dispatcher = $dispatcher;
		$this->root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
	}

	/**
	* Extension front handler method.
	* @return null
	*/
	public function handle($route = 'index.html')
	{
		$start = $this->request->variable('fltl_start', 0);
		$pid = ($this->config['fltl_type'] == 'last') ? 't.topic_last_poster_id' : 't.topic_poster';

		$forum_excluded_aray = json_decode($this->config['fltl_excluded_forums'], true);
		$forums = array_keys($this->auth->acl_getf('!f_read', true));
		$forums = (!empty($forum_excluded_aray)) ? array_unique(array_merge($forum_excluded_aray, $forums)) : $forums;

		$sql_where = (!empty($forums)) ? $this->db->sql_in_set('t.forum_id', $forums, true) . ' AND p.topic_id = t.topic_id ' : 'p.topic_id = t.topic_id ';

		$recent_topics_where = ($this->config['fltl_time']) ? 'AND t.topic_last_post_time > ' . (time() - ($this->config['fltl_time'] * 86400)) : '';
		$sql = 'SELECT COUNT(p.post_id) AS total
                FROM ' . TOPICS_TABLE . ' t, ' . POSTS_TABLE . ' p, ' . USERS_TABLE . ' u
				WHERE ' . $sql_where . '
                AND p.post_visibility = 1
                ' . $recent_topics_where . '
                AND u.user_id = ' . $pid . '
				AND p.post_id = t.topic_' . $this->config['fltl_type'] . '_post_id';
		$result = $this->db->sql_query($sql);
		$total = $this->db->sql_fetchfield('total');

		$sql_ary = array(
			'SELECT'	=> 'u.username, u.user_id, user_rank, user_posts, u.user_sig, user_avatar, user_avatar_type, user_avatar_width,
							user_avatar_height, p.post_id, p.post_text, t.topic_id, t.forum_id, t.topic_title, t.topic_last_post_time,
							t.topic_first_poster_colour, t.topic_last_post_id, t.topic_last_poster_name, t.topic_last_poster_colour',
			'FROM'		=> array(
				TOPICS_TABLE	=> 't',
				POSTS_TABLE		=> 'p',
				USERS_TABLE		=> 'u',
			),
			'WHERE'		=> $sql_where . '
                AND p.post_visibility = 1
                ' . $recent_topics_where . '
				AND u.user_id = ' . $pid . '
				AND p.post_id = t.topic_' . $this->config['fltl_type'] . '_post_id',
			'ORDER_BY'		=> 't.topic_last_post_time DESC',
		);

		/**
		* Event to modify SQL query before it is fired
		*
		* @event sitesplat.fltl.controller_sql
		* @var array	sql_ary	Array with SQL query
		* @since 2.1.13
		*/
		$vars = array(
			'sql_ary',
		);
		extract($this->dispatcher->trigger_event('sitesplat.fltl.controller_sql', compact($vars)));

		$sql = $this->db->sql_build_query('SELECT', $sql_ary);
		$result = $this->db->sql_query_limit($sql, $this->config['fltl_limit'], $start);
		$rows = $this->db->sql_fetchrowset($result);

		/**
		* Event to modify result of SQL query
		*
		* @event sitesplat.fltl.controller_sql_after
		* @var array	rows	Array with SQL query results
		* @since 2.1.13
		*/
		$vars = array(
			'rows',
		);
		extract($this->dispatcher->trigger_event('sitesplat.fltl.controller_sql_after', compact($vars)));

		if ($route == 'index.html')
		{
			$rows['rows'] = $rows;
			$rows['start'] = ($start + $this->config['fltl_limit'] >= $total) ? 0 : $start + $this->config['fltl_limit'];
			return $rows;
		} else
		{
			$url = generate_board_url() . '/';
			foreach($rows as $row)
			{
			    strip_bbcode($row['post_text']);
			    // switch for 3.2 and the new parser
			    $row['post_text'] = (version_compare($this->config['version'], '3.2.*', '<')) ? censor_text($row['post_text']) : htmlentities(censor_text($row['post_text']));
				$row['post_text'] = (utf8_strlen($row['post_text']) > 50) ? utf8_substr($row['post_text'], 0, 50) . '&#91;&hellip;&#93;' : $row['post_text'];
				echo '<div class="col-md-3 col-sm-6">
					<div class="panel panel-post">
						<div class="blog-meta">
						 <time class="entry-date" datetime="' . $this->user->format_date($row['topic_last_post_time'], 'Y-m-d', true) . '">
							<span class="day">' . $this->user->format_date($row['topic_last_post_time'], 'd', true) . '</span>
							<span class="month">' . $this->user->format_date($row['topic_last_post_time'], 'M', true) . '</span>
						 </time>
						</div>
						<div class="title">
						 <header class="entry-header">
						  <h6 class="inverse-font"><a title="" href="' . append_sid($url . 'viewtopic.' . $this->php_ext, 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']) . '" data-original-title="">' . censor_text($row['topic_title']) . '</a></h6>
							<div class="entry-meta">
							<span class="jp-views">' . (($row['user_avatar']) ? str_replace('../', '', phpbb_get_user_avatar(
											array('avatar' => $row['user_avatar'], 
											      'id' => $row['user_id'],
												  'avatar_type' => $row['user_avatar_type'],
												  'avatar_width' => $row['user_avatar_width'], 
												  'avatar_height' => $row['user_avatar_height']))) : '<img class="avatar_ftl" title="' .  $row['username'] . '" src="' .
										  generate_board_url() . '/styles/FLATBOOTS/theme/images/user4.png">') . $this->user->lang['FLTL_BY'] . (($row['topic_' . $this->config['fltl_type'] . '_poster_colour']) ? ('<strong style="color:#' . $row['topic_' . $this->config['fltl_type'] . '_poster_colour'] . '">' . $row['username'] . '</strong>') : $row['username']) . '</span>
							</div>
						 </header>
						</div>
						<div class="content-post">
						  <p>' . $row['post_text'] . '</p>  
						</div>
						<div class="panel-bottom">
						 <a title="" class="btn btn-xs btn-block" href="' . append_sid($url . 'viewtopic.'. $this->php_ext, 'p=' . $row['topic_last_post_id']) . '#p' . $row['topic_last_post_id'] . '" data-original-title="">' . $this->user->lang['FLTL_READ_MORE'] . '</a>
						</div>               
					</div>
					</div>';
				}
				echo '<script>
					var start = ' . (($start + $this->config['fltl_limit'] >= $total) ? 0 : $start + $this->config['fltl_limit']) . ';
					$(\'.rtbutton\').text(\'' . (($start + $this->config['fltl_limit'] >= $total) ? $this->user->lang['FLTL_BACK_TO_START'] : $this->user->lang['FLTL_VIEW_MORE_TOPICS']) . '\');
					</script>';
			$this->db->sql_freeresult($result);	
			exit();	
		}
	}
}
