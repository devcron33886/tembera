<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_management_access',
            ],
            [
                'id' => 2,
                'title' => 'permission_create',
            ],
            [
                'id' => 3,
                'title' => 'permission_edit',
            ],
            [
                'id' => 4,
                'title' => 'permission_show',
            ],
            [
                'id' => 5,
                'title' => 'permission_delete',
            ],
            [
                'id' => 6,
                'title' => 'permission_access',
            ],
            [
                'id' => 7,
                'title' => 'role_create',
            ],
            [
                'id' => 8,
                'title' => 'role_edit',
            ],
            [
                'id' => 9,
                'title' => 'role_show',
            ],
            [
                'id' => 10,
                'title' => 'role_delete',
            ],
            [
                'id' => 11,
                'title' => 'role_access',
            ],
            [
                'id' => 12,
                'title' => 'user_create',
            ],
            [
                'id' => 13,
                'title' => 'user_edit',
            ],
            [
                'id' => 14,
                'title' => 'user_show',
            ],
            [
                'id' => 15,
                'title' => 'user_delete',
            ],
            [
                'id' => 16,
                'title' => 'user_access',
            ],
            [
                'id' => 17,
                'title' => 'category_create',
            ],
            [
                'id' => 18,
                'title' => 'category_edit',
            ],
            [
                'id' => 19,
                'title' => 'category_show',
            ],
            [
                'id' => 20,
                'title' => 'category_delete',
            ],
            [
                'id' => 21,
                'title' => 'category_access',
            ],
            [
                'id' => 22,
                'title' => 'tag_create',
            ],
            [
                'id' => 23,
                'title' => 'tag_edit',
            ],
            [
                'id' => 24,
                'title' => 'tag_show',
            ],
            [
                'id' => 25,
                'title' => 'tag_delete',
            ],
            [
                'id' => 26,
                'title' => 'tag_access',
            ],
            [
                'id' => 27,
                'title' => 'post_create',
            ],
            [
                'id' => 28,
                'title' => 'post_edit',
            ],
            [
                'id' => 29,
                'title' => 'post_show',
            ],
            [
                'id' => 30,
                'title' => 'post_delete',
            ],
            [
                'id' => 31,
                'title' => 'post_access',
            ],
            [
                'id' => 32,
                'title' => 'service_create',
            ],
            [
                'id' => 33,
                'title' => 'service_edit',
            ],
            [
                'id' => 34,
                'title' => 'service_show',
            ],
            [
                'id' => 35,
                'title' => 'service_delete',
            ],
            [
                'id' => 36,
                'title' => 'service_access',
            ],
            [
                'id' => 37,
                'title' => 'package_create',
            ],
            [
                'id' => 38,
                'title' => 'package_edit',
            ],
            [
                'id' => 39,
                'title' => 'package_show',
            ],
            [
                'id' => 40,
                'title' => 'package_delete',
            ],
            [
                'id' => 41,
                'title' => 'package_access',
            ],
            [
                'id' => 42,
                'title' => 'booking_create',
            ],
            [
                'id' => 43,
                'title' => 'booking_edit',
            ],
            [
                'id' => 44,
                'title' => 'booking_show',
            ],
            [
                'id' => 45,
                'title' => 'booking_delete',
            ],
            [
                'id' => 46,
                'title' => 'booking_access',
            ],
            [
                'id' => 47,
                'title' => 'setting_create',
            ],
            [
                'id' => 48,
                'title' => 'setting_edit',
            ],
            [
                'id' => 49,
                'title' => 'setting_show',
            ],
            [
                'id' => 50,
                'title' => 'setting_delete',
            ],
            [
                'id' => 51,
                'title' => 'setting_access',
            ],
            [
                'id' => 52,
                'title' => 'faq_management_access',
            ],
            [
                'id' => 53,
                'title' => 'faq_category_create',
            ],
            [
                'id' => 54,
                'title' => 'faq_category_edit',
            ],
            [
                'id' => 55,
                'title' => 'faq_category_show',
            ],
            [
                'id' => 56,
                'title' => 'faq_category_delete',
            ],
            [
                'id' => 57,
                'title' => 'faq_category_access',
            ],
            [
                'id' => 58,
                'title' => 'faq_question_create',
            ],
            [
                'id' => 59,
                'title' => 'faq_question_edit',
            ],
            [
                'id' => 60,
                'title' => 'faq_question_show',
            ],
            [
                'id' => 61,
                'title' => 'faq_question_delete',
            ],
            [
                'id' => 62,
                'title' => 'faq_question_access',
            ],
            [
                'id' => 63,
                'title' => 'testimonial_create',
            ],
            [
                'id' => 64,
                'title' => 'testimonial_edit',
            ],
            [
                'id' => 65,
                'title' => 'testimonial_show',
            ],
            [
                'id' => 66,
                'title' => 'testimonial_delete',
            ],
            [
                'id' => 67,
                'title' => 'testimonial_access',
            ],
            [
                'id' => 68,
                'title' => 'review_create',
            ],
            [
                'id' => 69,
                'title' => 'review_edit',
            ],
            [
                'id' => 70,
                'title' => 'review_show',
            ],
            [
                'id' => 71,
                'title' => 'review_delete',
            ],
            [
                'id' => 72,
                'title' => 'review_access',
            ],
            [
                'id' => 73,
                'title' => 'post_management_access',
            ],
            [
                'id' => 74,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
