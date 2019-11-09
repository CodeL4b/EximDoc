<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('consigneedetail','ConsigneeDetailController');
Route::resource('bankdetail','BankDetailController');
Route::resource('productdetail','ProductDetailController');
Route::resource('currency','CurrencyController');

Route::resource('proformainvoice','ProformaInvoiceController');

Route::resource('paymentreceiptentry','PaymentReceiptEntryController');

Route::resource('generatedoc','GenerateDocController');

Route::resource('bankcollectionletter','BillCollectionLetterController');
Route::resource('billexchange','BillExchangeController');

Route::resource('generatereport','GenerateReportController');

Route::resource('changepassword','ChangePasswordController');

Route::resource('paymentplan','PaymentPlanController');

Route::view('planinvoice', 'planinvoice.index');