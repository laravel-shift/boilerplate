---
title: Generate a widget
parent: Dashboard
permalink: /dashboard/generate
nav_order: 10
---

# Generate a dashboard widget

**Boilerplate version >= 7.24**

The dashboard is composed of configurable widgets. It is possible to generate these widgets using an artisan command.

## Artisan Command

To generate a new widget for the dashboard, you can use the following artisan command:

```
php artisan boilerplate:widget
```

You can also directly define the name of the widget to generate as an argument of the command:

```
php artisan boilerplate:widget "my awesome widget"
```

Using this command with this example, three files will be generated:

- **/app/Dashboard/MyAwesomeWidget.php**: class called for rendering the widget, functions like a view composer
- **/resources/views/dashboard/widgets/my-awesome-widget.blade.php**: the view of the widget that will be rendered
- **/resources/views/dashboard/widgets/my-awesome-widgetEdit.blade.php**: the view of the widget parameter editing form

## Next step

> [How to use the generated widget](widget_usage.md)