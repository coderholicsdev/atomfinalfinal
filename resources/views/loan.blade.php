@extends('dashlayout')
@section('contents')
    <div class="container m-top">
        <div class="layout-top-spacing widget widget-one">
        @include('modal notification.notification')
        <?php
        echo date("l jS \of F Y h:i:s A");
        ?>
        <form action="{{route('apply-loan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label for="loan_amount_needed">Amount</label>
                    <input value="{{old('loan_amount')}}" type="number" step="1000" min="5000" max="100000" value="5000" name="loan_amount"
                           id="loan_amount_needed" class="form-control" required autocomplete="off"
                           onkeyup="sum();" oninput="sum()" onchange="sum()"   placeholder="Amount">
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
                        <option class="conditional 2" value="01">1 Month</option>
                        <option class="conditional 2" value="02">2 Months</option>
                        <option class="conditional 2" value="03">3 Months</option>
                        <option class="conditional 2" value="04">4 Months </option>
                        <option class="conditional 2" value="05">5 Months</option>
                        <option class="conditional 2" value="06">6 Months</option>
                        <option class="conditional 2" value="07">7 Months</option>
                        <option class="conditional 2" value="08">8 Months</option>
                        <option class="conditional 2" value="09">9 Months</option>
                        <option class="conditional 2" value="010">10 Months</option>
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

@endsection
