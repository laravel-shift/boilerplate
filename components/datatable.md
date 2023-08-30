---
title: Datatable
parent: Blade components
permalink: /components/datatable
---

# DataTable

**Boilerplate version >= 7.10**

```html
<x-boilerplate::datatable name="users" />
```

Will render

![](../assets/img/components/datatable.png)

## How to create a DataTable

[See the dedicated documentation](../datatables/create)

## Laravel 6

Laravel 6 does not support Blade x components, but you can use the `@component` directive instead :

```html
@component('boilerplate::datatable', ['name' => 'users']) @endcomponent
```