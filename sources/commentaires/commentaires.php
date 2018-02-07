<?php
function selectCommentaires(){
        $db = Db::connect();
    
    $results = $db->query( 'SELECT * FROM comments' );
    
    if(!$db->errno && $results->num_rows>0)
    {
        if(isset($results))
        {
            return $results;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }  

}


function selectCommentairesByIdArticle( $IdArticle ){
    $db = Db::connect();
    
    $result = $db->query( 'SELECT * FROM comments WHERE IdArticle = \''.$IdArticle.'\'' );
    
    return $result;
}

?>