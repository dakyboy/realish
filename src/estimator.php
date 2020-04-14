<?php

$appName = "novelty COVID-19 infections estimator";
function covid19ImpactEstimator($data)
{
  $input = $data;
  $impact = array();
  $severeImpact = array();
  $output = array($input, $impact, $severeImpact);
  return json_encode($output);
}

#Functions

function calculateCurrentlyInfected () {

}

$africaData = '{"region": {"name": Africa, "avgAge": 19.7, "avgDailyIncomeInUSD": 5, "avgDailyIncomePopulation": 0.71 }, "periodType": "days", "timeToElapse": 58, "reportedCases": 674, "population": 66622705, "totalHospitalBeds": 1380614}';
$africaData_1 = '{"periodType":"days", "timeToElapse": 58, "reportedCases": 674, "population": 66622705, "totalHospitalBeds": 1380614}';
$africaData_2 = '{"region":["name": Africa, "avgAge": 19.7, "avgDailyIncomeInUSD": 5, "avgDailyIncomePopulation": 0.71 ]}';




  // echo covid19ImpactEstimator($africaData);

  class Region {
    private $name;
    private $averageAge;
    private $averageDailyIncomeInUSD;
    private $averageAgeDailyIncomePopulation;
    private $population;
    private $totalHospitalBeds;
    private $period;
    private $periodType;
    private $currentlyInfected;
    private $infectionsByRequestedTime;
    private $severeCasesByRequestedTime;
    private $hospitalBedsByRequestedTime;
    private $casesForICUByRequestedTime;
    private $casesForVentilatorsByRequestedTime;
    private $dollarsInFlight;
    private $impact;
    private $severeImpact;

    function __construct($name, $population)
    {
      $this->name = $name;
      $this->population = $population;
    }

    // Getters

    function getName () {
      echo $this->name;
    }

    function getAverageAge () {
      echo $this->averageAge;
    }
    function getAverageDailyIncomeInUSD () {
      echo $this->averageDailyIncomeInUSD;
    }
    function getAverageDailyIncomePopulation () {
      echo $this->averageAgeDailyIncomePopulation;
    }
    function getPopulation () {
      echo $this->population;
    }
    function getTotalHosiptalBeds () {
      echo $this->totalHospitalBeds;
    }
    
    // Setters
    function setName ($name) {
      $this->name = $name;
    }

    function setAverageAge ($averageAge) {
      $this->averageAge = $averageAge;
    }
    function setAverageDailyIncomeInUSD ($averageDailyIncomeInUSD) {
      $this->averageDailyIncomeInUSD = $averageDailyIncomeInUSD;
    }
    function setAverageDailyIncomePopulation ($averageAgeDailyIncomePopulation) {
      $this->averageAgeDailyIncomePopulation = $averageAgeDailyIncomePopulation;
    }
    function setPopulation ($population) {
      $this->population = $population;
    }
    function setTotalHosiptalBeds ($totalHospitalBeds) {
      $this->totalHospitalBeds = $totalHospitalBeds;
    }

    // Methods
     function getCurrentlyInfected ($reportedCases) {
        $impactCurrentlyInfected = $reportedCases * 10;
        $severeCurrentlyInfected = $reportedCases * 50;
       echo $impactCurrentlyInfected;
       echo $severeCurrentlyInfected;
     }

     function getInfectionsByRequestedTime ($currentlyInfected) {
      $infectionsByRequestedTime = $currentlyInfected * 2 ^ 10;
      echo $infectionsByRequestedTime;
     }

     /*private $population;
    private $totalHospitalBeds;
    private $currentlyInfected;
    private $infectionsByRequestedTime;
    private $severeCasesByRequestedTime;
    private $hospitalBedsByRequestedTime;
    private $casesForICUByRequestedTime;
    private $casesForVentilatorsByRequestedTime;
    private $dollarsInFlight;
    private $impact;
    private $severeImpact; */

     function getSevereCasesByRequestedTime ($infectionsByRequestedTime) {
       $severeCasesByRequestedTime = $infectionsByRequestedTime * 0.15;
       echo $severeCasesByRequestedTime;
     }

     function getCasesForICUByRequestedTime ($infectionsByRequestedTime) {
       $casesForICUByRequestedTime = $infectionsByRequestedTime * 0.05;
       echo $casesForICUByRequestedTime;
     }

     function getCasesForVentilatorsByRequestedTime ($infectionsByRequestedTime) {
       $casesForVentilatorsByRequestedTime = $infectionsByRequestedTime * 0.02;
     }

    //  function getDollarsInFlight ($infectionsByRequestedTime) {
    //    $dollarsInFlight = ($infectionsByRequestedTime * getAverageDailyIncomePopulation()) * getAverageDailyIncomeInUSD() *
    //  }

  }