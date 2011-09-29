<?php
	require_once 'util.php';
	
	if(!isset($_REQUEST['name'])){
		$sql = 'select * from books order by create_time desc;';
	}else{
		$name = $_REQUEST['name'];
		$sql = "SELECT b.* FROM books b, categories c ,book_category bc where b.id=bc.book_id and c.id=bc.category_id and c.name='$name'";
	}
	
	$db = getDBInstance();
	$books = $db->get_results($sql);
	
	$smarty = getSmartyInstance();
	$smarty->assign('books',$books);
	$smarty->display('books.html');
?>