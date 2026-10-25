<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['logout'] = 'admin/logout';
$route['home'] = 'Home';
//$route['fulltextarticles_new/(:any)'] = 'fulltextarticles_new';
$route['fulltextarticles/(:any)'] = 'fulltextarticles';
$route['get_home_page_journals'] = 'home/get_home_page_journals';
$route['search'] = 'home/search';
$route['upload_files'] = 'home/upload_files';
$route['admin_upload_files'] = 'admin/upload_files';
$route['get_journal_latest_articles'] = 'latest_articles/get_journal_latest_articles';
$route['validate_credentials'] = 'login/validate_credentials';
$route['about-us'] = "about_us";
$route['submit-manuscript'] = "submit_manuscript";
$route['save_submit_manuscript_info'] = "submit_manuscript/save_submit_manuscript_info";
$route['save_user_contact_info'] = "submit_manuscript/save_user_contact_info";

$route['generate_sitemap_fulltext'] = 'home/generate_sitemap_fulltext';
$route['generate_sitemap_pdf'] = 'home/generate_sitemap_pdf';
$route['generate_sitemap_abstract'] = 'home/generate_sitemap_abstract';

$route['contact-us'] = "contact_us";
$route['latest-articles'] = "latest_articles";
$route['admin'] = 'admin';
$route['login'] = 'login/index';
$route['abstract/(:any)'] = 'abstracts/index/$1';

$route['(:any)/(:any)'] = 'journal_pages/index/$1/$2';
$route['dashboard'] = 'admin/dashboard';
$route['get_categories'] = 'admin/get_categories';
$route['get_journals'] = 'admin/get_journals';
$route['get_journal_posts'] = 'admin/get_journal_posts';
$route['get_journal_archives'] = 'admin/get_journal_archives';
$route['get_LatestArticles'] = 'admin/get_LatestArticles';
$route['feed'] = "feed";

$route['update_latest_article'] = 'admin/update_latest_article';

$route['get_new_eb_members'] = 'admin/get_new_eb_members';
$route['getSubmitManuscriptEnqs'] = 'admin/getSubmitManuscriptEnqs';
$route['getContactEnqs'] = 'admin/getContactEnqs';
$route['insert_journal'] = 'admin/insert_journal';
$route['update_journal_page'] = 'admin/update_journal_page';
$route['update_eb_member'] = 'admin/update_eb_member';
$route['get_journals_volumes'] = 'admin/get_journals_volumes';
$route['update_archive'] = 'admin/update_archive';
$route['deleteEBmember'] = 'admin/deleteEBmember';
$route['deleteJournalArchive'] = 'admin/deleteJournalArchive';
$route['deleteLatestArticle'] = 'admin/deleteLatestArticle';
$route['deleteSmse'] = 'admin/deleteSmse';
$route['deleteEnquiry'] = 'admin/deleteEnquiry';


$route['get_fulltext_articles'] = 'admin/get_fulltext_articles';
$route['update_fulltext_article'] = 'admin/update_fulltext_article';
$route['deleteFulltextarticle'] = 'admin/deleteFulltextarticle';
$route['getUploadedFiles'] = 'admin/getUploadedFiles';
$route['admin_upload_files_new'] = 'admin/upload_files_new';
$route['getEnquiriesUnreadCount'] = 'admin/getEnquiriesUnreadCount';
$route['setUserReadStatus'] = 'admin/setUserReadStatus';





/*$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/