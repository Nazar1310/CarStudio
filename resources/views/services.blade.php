@extends('layouts.main')
@section('title', 'Перелік послуг для захисту та догляду вашого автомобіля від детейлінг студії в Івано-Франківську - CarStudio')
@section('meta_description', $seoDescription)
@section('content')
    @include('layouts.page-header',['title'=>'Наші Послуги','name'=>'Послуги'])
    @include('layouts.service-list')
    @include('layouts.advice-form',['bg'=>true])
    @include('layouts.phone-number')
@stop
