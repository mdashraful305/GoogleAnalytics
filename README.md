# Laravel Analytics Integration Package

![Laravel Analytics](https://img.shields.io/badge/Laravel-Analytics-blue)

This Laravel package seamlessly integrates with Google Analytics, allowing you to effortlessly retrieve pageviews and other valuable data for your Laravel application. Powered by [spatie/laravel-analytics](https://github.com/spatie/laravel-analytics), this package simplifies the process of fetching analytics information and provides a clean, Laravel-friendly API for developers.

## Installation

You can install this package via Composer:

```bash
composer require spatie/laravel-analytics
```

## Configuration

1. After installation, publish the configuration file:

```bash
php artisan vendor:publish --provider="Spatie\LaravelAnalytics\LaravelAnalyticsServiceProvider" --tag="config"
```

2. Open the published configuration file located at `config/analytics.php` and set your Google Analytics tracking ID:

```php
return [

    'site_id' => env('ANALYTICS_SITE_ID', 'your-site-id'),

    // other configuration options...
];
```

Make sure to replace `'your-site-id'` with your actual Google Analytics tracking ID.

## Usage

### Retrieving Pageviews

To retrieve the pageviews for a specific period, you can use the `getVisitorsAndPageViews` method. For example:

```php
use Spatie\LaravelAnalytics\LaravelAnalyticsFacade as Analytics;

$analyticsData = Analytics::getVisitorsAndPageViews('7days');
```

This will return an array containing the number of visitors and pageviews for the last 7 days. You can customize the period by passing different time frames such as `'30days'`, `'365days'`, etc.

### Customizing Queries

This package provides a fluent query builder for more advanced queries. For example, to retrieve data for a specific page, you can use the following:

```php
use Spatie\LaravelAnalytics\LaravelAnalyticsFacade as Analytics;

$analyticsData = Analytics::fetchMostVisitedPages('7days', 10, null, '/custom-page');
```

This will return the top 10 most visited pages in the last 7 days, filtered by the URL path '/custom-page'.

## Support and Issues

If you encounter any issues or have questions about using this package, feel free to create an [issue on GitHub](https://github.com/spatie/laravel-analytics/issues).

## Contributing

Contributions are welcome! If you find a bug or have a suggestion for improvement, please open an issue or submit a pull request on the [GitHub repository](https://github.com/spatie/laravel-analytics).

## License

This Laravel Analytics package is open-source software licensed under the [MIT license](LICENSE.md).

---

**Note:** Make sure to consult the official [Google Analytics API documentation](https://developers.google.com/analytics/devguides/reporting/core/v4) for more details on available metrics and dimensions.

Enjoy using the Laravel Analytics package!
