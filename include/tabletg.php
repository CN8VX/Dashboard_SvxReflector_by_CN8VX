<fieldset class="styled-fieldset">  
    <form method="post">
        <table style="margin-top:10px;">
            <tr height=25px>
            <th width=100px>TG #</th>
            <th>TG Name</th>
            </tr>

            <?php
            foreach ($tgdb_array as $tg => $tgname)
            { 
                    echo "<td align=\"center\">&nbsp;<span>$tg</span></td>";
                    echo "<td>&nbsp;<b>".$tgname."</b></td>";
                    echo"</tr>\n";
            };

            ?>
        </table>
    </form>
</fieldset>