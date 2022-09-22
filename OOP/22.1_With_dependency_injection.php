<?php
// http://php-di.org/doc/understanding-di.html
  interface GeolocationService 
  {
    public function getCoordinatesFromAddress($address);
  }

 class GoogleMaps implements GeolocationService 
 {
   public function getCoordinatesFromAddress($address){
     // calls Google Maps webservice 
   }
 }

 class OpenStreetMap implements GeolocationService
 {
   public function getCoordinatesFromAddress($address){
     // calls OpenStreetMap webservice 
   }
 }

 class StoreService 
 {
  private $geolocationService;

  public function __construct(GeolocationService $geolocationService)
  {
    $this->geolocationService = $geolocationService;
  }

  public function getSotreCoordinates($store)
  {
    return $this->geolocationService->getCoordinatesFromAddress($this->getAddress());
  }
 }


$geolocationService = new GoogleMaps();
$storeService = new StoreService($geolocationService);

?>