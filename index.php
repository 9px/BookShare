<?php 
	session_start();
	require_once 'model/__init__.php';
	require_once 'libs/Smarty.class.php';
	$smarty = new Smarty();
	
	$db = getDBInstance();
	//echo var_dump($db);
	//get promote book
	//$db->get_results('select * from books b,categories c,book_category bc where b.active=0 and c.active=0 and b.id=bc.book_id and c.id=bc.category_id and c.name=\'PROMOTED\'');
	
//	putenv('LANG=zh_HK');
//	bindtextdomain("default", "locale");
//	textdomain("default");

	$result = $db->get_results("select * from books;");
	$smarty->assign('result',$result);
	$smarty->display('index.html');
?>