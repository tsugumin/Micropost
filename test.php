PHP Command 1
PHP Command 2
PHP Command 3


<?php
    print 'Hello';
?>
<?php
    print "Hello";
?>
<?php
    print
      'Hello'
        ;
?>
<?php
    // Commenting this code out turns it off!
    // print 'Hello';

    // 複数行でコメントアウトして無効に！

    // You can do this to multiple lines at once, too!

    /*
    print 'Hello';
    print 'Hello';
    print 'Hello';
    */

    print 'Only this will run';
?>
<?php
    $hensuu = "some data";
    print $hensuu;
?>
<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;

    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;

    print $ichiniti_no_byousuu;
?>
<?php
    $num = 2;
    var_dump($num);
?>
<?php
    $num = 2;
    var_dump($num);
?>
<?php
    // 10 > 5 is true, so this becomes if (true), and {...} is run
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }

    // 10 <= 5 is false, so this becomes if (false), and {...} is not run
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>

<?php
    if (10 == 5) {
        print '10 == 5 は false なのでここは実行されない' . PHP_EOL;
    }
    else {
        print 'if側が実行されないので、ここだけ実行される' . PHP_EOL;
    }
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    foreach ($fruits as $ke => $fruit) {
        print $ke . '回目: ' . $fruit . PHP_EOL;
    }
?>


