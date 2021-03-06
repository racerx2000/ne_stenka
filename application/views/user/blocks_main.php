<link rel="stylesheet"
      href="<?php echo site_url(); ?>/application/resources/user_resources/libs/foundation/responsive-tables.css">


<style type="text/css">
    .blocks-header {
        line-height: 1;
    }

    .grey-underline-href {
        cursor: pointer;
        color: #58595b;
        text-decoration: none;
        font-weight: 100;
        border-bottom: 1px dashed #58595b;
    }

    .grey-underline-href:hover {
        border-bottom: 1px dashed transparent;
    }

    a.ui-tabs-anchor {
        width: 344px;
        padding: 10px 30px;
        text-decoration: none;
        color: #000;
        border: 2px solid #fff;
        border-bottom: none;
    }

    a.ui-tabs-anchor > p {
        text-transform: none;
    }

    a.ui-tabs-anchor > p > small {
        font-weight: 100;
    }

    span.icon-tab {
        display: inline-block;
        width: 50px;
        height: 50px;
        border: 3px solid #fdd537;
        border-radius: 50%;
        vertical-align: middle;
        text-align: center;
        padding-top: 10px;
        /* text-decoration: none; */
        margin-right: 10px;
        float: left;
    }

    ul.inline li.ui-state-active {
        background: #fff;

    }

    .ui-tabs-panel[aria-hidden='false'] {
        background: #fff;
    }

    i.fa-question-circle-o {
        opacity: 0.5;
    }

    .price {
        border: 5px solid #f0f2f6;
        width: 325px;
    }

    .price > .price-inner > a.button {
        padding: 20px 0;
        width: 230px;
    }

    .price-inner.white {
        text-align: center;
    }

    .price-inner.grey {
        background: #f0f2f6;
        margin-bottom: 0;
        padding-top: 30px;
        padding-left: 42px;
    }

    h4.price-amount {
        display: inline-block;
        background: #fdd537;
        /* padding: 10px 30px; */
        width: 300px;
        font-size: 24px;
        position: relative;
        width: 220px;
    }

    h4.price-amount:before {
        content: '';
        position: absolute;
        /* width: 50px; */
        /* height: 0px; */
        background: #fefefe;
        left: 0;
        top: 0;
        /* border-left: 50px solid #fff; */
        /* border-right: 0; */
        border-top: 19px solid #fdd537;
        border-bottom: 19px solid #fdd537;
        /* z-index: 141; */
        /* border: 29px solid transparent; */
        border-left: 20px solid #fff;
    }

    ul.price-caption {
        padding-left: 0;
        padding: 20px 0;
    }

    ul.price-caption li {
        text-transform: none;
    }

    ul.price-caption li > i {
        color: #fdd537;
    }

    .tab-content > div.column.large-4.pl40 > p:nth-child(2) > i {
        font-size: 1.5em;
        color: #dedede;
        top: 4px;
        position: relative;
    }

    ul.new-inline {
        border-bottom: 2px solid #f0f2f6;
        padding-left: 40px;
    }

    ul.new-inline li {
        margin-bottom: -5px;
        z-index: 100;
        padding: 15px;
    }

    ul.new-inline li:hover {
        cursor: pointer;
    }

    ul.new-inline li.tab-active {
        border: 2px solid #f0f2f6;
        border-bottom: 6px solid #fff;

    }

    table {
        width: 100%;
    }

    table > thead > tr > th,
    table > thead > tr > td,
    table > tbody > tr > td {
        border-right: 2px solid #efefef;
        border-bottom: 2px solid #efefef;
    }

    table > thead > tr > th {
        border-bottom: none;
    }

    table > thead > tr > td.br-none,
    table > tbody > tr > td.br-none {
        border-right: none;
    }

    table > thead > tr > td {
        font-size: 13px;
    }

    table > tbody > tr:hover {
        background: #f3f5f8;
    }

    table > tbody > tr:hover i.fa-shopping-basket {
        color: #0078ff;
    }

    #myform {
        text-align: center;
        padding: 5px;
        margin: 2%;
        width: 200px;
    }

    .qty {
        width: 40px;
        height: 25px;
        text-align: center;
        display: inline;
        width: 50px;
        height: 50px;
    }

    input.qtyplus,
    input.qtyminus {
        background: transparent;
        border: none;
        width: 50px;
        height: 50px;
    }

    .table-info-2 {
        display: none;
    }

    .add-to-cart {
        padding: 15px 20px;
        text-transform: uppercase;
        font-size: 14px;
    }

    .proposal-product {
        padding: 40px 20px;
        border: 5px solid #efefef;
    }

    .proposal-row {
        padding-left: 30px;
        padding-right: 30px;
    }

    .proposal-row h2 i {
        margin-right: 40px;
        color: #dedede;
    }

    .proposal-row-2 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .proposal-hidden-row {
        display: none;
    }

    .proposal_block {
        padding: 30px 40px;
        background: #fff;
        padding-bottom: 50px;
    }

    .proposal_block > .img > img {
        min-height: 267px;
        max-height: 267px;
    }

    span.hidden {
        display: none;
    }

    a.dashed i {
        border-bottom: none;
    }

    a.popover-a,
    a.popover-a2 {
        position: relative;
    }

    a.popover-a span.with,
    a.popover-a2 span.with {
        position: absolute;
        top: 42px;
        background: #fff;
        border: 5px solid #fdd537;
        padding: 20px 25px;
        white-space: nowrap;
        left: -20px;
    }

    @media (max-width: 1440px) {
        h2,
        .proposal_block h2 {
            font-size: 36px;
        }

        #tabs-1 > div:nth-child(1) > div.column.large-4.medium-6.small-12.pl40 > div > p:nth-child(2),
        #tabs-2 > div:nth-child(1) > div.column.large-4.medium-6.small-12.pl40 > div > p:nth-child(2) {
            font-size: 12px;
        }

        table {
            font-size: 13px;
        }
    }

    @media (max-width: 1024px) {
        .tab-content > div:nth-child(2) > div.table-info-1.proposal-row-2.mb80.pt50 > h4 {
            font-size: 16px;
        }

        .proposal_block .img > img {
            min-height: 100%;
        }

        .proposal_block h2 {
            font-size: 25px;
        }
    }

    @media (max-width: 768px) {
        .tab-content > div:nth-child(2) > div.table-info-1.proposal-row-2.mb80.pt50 > h4 {
            font-size: 14px;
        }

        .proposal_block h2 {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        #tabs > ul > li > a {
            width: 100%;
            padding: 10px 20px;
            text-align: center;
        }

        #tabs > ul > li > a > span {
            display: inline-block;
            float: none;
        }

        ul.new-inline li {
            font-size: 12px;
            font-weight: bold;
        }

        .tab-content > div.row.large-12.proposal-row > h2 > i {
            display: block;
        }
    }
