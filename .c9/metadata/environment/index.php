{"filter":false,"title":"index.php","tooltip":"/index.php","ace":{"folds":[],"scrolltop":214.83999633789062,"scrollleft":0,"selection":{"start":{"row":36,"column":7},"end":{"row":36,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"74c0b83c39be7994ba236089b17974912227fdec","undoManager":{"mark":59,"position":59,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":7},"action":"insert","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <form action=\"index.php\" method=\"POST\">","            <label>名前: <input type=\"text\" name=\"target_name\"></label>","            <input type=\"submit\" value=\"送信\">","        </form>","        <?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん</p>","    </body>","</html>"],"id":1}],[{"start":{"row":25,"column":69},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["<"],"id":6}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["l"],"id":7},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["a"]},{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["b"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["e"]},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["l"]},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["?"]}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"remove","lines":["?"],"id":8}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":27},"action":"insert","lines":["></label>"],"id":9}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["n"],"id":10}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"remove","lines":["n"],"id":11}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":21},"action":"insert","lines":["年齢"],"id":26}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["："],"id":28}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":["："],"id":29}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":[":"],"id":31}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":["<"],"id":32},{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["i"]},{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["n"]}],[{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["o"],"id":33}],[{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"remove","lines":["o"],"id":34}],[{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["p"],"id":35},{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"insert","lines":["u"]},{"start":{"row":26,"column":27},"end":{"row":26,"column":28},"action":"insert","lines":["t"]}],[{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":[" "],"id":36},{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"insert","lines":["t"]},{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["y"]},{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"insert","lines":["o"]}],[{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"remove","lines":["o"],"id":37}],[{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"insert","lines":["o"],"id":38},{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["r"]}],[{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"remove","lines":["r"],"id":39}],[{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["e"],"id":40}],[{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"remove","lines":["e"],"id":41},{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"remove","lines":["o"]}],[{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"insert","lines":["p"],"id":42},{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":["+"],"id":43}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["+"],"id":44}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":["="],"id":45}],[{"start":{"row":26,"column":34},"end":{"row":26,"column":35},"action":"insert","lines":["\""],"id":46}],[{"start":{"row":26,"column":35},"end":{"row":26,"column":36},"action":"insert","lines":["t"],"id":47},{"start":{"row":26,"column":36},"end":{"row":26,"column":37},"action":"insert","lines":["e"]},{"start":{"row":26,"column":37},"end":{"row":26,"column":38},"action":"insert","lines":["x"]},{"start":{"row":26,"column":38},"end":{"row":26,"column":39},"action":"insert","lines":["t"]},{"start":{"row":26,"column":39},"end":{"row":26,"column":40},"action":"insert","lines":["\""]}],[{"start":{"row":26,"column":40},"end":{"row":26,"column":41},"action":"insert","lines":[" "],"id":48},{"start":{"row":26,"column":41},"end":{"row":26,"column":42},"action":"insert","lines":["n"]},{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"insert","lines":["a"]},{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["m"]},{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":[" "],"id":49}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"remove","lines":[" "],"id":50}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":["+"],"id":51}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"remove","lines":["+"],"id":52}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":["="],"id":53},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"insert","lines":["\""]}],[{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"insert","lines":["t"],"id":54},{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["a"]},{"start":{"row":26,"column":49},"end":{"row":26,"column":50},"action":"insert","lines":["r"]},{"start":{"row":26,"column":50},"end":{"row":26,"column":51},"action":"insert","lines":["g"]},{"start":{"row":26,"column":51},"end":{"row":26,"column":52},"action":"insert","lines":["e"]},{"start":{"row":26,"column":52},"end":{"row":26,"column":53},"action":"insert","lines":["t"]}],[{"start":{"row":26,"column":53},"end":{"row":26,"column":54},"action":"insert","lines":["_"],"id":55},{"start":{"row":26,"column":54},"end":{"row":26,"column":55},"action":"insert","lines":["n"]},{"start":{"row":26,"column":55},"end":{"row":26,"column":56},"action":"insert","lines":["a"]},{"start":{"row":26,"column":56},"end":{"row":26,"column":57},"action":"insert","lines":["m"]},{"start":{"row":26,"column":57},"end":{"row":26,"column":58},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":58},"end":{"row":26,"column":59},"action":"insert","lines":["\""],"id":56},{"start":{"row":26,"column":59},"end":{"row":26,"column":60},"action":"insert","lines":[">"]}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":[" "],"id":57}],[{"start":{"row":26,"column":58},"end":{"row":26,"column":59},"action":"remove","lines":["e"],"id":58},{"start":{"row":26,"column":57},"end":{"row":26,"column":58},"action":"remove","lines":["m"]},{"start":{"row":26,"column":56},"end":{"row":26,"column":57},"action":"remove","lines":["a"]},{"start":{"row":26,"column":55},"end":{"row":26,"column":56},"action":"remove","lines":["n"]}],[{"start":{"row":26,"column":55},"end":{"row":26,"column":56},"action":"insert","lines":["a"],"id":59},{"start":{"row":26,"column":56},"end":{"row":26,"column":57},"action":"insert","lines":["g"]},{"start":{"row":26,"column":57},"end":{"row":26,"column":58},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":90},"end":{"row":34,"column":91},"action":"insert","lines":[","],"id":60}],[{"start":{"row":34,"column":90},"end":{"row":34,"column":91},"action":"remove","lines":[","],"id":61}],[{"start":{"row":34,"column":90},"end":{"row":34,"column":91},"action":"insert","lines":["、"],"id":62}],[{"start":{"row":34,"column":90},"end":{"row":34,"column":91},"action":"remove","lines":["、"],"id":63}],[{"start":{"row":34,"column":86},"end":{"row":34,"column":87},"action":"insert","lines":["、"],"id":64}],[{"start":{"row":34,"column":87},"end":{"row":34,"column":124},"action":"insert","lines":["<?php print $_POST['target_name']; ?>"],"id":65}],[{"start":{"row":34,"column":117},"end":{"row":34,"column":118},"action":"remove","lines":["e"],"id":66},{"start":{"row":34,"column":116},"end":{"row":34,"column":117},"action":"remove","lines":["m"]},{"start":{"row":34,"column":115},"end":{"row":34,"column":116},"action":"remove","lines":["a"]},{"start":{"row":34,"column":114},"end":{"row":34,"column":115},"action":"remove","lines":["n"]}],[{"start":{"row":34,"column":114},"end":{"row":34,"column":115},"action":"insert","lines":["a"],"id":71},{"start":{"row":34,"column":115},"end":{"row":34,"column":116},"action":"insert","lines":["g"]},{"start":{"row":34,"column":116},"end":{"row":34,"column":117},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":87},"end":{"row":34,"column":88},"action":"insert","lines":["("],"id":72}],[{"start":{"row":34,"column":124},"end":{"row":34,"column":125},"action":"insert","lines":[")"],"id":73}],[{"start":{"row":34,"column":86},"end":{"row":34,"column":87},"action":"remove","lines":["、"],"id":74}],[{"start":{"row":25,"column":69},"end":{"row":25,"column":76},"action":"insert","lines":["PHP_EOL"],"id":75}],[{"start":{"row":26,"column":68},"end":{"row":26,"column":75},"action":"insert","lines":["PHP_EOL"],"id":76}],[{"start":{"row":25,"column":75},"end":{"row":25,"column":76},"action":"remove","lines":["L"],"id":77},{"start":{"row":25,"column":74},"end":{"row":25,"column":75},"action":"remove","lines":["O"]},{"start":{"row":25,"column":73},"end":{"row":25,"column":74},"action":"remove","lines":["E"]},{"start":{"row":25,"column":72},"end":{"row":25,"column":73},"action":"remove","lines":["_"]},{"start":{"row":25,"column":71},"end":{"row":25,"column":72},"action":"remove","lines":["P"]},{"start":{"row":25,"column":70},"end":{"row":25,"column":71},"action":"remove","lines":["H"]},{"start":{"row":25,"column":69},"end":{"row":25,"column":70},"action":"remove","lines":["P"]}],[{"start":{"row":25,"column":69},"end":{"row":25,"column":70},"action":"insert","lines":["<"],"id":78}],[{"start":{"row":25,"column":70},"end":{"row":25,"column":71},"action":"insert","lines":["b"],"id":79},{"start":{"row":25,"column":71},"end":{"row":25,"column":72},"action":"insert","lines":["r"]}],[{"start":{"row":25,"column":72},"end":{"row":25,"column":73},"action":"insert","lines":[">"],"id":80}],[{"start":{"row":26,"column":74},"end":{"row":26,"column":75},"action":"remove","lines":["L"],"id":81},{"start":{"row":26,"column":73},"end":{"row":26,"column":74},"action":"remove","lines":["O"]},{"start":{"row":26,"column":72},"end":{"row":26,"column":73},"action":"remove","lines":["E"]},{"start":{"row":26,"column":71},"end":{"row":26,"column":72},"action":"remove","lines":["_"]},{"start":{"row":26,"column":70},"end":{"row":26,"column":71},"action":"remove","lines":["P"]},{"start":{"row":26,"column":69},"end":{"row":26,"column":70},"action":"remove","lines":["H"]},{"start":{"row":26,"column":68},"end":{"row":26,"column":69},"action":"remove","lines":["P"]}],[{"start":{"row":26,"column":68},"end":{"row":26,"column":69},"action":"insert","lines":["<"],"id":82},{"start":{"row":26,"column":69},"end":{"row":26,"column":70},"action":"insert","lines":["b"]},{"start":{"row":26,"column":70},"end":{"row":26,"column":71},"action":"insert","lines":["r"]}],[{"start":{"row":26,"column":71},"end":{"row":26,"column":72},"action":"insert","lines":[">"],"id":83}]]},"timestamp":1526368728881}