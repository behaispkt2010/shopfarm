<?php
echo '<script type="text/javascript">
    //dropdown example
    var LocsA = ['?>
@foreach($location as $item)
    {
    lat:{{$item->lat}},
    lon:{{$item->lon}},
    title: '{{$item->name}}',
    icon: 'http://maps.google.com/mapfiles/markerA.png',
    html: [
    '<h3>{{$item->name}}</h3>',
    '<p>{{$item->phone_number}}</p>',
    '<p>{{$item->address}}</p>',
    '<p>{{\App\Util::UserCode($item->users_id)}}</p>'
    ].join(''),
    zoom: 16,
    },
@endforeach
<?php echo'];
    </script>'?>