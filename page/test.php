
        <main class="main">
           <?
            $ozgaruvchi = 'Dars';
            echo $ozgaruvchi;
           ?>
           <h1>Bugun birinchi <?= $ozgaruvchi?></h1>
           <?
            $arr = ['salom','alik',1];
             var_dump($arr);

           ?>
           <p>Mening ismim G'ani hammaga <?=$arr[0]?></p>
           <?
                $obj = [
                    "Ali"=>"MEn ALiman",
                    "Vali"=>"Manga nima"
                ];
                var_dump($obj)
           ?>
           <?
            var_dump(date("Y"));
           ?>
          
           <select name="" id="">
           <?
           for ($i=date("Y")-100; $i < date("Y"); $i++):?>
            <option value=""><?=$i?></option>
           <?endfor?>
           </select>
           <?date_default_timezone_set("Asia/Tokyo")?>
           <h2><?=date("F:i:s")?></h2>
        </main>
