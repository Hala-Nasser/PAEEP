<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'يجب قبول :attribute',
    'active_url'           => ':attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون :attribute ًمصفوفة',
    'before'               => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => ':attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => 'القيمة المحددة :attribute غير موجودة',
    'file'                 => 'الـ :attribute يجب أن يكون ملفا.',
    'filled'               => ':attribute إجباري',
    'gt'                   => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت',
        'string'  => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر',
    ],
    'image'                => 'يجب أن يكون :attribute صورةً',
    'in'                   => ':attribute غير موجود',
    'in_array'             => ':attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون :attribute عنوان IP صحيحًا',
    'ipv4'                 => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6'                 => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json'                 => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'lt'                   => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت',
        'string'  => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => ':attribute موجود',
    'not_regex'            => 'صيغة :attribute غير صحيحة.',
    'numeric'              => 'يجب على :attribute أن يكون رقمًا',
    'present'              => 'يجب تقديم :attribute',
    'regex'                => 'صيغة :attribute .غير صحيحة',
    'required'             => ':attribute مطلوب.',
    'required_if'          => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all'    => ':attribute مطلوب إذا توفّر :values.',
    'required_without'     => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط',
        'array'   => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط',
    ],
    'string'               => 'يجب أن يكون :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة :attribute مُستخدمة من قبل',
    'uploaded'             => 'فشل في تحميل الـ :attribute',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'title_en' => 'العنوان بالانجليزية',
        'title_ar' => 'العنوان بالعربية',
        'count' => 'العدد',
        'image' => 'الصورة',
        'full_name' => 'الاسم الكامل',
        'message' => 'الرسالة',
        'program_id' => 'البرنامج',
        'amount' => 'المبلغ',
        'description_en' => 'الوصف بالانجليزية',
        'description_ar' => 'الوصف بالعربية',
        'location_en' => 'الموقع بالانجليزية',
        'location_ar' => 'الموقع بالعربية',
        'keywords_en' => 'الكلمات المفتاحية بالانجليزية',
        'keywords_ar' => 'الكلمات المفتاحية بالعربية',
        'type' => 'النوع',
        'name_en' => 'الاسم بالانجليزية',
        'name_ar' => 'الاسم بالعربية',
        'website_url' => 'رابط موقع الويب',
        'status' => 'الحالة',
        'file' => 'الملف',
        'redirect_to' => 'توجيه إلى',
        'publish_date' => 'تاريخ النشر',
        'button_text_en' => 'نص الزر بالانجليزية',
        'button_text_ar' => 'نص الزر بالعربية',
        'organization_type' => 'نوع المؤسسة',
        'foundation_year' => 'سنة التأسيس',
        'instagram_link' => 'رابط الانستجرام',
        'facebook_link' => 'رابط الفيسبوك',
        'annual_budget' => 'الميزانية السنوية',
        'centers_count' => 'عدد المراكز',
        'centers_address' => 'عناوين المراكز',
        'employees_count' => 'عدد الموظفين',
        'mi_registeration_number' => 'رقم التسجيل لدى وزارة الداخلية',
        'mf_registeration_number' => 'رقم التسجيل لدى وزارة المالية',
        'current_projects_count' => 'عدد المشاريع الحالية',
        'main_donors' => 'المانحون الرئيسيون',
        'total_employess_count' => 'اجمالي عدد الموظفين',
        'beneficiaries_nationalities' => 'جنسيات المستفيدين',
        'beneficiaries_age' => 'أعمار المستفيدين',
        'main_objectives' => 'الأهداف الرئيسية',
        'registeration_certification' => 'شهادة تسجيل المؤسسة',
        'organization_structure' => 'هيكلية المؤسسة',
        'volunteered_before' => 'هل تطوعت من قبل؟',
        'volunteer_info' => 'بيانات التطوع',
        'have_skills' => 'هل تمتلك مهارات؟',
        'skills_info' => 'بيانات المهارات',
        'volunteer_beginning' => 'بداية التطوع',
        'volunteer_ending' => 'نهاية التطوع',
        'educational_experience' => 'الخبرة الدراسية',
        'cv' => 'السيرة الذاتية',
        'father_name' => 'اسم الاب',
        'grandfather_name' => 'اسم الجد',
        'qualification' => 'المؤهلات',
        'birthday' => 'تاريخ الميلاد',
        'organization_type' => 'نوع المؤسسة',
        'foundation_year' => 'سنة التأسيس',
        'website_url' => 'رابط موقع الويب',
        'instagram_link' => 'رابط الانستجرام',
        'facebook_link' => 'رابط الفيسبوك',
        'annual_budget' => 'الميزانية السنوية',
        'centers_count' => 'عدد المراكز',
        'centers_address' => 'عناوين المراكز',
        'employees_count' => 'عدد الموظفين',
        'mi_registeration_number' => 'رقم التسجيل لدى وزارة الداخلية',
        'mf_registeration_number' => 'رقم التسجيل لدى وزارة المالية',
        'current_projects_count' => 'عدد المشاريع الحالية',
        'main_donors' => 'المانحون الرئيسيون',
        'total_employess_count' => 'مجمل عدد الموظفين',
        'beneficiaries_nationalities' => 'جنسيات المستفيدين',
        'beneficiaries_age' => 'أعمار المستفيدين',
        'main_objectives' => 'الأهداف الرئيسية',
        'registeration_certification' => 'شهادة التسجيل',
        'organization_structure' => 'هيكلية المؤسسة',
        'father_name' => 'اسم الأب',
        'grandfather_name' => 'اسم الجد',
        'qualification' => 'المؤهلات',
        'volunteered_before' => 'تطوع من قبل؟',
        'volunteer_info' => 'بيانات التطوع',
        'have_skills' => 'يمتلك مهارات؟',
        'skills_info' => 'بيانات المهاارت',
        'volunteer_beginning' => 'بداية التطوع',
        'volunteer_ending' => 'نهاية التطوع',
        'educational_experience' => 'الخبرة العلمية',
        'agree' => 'سياسة الخصوصية'
    ],
];
