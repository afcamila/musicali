<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            $professores = User::whereHas('roles', function($q)
            {
                $q->where('name', 'professor');
            })->orderBy('name', 'asc')->get();

            $alunos = User::whereHas('roles', function($q)
            {
                $q->where('name', 'aluno');
            })->orderBy('created_at', 'desc')->take(5)->get();

            view()->share('professoresSidebar', $professores);
            view()->share('alunosSidebar', $alunos);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
