<? require_once 'layout/header.phtml' ?>
<? /** @var array $config */?>

<div class="row">
    <div class="col-md-8">
        <ul class="nav nav-tabs" style="margin-bottom:-1px">
            <li class="nav-item">
                <a class="nav-link active" href="#">Размещённые <span class="badge badge-pill badge-default">216</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ожидают размещения <span class="badge badge-pill badge-primary">53</span></a>
            </li>
        </ul>
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

<h3 class="mb-4">Добавление нового товара</h3>
<form>
    <? foreach (['Название', 'Штрих-код', 'Ячейка'] as $item): ?>
        <div class="form-group row">
            <label class="col-md-2 col-form-label"><?= $item ?></label>
            <div class="col-md-10">
                <input type="email" class="form-control" placeholder="<?= $item ?>">
            </div>
        </div>
    <? endforeach ?>
    <div class="form-group row">
        <div class="offset-md-2 col-md-10">
            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Сохранить</button>
        </div>
    </div>
</form>

<hr>
<div>
    <strong><i class="fa fa-fw fa-cubes"></i> Собрано товаров (% от нормы):</strong> 1204/2048 (56%)<br>
    <strong><i class="fa fa-fw fa-clock-o"></i> Отработано часов:</strong> 3 ч. 28 мин.<br>
</div>

<? require_once 'layout/footer.phtml' ?>
