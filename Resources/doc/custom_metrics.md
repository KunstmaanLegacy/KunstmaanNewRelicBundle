Custom Metrics
==============
To do newrelic custom metrics logging, you can dispatch an event like this:

```php
$container->get('event_dispatcher')->dispatch(Events::CUSTOM_METRIC, new CustomMetricEvent("Custom/Timing/MyTiming/", $value));
```

After your application sent the first metric, you can add it to your newrelic dashboard. When you want multiple lines in your chart you have to use names like "Custom/Timing/MyTiming/MyTimingLeft" and "Custom/Timing/MyTiming/MyTimingRight", then you can create a chart for "Custom/Timing/MyTiming" which will list all subnames.
