<?php namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Profile extends Model {
 
 protected $table = 'agenda_has_agendatype'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 
}