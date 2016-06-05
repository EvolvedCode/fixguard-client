<?php
$host = "http://localhost/examples/"; //Do not forget to end with a /

function abort(){
    header("Location: login.php");
    exit;
}
if(empty($_POST) or $_POST['query']==''){
    abort();
}

$url = $host.$_POST['query'];
$json = file_get_contents($url);
$data = json_decode($json);
if(!$data->success){
    abort();
}

$fixtures = $data->fixtures->fixtures;
$bankers = $data->bankers;
$bunkers = $data->bunkers->bunkers;
?>

<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="css/material.min.css" rel="stylesheet" type="text/css">
    <script src="js/material.min.js"></script>

    <title><?= $data->name ?>'s Profile</title>
</head>
<body>
    <a class="mdl-navigation__link" href="dash.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Dashboard</a>
    <div class="mdl-typography--display-4"><?= $data->name ?></div>
    <br />
    <p class="mdl-typography--headline">
        <?= $data->fullStyle->street.' '.$data->fullStyle->zipCode.' '.$data->fullStyle->city.', '.$data->fullStyle->country ?>
    </p>
    <p class="mdl-typography--headline">
        <?= $data->background ?>
    </p>

    <div id="p1" class="mdl-progress mdl-js-progress" style="width: 100%; height: 12px;"></div>
    <script>
    document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
        this.MaterialProgress.setProgress(<?= $data->ranking ?>);
    });
    </script>
    <p class="mdl-typography--headline" align="right">
        Ranking: <?= $data->ranking ?>%
    </p>

    <p class="mdl-typography--headline">
        Bankers
    </p>

    <ul class="mdl-list">
        <?php
        foreach($bankers as &$value){
            echo '
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">person</i>
                    '.$value.'
                </span>
            </li>
            ';
        }
        ?>
    </ul>

    <hr />
    <p class="mdl-typography--headline">
        Bunkers
    </p>
    <ul class="demo-list-three mdl-list">
        <?php
        foreach($bunkers as &$value){
            echo '
            <li class="mdl-list__item mdl-list__item--three-line">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">person</i>
                    <span>Bunker</span>
                    <span class="mdl-list__item-text-body">
                        '.$value->street.' '.$value->zipCode.' '.$value->city.', '.$value->country.'
                    </span>
                </span>
            </li>
            ';
        }
        ?>
    </ul>

    <hr />
    <p class="mdl-typography--headline">
        Past Fixtures:
    </p>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%;">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Date</th>
                <th class="mdl-data-table__cell--non-numeric">Vessel Name</th>
                <th>Vessel DWT</th>
                <th>Year Built</th>
                <th class="mdl-data-table__cell--non-numeric">Owner</th>
                <th class="mdl-data-table__cell--non-numeric">In Charge</th>
                <th class="mdl-data-table__cell--non-numeric">Broker</th>
                <th class="mdl-data-table__cell--non-numeric">In Charge</th>
                <th class="mdl-data-table__cell--non-numeric">Cargo</th>
                <th>Cargo Quantity</th>
                <th class="mdl-data-table__cell--non-numeric">Port Loaded</th>
                <th class="mdl-data-table__cell--non-numeric">Port Discharged</th>
                <th class="mdl-data-table__cell--non-numeric">Trip Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($fixtures as &$value) {
                echo '
                <tr id="tt'.$i.'">
                    <td class="mdl-data-table__cell--non-numeric">'.$value->whenDate.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->vesselName.'</td>
                    <td>'.$value->vesselDwt.'</td>
                    <td>'.$value->vesselYearBuilt.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->owner->name.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->owner->personInCharge.'('.$value->owner->telephone.')'.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->broker->name.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->broker->personInCharge.'('.$value->broker->telephone.')'.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->cargo.'</td>
                    <td>'.$value->cargoQuantity.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->portLoading.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->portDischarging.'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$value->tripType.'</td>
                </tr>
                <div class="mdl-tooltip mdl-tooltip--large" for="tt'.$i.'">
                    '.$value->comments.'
                </div>
                ';
                $i= $i+1;
            }
            ?>
        </tbody>
    </table>
    <button onClick="window.print()" target="_top" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white" style="position: fixed;display: block;right: 0;top: 0;margin-right: 40px;margin-top: 40px;z-index: 900;">
        <i class="material-icons" role="presentation">print</i>Print
    </a>
</body>
</html>
