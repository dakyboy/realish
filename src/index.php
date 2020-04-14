<!DOCTYPE html>

<html lang="en">
<?php require "estimator.php" ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Novelty covid-19 estimator with severe Case scenario">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <title><?php echo $appName ?></title>
</head>

<body>
    <div class="container">
        <h1 class="title"><?php echo $appName ?></h1>
    </div>

    <div class="columns">
        <div class="column is-one-quarter">
            
                <div class="field">
                    <label for="population" class="label">Population</label>
                    <div class="control">
                        <input name="data-population" id="population" class="input" type="text" placeholder="Population" />
                    </div>
                </div>

                <div class="field">
                    <label for="time-to-elapse" class="label">Time to Elapse</label>
                    <div class="control">
                        <input name="data-time-to-elapse" id="time-to-elapse" class="input" type="text" placeholder="Time to elapse" />
                    </div>
                </div>

                <div class="field">
                    <label for="data-period-type" class="label">Period type</label>
                    <div class="control">
                        <label class="radio"><input name="data-period-type" type="radio" />days</label>
                        <label class="radio"><input name="data-period-type" type="radio" />weeks</label>
                        <label class="radio"><input name="data-period-type" type="radio" />months</label>

                    </div>
                </div>

                <div class="field">
                    <label for="reported-cases" class="label">Reported Cases</label>
                    <div class="control">
                        <input name="data-reported-cases" id="reported-cases" class="input" type="text" placeholder="Number of reported cases" />
                    </div>
                </div>

                <div class="field">
                    <label for="total-hospital-beds" class="label">Total hospital Beds</label>
                    <div class="control">
                        <input name="data-total-hospital-beds" id="total-hospital-beds" class="input" type="text" placeholder="Total number of hospital beds" />
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button name="data-go-estimate" id="go-estimate" class="button is-link">Estimate Impact</button>
                    </div>
                </div>

        </div>
    </div>

    <?php 
        
    var_dump(json_decode($africaData_1));
    var_dump(json_decode($africaData_2));
    
    
        
    ?>
</body>

</html>