-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wp_commentmeta`
--

DROP TABLE IF EXISTS `wp_commentmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_commentmeta`
--

LOCK TABLES `wp_commentmeta` WRITE;
/*!40000 ALTER TABLE `wp_commentmeta` DISABLE KEYS */;
INSERT INTO `wp_commentmeta` VALUES (1,3,'_wp_trash_meta_status','1'),(2,3,'_wp_trash_meta_time','1408741476'),(3,2,'_wp_trash_meta_status','1'),(4,2,'_wp_trash_meta_time','1408741477'),(5,4,'_wp_trash_meta_status','1'),(6,4,'_wp_trash_meta_time','1408741479'),(7,10,'_wp_trash_meta_status','1'),(8,10,'_wp_trash_meta_time','1411758392');
/*!40000 ALTER TABLE `wp_commentmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_comments`
--

DROP TABLE IF EXISTS `wp_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_comments`
--

LOCK TABLES `wp_comments` WRITE;
/*!40000 ALTER TABLE `wp_comments` DISABLE KEYS */;
INSERT INTO `wp_comments` VALUES (1,1,'Mr WordPress','','http://wordpress.org/','','2013-01-22 20:29:46','2013-01-22 20:29:46','Hi, this is a comment.\nTo delete a comment, just log in and view the post&#039;s comments. There you will have the option to edit or delete them.',0,'post-trashed','','',0,0),(2,33,'admin','test@example.com','','10.0.2.2','2014-08-22 15:07:47','2014-08-22 19:37:47',' qw',0,'trash','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36','',0,1),(3,33,'admin','test@example.com','','10.0.2.2','2014-08-22 15:12:49','2014-08-22 19:42:49','qweqw',0,'trash','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36','',2,1),(4,30,'admin','test@example.com','','10.0.2.2','2014-08-22 15:27:52','2014-08-22 19:57:52','ewtwre',0,'trash','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36','',0,1),(5,33,'admin','test@example.com','','10.0.2.2','2014-08-22 16:38:12','2014-08-22 21:08:12','ujewwqe\\',0,'1','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36','',0,1),(6,30,'admin','test@example.com','','10.0.2.2','2014-08-22 18:49:27','2014-08-22 23:19:27','cometario 1',0,'1','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36','',0,1),(7,30,'admin','test@example.com','','10.0.2.2','2014-09-26 14:35:17','2014-09-26 19:05:17','a ver',0,'1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36','',6,1),(8,30,'admin','test@example.com','','10.0.2.2','2014-09-26 14:35:31','2014-09-26 19:05:31','neeeeeh',0,'1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36','',7,1),(9,30,'admin','test@example.com','','10.0.2.2','2014-09-26 14:35:41','2014-09-26 19:05:41','dale pues',0,'1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36','',8,1),(10,30,'admin','test@example.com','','10.0.2.2','2014-09-26 14:35:50','2014-09-26 19:05:50','mmmmmmmmm',0,'trash','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36','',9,1),(11,33,'maldonel','maldoxd@gmail.com','','10.0.2.2','2014-10-15 18:54:40','2014-10-15 23:24:40','a ver',0,'1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36','',0,3),(12,33,'admin','test@example.com','','10.0.2.2','2014-10-15 19:29:17','2014-10-15 23:59:17','bicho aprende a hacer arquitecturas',0,'1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36','',11,1);
/*!40000 ALTER TABLE `wp_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_links`
--

DROP TABLE IF EXISTS `wp_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_links`
--

LOCK TABLES `wp_links` WRITE;
/*!40000 ALTER TABLE `wp_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_options`
--

DROP TABLE IF EXISTS `wp_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=503 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_options`
--

LOCK TABLES `wp_options` WRITE;
/*!40000 ALTER TABLE `wp_options` DISABLE KEYS */;
INSERT INTO `wp_options` VALUES (1,'siteurl','http://localhost:8080/','yes'),(2,'blogname','{Hack}','yes'),(3,'blogdescription','Academia de formación intensiva de programadores','yes'),(4,'users_can_register','0','yes'),(5,'admin_email','test@example.com','yes'),(6,'start_of_week','1','yes'),(7,'use_balanceTags','','yes'),(8,'use_smilies','1','yes'),(9,'require_name_email','','yes'),(10,'comments_notify','1','yes'),(11,'posts_per_rss','10','yes'),(12,'rss_use_excerpt','0','yes'),(13,'mailserver_url','mail.example.com','yes'),(14,'mailserver_login','login@example.com','yes'),(15,'mailserver_pass','password','yes'),(16,'mailserver_port','110','yes'),(17,'default_category','5','yes'),(18,'default_comment_status','open','yes'),(19,'default_ping_status','open','yes'),(20,'default_pingback_flag','','yes'),(21,'posts_per_page','10','yes'),(22,'date_format','j F, Y','yes'),(23,'time_format','g:i A','yes'),(24,'links_updated_date_format','F j, Y g:i a','yes'),(28,'comment_moderation','','yes'),(29,'moderation_notify','1','yes'),(30,'permalink_structure','/%postname%/','yes'),(31,'gzipcompression','0','yes'),(32,'hack_file','0','yes'),(33,'blog_charset','UTF-8','yes'),(34,'moderation_keys','','no'),(35,'active_plugins','a:4:{i:0;s:46:\"bainternet-Tax-Meta-Class/class-usage-demo.php\";i:1;s:41:\"comment-attachment/comment-attachment.php\";i:2;s:30:\"skilltree-plugin/skilltree.php\";i:3;s:34:\"ultimate-profile-builder/index.php\";}','yes'),(36,'home','http://localhost:8080/','yes'),(37,'category_base','','yes'),(38,'ping_sites','http://rpc.pingomatic.com/','yes'),(39,'advanced_edit','0','yes'),(40,'comment_max_links','2','yes'),(41,'gmt_offset','-4.5','yes'),(42,'default_email_category','1','yes'),(43,'recently_edited','a:2:{i:0;s:84:\"/vagrant/wordpress/wp-content/plugins/bainternet-Tax-Meta-Class/class-usage-demo.php\";i:2;s:0:\"\";}','no'),(44,'template','HackRoots','yes'),(45,'stylesheet','HackRoots','yes'),(46,'comment_whitelist','','yes'),(47,'blacklist_keys','','no'),(48,'comment_registration','1','yes'),(49,'html_type','text/html','yes'),(50,'use_trackback','0','yes'),(51,'default_role','subscriber','yes'),(52,'db_version','27916','yes'),(53,'uploads_use_yearmonth_folders','1','yes'),(54,'upload_path','','yes'),(55,'blog_public','0','yes'),(56,'default_link_category','0','yes'),(57,'show_on_front','posts','yes'),(58,'tag_base','','yes'),(59,'show_avatars','1','yes'),(60,'avatar_rating','G','yes'),(61,'upload_url_path','','yes'),(62,'thumbnail_size_w','150','yes'),(63,'thumbnail_size_h','150','yes'),(64,'thumbnail_crop','1','yes'),(65,'medium_size_w','300','yes'),(66,'medium_size_h','300','yes'),(67,'avatar_default','mystery','yes'),(68,'large_size_w','1024','yes'),(69,'large_size_h','1024','yes'),(70,'image_default_link_type','file','yes'),(71,'image_default_size','','yes'),(72,'image_default_align','','yes'),(73,'close_comments_for_old_posts','','yes'),(74,'close_comments_days_old','14','yes'),(75,'thread_comments','1','yes'),(76,'thread_comments_depth','4','yes'),(77,'page_comments','','yes'),(78,'comments_per_page','50','yes'),(79,'default_comments_page','newest','yes'),(80,'comment_order','asc','yes'),(81,'sticky_posts','a:0:{}','yes'),(82,'widget_categories','a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}','yes'),(83,'widget_text','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(84,'widget_rss','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(85,'uninstall_plugins','a:0:{}','no'),(86,'timezone_string','','yes'),(87,'page_for_posts','0','yes'),(88,'page_on_front','0','yes'),(89,'default_post_format','0','yes'),(90,'link_manager_enabled','0','yes'),(91,'initial_db_version','22441','yes'),(92,'wp_user_roles','a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:62:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:9:\"add_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}','yes'),(93,'widget_search','a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}','yes'),(94,'widget_recent-posts','a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}','yes'),(95,'widget_recent-comments','a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}','yes'),(96,'widget_archives','a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}','yes'),(97,'widget_meta','a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}','yes'),(98,'sidebars_widgets','a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:18:\"orphaned_widgets_1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}','yes'),(99,'cron','a:6:{i:1358886607;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1408392442;a:1:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1408393765;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1408393772;a:1:{s:8:\"do_pings\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:2:{s:8:\"schedule\";b:0;s:4:\"args\";a:0:{}}}}i:1408433880;a:1:{s:20:\"wp_maybe_auto_update\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}s:7:\"version\";i:2;}','yes'),(100,'_transient_doing_cron','1413419072.1376171112060546875000','yes'),(102,'db_upgraded','','yes'),(104,'_site_transient_update_plugins','O:8:\"stdClass\":1:{s:12:\"last_checked\";i:1413408387;}','yes'),(107,'_site_transient_update_themes','O:8:\"stdClass\":1:{s:12:\"last_checked\";i:1413408404;}','yes'),(108,'can_compress_scripts','0','yes'),(126,'_transient_random_seed','0b76e08a1fd20474420f87d2f48416fd','yes'),(127,'logged_in_key','&}W6G8{(+KMluEssBz5?s@b}JtzpT ef8rv@AB }}r,$y4Y+d;`D$7wIP(Z)+.:R','yes'),(128,'logged_in_salt','+>oBsb.>+#i9R2rCe,92N#ZW<&//j4k-$ZYB 1/x2 !-F0QE(^h>5^X~*iv>5i,$','yes'),(129,'auth_key','7r 9JA?67L7vMdN0 @PB 2D*0p#$XGGfZ%&PV3y:;R[dA-0eaDW^VJ[@5,=@q*Iu','yes'),(130,'auth_salt',';&)K]9xDxrm@L,0,og.y yt*!#@4]w^s7Ce2|,]NpQo[D]eTAAU*j?]{WN8XN@cW','yes'),(131,'nonce_key','swB%d orJ!gbPH!bR890C1E8`$7 rKBDDKoZa]t^R~G4EsqOoZE!0?cKh87nw.wt','yes'),(132,'nonce_salt','(.>5@o[a<w)N4hcN+yt/lK*}v{)yD*relU[J; .bA.Vr}^`]^}_5TK020sUOjVYQ','yes'),(135,'recently_activated','a:0:{}','yes'),(136,'commentAttachment','a:25:{s:25:\"commentAttachmentPosition\";s:5:\"after\";s:22:\"commentAttachmentTitle\";s:17:\"Upload Attachment\";s:24:\"commentAttachmentMaxSize\";s:1:\"2\";s:21:\"commentAttachmentBind\";s:1:\"1\";s:27:\"commentAttachmentThumbTitle\";s:11:\"Attachment:\";s:26:\"commentAttachmentAPosition\";s:5:\"after\";s:22:\"commentAttachmentThumb\";s:1:\"1\";s:26:\"commentAttachmentThumbSize\";s:9:\"thumbnail\";s:23:\"commentAttachmentPlayer\";s:1:\"1\";s:23:\"commentAttachmentDelete\";s:1:\"1\";s:20:\"commentAttachmentJPG\";s:1:\"1\";s:20:\"commentAttachmentGIF\";s:1:\"1\";s:20:\"commentAttachmentPNG\";s:1:\"1\";s:20:\"commentAttachmentPDF\";s:1:\"1\";s:20:\"commentAttachmentDOC\";s:1:\"1\";s:21:\"commentAttachmentDOCX\";s:1:\"1\";s:20:\"commentAttachmentPPT\";s:1:\"1\";s:21:\"commentAttachmentPPTX\";s:1:\"1\";s:20:\"commentAttachmentPPS\";s:1:\"1\";s:21:\"commentAttachmentPPSX\";s:1:\"1\";s:20:\"commentAttachmentODT\";s:1:\"1\";s:20:\"commentAttachmentXLS\";s:1:\"1\";s:21:\"commentAttachmentXLSX\";s:1:\"1\";s:20:\"commentAttachmentRAR\";s:1:\"1\";s:20:\"commentAttachmentZIP\";s:1:\"1\";}','yes'),(137,'theme_mods_twentytwelve','a:1:{s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1408393390;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}','yes'),(138,'current_theme','Roots Starter Theme','yes'),(139,'theme_mods_HackRoots','a:2:{i:0;b:0;s:18:\"nav_menu_locations\";a:7:{s:17:\"header_menu_right\";i:2;s:16:\"header_menu_left\";i:4;s:18:\"primary_navigation\";i:0;s:11:\"header_menu\";i:4;s:13:\"header_logged\";i:28;s:17:\"header_not_logged\";i:2;s:14:\"header_profile\";i:65;}}','yes'),(140,'theme_switched','','yes'),(148,'nav_menu_options','a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}','yes'),(152,'theme_mods_twentyfourteen','a:2:{i:0;b:0;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1408395076;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";N;s:9:\"sidebar-3\";N;}}}','yes'),(153,'roots_theme_activation_options','a:4:{s:17:\"create_front_page\";s:5:\"false\";s:26:\"change_permalink_structure\";b:0;s:23:\"create_navigation_menus\";b:0;s:31:\"add_pages_to_primary_navigation\";s:5:\"false\";}','yes'),(191,'_site_transient_update_core','O:8:\"stdClass\":3:{s:7:\"updates\";a:0:{}s:15:\"version_checked\";s:5:\"3.9.1\";s:12:\"last_checked\";i:1413408376;}','yes'),(214,'widget_pages','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(215,'widget_calendar','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(216,'widget_tag_cloud','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(217,'widget_nav_menu','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(239,'tax_meta_17','a:1:{s:11:\"text_cat_id\";s:1:\"1\";}','yes'),(241,'tax_meta_19','a:1:{s:11:\"text_cat_id\";s:1:\"3\";}','yes'),(244,'tax_meta_21','a:1:{s:11:\"text_cat_id\";s:1:\"5\";}','yes'),(246,'tax_meta_20','a:1:{s:11:\"text_cat_id\";s:1:\"4\";}','yes'),(248,'tax_meta_18','a:1:{s:11:\"text_cat_id\";s:1:\"2\";}','yes'),(260,'tax_meta_29','a:1:{s:11:\"text_cat_id\";s:2:\"12\";}','yes'),(262,'tax_meta_30','a:1:{s:11:\"text_cat_id\";s:2:\"13\";}','yes'),(264,'tax_meta_31','a:1:{s:11:\"text_cat_id\";s:2:\"14\";}','yes'),(266,'tax_meta_32','a:1:{s:11:\"text_cat_id\";s:2:\"15\";}','yes'),(268,'tax_meta_33','a:1:{s:11:\"text_cat_id\";s:2:\"16\";}','yes'),(270,'tax_meta_34','a:1:{s:11:\"text_cat_id\";s:2:\"17\";}','yes'),(272,'tax_meta_35','a:1:{s:11:\"text_cat_id\";s:2:\"18\";}','yes'),(274,'tax_meta_36','a:1:{s:11:\"text_cat_id\";s:2:\"19\";}','yes'),(276,'tax_meta_37','a:1:{s:11:\"text_cat_id\";s:2:\"20\";}','yes'),(278,'tax_meta_38','a:1:{s:11:\"text_cat_id\";s:2:\"21\";}','yes'),(280,'tax_meta_39','a:1:{s:11:\"text_cat_id\";s:2:\"22\";}','yes'),(282,'tax_meta_40','a:1:{s:11:\"text_cat_id\";s:2:\"23\";}','yes'),(284,'tax_meta_41','a:1:{s:11:\"text_cat_id\";s:2:\"24\";}','yes'),(286,'tax_meta_42','a:1:{s:11:\"text_cat_id\";s:2:\"25\";}','yes'),(288,'tax_meta_43','a:1:{s:11:\"text_cat_id\";s:2:\"26\";}','yes'),(290,'tax_meta_44','a:1:{s:11:\"text_cat_id\";s:2:\"27\";}','yes'),(292,'tax_meta_45','a:1:{s:11:\"text_cat_id\";s:2:\"28\";}','yes'),(294,'tax_meta_46','a:1:{s:11:\"text_cat_id\";s:2:\"29\";}','yes'),(296,'tax_meta_47','a:1:{s:11:\"text_cat_id\";s:2:\"30\";}','yes'),(298,'tax_meta_48','a:1:{s:11:\"text_cat_id\";s:2:\"31\";}','yes'),(300,'tax_meta_49','a:1:{s:11:\"text_cat_id\";s:2:\"32\";}','yes'),(302,'tax_meta_50','a:1:{s:11:\"text_cat_id\";s:2:\"33\";}','yes'),(304,'tax_meta_51','a:1:{s:11:\"text_cat_id\";s:2:\"34\";}','yes'),(306,'tax_meta_52','a:1:{s:11:\"text_cat_id\";s:2:\"35\";}','yes'),(308,'tax_meta_53','a:1:{s:11:\"text_cat_id\";s:2:\"36\";}','yes'),(310,'tax_meta_54','a:1:{s:11:\"text_cat_id\";s:2:\"37\";}','yes'),(312,'tax_meta_55','a:1:{s:11:\"text_cat_id\";s:2:\"38\";}','yes'),(314,'tax_meta_56','a:1:{s:11:\"text_cat_id\";s:2:\"39\";}','yes'),(316,'tax_meta_57','a:1:{s:11:\"text_cat_id\";s:2:\"40\";}','yes'),(318,'tax_meta_58','a:1:{s:11:\"text_cat_id\";s:2:\"41\";}','yes'),(320,'tax_meta_59','a:1:{s:11:\"text_cat_id\";s:2:\"42\";}','yes'),(322,'tax_meta_60','a:1:{s:11:\"text_cat_id\";s:2:\"43\";}','yes'),(324,'tax_meta_61','a:1:{s:11:\"text_cat_id\";s:2:\"44\";}','yes'),(326,'tax_meta_62','a:1:{s:11:\"text_cat_id\";s:2:\"45\";}','yes'),(328,'tax_meta_63','a:1:{s:11:\"text_cat_id\";s:2:\"51\";}','yes'),(330,'tax_meta_64','a:1:{s:11:\"text_cat_id\";s:2:\"52\";}','yes'),(332,'tax_meta_26','a:1:{s:11:\"text_cat_id\";s:2:\"10\";}','yes'),(336,'tax_meta_24','a:1:{s:11:\"text_cat_id\";s:1:\"8\";}','yes'),(338,'tax_meta_25','a:1:{s:11:\"text_cat_id\";s:1:\"9\";}','yes'),(340,'tax_meta_23','a:1:{s:11:\"text_cat_id\";s:1:\"7\";}','yes'),(342,'tax_meta_22','a:1:{s:11:\"text_cat_id\";s:1:\"6\";}','yes'),(349,'tax_meta_27','a:1:{s:11:\"text_cat_id\";s:2:\"11\";}','yes'),(378,'category_children','a:11:{i:6;a:10:{i:0;i:7;i:1;i:8;i:2;i:9;i:3;i:10;i:4;i:11;i:5;i:12;i:6;i:13;i:7;i:14;i:8;i:15;i:9;i:16;}i:7;a:5:{i:0;i:17;i:1;i:18;i:2;i:19;i:3;i:20;i:4;i:21;}i:8;a:5:{i:0;i:22;i:1;i:23;i:2;i:24;i:3;i:25;i:4;i:26;}i:9;a:5:{i:0;i:27;i:1;i:29;i:2;i:30;i:3;i:31;i:4;i:32;}i:10;a:5:{i:0;i:33;i:1;i:34;i:2;i:35;i:3;i:36;i:4;i:37;}i:11;a:5:{i:0;i:38;i:1;i:39;i:2;i:40;i:3;i:41;i:4;i:42;}i:12;a:5:{i:0;i:43;i:1;i:44;i:2;i:45;i:3;i:46;i:4;i:47;}i:13;a:5:{i:0;i:48;i:1;i:49;i:2;i:50;i:3;i:51;i:4;i:52;}i:14;a:5:{i:0;i:53;i:1;i:54;i:2;i:55;i:3;i:56;i:4;i:57;}i:15;a:5:{i:0;i:58;i:1;i:59;i:2;i:60;i:3;i:61;i:4;i:62;}i:16;a:2:{i:0;i:63;i:1;i:64;}}','yes'),(471,'_transient_timeout_plugin_slugs','1413419508','no'),(472,'_transient_plugin_slugs','a:6:{i:0;s:19:\"akismet/akismet.php\";i:1;s:46:\"bainternet-Tax-Meta-Class/class-usage-demo.php\";i:2;s:41:\"comment-attachment/comment-attachment.php\";i:3;s:9:\"hello.php\";i:4;s:30:\"skilltree-plugin/skilltree.php\";i:5;s:34:\"ultimate-profile-builder/index.php\";}','no'),(493,'_site_transient_timeout_theme_roots','1413410204','yes'),(494,'_site_transient_theme_roots','a:4:{s:9:\"HackRoots\";s:7:\"/themes\";s:14:\"twentyfourteen\";s:7:\"/themes\";s:14:\"twentythirteen\";s:7:\"/themes\";s:12:\"twentytwelve\";s:7:\"/themes\";}','yes'),(495,'_transient_timeout_dash_4077549d03da2e451c8b5f002294ff51','1413451679','no'),(496,'_transient_dash_4077549d03da2e451c8b5f002294ff51','<div class=\"rss-widget\"><p><strong>Error en el RSS:</strong> WP HTTP Error: Operation timed out after 10000 milliseconds with 0 bytes received</p></div><div class=\"rss-widget\"><p><strong>Error en el RSS:</strong> WP HTTP Error: Resolving timed out after 10526 milliseconds</p></div><div class=\"rss-widget\"><ul></ul></div>','no'),(499,'_transient_is_multi_author','0','yes'),(500,'rewrite_rules','a:68:{s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:20:\"(.?.+?)(/[0-9]+)?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:20:\"([^/]+)(/[0-9]+)?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";}','yes');
/*!40000 ALTER TABLE `wp_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default'),(10,1,'_wp_trash_meta_status','publish'),(11,1,'_wp_trash_meta_time','1408393762'),(12,1,'_wp_trash_meta_comments_status','a:1:{i:1;s:1:\"1\";}'),(13,6,'_edit_last','1'),(14,6,'_edit_lock','1408393634:1'),(15,6,'_encloseme','1'),(16,8,'_edit_last','1'),(17,8,'_edit_lock','1408393653:1'),(18,8,'_encloseme','1'),(19,10,'_edit_last','1'),(20,10,'_encloseme','1'),(21,10,'_edit_lock','1408393663:1'),(22,13,'_edit_last','1'),(23,13,'_edit_lock','1412802531:1'),(24,13,'_wp_page_template','template-profile.php'),(25,15,'_edit_last','1'),(26,15,'_edit_lock','1413413910:1'),(27,15,'_wp_page_template','template-login.php'),(28,17,'_edit_last','1'),(29,17,'_wp_page_template','template-registration.php'),(30,17,'_edit_lock','1408570272:1'),(40,20,'_menu_item_type','post_type'),(41,20,'_menu_item_menu_item_parent','0'),(42,20,'_menu_item_object_id','15'),(43,20,'_menu_item_object','page'),(44,20,'_menu_item_target',''),(45,20,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(46,20,'_menu_item_xfn',''),(47,20,'_menu_item_url',''),(49,21,'_menu_item_type','post_type'),(50,21,'_menu_item_menu_item_parent','0'),(51,21,'_menu_item_object_id','17'),(52,21,'_menu_item_object','page'),(53,21,'_menu_item_target',''),(54,21,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(55,21,'_menu_item_xfn',''),(56,21,'_menu_item_url',''),(67,23,'_menu_item_type','taxonomy'),(68,23,'_menu_item_menu_item_parent','0'),(69,23,'_menu_item_object_id','6'),(70,23,'_menu_item_object','category'),(71,23,'_menu_item_target',''),(72,23,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(73,23,'_menu_item_xfn',''),(74,23,'_menu_item_url',''),(85,27,'_menu_item_type','taxonomy'),(86,27,'_menu_item_menu_item_parent','0'),(87,27,'_menu_item_object_id','5'),(88,27,'_menu_item_object','category'),(89,27,'_menu_item_target',''),(90,27,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(91,27,'_menu_item_xfn',''),(92,27,'_menu_item_url',''),(103,29,'_menu_item_type','custom'),(104,29,'_menu_item_menu_item_parent','0'),(105,29,'_menu_item_object_id','29'),(106,29,'_menu_item_object','custom'),(107,29,'_menu_item_target',''),(108,29,'_menu_item_classes','a:2:{i:0;s:9:\"outperfil\";i:1;s:10:\"pull-right\";}'),(109,29,'_menu_item_xfn',''),(110,29,'_menu_item_url','/'),(112,30,'_edit_last','1'),(113,30,'_edit_lock','1413411828:1'),(114,30,'_encloseme','1'),(118,30,'_encloseme','1'),(119,33,'_edit_last','1'),(120,33,'_edit_lock','1408741417:1'),(121,33,'_encloseme','1'),(122,35,'_menu_item_type','post_type'),(123,35,'_menu_item_menu_item_parent','0'),(124,35,'_menu_item_object_id','13'),(125,35,'_menu_item_object','page'),(126,35,'_menu_item_target',''),(127,35,'_menu_item_classes','a:1:{i:0;s:10:\"perfilLink\";}'),(128,35,'_menu_item_xfn',''),(129,35,'_menu_item_url',''),(157,41,'_edit_last','1'),(158,41,'_wp_page_template','template-prox.php'),(159,41,'_edit_lock','1408740289:1'),(160,33,'_encloseme','1'),(161,10,'_wp_trash_meta_status','publish'),(162,10,'_wp_trash_meta_time','1408741443'),(163,8,'_wp_trash_meta_status','publish'),(164,8,'_wp_trash_meta_time','1408741443'),(165,6,'_wp_trash_meta_status','publish'),(166,6,'_wp_trash_meta_time','1408741443'),(167,45,'_wp_attached_file','2014/08/CIMG01641.jpg'),(168,45,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:3648;s:6:\"height\";i:2736;s:4:\"file\";s:21:\"2014/08/CIMG01641.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"CIMG01641-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"CIMG01641-300x225.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:22:\"CIMG01641-1024x768.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";d:5.0999999999999996;s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:6:\"EX-Z33\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:1321348503;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:4:\"15.7\";s:3:\"iso\";s:3:\"400\";s:13:\"shutter_speed\";s:4:\"0.01\";s:5:\"title\";s:0:\"\";}}'),(170,30,'_encloseme','1'),(171,46,'_edit_lock','1408749843:1'),(181,48,'_menu_item_type','custom'),(182,48,'_menu_item_menu_item_parent','0'),(183,48,'_menu_item_object_id','48'),(184,48,'_menu_item_object','custom'),(185,48,'_menu_item_target',''),(186,48,'_menu_item_classes','a:2:{i:0;s:9:\"outperfil\";i:1;s:10:\"pull-right\";}'),(187,48,'_menu_item_xfn',''),(188,48,'_menu_item_url','/'),(189,49,'_edit_lock','1413412908:1'),(190,49,'_edit_last','1'),(191,49,'_encloseme','1'),(192,30,'_encloseme','1'),(193,53,'_edit_lock','1413411792:1'),(194,53,'_edit_last','1'),(195,53,'_encloseme','1'),(196,55,'_edit_lock','1413255494:1'),(197,53,'_encloseme','1'),(198,56,'_edit_lock','1413411862:1'),(199,56,'_edit_last','1'),(200,56,'_encloseme','1'),(201,58,'_edit_lock','1413411780:1'),(202,58,'_edit_last','1'),(203,58,'_encloseme','1'),(204,60,'_edit_lock','1413411758:1'),(205,60,'_edit_last','1'),(206,60,'_encloseme','1'),(207,62,'_edit_lock','1413411729:1'),(208,62,'_edit_last','1'),(209,62,'_encloseme','1'),(210,64,'_edit_lock','1413411735:1'),(211,64,'_edit_last','1'),(212,64,'_encloseme','1'),(213,66,'_edit_lock','1413411740:1'),(214,66,'_edit_last','1'),(215,66,'_encloseme','1'),(216,68,'_edit_lock','1413412747:1'),(217,68,'_edit_last','1'),(218,68,'_encloseme','1'),(219,68,'_encloseme','1'),(220,71,'_edit_lock','1413412752:1'),(221,71,'_edit_last','1'),(222,71,'_encloseme','1'),(223,73,'_edit_lock','1413412757:1'),(224,73,'_edit_last','1'),(225,73,'_encloseme','1'),(226,75,'_edit_lock','1413412762:1'),(227,75,'_edit_last','1'),(228,75,'_encloseme','1'),(229,77,'_edit_lock','1413412767:1'),(230,77,'_edit_last','1'),(231,77,'_encloseme','1'),(232,79,'_edit_lock','1413412774:1'),(233,79,'_edit_last','1'),(234,79,'_encloseme','1'),(235,81,'_edit_lock','1413412781:1'),(236,81,'_edit_last','1'),(237,81,'_encloseme','1'),(238,83,'_edit_lock','1413412786:1'),(239,83,'_edit_last','1'),(240,83,'_encloseme','1'),(241,85,'_edit_lock','1413412794:1'),(242,85,'_edit_last','1'),(243,85,'_encloseme','1'),(244,87,'_edit_lock','1413412799:1'),(245,87,'_edit_last','1'),(246,87,'_encloseme','1'),(247,89,'_edit_lock','1413412806:1'),(248,89,'_edit_last','1'),(249,89,'_encloseme','1'),(250,91,'_edit_lock','1413412824:1'),(251,91,'_edit_last','1'),(252,91,'_encloseme','1'),(253,62,'_encloseme','1'),(254,64,'_encloseme','1'),(255,66,'_encloseme','1'),(256,60,'_encloseme','1'),(257,58,'_encloseme','1'),(258,58,'_encloseme','1'),(259,53,'_encloseme','1'),(260,30,'_encloseme','1'),(261,56,'_encloseme','1'),(262,68,'_encloseme','1'),(263,71,'_encloseme','1'),(264,73,'_encloseme','1'),(265,75,'_encloseme','1'),(266,77,'_encloseme','1'),(267,79,'_encloseme','1'),(268,81,'_encloseme','1'),(269,83,'_encloseme','1'),(270,85,'_encloseme','1'),(271,87,'_encloseme','1'),(272,89,'_encloseme','1'),(273,91,'_encloseme','1'),(274,49,'_encloseme','1');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_posts`
--

DROP TABLE IF EXISTS `wp_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_posts`
--

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;
INSERT INTO `wp_posts` VALUES (1,1,'2013-01-22 20:29:46','2013-01-22 20:29:46','Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!','Hello world!','','trash','open','open','','hello-world','','','2014-08-18 20:29:22','2014-08-18 20:29:22','',0,'http://localhost:8080/?p=1',0,'post','',1),(2,1,'2013-01-22 20:29:46','2013-01-22 20:29:46','This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://localhost:8080/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!','Sample Page','','publish','open','open','','sample-page','','','2013-01-22 20:29:46','2013-01-22 20:29:46','',0,'http://localhost:8080/?page_id=2',0,'page','',0),(3,1,'2014-08-18 20:07:58','0000-00-00 00:00:00','','Auto Draft','','auto-draft','open','open','','','','','2014-08-18 20:07:58','0000-00-00 00:00:00','',0,'http://localhost:8080/?p=3',0,'post','',0),(5,1,'2014-08-18 20:29:22','2014-08-18 20:29:22','Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!','Hello world!','','inherit','open','open','','1-revision-v1','','','2014-08-18 20:29:22','2014-08-18 20:29:22','',1,'http://localhost:8080/1-revision-v1/',0,'revision','',0),(6,1,'2014-08-18 20:29:32','2014-08-18 20:29:32','<strong style=\"color: #444444;\">[UPB_profile]</strong>','Profile','','trash','open','open','','profile','','','2014-08-22 16:34:03','2014-08-22 21:04:03','',0,'http://localhost:8080/?p=6',0,'post','',0),(7,1,'2014-08-18 20:29:32','2014-08-18 20:29:32','<strong style=\"color: #444444;\">[UPB_profile]</strong>','Profile','','inherit','open','open','','6-revision-v1','','','2014-08-18 20:29:32','2014-08-18 20:29:32','',6,'http://localhost:8080/6-revision-v1/',0,'revision','',0),(8,1,'2014-08-18 20:29:49','2014-08-18 20:29:49','<span style=\"font-weight: 600;\">[UPB_auth]</span>','Login','','trash','open','open','','login','','','2014-08-22 16:34:03','2014-08-22 21:04:03','',0,'http://localhost:8080/?p=8',0,'post','',0),(9,1,'2014-08-18 20:29:49','2014-08-18 20:29:49','<span style=\"font-weight: 600;\">[UPB_auth]</span>','Login','','inherit','open','open','','8-revision-v1','','','2014-08-18 20:29:49','2014-08-18 20:29:49','',8,'http://localhost:8080/8-revision-v1/',0,'revision','',0),(10,1,'2014-08-18 20:30:04','2014-08-18 20:30:04','<strong style=\"color: #444444;\">[UPB_account]</strong>','Registration','','trash','open','open','','registration','','','2014-08-22 16:34:03','2014-08-22 21:04:03','',0,'http://localhost:8080/?p=10',0,'post','',0),(11,1,'2014-08-18 20:30:04','2014-08-18 20:30:04','<strong style=\"color: #444444;\">[UPB_account]</strong>','Registration','','inherit','open','open','','10-revision-v1','','','2014-08-18 20:30:04','2014-08-18 20:30:04','',10,'http://localhost:8080/10-revision-v1/',0,'revision','',0),(12,1,'2014-08-18 20:30:07','0000-00-00 00:00:00','','Borrador automático','','auto-draft','open','open','','','','','2014-08-18 20:30:07','0000-00-00 00:00:00','',0,'http://localhost:8080/?p=12',0,'post','',0),(13,1,'2014-08-18 20:31:12','2014-08-18 20:31:12','<strong style=\"color: #444444;\">[UPB_profile]</strong>','Perfil','','publish','open','open','','profile','','','2014-08-20 21:31:22','2014-08-20 21:31:22','',0,'http://localhost:8080/?page_id=13',0,'page','',0),(14,1,'2014-08-18 20:31:12','2014-08-18 20:31:12','<strong style=\"color: #444444;\">[UPB_profile]</strong>','Profile','','inherit','open','open','','13-revision-v1','','','2014-08-18 20:31:12','2014-08-18 20:31:12','',13,'http://localhost:8080/13-revision-v1/',0,'revision','',0),(15,1,'2014-08-18 20:31:41','2014-08-18 20:31:41','<span style=\"font-weight: 600; color: #444444;\">[UPB_auth]</span>','Login','','publish','open','open','','login','','','2014-08-20 21:29:48','2014-08-20 21:29:48','',0,'http://localhost:8080/?page_id=15',0,'page','',0),(16,1,'2014-08-18 20:31:41','2014-08-18 20:31:41','<span style=\"font-weight: 600; color: #444444;\">[UPB_auth]</span>','Login','','inherit','open','open','','15-revision-v1','','','2014-08-18 20:31:41','2014-08-18 20:31:41','',15,'http://localhost:8080/15-revision-v1/',0,'revision','',0),(17,1,'2014-08-18 20:32:00','2014-08-18 20:32:00','<strong style=\"color: #444444;\">[UPB_account]</strong>','Registro','','publish','open','open','','registration','','','2014-08-20 21:31:11','2014-08-20 21:31:11','',0,'http://localhost:8080/?page_id=17',0,'page','',0),(18,1,'2014-08-18 20:32:00','2014-08-18 20:32:00','<strong style=\"color: #444444;\">[UPB_account]</strong>','Registration','','inherit','open','open','','17-revision-v1','','','2014-08-18 20:32:00','2014-08-18 20:32:00','',17,'http://localhost:8080/17-revision-v1/',0,'revision','',0),(20,1,'2014-08-18 20:33:06','2014-08-18 20:33:06',' ','','','publish','open','open','','20','','','2014-08-21 00:10:37','2014-08-21 00:10:37','',0,'http://localhost:8080/?p=20',1,'nav_menu_item','',0),(21,1,'2014-08-18 20:33:06','2014-08-18 20:33:06',' ','','','publish','open','open','','21','','','2014-08-21 00:10:38','2014-08-21 00:10:38','',0,'http://localhost:8080/?p=21',2,'nav_menu_item','',0),(23,1,'2014-08-18 20:54:09','2014-08-18 20:54:09',' ','','','publish','open','open','','23','','','2014-08-20 22:19:21','2014-08-20 22:19:21','',0,'http://localhost:8080/?p=23',2,'nav_menu_item','',0),(24,1,'2014-08-20 21:31:01','2014-08-20 21:31:01','<strong style=\"color: #444444;\">[UPB_account]</strong>','Registro','','inherit','open','open','','17-revision-v1','','','2014-08-20 21:31:01','2014-08-20 21:31:01','',17,'http://localhost:8080/17-revision-v1/',0,'revision','',0),(25,1,'2014-08-20 21:31:22','2014-08-20 21:31:22','<strong style=\"color: #444444;\">[UPB_profile]</strong>','Perfil','','inherit','open','open','','13-revision-v1','','','2014-08-20 21:31:22','2014-08-20 21:31:22','',13,'http://localhost:8080/13-revision-v1/',0,'revision','',0),(27,1,'2014-08-20 22:19:21','2014-08-20 22:19:21',' ','','','publish','open','open','','27','','','2014-08-20 22:19:21','2014-08-20 22:19:21','',0,'http://localhost:8080/?p=27',1,'nav_menu_item','',0),(29,1,'2014-08-21 00:12:06','2014-08-21 00:12:06','','Salir','Salir del Sistema','publish','open','open','','salir-del-sistema','','','2014-10-03 17:36:51','2014-10-03 22:06:51','',0,'http://localhost:8080/?p=29',2,'nav_menu_item','',0),(30,1,'2014-08-21 19:25:34','2014-08-21 23:55:34','Buscar respuestas a preguntas “rebuscadas”, conseguir archivos específicos D&amp;D books etc, preguntas en ingles q requieran mas de una busqueda para resolverlas','Buscar eficientemente','','publish','open','open','','reto-1','','','2014-10-15 17:53:48','2014-10-15 22:23:48','',0,'http://localhost:8080/?p=30',0,'post','',4),(31,1,'2014-08-21 19:25:34','2014-08-21 19:25:34','reto 1','reto 1','','inherit','open','open','','30-revision-v1','','','2014-08-21 19:25:34','2014-08-21 19:25:34','',30,'http://localhost:8080/30-revision-v1/',0,'revision','',0),(33,1,'2014-08-21 21:59:44','2014-08-21 21:59:44','Academia de formación intensiva de programadores','Bienvenidos a Hack','','publish','open','open','','esta-es-una-noticia','','','2014-08-22 16:33:34','2014-08-22 21:03:34','',0,'http://localhost:8080/?p=33',0,'post','',3),(34,1,'2014-08-21 21:59:44','2014-08-21 21:59:44','la noticia nueva es esta que esta camina','Esta es una noticia','','inherit','open','open','','33-revision-v1','','','2014-08-21 21:59:44','2014-08-21 21:59:44','',33,'http://localhost:8080/33-revision-v1/',0,'revision','',0),(35,1,'2014-08-22 07:17:22','2014-08-22 07:17:22','','Username','Ir al perfil','publish','open','open','','username','','','2014-10-03 17:36:51','2014-10-03 22:06:51','',0,'http://localhost:8080/?p=35',1,'nav_menu_item','',0),(39,1,'2014-08-22 16:10:41','0000-00-00 00:00:00','','Borrador automático','','auto-draft','open','open','','','','','2014-08-22 16:10:41','0000-00-00 00:00:00','',0,'http://localhost:8080/?page_id=39',0,'page','',0),(40,1,'2014-08-22 16:10:43','0000-00-00 00:00:00','','Borrador automático','','auto-draft','open','open','','','','','2014-08-22 16:10:43','0000-00-00 00:00:00','',0,'http://localhost:8080/?page_id=40',0,'page','',0),(41,1,'2014-08-22 16:14:47','2014-08-22 20:44:47','qweq','','','publish','open','open','','41','','','2014-08-22 16:14:47','2014-08-22 20:44:47','',0,'http://localhost:8080/?page_id=41',0,'page','',0),(42,1,'2014-08-22 16:14:38','0000-00-00 00:00:00','','Borrador automático','','auto-draft','open','open','','','','','2014-08-22 16:14:38','0000-00-00 00:00:00','',0,'http://localhost:8080/?page_id=42',0,'page','',0),(43,1,'2014-08-22 16:14:47','2014-08-22 20:44:47','qweq','','','inherit','open','open','','41-revision-v1','','','2014-08-22 16:14:47','2014-08-22 20:44:47','',41,'http://localhost:8080/41-revision-v1/',0,'revision','',0),(44,1,'2014-08-22 16:33:34','2014-08-22 21:03:34','Academia de formación intensiva de programadores','Bienvenidos a Hack','','inherit','open','open','','33-revision-v1','','','2014-08-22 16:33:34','2014-08-22 21:03:34','',33,'http://localhost:8080/33-revision-v1/',0,'revision','',0),(45,1,'2014-08-22 18:48:01','2014-08-22 23:18:01','','CIMG0164','','inherit','open','open','','cimg0164','','','2014-08-22 18:48:01','2014-08-22 23:18:01','',30,'http://localhost:8080/wp-content/uploads/2014/08/CIMG01641.jpg',0,'attachment','image/jpeg',0),(46,1,'2014-08-22 18:53:47','0000-00-00 00:00:00','','Borrador automático','','auto-draft','open','open','','','','','2014-08-22 18:53:47','0000-00-00 00:00:00','',0,'http://localhost:8080/?p=46',0,'post','',0),(48,1,'2014-10-03 17:06:27','2014-10-03 21:36:27','','Salir','Salir del Sistema','publish','open','open','','salir','','','2014-10-03 17:10:01','2014-10-03 21:40:01','',0,'http://localhost:8080/?p=48',1,'nav_menu_item','',0),(49,1,'2014-10-13 15:25:30','2014-10-13 19:55:30','Crear el listado de posts','Blog con estilos y columnas 1','','publish','open','open','','blog-con-estilos-y-columnas-1','','','2014-10-15 18:11:48','2014-10-15 22:41:48','',0,'http://localhost:8080/?p=49',0,'post','',0),(50,1,'2014-10-13 15:25:30','2014-10-13 19:55:30','Crear el listado de posts','Blog con estilos y columnas 1','','inherit','open','open','','49-revision-v1','','','2014-10-13 15:25:30','2014-10-13 19:55:30','',49,'http://localhost:8080/49-revision-v1/',0,'revision','',0),(51,1,'2014-10-13 22:22:04','2014-10-14 02:52:04','reto 1','Buscar eficientemente','','inherit','open','open','','30-autosave-v1','','','2014-10-13 22:22:04','2014-10-14 02:52:04','',30,'http://localhost:8080/30-autosave-v1/',0,'revision','',0),(52,1,'2014-10-13 22:22:14','2014-10-14 02:52:14','Buscar respuestas a preguntas “rebuscadas”, conseguir archivos específicos D&amp;D books etc, preguntas en ingles q requieran mas de una busqueda para resolverlas','Buscar eficientemente','','inherit','open','open','','30-revision-v1','','','2014-10-13 22:22:14','2014-10-14 02:52:14','',30,'http://localhost:8080/30-revision-v1/',0,'revision','',0),(53,1,'2014-10-13 22:27:51','2014-10-14 02:57:51','Dadas unas imagenes en proyeccion/TV buscar el URL de la imagen, determinar quien es el fotografo o el lugar en el que fue tomada cierta fotografia','Buscar imagenes','','publish','open','open','','buscar-imagenes','','','2014-10-15 17:53:11','2014-10-15 22:23:11','',0,'http://localhost:8080/?p=53',0,'post','',0),(54,1,'2014-10-13 22:27:51','2014-10-14 02:57:51','Dadas unas imagenes en proyeccion/TV buscar el URL de la imagen, determinar quien es el fotografo o el lugar en el que fue tomada cierta fotografia','Buscar imagenes','','inherit','open','open','','53-revision-v1','','','2014-10-13 22:27:51','2014-10-14 02:57:51','',53,'http://localhost:8080/53-revision-v1/',0,'revision','',0),(55,1,'2014-10-13 22:27:57','0000-00-00 00:00:00','','Borrador automático','','auto-draft','open','open','','','','','2014-10-13 22:27:57','0000-00-00 00:00:00','',0,'http://localhost:8080/?p=55',0,'post','',0),(56,1,'2014-10-13 22:31:39','2014-10-14 03:01:39','(como stackoverflow)','Hacer busquedas internas en una pagina','','publish','open','open','','hacer-busquedas-internas-en-una-pagina','','','2014-10-15 17:54:22','2014-10-15 22:24:22','',0,'http://localhost:8080/?p=56',0,'post','',0),(57,1,'2014-10-13 22:31:39','2014-10-14 03:01:39','(como stackoverflow)','Hacer busquedas internas en una pagina','','inherit','open','open','','56-revision-v1','','','2014-10-13 22:31:39','2014-10-14 03:01:39','',56,'http://localhost:8080/56-revision-v1/',0,'revision','',0),(58,1,'2014-10-13 22:32:45','2014-10-14 03:02:45','Por colores, usando operadores.','Busquedas avanzadas','','publish','open','open','','busquedas-avanzadas','','','2014-10-15 17:53:00','2014-10-15 22:23:00','',0,'http://localhost:8080/?p=58',0,'post','',0),(59,1,'2014-10-13 22:32:45','2014-10-14 03:02:45','Por colores, usando operadores.','Busquedas avanzadas','','inherit','open','open','','58-revision-v1','','','2014-10-13 22:32:45','2014-10-14 03:02:45','',58,'http://localhost:8080/58-revision-v1/',0,'revision','',0),(60,1,'2014-10-13 22:35:05','2014-10-14 03:05:05','(croquis, mockups) del blog y de la pagina del producto (debe contener: quienes somos? contacto)','Crear planos','','publish','open','open','','crear-planos','','','2014-10-15 17:52:38','2014-10-15 22:22:38','',0,'http://localhost:8080/?p=60',0,'post','',0),(61,1,'2014-10-13 22:35:05','2014-10-14 03:05:05','(croquis, mockups) del blog y de la pagina del producto (debe contener: quienes somos? contacto)','Crear planos','','inherit','open','open','','60-revision-v1','','','2014-10-13 22:35:05','2014-10-14 03:05:05','',60,'http://localhost:8080/60-revision-v1/',0,'revision','',0),(62,1,'2014-10-13 22:35:54','2014-10-14 03:05:54','listado de posts','Blog sin estilos 1','','publish','open','open','','blog-sin-estilos-1','','','2014-10-15 17:52:09','2014-10-15 22:22:09','',0,'http://localhost:8080/?p=62',0,'post','',0),(63,1,'2014-10-13 22:35:54','2014-10-14 03:05:54','listado de posts','Blog sin estilos 1','','inherit','open','open','','62-revision-v1','','','2014-10-13 22:35:54','2014-10-14 03:05:54','',62,'http://localhost:8080/62-revision-v1/',0,'revision','',0),(64,1,'2014-10-13 22:36:17','2014-10-14 03:06:17','5 categorias','Blog sin estilos 2','','publish','open','open','','blog-sin-estilos-2','','','2014-10-15 17:52:15','2014-10-15 22:22:15','',0,'http://localhost:8080/?p=64',0,'post','',0),(65,1,'2014-10-13 22:36:17','2014-10-14 03:06:17','5 categorias','Blog sin estilos 2','','inherit','open','open','','64-revision-v1','','','2014-10-13 22:36:17','2014-10-14 03:06:17','',64,'http://localhost:8080/64-revision-v1/',0,'revision','',0),(66,1,'2014-10-13 22:36:45','2014-10-14 03:06:45','detalle del post','Blog sin estilos 3','','publish','open','open','','blog-sin-estilos-3','','','2014-10-15 17:52:20','2014-10-15 22:22:20','',0,'http://localhost:8080/?p=66',0,'post','',0),(67,1,'2014-10-13 22:36:45','2014-10-14 03:06:45','detalle del post','Blog sin estilos 3','','inherit','open','open','','66-revision-v1','','','2014-10-13 22:36:45','2014-10-14 03:06:45','',66,'http://localhost:8080/66-revision-v1/',0,'revision','',0),(68,1,'2014-10-13 22:37:37','2014-10-14 03:07:37','5 categorías','Blog con estilos y columnas 2','','publish','open','open','','blog-con-estilos-y-columnas','','','2014-10-15 18:09:07','2014-10-15 22:39:07','',0,'http://localhost:8080/?p=68',0,'post','',0),(69,1,'2014-10-13 22:37:37','2014-10-14 03:07:37','5 categorías','Blog con estilos y columnas','','inherit','open','open','','68-revision-v1','','','2014-10-13 22:37:37','2014-10-14 03:07:37','',68,'http://localhost:8080/68-revision-v1/',0,'revision','',0),(70,1,'2014-10-13 22:37:48','2014-10-14 03:07:48','5 categorías','Blog con estilos y columnas 2','','inherit','open','open','','68-revision-v1','','','2014-10-13 22:37:48','2014-10-14 03:07:48','',68,'http://localhost:8080/68-revision-v1/',0,'revision','',0),(71,1,'2014-10-13 22:38:27','2014-10-14 03:08:27','detalle del post','Blog con estilos y columnas 3','','publish','open','open','','blog-con-estilos-y-columnas-3','','','2014-10-15 18:09:12','2014-10-15 22:39:12','',0,'http://localhost:8080/?p=71',0,'post','',0),(72,1,'2014-10-13 22:38:27','2014-10-14 03:08:27','detalle del post','Blog con estilos y columnas 3','','inherit','open','open','','71-revision-v1','','','2014-10-13 22:38:27','2014-10-14 03:08:27','',71,'http://localhost:8080/71-revision-v1/',0,'revision','',0),(73,1,'2014-10-13 22:40:35','2014-10-14 03:10:35','(si el video no tiene audio debe tener algun tipo de explicación escrita)','Hacer un tutorial de HTML/CSS Básico','','publish','open','open','','hacer-un-tutorial-de-htmlcss-basico','','','2014-10-15 18:09:17','2014-10-15 22:39:17','',0,'http://localhost:8080/?p=73',0,'post','',0),(74,1,'2014-10-13 22:40:35','2014-10-14 03:10:35','(si el video no tiene audio debe tener algun tipo de explicación escrita)','Hacer un tutorial de HTML/CSS Básico','','inherit','open','open','','73-revision-v1','','','2014-10-13 22:40:35','2014-10-14 03:10:35','',73,'http://localhost:8080/73-revision-v1/',0,'revision','',0),(75,1,'2014-10-13 22:43:15','2014-10-14 03:13:15','(Floats y Clear, Overflow, Incompatibilidad entre browsers)','Maqueta complicada','','publish','open','open','','maqueta-complicada','','','2014-10-15 18:09:22','2014-10-15 22:39:22','',0,'http://localhost:8080/?p=75',0,'post','',0),(76,1,'2014-10-13 22:43:15','2014-10-14 03:13:15','(Floats y Clear, Overflow, Incompatibilidad entre browsers)','Maqueta complicada','','inherit','open','open','','75-revision-v1','','','2014-10-13 22:43:15','2014-10-14 03:13:15','',75,'http://localhost:8080/75-revision-v1/',0,'revision','',0),(77,1,'2014-10-13 22:44:16','2014-10-14 03:14:16','Problema con position absolute y position relative (implicito/explicito)','Maqueta con error para que lo resuelvan','','publish','open','open','','maqueta-con-error-para-que-lo-resuelvan','','','2014-10-15 18:09:27','2014-10-15 22:39:27','',0,'http://localhost:8080/?p=77',0,'post','',0),(78,1,'2014-10-13 22:44:16','2014-10-14 03:14:16','Problema con position absolute y position relative (implicito/explicito)','Maqueta con error para que lo resuelvan','','inherit','open','open','','77-revision-v1','','','2014-10-13 22:44:16','2014-10-14 03:14:16','',77,'http://localhost:8080/77-revision-v1/',0,'revision','',0),(79,1,'2014-10-13 22:45:21','2014-10-14 03:15:21','Cambiar facebook a rojo','Modificación de sitios existentes','','publish','open','open','','modificacion-de-sitios-existentes','','','2014-10-15 18:09:34','2014-10-15 22:39:34','',0,'http://localhost:8080/?p=79',0,'post','',0),(80,1,'2014-10-13 22:45:21','2014-10-14 03:15:21','Cambiar facebook a rojo','Modificación de sitios existentes','','inherit','open','open','','79-revision-v1','','','2014-10-13 22:45:21','2014-10-14 03:15:21','',79,'http://localhost:8080/79-revision-v1/',0,'revision','',0),(81,1,'2014-10-13 22:46:03','2014-10-14 03:16:03','listado de posts','Blog maqueta con diseño 1','','publish','open','open','','blog-maqueta-con-diseno-1','','','2014-10-15 18:09:41','2014-10-15 22:39:41','',0,'http://localhost:8080/?p=81',0,'post','',0),(82,1,'2014-10-13 22:46:03','2014-10-14 03:16:03','listado de posts','Blog maqueta con diseño 1','','inherit','open','open','','81-revision-v1','','','2014-10-13 22:46:03','2014-10-14 03:16:03','',81,'http://localhost:8080/81-revision-v1/',0,'revision','',0),(83,1,'2014-10-13 22:46:48','2014-10-14 03:16:48','5 categorías','Blog maqueta con diseño 2','','publish','open','open','','blog-maqueta-con-diseno-2','','','2014-10-15 18:09:46','2014-10-15 22:39:46','',0,'http://localhost:8080/?p=83',0,'post','',0),(84,1,'2014-10-13 22:46:48','2014-10-14 03:16:48','5 categorías','Blog maqueta con diseño 2','','inherit','open','open','','83-revision-v1','','','2014-10-13 22:46:48','2014-10-14 03:16:48','',83,'http://localhost:8080/83-revision-v1/',0,'revision','',0),(85,1,'2014-10-13 22:47:23','2014-10-14 03:17:23','Detalle del post','Blog maqueta con diseño 3','','publish','open','open','','blog-maqueta-con-diseno-3','','','2014-10-15 18:09:54','2014-10-15 22:39:54','',0,'http://localhost:8080/?p=85',0,'post','',0),(86,1,'2014-10-13 22:47:23','2014-10-14 03:17:23','Detalle del post','Blog maqueta con diseño 3','','inherit','open','open','','85-revision-v1','','','2014-10-13 22:47:23','2014-10-14 03:17:23','',85,'http://localhost:8080/85-revision-v1/',0,'revision','',0),(87,1,'2014-10-13 22:49:18','2014-10-14 03:19:18','(intentar hacerlo lo mas parecido posible al tema actual)','Editar template de wordpress','','publish','open','open','','editar-template-de-wordpress','','','2014-10-15 18:09:59','2014-10-15 22:39:59','',0,'http://localhost:8080/?p=87',0,'post','',0),(88,1,'2014-10-13 22:49:18','2014-10-14 03:19:18','(intentar hacerlo lo mas parecido posible al tema actual)','Editar template de wordpress','','inherit','open','open','','87-revision-v1','','','2014-10-13 22:49:18','2014-10-14 03:19:18','',87,'http://localhost:8080/87-revision-v1/',0,'revision','',0),(89,1,'2014-10-13 22:50:21','2014-10-14 03:20:21','(usando los diseños)','Hacer el landing page del producto','','publish','open','open','','hacer-el-landing-page-del-producto','','','2014-10-15 18:10:06','2014-10-15 22:40:06','',0,'http://localhost:8080/?p=89',0,'post','',0),(90,1,'2014-10-13 22:50:21','2014-10-14 03:20:21','(usando los diseños)','Hacer el landing page del producto','','inherit','open','open','','89-revision-v1','','','2014-10-13 22:50:21','2014-10-14 03:20:21','',89,'http://localhost:8080/89-revision-v1/',0,'revision','',0),(91,1,'2014-10-13 22:52:34','2014-10-14 03:22:34','','Hacer el mail template del producto','','publish','open','open','','hacer-el-mail-template-del-producto','','','2014-10-15 18:10:24','2014-10-15 22:40:24','',0,'http://localhost:8080/?p=91',0,'post','',0),(92,1,'2014-10-13 22:52:34','2014-10-14 03:22:34','','Hacer el mail template del producto','','inherit','open','open','','91-revision-v1','','','2014-10-13 22:52:34','2014-10-14 03:22:34','',91,'http://localhost:8080/91-revision-v1/',0,'revision','',0);
/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_term_relationships`
--

DROP TABLE IF EXISTS `wp_term_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_relationships`
--

LOCK TABLES `wp_term_relationships` WRITE;
/*!40000 ALTER TABLE `wp_term_relationships` DISABLE KEYS */;
INSERT INTO `wp_term_relationships` VALUES (1,1,0),(6,1,0),(8,1,0),(10,1,0),(20,2,0),(21,2,0),(23,4,0),(27,4,0),(29,28,0),(30,17,0),(30,67,0),(33,5,0),(35,28,0),(48,65,0),(49,18,0),(49,67,0),(53,17,0),(53,67,0),(56,17,0),(56,67,0),(58,17,0),(58,66,0),(60,17,0),(60,67,0),(62,17,0),(62,66,0),(64,17,0),(64,66,0),(66,17,0),(66,66,0),(68,18,0),(68,67,0),(71,18,0),(71,67,0),(73,18,0),(73,67,0),(75,19,0),(75,67,0),(77,19,0),(77,67,0),(79,19,0),(79,67,0),(81,19,0),(81,67,0),(83,19,0),(83,67,0),(85,19,0),(85,67,0),(87,20,0),(87,67,0),(89,20,0),(89,67,0),(91,21,0),(91,67,0);
/*!40000 ALTER TABLE `wp_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_term_taxonomy`
--

DROP TABLE IF EXISTS `wp_term_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_taxonomy`
--

LOCK TABLES `wp_term_taxonomy` WRITE;
/*!40000 ALTER TABLE `wp_term_taxonomy` DISABLE KEYS */;
INSERT INTO `wp_term_taxonomy` VALUES (1,1,'category','',0,0),(2,2,'nav_menu','',0,2),(4,4,'nav_menu','',0,2),(5,5,'category','',0,1),(6,6,'category','',0,0),(7,7,'category','',6,0),(8,8,'category','',6,0),(9,9,'category','',6,0),(10,10,'category','',6,0),(11,11,'category','Introduccion al backend',6,0),(12,12,'category','',6,0),(13,13,'category','+Frameworks',6,0),(14,14,'category','',6,0),(15,15,'category','',6,0),(16,16,'category','',6,0),(17,17,'category','La intención de estas actividades es enseñar como buscar de manera efectiva y aprender conocimientos básicos de HTML',7,8),(18,18,'category','',7,4),(19,19,'category','',7,6),(20,20,'category','',7,2),(21,21,'category','',7,1),(22,22,'category','',8,0),(23,23,'category','',8,0),(24,24,'category','',8,0),(25,25,'category','',8,0),(26,26,'category','',8,0),(27,27,'category','',9,0),(28,28,'nav_menu','',0,2),(29,29,'category','',9,0),(30,30,'category','',9,0),(31,31,'category','',9,0),(32,32,'category','',9,0),(33,33,'category','',10,0),(34,34,'category','',10,0),(35,35,'category','',10,0),(36,36,'category','',10,0),(37,37,'category','',10,0),(38,38,'category','',11,0),(39,39,'category','',11,0),(40,40,'category','',11,0),(41,41,'category','',11,0),(42,42,'category','',11,0),(43,43,'category','',12,0),(44,44,'category','',12,0),(45,45,'category','',12,0),(46,46,'category','',12,0),(47,47,'category','',12,0),(48,48,'category','',13,0),(49,49,'category','',13,0),(50,50,'category','',13,0),(51,51,'category','',13,0),(52,52,'category','',13,0),(53,53,'category','',14,0),(54,54,'category','',14,0),(55,55,'category','',14,0),(56,56,'category','',14,0),(57,57,'category','',14,0),(58,58,'category','',15,0),(59,59,'category','',15,0),(60,60,'category','',15,0),(61,61,'category','',15,0),(62,62,'category','',15,0),(63,63,'category','',16,0),(64,64,'category','',16,0),(65,65,'nav_menu','',0,1),(66,66,'post_tag','',0,4),(67,67,'post_tag','',0,17);
/*!40000 ALTER TABLE `wp_term_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_terms`
--

DROP TABLE IF EXISTS `wp_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_terms`
--

LOCK TABLES `wp_terms` WRITE;
/*!40000 ALTER TABLE `wp_terms` DISABLE KEYS */;
INSERT INTO `wp_terms` VALUES (1,'Uncategorized','uncategorized',0),(2,'Not Logged Menu','not-logged-menu',0),(4,'Header Menu','header-menu',0),(5,'Noticias','news',0),(6,'Actividades','activities',0),(7,'Aprendiendo a aprender','aprendiendo-a-aprender',0),(8,'No me hagas pensar!','no-me-hagas-pensar',0),(9,'Flujo y control (Algoritmos)','flujo-y-control-algoritmos',0),(10,'Crear Internet!','crear-internet',0),(11,'Sistemas Webs vs Páginas Web','sistemas-webs-vs-paginas-web',0),(12,'Backends (Ruby)','backends-ruby',0),(13,'Frameworks desde el server!','frameworks-desde-el-server',0),(14,'Dont repeat yourself (Librerias) + Servicios Web','dont-repeat-yourself-librerias-servicios-web',0),(15,'Frameworks desde el cliente: Jquery + Javascript + Angular','frameworks-desde-el-cliente-jquery-javascript-angular',0),(16,'Refactor + Testing','refactor-testing',0),(17,'Como buscar, Introduccion HTML','como-buscar-introduccion-html',0),(18,'Screencast, Intermedio HTML','screencast-intermedio-html',0),(19,'Cómo preguntar, Avanzado HTML','como-preguntar-avanzado-html',0),(20,'Preprocesador, Template engines (HTML / CSS)','preprocesador-template-engines-html-css',0),(21,'Maquetar \"Old Style\" Mailchimp','maquetar-old-style-mailchimp',0),(22,'Principios de UI/UX (mockups), Pair programming (trabajar en parejas)','principios-de-uiux-mockups-pair-programming-trabajar-en-parejas',0),(23,'Patrones y convenciones en diseño, Bootstrap.','patrones-y-convenciones-en-diseno-bootstrap',0),(24,'Bootstrap Avanzado','bootstrap-avanzado',0),(25,'Control de Versiones, Git, Páginas Github, jsfiddle, pasties, snippets.','control-de-versiones-git-paginas-github-jsfiddle-pasties-snippets',0),(26,'Blog en Jekyll (donde escribirán parte experiencias al final de cada lección)','blog-en-jekyll-donde-escribiran-parte-experiencias-al-final-de-cada-leccion',0),(27,'Javascript, Variables, Operadores, Lógica, Estructuras de control.','javascript-variables-operadores-logica-estructuras-de-control',0),(28,'Logged Menu','logged-menu',0),(29,'Javascript, Arreglos, Loops, Manejo de strings, Funciones','javascript-arreglos-loops-manejo-de-strings-funciones',0),(30,'Javascript, JSON, Recursividad.','javascript-json-recursividad',0),(31,'Como funciona Javascript? Donde se ejecuta?','como-funciona-javascript-donde-se-ejecuta',0),(32,'Javascript Intermedio/Avanzado (scopes, globals, envelops)','javascript-intermedioavanzado-scopes-globals-envelops',0),(33,'Introducción a Linux, Terminal, customizar el terminal, Zsh, colores, git, etc..','introduccion-a-linux-terminal-customizar-el-terminal-zsh-colores-git-etc',0),(34,'Introduccion a Redes, Ip? Mascara de red? Dominios? DNS?','introduccion-a-redes-ip-mascara-de-red-dominios-dns',0),(35,'Que es un servidor Web? LAMP? Instalar Apache, Nginx, Crear Intranet.','que-es-un-servidor-web-lamp-instalar-apache-nginx-crear-intranet',0),(36,'Que es Cloud computing? Crear Máquinas Virtuales, asignar recursos, gitlab, owncloud, etc.','que-es-cloud-computing-crear-maquinas-virtuales-asignar-recursos-gitlab-owncloud-etc',0),(37,'Que es un ambiente? Desarrollo, Calidad, Producción, VPS, Vagrant + Chef.','que-es-un-ambiente-desarrollo-calidad-produccion-vps-vagrant-chef',0),(38,'Introduccion a Backends. Porque usar código en el servidor?','introduccion-a-backends-porque-usar-codigo-en-el-servidor',0),(39,'Modelar un sistema, Diagramas? E/R? Mapa de la BD Es necesario?','modelar-un-sistema-diagramas-er-mapa-de-la-bd-es-necesario',0),(40,'Base de datos SQL, Queries, (MySQL).','base-de-datos-sql-queries-mysql',0),(41,'Base de datos NoSQL (MongoDB)','base-de-datos-nosql-mongodb',0),(42,'Triggers, Store Procedures, Modelar distintos tipo de sistemas y crear consultas. (DBA)','triggers-store-procedures-modelar-distintos-tipo-de-sistemas-y-crear-consultas-dba',0),(43,'Introducción a Ruby, Estructuras de control.','introduccion-a-ruby-estructuras-de-control',0),(44,'Ruby','ruby',0),(45,'Programación Orientada a Objetos','programacion-orientada-a-objetos',0),(46,'Pruebas (TDD) ¿Que es TDD? y como hacer TDD','pruebas-tdd-que-es-tdd-y-como-hacer-tdd',0),(47,'Ruby en Web?','ruby-en-web',0),(48,'Organizando un sistema, Donde van las cosas? Analisis, Diseño, Construccion','organizando-un-sistema-donde-van-las-cosas-analisis-diseno-construccion',0),(49,'Introduccion a Rails','introduccion-a-rails',0),(50,'Intermedio/Avanzado Rails','intermedioavanzado-rails',0),(51,'Arquitectura de un sistema, Mantenibilidad','arquitectura-de-un-sistema-mantenibilidad',0),(52,'BDD','bdd',0),(53,'Reutilizar código, empaquetar librerías','reutilizar-codigo-empaquetar-librerias',0),(54,'Buscar y utilizar librerías externas','buscar-y-utilizar-librerias-externas',0),(55,'Introducción a servicios web, porque?','introduccion-a-servicios-web-porque',0),(56,'SOAP','soap',0),(57,'REST','rest',0),(58,'El DOM, Javascript para web apps','el-dom-javascript-para-web-apps',0),(59,'Jquery, Librerias para Jquery, JqueryUI, etc, etc','jquery-librerias-para-jquery-jqueryui-etc-etc',0),(60,'Javascript orientado a objetos!?!?','javascript-orientado-a-objetos',0),(61,'Introducción a Angular','introduccion-a-angular',0),(62,'Angular','angular',0),(63,'Refactoring + Buenas practicas, Code Review!','refactoring-buenas-practicas-code-review',0),(64,'Pruebas integrales, pruebas de volumen y stress','pruebas-integrales-pruebas-de-volumen-y-stress',0),(65,'Profile Menu','profile-menu',0),(66,'tarde','tarde',0),(67,'manana','manana',0);
/*!40000 ALTER TABLE `wp_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_upb_field`
--

DROP TABLE IF EXISTS `wp_upb_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_upb_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_upb_field`
--

LOCK TABLES `wp_upb_field` WRITE;
/*!40000 ALTER TABLE `wp_upb_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_upb_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_upb_fields`
--

DROP TABLE IF EXISTS `wp_upb_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_upb_fields` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) DEFAULT NULL,
  `Name` varchar(256) NOT NULL,
  `Value` varchar(256) DEFAULT NULL,
  `Class` varchar(256) DEFAULT NULL,
  `Max_Length` varchar(256) DEFAULT NULL,
  `Cols` varchar(256) DEFAULT NULL,
  `Rows` varchar(256) DEFAULT NULL,
  `Option_Value` varchar(256) DEFAULT NULL,
  `Description` varchar(256) DEFAULT NULL,
  `Require` varchar(256) DEFAULT NULL,
  `Readonly` varchar(256) DEFAULT NULL,
  `Visibility` varchar(256) DEFAULT NULL,
  `Ordering` varchar(256) DEFAULT NULL,
  `user_group` varchar(256) DEFAULT NULL,
  `registration` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_upb_fields`
--

LOCK TABLES `wp_upb_fields` WRITE;
/*!40000 ALTER TABLE `wp_upb_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_upb_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_upb_group`
--

DROP TABLE IF EXISTS `wp_upb_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_upb_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_upb_group`
--

LOCK TABLES `wp_upb_group` WRITE;
/*!40000 ALTER TABLE `wp_upb_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_upb_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_upb_option`
--

DROP TABLE IF EXISTS `wp_upb_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_upb_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_upb_option`
--

LOCK TABLES `wp_upb_option` WRITE;
/*!40000 ALTER TABLE `wp_upb_option` DISABLE KEYS */;
INSERT INTO `wp_upb_option` VALUES (1,'upb_theme','light'),(2,'upb_autogeneratedepass','no'),(3,'upb_adminshowhide','no'),(4,'upb_editorshowhide','no'),(5,'upb_authorshowhide','no'),(6,'upb_contributorshowhide','no'),(7,'upb_subscribershowhide','no'),(8,'upb_usernameshowhide','yes'),(9,'upb_firstnameshowhide','yes'),(10,'upb_lastnameshowhide','yes'),(11,'upb_nicknameshowhide','yes'),(12,'upb_displaynamepubliclyshowhide','yes'),(13,'upb_emailshowhide','yes'),(14,'upb_websiteshowhide','no'),(15,'upb_aimshowhide','no'),(16,'upb_yahooimshowhide','no'),(17,'upb_jabbergoogletalkshowhide','no'),(18,'upb_biographicalinfoshowhide','no'),(19,'upb_profile_list_view','table'),(20,'upb_profile_list_column','4'),(21,'upb_profile_max_resutls','1'),(22,'Registration_Custom_Text','Custom text1 :Lorem ipsum dolor sit amet, consectetur');
/*!40000 ALTER TABLE `wp_upb_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_upb_values`
--

DROP TABLE IF EXISTS `wp_upb_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_upb_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_field` int(20) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `f_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `f_field` (`f_field`),
  KEY `f_user` (`f_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_upb_values`
--

LOCK TABLES `wp_upb_values` WRITE;
/*!40000 ALTER TABLE `wp_upb_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_upb_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'first_name',''),(2,1,'last_name',''),(3,1,'nickname','admin'),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_user_level','10'),(12,1,'dismissed_wp_pointers','wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media,wp390_widgets,wp360_revisions'),(13,1,'show_welcome_panel','1'),(14,1,'wp_user-settings','mfold=o&libraryContent=browse'),(15,1,'wp_user-settings-time','1413256950'),(16,1,'wp_dashboard_quick_press_last_post_id','3'),(17,1,'nav_menu_recently_edited','65'),(18,1,'managenav-menuscolumnshidden','a:3:{i:0;s:11:\"link-target\";i:1;s:3:\"xfn\";i:2;s:11:\"description\";}'),(19,1,'metaboxhidden_nav-menus','a:3:{i:0;s:8:\"add-post\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";}'),(20,2,'first_name',''),(21,2,'last_name',''),(22,2,'nickname','romerramos'),(23,2,'description',''),(24,2,'rich_editing','true'),(25,2,'comment_shortcuts','false'),(26,2,'admin_color','fresh'),(27,2,'use_ssl','0'),(28,2,'show_admin_bar_front','true'),(29,2,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(30,2,'wp_user_level','0'),(31,3,'first_name',''),(32,3,'last_name',''),(33,3,'nickname','maldonel'),(34,3,'description',''),(35,3,'rich_editing','true'),(36,3,'comment_shortcuts','false'),(37,3,'admin_color','fresh'),(38,3,'use_ssl','0'),(39,3,'show_admin_bar_front','true'),(40,3,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(41,3,'wp_user_level','0'),(48,1,'user_skilltree','_'),(49,2,'user_skilltree','_'),(50,3,'user_skilltree','_'),(51,1,'meta-box-order_post','a:3:{s:4:\"side\";s:51:\"submitdiv,tagsdiv-post_tag,categorydiv,postimagediv\";s:6:\"normal\";s:93:\"postexcerpt,trackbacksdiv,postcustom,formatdiv,commentstatusdiv,commentsdiv,slugdiv,authordiv\";s:8:\"advanced\";s:0:\"\";}'),(52,1,'screen_layout_post','2'),(53,1,'manageedit-postcolumnshidden','a:1:{i:0;s:0:\"\";}'),(54,1,'edit_post_per_page','100'),(55,3,'aim',''),(56,3,'yim',''),(57,3,'jabber',''),(58,3,'closedpostboxes_dashboard','a:0:{}'),(59,3,'metaboxhidden_dashboard','a:0:{}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_users`
--

DROP TABLE IF EXISTS `wp_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_users`
--

LOCK TABLES `wp_users` WRITE;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;
INSERT INTO `wp_users` VALUES (1,'admin','$P$BlzvV.y1dqrovRnpBz6Z1se2sopD5a0','admin','test@example.com','','2013-01-22 20:29:46','',0,'admin'),(2,'romerramos','$P$BaExvOWrCYQBBw4DP6O5UwedWVQgDv1','romerramos','romerramos@gmail.com','','2014-08-22 23:09:26','',0,'romerramos'),(3,'maldonel','$P$Ba8ux4N0ILHpM6fgYq3UMpakByGUex0','maldonel','maldoxd@gmail.com','','2014-08-25 15:06:57','',0,'maldonel');
/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-16  0:26:09
