<?php

// INSERT
function insertArticle(){
	
   $db = Db::connect();
   
    $statement=$db->prepare('INSERT INTO articles( TitleArticle, ContentArticle, DateArticle, AuthorArticle) VALUES( ?, ?, NOW(), ?)');
    $statement->bind_param( 'sss', $_POST['TitreArticle'], $_POST['ContenuArticle'], $_POST['AuteurArticle'] );
    $statement->execute();

}


// UPDATE
function updateArticle( $IdArticle ){
	

}


// DELETE
function deleteArticle( $IdArticle ){


}


// CONTROLER //
switch( $action ){
	
	case 'insert' : 
		$process = insertArticle();	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		else 
			$page = 'articleform';
		break;
	
	case 'update' : 
		$process = updateArticle( $_GET[ 'item' ] );	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		else 
			$page = 'articleform';
		break;
	
	case 'delete' : 
		$process = deleteArticle( $_GET[ 'item' ] );	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		break;
}

?>