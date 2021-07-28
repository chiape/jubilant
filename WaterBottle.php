<?php

class WaterBottle {
    private $material;
    private $litres;
    private $status;
    private $temp;

   function __construct () {
       $this->material = "plastic";
       $this->litres = 1;
       $this->status = "288 ML";
       $this->temp = "4o C";
   }

   private function getMaterial() {
       return $this->material;
   }

   private function setMaterial($m) {
       $this->material = $m;
   }

   private function getLitres() {
       return $this->litres;
   }

   private function setLitres($l) {
       $this->litres = $l;
   }

   private function getStatus() {
       return $this->status;
   }

   private function setStatus($s) {
       $this->status = $s;
   }

   private function getTemp() {
       return $this->temp;
   }

   private function setTemp($t) {
       $this->temp = $t;
   }
}