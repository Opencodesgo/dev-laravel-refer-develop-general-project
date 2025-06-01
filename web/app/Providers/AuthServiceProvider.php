<?php
/**
 * App，提供者，权限服务提供者
 */

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     * 应用程序的策略映射
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     * 注册任何验证服务
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
