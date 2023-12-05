<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap css -->
<link href="css/style.css" rel="stylesheet" media="all">

<title>calendar</title>
</head>

<body>
    <header>
    <h1 class="font-weight-normal">
        <?php
            // 初期値として 現年+1 を設定
            $displayYear = date('Y') + 1;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $displayYear = isset($_POST["year"]) ? intval($_POST["year"]) : $displayYear;
            }

            echo "西暦 $displayYear 年のカレンダー";
        ?>
    </h1>
    </header>

    <main>
    <div id="form">
        <form method="post">
            <input type="number" name="year" min="0" max="65535" step="1"> 年へ
            <button type="submit">Go!</button>
        </form>
    </div>
    <div id="calendar">
        <table id="jan">
            <caption>１月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="feb">
            <caption>２月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="mar">
            <caption>３月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="apr">
            <caption>４月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="may">
            <caption>５月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="jun">
            <caption>６月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="jul">
            <caption>７月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="aug">
            <caption>８月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="sep">
            <caption>９月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="oct">
            <caption>１０月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="nov">
            <caption>１１月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table id="dec">
            <caption>１２月</caption>
            <thead>
                <tr>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
            </thead>
            <tbody>
                <tr id="w1">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w3">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w4">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="w6">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <pre>
    <?php
    date_default_timezone_set('Asia/Tokyo');

    function addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month) {
        if ($nDayOfWeek == "0") {
            // echo "<script>console.log('振替休日')</script>";
            echo "<script>document.getElementById('" . $month["$nMonth"] . "').querySelector('#w" . ($nWeek) . " td:nth-child(" . ($nDayOfWeek + 2) . ")').classList.add('holiday');</script>";
        } else {
            // echo "<script>console.log('休日')</script>";
            echo "<script>document.getElementById('" . $month["$nMonth"] . "').querySelector('#w" . $nWeek . " td:nth-child(" . ($nDayOfWeek + 1) . ")').classList.add('holiday');</script>";
        }
    }

    function checkHoliday($nMonth, $nDayOfWeek, $nWeek, $nDay, $month) {
        // echo "<script>console.log('test')</script>";
        if ($nMonth == "1") {
            if ($nDay == "1") { // 元日
                addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
            } else if ($nDayOfWeek == "1" && intval($nDay) >= 8 && intval($nDay) <= 14) { // 成人の日
                addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
            }
        } else if ($nMonth == "2") {
            if ($nDay == "11" || $nDay == "23") { // 建国記念の日
                addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
            }
        } else if ($nMonth == "4" && $nDay == "29") { // 昭和の日
            addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
        } else if ($nMonth == "5") {
            if ($nDay == "3" || $nDay == "4" || $nDay == "5") { // 憲法記念日 みどりの日　こどもの日
                addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
            }
        } else if ($nMonth == "7" && $nDayOfWeek == "1" && intval($nDay) >= 15 && intval($nDay) <= 21) { // 海の日
            addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
        } else if ($nMonth == "8" && $nDay == "11") { // 山の日
            addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
        } else if ($nMonth == "9" && $nDayOfWeek == "1" && intval($nDay) >= 15 && intval($nDay) <= 21) { // 敬老の日
            addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
        } else if ($nMonth == "10" && $nDayOfWeek == "1" && intval($nDay) >= 8 && intval($nDay) <= 14) { // スポーツの日
            addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
        } else if ($nMonth == "11") { // 文化の日
            if ($nDay == "3" || $nDay == "23") { // 勤労感謝の日
                addClassHoliday($nMonth, $nDayOfWeek, $nWeek, $month);
            }
        }
    };

    $month = [
        "1" => "jan",
        "2" => "feb",
        "3" => "mar",
        "4" => "apr",
        "5" => "may", 
        "6" => "jun",
        "7" => "jul",
        "8" => "aug",
        "9" => "sep",
        "10" => "oct",
        "11" => "nov",
        "12" => "dec"
    ]; // 連想配列　1 => jun, 2 => feb, ...
    if ($displayYear % 4 === 0) {
        if ($displayYear % 100 === 0 && !($displayYear % 400 === 0)) {
            $leap = 364; // not leap
        } else {
            $leap = 365; // leap
        }
    } else {
        $leap = 364; // not leap
    }

    for ($i = 0; $i <= $leap; $i++) {
        $timeStamp = strtotime("$displayYear-01-01 +$i day");
        $nMonth = date("n", $timeStamp);
        $nWeek = (ceil((date('d', $timeStamp) - date('w', $timeStamp) - 1) / 7) + 1); 
        $nDayOfWeek = date("w", $timeStamp);
        $nDay = date("d", $timeStamp);
        $nDay = ltrim($nDay, '0');
        
        checkHoliday($nMonth, $nDayOfWeek, $nWeek, $nDay, $month);

        // echo "<script>console.log('" . $nDayOfWeek . " : " .date("l", $timeStamp) . "')</script>";
        echo "<script>document.getElementById('" . $month["$nMonth"] . "').querySelector('#w" . $nWeek . " td:nth-child(" . ($nDayOfWeek + 1) . ")').innerHTML = '" . $nDay . "'</script>";
    }
        ?>
        </pre>
    </main>
</body>
</html>
