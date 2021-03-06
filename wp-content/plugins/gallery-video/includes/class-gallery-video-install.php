<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Gallery_Video_Install {

	/**
	 * Install  Gallery Image.
	 */
	public static function install() {
		if ( ! defined( 'GALLERY_VIDEO_INSTALLING' ) ) {
			define( 'GALLERY_VIDEO_INSTALLING', true );
		}
		self::create_tables();
		// Flush rules after install
		flush_rewrite_rules();
		// Trigger action
		do_action( 'gallery_video_installed' );
	}

	private static function create_tables() {
		global $wpdb;

		$sql_huge_it_videogallery_videos = "
CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "huge_it_videogallery_videos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `videogallery_id` varchar(200) DEFAULT NULL,
  `description` text,
  `image_url` text,
  `sl_url` varchar(128) DEFAULT NULL,
  `sl_type` text NOT NULL,
  `link_target` text NOT NULL,
  `ordering` int(11) NOT NULL,
  `published` tinyint(4) unsigned DEFAULT NULL,
  `published_in_sl_width` tinyint(4) unsigned DEFAULT NULL,
  `thumb_url` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
)   DEFAULT CHARSET=utf8 AUTO_INCREMENT=5";

		$sql_huge_it_videogallery_galleries = "
CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "huge_it_videogallery_galleries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `sl_height` int(11) unsigned DEFAULT NULL,
  `sl_width` int(11) unsigned DEFAULT NULL,
  `pause_on_hover` text,
  `videogallery_list_effects_s` text,
  `description` text,
  `param` text,
  `sl_position` text NOT NULL,
  `ordering` int(11) NOT NULL,
  `published` text,
   `huge_it_sl_effects` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
)   DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ";

		$table_name = $wpdb->prefix . "huge_it_videogallery_videos";
		$sql_2      = "
INSERT INTO 

`" . $table_name . "` (`id`, `name`, `videogallery_id`, `description`, `image_url`, `sl_url`, `sl_type`, `link_target`, `ordering`, `published`, `published_in_sl_width`) VALUES
(1, 'People Are Awesome', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'https://www.youtube.com/embed/yNHyTk2jYNA', 'http://huge-it.com', 'video', 'on', 0, 1, NULL),
(2, 'Africa Race', '1', '<ul><li>lorem ipsumdolor sit amet</li><li>lorem ipsum dolor sit amet</li></ul><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'http://player.vimeo.com/video/62604342', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 1, 1, NULL),
(3, 'London City In Motion', '1', '<h6>Lorem Ipsum </h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>lorem ipsum</li><li>dolor sit amet</li><li>lorem ipsum</li><li>dolor sit amet</li></ul>', 'http://player.vimeo.com/video/99310168', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 2, 1, NULL),
(4, 'Dubai City As You have Never Seen It Before', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><h6>Dolor sit amet</h6><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'https://www.youtube.com/embed/t5vta25jHQI', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 3, 1, NULL),
(5, 'Never say no to a Panda !', '1', '<h6>Lorem Ipsum</h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'http://player.vimeo.com/video/15371143', 'http://huge-it.com/', 'video', 'on', 4, 1, NULL),
(6, 'INDO-FLU', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>', 'http://player.vimeo.com/video/103151169', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 5, 1, NULL),
(7, 'People Are Awesome Womens Edition', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><h6>Lorem Ipsum</h6><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'https://www.youtube.com/embed/R5avCAn1vs0', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 6, 1, NULL),
(8, 'Norwey', '1', '<h6>Lorem Ipsum </h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>lorem ipsum</li><li>dolor sit amet</li><li>lorem ipsum</li><li>dolor sit amet</li></ul>', 'http://player.vimeo.com/video/31022539', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 7, 1, NULL),
(9, 'Slow Motion', '1', '<h6>Lorem Ipsum </h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>lorem ipsum</li><li>dolor sit amet</li><li>lorem ipsum</li><li>dolor sit amet</li></ul>', 'https://www.youtube.com/embed/gb69WX82Hvs', 'http://huge-it.com/', 'video', 'on', 7, 1, NULL)";

		$table_name = $wpdb->prefix . "huge_it_videogallery_galleries";
		$sql_3      = "

INSERT INTO `$table_name` (`id`, `name`, `sl_height`, `sl_width`, `pause_on_hover`, `videogallery_list_effects_s`, `description`, `param`, `sl_position`, `ordering`, `published`, `huge_it_sl_effects`) VALUES
(1, 'My First Video Gallery', 375, 600, 'on', 'random', '4000', '1000', 'center', 1, '300', '5')";


		$wpdb->query( $sql_huge_it_videogallery_videos );
		$wpdb->query( $sql_huge_it_videogallery_galleries );


		if ( ! $wpdb->get_var( "select count(*) from " . $wpdb->prefix . "huge_it_videogallery_videos" ) ) {
			$wpdb->query( $sql_2 );
		}
		if ( ! $wpdb->get_var( "select count(*) from " . $wpdb->prefix . "huge_it_videogallery_galleries" ) ) {
			$wpdb->query( $sql_3 );
		}
		$imagesAllFieldsInArray = $wpdb->get_results( "DESCRIBE " . $wpdb->prefix . "huge_it_videogallery_videos", ARRAY_A );
		$forUpdate              = 0;
		foreach ( $imagesAllFieldsInArray as $portfoliosField ) {
			if ( $portfoliosField['Field'] == 'thumb_url' ) {
				$forUpdate = 1;
			}
		}
		if ( $forUpdate != 1 ) {
			$wpdb->query( "ALTER TABLE " . $wpdb->prefix . "huge_it_videogallery_videos ADD thumb_url text DEFAULT NULL" );
		}
		$imagesAllFieldsInArray2 = $wpdb->get_results( "DESCRIBE " . $wpdb->prefix . "huge_it_videogallery_galleries", ARRAY_A );
		$fornewUpdate            = 0;
		foreach ( $imagesAllFieldsInArray2 as $portfoliosField2 ) {
			if ( $portfoliosField2['Field'] == 'display_type' ) {
				$fornewUpdate = 1;
			}
		}
		if ( $fornewUpdate != 1 ) {
			$wpdb->query( "ALTER TABLE " . $wpdb->prefix . "huge_it_videogallery_galleries ADD display_type integer DEFAULT '2' " );
			$wpdb->query( "ALTER TABLE " . $wpdb->prefix . "huge_it_videogallery_galleries ADD content_per_page integer DEFAULT '5' " );
		}
		$table_name = $wpdb->prefix . 'huge_it_videogallery_params';
		if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) == $table_name ) {
			$query                      = "SELECT name,value FROM " . $table_name;
			$video_gallery_table_params = $wpdb->get_results( $query );
		}
	}

	/**
	 * Update DataBase
	 */
	public static function db_update() {
		global $wpdb;
		$table_name_galleries = $wpdb->prefix . "huge_it_videogallery_galleries";
		$table_name_videos = $wpdb->prefix . "huge_it_videogallery_videos";
        if(function_exists('issetTableColumn')) {
            if ( ! issetTableColumn( $table_name_galleries, 'autoslide' ) ) {
                $wpdb->query( "ALTER TABLE " . $table_name_galleries . " ADD autoslide varchar(3) DEFAULT 'on'");
            }
	        if ( ! issetTableColumn( $table_name_videos, 'show_controls' ) ) {
		        $wpdb->query( "ALTER TABLE " . $table_name_videos . " 
                ADD COLUMN show_controls varchar(3) DEFAULT 'on',
                ADD COLUMN show_info varchar(3) DEFAULT 'on' " );
	        }
        }
	}
}