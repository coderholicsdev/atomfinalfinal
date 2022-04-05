@extends('dashlayout')
@section('contents')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3>Loans Dashboard</h3>
                    </div>

                    <div class="toggle-switch">
                        <label class="switch s-icons s-outline  s-outline-secondary">
                            <input type="checkbox" checked="" class="theme-shifter">
                            <span class="slider round">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="row layout-top-spacing">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Statistics</h6>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="w-chart">
                                @if($loan_history != null)

                                <div class="w-chart-section total-visits-content">
                                    <div class="w-detail">
                                        <p class="w-title">Total Loans</p>

                                            <p class="w-stats">#{{$loan_amount_total}}</p>

                                    </div>
                                </div>
                                <div class="w-chart-section paid-visits-content">
                                    <div class="w-detail">
                                        <p class="w-title">loans + interest</p>

                                        <p class="w-stats">#{{ $total_loan}}</p>

                                    </div>
                                    <div class="w-chart-render-one">
                                        <div id="paid-visits"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row layout-top-spacing ">
                            <div class="col-md-12 layout-spacing">
                                <div class="widget widget-one">
                                    @include('modal notification.notification')
                                    <?php
                                    echo date("l jS \of F Y h:i:s A");
                                    ?>
                                    <div class="widget-heading">
                                        <h6 class="">Enter Your Loan Details</h6>
                                    </div>
                                    <form action="{{route('apply-loan')}}" method="post" class="bg-white" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="loan_amount_needed">Amount</label>
                                                <input value="{{old('loan_amount')}}" type="number"    name="loan_amount"
                                                       id="loan_amount_needed" class="form-control" required autocomplete="off"
                                                        placeholder="Amount">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="loan_amount_needed">Tenure type</label>
                                                <select value="{{old('tenure_type')}}"  id="firstSelect" name="tenure_type" class="form-control" required>
                                                    <option value="0" selected="selected">Loan Terms</option>
                                                    <option value="1">Daily</option>
                                                    <option value="2">Monthly</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="loan_amount_needed">Tenure duration</label>
                                                <select value="{{old('tenure_duration')}}"   class="select form-control" id="secondSelect" required name="tenure_duration" >
                                                    <option value="0" selected="selected">Duration</option>
                                                    <option class="conditional 1" value="1">1 Day</option>
                                                    <option class="conditional 1" value="2">2 Days</option>
                                                    <option class="conditional 1" value="3">3 Days</option>
                                                    <option class="conditional 1" value="4">4 Days</option>
                                                    <option class="conditional 1" value="5">5 Days</option>
                                                    <option class="conditional 1" value="6">6 Days</option>
                                                    <option class="conditional 1" value="7">7 Days</option>
                                                    <option class="conditional 1" value="8">8 Days</option>
                                                    <option class="conditional 1" value="9">9 Days</option>
                                                    <option class="conditional 1" value="10">10 Days</option>
                                                    <option class="conditional 1" value="11">11 Days</option>
                                                    <option class="conditional 1" value="12">12 Days</option>
                                                    <option class="conditional 1" value="13">13 Days</option>
                                                    <option class="conditional 1" value="14">14 Days</option>
                                                    <option class="conditional 1" value="15">15 Days</option>
                                                    <option class="conditional 1" value="16">16 Days</option>
                                                    <option class="conditional 1" value="17">17 Days</option>
                                                    <option class="conditional 1" value="18">18 Days</option>
                                                    <option class="conditional 1" value="19">19 Days</option>
                                                    <option class="conditional 1" value="20">20 Days</option>
                                                    <option class="conditional 1" value="21">21 Days</option>
                                                    <option class="conditional 1" value="22">22 Days</option>
                                                    <option class="conditional 1" value="23">23 Days</option>
                                                    <option class="conditional 1" value="24">24 Days</option>
                                                    <option class="conditional 1" value="25">25 Days</option>
                                                    <option class="conditional 1" value="26">26 Days</option>
                                                    <option class="conditional 1" value="27">27 Days</option>
                                                    <option class="conditional 1" value="28">28 Days</option>
                                                    <option class="conditional 1" value="29">29 Days</option>
                                                    <option class="conditional 1" value="30">30 Days</option>
                                                    <option class="conditional 1" value="31">31 Days</option>
                                                    {{-- MONTHLY OPTIONS --}}
                                                    <option class="conditional 2" value="1">1 Month</option>
                                                    <option class="conditional 2" value="2">2 Months</option>
                                                    <option class="conditional 2" value="3">3 Months</option>
                                                    <option class="conditional 2" value="4">4 Months </option>
                                                    <option class="conditional 2" value="5">5 Months</option>
                                                    <option class="conditional 2" value="6">6 Months</option>
                                                    <option class="conditional 2" value="7">7 Months</option>
                                                    <option class="conditional 2" value="8">8 Months</option>
                                                    <option class="conditional 2" value="9">9 Months</option>
                                                    <option class="conditional 2" value="10">10 Months</option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group mb-4 col-md-4">
                                                <label for="inputAddress">collateral image 1</label>
                                                <input value="{{old('collateral_1')}}" type="file" name="collateral_1" class="form-control" id="inputcollateral" placeholder="collateral image" required>
                                            </div>
                                            <div class="form-group mb-4 col-md-4">
                                                <label for="inputcollateral">collateral image 2</label>
                                                <input value="{{old('collateral_2')}}" type="file" name="collateral_2" class="form-control" id="inputcollateral" placeholder="collateral image" required>
                                            </div>
                                            <div class="form-group mb-4 col-md-4">
                                                <label for="inputcollateral">collateral receipt image</label>
                                                <input value="{{old('collateral_receipt')}}" type="file" name="collateral_receipt" class="form-control" id="inputcollateral" placeholder="collateral receipt" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn atom-btn mt-3">Sign in</button>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-five">

                            <div class="widget-heading">
                                <h5 class="">Loan History</h5>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="w-shadow-top"></div>

                                <div class="mt-container mx-auto h-auto overflow-auto">
                                    <div class="timeline-line">
                                        @if($loan_history )
                                        @foreach($loan_history as $loan)

                                        <div class="item-timeline timeline-new">
                                            @if($loan->loan_state === 'active')
                                            <div class="t-dot">
                                                <div class="t-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            @else
                                            <div class="t-dot">
                                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-times"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                            </div>
                                            @endif
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>{{$loan->loan_amount}} : <a href="javscript:void(0);">
                                                                @if($loan->loan_state === 'active')
                                                                    <span>[{{$loan->loan_state}}]</span>
                                                                @elseif($loan->loan_state === 'pending')
                                                                    <span class="pending-text" >[{{$loan->loan_state}}]</span>
                                                                @else
                                                                <span class="text-danger">[{{$loan->loan_state}}]</span>
                                                            @endif

                                                                </a></h5>
                                                </div>
                                                <p>{{$loan->created_at->diffForHumans()}}</p>
                                            </div>
                                        </div>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <svg> ... </svg>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="w-shadow-bottom"></div>
                            </div>
                        </div>
                    </div>


                </div>
            @endif
            loan no history

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection

