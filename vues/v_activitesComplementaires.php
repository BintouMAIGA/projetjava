<div id="contenu">
        <h1>Activités complémentaires</h1>
        <br>
        <form action="" method="POST">
    
    <table style="width: 100%; background-color: transparent; color: white; font-weight: bold">
            <tbody style="consultation">
            <tr>
                    <td>ACTIVIT&Eacute; N°</td>
                    <td>
                        <input type="text" name="num-activite" autocomplete="off" readonly style="margin: auto; width: 5%" value="<?php echo $_SESSION['AC_num'];?>">
                    </td>
                </tr>
                <tr>
                    <td>R&Eacute;ALIS&Eacute;E LE</td>
                    <td>
                        <input type="datetime" name="date-activite" autocomplete="off" readonly style="margin: auto; width: 20%" value="<?php echo $_SESSION['AC_date'];?>">
                    </td>
                </tr>
                <tr>
                    <td>LIEU CONCERN&Eacute;</td>
                    <td>
                        <input type="text" name="lieu-activite" autocomplete="off" readonly style="margin: auto; width: 30%" value="<?php echo $_SESSION['AC_lieu'];?>">
                    </td>
                </tr>
                <tr>
                    <td>TH&Egrave;ME</td>
                    <td>
                        <input type="text" name="theme-activite" autocomplete="off" readonly style="margin: auto; width: 15%" value="<?php echo $_SESSION['AC_theme'];?>">
                    </td>
                </tr>
                <tr>
                    <td>MOTIF</td>
                    <td>
                        <textarea type="text" name="motif-activite" autocomplete="off" readonly style="margin: auto; width: 70%"><?php echo $_SESSION['AC_motif'];?></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="nav-cons-med" align="center">
            <button class="btn-cons-med" type="button" onclick="window.location.href='index.php?page=6&uc=ac&action=precedent'">&laquo; Précédent</button>
            <span>
                <input class="btn-cons-med" size="2" type="text" name="updateIndex" value="<?php echo $_SESSION['AC_index']; ?>" style="text-align: center;">
                <strong>
                    /&nbsp;<?php echo $pdo->getMaxActivites();?>&nbsp;
                </strong>
                <input class="btn-cons-med" type="submit" formaction="index.php?page=6&uc=ac&action=custom" method="POST" hidden>
            </span>
            <button class="btn-cons-med" type="button" onclick="window.location.href='index.php?page=6&uc=ac&action=suivant'">Suivant &raquo;</button>
        </div>
</form>

</div>