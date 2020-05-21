<div class="list-group">
    <?php if(isset($_SESSION['id'])){?>
    <table border=1 style="margin-bottom: 180px">
        <tr>
            <td>&nbsp;</td>
            <th>Nom</th>
            <th>Puissance</th>
            <th>Déscription</th>
            <th>Quantiter</th>
            <th>Supprimer</th>
        </tr>
        <?php
        require_once '../model/colect_data.php';
        $choose_list = get_choose($_SESSION['id']);
        $powerTotal = 0;
        $Nbrtotal = 0;
        $Alimtotal = 0;

        foreach ($choose_list as $choose)
        {
            extract($choose);
            $poMult = $power * $quantity;
            echo "<tr>";
            echo "<td style=\"width: 120px\"><a href=\"$picture\"><img src=\"$picture\" style=\"width: 100px\"></a></td>";
            echo "<td>$name</td>";
            echo "<td>$poMult</td>";
            echo "<td>$feature</td>";
            echo "<td>$quantity</td>";
            echo "<td><a href=\"../controller/del_to_col.php?ref=$reference&mode=0\" class=\"btn btn-secondary\">Supprimer</a></td>";
            echo "</tr>";
            if($id_type < 6) {$powerTotal += $poMult;}
            else {$Alimtotal += $power;}
            $Nbrtotal += $quantity;
        }
        echo "<tr>";
        echo "<td>Total</td>";
        echo "<td>&nbsp;</td>";
        echo "<td>$powerTotal</td>";
        echo "<td>&nbsp;</td>";
        echo "<td>$Nbrtotal</td>";
        echo "<td><a href=\"../controller/del_to_col.php?mode=1\" class=\"btn btn-secondary\">Tous supprimer</a></td>";
        echo "</tr>";
        $dif = $Alimtotal - $powerTotal;
        echo "<tr>";
        echo "<td colspan=\"2\">Différence avec l'alimentation</td>";
        echo "<td>$dif</td>";
        echo "<td colspan=\"3\">&nbsp;</td>";
        echo "</tr>";

        ?>
    </table>
    
    <?php }
    else
    {
        echo "<p style=\"color: red; height: 300px\">Vous devez vous connecter ou créer un compte afin de pouvoir vous construire une collection</p>";
    }
    ?>
</div>