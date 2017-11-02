<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
     $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('continent', function ($breadcrumbs, $continent) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($continent->name, route('continent', ['name' => $continent->name]));
});

Breadcrumbs::register('country', function ($breadcrumbs, $continent, $country) {
    $breadcrumbs->parent('continent', $continent);
    $breadcrumbs->push($country->name, route('country', ['name' => $country->name]));
});

Breadcrumbs::register('city', function ($breadcrumbs, $continent, $country, $city) {
    $breadcrumbs->parent('country', $continent, $country);
    $breadcrumbs->push($city->name, route('city', ['name' => $city->name]));
});