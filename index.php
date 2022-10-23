<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="http://fonts.cdnfonts.com/css/museo-sans-cyrl?styles=17900,17898,17902" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'DB.php';
    
    //Getting products from MySql//
    $sql = "SELECT * FROM `products`";
    $result = getBySql($sql);
    while ($obj = mysqli_fetch_object($result)) {
        $result_obj = new stdClass();
        $result_obj->id = $obj->id;
        $result_obj->cost = $obj->price;

        switch ($obj->description) {
            case (str_contains($obj->description, "звонки")):
                $result_obj->image =  "phone";
                break;
            case (str_contains($obj->description, "спецкурс")):
                $result_obj->image =  "book";
                break;
            default:
                $result_obj->image =  "book2";
                break;
        }
        $dis_des = explode("%", $obj->description);
        $result_obj->red_discount = $dis_des[0] . "%";
        $result_obj->text = $dis_des[1];

        $products[] = $result_obj;
    }

    $result->free_result();

    //Getting coins info of a user//


    ?>
    <div class="boxes">
        <div class="Rectangle_208">
            <h class="text_208">
                Ваш баланс:
            </h>
            <div class="balance">
                <img src="assets/images/Монета ET 3.svg" class="ET_1_photo">
                34
                <img src="assets/images/ET.png" class="ET_1">
            </div>
        </div>
        <div class="Rectangle_230">
            <div class="Rectangle_230_top_line">
                <h class="text_230">
                    Варианты обмена на скидку
                </h>

                <a class="text_instruction" href="#">
                    инструкция
                </a>
            </div>


            <div class="discounts_container">

                <?php
                foreach ($products as $item) :
                ?>
                    <div class="discount">
                        <div>
                            <img src="assets/images/Монета ET 3.svg" class="ET_2_photo">
                            <?= $item->cost ?>
                            <img src="assets/images/ET.png" class="ET_2">
                        </div>
                        <div>
                            <img class="discounts_image" src="assets/images/<?= $item->image ?>.png">
                            <h class="text_phone"> <?= $item->image == "phone" ? "x2" : "" ?> </h>
                        </div>
                        <div class="description">
                            <div class="red_text">
                                <?= $item->red_discount ?>
                            </div>
                            <?= $item->text ?>
                        </div>
                        <button class="buttton_state" onclick="">
                            Купить
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</body>

</html>