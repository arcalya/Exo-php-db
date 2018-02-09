<?php


// INSERT
function insertCommentaire(){

       
      	
   $db = Db::connect();
   $IdComment=1;
   $PseudoComment=$_POST['PseudoCommentaire'];
   $TextComment=$_POST['TexteCommentaire'];
   
           
    $statement=$db->prepare('INSERT INTO comments( IdComment, PseudoComment, TextComment, DateComment, IdArticle) VALUES (?, ?, ?, NOW(),?)');
    $statement->bind_param( 'iss', $IdComment, $PseudoComment,$TextComment, 1 );
        
    $statement->execute();

	
}


// UPDATE
function updateCommentaire( $IdCommentaire ){


}


// DELETE
function deleteCommentaire( $IdCommentaire ){

   $db = Db::connect();
   $db->query('DELETE FROM comments WHERE $IdComment =\''.$IdComment.'\'');

}


// CONTROLER //
switch( $action ){
	
	case 'insert' : 
		$process = insertCommentaire();	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		else 
			$page = 'home';
		break;
	
	case 'update' : 
		$process = updateCommentaire( $_GET[ 'item' ] );	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		else 
			$page = 'home';
		break;
	
	case 'delete' : 
		$process = deleteCommentaire( $_GET[ 'item' ] );	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		break;
}

?>