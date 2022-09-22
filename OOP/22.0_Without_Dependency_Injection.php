<?php 

/**
 * Dependency Injection
 * Dependency Injection (DI) giúp sự giảm sự phụ thuộc giữa các lớp, tạo ra sự linh hoạt cao và tính dễ bảo trì cho ứng dụng.
 * Lợi ích khi sử dụng DI: giảm sự phụ thuộc giữa các class, tăng khả năng dùng lại và khả năng dễ đọc của mã nguồn, tạo cho ứng dụng tính mềm dẻo và khả năng nâng cấp bảo trì trở nên đơn giản và nhanh chóng hơn.
 */

 class GoogleMaps 
 {
   public function getCoordinatesFromAddress($address){
     // calls Google Maps webservice 
   }
 }

 class OpenStreetMap 
 {
   public function getCoordinatesFromAddress($address){
     // calls OpenStreetMap webservice 
   }
 }

 class StoreService 
 {
   public function getStoreCoordinates($store){
     $geolocationService = new GoogleMaps();

     return $geolocationService->getCoordinatesFromAddress($store->getAddress());
   }
 }

 /**
  * Now we want to use the OpenStreetMap instead of GoogleMaps, how do we do? We have to change the code of StoreService, and all the other classes that use GoogleMaps.
  * 
  */

?>