</style>
<div class="modal fade" id="info_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body pb80">
                <div class="row large-12">
                    <div class="column large-12">
                        <button type="button" class="" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img
                                    src="<?php echo base_url() ?>application/resources/user_resources/img/close-icon.png"
                                    alt="" class="fa-times"></span></button>
                        <h3 class="uppercase">Чем отличаются блоки 1-й и 2-й категории?</h3>
                    </div>
                    <div class="column large-12">
                        <p>Блоки 1-ой категории гладкие на ощупь, геометрическая точность размеров ±1 мм. Толщина шва
                            при кладке на клей 1-3 мм (мостик холода - минимален).
                            Блоки 2-й категории шершавые на ощупь, геометрическая точность размеров ±3 мм. Толщина шва
                            при кладке на раствор 5-10 мм (мостик холода увеличивается в 5 раз).
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<section id="blocks_main" style='background-color: #f0f2f6'>
    <div class="row frontSlide expanded small-12 medium-12 large-12 pt80" style='background-color: #f0f2f6'>
        <div class="row large-10 ">
            <div class="column large-12">
                <div
                    id="tabs" <?php echo ($data['blocks_category'] != 'Стеновые блоки' AND $data['blocks_category'] != 'Перегородочные блоки') ? 'style="background-color: #fff"' : ''; ?>>
                    <?php if ($data['blocks_category'] == 'Стеновые блоки' OR $data['blocks_category'] == 'Перегородочные блоки') { ?>
                        <ul class='inline'>
                            <li class="mb30"><a href="#tabs-1"><span class='icon-tab'>1</span>
                                    <p class="mt0">Для кладки на клей<br>
                                        <small>(1-я категория)</small>
                                    </p>
                                </a></li>
                            <li class="mb30"><a href="#tabs-2"><span class='icon-tab'>2</span>
                                    <p class="mt0">Для кладки на раствор<br>
                                        <small>(2-я категория)</small>
                                    </p>
                                </a></li>
                        </ul>
                    <?php } ?>
                    <div id="tabs-1" class="row large-12 pt80 pb80 tab-content">
                        <div class="row large-12">
                            <div class="column large-4  medium-6 small-12 pl40">
                                <div class="medium-12">
                                    <h2 class='mt0 blocks-header'><?php echo $data['blocks_category'] ?><br> 1-й
                                        категории</h2>
                                    <?php if (($data['blocks_category'] == 'Стеновые блоки' OR $data['blocks_category'] == 'Перегородочные блоки')) { ?>
                                        <p><i class="fa fa-question-circle-o"></i> <a data-target='#info_1'
                                                                                      data-toggle='modal'><span
                                                    class='grey-underline-href'>Чем отличаются блоки 1-й и 2-й категории?</span></a>
                                        </p>
                                    <?php } ?>
                                    <?php if ($data['blocks_category'] == 'Пазогребневые блоки') { ?>
                                        <p>Стеновые блоки с системой паз-гребень из ячеистого бетона автоклавного
                                            твердения 1-ой категории (для кладки на клей) используются для строительства
                                            несущих и ненесущих стен с толщиной шва 1-3 мм.</p>
                                    <?php } elseif ($data['blocks_category'] == 'Брусовые перемычки') { ?>
                                        <p>Армированные перемычки из ячеистого бетона автоклавного твердения
                                            предназначены для перекрытия оконных и дверных проемов в несущих и ненесущих
                                            стенах. </p>
                                    <?php } else { ?>
                                        <p><?php echo $data['blocks_category'] ?> из ячеистого бетона автоклавного
                                            твердения 1-й категории (для
                                            кладки на клей) используются для строительства несущих и ненесущих стен с
                                            толщиной шва 1-3мм</p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="column large-4 medium-6 ">
                                <img
                                    src="<?php echo base_url() ?>/application/resources/user_resources/img/wall_blocks.png"
                                    alt="">
                            </div>
                            <div class="column large-4 small-12">
                                <div class='price'>
                                    <div class='price-inner white'>
                                        <h4 class='price-amount mb0'><?php echo $data['oneclick']['block_price'] ?>
                                            руб/м3</h4>
                                        <p>106 руб/шт</p>
                                        <a role="button" aria-label="submit form" href="#"
                                           class="button btn-blueLine mb-25" data-target="#oneClick"
                                           data-toggle="modal">Заказ в 1 клик</a>
                                    </div>
                                    <div class='price-inner grey'>
                                        <ul class="price-caption mb0 mt0">
                                            <li><i class="fa fa-check"></i> Бесплатная доставка за 2-3 дня</li>
                                            <li><i class="fa fa-check"></i> На 20% дешевле рыночных цен</li>
                                            <li><i class="fa fa-check"></i> Удобная оплата по факту</li>
                                        </ul>
                                    </div>
                                </div>
                                <p class='pl20'><a data-target="#askQuestion" data-toggle="modal"><span
                                            class="grey-underline-href">Бесплатная помощь в выборе блоков</span></a></p>
                            </div>
                        </div>
                        <div class="row large-12">
                            <ul class="inline new-inline">
                                <li class="li-tab tab-active text-18" data-show='table-info-1' data-hide='table-info-2'>
                                    Цены и размеры
                                </li>
                                <?php if($data['blocks_category'] != 'Брусовые перемычки'){ ?>
                                <li class='li-tab text-18' data-show='table-info-2' data-hide='table-info-1'>Тех.
                                    характеристики
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="table-info-1  proposal-row-2 mb80 pt50">
                                <h4 class="text-light text-18 mb80 mt0">Цены указаны на марку блоков <b>d500</b> для
                                    города
                                    <a href='#' class='user-city dashed' data-target='#chooseCity' data-toggle='modal'>
                                        <?php
                                        if (isset($this->session->userdata['user_city'])) {
                                            $user_city = $this->session->userdata['user_city'];
                                        } else {
                                            $user_city = 'Москва';
                                        }
                                        echo $user_city;
                                        ?> <i class='fa fa-sort-down'></i>
                                    </a>
                                </h4>
                                <?php if ($data['blocks_category'] == 'Брусовые перемычки') { ?>
                                    <table class="responsive">
                                        <thead class="table-header">
                                        <tr class='row-1'>
                                            <th>Размер</th>
                                            <th class='text-center'>Объем</th>
                                            <th colspan="" class="text-center">Вес</th>
                                            <th colspan="" class="text-center">Нагрузка</th>
                                            <th colspan="" class="text-center">Цена руб.</th>
                                            <th class="text-center">Кол-во</th>
                                            <th class='br-none' style='border-right: none;'></th>
                                        </tr>
                                        <tr class="row-2">
                                            <td>выс. шир. дл.</td>
                                            <td class='text-center'>м3</td>
                                            <td class='text-center'>кг</td>
                                            <td class='text-center'>кН/1пог.м</td>
                                            <td class='text-center'>1 шт</td>
                                            <td></td>
                                            <td class='br-none'></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data['products'] AS $product) {
                                            if ($product['category'] == $data['categories']['name']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo isset($product['size']) ? $product['size'] : '1300x250x150'; ?></td>
                                                    <td class='text-center'>
                                                        <?php
                                                        $product['size'] = isset($product['size']) ? $product['size'] : '1300x250x150';
                                                        $size = explode('x', $product['size']);
                                                        $volume = 1;
                                                        foreach ($size as $length) {
                                                            $volume *= ($length * 0.001);
                                                        }
                                                        echo number_format(($volume), 3, '.', ',');
                                                        ?>
                                                    </td>
                                                    <td class="text-center"><?php echo $on_pallet_amount = isset($product['on_pallet_amount']) ? $product['on_pallet_amount'] : 45.1 ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        $count = isset($product['pallet_amount']) ? $product['pallet_amount'] : 15;
                                                        echo $count;
                                                        ?>
                                                    </td>

                                                    <td class="text-center">
                                                        <?php
                                                        $prices = Product::load_product_prices($product['id']);
                                                        if (!empty($prices)) {
                                                            $price_pallet = 4500;
                                                            foreach ($prices as $price) { ?>
                                                                <span
                                                                    class='city-price <?php echo $price['city'] == $user_city ? '' : 'hidden' ?>'
                                                                    data-city-price='<?php echo $price['city'] ?>'>
																		<?php echo isset($price['price']) ? number_format($price['price'], 2, '.', ',') : 0;
                                                                        if ($price['city'] == $user_city) {
                                                                            $price_pallet = $price['price'];
                                                                        }
                                                                        ?>
																	 </span>
                                                                <?php
                                                            }
                                                        } else {
                                                            $price_pallet = 4500;
                                                            echo $price_pallet;
                                                        }

                                                        ?>
                                                    </td>

                                                    </td>
                                                    <td class='text-center'>
                                                        <form id='myform' class='display-inline-block' method='POST'
                                                              action='#'>
                                                            <input type='button' value='-' class='qtyminus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                            <input type='text'
                                                                   name='quantity<?php echo $product['id'] ?>'
                                                                   value='1' class='qty'/>
                                                            <input type='button' value='+' class='qtyplus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                        </form>
                                                    </td>
                                                    <td class='br-none text-center'>
                                                        <form action='/user/add_to_cart' method='post'>
                                                            <input type="hidden" name="id"
                                                                   value='<?php echo $product['id'] ?>'>
                                                            <input type="hidden"
                                                                   name="quantity<?php echo $product['id'] ?>"
                                                                   value='1'>
                                                            <input type="hidden" name="path"
                                                                   value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
                                                            <input id="<?php echo $csrf_token_name; ?>" type="hidden"
                                                                   value="<?php echo $csrf_hash; ?>"
                                                                   name="<?php echo $csrf_token_name; ?>">
                                                            <button type='submit'><i
                                                                    class='fa fa-shopping-basket fa-2x'></i></button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                <?php } else { ?>
                                    <table class="responsive">
                                        <thead class="table-header">
                                        <tr class='row-1'>
                                            <th>Размер</th>
                                            <th>Кол-во</th>
                                            <th colspan="2" class="text-center">Кол-во на поддоне</th>
                                            <th colspan="3" class="text-center">Кол-во на машине</th>
                                            <th colspan="3" class="text-center">Цена руб.</th>
                                            <th class="text-center">Кол-во поддонов</th>
                                            <th class='br-none' style='border-right: none;'></th>
                                        </tr>
                                        <tr class="row-2">
                                            <td>выс. шир. дл.</td>
                                            <td>шт. в 1м3</td>
                                            <td class='text-center br-none'>шт</td>
                                            <td class='text-center'>м3</td>
                                            <td class='text-center br-none'>под</td>
                                            <td class='text-center br-none'>шт</td>
                                            <td class='text-center'>м3</td>
                                            <td class='text-center br-none'>под</td>
                                            <td class='text-center br-none'>м3</td>
                                            <td class='text-center'>машины</td>
                                            <td></td>
                                            <td class='br-none'></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data['products'] AS $product) {
                                            if ($product['category'] == $data['categories']['name']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo isset($product['size']) ? $product['size'] : 0; ?></td>
                                                    <td>
                                                        <?php
                                                        $product['size'] = isset($product['size']) ? $product['size'] : '290x100x599';
                                                        $size = explode('x', $product['size']);
                                                        $volume = 1;
                                                        foreach ($size as $length) {
                                                            $volume *= ($length * 0.001);
                                                        }
                                                        echo number_format((1 / $volume), 2, '.', ',');
                                                        ?>
                                                    </td>
                                                    <td class="text-center br-none"><?php echo $on_pallet_amount = isset($product['on_pallet_amount']) ? $product['on_pallet_amount'] : 80 ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        $count = isset($product['on_pallet_amount']) ? $product['on_pallet_amount'] : 80;
                                                        echo number_format(($count * $volume), 2, '.', ',');
                                                        ?>
                                                    </td>
                                                    <td class="text-center br-none"><?php echo $pallet_amount = isset($product['pallet_amount']) ? $product['pallet_amount'] : 22 ?></td>
                                                    <td class="text-center br-none">
                                                        <?php
                                                        echo $pallet_amount * $on_pallet_amount;
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        echo number_format($volume * $pallet_amount * $on_pallet_amount, 3, '.', ',');
                                                        ?>
                                                    </td>

                                                    <td class="text-center br-none">
                                                        <?php
                                                        $prices = Product::load_product_prices($product['id']);
                                                        if (!empty($prices)) {
                                                            $price_pallet = 4500;
                                                            foreach ($prices as $price) { ?>
                                                                <span
                                                                    class='city-price <?php echo $price['city'] == $user_city ? '' : 'hidden' ?>'
                                                                    data-city-price='<?php echo $price['city'] ?>'>
																		<?php echo isset($price['price']) ? number_format($price['price'], 2, '.', ',') : 0;
                                                                        if ($price['city'] == $user_city) {
                                                                            $price_pallet = $price['price'];
                                                                        }
                                                                        ?>
																	 </span>
                                                                <?php
                                                            }
                                                        } else {
                                                            $price_pallet = 4500;
                                                            echo $price_pallet;
                                                        }

                                                        ?>
                                                    </td>
                                                    <td class="text-center br-none"><?php echo $cube_price = number_format($price_pallet / ($count * $volume), 0, '.', ' ') ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        echo number_format($price_pallet * $pallet_amount, 0, '.', ' ');
                                                        ?>
                                                    </td>
                                                    <td class='text-center'>
                                                        <form id='myform' class='display-inline-block' method='POST'
                                                              action='#'>
                                                            <input type='button' value='-' class='qtyminus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                            <input type='text'
                                                                   name='quantity<?php echo $product['id'] ?>'
                                                                   value='1' class='qty'/>
                                                            <input type='button' value='+' class='qtyplus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                        </form>
                                                    </td>
                                                    <td class='br-none text-center'>
                                                        <form action='/user/add_to_cart' method='post'>
                                                            <input type="hidden" name="id"
                                                                   value='<?php echo $product['id'] ?>'>
                                                            <input type="hidden"
                                                                   name="quantity<?php echo $product['id'] ?>"
                                                                   value='1'>
                                                            <input type="hidden" name="path"
                                                                   value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
                                                            <input id="<?php echo $csrf_token_name; ?>" type="hidden"
                                                                   value="<?php echo $csrf_hash; ?>"
                                                                   name="<?php echo $csrf_token_name; ?>">
                                                            <button type='submit'><i
                                                                    class='fa fa-shopping-basket fa-2x'></i></button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                            <div class="table-info-2 proposal-row-2 mb80 pt50">
                                <table class="responsive">
                                    <thead class="table-header">
                                    <tr class='row-1'>
                                        <th rowspan="2">Показатель</th>
                                        <th colspan="6" class="text-center">Значение показателя для марки по средней
                                            плотности
                                        </th>
                                    </tr>
                                    <tr class="row-2">
                                        <td class='text-center'>D400</td>
                                        <td class='text-center'>D450</td>
                                        <td class='text-center'>D500</td>
                                        <td class='text-center'>D550</td>
                                        <td class='text-center'>D600</td>
                                        <td class='text-center'>D700</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Средня плотность в сухом состоянииб кг/м3</td>
                                        <td>376-425</td>
                                        <td>426-475</td>
                                        <td>476-525</td>
                                        <td>526-575</td>
                                        <td>576-625</td>
                                        <td>676-725</td>
                                    </tr>
                                    <tr>
                                        <td>Средня плотность в сухом состоянииб кг/м3</td>
                                        <td>376-425</td>
                                        <td>426-475</td>
                                        <td>476-525</td>
                                        <td>526-575</td>
                                        <td>576-625</td>
                                        <td>676-725</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row large-12 proposal-row">
                            <h2 class="text-center mb50" style="font-size: 24px;"><i class="fa fa-plus"></i> С этими
                                блоками также покупают</h2>
                            <div class="row large-12 ">
                                <?php foreach ($data['products'] AS $product) {
                                    if ($product['recommended'] == 1) { ?>
                                        <div class="column large-6 small-12 mb50">
                                            <div class="column large-12 proposal-product">
                                                <div class="column large-8 medium-6 small-12">
                                                    <h3 class="mt0"><?php echo $product['name'] ?></h3>
                                                    <p><?php echo $product['description'] ?></p>
                                                    <form id='myform' class='display-block' method='POST' action='#'>
                                                        <input type='button' value='-' class='qtyminus'
                                                               field='quantity<?php echo $product['id'] ?>'
                                                               style='font-size: 20px'/>
                                                        <input type='text' name='quantity<?php echo $product['id'] ?>'
                                                               value='0' class='qty'/>
                                                        <input type='button' value='+' class='qtyplus'
                                                               field='quantity<?php echo $product['id'] ?>'
                                                               style='font-size: 20px'/>
                                                    </form>

                                                </div>
                                                <div class="column large-4 medium-6 small-12">
                                                    <img
                                                        src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $product['image'] ?>">
                                                </div>
                                                <div class="column large-12">
                                                    <form action='/user/add_to_cart' method='post'>
                                                        <input type="hidden" name="id"
                                                               value='<?php echo $product['id'] ?>'>
                                                        <input type="hidden" name="quantity<?php echo $product['id'] ?>"
                                                               value='1'>
                                                        <input type="hidden" name="path"
                                                               value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
                                                        <input id="<?php echo $csrf_token_name; ?>" type="hidden"
                                                               value="<?php echo $csrf_hash; ?>"
                                                               name="<?php echo $csrf_token_name; ?>">
                                                        <button role="button" aria-label="submit form" type="submit"
                                                                href="#"
                                                                class="button btn-blueLine btn-inverted add-to-cart">
                                                            Добавить к заказу <i class="fa fa-long-arrow-right"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>

                            </div>
                        </div>
                    </div>
                    <?php if ($data['blocks_category'] == 'Стеновые блоки' OR $data['blocks_category'] == 'Перегородочные блоки') { ?>
                        <div id="tabs-2" class="row large-12 pb80 pt80 tab-conent">
                            <div class="row large-12">
                                <div class="column large-4  medium-6 small-12 pl40">
                                    <div class="medium-12">
                                        <h2 class='mt0 blocks-header'><?php echo $data['blocks_category'] ?><br>2-й
                                            категории</h2>
                                        <p><i class="fa fa-question-circle-o"></i> <a data-target='#info_1'
                                                                                      data-toggle='modal'><span
                                                    class='grey-underline-href'>Чем отличаются блоки 1-й и 2-й категории?</span></a>
                                        </p>
                                        <p><?php echo $data['blocks_category'] ?> из ячеистого бетона автоклавного
                                            твердения 2-ой категории (для кладки на раствор) используются для
                                            строительства несущих и ненесущих стен с толщиной шва 5-10 мм.</p>
                                    </div>
                                </div>
                                <div class="column large-4 medium-6 ">
                                    <img
                                        src="<?php echo base_url() ?>/application/resources/user_resources/img/wall_blocks.png"
                                        alt="">
                                </div>
                                <div class="column large-4 small-12">
                                    <div class='price'>
                                        <div class='price-inner white'>
                                            <h4 class='price-amount mb0'><?php echo $data['oneclick']['block_price'] ?>
                                                руб/м3</h4>
                                            <p>106 руб/шт</p>
                                            <a role="button" aria-label="submit form" href="#" data-target="#oneClick"
                                               data-toggle="modal"
                                               class="button btn-blueLine mb-25">Заказ в 1 клик</a>
                                        </div>
                                        <div class='price-inner grey'>
                                            <ul class="price-caption mb0 mt0">
                                                <li><i class="fa fa-check"></i> Бесплатная доставка за 2-3 дня</li>
                                                <li><i class="fa fa-check"></i> На 20% дешевле рыночных цен</li>
                                                <li><i class="fa fa-check"></i> Удобная оплата по факту</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class='pl20'><a data-target="freeConsultation" data-toggle="modal"><span
                                                class="grey-underline-href">Бесплатная помощь в выборе блоков</span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="row large-12">
                                <ul class="inline new-inline">
                                    <li class="li-tab tab-active text-18" data-show='table-info-1'
                                        data-hide='table-info-2'>
                                        Цены и размеры
                                    </li>
                                    <li class='li-tab text-18' data-show='table-info-2' data-hide='table-info-1'>Тех.
                                        характеристики
                                    </li>
                                </ul>
                                <div class="table-info-1  proposal-row-2 mb80 pt50">
                                    <h4 class="text-light text-18 mb80 mt0">Цены указаны на марку блоков <b>d500</b> для
                                        города
                                        <a href='#' class='user-city dashed' data-target='#chooseCity'
                                           data-toggle='modal'>
                                            <?php
                                            if (isset($this->session->userdata['user_city'])) {
                                                $user_city = $this->session->userdata['user_city'];
                                            } else {
                                                $user_city = 'Москва';
                                            }
                                            echo $user_city;
                                            ?> <i class='fa fa-sort-down'></i>
                                        </a>,
                                        <a class="popover-a2 dashed ml10 with" href=""><span class="without">Без упаковки на поддоне</span>
                                            <i class='fa fa-sort-down'></i> <span
                                                class="with">Упакованные на поддон</span></a>

                                    </h4>
                                    <table class="responsive">
                                        <thead class="table-header">
                                        <tr class='row-1'>
                                            <th>Размер</th>
                                            <th>Кол-во</th>
                                            <th colspan="2" class="text-center">Кол-во на поддоне</th>
                                            <th colspan="3" class="text-center">Кол-во на машине</th>
                                            <th colspan="3" class="text-center">Цена руб.</th>
                                            <th class="text-center">Кол-во поддонов</th>
                                            <th class='br-none' style='border-right: none;'></th>
                                        </tr>
                                        <tr class="row-2">
                                            <td>выс. шир. дл.</td>
                                            <td>шт. в 1м3</td>
                                            <td class='text-center br-none'>шт</td>
                                            <td class='text-center'>м3</td>
                                            <td class='text-center br-none'>под</td>
                                            <td class='text-center br-none'>шт</td>
                                            <td class='text-center'>м3</td>
                                            <td class='text-center br-none'>под</td>
                                            <td class='text-center br-none'>м3</td>
                                            <td class='text-center'>машины</td>
                                            <td></td>
                                            <td class='br-none'></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data['products'] AS $product) {
                                            if ($product['category'] == $data['categories']['name']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo isset($product['size']) ? $product['size'] : 0; ?></td>
                                                    <td>
                                                        <?php
                                                        $product['size'] = isset($product['size']) ? $product['size'] : '290x100x599';
                                                        $size = explode('x', $product['size']);
                                                        $volume = 1;
                                                        foreach ($size as $length) {
                                                            $volume *= ($length * 0.001);
                                                        }
                                                        echo number_format((1 / $volume), 2, '.', ',');
                                                        ?>
                                                    </td>
                                                    <td class="text-center br-none"><?php echo $on_pallet_amount = isset($product['on_pallet_amount']) ? $product['on_pallet_amount'] : 80 ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        $count = isset($product['on_pallet_amount']) ? $product['on_pallet_amount'] : 80;
                                                        echo number_format(($count * $volume), 2, '.', ',');
                                                        ?>
                                                    </td>
                                                    <td class="text-center br-none"><?php echo $pallet_amount = isset($product['pallet_amount']) ? $product['pallet_amount'] : 22 ?></td>
                                                    <td class="text-center br-none">
                                                        <?php
                                                        echo $pallet_amount * $on_pallet_amount;
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        echo number_format($volume * $pallet_amount * $on_pallet_amount, 3, '.', ',');
                                                        ?>
                                                    </td>

                                                    <td class="text-center br-none">
                                                        <?php
                                                        $prices = Product::load_product_prices($product['id']);
                                                        if (!empty($prices)) {
                                                            $price_pallet = 4500;
                                                            foreach ($prices as $price) { ?>
                                                                <span
                                                                    class='city-price <?php echo $price['city'] == $user_city ? '' : 'hidden' ?>'
                                                                    data-city-price='<?php echo $price['city'] ?>'>
																		<?php echo isset($price['price']) ? number_format($price['price'], 2, '.', ',') : 0;
                                                                        if ($price['city'] == $user_city) {
                                                                            $price_pallet = $price['price'];
                                                                        }
                                                                        ?>
																	 </span>
                                                                <?php
                                                            }
                                                        } else {
                                                            $price_pallet = 4500;
                                                            echo $price_pallet;
                                                        }

                                                        ?>
                                                    </td>
                                                    <td class="text-center br-none"><?php echo $cube_price = number_format($price_pallet / ($count * $volume), 0, '.', ' ') ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        echo number_format($price_pallet * $pallet_amount, 0, '.', ' ');
                                                        ?>
                                                    </td>
                                                    <td class='text-center'>
                                                        <form id='myform' class='display-inline-block' method='POST'
                                                              action='#'>
                                                            <input type='button' value='-' class='qtyminus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                            <input type='text'
                                                                   name='quantity<?php echo $product['id'] ?>'
                                                                   value='1' class='qty'/>
                                                            <input type='button' value='+' class='qtyplus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                        </form>
                                                    </td>
                                                    <td class='br-none text-center'>
                                                        <form action='/user/add_to_cart' method='post'>
                                                            <input type="hidden" name="id"
                                                                   value='<?php echo $product['id'] ?>'>
                                                            <input type="hidden"
                                                                   name="quantity<?php echo $product['id'] ?>"
                                                                   value='1'>
                                                            <input type="hidden" name="path"
                                                                   value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
                                                            <input id="<?php echo $csrf_token_name; ?>" type="hidden"
                                                                   value="<?php echo $csrf_hash; ?>"
                                                                   name="<?php echo $csrf_token_name; ?>">
                                                            <button type='submit'><i
                                                                    class='fa fa-shopping-basket fa-2x'></i></button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-info-2 proposal-row-2 mb80 pt50">
                                    <table class="responsive">
                                        <thead class="table-header">
                                        <tr class='row-1'>
                                            <th rowspan="2">Показатель</th>
                                            <th colspan="6" class="text-center">Значение показателя для марки по средней
                                                плотности
                                            </th>
                                        </tr>
                                        <tr class="row-2">
                                            <td class='text-center'>D400</td>
                                            <td class='text-center'>D450</td>
                                            <td class='text-center'>D500</td>
                                            <td class='text-center'>D550</td>
                                            <td class='text-center'>D600</td>
                                            <td class='text-center'>D700</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Средня плотность в сухом состоянииб кг/м3</td>
                                            <td>376-425</td>
                                            <td>426-475</td>
                                            <td>476-525</td>
                                            <td>526-575</td>
                                            <td>576-625</td>
                                            <td>676-725</td>
                                        </tr>
                                        <tr>
                                            <td>Средня плотность в сухом состоянииб кг/м3</td>
                                            <td>376-425</td>
                                            <td>426-475</td>
                                            <td>476-525</td>
                                            <td>526-575</td>
                                            <td>576-625</td>
                                            <td>676-725</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="row large-12 proposal-row">
                                <h2 class="text-center mb50" style="font-size: 24px;"><i class="fa fa-plus"></i> С этими
                                    блоками также покупают</h2>

                                <div class="row large-12 ">
                                    <?php foreach ($data['products'] AS $product) {
                                        if ($product['recommended'] == 1) { ?>
                                            <div class="column large-6 small-12 mb50">
                                                <div class="column large-12 proposal-product">
                                                    <div class="column large-8 medium-6 small-12">
                                                        <h3 class="mt0"><?php echo $product['name'] ?></h3>
                                                        <p><?php echo $product['description'] ?></p>
                                                        <form id='myform' class='display-block' method='POST'
                                                              action='#'>
                                                            <input type='button' value='-' class='qtyminus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                            <input type='text'
                                                                   name='quantity<?php echo $product['id'] ?>' value='0'
                                                                   class='qty'/>
                                                            <input type='button' value='+' class='qtyplus'
                                                                   field='quantity<?php echo $product['id'] ?>'
                                                                   style='font-size: 20px'/>
                                                        </form>

                                                    </div>
                                                    <div class="column large-4 medium-6 small-12">
                                                        <img
                                                            src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $product['image'] ?>">
                                                    </div>
                                                    <div class="column large-12">
                                                        <form action='/user/add_to_cart' method='post'>
                                                            <input type="hidden" name="id"
                                                                   value='<?php echo $product['id'] ?>'>
                                                            <input type="hidden"
                                                                   name="quantity<?php echo $product['id'] ?>"
                                                                   value='1'>
                                                            <input type="hidden" name="path"
                                                                   value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
                                                            <input id="<?php echo $csrf_token_name; ?>" type="hidden"
                                                                   value="<?php echo $csrf_hash; ?>"
                                                                   name="<?php echo $csrf_token_name; ?>">
                                                            <button role="button" aria-label="submit form" type="submit"
                                                                    href="#"
                                                                    class="button btn-blueLine btn-inverted add-to-cart">
                                                                Добавить к заказу <i class="fa fa-long-arrow-right"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
    <div class='row expanded large-12 pb130' style='background-color: #f0f2f6'>
        <div class="column products-title medium-12 small-centered text-center">
            <h2 class='uppercase mb30'>Другие виды блоков</h2>
            <h5 class="mb80 text-light text-18">У нас есть все виды блоков из ячеистого бетона</h5>
        </div>
        <div class="row large-10">
            <div class="column large-4 small-12 medium-4 mb30">
                <div class="proposal_block">
                    <div class="img text-center">
                        <img src="<?php echo base_url() ?>/application/resources/user_resources/img/wall_blocks.png"
                             alt="">
                    </div>
                    <div class="">
                        <h2>Стеновые<br> блоки</h2>
                    </div>

                    <a href="/user/blocks/1" class="btn-blue uppercase not-decorated">Размеры и цены <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                </div>
            </div>
            <div class="column large-4 small-12 medium-4 mb30">
                <div class="proposal_block">
                    <div class="img text-center">
                        <img src="<?php echo base_url() ?>/application/resources/user_resources/img/grid_block.png"
                             alt="">
                    </div>
                    <div class="">
                        <h2>Пазогребенные<br> блоки</h2>
                    </div>

                    <a href="/user/blocks/2" class="btn-blue uppercase not-decorated">Размеры и цены <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                </div>
            </div>
            <div class="column large-4 small-12 medium-4 mb30">
                <div class="proposal_block">
                    <div class="img text-center">
                        <img src="<?php echo base_url() ?>/application/resources/user_resources/img/brus_block.png"
                             alt="">
                    </div>
                    <div class="">
                        <h2>Брусовые<br> перемычки</h2>
                    </div>

                    <a href="/user/blocks/3" class="btn-blue uppercase not-decorated">Размеры и цены <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>