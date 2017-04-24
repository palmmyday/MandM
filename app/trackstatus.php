<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Trackstatus extends Model {
 
 protected $table = 'trackstatus'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'trackStatusName'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'trackStatusId';

 public function tracking(){
    return $this->hasMany('App\tracking');
 }
}