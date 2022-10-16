<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "stylesheet" href = "assets/css/style.css">
    <link href="http://fonts.cdnfonts.com/css/museo-sans-cyrl?styles=17900,17898,17902" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "boxes">
        <div class = "Rectangle_208">
            <h class = "text_208">
                Ваш баланс:
            </h>
            <div class = "balance">
                <img src = "assets/images/Монета ET 3.svg" class = "ET_1_photo">
                34 
                <img src = "assets/images/ET.png" class = "ET_1">
            </div>
        </div>
        <div class = "Rectangle_230">
            <div class = "Rectangle_230_top_line">
                <h class = "text_230">
                    Варианты обмена на скидку
                </h>
            
                <a class = "text_instruction" href = "#" >
                    инструкция
                </a>
            </div>
            

            <div class = "discounts_container">

                <?php 
                    $item_1 = array("cost" => "50", "image" => "phone", "red_discount" => "50%", "text" => "на звонки ST (x2)", "button" => true);
                    $item_2 = array("cost" => "70", "image" => "book", "red_discount" => "30%", "text" => "на спецкурс", "button" => false);
                    $item_3 = array("cost" => "100", "image" => "book2", "red_discount" => "50%", "text" => "на курс", "button" => false);
                    $item_4 = array("cost" => "139", "image" => "book2", "red_discount" => "65%", "text" => "на курс", "button" => false);
                    
                    $data = array($item_1, $item_2, $item_3, $item_4);
                    foreach($data as $item): 
                ?>
                    <div class = "discount">
                        <div>
                            <img src = "assets/images/Монета ET 3.svg" class = "ET_2_photo">
                            <?= $item["cost"] ?>
                            <img src = "assets/images/ET.png" class = "ET_2">
                        </div>
                        <div>
                            <img class = "discounts_image" src = "assets/images/<?=$item["image"]?>.png">
                            <h class = "text_phone"> <?=$item["image"] == "phone" ? "x2" : "" ?> </h>
                        </div>
                        <div class = "description">
                            <div class = "red_text">
                                <?=$item["red_discount"]?>
                            </div>
                            <?=$item["text"]?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
</body>
</html>