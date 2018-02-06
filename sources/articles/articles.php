<?php
function selectArticles(){
    
    $db = Db::connect();
    
    $results = $db->query( 'SELECT * FROM articles' );
    
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


function selectArticleById( $IdArticle ){

    $db = Db::connect();
    
    $result = $db->query( 'SELECT * FROM articles WHERE IdArticle = \''.$IdArticle.'\'' );
    
    return $result;
}
?>