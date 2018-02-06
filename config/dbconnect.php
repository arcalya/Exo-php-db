<?php
Class Db{
    private static $_connect;
    public static function connect()    {        
        if( !isset( self::$_connect ) )        
        {                 
        self::$_connect = new mysqli( DB_HOST, DB_USER, DB_MDP, DB_SELECT);
        }
        if(!self::$_connect){
            return mysql_connect_error();
        }
        return self::$_connect;    
        
        } 
        
}

//$db = Db::connect();
//$results = $db->query( 'SELECT * FROM articles' );


/*
while($row =$results->fetch_object()){
    //print_r($row);
    //echo '<pre>', var_dump($row), '</pre>';
    echo '<pre>',$row->TitleArticle,'</pre>';
    echo '<pre>',$row->ContentArticle,'</pre>';
    
};
 * */
 
