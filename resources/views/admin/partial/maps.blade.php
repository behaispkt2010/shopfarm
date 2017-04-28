<?php
echo '<script type="text/javascript">
    //dropdown example
    var LocsA = ['?>
@foreach($location as $item)
    {
    lat:{{$item->lat}},
    lon:{{$item->lon}},
    title: '{{$item->name}}',
    icon: '{{$item->description}}',
    html: [
    '<h3>{{$item->name}}</h3>',
    '<p>{{$item->address}}</p>'
    ].join(''),
    zoom: 16,
    },
@endforeach
<?php echo'];
    </script>'?>