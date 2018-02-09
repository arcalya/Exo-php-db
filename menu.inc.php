<!--
    <ul class="menu">

    <li><a href="index.php?page=articleform">Titre de l'article</a></li>

    </ul>
-->

<?php 

$articles = selectArticles();

 ?>
 <ul class="menu">
<?php 
    while( $row=$articles->fetch_array() )
    { 
        ?>
     <li><a href="index.php?page=articleform&id=<?php echo  $row['IdArticle']; ?>"><?php echo  $row['TitleArticle']; ?></a> <a href="index.php?page=articles&id=<?php echo  $row['IdArticle']; ?>&action=update">M</a></li>
        <?php 
    }
?>    
 </ul>
