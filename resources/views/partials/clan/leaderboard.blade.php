<?php
/** @var Destiny\Definitions\Leaderboard $category */

$key = 'clan-'.$category->statId;
?>
<table class="table table-condensed table-striped">
    <thead>
    <tr>
        <th class="header"><i class="fa fa-trophy"></i></th>
        <th>Guardian</th>
        <th><?= $category->statName ?></th>
    </tr>
    </thead>
    <tbody id="<?= $key ?>">
        <?php $i = 1; foreach ($category->rankings as $place): ?>
            <tr>
                <td class="header"><?= $i++ ?></td>
                <td style="min-width: 150px;">
                    <img style="width: 18px; height: 18px;" src="<?= $place->image; ?>" />
                    @if ($place->platform !== 'pc')
                        <a href="<?= $place->url; ?>">
                            <?= $place->name; ?>
                        </a>
                    @else
                        <?= $place->name; ?>
                    @endif
                </td>
                <td><?= $place->displayValue; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>