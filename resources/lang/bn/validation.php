<?php

return [

    'accepted'             => ':attribute গ্রহণ করতে হবে।',
    'active_url'           => ':attribute একটি বৈধ URL নয়।',
    'after'                => ':attribute অবশ্যই :date এর পরে একটি তারিখ হতে হবে।',
    'after_or_equal'       => ':attribute অবশ্যই :date অথবা তার পরের একটি তারিখ হতে হবে।',
    'alpha'                => ':attribute শুধুমাত্র অক্ষর থাকতে পারে।',
    'alpha_dash'           => ':attribute শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর থাকতে পারে।',
    'alpha_num'            => ':attribute শুধুমাত্র অক্ষর ও সংখ্যা থাকতে পারে।',
    'array'                => ':attribute একটি অ্যারে হতে হবে।',
    'before'               => ':attribute অবশ্যই :date এর আগে একটি তারিখ হতে হবে।',
    'before_or_equal'      => ':attribute অবশ্যই :date অথবা তার আগের একটি তারিখ হতে হবে।',

    'between' => [
        'numeric' => ':attribute অবশ্যই :min এবং :max এর মধ্যে হতে হবে।',
        'file'    => ':attribute অবশ্যই :min এবং :max কিলোবাইটের মধ্যে হতে হবে।',
        'string'  => ':attribute অবশ্যই :min এবং :max অক্ষরের মধ্যে হতে হবে।',
        'array'   => ':attribute এ :min থেকে :max আইটেম থাকতে হবে।',
    ],

    'boolean'              => ':attribute ক্ষেত্রটি সত্য বা মিথ্যা হতে হবে।',
    'confirmed'            => ':attribute নিশ্চিতকরণ মিলছে না।',
    'date'                 => ':attribute একটি বৈধ তারিখ নয়।',
    'date_equals'          => ':attribute অবশ্যই :date এর সমান একটি তারিখ হতে হবে।',
    'date_format'          => ':attribute ফরম্যাট :format অনুযায়ী নয়।',
    'different'            => ':attribute এবং :other অবশ্যই আলাদা হতে হবে।',
    'digits'               => ':attribute অবশ্যই :digits সংখ্যার সমান হতে হবে।',
    'digits_between'       => ':attribute অবশ্যই :min এবং :max সংখ্যার মধ্যে হতে হবে।',
    'dimensions'           => ':attribute এর ছবির মাত্রা অবৈধ।',
    'distinct'             => ':attribute ক্ষেত্রটির পুনরাবৃত্ত মান আছে।',
    'email'                => ':attribute একটি বৈধ ইমেইল ঠিকানা হতে হবে।',
    'ends_with'            => ':attribute অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শেষ হতে হবে: :values।',
    'exists'               => 'নির্বাচিত :attribute অবৈধ।',
    'file'                 => ':attribute একটি ফাইল হতে হবে।',
    'filled'               => ':attribute ক্ষেত্রটি অবশ্যক।',

    'gt' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় হতে হবে।',
        'file'    => ':attribute অবশ্যই :value কিলোবাইটের বেশি হতে হবে।',
        'string'  => ':attribute অবশ্যই :value অক্ষরের বেশি হতে হবে।',
        'array'   => ':attribute এ অবশ্যই :value টির বেশি আইটেম থাকতে হবে।',
    ],

    'gte' => [
        'numeric' => ':attribute অবশ্যই :value বা তার বেশি হতে হবে।',
        'file'    => ':attribute অবশ্যই :value কিলোবাইট অথবা তার বেশি হতে হবে।',
        'string'  => ':attribute অবশ্যই :value অক্ষর অথবা তার বেশি হতে হবে।',
        'array'   => ':attribute এ অবশ্যই :value আইটেম অথবা তার বেশি থাকতে হবে।',
    ],

    'image'                => ':attribute একটি চিত্র হতে হবে।',
    'in'                   => 'নির্বাচিত :attribute অবৈধ।',
    'in_array'             => ':attribute ক্ষেত্রটি :other এ উপস্থিত নেই।',
    'integer'              => ':attribute একটি পূর্ণসংখ্যা হতে হবে।',
    'ip'                   => ':attribute একটি বৈধ IP ঠিকানা হতে হবে।',
    'ipv4'                 => ':attribute একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6'                 => ':attribute একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json'                 => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে।',

    'lt' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে ছোট হতে হবে।',
        'file'    => ':attribute অবশ্যই :value কিলোবাইটের কম হতে হবে।',
        'string'  => ':attribute অবশ্যই :value অক্ষরের কম হতে হবে।',
        'array'   => ':attribute এ অবশ্যই :value এর কম আইটেম থাকতে হবে।',
    ],

    'lte' => [
        'numeric' => ':attribute অবশ্যই :value অথবা তার কম হতে হবে।',
        'file'    => ':attribute অবশ্যই :value কিলোবাইট অথবা তার কম হতে হবে।',
        'string'  => ':attribute অবশ্যই :value অক্ষর অথবা তার কম হতে হবে।',
        'array'   => ':attribute এ অবশ্যই :value টির বেশি আইটেম থাকতে পারবে না।',
    ],

    'max' => [
        'numeric' => ':attribute :max এর চেয়ে বড় হতে পারবে না।',
        'file'    => ':attribute :max কিলোবাইটের বেশি হতে পারবে না।',
        'string'  => ':attribute :max অক্ষরের বেশি হতে পারবে না।',
        'array'   => ':attribute এ :max টির বেশি আইটেম থাকতে পারবে না।',
    ],

    'mimes'                => ':attribute একটি ফাইল টাইপ হতে হবে: :values।',
    'mimetypes'            => ':attribute ফাইল টাইপ: :values হতে হবে।',

    'min' => [
        'numeric' => ':attribute অবশ্যই অন্তত :min হতে হবে।',
        'file'    => ':attribute অবশ্যই অন্তত :min কিলোবাইট হতে হবে।',
        'string'  => ':attribute অবশ্যই অন্তত :min অক্ষর হতে হবে।',
        'array'   => ':attribute এ অন্তত :min আইটেম থাকতে হবে।',
    ],

    'multiple_of'          => ':attribute অবশ্যই :value এর বহুগুণ হতে হবে।',
    'not_in'               => 'নির্বাচিত :attribute অবৈধ।',
    'not_regex'            => ':attribute ফরম্যাট অবৈধ।',
    'numeric'              => ':attribute একটি সংখ্যা হতে হবে।',
    'present'              => ':attribute ক্ষেত্রটি উপস্থিত থাকতে হবে।',
    'regex'                => ':attribute ফরম্যাট অবৈধ।',
    'required'             => ':attribute ক্ষেত্রটি আবশ্যক।',
    'required_if'          => ':attribute ক্ষেত্রটি আবশ্যক যখন :other হলো :value।',
    'required_unless'      => ':attribute ক্ষেত্রটি আবশ্যক যতক্ষণ না :other :values তে আছে।',
    'required_with'        => ':attribute ক্ষেত্রটি আবশ্যক যখন :values উপস্থিত থাকে।',
    'required_with_all'    => ':attribute ক্ষেত্রটি আবশ্যক যখন :values উপস্থিত থাকে।',
    'required_without'     => ':attribute ক্ষেত্রটি আবশ্যক যখন :values উপস্থিত না থাকে।',
    'required_without_all' => ':attribute ক্ষেত্রটি আবশ্যক যখন কোন :values উপস্থিত না থাকে।',
    'same'                 => ':attribute ও :other মিলতে হবে।',

    'size' => [
        'numeric' => ':attribute :size হতে হবে।',
        'file'    => ':attribute :size কিলোবাইট হতে হবে।',
        'string'  => ':attribute :size অক্ষরের হতে হবে।',
        'array'   => ':attribute এ :size আইটেম থাকতে হবে।',
    ],

    'starts_with'          => ':attribute অবশ্যই নিম্নলিখিতগুলির মধ্যে একটি দিয়ে শুরু হতে হবে: :values।',
    'string'               => ':attribute একটি স্ট্রিং হতে হবে।',
    'timezone'             => ':attribute একটি বৈধ সময় অঞ্চল হতে হবে।',
    'unique'               => ':attribute ইতোমধ্যেই নেওয়া হয়েছে।',
    'uploaded'             => ':attribute আপলোড করা যায়নি।',
    'url'                  => ':attribute ফরম্যাট অবৈধ।',
    'uuid'                 => ':attribute একটি বৈধ UUID হতে হবে।',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'অনুকূল বার্তা',
        ],
    ],

    'attributes' => [
        'name' => 'নাম',
        'email' => 'ইমেইল',
        'profile' => 'প্রোফাইল ছবি',
        'password' => 'পাসওয়ার্ড',
        'password_confirmation' => 'পাসওয়ার্ড নিশ্চিতকরণ',
        'current_password' => 'বর্তমান পাসওয়ার্ড',
    ],

];
