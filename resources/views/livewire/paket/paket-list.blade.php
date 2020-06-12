<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @if(session()->has('success'))
                    <div class="div alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h4 class="card-title">Paket Wilayah III</h4>
                    <div class="form-group float-right">
                        {{-- <a type="button" class="btn btn-primary btn-block my-1 btn-sm"
                            href="{{ route('paket.create') }}">Add Paket</a> --}}
                    </div>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" id="txtSearch" placeholder="Search..."
                                    wire:model="search">
                            </div>
                        </div>
                            <table class="table table-table-responsive" style="margin-top:20px;">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Paket</td>
                                    <td>Pagu</td>
                                    <td>Action</td>
                                    <td></td>
                                </tr>

                                @foreach($datapaket as $row)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$row->nmpaket}}</td>
                                    <td>{{$row->pagurmp}}</td>
                                    <td>
                                        <a href="#"><i class="fa fa-edit blue"></i></a>
                                        |
                                        <a href="#"
                                            onclick="confirm('Are you sure! you want to delete this?')|| event.stopPropagation()"
                                            wire:click="destroy({{$row->id}})"><i class="fa fa-trash red"></i></a>
                                    </td>
                                    {{-- <td><input type="checkbox"></td> --}}
                                </tr>
                                @endforeach
                            </table>
                            {{ $datapaket->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>