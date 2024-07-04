@extends('layout.web')
@section('title','Menu')
@section('content')
<x-banner title="Our Menu" />
<div class="lgx-page-wrapper lgx-page-wrapper-none">

    <div class="lgx-page-wrapper">
        <div class="container">
            <div class="lgx-menu-card-area">
                <div class="lgx-menu-card">
                    <!--//.menu-card-nav-->
                    <div class="lgx-menu-card-Items content" style="width: 100% !important">
                        <div id="lgx-breakfast" class="lgx-item-cat theiaStickySidebar">

                            <div id="breakfast" class="cat-main breakfast">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h3 class="cat-title">Starter`s</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','STARTERS')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading2">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                    <h3 class="cat-title">Chicken/Poulet</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','CHICKEN')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading6">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                    <h3 class="cat-title">Lamb/Agneau</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','LAMB')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading3">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                    <h3 class="cat-title">Beef/Bœuf</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','Beef')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading4">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                    <h3 class="cat-title">Fish/Poissons</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading4">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','FISH')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading5">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                    <h3 class="cat-title">Vegeterian/Végétariens</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading5">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','VEGETERIAN')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                    <h3 class="cat-title">Menus Children/enfant</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading8">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','CHILDREN')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading9">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                    <h3 class="cat-title">Les Garnitures/Naan</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading9">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','NAAN')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading10">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                    <h3 class="cat-title">Rice/Riz</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse10" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading10">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','RICE')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default lgx-panel">
                                        <div class="panel-heading" role="tab" id="heading11">
                                            <div class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                    <h3 class="cat-title">Desert/Desserts</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading11">
                                            <div class="panel-body">
                                                @foreach(\App\Models\Menu::where('type','DESERT')->get() as $mData)
                                                <div class="lgx-item-card">
                                                    <a href="#">
                                                        <div class="menu-info">
                                                            <div class="info-left table-width">
                                                            <div>
                                                                <h3 class="title">{{ $mData->name }}</h3>
                                                                <p class="text">{{ $mData->details }}</p>
                                                            </div>
                                                                <div class="menu-price ">
                                                                    <span>Chf {{ $mData->price }}/-</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
