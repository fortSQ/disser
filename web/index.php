<? require_once 'layout/header.phtml' ?>
<? /** @var array $config */?>

<div class="row">
    <div class="col-md-8">
        <table class="table">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Штрих-код</th>
                <th>Ячейка</th>
                <th>Собран?</th>
            </tr>
            </thead>
            <tbody>
            <? foreach ($config['goods'] as $product): ?>
                <? $product = (object) $product ?>
                <tr>
                    <td><?= $product->name ?></td>
                    <td><?= $product->barcode ?></td>
                    <td><?= $product->cell ?></td>
                    <td class="text-success"><i class="fa fa-check"></i></td>
                </tr>
            <? endforeach ?>
            </tbody>
        </table>

        <button class="btn btn-outline-success"><i class="fa fa-angle-double-right"></i> Следующий забор</button>
    </div>

    <div class="col-md-4 text-right">
        <figure class="figure">
            <img class="figure-img img-fluid rounded" src="img/selin.jpg" style="height:300px">
            <figcaption class="figure-caption">&mdash; Маршрут движения</figcaption>
        </figure>
    </div>
</div>

<hr>
<div>
    <strong><i class="fa fa-fw fa-user"></i> Работник:</strong> Калинина Ксения Александровна<br>
    <strong><i class="fa fa-fw fa-cubes"></i> Собрано товаров (% от нормы):</strong> 1204/2048 (56%)<br>
    <strong><i class="fa fa-fw fa-clock-o"></i> Отработано часов:</strong> 3 ч. 28 мин.<br>
</div>

<? require_once 'layout/footer.phtml' ?>
