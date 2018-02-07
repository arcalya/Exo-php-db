<?php 

$articles = selectArticles();
$commentaires=selectCommentaires();
 ?>



<h2>Articles <span><a class="btn" href="index.php?page=articleform&action=insert">Ajouter un article</a></span></h2>

    <div class="article">
 <?php 
    while( $row=$articles->fetch_array() )
    { 
    ?>
        <h3>
            <a href="index.php?page=articleform&article=<?php echo  $row['IdArticle']; ?>"><?php echo  $row['TitleArticle']; ?></a>
            <span><a class="btn" href="index.php?page=articles&action=delete&item=<?php echo  $row['IdArticle']; ?>">supprimer</a></span>
        </h3>
            <p><em>Date <?php echo  $row['DateArticle']; ?> - Nom de l'auteur <?php echo  $row['AuthorArticle']; ?></em></hp>
            <p><?php echo  $row['ContentArticle']; ?></p>	
            
            
            
            
            
        <fieldset>
            <legend> Commentaires </legend>
            <?php
                    while( $row2=$commentaires->fetch_array() )
                { 
            ?>
            
                            <p>
                <a href="index.php?page=commentaires&action=delete&item=<?php echo  $row2['IdComment']; ?>">
                    <img src="images/cross.png" />
                </a><strong><?php echo  $row2['PseudoComment']; ?> </strong><br>
                    <?php echo  $row2['TextComment']; ?>
                </p>
            
            
            
                  <?php 
    }
?>
                    


            <form action="index.php?page=commentaires&action=insert" method="post">
            <table class="admin_form" cellpadding="0" cellspacing="0" width="100%">
                
                <tr>
                    <td width="30%"><label for="PseudoCommentaire">Pseudo</label></td>
                    <td><input id="PseudoCommentaire" type="text" name="PseudoCommentaire" value="" /></td>
                </tr>
                <tr>
                    <td valign="top"><label for="TexteCommentaire">Commentaire</label></td>
                    <td><textarea id="TexteCommentaire" name="TexteCommentaire"></textarea></td>
                </tr>
                <tr>    
                    <td>
                    <input type="hidden" name="IdArticle" value="" />
                    </td>
                    <td>
                        <input type="submit" value="Envoyer le commentaire" />
                    </td>
                </tr>
            </table>
            </form>
        </fieldset>

        
    <?php 
    }
?>
        <h3>
        <a href="index.php?page=articleform&article=">Titre de l'article</a>
        <span><a class="btn" href="index.php?page=articles&action=delete&item=">supprimer</a></span>
        </h3>
        
        <p><em>Date - Nom de l'auteur</em></hp>
        <p>Contenu de l'article</p>	
    	
    	
        <fieldset>
            <legend> Commentaires </legend>
                
                <p>
                <a href="index.php?page=commentaires&action=delete&item="><img src="images/cross.png" /></a>
                <strong>Pseudo </strong>Commentaire
                </p>

            <form action="index.php?page=commentaires&action=insert" method="post">
            <table class="admin_form" cellpadding="0" cellspacing="0" width="100%">
                
                <tr>
                    <td width="30%"><label for="PseudoCommentaire">Pseudo</label></td>
                    <td><input id="PseudoCommentaire" type="text" name="PseudoCommentaire" value="" /></td>
                </tr>
                <tr>
                    <td valign="top"><label for="TexteCommentaire">Commentaire</label></td>
                    <td><textarea id="TexteCommentaire" name="TexteCommentaire"></textarea></td>
                </tr>
                <tr>    
                    <td>
                    <input type="hidden" name="IdArticle" value="" />
                    </td>
                    <td>
                        <input type="submit" value="Envoyer le commentaire" />
                    </td>
                </tr>
            </table>
            </form>
        </fieldset>
    
	</div>

