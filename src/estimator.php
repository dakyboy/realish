<?php

$appName = "novelty COVID-19 infections estimator";
function covid19ImpactEstimator($data)
{
  return $data;
}

#Functions

function calculateCurrentlyInfected () {

}

$africaData ='{
  region: {
  name: "Africa",
  avgAge: 19.7,
  avgDailyIncomeInUSD: 5,
  avgDailyIncomePopulation: 0.71
  },
  periodType: "days",
  timeToElapse: 58,
  reportedCases: 674,
  population: 66622705,
  totalHospitalBeds: 1380614
  }';





  // echo covid19ImpactEstimator($africaData);

  class Region {
    private $name;
    private $averageAge;
    private $averageDailyIncomeInUSD;
    private $averageAgeDailyIncomePopulation;
    private $population;
    private $totalHospitalBeds;

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


  }