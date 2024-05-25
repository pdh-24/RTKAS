@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <h1 style="font-family: 'Manrope', sans-serif;font-style: normal;font-weight: normal;font-size: 28px;line-height: 38px;color: #8D8D8D;margin-bottom: 10px;">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Area Chart -->
            <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                      <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas id="performanceLine" width=""></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
</div>
        </div>
    </div>
@endsection