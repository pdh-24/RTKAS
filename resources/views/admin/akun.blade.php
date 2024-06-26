@extends('layouts.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <p class="card-description"> Akun terkini
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Profile</th>
                      <th>VatNo.</th>
                      <th>Created</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jacob</td>
                      <td>53275531</td>
                      <td>12 May 2017</td>
                      <td><label class="badge badge-danger">Pending</label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection