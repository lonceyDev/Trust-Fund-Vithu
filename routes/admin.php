<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\Pages\Admin\Tag\TagComponent;
use App\Http\Livewire\Pages\Admin\User\UserComponent;
use App\Http\Livewire\Pages\Admin\SiteSettingComponent;
use App\Http\Livewire\Pages\Admin\Blog\BlogFormComponent;
use App\Http\Controllers\ImageController;
use App\Http\Livewire\Pages\Admin\User\EditUserComponent;
use App\Http\Livewire\Pages\Admin\User\UserRoleComponent;
use App\Http\Livewire\Pages\Admin\AdminDashboardComponent;
use App\Http\Livewire\Pages\Admin\Blog\ViewBlogsComponent;
use App\Http\Livewire\Pages\Admin\ContactMessageComponent;
use App\Http\Livewire\Pages\Admin\Category\CategoryComponent;
use App\Http\Livewire\Pages\Admin\Media\MediaLibraryComponent;
use App\Http\Livewire\Pages\Admin\Media\MediaManagerComponent;
use App\Http\Livewire\Pages\Admin\Project\ProjectFormComponent;
use App\Http\Livewire\Pages\Admin\Project\ProjectListComponent;
use App\Http\Livewire\Pages\Admin\User\UserPermissionComponent;
use App\Http\Livewire\Pages\Admin\User\UserRolePermissionComponent;

Route::group([], function () {
    Route::get('/dashboard', AdminDashboardComponent::class)->name('dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/users', UserComponent::class)->middleware(['permission:view_users'])->name('users');
    Route::get('/user/{id}/edit', EditUserComponent::class)->middleware(['permission:edit_users'])->name('users.edit');
    Route::get('/user/create', EditUserComponent::class)->middleware(['permission:add_users'])->name('users.add');

    Route::get('/media/filemanager', MediaLibraryComponent::class)->middleware(['permission:view_blogs'])->name('media.filemanager');
    Route::get('/media/manager', MediaManagerComponent::class)->middleware(['permission:view_blogs'])->name('media.manager');

    Route::post('/media', [ImageController::class, 'storeMedia'])->name('post.storeMedia');
    Route::post('/media/store', [ImageController::class, 'store'])->name('post.store');

    Route::get('/user-permissions', UserPermissionComponent::class)->middleware(['permission:view_permissions'])->name('user-permissions');
    Route::get('/user-roles', UserRoleComponent::class)->middleware(['permission:view_roles'])->name('user-roles');
    Route::get('/user-role/{id}/permissions', UserRolePermissionComponent::class)->middleware(['permission:edit_role'])->name('user-role-permissions');
    Route::get('/user-role/create', UserRolePermissionComponent::class)->middleware(['permission:add_role'])->name('user-role-permissions-create');
    Route::get('/contacts', ContactMessageComponent::class)->middleware(['permission:view_contacts'])->name('contacts');
    Route::get('/settings', SiteSettingComponent::class)->middleware(['permission:manage_settings'])->name('settings');
    Route::get('/categories', CategoryComponent::class)->middleware(['permission:view_categories'])->name('categories');
    Route::get('/tags', TagComponent::class)->middleware(['permission:view_tags'])->name('tags');
    Route::get('/blogs', ViewBlogsComponent::class)->middleware(['permission:view_blogs'])->name('blogs');
    Route::get('/blogs/create', BlogFormComponent::class)->middleware(['permission:add_blog'])->name('blogs.add');
    Route::get('/blogs/{slug}/edit', BlogFormComponent::class)->middleware(['permission:edit_blog'])->name('blogs.edit');

    Route::get('/projects', ProjectListComponent::class)->middleware(['permission:view_projects'])->name('projects');
    Route::get('/projects/create', ProjectFormComponent::class)->middleware(['permission:add_project'])->name('projects.add');
    Route::get('/projects/{slug}/edit', ProjectFormComponent::class)->middleware(['permission:edit_project'])->name('projects.edit');

    Route::post('/gallery', [ImageController::class, 'gallery'])->name('img.gallery');

    Route::get('/clear-cache', function () {
        return redirect()->route('admin.dashboard')->with('success', 'Front End Cache Cleared Successfully');
    })->name('clear-cache');
});
