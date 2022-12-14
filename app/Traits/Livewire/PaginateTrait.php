<?php

namespace App\Traits\Livewire;

trait PaginateTrait
{
    public function getListPage($paginates){
        if(blank($paginates)){
            return [];
        }
        $page = $paginates->currentPage();
        $currentPage = (int)ceil(($paginates->currentPage())/10) ;
        $listPage = $this->findListPage($paginates);
        $prev = $currentPage == 0  ? false  : $paginates->url(collect($listPage)->first()-1);
        $next = collect($listPage)->last() < $paginates->lastPage() ? $paginates->url(collect($listPage)->last()+1) : false;
        $listPage = collect($listPage)->map(function($list) use ($paginates, $page){
           return [
               'label' => $list,
               'active' => $list == $page,
               'link' => $paginates->url($list)
           ] ;
        })->all();

        return ([
            'list_page' => $listPage,
            'prev' => $prev,
            'next' => $next,
            'a'=>$paginates->lastPage()
        ]);
    }

    private function findListPage($paginates){
        $page = ($paginates->currentPage())%10;
        $currentPage = (int)ceil(($paginates->currentPage())/10) ;
        $array = range(1, $paginates->lastPage());
        return collect($array)->chunk(10)->get($page == 0 ?$currentPage-1: $currentPage)->all();
    }
}
