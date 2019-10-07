@extends('layouts.app')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">ဌာနများ</h3>
      <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        <a href="{{ route('admin.create-department') }}" class="btn btn-success">ဌာနအသစ်ထည့်သွင်းရန်</a>
    </div>
    <!-- /.box-tools -->
</div>
<!-- /.box-header -->
<div class="box-body">
    @if($Departments->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">ဌာနအမည်များ</th>
                    <th scope="col">prefix</th>
                    <th scope="col" class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Departments as $Department)
                <tr>

                    <td> {{ $Department->name }}</td>
                    <td> {{ $Department->prefix }}</td>
                    <td class="text-right no-wrap">

                        <form action="{{ route('admin.destroy-department',$Department->id) }}" method="POST">

                            <a class="btn btn-success" href="{{ route('admin.view-department', ['id' => $Department->id]) }}">ဌာနစိတ်များ</a> 

                            <a class="btn btn-warning" href="{{ route('admin.edit-department', ['id' => $Department->id]) }}">ပြင်ဆင်ရန်</a>  
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">ဖျက်ရန်</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <hr>
    <h3>မရှိပါ<h3>
        @endif
    </div>
    <!-- /.box-body -->
    {{-- <div class="box-footer">
      The footer of the box
  </div> --}}
  <!-- box-footer -->
</div>
<!-- /.box -->


@endsection
