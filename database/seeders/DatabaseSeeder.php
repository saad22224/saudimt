<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Speaker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

       $speakers = [
            ['name_en' => 'Abdelghani Rozy', 'name_ar' => 'عبدالغني روزي', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Mohammed Aldar', 'name_ar' => 'محمد الدار', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Mohammed Aldukhaini', 'name_ar' => 'محمد الدخيني', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Viana Hassan', 'name_ar' => 'فيانا حسن', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Christoph Weigel', 'name_ar' => 'كريستوف ويجل', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Sultan Alsaadoon', 'name_ar' => 'سلطان السعدون', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Talal Almaliki', 'name_ar' => 'طلال المالكي', 'image' => 'speakers\logo.png'],
            ['name_en' => 'HRH Prince Saud bin Nahar', 'name_ar' => 'سمو الأمير سعود بن نهار', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Prem Jagyasi', 'name_ar' => 'بريم جاجياسي', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Dr. Awad Alomari', 'name_ar' => 'د. عوض العمري', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Dorit von der Osten', 'name_ar' => 'دوريت فون دير أوستن', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Christian Fadi El-khouri', 'name_ar' => 'كريستيان فادي الخوري', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Mohammed Aljahani', 'name_ar' => 'محمد الجهني', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Laszlo Puczko', 'name_ar' => 'لازلو بوتسكو', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Talal Althumali', 'name_ar' => 'طلال الثمالي', 'image' => 'speakers\logo.png'],
            ['name_en' => 'Ahmed Moshli', 'name_ar' => 'أحمد مسحلي', 'image' => 'speakers\logo.png'],
        ];

        // عمل لوب لإدخال البيانات في جدول المتحدثين
        foreach ($speakers as $speaker) {
            Speaker::create([
                'name_en' => $speaker['name_en'],
                'name_ar' => $speaker['name_ar'],
                'image'   => $speaker['image']
            ]);
        }

        
    }
}
