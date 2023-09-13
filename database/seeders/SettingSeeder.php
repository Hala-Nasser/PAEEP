<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //contact info
        // Setting::create([
        //     'key' => 'logo',
        //     'value' => '',
        //     'label_en' => 'Logo',
        //     'label_ar' => 'الشعار',
        //     'type' => 'image',
        //     'group' => 'contact-info',
        // ]);

        // Setting::create([
        //     'key' => 'logo_icon',
        //     'value' => '',
        //     'label_en' => 'Logo icon',
        //     'label_ar' => 'الشعار المصغر',
        //     'type' => 'image',
        //     'group' => 'contact-info',
        // ]);

        // Setting::create([
        //     'key' => 'email',
        //     'value' => 'hala@gmail.com',
        //     'label_en' => 'Email',
        //     'label_ar' => 'البريد الالكتروني',
        //     'type' => 'text',
        //     'group' => 'contact-info',
        // ]);

        // Setting::create([
        //     'key' => 'name',
        //     'value' => 'hala nasser',
        //     'label_en' => 'Name',
        //     'label_ar' => 'الاسم',
        //     'type' => 'text',
        //     'group' => 'contact-info',
        // ]);

        // Setting::create([
        //     'key' => 'phone',
        //     'value' => '0595848690',
        //     'label_en' => 'Phone',
        //     'label_ar' => 'رقم الهاتف',
        //     'type' => 'text',
        //     'group' => 'contact-info',
        // ]);

        // Setting::create([
        //     'key' => 'address',
        //     'value' => 'غزة- مفترق الشهداء',
        //     'label_en' => 'Address',
        //     'label_ar' => 'العنوان',
        //     'type' => 'text',
        //     'group' => 'contact-info',
        // ]);

        // Setting::create([
        //     'key' => 'description',
        //     'value' => 'تهدف المؤسسة الى حماية البيئة و المحافظة عليها',
        //     'label_en' => 'Description',
        //     'label_ar' => 'نبذة عن المؤسسة',
        //     'type' => 'long-text',
        //     'group' => 'contact-info',
        // ]);


        //about
        // Setting::create([
        //     'key' => 'about_image',
        //     'value' => '',
        //     'label_en' => 'Image',
        //     'label_ar' => 'الصورة',
        //     'type' => 'image',
        //     'group' => 'about',
        // ]);

        // Setting::create([
        //     'key' => 'about_title',
        //     'value' => 'من نحن',
        //     'label_en' => 'Title',
        //     'label_ar' => 'العنوان',
        //     'type' => 'text',
        //     'group' => 'about',
        // ]);

        // Setting::create([
        //     'key' => 'about_description',
        //     'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة من نحن يمكن تغييره من خلال لوحة التحكم',
        //     'label_en' => 'Description',
        //     'label_ar' => 'نبذة عن المؤسسة',
        //     'type' => 'long-text',
        //     'group' => 'about',
        // ]);


        //vision
        Setting::create([
            'key' => 'vision_image',
            'value' => '',
            'label_en' => 'Image',
            'label_ar' => 'الصورة',
            'type' => 'image',
            'group' => 'vision',
        ]);

        Setting::create([
            'key' => 'vision_title',
            'value' => 'رؤيتنا',
            'label_en' => 'Title',
            'label_ar' => 'العنوان',
            'type' => 'text',
            'group' => 'vision',
        ]);

        Setting::create([
            'key' => 'vision_description',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة رؤيتنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description',
            'label_ar' => 'رؤية المؤسسة',
            'type' => 'long-text',
            'group' => 'vision',
        ]);

        //message
        Setting::create([
            'key' => 'message_image',
            'value' => '',
            'label_en' => 'Image',
            'label_ar' => 'الصورة',
            'type' => 'image',
            'group' => 'message',
        ]);

        Setting::create([
            'key' => 'message_title',
            'value' => 'رسالتنا',
            'label_en' => 'Title',
            'label_ar' => 'العنوان',
            'type' => 'text',
            'group' => 'message',
        ]);

        Setting::create([
            'key' => 'message_description',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة رسالتنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description',
            'label_ar' => 'رسالة المؤسسة',
            'type' => 'long-text',
            'group' => 'message',
        ]);


        //principle
        Setting::create([
            'key' => 'principle_title',
            'value' => 'مبادئنا و قيمنا',
            'label_en' => 'Title',
            'label_ar' => 'العنوان',
            'type' => 'text',
            'group' => 'principle',
        ]);

        Setting::create([
            'key' => 'principle_description',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة مبادئنا و قيمنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description',
            'label_ar' => 'رسالة المؤسسة',
            'type' => 'long-text',
            'group' => 'principle',
        ]);

         //objective
         Setting::create([
            'key' => 'objective_title',
            'value' => 'أهدافنا',
            'label_en' => 'Title',
            'label_ar' => 'العنوان',
            'type' => 'text',
            'group' => 'objective',
        ]);

        Setting::create([
            'key' => 'objective_description',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة أهدافنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description',
            'label_ar' => 'هدف المؤسسة',
            'type' => 'long-text',
            'group' => 'objective',
        ]);
    }
}
