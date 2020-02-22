@extends('layouts.app', ['activePage' => 'test_reports', 'titlePage' => __('Test Reports')])

@section('content')




<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            {{-- ist card  --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Tests Completed</p>
                  <h3 class="card-title">25
                    {{-- <small>GB</small> --}}
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">View all test report</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Tests Today</p>
                  <h3 class="card-title">15</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> View all test report
                  </div>
                </div>
              </div>
            </div>
            {{-- 3rd card --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">
                      question_answer
                      </i>
                  </div>
                  <p class="card-category">Tests Scheduled</p>
                  <h3 class="card-title">5</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> View all test report
                  </div>
                </div>
              </div>
            </div>
            {{-- button --}}

            <div class="col-lg-3 col-md-6 col-sm-6" >
              <br>
              <button type="submit" class="btn btn-lg btn-primary" style="width: 100%"><span class="fa fa-plus"></span> {{ __('Create Test') }}</button>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                      <div class="card-icon">
                          <i class="material-icons">assignment_turned_in</i>
                      </div>
                      <p class="card-category">Tests Scheduled Today</p>
                  </div>
                  <div class="card-body">
                      <table class="table table-condensed">
                          <thead>
                            <th>#</th><th>Test</th><th>Completion Status</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="4">No Tests scheduled today</td>
                            </tr>
                          </tbody>
                      </table>
                  </div>
                  <div class="card-footer">
                      <div class="stats">
                          <i class="material-icons">timeline</i>
                          <a href="/instadmin/testreport">View Full Test Reports</a>
                      </div>
                  </div>
              </div>
          </div>
        
          <div class="col-lg-6 col-md-6">
              <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                      <div class="card-icon">
                          <i class="material-icons">assignment_turned_in</i>
                      </div>
                      <p class="card-category">Ongoing Tests Status</p>
                  </div>
                  <div class="card-body">
                      <table class="table table-condensed">
                          <thead>
                          <th>#</th>
                          <th>Test</th>
                          <th>Completion Status</th>
                          </thead>
                          <tbody>
        
                          <tr><td colspan="4">No Tests Ongoing</td></tr>
                          </tbody>
                      </table>
                  </div>
                  <div class="card-footer">
                      <div class="stats">
                          <i class="material-icons">timeline</i>
                          <a href="/instadmin/testreport">View Full Test Reports</a>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Completed Tests</h4>
              <p class="card-category">Reports and Status of Completed Tests</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>Test ID</th><th>Test Name</th><th>Time Details</th><th>Course</th><th>Batch</th><th>Student Attendance</th><th>Action</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td><td>test 1</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>2</td><td>test 2</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>3</td><td>test 3</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>4</td><td>test 4</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>5</td><td>test 5</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>6</td><td>test 6</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>7</td><td>test 7</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                    <tr>
                      <td>8</td><td>test 8</td><td>19 Feb 2020 5:12:35 PM<br>19 Feb 2020 5:42:35 PM</td><td>neet 2020</th><th>A,B,C,D</td><td class="text-primary">0/4</td><td><button type="submit" class="btn btn-primary">{{ __('publish rank list') }}</button> <button type="submit" class="btn btn-primary">{{ __('View rank list') }}</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>        
@endsection