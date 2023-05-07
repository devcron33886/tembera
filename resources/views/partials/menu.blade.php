<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs("admin.home") ? "active" : "" }}" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('service_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.services.index") }}" class="nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-align-left">

                            </i>
                            <p>
                                {{ trans('cruds.service.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('package_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.packages.index") }}" class="nav-link {{ request()->is("admin/packages") || request()->is("admin/packages/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-box">

                            </i>
                            <p>
                                {{ trans('cruds.package.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('booking_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.bookings.index") }}" class="nav-link {{ request()->is("admin/bookings") || request()->is("admin/bookings/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-address-book">

                            </i>
                            <p>
                                {{ trans('cruds.booking.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.settings.index") }}" class="nav-link {{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.setting.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('testimonial_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.testimonials.index") }}" class="nav-link {{ request()->is("admin/testimonials") || request()->is("admin/testimonials/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-allergies">

                            </i>
                            <p>
                                {{ trans('cruds.testimonial.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('review_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.reviews.index") }}" class="nav-link {{ request()->is("admin/reviews") || request()->is("admin/reviews/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-star">

                            </i>
                            <p>
                                {{ trans('cruds.review.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('event_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.events.index") }}" class="nav-link {{ request()->is("admin/events") || request()->is("admin/events/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fab fa-adn">

                            </i>
                            <p>
                                {{ trans('cruds.event.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.contacts.index") }}" class="nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-mobile-alt">

                            </i>
                            <p>
                                {{ trans('cruds.contact.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('post_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/categories*") ? "menu-open" : "" }} {{ request()->is("admin/tags*") ? "menu-open" : "" }} {{ request()->is("admin/posts*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/categories*") ? "active" : "" }} {{ request()->is("admin/tags*") ? "active" : "" }} {{ request()->is("admin/posts*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-rss">

                            </i>
                            <p>
                                {{ trans('cruds.postManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-align-justify">

                                        </i>
                                        <p>
                                            {{ trans('cruds.category.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is("admin/tags") || request()->is("admin/tags/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{ trans('cruds.tag.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('post_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.posts.index") }}" class="nav-link {{ request()->is("admin/posts") || request()->is("admin/posts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-blogger-b">

                                        </i>
                                        <p>
                                            {{ trans('cruds.post.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('faq_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/faq-categories*") ? "menu-open" : "" }} {{ request()->is("admin/faq-questions*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle{{ request()->is("admin/faq-questions*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-question">

                            </i>
                            <p>
                                {{ trans('cruds.faqManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                           
                            @can('faq_question_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-question">

                                        </i>
                                        <p>
                                            {{ trans('cruds.faqQuestion.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/permissions*") ? "active" : "" }} {{ request()->is("admin/roles*") ? "active" : "" }} {{ request()->is("admin/users*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>