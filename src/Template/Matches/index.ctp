<div class="matches index">
    <?php
    if (!empty($matches)) {
        foreach ($matches as $match) {
            ?>
            <div class="match">
                <h2><?php echo $match->played->format('D jS M Y');?></h2>
                <table summary="match">
                    <tr>
                        <td><h3><?php echo $match->home_team->name;?></h3></td>
                        <td>vs</td>
                        <td><h3><?php echo $match->away_team->name;?></h3></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                            <?php foreach ($match->home_team->players as $player): ?>
                                <li><?php echo $player->get('FullName');?></li>
                            <?php endforeach;?>
                            </ul>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <ul>
                                <?php foreach ($match->away_team->players as $player): ?>
                                    <li><?php echo $player->get('FullName');?></li>
                                <?php endforeach;?>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <?php
        }
    }
    ?>
</div>