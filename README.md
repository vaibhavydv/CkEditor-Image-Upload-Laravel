# CK EDITOR Image Upload by Vaibhav

# Controllar  

```
app/Http/Controllers/CkeditorController.php
```

# View
```
resources/views/ckeditor.blade.php
```
# Routes 

```
routes/web.php

Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
```


Credit 

Vaibhav Yadav
