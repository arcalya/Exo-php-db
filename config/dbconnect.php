<?php
Class Db{
    private static $_connect;
    public static function connect()    {        
        if( !isset( self::$_connect ) )        
        {      //      $config = parse_ini_file( SITE_PATH . '/includes/config.ini' );                     
        self::$_connect = new mysqli( DB_HOST, DB_USER, DB_MDP, DB_SELECT);
                }
        return self::$_connect;    
        
        } 
        
}

$db = Db::connect();
$results = $db->query( 'SELECT * FROM articles' );



while($row =$results->fetch_object()){
    //print_r($row);
    //echo '<pre>', var_dump($row), '</pre>';
    echo '<pre>',$row->TitleArticle,'</pre>';
    echo '<pre>',$row->ContentArticle,'</pre>';
    
};
