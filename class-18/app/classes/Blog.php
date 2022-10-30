<?php


namespace App\classes;


class Blog
{
    private $blogs;

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'title' => 'নো বল নাটকের পর ৩ রানে জিতল বাংলাদেশ',
                'description' => 'পাকিস্তানকে ১ রানে হারিয়ে উজ্জীবিত জিম্বাবুয়ে। অন্যদিকে দক্ষিণ আফ্রিকার কাছে ১০৪ রানে হেরেছে বাংলাদেশ। ব্রিসবেনের গ্যাবায় মুখোমুখি দুই দল। 
প্রথম আলোর লাইভ আপডেটে আপনাকে স্বাগত!',
                'image' => 'download%20(1).jpg'
            ],
            1 => [
                'id' => 2,
                'title' => 'নো বল নাটকের পর ৩ রানে জিতল বাংলাদেশ',
                'description' => 'পাকিস্তানকে ১ রানে হারিয়ে উজ্জীবিত জিম্বাবুয়ে। অন্যদিকে দক্ষিণ আফ্রিকার কাছে ১০৪ রানে হেরেছে বাংলাদেশ। ব্রিসবেনের গ্যাবায় মুখোমুখি দুই দল। 
প্রথম আলোর লাইভ আপডেটে আপনাকে স্বাগত!',
                'image' => 'download%20(1).jpg'
            ],
            2 => [
                'id' => 3,
                'title' => 'নো বল নাটকের পর ৩ রানে জিতল বাংলাদেশ',
                'description' => 'পাকিস্তানকে ১ রানে হারিয়ে উজ্জীবিত জিম্বাবুয়ে। অন্যদিকে দক্ষিণ আফ্রিকার কাছে ১০৪ রানে হেরেছে বাংলাদেশ। ব্রিসবেনের গ্যাবায় মুখোমুখি দুই দল। 
প্রথম আলোর লাইভ আপডেটে আপনাকে স্বাগত!',
                'image' => 'download%20(1).jpg'
            ],
            3 => [
                'id' => 4,
                'title' => 'নো বল নাটকের পর ৩ রানে জিতল বাংলাদেশ',
                'description' => 'পাকিস্তানকে ১ রানে হারিয়ে উজ্জীবিত জিম্বাবুয়ে। অন্যদিকে দক্ষিণ আফ্রিকার কাছে ১০৪ রানে হেরেছে বাংলাদেশ। ব্রিসবেনের গ্যাবায় মুখোমুখি দুই দল। 
প্রথম আলোর লাইভ আপডেটে আপনাকে স্বাগত!',
                'image' => 'download%20(1).jpg'
            ]
        ];
    }

    public function allBlogs(){
        return $this->blogs;
    }

    public function getBlogDetails($blogId)
    {
       foreach ($this->blogs as $blog) {
           if ($blog[id] == $blogId){
               return $blog;
           }
       }
    }
}