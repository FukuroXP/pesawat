@extends('layouts.admin')

@section('title',"PVKTI Admin Panel")

@section('content')


<div class="content-header row">
</div>
<div class="content-body">
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card bg-analytics text-white">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="{{ asset('admin_assets/app-assets/images/elements/decore-left.png')}}" class="img-left" alt="
card-img-left">
                            <img src="{{ asset('admin_assets/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="
card-img-right">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="feather icon-award white font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-2 text-black">Selamat datang,</h1>
{{--                                @if(auth()->user()->role_id == 2 && auth()->user()->image == NULL && auth()->user()->phone == NULL)--}}
{{--                                <h6>Silahkan lengkapi profile anda terlebih dahulu untuk dapat mengkases halaman Membership</h6>  <a href="{{route('profiles.index')}}" style="cursor: pointer;"><label class="badge badge-info text-center" style="cursor: pointer;">Silahkan klik disini!</label></a>--}}
{{--                                @else--}}
                                <h6 class="m-auto w-90 text-success">Semoga hari anda menyenangkan.</h6>
{{--                                @endif--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($x = 1)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-clipboard text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">2</h2>
                        <p class="mb-0">All Report</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-list text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">2</h2>
                        <p class="mb-0">Report Reason</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-check text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">2</h2>
                        <p class="mb-0">Validated Report</p>
                    </div>
                    <div class="card-content">
                        <div id="orders-received-chart"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">2</h2>
                        <p class="mb-0">Users</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                </div>
            </div>
            @else
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-clipboard text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">2</h2>
                            <p class="mb-0">All Report</p>
                        </div>
                        <div class="card-content">
                            <div id="subscribe-gain-chart"></div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-success p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-check text-success font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">2</h2>
                            <p class="mb-0">Validated Report</p>
                        </div>
                        <div class="card-content">
                            <div id="orders-received-chart"></div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        @if($x=1)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Recently Report</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive mt-1">

                            <table class="table table-hover-animation mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Owner/FLT NR</th>
                                        <th>Departure</th>
                                        <th>Arrival</th>
                                        <th>ATD (UTC)</th>
                                        <th>ATA (UTC)</th>
                                        <th>Report Reason</th>
                                        <th>Location</th>
                                        <th>Detail</th>
                                        <th>Time of Observation</th>
                                        <th>Validation</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="btn-edit badge badge-pill badge-primary" style="cursor: pointer;" data-href=""><i class="feather icon-edit" title="Edit"> Edit</i></span>
                                        <span class="action-delete badge badge-pill badge-danger" style="cursor: pointer;" data-href=""><i class="feather icon-trash" title="Delete"> Delete</i></span>
                                    </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">History Report</h4>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive mt-1">

                                <table class="table table-hover-animation mb-0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Owner/FLT NR</th>
                                        <th>Departure</th>
                                        <th>Arrival</th>
                                        <th>ATD (UTC)</th>
                                        <th>ATA (UTC)</th>
                                        <th>Report Reason</th>
                                        <th>Location</th>
                                        <th>Detail</th>
                                        <th>Time of Observation</th>
                                        <th>Validation</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <span class="btn-edit badge badge-pill badge-primary" style="cursor: pointer;" data-href=""><i class="feather icon-edit" title="Edit"> Edit</i></span>
                                            <span class="action-delete badge badge-pill badge-danger" style="cursor: pointer;" data-href=""><i class="feather icon-trash" title="Delete"> Delete</i></span>
                                        </td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- Dashboard Analytics end -->

<div class="modal fade action-modal" id="xlarge" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true"></div>

</div>
<!-- END: Content-->

@endsection

@section('js')
    <script>

        $('.btn-confirm').on('click', function(e){
            var t = $('.action-modal');
            $.ajax({
                url: $(this).data('href'),
                dataType: "html",
                success: function(e) {
                    $(t).html(e).modal("show")
                }
            })
        })

     </script>
@endsection
