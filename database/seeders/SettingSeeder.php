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
        Setting::create([
            'key' => 'logo',
            'value' => '',
            'label_en' => 'Logo',
            'label_ar' => 'الشعار',
            'type' => 'image',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'logo_icon',
            'value' => '',
            'label_en' => 'Logo icon',
            'label_ar' => 'الشعار المصغر',
            'type' => 'image',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'email',
            'value' => 'hala@gmail.com',
            'label_en' => 'Email',
            'label_ar' => 'البريد الالكتروني',
            'type' => 'text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'name_en',
            'value' => 'hala nasser',
            'label_en' => 'Name en',
            'label_ar' => 'الاسم بالانجليزية',
            'type' => 'text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'name_ar',
            'value' => 'هالة نوفل',
            'label_en' => 'Name ar',
            'label_ar' => 'الاسم بالعربية',
            'type' => 'text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'phone',
            'value' => '0595848690',
            'label_en' => 'Phone',
            'label_ar' => 'رقم الهاتف',
            'type' => 'text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'address_en',
            'value' => 'gaza-alshuhadaa',
            'label_en' => 'Address en',
            'label_ar' => 'العنوان بالانجليزية',
            'type' => 'text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'address_ar',
            'value' => 'غزة- مفترق الشهداء',
            'label_en' => 'Address ar',
            'label_ar' => 'العنوان بالعربية',
            'type' => 'text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'description_en',
            'value' => 'the intituation aim to protect environment from harm',
            'label_en' => 'Description en',
            'label_ar' => 'نبذة عن المؤسسة بالانجليزية',
            'type' => 'long-text',
            'group' => 'contact-info',
        ]);

        Setting::create([
            'key' => 'description_ar',
            'value' => 'تهدف المؤسسة الى حماية البيئة و المحافظة عليها',
            'label_en' => 'Description ar',
            'label_ar' => 'نبذة عن المؤسسة بالعربية',
            'type' => 'long-text',
            'group' => 'contact-info',
        ]);


        // about
        Setting::create([
            'key' => 'about_image',
            'value' => '',
            'label_en' => 'Image',
            'label_ar' => 'الصورة',
            'type' => 'image',
            'group' => 'about',
        ]);

        Setting::create([
            'key' => 'about_title_en',
            'value' => 'About',
            'label_en' => 'Title en',
            'label_ar' => 'العنوان بالانجليزية',
            'type' => 'text',
            'group' => 'about',
        ]);

        Setting::create([
            'key' => 'about_title_ar',
            'value' => 'من نحن',
            'label_en' => 'Title ar',
            'label_ar' => 'العنوان بالعربية',
            'type' => 'text',
            'group' => 'about',
        ]);

        Setting::create([
            'key' => 'about_description_en',
            'value' => 'This is fake text for about page, you can change it from dashboard',
            'label_en' => 'Description en',
            'label_ar' => 'نبذة عن المؤسسة بالانجليزية',
            'type' => 'long-text',
            'group' => 'about',
        ]);

        Setting::create([
            'key' => 'about_description_ar',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة من نحن يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description ar',
            'label_ar' => 'نبذة عن المؤسسة بالعربية ',
            'type' => 'long-text',
            'group' => 'about',
        ]);


        // vision
        Setting::create([
            'key' => 'vision_image',
            'value' => '',
            'label_en' => 'Image',
            'label_ar' => 'الصورة',
            'type' => 'image',
            'group' => 'vision',
        ]);

        Setting::create([
            'key' => 'vision_title_en',
            'value' => 'Our Vision',
            'label_en' => 'Title en',
            'label_ar' => 'العنوان بالانجليزية',
            'type' => 'text',
            'group' => 'vision',
        ]);

        Setting::create([
            'key' => 'vision_title_ar',
            'value' => 'رؤيتنا',
            'label_en' => 'Title ar',
            'label_ar' => 'العنوان بالعربية',
            'type' => 'text',
            'group' => 'vision',
        ]);

        Setting::create([
            'key' => 'vision_description_en',
            'value' => 'This is fake text for our vision page, you can change it from dashboard',
            'label_en' => 'Description en',
            'label_ar' => 'رؤية المؤسسة بالانجليزية',
            'type' => 'long-text',
            'group' => 'vision',
        ]);

        Setting::create([
            'key' => 'vision_description_ar',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة رؤيتنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description ar',
            'label_ar' => 'رؤية المؤسسة بالعربية',
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
            'key' => 'message_title_en',
            'value' => 'Our Message',
            'label_en' => 'Title en',
            'label_ar' => 'العنوان بالانجليزية',
            'type' => 'text',
            'group' => 'message',
        ]);

        Setting::create([
            'key' => 'message_title_ar',
            'value' => 'رسالتنا',
            'label_en' => 'Title ar',
            'label_ar' => 'العنوان بالعربية',
            'type' => 'text',
            'group' => 'message',
        ]);

        Setting::create([
            'key' => 'message_description_en',
            'value' => 'This is fake text for our message page, you can change it from dashboard',
            'label_en' => 'Description en',
            'label_ar' => 'رسالة المؤسسة بالانجليزية',
            'type' => 'long-text',
            'group' => 'message',
        ]);

        Setting::create([
            'key' => 'message_description_ar',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة رسالتنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description ar',
            'label_ar' => 'رسالة المؤسسة بالعربية',
            'type' => 'long-text',
            'group' => 'message',
        ]);


        //principle
        Setting::create([
            'key' => 'principle_title_en',
            'value' => 'Our Principles',
            'label_en' => 'Title en',
            'label_ar' => 'العنوان بالانجليزية',
            'type' => 'text',
            'group' => 'principle',
        ]);

        Setting::create([
            'key' => 'principle_title_ar',
            'value' => 'مبادئنا و قيمنا',
            'label_en' => 'Title ar',
            'label_ar' => 'العنوان بالعربية',
            'type' => 'text',
            'group' => 'principle',
        ]);

        Setting::create([
            'key' => 'principle_description_en',
            'value' => 'This is fake text for our principle page, you can change it from dashboard',
            'label_en' => 'Description en',
            'label_ar' => 'مبادئ المؤسسة بالانجليزية',
            'type' => 'long-text',
            'group' => 'principle',
        ]);

        Setting::create([
            'key' => 'principle_description_ar',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة مبادئنا و قيمنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description ar',
            'label_ar' => 'مبادئ المؤسسة بالعربية',
            'type' => 'long-text',
            'group' => 'principle',
        ]);

         //objective
         Setting::create([
            'key' => 'objective_title_en',
            'value' => 'Our objectives',
            'label_en' => 'Title en',
            'label_ar' => 'العنوان بالانجليزية',
            'type' => 'text',
            'group' => 'objective',
        ]);

        Setting::create([
            'key' => 'objective_title_ar',
            'value' => 'أهدافنا',
            'label_en' => 'Title ar',
            'label_ar' => 'العنوان بالعربية',
            'type' => 'text',
            'group' => 'objective',
        ]);

        Setting::create([
            'key' => 'objective_description_en',
            'value' => 'This is fake text for our objectives page, you can change it from dashboard',
            'label_en' => 'Description en',
            'label_ar' => 'أهداف المؤسسة بالانجليزية',
            'type' => 'long-text',
            'group' => 'objective',
        ]);

        Setting::create([
            'key' => 'objective_description_ar',
            'value' => 'هذا النص هو نص افتراضي لمجتوى صفحة أهدافنا يمكن تغييره من خلال لوحة التحكم',
            'label_en' => 'Description ar',
            'label_ar' => 'أهداف المؤسسة بالعربية',
            'type' => 'long-text',
            'group' => 'objective',
        ]);

        //social media links
        Setting::create([
            'key' => 'facebook',
            'value' => '',
            'label_en' => 'facebook',
            'label_ar' => 'فيس بوك',
            'type' => 'text',
            'group' => 'social_media',
        ]);

        Setting::create([
            'key' => 'instagram',
            'value' => '',
            'label_en' => 'instagram',
            'label_ar' => 'انستجرام',
            'type' => 'text',
            'group' => 'social_media',
        ]);

        Setting::create([
            'key' => 'twitter',
            'value' => '',
            'label_en' => 'twitter',
            'label_ar' => 'تويتر',
            'type' => 'text',
            'group' => 'social_media',
        ]);


    }
}
