@extends('admin.template')

@section('main-title','Quản lý tự vựng')

@section('sub-title','Thêm từ mới')

@section('content')
<form class="form-horizontal" role="form" action="{!! route('admin.word.postAdd') !!}" method="POST">
    <div class="form-group">
        <label class="control-label col-sm-2" for="word">Từ:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="word" name="word" value="{!! old('word') !!}" placeholder="Nhập từ" required="required">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Từ loại:</label>
        <div class="col-sm-8">
            <label class="checkbox-inline"><input type="checkbox" name="type[]" value="N">Danh từ</label>
            <label class="checkbox-inline"><input type="checkbox" name="type[]" value="V">Động từ</label>
            <label class="checkbox-inline"><input type="checkbox" name="type[]" value="Adj">Tính từ</label>
            <label class="checkbox-inline"><input type="checkbox" name="type[]" value="Adv">Trạng từ</label>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="spell">Phát âm:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="spell" name="spell" value="{!! old('spell') !!}" placeholder="Nhập phát âm" required="required">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="means">Nghĩa:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="means" name="means" value="{!! old('means') !!}" placeholder="Nhập nghĩa" required="required">
        </div>
    </div>

    <?php
    $sh_id = 'chil_list';
    $sh_check = '';
    $sh_title = 'Từ đi kèm';
    $list_id = 'chil_list';
    $list_data = '<div class="form-group">
                    <div class="col-sm-3"><input type="text" class="form-control" name="chil[0][word]" placeholder="Nhập từ"></div>
                    <div class="col-sm-3"><input type="text" class="form-control" name="chil[0][spell]" placeholder="Nhập phát âm"></div>
                    <div class="col-sm-3">
                        <label class="checkbox-inline"><input type="checkbox" name="chil[0][type][]" value="N">N</label>
                        <label class="checkbox-inline"><input type="checkbox" name="chil[0][type][]" value="V">V</label>
                        <label class="checkbox-inline"><input type="checkbox" name="chil[0][type][]" value="Adj">Adj</label>
                        <label class="checkbox-inline"><input type="checkbox" name="chil[0][type][]" value="Adv">Adv</label>
                    </div>
                    <div class="col-sm-3"><input type="text" class="form-control" name="chil[0][means]" placeholder="Nhập nghĩa"></div>
                </div>';
    $list_data_add = '<div class="form-group">
                    <div class="col-sm-3"><input type="text" class="form-control" name="chil[id][word]" placeholder="Nhập từ"></div>
                    <div class="col-sm-3"><input type="text" class="form-control" name="chil[id][spell]" placeholder="Nhập phát âm"></div>
                    <div class="col-sm-3">
                        <label class="checkbox-inline"><input type="checkbox" name="chil[id][type][]" value="N">N</label>
                        <label class="checkbox-inline"><input type="checkbox" name="chil[id][type][]" value="V">V</label>
                        <label class="checkbox-inline"><input type="checkbox" name="chil[id][type][]" value="Adj">Adj</label>
                        <label class="checkbox-inline"><input type="checkbox" name="chil[id][type][]" value="Adv">Adv</label>
                    </div>
                    <div class="col-sm-3"><input type="text" class="form-control" name="chil[id][means]" placeholder="Nhập nghĩa"></div>
                </div>';
    ?>
    @include('block.showhide')
    @include('block.list')

    <div class="form-group">
        <div class="col-sm-offset-10">
            <button type="submit" class="btn btn-default">Thêm</button>
        </div>
    </div>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
</form>
@stop

@section('script')
@parent
<script src="{!! url('public/js/list-items.js') !!}"></script>
@endsection