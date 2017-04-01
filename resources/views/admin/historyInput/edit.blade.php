@extends('layouts.admin')
@section('title', 'khách hàng')
@section('pageHeader','khách hàng')
@section('detailHeader','thông tin')

@section('content')

    <div class="row">
        <br>
        <div class="col-md-12 col-xs-12">
            <!-- Name and Description -->
            <div class="">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-kho">
                            <h4 class="text-center">Chi tiết nhập hàng ngày {{$date}}</h4>
                            <table class="table table-striped table-hover ">
                                <thead>
                                <tr>
                                    <th>Thời gian</th>
                                    <th>Mã phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số luợng nhập</th>
                                    <th>Số tiền nhập</th>
                                    {{--<th>Số tiền bán</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $total_price_in=0;
                                    $total_num=0;
                                ?>
                              @foreach($productUpdatePrice as $item)
                                <tr>
                                    <td>{{$item->created_at->format('h:i')}}</td>
                                    <td>#{{$item->product_id}}</td>
                                    <td>{{\App\Product::getNameById($item->product_id)}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->price_in}} VNĐ</td>
                                    {{--<td>{{$item->price_out}} VNĐ</td>--}}
                                    <?php
                                    $total_num +=$item->number;
                                    $total_price_in +=$item->price_in;
                                    ?>
                                </tr>
                                    @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$total_num}}</td>
                                    <td>{{$total_price_in}} VNĐ</td>
                                    {{--<td>{{$item->price_out}} VNĐ</td>--}}
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @endsection


    @section('add_scripts')
            <!-- jQuery Tags Input -->
    <script src="{{asset('plugin/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script>
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }

        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }

        $(document).ready(function () {
            $('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
    <!-- /jQuery Tags Input -->

    <script src="{{asset('js/selectize.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('select').selectize({
            create: true,
            sortField: 'text'
        });
    </script>
    <script>
        $('.info-kho,.info-warehouse').click(function(){
            $(this).find('input').removeAttr('disabled');
            $(this).find('.btn-update').css('display','block');

        })
        $('button.btn-update').click(function(){
//            alert("dsds");
//            $(this).closest().find('input').attr('disabled');
//            $('button.btn-update').css('display','none');
        })
    </script>

@endsection