<?php

/**
 * mail template model.
 * PHP Version 5.4.0
 * Version 1.0.0
 * @author Hideaki Oguchi (bluff-lab.com) <oguchi@bluff-lab.com>
 * @copyright 2016 Yamate Kenkyujo - Bluff Laboratory
 */
class BLFPST_Model_Template {

	/**
	 * @var int
	 */
	public static $template_type_user = 0;

	/**
	 * @var int
	 */
	public static $template_type_preset = 1;

	/**
	 * @var int
	 * get_resultで他のテーブルのidと混在するため使用しないこと
	 */
	public $id = 0;

	/**
	 * @var int
	 */
	public $user_id = 0;

	/**
	 * @var int
	 * 0:ユーザー 1:プリセット
	 */
	public $template_type = 0;

	/**
	 * @var string
	 * html/text
	 */
	public $content_type = '';

	/**
	 * @var string
	 */
	public $file_name = '';

	/**
	 * @var string
	 */
	public $title = '';

	/**
	 * @var string
	 */
	public $subject = '';

	/**
	 * @var string
	 */
	public $text_content = '';

	/**
	 * @var string
	 */
	public $html_content = '';

	/**
	 * @var string
	 */
	public $from_name = '';

	/**
	 * @var string
	 */
	public $from_address = '';

	/**
	 * @var string
	 */
	public $reply_name = '';

	/**
	 * @var string
	 */
	public $reply_address = '';

	/**
	 * @var string
	 */
	public $author = '';

	/**
	 * @var string
	 */
	public $description = '';

	/**
	 * @var string
	 */
	public $updated_at = '';

	/**
	 * @var string
	 */
	public $created_at = '';

	/**
	 * set parameter from data
	 *
	 * @param object $result
	 */
	public function set_result( $result ) {
		$this->id            = $result->id;
		$this->user_id       = $result->user_id;
		$this->template_type = $result->template_type;
		$this->content_type  = $result->content_type;
		$this->file_name     = $result->file_name;
		$this->title         = stripslashes( $result->title );
		$this->subject       = stripslashes( $result->subject );
		$this->text_content  = stripslashes( $result->text_content );
		$this->html_content  = stripslashes( $result->html_content );
		$this->from_name     = stripslashes( $result->from_name );
		$this->from_address  = stripslashes( $result->from_address );
		$this->reply_name    = stripslashes( $result->reply_name );
		$this->reply_address = stripslashes( $result->reply_address );
		$this->author        = stripslashes( $result->author );
		$this->description   = stripslashes( $result->description );
		$this->updated_at    = $result->updated_at;
		$this->created_at    = $result->created_at;
	}

	/**
	 * @return string
	 */
	public static function table_name() {
		global $wpdb;

		return $wpdb->prefix . 'blfpst_mail_templates';
	}

	/**
	 * @return string
	 */
	public static function meta_table_name() {
		global $wpdb;

		return $wpdb->prefix . 'blfpst_mail_template_meta';
	}
}
