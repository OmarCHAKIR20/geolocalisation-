<!DOCTYPE html>
<?php
include_once './racine.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="controller/createPosition.php">
            <fieldset>
                <legend>Ajouter un nouveau étudiant</legend>
                <table border="0">
                    <tr>
                        <td>lat : </td>
                        <td><input type="text" name="latitude" value="" /></td>
                    </tr>
                    <tr>
                        <td>long :</td>
                        <td><input type="text" name="longitude" value="" /></td>
                    </tr>
                    <tr>
                        <td>date :</td>
                        <td><input type="date" name="date"  /></td>
                    </tr>
                    <tr>
                        <td>imei :</td>
                        <td><input type="text" name="imei" value="" /></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Envoyer" />
                            <input type="reset" value="Effacer" />
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Ville</th>
                    <th>Sexe</th>
                 
                </tr>
            </thead>
            <tbody>
                <?php
                include_once './service/PositionService.php';
                $es = new PositionService();
                foreach ($es->getAll() as $e) {
                    ?>
                    <tr>
                        
                        <td><?php  echo $e->getId()?></td>
                        <td><?php echo $e->getDate(); ?></td>
                        <td><?php echo $e->getLongitude(); ?></td>
                        <td><?php echo $e->getLatitude(); ?></td>
                        <td><?php echo $e->getImei(); ?></td>
                       
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
