<?php
	// роуты состоят из запроса и строки
	return array(
		

		"product/([0-9]+)" => "product/view/$1",

		"aromacatalog" => "aromacatalog/index",
		"aromavape/([0-9]+)/page-([0-9]+)" => "aromacatalog/aromavape/$1/$2",
		"aromavape/([0-9]+)" => "aromacatalog/aromavape/$1",

		"samozames/([0-9]+)/page-([0-9]+)" => "zames/samozames/$1/$2",
		"samozames/([0-9]+)" => "zames/samozames/$1",

		"eliquidvape/([0-9]+)/page-([0-9]+)" => "eliquid/eliquidvape/$1/$2",
		"eliquidvape/([0-9]+)" => "eliquid/eliquidvape/$1",

		"cart/add/([0-9]+)" => "cart/add/$1",
		"cart/addAjax/([0-9]+)" => "cart/addAjax/$1",
		"cart/detele/([0-9]+)" => "cart/delete/$1",
		"cart" => "cart/index",
		// "cart/checkout" => "cart/checkout",
		// пользователь
		"user/register" => "user/register",
		"user/login" => "user/login",
		"user/logout" => "user/logout",
		"cabinet/edit" => "cabinet/edit",
		"cabinet" => "cabinet/index",
		// Управление товарами
		"admin/product/create" => "adminProduct/create",
		"admin/product/update/([0-9]+)" => "adminProduct/update/$1",
		"admin/product/delete/([0-9]+)" => "adminProduct/delete/$1",
		"admin/product" => "adminProduct/index",
		// Управление категориями
		"admin/category/create" => "adminCategory/create",
		"admin/category/update/([0-9]+)" => "adminCategory/update/$1",
		"admin/category/delete/([0-9]+)" => "adminCategory/delete/$1",
		"admin/category" => "adminCategory/index",
		// Управление заказами
		"admin/order/update/([0-9]+)" => "adminOrder/update/$1",
		"admin/order/delete/([0-9]+)" => "adminOrder/delete/$1",
		"admin/order/view/([0-9]+)" => "adminOrder/view/$1",
		"admin/order" => "adminOrder/index",
		// Админ-панель
		"admin" => "admin/index",

		"contacts" => "site/contact",
		// Оплата и доставка
		"payments" => "payments/index",
		// О нас
		"about" => "about/index",
		// Словарь
		"vapebook" => "vapebook/index",
		// Рецепты
		"vaperecipes" => "vaperecipes/index",
		// e-liquid
		"eliquid" => "eliquid/index",
		// самозамесы
		"zames" => "zames/index",

		"" => "site/index",
	);